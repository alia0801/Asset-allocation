import sys
import pandas as pd
import numpy as np
import pymysql
import math
import statistics
import time
import datetime
from itertools import combinations, permutations
from scipy.special import comb, perm
starttime = datetime.datetime.now()
years = ["1990","1991","1992","1993","1994","1995","1996","1997","1998","1999",
        "2000","2001","2002","2003","2004","2005","2006","2007","2008","2009",
        "2010","2011","2012","2013","2014","2015","2016","2017","2018","2019","2020"]
month = ["00","01","02","03","04","05","06","07","08","09","10","11","12"]
day = ["00","01","02","03","04","05","06","07","08","09","10",
            "11","12","13","14","15","16","17","18","19","20",
            "21","22","23","24","25","26","27","28","29","30","31"]
day_of_month = [ 31,28,31, 30,31,30, 31,31,30, 31,30,31]
v1 = ['VTI','VOO','VXUS','SPY','BND','IVV','BNDX','VEA','VO',
       'VUG','VB','VWO','VTV','QQQ','BSV','BIV','VTIP','VOE','IEF',
       'SHY','TLT','IVE','VT','GOVT']
reward_nodiv = []
div = []
rrr=[]
r=2/100
while r<7.2/100:
    rrr.append(r)
    r=round(r+0.2/100,4)
# print(rrr)
for i in range(len(v1)):
    reward_nodiv.append(0)
    div.append(0)

today = datetime.date.today()

year = sys.argv[1]
goal_money = sys.argv[2]
in_per_year = sys.argv[3]
mode = sys.argv[4]#1:投資 2:圓夢 3:退休
year = int(year)
goal_money = round(float(goal_money))
in_per_year = int(in_per_year)
mode = int(mode)

# 退休
# mode = 3
# in_per_year = 200000
# goal_money = 5*15*12*10000*(1.0172**40)
# year = 40

# 圓夢
# mode = 2
# in_per_year = 110000
# goal_money = 150*10000
# year = 10

#投資
# mode = 1
# in_per_year = 110000 #input_money
# goal_money = 190000
# year = 10

use_year_input=0

if mode!=1:
    # print("not mode1")
    money = np.zeros(year+1)
    for i in range(year):
        money[i] = in_per_year*(-1)
    
    money[year] = goal_money
    # print(money)
    
    expect_reward_y = np.irr(money)
    # print(expect_reward_y)
    
    money = np.zeros(year*12+1)
    for i in range(year*12):
        money[i] = in_per_year/12*(-1)
    
    money[year*12] = goal_money
    # print(money)
    expect_reward_m = np.irr(money)*12
    # print(expect_reward_m)
else:
    # print("mode1")
    # in_per_year = input_money
    money = np.zeros(year+1)
    money[0] = in_per_year*(-1)
    for i in range(1,year):
        money[i] = 0
    money[year] = goal_money

    expect_reward_m = np.irr(money)
    expect_reward_y = expect_reward_m
    use_year_input=1
    # expect_reward = expect_reward_m

# print(money)
expect_reward = expect_reward_m
# print(expect_reward)

db = pymysql.connect("localhost", "root", "esfortest", "etf")
cursor = db.cursor()


a=0
for a in range(len(v1)):
    sql = "select `年化報酬率_無配息` from `性質表` where name = '"+v1[a] +"'"
    cursor.execute(sql)
    result_select = cursor.fetchall()
    reward_nodiv[a] = result_select[0][0]

a=0
for a in range(len(v1)):
    sql = "select `殖利率` from `性質表` where name = '"+v1[a] +"'"
    cursor.execute(sql)
    result_select = cursor.fetchall()
    div[a] = result_select[0][0]

find_exp_r=0
for i in range(len(rrr)):
    # print(rrr[i])
    if(expect_reward<rrr[i]):
        # print("y")
        find_exp_r=rrr[i]
        break

# print(find_exp_r)

sql='SELECT * FROM `選股結果` WHERE expect_reward='
sql+=str(find_exp_r)
# print(sql)

cursor.execute(sql)
result_select1 = cursor.fetchall()
db.commit()
# print(result_select1)
df = pd.DataFrame(list(result_select1))
# print(df)


while(True):
    min_risk=min(df[4])
    min_risk_index=list(df[4]).index(min_risk)
    # print(min_risk_index)
    # print(result_select1[min_risk_index])
    
    
     
    choose = result_select1[min_risk_index][1].split(' ')
    # choose = ['VOO','VOE','VT','VEA']
    
    weight = result_select1[min_risk_index][2].split(' ')
    # weight = ['0.31','0.23','0.23','0.23']
    for i in range(len(weight)):
        weight[i] = float(weight[i])
    
    # final_div=result_select1[min_risk_index][7]
    
    # for j in range(len(final_name1)):
    #     weight[j] = float(final_w1[j])
    #     choose[j] = final_name1[j]
    
    # print(choose)
    # print(weight)
    
    
    # db = pymysql.connect("localhost", "root", "esfortest", "etf")
    # cursor = db.cursor()
    
    y = 999
    for a in range(len(choose)):
        sql = "select 成立年限 from 性質表 where name = '"+choose[a]+"'"
        # print(sql)
        cursor.execute(sql)
        result_select2 = cursor.fetchall()
        db.commit()
        # print(result_select2)
        if(result_select2[0][0] < y ):
            y = result_select2[0][0]-1
        rewards = np.zeros(y)#放每年的報酬率
        
    for b in range(y):
        for c in range(len(choose)):
            sql = "select value from 各年報酬率 where (name = '"+choose[c]+"' and year = "+str(today.year-b-1) + ")"
            # print(sql)
            cursor.execute(sql)
            result_select3 = cursor.fetchall()
            db.commit()
            if len(result_select3) >0:
                rewarddd = result_select3[0][0]
            rewards[b] += rewarddd * weight[c]
    
    # db.close()
     
    result = []
    rewards2 = []
    for x in range(len(rewards)):
        result.append(str(rewards[len(rewards)-1-x]))
        rewards2.append(rewards[len(rewards)-1-x])
        
    result1 = ' '.join(result)
    # print(result1)
    final_reward = 0
    final_div = 0
    for j in range(len(choose)):
        final_reward += reward_nodiv[v1.index(choose[j])]*weight[j]
        final_div += div[v1.index(choose[j])]*weight[j]
    
    
    his_total_money = np.zeros(len(rewards)+1)
    for i in range(1,len(rewards)+1):
        his_total_money[i] = his_total_money[i-1] * (rewards2[i-1]+1) * (float(final_div)+1) +1
    
    if his_total_money[len(his_total_money)-1]>len(his_total_money)-1:
        # print("yes")
        
        break
    else:
        df[4][min_risk_index]=10000

final_name = result_select1[min_risk_index][1]
final_w = result_select1[min_risk_index][2]
max_reward = result_select1[min_risk_index][3]
min_risk = result_select1[min_risk_index][4]
use_year_input = result_select1[min_risk_index][5]
# final_reward = result_select1[min_risk_index][6]
# final_div = result_select1[min_risk_index][7]

# print(choose)
# print(weight)
print(final_name) #組合代號
print(final_w) #比例
print(format(max_reward*100 , '0.3f')+"%") #報酬率
print(min_risk) #標準差
print(result1) #歷年報酬率
print(use_year_input) #0:月入 1:年入
print(format(final_reward , '0.5f')) #不考慮配息的報酬率
print(format(final_div , '0.5f')) #殖利率

# print(result_select1[min_risk_index])

endtime = datetime.datetime.now()

# print((endtime-starttime).seconds)