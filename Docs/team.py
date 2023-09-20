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
    # dictionary={}
    # dictionary['data1']=[]
    # for line in list1:
    #     obj={}
    #     obj['name']=line[0]
    #     obj['country']=line[1]
    #     dictionary['data1']+=obj
    # print(dictionary)
    for line in list1:
        if cp!=0:
            print(f"insert into league({cp},'{line[0]}','{line[1]}')")
        cp+=1