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

mps_list = []

def get_name(soup):
    name_raw = soup.find("h1")
    name_titles = name_raw.get_text()

    for letter in name_titles:
        name_letters.append(letter)

    #remove MP post-nominal
    del name_letters[-3:]
    #check for title: Rt Hon
    if name_letters[0] == "R" and name_letters[1] == "t":
        del name_letters[:7]
    #check for title: Dr
    if name_letters[0] == "D" and name_letters[1] == "r" and name_letters[2] == " ":
        del name_letters[:3]
    #check for title: Sir
    if name_letters[0] == "S" and name_letters[1] == "i" and name_letters[2] == "r" and name_letters[3] == " ":
        del name_letters[:4]
    #check for title: Mr
    if name_letters[0] == "M" and name_letters[1] == "r" and name_letters[2] == " ":
        del name_letters[:3]
    #check for title: Ms
    if name_letters[0] == "M" and name_letters[1] == "s" and name_letters[2] == " ":
        del name_letters[:3]

    #return list as string
    name = "".join(name_letters)
    return(name)

def get_picture_link(name):
    link_beginning = "<img src=\"all_mps/"
    link_end = ".png\">"
    name_link = []
    for letter in name:
        if letter != " ":
            name_link.append(letter.lower())
        else:
            name_link.append("_")
    picture_link = ""
    picture_link = link_beginning + picture_link.join(name_link) + link_end
    return picture_link

import gender_guesser.detector
def get_mp_gender(name):
    firstname = name.split()[0]
    d = gender_guesser.detector.Detector()
    gender = d.get_gender(firstname)

    if gender == "male":
        gender = "m"
    elif gender == "mostly_male":
        gender = "m"
    elif gender == "female":
        gender = "f"
    elif gender == "mostly_female":
        gender = "f"
    else:
        gender = "unknown"

    return gender

def get_constituency(soup):
    constituency_tag = soup.select("a[href*=constituency] > div[class=card-inner] > div[class=content]> div[class=primary-info]")
    constituency = ""
    for i in constituency_tag:
        constituency_raw = i.text
        constituency_char = []
        for letter in constituency_raw:
            constituency_char.append(letter)
        del constituency_char[:18]
        del constituency_char[-14:]
        constituency = "".join(constituency_char)
    return constituency

def get_party(soup):
    party_tag = soup.select("a[href*=partyid] > div[class=card-inner] > div[class=content]> div[class=primary-info]")
    party = ""
    for i in party_tag:
        party_raw = i.text
        party_char = []
        for letter in party_raw:
            party_char.append(letter)
        del party_char[:18]
        del party_char[-14:]
        party = "".join(party_char)
    return party

def get_intake(soup):
    intake_tag = soup.select("a[href*=constituency] > div[class=card-inner] > div[class=info] > div[class=info-inner] > div[class=indicators-left]")
    intake = ""
    for i in intake_tag:
        intake_raw = i.text
        intake_char = []
        for letter in intake_raw:
            intake_char.append(letter)
        del intake_char[-67:]
        intake = "".join(intake_char[-4:])
    return(intake)

def get_post_list(soup):
    post_tags = soup.select("h4")
    post_list = []
    for item in post_tags:
        for i in item:
            post_list.append(i)
    return post_list

def get_post(soup):
    if "Government post" in post_list:
        gov_post_list = soup.find_all('div', class_='primary-info')
        gov_post_raw = gov_post_list[2]
        for item in gov_post_raw:
            gov_post = item.strip()
        return gov_post

    elif "Opposition post" in post_list:
        #sometimes class=card is a div and sometimes it is an a, so account for both scenarios to get the data we want
        opposition_post_tag = soup.select("div[class=card-list] > div[class=card] > div[class=card-inner] >  div[class=content] > div[class=primary-info]")
        if opposition_post_tag:
            for item in opposition_post_tag:
                for i in item:
                    opposition_post = i.strip()
                    return opposition_post
        else:
            opposition_post_tag = soup.select("div[class=card-list] > a[class=card] > div[class=card-inner] >  div[class=content] > div[class=primary-info]")
            for item in opposition_post_tag:
                for i in item:
                    if i.strip() != constituency:
                        opposition_post = i.strip()
                        return opposition_post

    else:
        post = "no"
        return post

