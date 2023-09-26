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
    driver.get(leagues[10].strip())
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
            # driver.refresh()
            
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
            # driver.refresh()
            
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
            # driver.refresh()
            
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
                # driver.refresh()
                
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
                # driver.refresh()
                logo_length=''
        img_data=''
        if logo is None:
            img_data=b'images\\table_teames_logo\\football.png'
        else:
            img_data = requests.get(logo).content
        
        path=f'images\\table_teames_logo\\{team_name}.png '
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
                # driver.refresh()
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
    dict_leagues[title.text]=list_teams_infos
    # print(dict_leagues)
    with open(f'Docs/teams_table/{title.text}.json','w') as table_1:
        json.dump(dict_leagues,table_1)
    # for league in leagues:
    #     driver.get(league.strip())
    #     dict_leagues={}
    #     list_teams_infos=[]
    #     title=''
    #     while(title==''):
    #         try:
    #             title=driver.find_element(By.CLASS_NAME,'ROA474A54iOw7VMIYeSY')
    #         except Exception as e:
    #             print('check your connection internet brooo.....')
    #             print('i''m sleeping now untile title are finding.....')
    #             time.sleep(5)
    #             # driver.refresh()
                
    #             title=''
    #     print(title.text)   

    #     table=object
    #     table_length=''
    #     while(table_length==''):
    #         try:
    #             table=driver.find_element(By.CLASS_NAME,'ag-center-cols-container')
    #             table_length=table
    #         except Exception as e:
    #             print('check your connection internet brooo.....')
    #             print('i''m sleeping now untile table are finding.....')
    #             time.sleep(5)
    #             # driver.refresh()
                
    #             table_length=''
    #     print('table finding')

    #     table_items=object
    #     table_items_length=0
    #     while(table_items_length==0):
    #         try:
    #             table_items=table.find_elements(By.CLASS_NAME,'ag-row-level-0')
    #             table_items_length=len(table_items)
    #         except Exception as e:
    #             print('check your connection internet brooo.....')
    #             print('i''m sleeping now untile table_items_length are finding.....')
    #             time.sleep(5)
    #             # driver.refresh()
                
    #             table_items_length=0
    #     print(f'finally we find the table items of {title.text} ')  
                      
    #     cp=1
    #     for item in table_items:
    #         dict_teams_infos={}
            
    #         team=object
    #         team_length=''
    #         while(team_length==''):
    #             try:
    #                 team=item.find_element(By.CLASS_NAME,'XiH7Q7qqQpsHxb_Z3I6N')
    #                 team_length=team
    #             except Exception as e:
    #                 print('check your connection internet brooo.....')
    #                 print('i''m sleeping now untile team name are finding.....')
    #                 time.sleep(5)
    #                 # driver.refresh()
                    
    #                 team_length=''
    #         team_name=team.get_attribute('title')
    #         print(team_name)
          
    #         logo=object
    #         logo_length=''
    #         while(logo_length==''):
    #             try:
    #                 logo=team.find_element(By.CLASS_NAME,'pk-badge').get_attribute('src')
    #                 logo_length=logo
    #             except Exception as e:
    #                 print('check your connection internet brooo.....')
    #                 print('i''m sleeping now untile logo path are finding.....')
    #                 time.sleep(5)
    #                 # driver.refresh()
    #                 logo_length=''
    #         img_data = requests.get(logo).content
    #         length_img=len(img_data)
    #         path_type=img_data[-3:length_img].lower
    #         path=f'images\\table_teames_logo\\{team_name}.{path_type}'
    #         isExisting=os.path.exists(path)
    #         if isExisting==False:
    #             with open(f'images\\table_teames_logo\\{team_name}.png', 'wb') as handler:
    #                 handler.write(img_data)
    
    #         infos=object
    #         infos_leng=0
    #         while(infos_leng<10):
    #             try:
    #                 infos=item.find_elements(By.CLASS_NAME,'ag-cell')
    #                 infos_leng=len(infos)
    #             except Exception as e:
    #                 print('check your connection internet brooo.....')
    #                 print('i''m sleeping now untile team infos are finding.....')
    #                 time.sleep(5)
    #                 # driver.refresh()
    #                 infos_leng=0
    #         # time.sleep(20)
    #         # print(team_name)
    #         dict_teams_infos['id_team']=cp
    #         dict_teams_infos['team Name']=team_name
    #         dict_teams_infos['logo path']=f'images\\table_teames_logo\\{team_name}.png'
    #         dict_teams_infos['played']=infos[1].text
    #         dict_teams_infos['won']=infos[2].text
    #         dict_teams_infos['drawn']=infos[3].text
    #         dict_teams_infos['lost']=infos[4].text
    #         dict_teams_infos['goals']=infos[5].text
    #         dict_teams_infos['against']=infos[6].text
    #         dict_teams_infos['goal_differences']=infos[7].text
    #         dict_teams_infos['points']=infos[8].text
    #         list_teams_infos.append(dict_teams_infos)
    #         cp+=1
    #     dict_leagues[title.text]=list_teams_infos
    #     # print(dict_leagues)
    #     with open(f'Docs/teams_table/{title.text}.json','w') as table_1:
    #         json.dump(dict_leagues,table_1)
    #     list_leagues.append(dict_leagues)  
        
    # table_teams_dict['table leagues']=list_leagues
    # with open('Docs/teams_table/table_teams.json','w') as table_teams:
    #     json.dump(table_teams_dict,table_teams)
    
    
    
    
    
