import json
json_read=open('Docs\\table_teams.json',encoding='utf-8')
dict_json=json.load(json_read)
cp=1
for x in dict_json['table leagues']:
    for v in x:
        # print(x[v])
        for y in x[v]:
            team_id=y['id_team']
            team_Name=y['team Name']
            logo_path=y['logo path']
            played=y['played']
            won=y['won']
            drawn=y['drawn']
            lost=y['lost']
            goals=y['goals']
            against=y['against']
            goal_differences=y['goal_differences']
            print(f"insert into table_teams('{team_id}','{team_Name}','{logo_path}','{played}','{team_id}','{won}','{drawn}','{lost}','{goals}','{against}','{goal_differences}')") 
            cp+=1
print(cp)

            
            
    