def get_frontbench(post):
    if post != "no":
        frontbench = "yes"
    else:
        frontbench = "no"
    return frontbench

def get_payroll(post):
    if post != "no":
        payroll = "yes"
    else:
        payroll = "no"
    return payroll

#cabinet
webpage = requests.get("https://members.parliament.uk/Government/Cabinet")
soup = BeautifulSoup(webpage.content, "html.parser")

cabinet = soup.find_all('div', class_='primary-info')

cabinet_list = []
for mp in cabinet:
    cabinet_list.append(mp.get_text().strip())
#print(cabinet_list)

def get_cabinet(name):
    if name in cabinet_list:
        cabinet = "yes"
    else:
        cabinet = "no"
    return cabinet

def get_post_dep(soup):
    if "Government post" in post_list:
        gov_post_dep_list = soup.find_all('div', class_='secondary-info')
        gov_post_dep_raw = gov_post_dep_list[1]
        for item in gov_post_dep_raw:
            gov_post_dep = item.strip()
        #print(gov_post_dep)
        #mp.append(gov_post_dep)
        return gov_post_dep
    elif "Opposition post" in post_list:
        #sometimes class=card is a div and sometimes it is an a, so account for both scenarios to get the data we want
        opposition_post_dep_tag = soup.select("div[class=card-list] > div[class=card] > div[class=card-inner] >  div[class=content] > div[class=secondary-info]")
        if opposition_post_dep_tag:
            for item in opposition_post_dep_tag:
                for i in item:
                    opposition_post_dep = i.strip()
                    return opposition_post_dep
        else:
            opposition_post_dep_tag = soup.select("div[class=card-list] > a[class=card] > div[class=card-inner] >  div[class=content] > div[class=secondary-info]")
            for item in opposition_post_dep_tag:
                for i in item:
                    if "Elected" not in i.strip():
                        opposition_post_dep = i.strip()
                        return opposition_post_dep

    else:
        post_dep = "no"
        return post_dep

from commons_committee_list import *
def get_select_committees(soup):
    if "Committee memberships" in post_list:

        #get all references to committees past and present on the member's profile
        committee_tag = soup.select("[href*=committee]")
        #now determine which are present
        committee_tag_list = []
        for item in committee_tag:
            for i in item:
                str_i = str(i)
                if "Present" in str_i:
                    committee_tag_list.append(str_i)
                #else: #MP doesn't currently sit on this select committee
                    #return "no"

        #for each committee, see if the MP currently sits on it, and if so record the committee
        select_committees = []
        for item in commons_committee_list:
            if item in str(committee_tag_list):
                select_committees.append(item)
        if select_committees:
            if len(select_committees) == 1:
                for item in select_committees:
                    return item
            elif len(select_committees) > 1:
                for item in select_committees:
                    select_committees_str = "; ".join(select_committees)
                    return select_committees_str
    else: #member isn't on any select committees
        return "no"

for mp_link in list_of_links:
    #print(mp_link)
    webpage = requests.get(mp_link)
    soup = BeautifulSoup(webpage.content, "html.parser")

    mp = []

    #get name
    name_letters = []
    name = get_name(soup)
    mp.append(name)

    #get picture link
    picture_link = get_picture_link(name)
    mp.append(picture_link)

    #get gender
    gender = get_mp_gender(name)
    mp.append(gender)

    #get constituency
    constituency = get_constituency(soup)
    mp.append(constituency)

    #get party
    party = get_party(soup)
    mp.append(party)

    #get intake year
    intake = get_intake(soup)
    mp.append(intake)

    #get gov/opposition posts
    post_list = get_post_list(soup)

    post = get_post(soup)
    mp.append(post)

    frontbench = get_frontbench(post)
    mp.append(frontbench)

    payroll = get_payroll(post)
    mp.append(payroll)

    cabinet = get_cabinet(name)
    mp.append(cabinet)

    #get gov/opposition posts dep
    post = get_post_dep(soup)
    mp.append(post)

    #get select committees
    select_committees = get_select_committees(soup)
    if select_committees is None: #this covers cases where an MP used to sit on a select committee but no longer does. can this be got into the function?
        mp.append("no")
    else:
        mp.append(select_committees)

    #add the mp to the big list
    mps_list.append(mp)

#print(mps_list)
