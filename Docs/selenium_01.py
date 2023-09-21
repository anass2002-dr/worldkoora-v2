from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

path="C:\\Program Files (x86)\\chromedriver.exe"
cp=0
driver=webdriver.Chrome()                                                                                                                                                           

url="https://www.mubawab.ma/fr/st/casablanca/appartements-a-vendre"
url2="https://www.mubawab.ma/"

driver.get(url2)
estat_type=driver.find_element(By.CLASS_NAME,"tabNav")
tab_links=driver.find_element(By.CLASS_NAME,"tabLinks")

for i in range(1,4):
    script="var tab='tab2';document.getElementById(tab).click()"
    driver.execute_script(script)   
    tab_class=f"tab{i}"
    tab_box=tab_links.find_element(By.CLASS_NAME,tab_class)
    titles=tab_box.find_elements(By.TAG_NAME,"a")
    for title in titles:
        print(title.text)
    
# nav_page=driver.find_elements(By.CLASS_NAME,"listingBox")
# links=[]
# for nav in nav_page:
#     class_name=nav.get_attribute("class")
#     att=nav.get_attribute("linkref")
#     if att is not None:
#         if class_name!="listingBox adBoostBox w100":
#             links.append(str(att))
    
# for li in links:
#     driver.get(li)
#     box=driver.find_element(By.CLASS_NAME,"mainInfoProp")
    
#     title=box.find_element(By.TAG_NAME,"h1")
#     if title is not None:
#         price=box.find_element(By.CLASS_NAME,"orangeTit")
#         print("*******************")
#         print(title.text)
#         print(price.text)
#         cp+=1
#         print(cp)
# print(cp)







