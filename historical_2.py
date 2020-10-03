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
want_m = int(sys.argv[3])-1
input_per_month = float(sys.argv[4])/12
# input_per_month = 10000
# print(weight1)
# find_exp_r=0.05


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

# final_div=result_select1[min_risk_index][7]

# for j in range(len(final_name1)):
#     weight[j] = float(final_w1[j])
#     choose[j] = final_name1[j]

# print(choose)
# print(weight)


# db = pymysql.connect("localhost", "root", "esfortest", "etf")
# cursor = db.cursor()
# want_y=5
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
        # y=1
if((want_m/12) <y):
    m=want_m
else:
    m=y*12
# m=37
rewards = np.zeros(m)#放每月的報酬率

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

# db.close()
 
result = []
# rewards2 = []
for x in range(len(rewards)):
    result.append(str(rewards[len(rewards)-1-x]))
    # rewards2.append(rewards[len(rewards)-1-x])
    
result1 = ' '.join(result)
print(result1)
# print(choose)
ans = np.zeros(m)
strans=[]
strans.append(str(0))
for i in range(1,m):
    ans[i] = ans[i-1] * (float(result[i-1])+1) +input_per_month
    strans.append(format(ans[i] , '0.2f'))

result2 = ' '.join(strans)
print(result2)

# -0.010083001869795523 0.018289348222318688 0.024755474796757954 -0.47011025024024455 1.9052343278762052 0.055434825565241 0.005597492552037398 -0.00030791359484239056 0.01036037104650548 -0.03757563105237892 -0.025656792573335373 -0.0472411004806202 -0.005243292816881598 0.06006396502007185 0.015038165187320785 0.02806300775884106 -0.008218923607334323 0.0036587545528759917 0.023592075999091397 -0.03130157234122904 0.024571941615335685 -0.02902085280626009 0.0710948559344948 0.012784334086450116 0.01865729252891217 0.020850027705139433 -0.07190897045186011 -0.19986848402448806 0.040353869439832546 1.9085681398886274 0.009015525369426477 0.05541752640466633 