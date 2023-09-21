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
    
with open('C:\\xampp\\htdocs\\worldkoora\\Docs\\PremierLeague.csv',mode='r') as file_csv:
        csv_reader = csv.reader(file_csv, delimiter=',')
        list1=[]
        cp=0
        for ff in csv_reader:
            list1.append(ff)
        dictionary={}
        list2=[]
        