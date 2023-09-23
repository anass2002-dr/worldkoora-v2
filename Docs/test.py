import schedule
import time
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import csv
import json
import time
import schedule
import requests
import os
# path="C:\\Program Files (x86)\\chromedriver.exe"
# driver=webdriver.Chrome()

 #hello    
 
# img_data = requests.get('https://img.uefa.com/imgml/TP/teams/logos/18x18/52919.png').content
path='images\\table_teames_logo\\Burnley.png'
isExisting=os.path.exists(path)
print(isExisting)
# with open('Docs\\image_name.jpg', 'wb') as handler:
#     handler.write(img_data)
# def schedule_fun():

#     with open('C:\\xampp\\htdocs\\worldkoora\\Docs\\csv_test.csv',mode='r') as file_csv:
#         csv_reader = csv.reader(file_csv, delimiter=',')
#         list1=[]
#         cp=0
#         for ff in csv_reader:
#             list1.append(ff)
#         dictionary={}
#         list2=[]
        
    
    
#         for line in list1:
#             if cp!=0:
#                 print(f"insert into league({cp},'{line[0]}','{line[1]}')")
#                 dict1={}
#                 dict1['LeagId']=cp
#                 dict1[f'{list1[0][0]}']=line[0]
#                 dict1[f'{list1[0][1]}']=line[1]
#                 list2.append(dict1)
#                 # print(dict1)
                
#             cp+=1
#         dictionary['data']=list2
#         print(dictionary)
#         # with open('Docs/jsonFile.json','w') as jsonfile:
#         #     json.dump(dictionary,jsonfile)
#     # for key,value in dictionary.items:
#     #     print(f'{key} , {value}')
# schedule_fun()
# # schedule.every(3).seconds.do(schedule_fun())    
# #pip instal schedule
# def job():
#     print("I'm working...")

# schedule.every(10).minutes.do(job)
# schedule.every().hour.do(job)
# schedule.every().day.at("10:30").do(job)
# schedule.every().monday.do(job)
# schedule.every().wednesday.at("13:15").do(job)
# schedule.every().day.at("12:42", "Europe/Amsterdam").do(job)
# schedule.every().minute.at(":17").do(job)

# while True:
#     schedule.run_pending()
#     time.sleep(1)