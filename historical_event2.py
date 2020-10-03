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


db = pymysql.connect("localhost", "root", "esfortest", "etf")
cursor = db.cursor()

start_years=[2014,2015,2016,2018]
start_months=[6,12,6,3]
start_days=[20,17,23,22]
end_years=[2016,2018,2020,2020]
end_months=[2,12,7,7]
end_days=[11,19,28,28]


choose1 = sys.argv[1]
weight1 = sys.argv[2]
input_per_month = float(sys.argv[3])/12

choose = choose1.split(',')
# choose = ['VOO','VOE','VT','VEA']

weight = weight1.split(',')
# weight = ['0.31','0.23','0.23','0.23']
for i in range(len(weight)):
    weight[i] = float(weight[i])

# start_date = '2014-06-20'
# end_date = '2016-02-11'
# start_d = datetime.date(2015,12,17)
# end_d = datetime.date(2018,12,19)
# input_per_month = 10000

result = []

# for a in range(len(start_days)):
for a in range(1):

    start_d = datetime.date(start_years[a],start_months[a],start_days[a])
    end_d = datetime.date(end_years[a],end_months[a],end_days[a])

    if( start_d.month < end_d.month ):#足一年
        y = end_d.year - start_d.year
        if(start_d.day < end_d.day):#足一個月
            # end_ddd = datetime.date(end_d.year,end_d.month,start_d.day)
            mm = end_d.month - start_d.month
        else:
            mm = end_d.month - start_d.month -1
            # if end_d.month!=1:
            #     end_ddd = datetime.date(end_d.year,end_d.month-1,start_d.day)
            # else:
            #     end_ddd = datetime.date(end_d.year,12,start_d.day)
    else:
        y = end_d.year - start_d.year-1
        if(start_d.day < end_d.day):#足一個月
            mm = end_d.month - start_d.month +12
            # end_ddd = datetime.date(end_d.year,end_d.month,start_d.day)
        else:
            mm = end_d.month - start_d.month +12-1
            # if end_d.month!=1:
            #     end_ddd = datetime.date(end_d.year,end_d.month-1,start_d.day)
            # else:
            #     end_ddd = datetime.date(end_d.year,12,start_d.day)
    # print(y,mm)
    m = y*12 + mm
    
    # if(start_d.day!=end_d.day):
    m+=1#最後不滿一個月的部分也要算
    
    # print(m)
    
    # today = datetime.date.today()
    # yesterday =  today - datetime.timedelta(days=5)
    
    
    
    
    
    rewards = np.zeros(m)#放每月的報酬率
    in_money_arr=[]#投入總金額
    for i in range(m):
        in_money_arr.append(i*input_per_month)
    in_money_arr.append((m-1)*input_per_month)
    # d_now=yesterday
    d_now = start_d
    for b in range(m):
        if b==m-1:
            d_now = d_aft
            d_aft = end_d
        else:
            if b==0:
                d_now = start_d
            else:
                d_now = d_aft
        
            if d_now.month==12:
                aft_month = 1
                aft_year = d_now.year + 1
            else:
                aft_month = d_now.month + 1
                aft_year = d_now.year
        
            if(start_d.day>day_of_month[aft_month-1]):
                aft_day = day_of_month[aft_month-1]    
            else:
                aft_day = start_d.day
        
            d_aft = datetime.date(aft_year,aft_month,aft_day)
    
        w = d_now.weekday()
        if w==6:
            d_now = d_now - datetime.timedelta(days=2)
        elif w==5:
            d_now = d_now - datetime.timedelta(days=1)
    
        w = d_aft.weekday()
        if w==6:
            d_aft = d_aft - datetime.timedelta(days=2)
        elif w==5:
            d_aft = d_aft - datetime.timedelta(days=1)
    
        # print(d_now,d_aft)
    
    
    
        for c in range(len(choose)):
            sql = "select close from etf_close where (name = '"+choose[c]+"' and date = '"+str(d_aft) + "')"
            # print(sql)
            cursor.execute(sql)
            result_select3 = cursor.fetchall()
            db.commit()
            sql = "select close from etf_close where (name = '"+choose[c]+"' and date = '"+str(d_now) + "')"
            # print(sql)
            cursor.execute(sql)
            result_select4 = cursor.fetchall()
            db.commit()
            if len(result_select3) >0:
                reward_aft = result_select3[0][0]
            # else:
                # print(choose[c]+str(d_now)+'no result')
            if len(result_select4) >0:
                reward_now = result_select4[0][0]
            # else:
                # print(choose[c]+str(d_pre)+'no result')
            rewarddd = (reward_aft-reward_now)/reward_now
            rewards[b] += rewarddd * weight[c]
    
    # print(rewards)
    
    
    ans = np.zeros(m+1)
    for i in range(1,m):
        ans[i] = ans[i-1] * (rewards[i-1]+1) +input_per_month
    ans[m] = ans[m-1] * (rewards[m-1]+1) 
    
    # for i in range(len(ans)):
    #     print(in_money_arr[i],ans[i])
    
    
    
    final_r = (ans[m]-(input_per_month*(m-1)))/(input_per_month*(m-1))
    # print(ans[m-1],input_per_month*m)
    final_r = format(final_r*100 , '0.3f')
    # every_reward[count] = str(final_r)
    # count+=1
    # print(ans)
    # print(final_r+'%')
    # print(format(ans[m] , '0.2f'))
    # print(input_per_month*(m-1))
    result.append(final_r+'%')

# print(result)
result1 = ' '.join(result)
print(result1)
endtime = datetime.datetime.now()
# print((endtime-starttime).seconds)