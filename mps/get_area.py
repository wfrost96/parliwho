import requests
from bs4 import BeautifulSoup, SoupStrainer
import mysql.connector
import re

def get_regions(link):
    #print(link)
    webpage = requests.get(link)
    soup = BeautifulSoup(webpage.content, "html.parser")
    link_list = []
    for a in soup.find_all("a"):
        if "Region" in a["href"] or "County" in a["href"] or "constituency" in a["href"]:
            link_list.append("https://members.parliament.uk" + a["href"])
    name_list = []
    for item in soup.select("a[class='card card-region'] > div[class=card-inner] > div[class=content] > div[class=primary-info]"):
        name_list.append(item.get_text().strip())

    mylist = []
    if "England" in link:
        mylist.append("England")

    for i in range(len(link_list)):
        mysublist = []
        try:
            mysublist.append(link_list[i])
            mysublist.append(name_list[i])
        except:
            continue
        mylist.append(mysublist)
    return mylist

def get_counties(reg_links):
    mybiglist = [reg_links[0]]
    for item in reg_links[1:]:
        link = item[0]
        county = item[1]
        if county != "London":
            mylist = [county]
            mylist.append(get_regions(link))
            mybiglist.append(mylist)
        else:
            mylist = [county, [[link, county]]] #necessary format for London as it's different format on web
            mybiglist.append(mylist)
    return mybiglist

def get_constituencies(county_links):
    country = county_links[0]
    mybiggerlist = [country]
    for region in county_links[1:]:
        mybiglist = [region[0]]
        for i in range(1, len(region)):
            for county in region[i]:
                link = county[0]
                mylist = [county[1]]
                try:
                    mylist.append(get_regions(link))
                    mybiglist.append(mylist)
                except:
                    print("Problem with", link)
        mybiggerlist.append(mybiglist)

    return mybiggerlist #this function working fine

#england
def get_constituency_links(link):
    #regions
    if "Scotland" in link:
        reg_links = ["Scotland", [link, "Scotland"]]
    elif "Wales" in link:
        reg_links = ["Wales", [link, "Wales"]]
    elif "Northern%20Ireland" in link:
        reg_links = ["Northern Ireland", [link, "Northern Ireland"]]
    else: #England
        reg_links = []
        try:
            reg_links = get_regions(link)
            #del reg_links[2:] #this line for testing (with below). sd be either 2 or 3
        except:
            print("Problem with", link)
    #print(reg_links)

    #counties
    county_links = []
    county_links = get_counties(reg_links)
    #del county_links[1][1][1:] #this line for testing (with above). final one sd be either 1 or 2

    #constituencies
    constituency_links = []
    constituency_links = get_constituencies(county_links)
    return constituency_links #this function working fine

def db_format(words):
    words = words.lower()
    words = words.replace(",", "")
    words = words.replace(".", "")
    words = words.replace("-", "_")
    words = words.replace("&", "and")
    if len(words) == 1:
        return words
    else:
        words = words.replace(" ", "_")
        return words

area_data = []
def get_area_data(constituency_links):
    country = db_format(constituency_links[0])
    print("Country:", country)
    for myregion in constituency_links[1:]:
        region = db_format(myregion[0])
        print("")
        print("")
        print("Region:", region)
        for item in myregion[1:]:
            county = db_format(item[0])
            print("")
            print("County:", county)
            for i in range(len(item[1])):
                constituency = item[1][i][1]
                #print("Constituency:", constituency)
                constituency_data = [db_format(country), db_format(region), db_format(county), constituency]
                area_data.append(constituency_data)


eng_constituency_links = get_constituency_links("https://members.parliament.uk/region/Country/England")
get_area_data(eng_constituency_links)

scot_constituency_links = get_constituency_links("https://members.parliament.uk/region/Country/Scotland")
get_area_data(scot_constituency_links)

wal_constituency_links = get_constituency_links("https://members.parliament.uk/region/Country/Wales")
get_area_data(wal_constituency_links)

ni_constituency_links = get_constituency_links("https://members.parliament.uk/region/Country/Northern%20Ireland")
get_area_data(ni_constituency_links)

#print(area_data)
#print(len(area_data))

#now add to database
from config import *

mycursor = conn.cursor()

for item in area_data:
    country = item[0]
    region = item[1]
    county = item[2]
    constituency = item[3]

    sql = "UPDATE all_mps SET country = %s, region = %s, county = %s WHERE constituency = %s"
    val = (country, region, county, constituency)
    mycursor.execute(sql, val)
    conn.commit()

conn.close()
