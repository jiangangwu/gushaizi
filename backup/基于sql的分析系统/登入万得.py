daima = '000413'
nian = '2015'
yue = ''



print("登入万得\n")

from WindPy import w


#from datetime import *

w.start()

print("已经启动")
print("登入期货账户\n")
w.tlogon("20420401","0","25300042","121522","CFE")



mo = w.tquery("Capital").Data[1][0]
print("现有资金：", "%.2f" % mo)

po = w.tquery("Position").Data
print("现有持仓：","\n",po[0],"\n", po[1],"\n",po[2],"\n",
          po[10],"\n",po[11],"\n",po[12],"\n",po[13])




'''股品  主要看成长
'''

rd = w.wsd("603883.SH", "roa2,stmnote_others_4504,researchanddevelopmentexpenses",
        "2012-01-01", "2014-12-31", "rptType=1;Period=Y;Fill=Previous")
rd.Data[0]

v = w.wsi("600010.SH", "amt", "2015-04-24 09:00:00", "2015-04-26 17:08:25", "")


stock = "600536.SH"

import time

t = time.localtime()

if (t[3] > 9 and t[4] > 30):
    
    i = 1
    while i <= 7200:    
        print("\n读秒", i)
        time.sleep(1)
        i += 1
        time1= time.time()
        print("时间：", time1)
         
        mo = w.tquery("Capital").Data[1][0]
        print("现有资金：", "%.2f" % mo)
        
        pr = w.wsq("600536.SH", "rt_latest,rt_ma_10d").Data
        print("现价：", "%.2f" % pr[0][0],"；月均价：", "%.2f" % pr[1][0])
        vo = int(m / pr[0][0] // 100)
        print("可以购买：", vo, "手。")    
        print(time.clock())

#    if p[0][0] > p[1][0]:
#        
#        direction = "Buy"
#        volume = "500"
#        w.torder(stock, direction, "43","500","OrderType=LMT")
#        print("下单成功！", time1, "买入" + volume)
#        po = w.tquery("Position").Data
#        print("现有持仓：","\n",positions[0][0],"\n", po[1][0],"\n",po[2][0],"\n",
#          po[10][0],"\n",po[11][0],"\n",po[12][0],"\n",po[13][0])

#if t[3] > 13 and t[4] > 0:
#    
#
#
#print(time.clock())
#
