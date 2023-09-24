import schedule
import time
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import csv
import json
import requests
import os
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
#####-------------table teams --------------------##
with open('Docs\\league.csv',mode='r') as csv_league:
    csv_reader = csv.reader(csv_league, delimiter=',')
    leagues=[]
    table_teams_dict={}
    for ff in csv_league:
        leagues.append(ff)
    list_leagues=[]
    for league in leagues:
        driver.get(league.strip())
        dict_leagues={}
        list_teams_infos=[]
        title=''
        while(title==''):
            try:
                title=driver.find_element(By.CLASS_NAME,'ROA474A54iOw7VMIYeSY')
            except Exception as e:
                print('check your connection internet brooo.....')
                print('i''m sleeping now untile title are finding.....')
                time.sleep(5)
                driver.refresh()
                
                title=''
        print(title.text)   

        table=object
        table_length=''
        while(table_length==''):
            try:
                table=driver.find_element(By.CLASS_NAME,'ag-center-cols-container')
                table_length=table
            except Exception as e:
                print('check your connection internet brooo.....')
                print('i''m sleeping now untile table are finding.....')
                time.sleep(5)
                driver.refresh()
                
                table_length=''
        print('table finding')

        table_items=object
        table_items_length=0
        while(table_items_length==0):
            try:
                table_items=table.find_elements(By.CLASS_NAME,'ag-row-level-0')
                table_items_length=len(table_items)
            except Exception as e:
                print('check your connection internet brooo.....')
                print('i''m sleeping now untile table_items_length are finding.....')
                time.sleep(5)
                driver.refresh()
                
                table_items_length=0
        print(f'finally we find the table items of {title.text} ')  
                      
        cp=1
        for item in table_items:
            dict_teams_infos={}
            
            team=object
            team_length=''
            while(team_length==''):
                try:
                    team=item.find_element(By.CLASS_NAME,'XiH7Q7qqQpsHxb_Z3I6N')
                    team_length=team
                except Exception as e:
                    print('check your connection internet brooo.....')
                    print('i''m sleeping now untile team name are finding.....')
                    time.sleep(5)
                    driver.refresh()
                    
                    team_length=''
            team_name=team.get_attribute('title')
            print(team_name)
                        
            
            logo=object
            logo_length=''
            while(logo_length==''):
                try:
                    logo=team.find_element(By.CLASS_NAME,'pk-badge').get_attribute('src')
                    logo_length=logo
                except Exception as e:
                    print('check your connection internet brooo.....')
                    print('i''m sleeping now untile logo path are finding.....')
                    time.sleep(5)
                    driver.refresh()
                    logo_length=''
            img_data = requests.get(logo).content
            path=f'images\\table_teames_logo\\{team_name}.png'
            isExisting=os.path.exists(path)
            if isExisting==False:
                with open(f'images\\table_teames_logo\\{team_name}.png', 'wb') as handler:
                    handler.write(img_data)
    
            infos=object
            infos_leng=0
            while(infos_leng<10):
                try:
                    infos=item.find_elements(By.CLASS_NAME,'ag-cell')
                    infos_leng=len(infos)
                except Exception as e:
                    print('check your connection internet brooo.....')
                    print('i''m sleeping now untile team infos are finding.....')
                    time.sleep(5)
                    driver.refresh()
                    infos_leng=0
            # time.sleep(20)
            # print(team_name)
            dict_teams_infos['id_team']=cp
            dict_teams_infos['team Name']=team_name
            dict_teams_infos['logo path']=f'images\\table_teames_logo\\{team_name}.png'
            dict_teams_infos['played']=infos[1].text
            dict_teams_infos['won']=infos[2].text
            dict_teams_infos['drawn']=infos[3].text
            dict_teams_infos['lost']=infos[4].text
            dict_teams_infos['goals']=infos[5].text
            dict_teams_infos['against']=infos[6].text
            dict_teams_infos['goal_differences']=infos[7].text
            dict_teams_infos['points']=infos[8].text
            list_teams_infos.append(dict_teams_infos)
            cp+=1
        dict_leagues[title]=list_teams_infos
        list_leagues.append(dict_leagues)   
    table_teams_dict['table leagues']=list_leagues
    with open('Docs/table_teams.json','w') as table_teams:
        json.dump(table_teams_dict,table_teams)
    # driver.get(leagues[0].strip())
    # time.sleep(20)
    # title=driver.find_element(By.CLASS_NAME,'ROA474A54iOw7VMIYeSY')
    # time.sleep(5)
    # table=driver.find_element(By.CLASS_NAME,'ag-center-cols-container')
    # time.sleep(5)

    # table_items=table.find_elements(By.CLASS_NAME,'ag-row-level-0')
    # time.sleep(5)
    
    # for item in table_items:
    #     team=item.find_element(By.CLASS_NAME,'XiH7Q7qqQpsHxb_Z3I6N')
        
    #     team_name=team.get_attribute('title')
    #     logo=team.find_element(By.CLASS_NAME,'pk-badge').get_attribute('src')
        
    #     infos=item.find_elements(By.CLASS_NAME,'ag-cell')
        
    #     played=infos[1].text
    #     won=infos[2].text
    #     drawn=infos[3].text
    #     lost=infos[4].text
    #     goals=infos[5].text
    #     against=infos[6].text
    #     goal_differences=infos[7].text
    #     points=infos[8].text
    #     print(team_name)
    #     print(logo)
    #     print(played)
    #     print(won)
    #     print(drawn)
    #     print(lost)
    #     print(goals)
    #     print(against)
    #     print(goal_differences)
    #     print(points)
    
                
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