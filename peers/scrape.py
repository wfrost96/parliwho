import requests
from bs4 import BeautifulSoup, SoupStrainer
import mysql.connector
import re

link_base = "https://members.parliament.uk/members/Lords?page="

list_of_links = []
for i in range(1, 40):
    link = link_base + str(i)
    webpage = requests.get(link)
    soup = BeautifulSoup(webpage.content, "html.parser")
    for a in soup.find_all("a", {"class":"card card-member"}):
        #print(a["href"])
        link_member_contact = a["href"]
        link_base_member = "https://members.parliament.uk"
        link_member = link_base_member + str(link_member_contact)
        link_member_letters = []
        for letter in link_member:
            link_member_letters.append(letter)
        del link_member_letters[-7:]
        link_member_full = "".join(link_member_letters) + "focus"
        list_of_links.append(link_member_full)
#print(list_of_links)
#list_of_links.append("https://members.parliament.uk/member/3710/focus")

mps_list = []

for mp_link in list_of_links:
    #print(mp_link)
    webpage = requests.get(mp_link)
    soup = BeautifulSoup(webpage.content, "html.parser")

    mp = []

    #get name
    name_raw = soup.find("h1")
    name = name_raw.get_text()
    mp.append(name)

    #get interests
    interests_tag = soup.select("div[class=card] > div[class=card-inner] > div[class=content] > div[class=primary-info]")
    if interests_tag:
        interests = []
        for i in interests_tag:
            interest = i.text.strip()
            interests.append(interest)
        #print(interests)
    else:
        interests = []
        interests.append("No stated interests.")

    mp.append(interests)

    #finally, append mp to mps_list
    mps_list.append(mp)

print(mps_list)
