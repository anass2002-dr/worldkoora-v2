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
# url="https://www.premierleague.com/clubs"
# url2="https://www.uefa.com/nationalassociations/"
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