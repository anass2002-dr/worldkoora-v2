from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import csv
# path="C:\\Program Files (x86)\\chromedriver.exe"
# driver=webdriver.Chrome()

        
with open('C:\\xampp\\htdocs\\worldkoora\\Docs\\csv_test.csv',mode='r') as file_csv:
    csv_reader = csv.reader(file_csv, delimiter=',')
    list1=[]
    cp=0
    for ff in csv_reader:
        list1.append(ff)
    dictionary={}
    list2=[]
   
 
    
    for line in list1:
        if cp!=0:
            print(f"insert into league({cp},'{line[0]}','{line[1]}')")
            dict1={}
            dict1['LeagId']=cp
            dict1[f'{list1[0][0]}']=line[0]
            dict1[f'{list1[0][1]}']=line[1]
            list2.append(dict1)
            # print(dict1)
            
        cp+=1
    dictionary['data']=list2
    
    # for key,value in dictionary.items:
    #     print(f'{key} , {value}')