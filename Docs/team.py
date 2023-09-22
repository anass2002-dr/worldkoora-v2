import schedule
import time
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import csv
import json


path="C:\\Program Files (x86)\\chromedriver.exe"
driver=webdriver.Chrome()

###-------------------premier league teams links----------------------##
# url="https://www.premierleague.com/clubs"
# driver.get(url)
# time.sleep(5)
# div_parent=driver.find_elements(By.CLASS_NAME,"indexAllTime")
# time.sleep(5)
# table_team=div_parent[1].find_element(By.TAG_NAME,"tbody")
# time.sleep(5)
# row_items=table_team.find_elements(By.TAG_NAME,'tr')
# time.sleep(5)
# for i in range(0,len(row_items)):
#     column_items=row_items[i].find_element(By.TAG_NAME,'a')
#     print(column_items.get_attribute('href'))


# url2="https://www.uefa.com/nationalassociations/"

# driver.get(url2)
# time.sleep(3)
# list_table=driver.find_elements(By.CLASS_NAME,'standings-module')
# list_links=[]
# for link in list_table:
#     time.sleep(3)
#     links_table=link.find_element(By.TAG_NAME,'a')
#     list_links.append(links_table.get_attribute('href'))
    
# for ll in list_links:
#     print(ll)

with open('Docs\\league.csv',mode='r') as csv_league:
    csv_reader = csv.reader(csv_league, delimiter=',')
    leagues=[]
    for ff in csv_league:
        leagues.append(ff)
    driver.get(leagues[0].strip())
    title=driver.find_element(By.CLASS_NAME,'ROA474A54iOw7VMIYeSY')
    table=driver.find_element(By.CLASS_NAME,'ag-center-cols-container')
    table_items=table.find_elements(By.CLASS_NAME,'ag-row-level-0')
    for item in table_items:
        team=item.find_element(By.CLASS_NAME,'XiH7Q7qqQpsHxb_Z3I6N')
        team_name=team.get_attribute('title')
        logo=team.find_element(By.CLASS_NAME,'pk-badge').get_attribute('src')
        played=item.find_elements(By.CLASS_NAME,'ag-cell')
        
        played=played[1].text
        print(team_name)
        print(played)
        print(logo)
    # for league in leagues:
    #     driver.get(league.strip())
    #     title=driver.find_element(By.CLASS_NAME,'ROA474A54iOw7VMIYeSY')
    #     table=driver.find_element(By.CLASS_NAME,'ag-center-cols-container')
    #     table_items=table.find_elements(By.CLASS_NAME,'ag-row-level-0')
    #     for item in table_items:
    #         team=item.find_element(By.CLASS_NAME,'XiH7Q7qqQpsHxb_Z3I6N')
    #         team_name=team.get_attribute('title')
    #         logo=team.find_element(By.CLASS_NAME,'pk-badge').get_attribute('src')
            
    #         print(team_name)
    #         print(logo)
            
# with open('Docs\\league.csv',mode='r') as file_csv:
#     csv_reader = csv.reader(file_csv, delimiter=',')
#     leagues=[]
#     cp=0
#     all_league={}
#     all_league_list=[]
#     for ff in csv_reader:
#         leagues.append(ff)
#     for league in leagues:
#         league_dict={}
#         league_dict['Id']=league[0]
#         league_dict['LeagueName']=league[1]
#         league_dict['Country']=league[2]
#         league_dict['DateCreation']=league[3]
#         all_league_list.append(league_dict)
#     all_league['leagues']=all_league_list
#     with open('Docs/all_leagues.json','w') as leaguesJson:
#             json.dump(all_league,leaguesJson)

####---------------------save picture-------------------##
# import requests

# img_data = requests.get(image_url).content
# with open('image_name.jpg', 'wb') as handler:
#     handler.write(img_data)