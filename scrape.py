import requests
from bs4 import BeautifulSoup, SoupStrainer
import mysql.connector
import re

link_base = "https://members.parliament.uk/members/Commons?page="

list_of_links = []
for i in range(1, 34):
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
        link_member_full = "".join(link_member_letters) + "career"
        list_of_links.append(link_member_full)
#print(list_of_links)
#list_of_links.append("https://members.parliament.uk/member/4841/career")

mps_list = []

for mp_link in list_of_links:
    #print(mp_link)
    webpage = requests.get(mp_link)
    soup = BeautifulSoup(webpage.content, "html.parser")

    mp = []

    #get name
    name_raw = soup.find("h1")
    name_titles = name_raw.get_text()
    name_letters = []
    for letter in name_titles:
        name_letters.append(letter)
    #remove MP post-nominal
    del name_letters[-3:]
    #print(name_letters)

    #check for title: Rt Hon
    if name_letters[0] == "R" and name_letters[1] == "t":
        del name_letters[:7]
    #print(name_letters)

    #check for title: Dr
    if name_letters[0] == "D" and name_letters[1] == "r" and name_letters[2] == " ":
        del name_letters[:3]
    #print(name_letters)

    #check for title: Sir
    if name_letters[0] == "S" and name_letters[1] == "i" and name_letters[2] == "r" and name_letters[3] == " ":
        del name_letters[:4]
    #print(name_letters)

    #check for title: Ms
    if name_letters[0] == "M" and name_letters[1] == "s" and name_letters[2] == " ":
        del name_letters[:3]
    #print(name_letters)

    #return list as string
    name = "".join(name_letters)
    #print(name)
    mp.append(name)
    #print(mp)

    #link to image file (which has to be manually downloaded, stored, and renamed appropriately)
    link_beginning = "<img src=\"all_mps/"
    link_end = ".png\">"
    name_link = []
    for letter in name_letters:
        if letter != " ":
            name_link.append(letter.lower())
        else:
            name_link.append("_")
    picture_link = ""
    picture_link = link_beginning + picture_link.join(name_link) + link_end
    #print(picture_link)
    mp.append(picture_link)
    #print(mp)

    #get constituency
    constituency_tag = soup.select("a[href*=constituency] > div[class=card-inner] > div[class=content]> div[class=primary-info]")
    #print(constituency)
    constituency = ""
    for i in constituency_tag:
        constituency_raw = i.text
        constituency_char = []
        for letter in constituency_raw:
            constituency_char.append(letter)
        del constituency_char[:18]
        del constituency_char[-14:]
        constituency = "".join(constituency_char)
    #print(constituency)
    mp.append(constituency)

    #get party
    party_tag = soup.select("a[href*=partyid] > div[class=card-inner] > div[class=content]> div[class=primary-info]")
    #print(party_tag)
    party = ""
    for i in party_tag:
        party_raw = i.text
        party_char = []
        for letter in party_raw:
            party_char.append(letter)
        del party_char[:18]
        del party_char[-14:]
        party = "".join(party_char)
    #print(party)
    mp.append(party)

    #get intake year
    intake_tag = soup.select("a[href*=constituency] > div[class=card-inner] > div[class=info] > div[class=info-inner] > div[class=indicators-left]")
    #print(intake_tag)
    intake = ""
    for i in intake_tag:
        intake_raw = i.text
        intake_char = []
        for letter in intake_raw:
            intake_char.append(letter)
        del intake_char[-67:]
        intake = "".join(intake_char[-4:])
    #print(intake)
    mp.append(intake)
    #print(mp)

    #
    #Gov/Opposition posts are coded inconsistently. To find them, we see first need to find the h4 tags, and then execute the relevant code for each h4 tag, if found.
    #

    #find h4 tags
    post_tags = soup.select("h4")
    post_list = []
    for item in post_tags:
        for i in item:
            post_list.append(i)
    #print(post_list)

    #execute the relevant code for each h4 tag, if found
    if "Government post" in post_list:
        #print("Has or has had Government post")
        gov_post_list = soup.find_all('div', class_='primary-info')
        gov_post_raw = gov_post_list[2]
        for item in gov_post_raw:
            gov_post = item.strip()
        #print(gov_post)
        mp.append(gov_post)

        gov_post_dep_list = soup.find_all('div', class_='secondary-info')
        gov_post_dep_raw = gov_post_dep_list[1]
        for item in gov_post_dep_raw:
            gov_post_dep = item.strip()
        #print(gov_post_dep)
        mp.append(gov_post_dep)
    else:
        mp.append("no")
        mp.append("no")


    if "Opposition post" in post_list:
        #print("Has or has had Opposition post")

        opposition_post_tag = soup.select("div[class=card-list] > div[class=card]> div[class=card-inner] >  div[class=content] > div[class=primary-info]")
        for item in opposition_post_tag:
            for i in item:
                opposition_post = i.strip()
                #print(opposition_post)
                mp.append(opposition_post)

        opposition_post_dep_tag = soup.select("div[class=card-list] > div[class=card] > div[class=card-inner] >  div[class=content] > div[class=secondary-info]")
        for item in opposition_post_dep_tag:
            for i in item:
                opposition_post_dep = i.strip()
                #print(opposition_post_dep)
                mp.append(opposition_post_dep)
    else:
        mp.append("no")
        mp.append("no")

    if "Committee memberships" in post_list:
        #print("Has or has had Committee memberships")

        #get all references to committees past and present on the member's profile
        committee_tag = soup.select("[href*=committee]")
        #now determine which are present
        committee_tag_list = []
        for item in committee_tag:
            for i in item:
                str_i = str(i)
                if "Present" in str_i:
                    committee_tag_list.append(str_i)
        #print(committee_tag_list)

        #import commons committee list from separate file
        from commons_committee_list import *

        #for each committee, see if the MP currently sits on it, and if so record the committee
        select_committees = []
        for item in commons_committee_list:
            if item in str(committee_tag_list):
                select_committees.append(item)
        if select_committees:
            if len(select_committees) == 1:
                for item in select_committees:
                    mp.append(item)
            elif len(select_committees) > 1:
                for item in select_committees:
                    select_committees_str = "; ".join(select_committees)
                    mp.append(select_committees_str)
        else:
            mp.append("no")
    else:
        mp.append("no")

    #print("")
    #print(mp)
    mps_list.append(mp)

print(mps_list)
