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
# starttime = datetime.datetime.now()

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


db = pymysql.connect("localhost", "root", "esfortest", "etf")
cursor = db.cursor()


choose1 = sys.argv[1]
weight1 = sys.argv[2]
# want_m = int(sys.argv[3])
input_per_month = float(sys.argv[3])/12
# print(weight1)
# find_exp_r=0.05
# input_per_month = 10000

# sql='SELECT * FROM `選股結果` WHERE expect_reward='
# sql+=str(find_exp_r)

# cursor.execute(sql)
# result_select1 = cursor.fetchall()
# db.commit()
# # print(result_select1)
# df = pd.DataFrame(list(result_select1))

today = datetime.date.today()
yesterday =  today - datetime.timedelta(days=10)

# while(True):
# min_risk=min(df[4])
# min_risk_index=list(df[4]).index(min_risk)
# print(min_risk_index)
# print(result_select1[min_risk_index])


choose = choose1.split(',')
# choose = result_select1[min_risk_index][1].split(' ')
# choose = ['VOO','VOE','VT','VEA']

weight = weight1.split(',')
# weight = result_select1[min_risk_index][2].split(' ')
# weight = ['0.31','0.23','0.23','0.23']
for i in range(len(weight)):
    weight[i] = float(weight[i])



target = [3+1,6+1,12+1,24+1,36+1]


m=37
rewards = np.zeros(m)#放每月的報酬率
in_money_arr=[]#投入總金額
for i in range(m):
    in_money_arr.append(i*input_per_month)
# d_now=yesterday
d_now = datetime.date(int(str(today)[:4]),int(str(today)[5:7]),3)
for b in range(m):
    if b==0:
        d_now=yesterday
    else:
        d_now = d_pre

    if d_now.month-2<0:
        d_now_premonth=11
    else:
        d_now_premonth = d_now.month-2
    # d_now_premonth=d_now.month
    dminus= day_of_month[d_now_premonth]-1
    d_pre = d_now - datetime.timedelta(days=dminus)
    w = d_now.weekday()
    if w==6:
        d_now = d_now - datetime.timedelta(days=2)
    elif w==5:
        d_now = d_now - datetime.timedelta(days=1)
    w = d_pre.weekday()
    if w==6:
        d_pre = d_pre - datetime.timedelta(days=2)
    elif w==5:
        d_pre = d_pre - datetime.timedelta(days=1)
    for c in range(len(choose)):
        sql = "select close from etf_close where (name = '"+choose[c]+"' and date = '"+str(d_now) + "')"
        # print(sql)
        cursor.execute(sql)
        result_select3 = cursor.fetchall()
        db.commit()
        sql = "select close from etf_close where (name = '"+choose[c]+"' and date = '"+str(d_pre) + "')"
        # print(sql)
        cursor.execute(sql)
        result_select4 = cursor.fetchall()
        db.commit()
        if len(result_select3) >0:
            reward_now = result_select3[0][0]
        # else:
            # print(choose[c]+str(d_now)+'no result')
        if len(result_select4) >0:
            reward_pre = result_select4[0][0]
        # else:
            # print(choose[c]+str(d_pre)+'no result')
        rewarddd = (reward_now-reward_pre)/reward_pre
        rewards[b] += rewarddd * weight[c]
#把報酬率陣列反過來排 共36個月
result = []
# rewards2 = []
for x in range(len(rewards)):
    result.append(rewards[len(rewards)-1-x])
    # rewards2.append(rewards[len(rewards)-1-x])
# print(result)
# reward_arr = result[len(result)-6:]
# print(len(reward_arr))
# print(reward_arr)
count = 0  
every_reward = []  
final_ans=[]   
final_inmoney=[]
for m in target:

    reward_arr = result[len(result)-(m-1):]
    # print(len(reward_arr))
    
     
    ans = np.zeros(m)

    for i in range(1,m):
        ans[i] = ans[i-1] * (reward_arr[i-1]+1) +input_per_month
    # print(ans)
    final_r = (ans[m-1]-(input_per_month*(m-1)))/(input_per_month*(m-1))
    # print(ans[m-1],input_per_month*m)
    final_r = format(final_r*100 , '0.3f')
    # every_reward[count] = str(final_r)
    # count+=1
    every_reward.append(final_r+'%')
    final_ans.append(format(ans[m-1] , '0.2f'))
    # final_ans.append(str(round(ans[m-1])))
    final_inmoney.append(str(input_per_month*(m-1)))
    # db.close()
 

    
result1 = ' '.join(every_reward)
result2 = ' '.join(final_ans)
result3 = ' '.join(final_inmoney)
print(result1)
print(result2)
print(result3)
# print(every_reward)
# print(choose)


