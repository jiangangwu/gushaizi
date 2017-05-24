# -*- coding: utf-8 -*-
"""
Created on Sat Feb  6 20:33:21 2016

@author: Jiangang
"""

import sys,os, codecs,xlrd
sys.path.append('C:\\JR\\网站\\程序\\')
from jg import *

deleteFile('C:\\JR\\网站\\股票观察_副本.xlsm')
copyFile('C:\\JR\\网站\\股票观察.xlsm', 'C:\\JR\\网站\\股票观察_副本.xlsm')

data = xlrd.open_workbook('C:\\JR\\网站\\股票观察_副本.xlsm')
table = data.sheets()[1]
codes = table.col_values(1)

ah = '''
<html lang="zh-CN"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"><meta charset="utf-8">
    <title>股筛子</title>
    <head>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/custom_icon.png">
    <style type="text/css">
        table {center:float;display:inline;border:1px  solid #A1A1A1;}
        a:link {color:#0000FF;text-decoration:none;} /* 未被访问的链接 */
        /*  a:visited {color:#00FF00;text-decoration:none;}已被访问的链接 */
        a:hover {color:#FFA500;} /* 鼠标指针移动到链接上 */
        a:active {color:#FF0000;} /* 正在被点击的链接 */
    </style>
    </head>
    <body bgcolor="#FFFFF4">
'''
at = '''
    </body>
    </html>
'''
    
print("1 开始生成股票分析报告……")
for c in codes[8:]:
    for i1 in range(8, len(codes)):
        if codes[i1][0:6] == c[0:6]:
            break
    v = table.row_values(i1)
    for i2 in range(len(v)):
        v[i2] = str(v[i2])
    (pm,	gpdm,	gpjc,	hym4,	spj,	hljg,	yc,	jymrj,	jymcj,	ttmsy,	hlsy,	ltz,	zsz,	hlsz,	hym1,	hym2,	hym3,	pm1,	pm2,	pm3,	pm4,	hypjpm,	hy1df,	hy2df,	hy3df,	hy4df,	hypjdf,	txdf,	txfz,	lrczdf,	lrfz,	zyczdf,	zyfz,	ylnldf,	ylnlfz,	wjxdf,	wjxfz,	gpdf,	zgdf,	dzxs,	zgdfyy,	zzqs,	pjczl,	dzczl,	gjsy,	kfttmgj,	pjsygj,	ttmgj,	jqgj,	hlsz1,	gjsz1,	wzg,	wzd,	dtzd,	zsy,	ysy,	nsy,	lnsy,	wnsy,	mgjzc,	kfmg143,	kfmg14,	kfmg153,	kfmgqm153,	pjsy,	syttm,	djsyl,	snsy,	ttmlrze,	txdf1,	jj20pc,	jj60pc,	macd,	lnbdl,	lnbt,	wnbdl,	wnbt,	ltgs,	zgs,	zyzb,	ssns,	sfmy,	ygrs,	zgs131,	zgs14,	hjgjzl153,	hjgbnz,	jgcgzb153,	yfzzcb,	gdzczb,	lywd,	czdf1,	lrzzqs,	ywygzz,	mgsy142,	mgsy1532,	bnzzl1532,	mgsy143,	mgsy153,	jlrzz153,	jlrqs153,	lrjszzl,	lrycsnzz,	mgsy113,	mgsy11,	mgsy12,	lrzz12,	mgsy12c,	mgsy1534,	mgzz13,	lrqs13,	mgsy13c,	mgsy14,	lrzz14,	lrqs14,	jlr14,	mgsy174,	mgsyjsn,	zyczdf1,	zypjzz,	zyzzqs,	zy142,	zy152,	zybnzzl,	zy143,	zy153,	zyzzl153,	zyqs153,	zyjszzl,	zy11,	zy12,	zyzz12,	zy12c,	zy13,	zyzz13,	zyqs13,	zy13c,	zy14,	zyzz14,	zyqs14,	ylnldf1,	gjsyl,	sjl153,	sxlttm,	mlpjzz,	mlzzqs,	mll142,	mll152,	mlzz152,	mll143,	mll153,	mlzz153,	mlqs153,	mlzzjs,	mll11,	mll12,	mlzz12,	mll12c,	mll13,	mlzz13,	mlqs13,	mll13c,	mll14,	mlzz14,	mlqs14,	jzcsyl12,	jzcsyl13,	jzcsyl14,	jzcsyl153,	wjxdf1,	gxsyljsn,	xjttmgjb,	bewdtsy,	fzl153,	zyxjbsz153,	xfl143,	xfl153,	gfl143,	gfl153,	dgfcg153,	qsdgdcg153,	mgfh12,	mgfh13,	mgfh14,	aqd,	bmxjzs,	bmxjjyn,	qtysk11,	qtysk12,	qtysk13,	qtysk14,	qtysk153,	zzc11,	zzc12,	zzc13,	zzc14,	zzc153,	qtyszzzc11,	qtyszzzc12,	qtyszzzc13,	qtyszzzc14,	qtyszzzc153,	xj111,	xj112,	xj113,	xj114,	xj1153,	qtjyxj11,	qtjyxj12,	qtjyxj13,	qtjyxj14,	qtjyxj153,	qtzjjxj11,	qtzjjxj12,	qtzjjxj13,	qtzjjxj14,	qtzjjxj153,	xj211,	xj212,	xj213,	xj214,	xj2153,	qttzxj11,	qttzxj12,	qttzxj13,	qttzxj14,	qttzxj153,	tzhdxj11,	tzhdxj12,	tzhdxj13,	tzhdxj14,	tzhdxj153,	qtztzxj11,	qtztzxj12,	qtztzxj13,	qtztzxj14,	qtztzxj153,	xj311,	xj312,	xj313,	xj314,	xj3153,	yywsr11,	yywsr12,	yywsr13,	yywsr14,	yywsr153,	yysr11,	yysr12,	yysr13,	yysr14,	yysr153,	yywzyy11,	yywzyy12,	yywzyy13,	yywzyy14,	yywzyy153,	xj411,	xj412,	xj413,	xj414,	xj4153,	jjhdxj11,	jjhdxj12,	jjhdxj13,	jjhdxj14,	jjhdxj153,	xj511,	xj512,	xj513,	xj514,	xj5153,	roe11,	roe12,	roe13,	roe14,	roe153,	xj611,	xj612,	xj613,	xj614,	xj6153,	sf,	cs,	ssgnbk,	jj,	zycplx,	zycpmc,	iposj,	gswz,	gssx,	yhslqs,	yhslf0,	yhslf1,	yhslf2,	yhslf3,	yhslf4,	yhslf5,	yhslf6,	yhslf7,	yhslf8,	yhslf9,	yhslf10,	yhslf11,	rhslqs,	rhslf0,	rhslf1,	rhslf2,	rhslf3,	rhslf4,	rhslf5,	rhslf6,	rhslf7,	rhslf8,	rhslf9,	rhslf10,	rhslf11,	rhslf12,	rhslf13,	rhslf14,	rhslf153,	rhslf16,	rhslf17,	rhslf18,	rhslf19,	rhslf20) = \
            (v[0],	v[1],	v[2],	v[3],	v[4],	v[5],	v[6],	v[7],	v[8],	v[9],	v[10],	v[11],	v[12],	v[13],	v[14],	v[15],	v[16],	v[17],	v[18],	v[19],	v[20],	v[21],	v[22],	v[23],	v[24],	v[25],	v[26],	v[27],	v[28],	v[29],	v[30],	v[31],	v[32],	v[33],	v[34],	v[35],	v[36],	v[37],	v[38],	v[39],	v[40],	v[41],	v[42],	v[43],	v[44],	v[45],	v[46],	v[47],	v[48],	v[49],	v[50],	v[51],	v[52],	v[53],	v[54],	v[55],	v[56],	v[57],	v[58],	v[59],	v[60],	v[61],	v[62],	v[63],	v[64],	v[65],	v[66],	v[67],	v[68],	v[69],	v[70],	v[71],	v[72],	v[73],	v[74],	v[75],	v[76],	v[77],	v[78],	v[79],	v[80],	v[81],	v[82],	v[83],	v[84],	v[85],	v[86],	v[87],	v[88],	v[89],	v[90],	v[91],	v[92],	v[93],	v[94],	v[95],	v[96],	v[97],	v[98],	v[99],	v[100],	v[101],	v[102],	v[103],	v[104],	v[105],	v[106],	v[107],	v[108],	v[109],	v[110],	v[111],	v[112],	v[113],	v[114],	v[115],	v[116],	v[117],	v[118],	v[119],	v[120],	v[121],	v[122],	v[123],	v[124],	v[125],	v[126],	v[127],	v[128],	v[129],	v[130],	v[131],	v[132],	v[133],	v[134],	v[135],	v[136],	v[137],	v[138],	v[139],	v[140],	v[141],	v[142],	v[143],	v[144],	v[145],	v[146],	v[147],	v[148],	v[149],	v[150],	v[151],	v[152],	v[153],	v[154],	v[155],	v[156],	v[157],	v[158],	v[159],	v[160],	v[161],	v[162],	v[163],	v[164],	v[165],	v[166],	v[167],	v[168],	v[169],	v[170],	v[171],	v[172],	v[173],	v[174],	v[175],	v[176],	v[177],	v[178],	v[179],	v[180],	v[181],	v[182],	v[183],	v[184],	v[185],	v[186],	v[187],	v[188],	v[189],	v[190],	v[191],	v[192],	v[193],	v[194],	v[195],	v[196],	v[197],	v[198],	v[199],	v[200],	v[201],	v[202],	v[203],	v[204],	v[205],	v[206],	v[207],	v[208],	v[209],	v[210],	v[211],	v[212],	v[213],	v[214],	v[215],	v[216],	v[217],	v[218],	v[219],	v[220],	v[221],	v[222],	v[223],	v[224],	v[225],	v[226],	v[227],	v[228],	v[229],	v[230],	v[231],	v[232],	v[233],	v[234],	v[235],	v[236],	v[237],	v[238],	v[239],	v[240],	v[241],	v[242],	v[243],	v[244],	v[245],	v[246],	v[247],	v[248],	v[249],	v[250],	v[251],	v[252],	v[253],	v[254],	v[255],	v[256],	v[257],	v[258],	v[259],	v[260],	v[261],	v[262],	v[263],	v[264],	v[265],	v[266],	v[267],	v[268],	v[269],	v[270],	v[271],	v[272],	v[273],	v[274],	v[275],	v[276],	v[277],	v[278],	v[279],	v[280],	v[281],	v[282],	v[283],	v[284],	v[285],	v[286],	v[287],	v[288],	v[289],	v[290],	v[291],	v[292],	v[293],	v[294],	v[295],	v[296],	v[297],	v[298],	v[299],	v[300],	v[301],	v[302],	v[303],	v[304],	v[305],	v[306],	v[307],	v[308],	v[309],	v[310],	v[311],	v[312],	v[313], v[314], v[315], v[316], v[317], v[318], v[319], v[320], v[321],v[322],v[323],v[324],v[325])

    a =  '<div style = "line-height:0.35"><br/></div><h2  align="center">'+ '<a href="http://' + gswz + '" target="_blank">' + gpjc + '（' + c[0:6] + '）</a></h2>'\
          + '<p align="center">' + getDate() + '&nbsp;&nbsp;当天涨跌幅：' + tn(dtzd) +  '%</p>' \
          + '<p align = "center">' + '<a href="http://guba.eastmoney.com/list,' + c[0:6] + ',5.html" target="_blank">东方财富</a>'      \
          + '<a href="http://finance.sina.com.cn/realstock/company/' + c[-2:].lower() + c[0:6] + '/nc.shtml" target="_blank">&nbsp;&nbsp;新浪</a>' \
          + '<a href="http://xueqiu.com/S/' + c[-2:] + c[0:6] + '" target="_blank">&nbsp;&nbsp;雪球</a>' \
          + '<a href="http://www.cninfo.com.cn/information/companyinfo_n.html?fulltext?' + c[-2:].lower().replace('sh','shmb').replace('sz','szcn') \
          + c[0:6] + '" target="_blank">&nbsp;&nbsp;巨潮公告</a></p><h4 align="center">'
    if float(spj) >= float(hljg):
        a = a + '<h4 align="center">（一）基本判断  </h4><p align="center"><b>建议卖出</b></p>'
    if float(spj) < float(hljg):
        a = a + '<h4 align="center">（一）基本判断  </h4><p align="center"><b>建议买入</b></p>'
    a =a + '<p align="center"><table cellspacing="0"  align="center" border="1" bordercolor="#F5F5F5" cellpadding="4"><tr><td>股票排序</td><td>' + tnn(pm)  \
         + '</td><td>预计上涨</td><td><font color="Chocolate">' + tp(yc) \
         + '</font></td></tr><tr><td>收盘价</td><td>' + spj \
         + '</td><td>合理价</td><td>' + tn(hljg) \
         + '</font></td></tr><tr><td>行业得分</td><td>' + tn2(hypjdf) \
         + '</td><td>股票得分</td><td>' + tn2(gpdf) \
         + '</font></td></tr><tr><td>安全系数</td><td>' + tn2(aqd) \
         + '</td><td>主观评分</td><td>' + tn2(zgdf) \
         + '</td></tr><tr><td>52周最低</td><td>' + tn(wzd) \
         + '</td><td>52周最高</td><td>' + tn(wzg) \
         + '</td></tr><tr><td>建议买入价</td><td>' + tn(str(float(tn(hljg))*0.50)) \
         + '</td><td>建议卖出价</td><td>' + tn(str(float(tn(hljg))*0.85)) \
         + '</td></tr><tr><td><b>估计成长率</b></td><td><b>' + tp(dzczl) \
         + '</b></td><td>' + '<b>历史成长率</b></td><td><b>' + tp(pjczl) \
         + '</b></td></tr><tr><td>市场泡沫</td><td></b>' + tp(str((float(table.cell(3,3).value) + float(table.cell(3,6).value) + float(table.cell(3,9).value))/3)) \
         + '</td><td>上证A股</td><td>' + tp(str(table.cell(3,3).value)) \
         + '</td></tr><tr><td>中小板</td><td>' + tp(str(table.cell(3,6).value)) \
         + '</td><td>创业板</td><td>' + tp(str(table.cell(3,9).value)) \
         + '</td></tr><tr><td>行业泡沫</td><td>'+ tp(hypjpm) \
         + '</td></b><td>行业平均得分</td><td>' + tn2(hypjdf) \
         + '</td></tr><tr><td style="word-wrap:break-word;"><a href="http://www.gushaizi.com/fxbg/行业1 ' + hym1 + '.html" target="_blank">1. ' + hym1 + '</a></td><td>' + tp(pm1) \
         + '</td><td style="word-wrap:break-word;"><a href="http://www.gushaizi.com/fxbg/行业2 ' + hym2 + '.html" target="_blank">2. ' + hym2 + '</a></td><td>' + tp(pm2)\
         + '</td></tr><tr><td style="word-wrap:break-word;"><a href="http://www.gushaizi.com/fxbg/行业3 ' + hym3 + '.html" target="_blank">3. ' + hym3 + '</a></td><td>' + tp(pm3) \
         +'</td><td style="word-wrap:break-word;"><a href="http://www.gushaizi.com/fxbg/行业4 ' + hym4 + '.html" target="_blank">4. ' +  hym4 + '</a></td><td>' + tp(pm4)+'</td></tr></table>'

    a = a + '<h4 align="center">（二）股票现值情况</h4>' \
          + '<p align="center"><table cellspacing="0"  border="1" bordercolor="#F5F5F5" cellpadding="4"><tr><td>TTM市盈率</td><td>' + tn(ttmsy) \
          + '</td><td>上年利润市盈率</td><td>' + tn(snsy) \
          + '</td></tr><tr><td>TTM收益</td><td>' + tn(syttm) \
          + '</td><td>股价收益率</td><td>' + tp(gjsyl) \
          + '</td></tr><tr><td>第三季度市净率</td><td>' + tn(sjl153) \
          + '</td><td>第三季负债率</td><td>' + tn(fzl153) + '%' \
          + '</td></tr><tr><td>股票流通市值</td><td>' + tnn(ltz) \
          + '亿</td><td>总市值</td><td>' + tnn(zsz) + '亿' \
          + '</td></tr><tr><td>流通股数</td><td>' + tn(ltgs) \
          + '亿</td><td>总股数</td><td>' + tn(zgs) + '亿' \
          + '</td></tr><tr><td>周收益</td><td>' + tp(zsy) \
          + '</td><td>月收益</td><td>' + tp(ysy) \
          + '</td></tr><tr><td>近一年收益</td><td>' + tp(nsy) \
          + '</td><td>两年复利</td><td>' + tp(lnsy) \
          + '</td></tr><tr><td>五年年复利</td><td>' + tp(wnsy) \
          + '</td><td>溢折价率</td><td>' + tp((float(spj) - float(hljg)) / float(hljg)) + '</td></tr></table>'

    a = a + '<h4 align="center">（三）估计合理价格：' + tn(hljg) + '</h4>'\
          + '<p align="center"><table cellspacing="0"  border="1" bordercolor="#F5F5F5" cellpadding="4"><tr><td>合理市盈率</td><td>' + tn(hlsy) \
          + '</td><td>股票估计上涨率</td><td><font color="Chocolate">' + tp(yc) \
          + '</font></td></tr><tr><td>加权估价</td><td>' + tn(jqgj)+'</td><td>扣非TTM估价（占3/6）</td><td>' + tn(kfttmgj) \
          + '</td></tr><tr><td>平均收益估价（占2/6）</td><td>' + tn(pjsygj) \
          +'</td><td>TTM估价（占1/6）</td><td>' + tn(ttmgj) \
          + '</td></tr><tr><td>收益估计成长率</td><td>' + tp(dzczl) \
          +'</td><td>收益历史成长率</td><td>' + tp(pjczl) +'</td></tr></table>'

    a = a + '<h4 align="center">（四）股票弹性得分：' + tn2(txdf) + '</h4>' \
          + '<p align="center"><table cellspacing="0"  border="1" bordercolor="#F5F5F5" cellpadding="4"><tr><td>偏离20日均价</td><td>' + tp(jj20pc) \
          + '</td><td>偏离60日均价</td><td>' + tp(jj60pc) \
          + '</td></tr><tr><td>MACD</td><td>' + tn(macd) \
          + '</td><td>六月一十五到大盘最底部跌幅</td><td>' + tp(lywd) \
          + '</td></tr><tr><td>两年波动率</td><td>' + tp(lnbdl) \
          + '</td><td>五年波动率</td><td>' + tp(wnbdl) \
          + '</td></tr><tr><td>两年贝他</td><td>' + tn(lnbt)\
          + '</td><td>五年贝他</td><td>' + tn(wnbt) \
          + '</td></tr><tr><td>主营占比</td><td>' + tp2(zyzb) \
          + '</td><td>员工人数</td><td>' + tnn(ygrs) \
          + '</td></tr><tr><td>流通股数</td><td>' + tnn(ltgs) + '亿股' \
          + '</td><td>总股数</td><td>' + tnn(zgs) + '亿股' \
          + '</td></tr><tr><td>户均股数季增加率</td><td>' + tp(hjgjzl153) \
          + '</td><td>户均股数半年增加率</td><td>' + tp(hjgbnz) \
          + '</td></tr><tr><td>研发占与总资产比</td><td>' + tp(yfzzcb) \
          + '</td><td>固定资产与总资产比</td><td>' + tp(gdzczb) \
          + '</td></tr><tr><td>当年热度趋势</td><td>' + tp(yhslqs) \
          + '</td><td>当月热度趋势</td><td>' + tp(rhslqs) + '</td></tr></table>'

    a = a + '<h4 align="center">（五）利润成长能力得分：' + tn2(lrczdf) + '</h4>' \
          + '<p align="center"><table cellspacing="0"  border="1" bordercolor="#F5F5F5" cellpadding="4"><tr><td>利润加权成长率</td><td>' + tp(pjczl) \
          + '</td><td>利润趋势</td><td>' + tp(lrzzqs) \
          + '</td></tr><tr><td>15年预告增长</td><td><font color="Chocolate">' + tp(ywygzz) \
          + '</font></td><td>前三季增长率</td><td>' + tp(jlrzz153) \
          + '</td</tr><tr><td>近三年增长率</td><td>' + tp(lrjszzl) \
          + '</td><td>三季度每股收益</td><td>' + tn(mgsy153) + '元</td></tr></table>'

    a = a + '<h4 align="center">（六）主营成长得分：' + tn2(zyczdf) + '</h4>' \
          + '<p align="center"><table cellspacing="0"  border="1" bordercolor="#F5F5F5" cellpadding="4"><tr><td>主营加权成长率</td><td>' + tp(zypjzz) \
          + '</td><td>主营增长趋势</td><td>' + tp(zyzzqs) \
          + '</td></tr><tr><td>主营三季增长率</td><td>' + tp(zyzzl153) \
          + '</td><td>近半年增长率</td><td>' + tp(zybnzzl) \
          + '</td></tr><tr><td>近三年增长率</td><td>' + tp(zyjszzl) \
          + '</td><td>三季度主营</td><td>' + tn(zy153) + '亿</td></tr></table>'

    a = a + '<h4 align="center">（七）盈利能力得分：' + tn2(ylnldf) + '</h4>' \
          + '<p align="center"><table cellspacing="0"  border="1" bordercolor="#F5F5F5" cellpadding="4">' \
          + '<tr><td>毛利加权成长率</td><td>' + tp(mlpjzz) \
          + '</td><td>毛利趋势</td><td>' + tp(mlzzqs) \
          + '</td></tr><tr><td>第三季毛利率</td><td>' + tn(mll153) + '%'\
          + '</td><td>第三季毛利增长率</td><td>' + tp(mlzz153) \
          + '</td></tr><tr><td>半年毛利率</td><td>' + tn(mll152) \
          + '</td><td>半年毛利增长率</td><td>' + tp(mlzz152) \
          + '</td></tr><tr><td>市销率TTM</td><td>' + tn(sxlttm)  \
          + '</td><td>股价收益率</td><td>' + tp(gjsyl) \
          + '</td></tr><tr><td>去年净资产收益率</td><td>' + tn(jzcsyl14) \
          + '%</td><td>三季净资产收益率</td><td>' + tn(jzcsyl153) \
          + '%</td></tr></table><br/>'
          
    a = a + '<h4 align="center">（八）稳健性得分：' + tn2(wjxdf) + '</h4>'\
          + '<p align="center"><table cellspacing="0"  border="1" bordercolor="#F5F5F5" cellpadding="4">'\
          + '<tr><td>近三年股息收益率</td><td>' + tp(gxsyljsn) \
          + '</td><td>现金TTM与股价比</td><td>' + tp(xjttmgjb) \
          + '</td></tr><tr><td>8月25日涨跌幅</td><td>' + tp(bewdtsy) \
          + '</td><td>第三季负债率</td><td>' + tn(fzl153) + '%' \
          + '</td></tr><tr><td>14年3季销售费用占销售比</td><td>' + tp(xfl143) \
          + '</td><td>15年3季销售费用占销售比</td><td>' + tp(xfl153) \
          + '</td></tr><tr><td>14年3季管理费用占销售比</td><td>' + tp(gfl143) \
          + '</td><td>15年3季管理费用占销售比</td><td>' + tp(gfl153) \
          + '</td></tr><tr><td>大股东持股占比</td><td>' + tn(dgfcg153) \
          + '%</td><td>前十大股东持股占比</td><td>' + tn(qsdgdcg153) + '%</td></tr></table>'
    
    a = a + '<h4 align="center">（九）安全性得分：'+tn2(aqd)+'</h4>' \
          + '<p align="center">(近三年30个避免陷阱数：' + tnn(bmxjzs) \
          + '&nbsp;&nbsp;近一年12个避免陷阱数：' + tnn(bmxjjyn)  + ')' \
          + '<p align="center"><table width="45%" cellspacing="0"  border="1" bordercolor="#F5F5F5" style="font-size 12px;center:float;display:inline;border:1px  solid #A1A1A1;word-wrap:break-word;" cellpadding="4">' \
          + '<tr height="50px"><td>日期</td><td>其他应收款比总资产</td><td><10%</td><td>其它经营现金比经营现金</td><td><10%</td><td>其它投资现金比投资现金<td><10%</td><td>营业外收入比营收<td><10%</td><td>经营活动现金<td>>0</td><td>总资产收益率</td><td>>7%</td></tr>' \
          + '<tr><td align="center">2011</td><td align="center">' + tp(qtyszzzc11) \
          + '</td><td align="center">' + tnn(xj111) \
          + '</td><td align="center">' + tp(qtzjjxj11) \
          + '</td><td align="center">' + tnn(xj211) \
          + '</td><td align="center">' + tp(qtztzxj11) \
          + '</td><td align="center">' + tnn(xj311) \
          + '</td><td align="center">' + tp(yywzyy11) \
          + '</td><td align="center">' + tnn(xj411) \
          + '</td><td align="center">' + tnn(jjhdxj11) \
          + '</td><td align="center">' + tnn(xj511) \
          + '</td><td align="center">' + tn(roe11) \
          + '%</td><td align="center">' + tnn(xj611) + '</td></tr>' \
          + '<tr><td align="center">2012</td><td align="center">' + tp(qtyszzzc12) \
          + '</td><td align="center">' + tnn(xj112) \
          + '</td><td align="center">' + tp(qtzjjxj12) \
          + '</td><td align="center">' +  tnn(xj212) \
          + '</td><td align="center">' + tp(qtztzxj12) \
          + '</td><td align="center">' + tnn(xj312)  \
          + '</td><td align="center">' + tp(yywzyy12) \
          + '</td><td align="center">' + tnn(xj412)  \
          + '</td><td align="center">' + tnn(jjhdxj12)  \
          + '</td><td align="center">' + tnn(xj512) \
          + '</td><td align="center">' + tn(roe12) \
          + '%</td><td align="center">' + tnn(xj612) + '</td></tr>'\
          + '<tr><td align="center">2013</td><td align="center">' + tp(qtyszzzc13) \
          + '</td><td align="center">' + tnn(xj113) \
          + '</td><td align="center">' + tp(qtzjjxj13) \
          + '</td><td align="center">' + tnn(xj213) \
          + '</td><td align="center">' + tp(qtztzxj13) \
          + '</td><td align="center">' + tnn(xj313) \
          + '</td><td align="center">' + tp(yywzyy13) \
          + '</td><td align="center">' + tnn(xj413) \
          + '</td><td align="center">' + tnn(jjhdxj13)\
          + '</td><td align="center">' + tnn(xj513) \
          + '</td><td align="center">' +tn(roe13) \
          + '%</td><td align="center">' + tnn(xj613) + '</td></tr>' \
          + '<tr><td align="center">2014</td><td align="center">' + tp(qtyszzzc14) \
          + '</td><td align="center">' + tnn(xj114) \
          + '</td><td align="center">' + tp(qtzjjxj14) \
          + '</td><td align="center">' + tnn(xj214) \
          + '</td><td align="center">' + tp(qtztzxj14) \
          + '</td><td align="center">' + tnn(xj314) \
          + '</td><td align="center">' + tp(yywzyy14) \
          + '</td><td align="center">' + tnn(xj414) \
          + '</td><td align="center">' + tnn(jjhdxj14) \
          + '</td><td align="center">' +  tnn(xj514) \
          + '</td><td align="center">' + tn(roe14) \
          + '%</td><td align="center">' + tnn(xj614) + '</td></tr>' \
          + '<tr><td align="center">1509</td><td align="center">' + tp(qtyszzzc153) \
          + '</td><td align="center">' + tnn(xj1153) \
          + '</td><td align="center">' + tp(qtzjjxj153) \
          + '</td><td align="center">' + tnn(xj2153) \
          + '</td><td align="center">' + tp(qtztzxj153) \
          + '</td><td align="center">' + tnn(xj3153) \
          + '</td><td align="center">' + tp(yywzyy153) \
          + '</td><td align="center">' +  tnn(xj4153) \
          + '</td><td align="center">' +tn(jjhdxj153) \
          + '</td><td align="center">' + tnn(xj5153) \
          + '</td><td align="center">' +tn(roe153) \
          +  '%</td><td align="center">' + tnn(xj6153) + '</td></tr></table> </p>'

    a = a + '<h4 align="center">（十）股票概况</h4>' \
          + '<p align="center"><table width="45%" cellspacing="0"  border="1" bordercolor="#F5F5F5" style="font-size 12px;center:float;display:inline;border:1px  solid #A1A1A1;" cellpadding="4">' \
          + '<tr><td>IPO</td><td>' + iposj[0:10] +'</td></tr>' \
          + '<tr><td>属性</td><td>' + gssx +'</td></tr>' \
          + '<tr><td>省市</td><td>' + sf +'&nbsp;' + cs+'</td></tr>' \
          + '<tr><td nowrap="nowrap">行业</td><td>' + hym1 + '->' + hym2 + '->' + hym3  + '->' + hym4 \
          + '<tr><td>品类</td><td>' + zycplx +'</td></tr>' \
          + '<tr><td>品名</td><td>' + zycpmc +'</td></tr>'   \
          + '<tr><td>板块</td><td>' + ssgnbk +'</td></tr>'  \
          + '<tr><td>简介</td><td>' + jj  + '</td></tr>' \
          + '<tr><td>评价</td><td>打折：' + tn2(zgdf) + '。评价：' + zgdfyy  + '。</td></tr></table></p>'
   
    a = ah.replace('股筛子', gpjc) + a + '<table><br/><br/><br/><br/><br/><br/><br/></table>' + at
    fl = 'C:\\JR\\网站\\fxbg\\' + c[0:6] + '.html'
    f = codecs.open(fl, 'w','UTF-8')
    f.write(a)
    f.close()
print("        股票分析报告文件完成。")

    
print("2 开始写股票排序文件……")
(pm,	gpdm,	gpjc,	hym4,	spj,	hljg,	yc,	jymrj,	jymcj,	ttmsy,	hlsy,	ltz,	zsz,	hlsz,	hym1,	hym2,	hym3,	pm1,	pm2,	pm3,	pm4,	hypjpm,	hy1df,	hy2df,	hy3df,	hy4df,	hypjdf,	txdf,	txfz,	lrczdf,	lrfz,	zyczdf,	zyfz,	ylnldf,	ylnlfz,	wjxdf,	wjxfz,	gpdf,	zgdf,	dzxs,	zgdfyy,	zzqs,	pjczl,	dzczl,	gjsy,	kfttmgj,	pjsygj,	ttmgj,	jqgj,	hlsz1,	gjsz1,	wzg,	wzd,	dtzd) = \
(table.col_values(0),	table.col_values(1),	table.col_values(2),	table.col_values(3),	table.col_values(4),	table.col_values(5),	table.col_values(6),	table.col_values(7),	table.col_values(8),	table.col_values(9),	table.col_values(10),	table.col_values(11),	table.col_values(12),	table.col_values(13),	table.col_values(14),	table.col_values(15),	table.col_values(16),	table.col_values(17),	table.col_values(18),	table.col_values(19),	table.col_values(20),	table.col_values(21),	table.col_values(22),	table.col_values(23),	table.col_values(24),	table.col_values(25),	table.col_values(26),	table.col_values(27),	table.col_values(28),	table.col_values(29),	table.col_values(30),	table.col_values(31),	table.col_values(32),	table.col_values(33),	table.col_values(34),	table.col_values(35),	table.col_values(36),	table.col_values(37),	table.col_values(38),	table.col_values(39),	table.col_values(40),	table.col_values(41),	table.col_values(42),	table.col_values(43),	table.col_values(44),	table.col_values(45),	table.col_values(46),	table.col_values(47),	table.col_values(48),	table.col_values(49),	table.col_values(50),	table.col_values(51),	table.col_values(52),	table.col_values(53))

bt = '<div style = "line-height:0.35"><br/></div><h2 align="center">预计涨跌排序</h2><blockquote><p  align="center">' + getDate() \
        + '</p><p align="center">市场平均泡沫：' + tp(str((float(table.cell(3,3).value) + float(table.cell(3,6).value) + float(table.cell(3,9).value))/3)) \
        + '&nbsp;建议仓位：' + tp(str(table.cell(3,2).value)) \
        + '</p><p align="center">上证泡沫：' + tp(str(table.cell(3,3).value)) \
        + '&nbsp;中小板泡沫：' + tp(str(table.cell(3,6).value)) \
        + '&nbsp;创业板泡沫：' + tp(str(table.cell(3,9).value))  + '</p></blockquote>'
xw = '''
<p align = "center">
<a href="http://finance.sina.com.cn" target="_blank">新浪财经</a>
<a href="http://news.hexun.com/" target="_blank">&nbsp;&nbsp;和讯</a>
<a href="http://finance.ifeng.com/" target="_blank">&nbsp;&nbsp;凤凰</a>
<a href="http://business.sohu.com/" target="_blank">&nbsp;&nbsp;搜狐</a>
<a href="http://economy.caijing.com.cn/index.html" target="_blank">&nbsp;&nbsp;财经</a>
<a href="http://www.stockstar.com/roll/finance.shtml" target="_blank">&nbsp;&nbsp;证券之星滚动</a>
<a href="http://finance.eastmoney.com/yaowen.html" target="_blank">&nbsp;&nbsp;东方财富</a>
<a href="http://news.cnstock.com/" target="_blank">&nbsp;&nbsp;中国证券网</a></p>
'''
hybt1 = bt + xw + '<p align="center"><table width="75%" cellspacing="0"  align="center"  border="1" bordercolor="#A1A1A1"><tr><th width="4%" nowrap="nowrap">' \
            + pm[5] + '</th><th width="7%" nowrap="nowrap">' \
            + gpdm[5] + '</th><th width="8%" nowrap="nowrap">' \
            + gpjc[5] + '</th><th width="5%" nowrap="nowrap">' \
            + dtzd[5] + '</th><th width="7%" nowrap="nowrap">' \
            + spj[5] + '</th><th width="7%" nowrap="nowrap">' \
            + ttmsy[5] + '</th><th width="6.7%" nowrap="nowrap"><font color="Chocolate">' \
            + yc[5] + '</font></th><th width="5.8%" nowrap="nowrap">' \
            + wzg[5] + '</th><th width="6.7%" nowrap="nowrap">' \
            + wzd[5] + '</th><th width="5.8%" nowrap="nowrap">' \
            + pjczl[5] + '</th><th width="6%" nowrap="nowrap">' \
            + hypjpm[5] + '</th><th align="center" width="6%">' \
            + hypjdf[5] + '</th><th width="6%" nowrap="nowrap">' \
            + gpdf[5] + '</th><th width="6%" nowrap="nowrap">' \
            + dzxs[5] +  '</th><th width="9.5%"  nowrap="nowrap">&nbsp;&nbsp;&nbsp;&nbsp;' \
            + hym4[5] + '&nbsp;&nbsp;&nbsp;&nbsp;</th></tr>'
        
nr = '<p align="center">'
ii = 0
for i in range(8,len(pm)):
    nr = nr + '<tr><td align="center" width="3%">' \
            + tnn(pm[i]) + '</td><td align="center" width="6%" >' \
            + gpdm[i][0:6] + '</td><td align="center" width="8%" nowrap="nowrap" ><a href="http://www.gushaizi.com/fxbg/' + gpdm[i][0:6] + '.html" target="_blank">' \
            + gpjc[i] + '</a></td><td align="center" width="5%" >' \
            + tn2(dtzd[i]) +  '%</td><td align="center" width="7%" >'\
            + tn(spj[i]) + '</td><td align="center" width="7%" >' \
            + tn(ttmsy[i]) + '</td><td align="center" width="6.7%" ><font color="Chocolate">' \
            + tp(yc[i]) + '</font></td><td align="center" width="5.8%" >' \
            + tn(wzg[i]) + '</td><td align="center" width="6.7%">' \
            + tn(wzd[i]) + '</td><td  align="center" width="5.8%">' \
            + tp(pjczl[i]) + '</td><td align="center" width="6%" >' \
            + tp2(hypjpm[i]) + '</td><td align="center" width="6%">' \
            + tn2(hypjdf[i]) + '</td><td align="center" width="6%">' \
            + tn2(gpdf[i]) + '</td><td align="center" width="6%">' \
            + tn2(dzxs[i]) + '</td><td width="9.5%"  nowrap="nowrap"><a  target="_blank"  href="http://www.gushaizi.com/fxbg/行业4 ' + hym4[i].replace(' ','') + '.html" >' \
            + hym4[i].replace(' ','') + '</a></td></tr>'
    if ii == 0:
        if float(yc[i+1]) < 0.1:
            ii = ii + 1
            f = codecs.open('C:\\JR\\网站\\fxbg\\px.html','w', 'UTF-8')
            px =  ah.replace("股筛子",'排序') + hybt1.replace("预计涨跌排序",'<a  target="_blank"  href="http://www.gushaizi.com/fxbg/qpx.html" >排序（大于10%）</a>') + nr + '<table><br/><br/><br/><br/><br/><br/><br/></table>' + at
            f.write(px)
            f.close()
f = codecs.open('C:\\JR\\网站\\fxbg\\qpx.html','w', 'UTF-8')
qpx =  ah.replace("股筛子",'全排序') + hybt1.replace("预计涨跌排序",'全部股票排序') + nr + '<table><br/><br/><br/><br/><br/><br/><br/></table>' + at
f.write(qpx)
f.close()
print("        全排序文件完成。")


print("3 开始写各个分行业排序文件……")
hy1list = ['金融',	'公用事业',	'可选消费',	'工业',	'医疗保健',	'日常消费',	'信息技术',	'电信服务',	'材料',	'能源']
hy2list = ['多元金融',	'银行',	'公用事业Ⅱ',	'保险Ⅱ',	'汽车与汽车零部件',	'耐用消费品与服装',	'房地产',	'运输',	'半导体与半导体生产设备',	'制药、生物科技与生命科学',	'食品、饮料与烟草',	'资本货物',	'媒体Ⅱ',	'软件与服务',	'电信服务Ⅱ',	'食品与主要用品零售Ⅱ',	'商业和专业服务',	'技术硬件与设备',	'消费者服务Ⅱ',	'材料Ⅱ',	'家庭与个人用品',	'零售业',	'医疗保健设备与服务',	'能源Ⅱ']
hy3list = ['资本市场',	'商业银行',	'电力Ⅲ',	'汽车',	'保险Ⅲ',	'家庭耐用消费品',	'独立电力生产商与能源贸易商Ⅲ',	'航空Ⅲ',	'建筑与工程Ⅲ',	'公路与铁路运输',	'互联网软件与服务Ⅲ',	'水务Ⅲ',	'房地产管理与开发',	'饮料',	'半导体产品与半导体设备',	'纺织品、服装与奢侈品',	'交通基础设施',	'制药',	'汽车零配件',	'电气设备',	'能源设备与服务',	'化工',	'媒体Ⅲ',	'个人用品Ⅲ',	'生物科技Ⅲ',	'建材Ⅲ',	'通信设备Ⅲ',	'多元电信服务',	'食品与主要用品零售Ⅲ',	'食品',	'贸易公司与工业品经销商Ⅲ',	'建筑产品Ⅲ',	'电子设备、仪器和元件',	'专业服务',	'酒店、餐馆与休闲Ⅲ',	'商业服务与用品',	'海运Ⅲ',	'软件',	'容器与包装',	'多元金融服务',	'机械',	'医疗保健设备与用品',	'燃气Ⅲ',	'航空货运与物流Ⅲ',	'复合型公用事业Ⅲ',	'多元化零售',	'金属、非金属与采矿',	'消费品经销商Ⅲ',	'纸与林木产品',	'专营零售',	'信息技术服务',	'石油、天然气与供消费用燃料',	'综合类Ⅲ',	'生命科学工具和服务Ⅲ',	'电脑与外围设备',	'休闲设备与用品',	'家庭用品Ⅲ',	'医疗保健提供商与服务',	'综合消费者服务Ⅲ',	'无线电信业务Ⅲ',	'医疗保健技术Ⅲ',	'航空航天与国防Ⅲ',	'互联网与售货目录零售']
hy4list = ['投资银行业与经纪业',	'多元化银行',	'电力',	'区域性银行',	'资产管理与托管银行',	'汽车制造',	'家用电器',	'多元化保险',	'媒体Ⅲ',	'铁路运输',	'多元化工',	'医疗保健用品',	'新能源发电业者',	'轮胎与橡胶',	'公路与铁路',	'航空',	'建筑与工程',	'互联网软件与服务',	'服装、服饰与奢侈品',	'人寿与健康保险',	'水务',	'家庭娱乐软件',	'软饮料',	'摩托车制造',	'石油与天然气的储存和运输',	'白酒与葡萄酒',	'非传统电信运营商',	'房地产开发',	'半导体产品',	'机场服务',	'中药',	'重型电气设备',	'财产与意外伤害保险',	'休闲设施',	'特种化工',	'消费电子产品',	'药品零售',	'电子元件',	'家庭装饰品',	'电影与娱乐',	'多领域控股',	'石油天然气设备与服务',	'房地产服务',	'化肥与农用化工',	'出版',	'电气部件与设备',	'钢铁',	'西药',	'个人用品',	'机动车零配件与设备',	'办公服务与用品',	'电脑存储与外围设备',	'生物科技',	'建材',	'基础化工',	'煤炭与消费用燃料',	'有线和卫星电视',	'通信设备',	'石油与天然气的炼制和销售',	'食品加工与肉类',	'房地产经营公司',	'贸易公司与工业品经销商',	'环境与设施服务',	'白银',	'建筑机械与重型卡车',	'建筑产品',	'住宅建筑',	'调查和咨询服务',	'金属与玻璃容器',	'鞋类',	'海港与服务',	'酒店、度假村与豪华游轮',	'海运',	'铝',	'纸制品',	'农产品',	'商业印刷',	'应用软件',	'保健护理设施',	'燃气',	'综合电信服务',	'航空货运与物流',	'百货商店',	'复合型公用事业',	'纺织品',	'工业机械',	'化纤',	'电子制造服务',	'消费品经销商',	'农用农业机械',	'摄影用品',	'电脑与电子产品零售',	'汽车零售',	'信息科技咨询与其它服务',	'电子设备和仪器',	'家用器具与特殊消费品',	'综合类行业',	'医疗保健设备',	'生命科学工具和服务',	'综合支持服务',	'黄金',	'纸包装',	'大卖场与超市',	'家庭用品',	'金属非金属',	'广告',	'综合性石油天然气',	'教育服务',	'贵金属与矿石',	'休闲用品',	'啤酒',	'林木产品',	'无线电信业务',	'电脑硬件',	'医疗保健技术',	'数据处理与外包服务',	'半导体设备',	'公路运输',	'食品分销商',	'互联网零售',	'航天航空与国防',	'综合货品商店',	'餐馆',	'保健护理服务',	'技术产品经销商',	'工业气体',	'石油天然气勘探与生产',	'独立电力生产商与能源贸易商',	'售货目录零售',	'其他多元金融服务',	'专卖店']

x = 0
for h in hy1list:
    nr = '<p align="center">'
    for i in range(8,len(pm)):
        if hym1[i] == h:
            nr = nr + '<tr><td align="center" width="3%">' \
                    + tnn(pm[i]) + '</td><td align="center" width="6%" >' \
                    + gpdm[i][0:6] + '</td><td align="center" width="8%" nowrap="nowrap" ><a href="http://www.gushaizi.com/fxbg/' + gpdm[i][0:6] + '.html" target="_blank">' \
                    + gpjc[i] + '</a></td><td align="center" width="5%" >' \
                    + tn2(dtzd[i]) +  '%</td><td align="center" width="7%" >'\
                    + tn(spj[i]) + '</td><td align="center" width="7%" >' \
                    + tn(ttmsy[i]) + '</td><td align="center" width="6.7%" ><font color="Chocolate">' \
                    + tp(yc[i]) + '</font></td><td align="center" width="5.8%" >' \
                    + tn(wzg[i]) + '</td><td align="center" width="6.7%">' \
                    + tn(wzd[i]) + '</td><td  align="center" width="5.8%">' \
                    + tp(pjczl[i]) + '</td><td align="center" width="6%" >' \
                    + tp2(hypjpm[i]) + '</td><td align="center" width="6%">' \
                    + tn2(hypjdf[i]) + '</td><td align="center" width="6%">' \
                    + tn2(gpdf[i]) + '</td><td align="center" width="6%">' \
                    + tn2(dzxs[i]) + '</td><td width="9.5%"  nowrap="nowrap"><a  target="_blank"  href="http://www.gushaizi.com/fxbg/行业2 ' + hym2[i].replace(' ','') + '.html" >' \
                    + hym2[i].replace(' ','') + '</a></td></tr>'
    nr = ah.replace("股筛子",h)  \
                + hybt1.replace('行业名4','行业名2').replace("预计涨跌排序",'<a  target="_blank"  href="http://www.gushaizi.com/fxbg/hyjg.html" >行业1：' + h + '</a>')  \
                + nr + '</table>' + '<table><br/><br/><br/><br/><br/><br/><br/></table>' + at
    f = codecs.open('C:\\JR\\网站\\fxbg\\行业1' + ' ' + h + '.html','w', 'UTF-8')
    f.write(nr)
    f.close()
for h in hy2list:
    nr = '<p align="center">'
    for i in range(8,len(pm)):
        if hym2[i] == h:
            nr = nr + '<tr><td align="center" width="3%">' \
                    + tnn(pm[i]) + '</td><td align="center" width="6%" >' \
                    + gpdm[i][0:6] + '</td><td align="center" width="8%" nowrap="nowrap" ><a href="http://www.gushaizi.com/fxbg/' + gpdm[i][0:6] + '.html" target="_blank">' \
                    + gpjc[i] + '</a></td><td align="center" width="5%" >' \
                    + tn2(dtzd[i]) +  '%</td><td align="center" width="7%" >'\
                    + tn(spj[i]) + '</td><td align="center" width="7%" >' \
                    + tn(ttmsy[i]) + '</td><td align="center" width="6.7%" ><font color="Chocolate">' \
                    + tp(yc[i]) + '</font></td><td align="center" width="5.8%" >' \
                    + tn(wzg[i]) + '</td><td align="center" width="6.7%">' \
                    + tn(wzd[i]) + '</td><td  align="center" width="5.8%">' \
                    + tp(pjczl[i]) + '</td><td align="center" width="6%" >' \
                    + tp2(hypjpm[i]) + '</td><td align="center" width="6%">' \
                    + tn2(hypjdf[i]) + '</td><td align="center" width="6%">' \
                    + tn2(gpdf[i]) + '</td><td align="center" width="6%">' \
                    + tn2(dzxs[i]) + '</td><td width="9.5%"  nowrap="nowrap"><a  target="_blank"  href="http://www.gushaizi.com/fxbg/行业3 ' + hym3[i].replace(' ','') + '.html" >' \
                    + hym3[i].replace(' ','') + '</a></td></tr>'
    nr = ah.replace("股筛子",h)  \
                + hybt1.replace('行业名4','行业名3').replace("预计涨跌排序",'<a  target="_blank"  href="http://www.gushaizi.com/fxbg/hyjg.html" >行业2：' + h + '</a>')  \
                + nr + '</table>' + '<table><br/><br/><br/><br/><br/><br/><br/></table>' + at
    f = codecs.open('C:\\JR\\网站\\fxbg\\行业2' + ' ' + h + '.html','w', 'UTF-8')
    f.write(nr)
    f.close()
for h in hy3list:
    nr = '<p align="center">'
    for i in range(8,len(pm)):
        if hym3[i] == h:
            nr = nr + '<tr><td align="center" width="3%">' \
                    + tnn(pm[i]) + '</td><td align="center" width="6%" >' \
                    + gpdm[i][0:6] + '</td><td align="center" width="8%" nowrap="nowrap" ><a href="http://www.gushaizi.com/fxbg/' + gpdm[i][0:6] + '.html" target="_blank">' \
                    + gpjc[i] + '</a></td><td align="center" width="5%" >' \
                    + tn2(dtzd[i]) +  '%</td><td align="center" width="7%" >'\
                    + tn(spj[i]) + '</td><td align="center" width="7%" >' \
                    + tn(ttmsy[i]) + '</td><td align="center" width="6.7%" ><font color="Chocolate">' \
                    + tp(yc[i]) + '</font></td><td align="center" width="5.8%" >' \
                    + tn(wzg[i]) + '</td><td align="center" width="6.7%">' \
                    + tn(wzd[i]) + '</td><td  align="center" width="5.8%">' \
                    + tp(pjczl[i]) + '</td><td align="center" width="6%" >' \
                    + tp2(hypjpm[i]) + '</td><td align="center" width="6%">' \
                    + tn2(hypjdf[i]) + '</td><td align="center" width="6%">' \
                    + tn2(gpdf[i]) + '</td><td align="center" width="6%">' \
                    + tn2(dzxs[i]) + '</td><td width="9.5%"  nowrap="nowrap"><a  target="_blank"  href="http://www.gushaizi.com/fxbg/行业4 ' + hym4[i].replace(' ','') + '.html" >' \
                    + hym4[i].replace(' ','') + '</a></td></tr>'
    nr = ah.replace("股筛子",h)  \
                + hybt1.replace("预计涨跌排序",'<a  target="_blank"  href="http://www.gushaizi.com/fxbg/hyjg.html" >行业3：' + h + '</a>')  \
                + nr + '</table>' + '<table><br/><br/><br/><br/><br/><br/><br/></table>' + at
    f = codecs.open('C:\\JR\\网站\\fxbg\\行业3' + ' ' + h + '.html','w', 'UTF-8')
    f.write(nr)
    f.close()
for h in hy4list:
    nr = '<p align="center">'
    for i in range(8,len(pm)):
        if hym4[i] == h:
            nr = nr + '<tr><td align="center" width="3%">' \
                    + tnn(pm[i]) + '</td><td align="center" width="6%" >' \
                    + gpdm[i][0:6] + '</td><td align="center" width="8%" nowrap="nowrap" ><a href="http://www.gushaizi.com/fxbg/' + gpdm[i][0:6] + '.html" target="_blank">' \
                    + gpjc[i] + '</a></td><td align="center" width="5%" >' \
                    + tn2(dtzd[i]) +  '%</td><td align="center" width="7%" >'\
                    + tn(spj[i]) + '</td><td align="center" width="7%" >' \
                    + tn(ttmsy[i]) + '</td><td align="center" width="6.7%" ><font color="Chocolate">' \
                    + tp(yc[i]) + '</font></td><td align="center" width="5.8%" >' \
                    + tn(wzg[i]) + '</td><td align="center" width="6.7%">' \
                    + tn(wzd[i]) + '</td><td  align="center" width="5.8%">' \
                    + tp(pjczl[i]) + '</td><td align="center" width="6%" >' \
                    + tp2(hypjpm[i]) + '</td><td align="center" width="6%">' \
                    + tn2(hypjdf[i]) + '</td><td align="center" width="6%">' \
                    + tn2(gpdf[i]) + '</td><td align="center" width="6%">' \
                    + tn2(dzxs[i]) + '</td><td width="9.5%"  nowrap="nowrap"><a  target="_blank"  href="http://www.gushaizi.com/fxbg/行业3 ' + hym3[i].replace(' ','') + '.html" >' \
                    + hym3[i].replace(' ','') + '</a></td></tr>'
    nr = ah.replace("股筛子",h)  \
                + hybt1.replace('行业名4','行业名3').replace("预计涨跌排序",'<a  target="_blank"  href="http://www.gushaizi.com/fxbg/hyjg.html" >行业4：' + h + '</a>')  \
                + nr + '</table>' + '<table><br/><br/><br/><br/><br/><br/><br/></table>' + at
    f = codecs.open('C:\\JR\\网站\\fxbg\\行业4' + ' ' + h + '.html','w', 'UTF-8')
    f.write(nr)
    f.close()
print("        各个分行业排序文件完成。")


print("4 开始写行业排序……")
table = data.sheets()[2]
c0 = table.col_values(0)
c1 = table.col_values(1)
c2 = table.col_values(12)
c3 = table.col_values(13)
c4 = table.col_values(14)
c5 = table.col_values(5)
c6 = table.col_values(6)
c7 = table.col_values(7)
c8 = table.col_values(8)
c9 = table.col_values(9)
c10 = table.col_values(10)
c11 = table.col_values(11)
table = data.sheets()[1]
hy = '<div style = "line-height:0.35"><br/></div><h2 align="center"><a href="http://www.gushaizi.com/fxbg/hyjg.html" target="_blank">行业</a></h2>'+ '<p  align="center">' + getDate() + '</p><p align="center">市场平均泡沫：' + tp(str((float(table.cell(3,3).value) + float(table.cell(3,6).value) + float(table.cell(3,9).value))/3)) + '&nbsp;建议仓位：' + tp(str(table.cell(3,2).value)) + '</p><p  align="center">上证泡沫：' + tp(str(table.cell(3,3).value)) + '&nbsp;中小板泡沫：' + tp(str(table.cell(3,6).value)) +'&nbsp;创业板泡沫：' + tp(str(table.cell(3,9).value))  + '</p>'
hy = hy + '<p align = "center">' + '<a href="http://finance.sina.com.cn" target="_blank">新浪财经</a>' \
        + '<a href="http://news.hexun.com/" target="_blank">&nbsp;&nbsp;和讯</a>' \
        + '<a href="http://finance.ifeng.com/" target="_blank">&nbsp;&nbsp;凤凰</a>' \
        + '<a href="http://business.sohu.com/" target="_blank">&nbsp;&nbsp;搜狐</a>' \
        + '<a href="http://www.caijing.com.cn/dailynews/" target="_blank">&nbsp;&nbsp;财经</a>' \
        + '<a href="http://www.stockstar.com/roll/finance.shtml" target="_blank">&nbsp;&nbsp;证券之星</a>' \
        + '<a href="http://finance.eastmoney.com/yaowen.html" target="_blank">&nbsp;&nbsp;东方财富</a>' \
        + '<a href="http://news.cnstock.com/" target="_blank">&nbsp;&nbsp;中国证券网</a></p>'
hy = hy + '<p align="center"><table width="75%" cellspacing="0"  align="center"  border="1" bordercolor="#A1A1A1"><tr><th width="4%" nowrap="nowrap">' \
        + c0[2] + '</th><th width="11%" nowrap="nowrap">&nbsp;&nbsp;&nbsp;' \
        + c1[2] + '&nbsp;&nbsp;&nbsp;</th><th width="6%" nowrap="nowrap">' \
        + c2[2] + '</th><th width="6%" nowrap="nowrap">' \
        + c3[2] + '</th><th width="6%" nowrap="nowrap"><font color="Chocolate">' \
        + c4[2] + '</font></th><th width="6%" nowrap="nowrap">' \
        + c5[2][-2:] + '</th><th width="6%" nowrap="nowrap">' \
        + c6[2][-2:] + '</th><th width="6%" nowrap="nowrap">' \
        + c7[2] + '</th><th width="6%" nowrap="nowrap">' \
        + c8[2] + '</th><th width="6%" nowrap="nowrap">' \
        + c9[2] + '</th><th width="6%" nowrap="nowrap">' \
        + c10[2] +  '</th><th width="6%"  nowrap="nowrap">' \
        + c11[2] + '</th></tr>'
for i in range(3,len(c1)):
    hy = hy + '<tr><td align="center" width="4%">' \
            + c0[i][-1] + '</td><td align="left" width="3%" ><a target="_blank"  href="http://www.gushaizi.com/fxbg/' + c0[i] + ' ' + c1[i] + '.html" >' \
            + c1[i] + '</a></td><td align="center" width="10%" nowrap="nowrap" >' \
            + tnn(c2[i]) + '</a></td><td align="center" width="6%" >' \
            + tnn(c3[i]) + '</td><td align="center" width="6%" ><font color="Chocolate">' \
            + tp(c4[i]) + '</font></td><td align="center" width="6%" >' \
            + tn(c5[i]) + '</td><td align="center" width="6%" >' \
            + tn2(c6[i]) + '</td><td align="center" width="6%">' \
            + tp(c7[i]) + '</td><td  align="center" width="6%">' \
            + tp(c8[i]) + '</td><td align="center" width="6%" >' \
            + tp(c9[i]) + '</td><td align="center" width="6%">' \
            + tp(c10[i]) + '</td><td width="6%"   align="center" nowrap="nowrap">' \
            + tp(c11[i]) + '</td></tr>'
f = codecs.open('C:\\JR\\网站\\fxbg\\hy.html','w', 'UTF-8')
hy = ah.replace('股筛子','行业') + '<BLOCKQUOTE><BLOCKQUOTE><BLOCKQUOTE>' + hy + '</table></BLOCKQUOTE></BLOCKQUOTE></BLOCKQUOTE>' + '<table><br/><br/><br/><br/><br/><br/><br/></table>' + at
f.write(hy)
f.close()
print("        行业排序文件完成。")


print("5 开始写说明文件……")
ae = '''
<div style = "line-height:0.35"><br/></div>
<big><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote>
<h3  align="center">股票评估方法说明</h3>               
<br/>    <h4 >（一）股票评估基本原理</h4>
<ol><li>惯性原理，原来的趋势不会立刻改变。原来的趋势如果没有受到新变化的影响不会改变。所以可以先分析原来的成长性，然后再分析有哪些新情况影响了这个成长性，并对该历史成长性进行修正。这也说明历史成长性可以用于预测未来的趋势，但需要根据新情况加以修正。
</li><li>作用力与加速度成正比，与质量成反比。分析股票时现有市值是其质量，作用于其上的影响是力量。市值越小，越容易受影响（包括好的坏的）；影响越大，股票价格变化也越大。
</li><li>作用力与反作用力，作用点相同，大小相等，方向相反。作用点是股票市值；作用力是外界合力，是指看涨与看跌的合力；反作用力是股票现值与合理市值的差。作用力使市值变动，现值与合理市值之差相应变动，两者始终处于相互抗衡的状态。
</li></ol>
<br/>    <h4>（二）系统受力分析方法</h4>
<ol><li>作用对象是股票市值，影响其变动的因素是外力。
</li><li>作用力（影响因素）包括：
<ol><li>看涨力量：预期越乐观，向上的抬升力越大。受有情绪或态度的资金的推动。主要是一种选美。受行业和整个市场泡沫水平影响。
</li><li>看跌力量：预期越悲观，向下的压力越大。受有情绪或态度的资金的推动。主要是一种选美。受行业和整个市场泡沫水平影响。
</li><li>现有市值：现有市值越高，向下的压力越大。
</li><li>合理市值：未来成长能够支持要求回报率的合理市值。
</li></ol></ol>
<br/>    <h4>（三）股票投资的基本步骤</h4>
<ol><li>计算历史成长率，用时间加权，越近的权重越大；
</li><li>利用行业成长、股票质量修正成长率，得到预测成长率；
</li><li>利用预测成长率，在假设的要求回报下，计算可以支撑该要求回报的理论市盈率；
</li><li>利用理论市盈率与现有每股收益，计算价格；
</li><li>与现有价格比较，计算理论涨跌幅；
</li><li>将所有股票理论涨跌幅进行排序，对排名靠前的股票进行人工分析，得出关注股票的人工修正权数，并选出可以建仓的股票；
</li><li>跟踪股票的涨跌，不断修正股票预期涨跌幅，设置一个安全的止盈价格；
</li><li>不断选出涨幅空间大的股票，以更换已经涨幅缩小的股票；
</li><li>利用所有股票的理论价格计算整个市场的泡沫和所有行业的泡沫情况，用以控制仓位；
</li><li>利用舆情进行短期校准，利用其它公司信息特别是公司公告进行长期校准。
</li></ol>
<br/>    <h4>（四）合理价位计算方法</h4>
<ol><li>计算历史成长率：先对近三年去非正常收益的每股收益增长率进行加权平均，得出其成长的惯性，特别注意，超过100%的历史平均增长都被认为不可持续，直接认为是100%；
</li><li>对历史成长率打折：再对股票打分，利用打分对该历史成长率进行加权；
</li><li>利用成长率计算股票理论市盈率；
</li><li>将理论市盈率与近期加权每股收益率相乘得出合理市价；
</li><li>利用合理市价计算预期股票涨跌率；
</li><li>利用合理涨跌率计算合理卖出价。
</li></ol>
<br/>    <h4>（五）合理市盈率估计方法</h4>
<br/>    采用三阶段折价模型：
<ol><li>高速成长阶段，为期4年。4年似乎比较短，但其实保持4年高速成长已经不容易。
</li><li>中速成长阶段，为期5年，为第一阶段的40%。
</li><li>正常成长阶段。即第十年开始公司按照中国那时的GDP增长速度同步增长，即永续成长率。估计为3%。这个数值显得比较小，是出于谨慎性原则。同时，这个值是到永远的，所以也不容易。
</li></ol>
<br/>    <h4>（六）行业评分方法</h4>
<ol><li>先由行业前五年、前两年、前一年、最近一个月的收益加权；
</li><li>利用每个行业平均数进行标准化；
</li><li>对加权的得分求方根，以调高最小的数和调低最大的数；
</li><li>将四个层次行业的得分进行加权平均；
</li><li>对一些行业进行主观评分，评分基础是对中国经济转型对各行业影响的认识得出。
</li></ol>
<br/>    以上方法的理由是：中国经济经历转型，最近各行业的表现可以用来作为大家对行业未来长期表现的平均看法。
<br/>
<br/>    <h4>（七）主观评分方法</h4>
<br/>    由研究员对股票平时信息分析后，再对股票现有成长率权重的基础上，给出一个加权数。得分进行给出调增或调减的加权的权重。得分为1时，表示没有进行调整；大于1表示，调高得分；小于1表示调低得分。该得分直接将合理价格打折，这是一个强逻辑。
<br/>
<br/>    <h4>（八）股票质量分析</h4>
<br/>    每支股票与其它所有股票的得分进行排序，算出其位置是靠前百分之多少，再将所有五个方面加权得出。其中反弹能力、利润成长能力、主营成长能力、盈利能力、稳健性分别占为：20%、15%、25%、15%、25%。
<ol><li>上涨弹性分析：本方法认为小市值、股数少、轻资产、高研发、低于均线、主营占比高、波动率高、贝塔高、员工数少、户均持股在减少等的公司上长潜力大，另外，相对于2015年顶部和接下来的反弹底部下跌得最多的反弹力度大。
</li><li>利润增长分析：股票过去三年利润成长性分析（用过去三年和最近三季的复权的每股收益进行增长率及增长的增长率进行分析，时间越近的权数越大。
</li><li>主营成长分析：股票过去三年主营成长性分析（用过去三年和最近三季的主营计算增长率及增长的增长率进行分析，时间越近的权数越大。
</li><li>盈利能力分析：主要用到了毛利率指标，用过去三年和最近三季的复权的每股收益进行增长率及增长的增长率进行分析，时间越近的权数越大。还用到其它指标，主要是净资产收益率。
</li><li>稳健性分析：股息率高、现金持有多、负债率低、销售费用率和管理费用率在降低、大股东占比合理、前十大股东占比合理等的公司稳健性强。另外，还用到了六大诊断股票陷阱的指标，避免公司业绩变脸。
</li><ol  type="A"><li>其他应收款与总资产比<10%
</li><li>其它经营活动现金流与经营活动现金流之比<10%
</li><li>其它投资活动现金流与投资活动现金流之比<10%
</li><li>营业外收入与营业收入比<10%
</li><li>经营活动现金>0
</li><li>总资产利率>7%
</li></ol></ol>

<br/>    <h4>（九）股票合理价格计算方法</h4>
<ol><li>利用扣非每股收益、近三年加权平均收益、TTM收益分别估计股价，后加权得到股票合理价格；
</li><li>加权权重分别为：扣非每股收益，3/6；近三年加权平均收益，2/6；TTM收益，1/6。
</li><li>利用合理价格计算股票涨跌幅；
</li><li>对该涨跌幅乘以50%，原因是： 一是广泛存在的均值回归；二是在三阶段模型中用复利计算合理市盈时，对成长性很敏感，过低的成长和过高的成长，或许只是短暂现象，但对合理市盈有极大的放大和缩小作用，这一调整有助于修正这种情况；三是对过高的涨幅，出于谨慎性原则进行修正。
</li></ol>
<br/>    <h4>（十）相关概念说明</h4>
<ol><li>   行业分类：行业分四个层次，根据万得行业分类得出。
</li><li>股价收益率：每股收益除股价。
</li><li>上年利润市盈率：上年利润计算的市盈率。
</li><li>泡沫指数：现有所有指数内的股票总市值和总的合理市值相除，再乘以指数现有点位，得指数合理点位。最后用指数合理点位与现有点位比较计算泡沫。
</li><li>增长趋势：为增长率的复利增长率。
</li><li>当年热度趋势：最近12个月月换手率与月份数相关系数。
</li><li>当月热度趋势：最近1个月日换手率与日期数相关系数。
</li></ol>
<br/>    <h4>（十一）相关参数说明</h4>
<ol><li>建议卖出价：为合理价位下调15%得出。这是为了考虑安全边际，即止盈并非止在合理价，而是在合理价下方。
</li><li>建议买入价：为合理价位下调50%得出。这是为了考虑安全边际，即购半被低估100%的股票。如果在合理价位下调15%时卖出，至少可以产生70%的收益。
</li><li>折现率：本计算采用的折现率为：10%
</li><li>历史数据：无特别指明，使用了近三年年末数据，当年半年度数据和三季度数据。
</li></ol><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</big></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote>
'''
f = codecs.open('C:\\JR\\网站\\fxbg\\sm.html','w', 'UTF-8')
sm = ah.replace("股筛子","说明") + ae + at
f.write(sm)
f.close()
print("        说明文件完成。")

print("6 开始写行业结构文件……")
ae = '''
<div style = "line-height:0.35"><br/></div>
<big><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote>
<h3  align="center"><a href="http://www.gushaizi.com/fxbg/hy.html" target="_blank">行业结构</a></h3>               
<br/>	1.材料	<a href="http://www.gushaizi.com/fxbg/行业1 材料.html" target="_blank">498</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.材料Ⅱ	<a href="http://www.gushaizi.com/fxbg/行业2 材料Ⅱ.html" target="_blank">498</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.化工	<a href="http://www.gushaizi.com/fxbg/行业3 化工.html" target="_blank">235</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.多元化工	<a href="http://www.gushaizi.com/fxbg/行业4 多元化工.html" target="_blank">3</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.工业气体	<a href="http://www.gushaizi.com/fxbg/行业4 工业气体.html" target="_blank">1</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.化肥与农用化工	<a href="http://www.gushaizi.com/fxbg/行业4 化肥与农用化工.html" target="_blank">47</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.化纤	<a href="http://www.gushaizi.com/fxbg/行业4 化纤.html" target="_blank">26</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.基础化工	<a href="http://www.gushaizi.com/fxbg/行业4 基础化工.html" target="_blank">117</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.特种化工	<a href="http://www.gushaizi.com/fxbg/行业4 特种化工.html" target="_blank">41</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.建材Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 建材Ⅲ.html" target="_blank">46</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.建材	<a href="http://www.gushaizi.com/fxbg/行业4 建材.html" target="_blank">46</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.金属、非金属与采矿	<a href="http://www.gushaizi.com/fxbg/行业3 金属、非金属与采矿.html" target="_blank">169</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.白银	<a href="http://www.gushaizi.com/fxbg/行业4 白银.html" target="_blank">1</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.钢铁	<a href="http://www.gushaizi.com/fxbg/行业4 钢铁.html" target="_blank">45</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.贵金属与矿石	<a href="http://www.gushaizi.com/fxbg/行业4 贵金属与矿石.html" target="_blank">1</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.黄金	<a href="http://www.gushaizi.com/fxbg/行业4 黄金.html" target="_blank">12</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.金属非金属	<a href="http://www.gushaizi.com/fxbg/行业4 金属非金属.html" target="_blank">91</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.铝	<a href="http://www.gushaizi.com/fxbg/行业4 铝.html" target="_blank">19</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.容器与包装	<a href="http://www.gushaizi.com/fxbg/行业3 容器与包装.html" target="_blank">16</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.金属与玻璃容器	<a href="http://www.gushaizi.com/fxbg/行业4 金属与玻璃容器.html" target="_blank">12</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.纸包装	<a href="http://www.gushaizi.com/fxbg/行业4 纸包装.html" target="_blank">4</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.纸与林木产品	<a href="http://www.gushaizi.com/fxbg/行业3 纸与林木产品.html" target="_blank">32</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.林木产品	<a href="http://www.gushaizi.com/fxbg/行业4 林木产品.html" target="_blank">11</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.纸制品	<a href="http://www.gushaizi.com/fxbg/行业4 纸制品.html" target="_blank">21</a>
<br/>	1.电信服务	<a href="http://www.gushaizi.com/fxbg/行业1 电信服务.html" target="_blank">5</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.电信服务Ⅱ	<a href="http://www.gushaizi.com/fxbg/行业2 电信服务Ⅱ.html" target="_blank">5</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.多元电信服务	<a href="http://www.gushaizi.com/fxbg/行业3 多元电信服务.html" target="_blank">4</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.非传统电信运营商	<a href="http://www.gushaizi.com/fxbg/行业4 非传统电信运营商.html" target="_blank">2</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.综合电信服务	<a href="http://www.gushaizi.com/fxbg/行业4 综合电信服务.html" target="_blank">2</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.无线电信业务Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 无线电信业务Ⅲ.html" target="_blank">1</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.无线电信业务	<a href="http://www.gushaizi.com/fxbg/行业4 无线电信业务.html" target="_blank">1</a>
<br/>	1.工业	<a href="http://www.gushaizi.com/fxbg/行业1 工业.html" target="_blank">681</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.商业和专业服务	<a href="http://www.gushaizi.com/fxbg/行业2 商业和专业服务.html" target="_blank">47</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.商业服务与用品	<a href="http://www.gushaizi.com/fxbg/行业3 商业服务与用品.html" target="_blank">39</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.办公服务与用品	<a href="http://www.gushaizi.com/fxbg/行业4 办公服务与用品.html" target="_blank">2</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.环境与设施服务	<a href="http://www.gushaizi.com/fxbg/行业4 环境与设施服务.html" target="_blank">28</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.商业印刷	<a href="http://www.gushaizi.com/fxbg/行业4 商业印刷.html" target="_blank">7</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.综合支持服务	<a href="http://www.gushaizi.com/fxbg/行业4 综合支持服务.html" target="_blank">2</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.专业服务	<a href="http://www.gushaizi.com/fxbg/行业3 专业服务.html" target="_blank">8</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.调查和咨询服务	<a href="http://www.gushaizi.com/fxbg/行业4 调查和咨询服务.html" target="_blank">8</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.运输	<a href="http://www.gushaizi.com/fxbg/行业2 运输.html" target="_blank">89</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.公路与铁路运输	<a href="http://www.gushaizi.com/fxbg/行业3 公路与铁路运输.html" target="_blank">16</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.公路运输	<a href="http://www.gushaizi.com/fxbg/行业4 公路运输.html" target="_blank">11</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.铁路运输	<a href="http://www.gushaizi.com/fxbg/行业4 铁路运输.html" target="_blank">5</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.海运Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 海运Ⅲ.html" target="_blank">12</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.海运	<a href="http://www.gushaizi.com/fxbg/行业4 海运.html" target="_blank">12</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.航空Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 航空Ⅲ.html" target="_blank">6</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.航空	<a href="http://www.gushaizi.com/fxbg/行业4 航空.html" target="_blank">6</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.航空货运与物流Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 航空货运与物流Ⅲ.html" target="_blank">11</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.航空货运与物流	<a href="http://www.gushaizi.com/fxbg/行业4 航空货运与物流.html" target="_blank">11</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.交通基础设施	<a href="http://www.gushaizi.com/fxbg/行业3 交通基础设施.html" target="_blank">44</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.公路与铁路	<a href="http://www.gushaizi.com/fxbg/行业4 公路与铁路.html" target="_blank">20</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.海港与服务	<a href="http://www.gushaizi.com/fxbg/行业4 海港与服务.html" target="_blank">19</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.机场服务	<a href="http://www.gushaizi.com/fxbg/行业4 机场服务.html" target="_blank">5</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.资本货物	<a href="http://www.gushaizi.com/fxbg/行业2 资本货物.html" target="_blank">545</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.电气设备	<a href="http://www.gushaizi.com/fxbg/行业3 电气设备.html" target="_blank">137</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.电气部件与设备	<a href="http://www.gushaizi.com/fxbg/行业4 电气部件与设备.html" target="_blank">113</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.重型电气设备	<a href="http://www.gushaizi.com/fxbg/行业4 重型电气设备.html" target="_blank">24</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.航空航天与国防Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 航空航天与国防Ⅲ.html" target="_blank">22</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.航天航空与国防	<a href="http://www.gushaizi.com/fxbg/行业4 航天航空与国防.html" target="_blank">22</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.机械	<a href="http://www.gushaizi.com/fxbg/行业3 机械.html" target="_blank">241</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.工业机械	<a href="http://www.gushaizi.com/fxbg/行业4 工业机械.html" target="_blank">192</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.建筑机械与重型卡车	<a href="http://www.gushaizi.com/fxbg/行业4 建筑机械与重型卡车.html" target="_blank">44</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.农用农业机械	<a href="http://www.gushaizi.com/fxbg/行业4 农用农业机械.html" target="_blank">5</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.建筑产品Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 建筑产品Ⅲ.html" target="_blank">32</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.建筑产品	<a href="http://www.gushaizi.com/fxbg/行业4 建筑产品.html" target="_blank">32</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.建筑与工程Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 建筑与工程Ⅲ.html" target="_blank">59</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.建筑与工程	<a href="http://www.gushaizi.com/fxbg/行业4 建筑与工程.html" target="_blank">59</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.贸易公司与工业品经销商Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 贸易公司与工业品经销商Ⅲ.html" target="_blank">32</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.贸易公司与工业品经销商	<a href="http://www.gushaizi.com/fxbg/行业4 贸易公司与工业品经销商.html" target="_blank">32</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.综合类Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 综合类Ⅲ.html" target="_blank">22</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.综合类行业	<a href="http://www.gushaizi.com/fxbg/行业4 综合类行业.html" target="_blank">22</a>
<br/>	1.公用事业	<a href="http://www.gushaizi.com/fxbg/行业1 公用事业.html" target="_blank">96</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.公用事业Ⅱ	<a href="http://www.gushaizi.com/fxbg/行业2 公用事业Ⅱ.html" target="_blank">96</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.电力Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 电力Ⅲ.html" target="_blank">48</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.电力	<a href="http://www.gushaizi.com/fxbg/行业4 电力.html" target="_blank">48</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.独立电力生产商与能源贸易商Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 独立电力生产商与能源贸易商Ⅲ.html" target="_blank">9</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.独立电力生产商与能源贸易商	<a href="http://www.gushaizi.com/fxbg/行业4 独立电力生产商与能源贸易商.html" target="_blank">1</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.新能源发电业者	<a href="http://www.gushaizi.com/fxbg/行业4 新能源发电业者.html" target="_blank">8</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.复合型公用事业Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 复合型公用事业Ⅲ.html" target="_blank">12</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.复合型公用事业	<a href="http://www.gushaizi.com/fxbg/行业4 复合型公用事业.html" target="_blank">12</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.燃气Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 燃气Ⅲ.html" target="_blank">9</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.燃气	<a href="http://www.gushaizi.com/fxbg/行业4 燃气.html" target="_blank">9</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.水务Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 水务Ⅲ.html" target="_blank">18</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.水务	<a href="http://www.gushaizi.com/fxbg/行业4 水务.html" target="_blank">18</a>
<br/>	1.金融	<a href="http://www.gushaizi.com/fxbg/行业1 金融.html" target="_blank">192</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.保险Ⅱ	<a href="http://www.gushaizi.com/fxbg/行业2 保险Ⅱ.html" target="_blank">5</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.保险Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 保险Ⅲ.html" target="_blank">5</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.财产与意外伤害保险	<a href="http://www.gushaizi.com/fxbg/行业4 财产与意外伤害保险.html" target="_blank">1</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.多元化保险	<a href="http://www.gushaizi.com/fxbg/行业4 多元化保险.html" target="_blank">2</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.人寿与健康保险	<a href="http://www.gushaizi.com/fxbg/行业4 人寿与健康保险.html" target="_blank">2</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.多元金融	<a href="http://www.gushaizi.com/fxbg/行业2 多元金融.html" target="_blank">33</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.多元金融服务	<a href="http://www.gushaizi.com/fxbg/行业3 多元金融服务.html" target="_blank">5</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.多领域控股	<a href="http://www.gushaizi.com/fxbg/行业4 多领域控股.html" target="_blank">3</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.其他多元金融服务	<a href="http://www.gushaizi.com/fxbg/行业4 其他多元金融服务.html" target="_blank">2</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.资本市场	<a href="http://www.gushaizi.com/fxbg/行业3 资本市场.html" target="_blank">28</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.投资银行业与经纪业	<a href="http://www.gushaizi.com/fxbg/行业4 投资银行业与经纪业.html" target="_blank">25</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.资产管理与托管银行	<a href="http://www.gushaizi.com/fxbg/行业4 资产管理与托管银行.html" target="_blank">3</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.房地产	<a href="http://www.gushaizi.com/fxbg/行业2 房地产.html" target="_blank">138</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.房地产管理与开发	<a href="http://www.gushaizi.com/fxbg/行业3 房地产管理与开发.html" target="_blank">138</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.房地产服务	<a href="http://www.gushaizi.com/fxbg/行业4 房地产服务.html" target="_blank">1</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.房地产经营公司	<a href="http://www.gushaizi.com/fxbg/行业4 房地产经营公司.html" target="_blank">8</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.房地产开发	<a href="http://www.gushaizi.com/fxbg/行业4 房地产开发.html" target="_blank">129</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.银行	<a href="http://www.gushaizi.com/fxbg/行业2 银行.html" target="_blank">16</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.商业银行	<a href="http://www.gushaizi.com/fxbg/行业3 商业银行.html" target="_blank">16</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.多元化银行	<a href="http://www.gushaizi.com/fxbg/行业4 多元化银行.html" target="_blank">13</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.区域性银行	<a href="http://www.gushaizi.com/fxbg/行业4 区域性银行.html" target="_blank">3</a>
<br/>	1.可选消费	<a href="http://www.gushaizi.com/fxbg/行业1 可选消费.html" target="_blank">450</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.零售业	<a href="http://www.gushaizi.com/fxbg/行业2 零售业.html" target="_blank">71</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.多元化零售	<a href="http://www.gushaizi.com/fxbg/行业3 多元化零售.html" target="_blank">42</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.百货商店	<a href="http://www.gushaizi.com/fxbg/行业4 百货商店.html" target="_blank">40</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.综合货品商店	<a href="http://www.gushaizi.com/fxbg/行业4 综合货品商店.html" target="_blank">2</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.互联网与售货目录零售	<a href="http://www.gushaizi.com/fxbg/行业3 互联网与售货目录零售.html" target="_blank">3</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.互联网零售	<a href="http://www.gushaizi.com/fxbg/行业4 互联网零售.html" target="_blank">2</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.售货目录零售	<a href="http://www.gushaizi.com/fxbg/行业4 售货目录零售.html" target="_blank">1</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.消费品经销商Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 消费品经销商Ⅲ.html" target="_blank">12</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.消费品经销商	<a href="http://www.gushaizi.com/fxbg/行业4 消费品经销商.html" target="_blank">12</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.专营零售	<a href="http://www.gushaizi.com/fxbg/行业3 专营零售.html" target="_blank">14</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.电脑与电子产品零售	<a href="http://www.gushaizi.com/fxbg/行业4 电脑与电子产品零售.html" target="_blank">5</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.汽车零售	<a href="http://www.gushaizi.com/fxbg/行业4 汽车零售.html" target="_blank">8</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.专卖店	<a href="http://www.gushaizi.com/fxbg/行业4 专卖店.html" target="_blank">1</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.媒体Ⅱ	<a href="http://www.gushaizi.com/fxbg/行业2 媒体Ⅱ.html" target="_blank">64</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.媒体Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 媒体Ⅲ.html" target="_blank">64</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.出版	<a href="http://www.gushaizi.com/fxbg/行业4 出版.html" target="_blank">16</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.电影与娱乐	<a href="http://www.gushaizi.com/fxbg/行业4 电影与娱乐.html" target="_blank">24</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.广告	<a href="http://www.gushaizi.com/fxbg/行业4 广告.html" target="_blank">15</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.媒体Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业4 媒体Ⅲ.html" target="_blank">1</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.有线和卫星电视	<a href="http://www.gushaizi.com/fxbg/行业4 有线和卫星电视.html" target="_blank">8</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.耐用消费品与服装	<a href="http://www.gushaizi.com/fxbg/行业2 耐用消费品与服装.html" target="_blank">173</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.纺织品、服装与奢侈品	<a href="http://www.gushaizi.com/fxbg/行业3 纺织品、服装与奢侈品.html" target="_blank">84</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.纺织品	<a href="http://www.gushaizi.com/fxbg/行业4 纺织品.html" target="_blank">37</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.服装、服饰与奢侈品	<a href="http://www.gushaizi.com/fxbg/行业4 服装、服饰与奢侈品.html" target="_blank">43</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.鞋类	<a href="http://www.gushaizi.com/fxbg/行业4 鞋类.html" target="_blank">4</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.家庭耐用消费品	<a href="http://www.gushaizi.com/fxbg/行业3 家庭耐用消费品.html" target="_blank">73</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.家庭装饰品	<a href="http://www.gushaizi.com/fxbg/行业4 家庭装饰品.html" target="_blank">8</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.家用电器	<a href="http://www.gushaizi.com/fxbg/行业4 家用电器.html" target="_blank">29</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.家用器具与特殊消费品	<a href="http://www.gushaizi.com/fxbg/行业4 家用器具与特殊消费品.html" target="_blank">12</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.消费电子产品	<a href="http://www.gushaizi.com/fxbg/行业4 消费电子产品.html" target="_blank">22</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.住宅建筑	<a href="http://www.gushaizi.com/fxbg/行业4 住宅建筑.html" target="_blank">2</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.休闲设备与用品	<a href="http://www.gushaizi.com/fxbg/行业3 休闲设备与用品.html" target="_blank">16</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.摄影用品	<a href="http://www.gushaizi.com/fxbg/行业4 摄影用品.html" target="_blank">3</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.休闲用品	<a href="http://www.gushaizi.com/fxbg/行业4 休闲用品.html" target="_blank">13</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.汽车与汽车零部件	<a href="http://www.gushaizi.com/fxbg/行业2 汽车与汽车零部件.html" target="_blank">107</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.汽车	<a href="http://www.gushaizi.com/fxbg/行业3 汽车.html" target="_blank">26</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.摩托车制造	<a href="http://www.gushaizi.com/fxbg/行业4 摩托车制造.html" target="_blank">4</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.汽车制造	<a href="http://www.gushaizi.com/fxbg/行业4 汽车制造.html" target="_blank">22</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.汽车零配件	<a href="http://www.gushaizi.com/fxbg/行业3 汽车零配件.html" target="_blank">81</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.机动车零配件与设备	<a href="http://www.gushaizi.com/fxbg/行业4 机动车零配件与设备.html" target="_blank">70</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.轮胎与橡胶	<a href="http://www.gushaizi.com/fxbg/行业4 轮胎与橡胶.html" target="_blank">11</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.消费者服务Ⅱ	<a href="http://www.gushaizi.com/fxbg/行业2 消费者服务Ⅱ.html" target="_blank">35</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.酒店、餐馆与休闲Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 酒店、餐馆与休闲Ⅲ.html" target="_blank">34</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.餐馆	<a href="http://www.gushaizi.com/fxbg/行业4 餐馆.html" target="_blank">3</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.酒店、度假村与豪华游轮	<a href="http://www.gushaizi.com/fxbg/行业4 酒店、度假村与豪华游轮.html" target="_blank">30</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.休闲设施	<a href="http://www.gushaizi.com/fxbg/行业4 休闲设施.html" target="_blank">1</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.综合消费者服务Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 综合消费者服务Ⅲ.html" target="_blank">1</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.教育服务	<a href="http://www.gushaizi.com/fxbg/行业4 教育服务.html" target="_blank">1</a>
<br/>	1.能源	<a href="http://www.gushaizi.com/fxbg/行业1 能源.html" target="_blank">67</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.能源Ⅱ	<a href="http://www.gushaizi.com/fxbg/行业2 能源Ⅱ.html" target="_blank">67</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.能源设备与服务	<a href="http://www.gushaizi.com/fxbg/行业3 能源设备与服务.html" target="_blank">18</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.石油天然气设备与服务	<a href="http://www.gushaizi.com/fxbg/行业4 石油天然气设备与服务.html" target="_blank">18</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.石油、天然气与供消费用燃料	<a href="http://www.gushaizi.com/fxbg/行业3 石油、天然气与供消费用燃料.html" target="_blank">49</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.煤炭与消费用燃料	<a href="http://www.gushaizi.com/fxbg/行业4 煤炭与消费用燃料.html" target="_blank">35</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.石油天然气勘探与生产	<a href="http://www.gushaizi.com/fxbg/行业4 石油天然气勘探与生产.html" target="_blank">2</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.石油与天然气的储存和运输	<a href="http://www.gushaizi.com/fxbg/行业4 石油与天然气的储存和运输.html" target="_blank">2</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.石油与天然气的炼制和销售	<a href="http://www.gushaizi.com/fxbg/行业4 石油与天然气的炼制和销售.html" target="_blank">8</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.综合性石油天然气	<a href="http://www.gushaizi.com/fxbg/行业4 综合性石油天然气.html" target="_blank">2</a>
<br/>	1.日常消费	<a href="http://www.gushaizi.com/fxbg/行业1 日常消费.html" target="_blank">185</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.家庭与个人用品	<a href="http://www.gushaizi.com/fxbg/行业2 家庭与个人用品.html" target="_blank">8</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.个人用品Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 个人用品Ⅲ.html" target="_blank">3</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.个人用品	<a href="http://www.gushaizi.com/fxbg/行业4 个人用品.html" target="_blank">3</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.家庭用品Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 家庭用品Ⅲ.html" target="_blank">5</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.家庭用品	<a href="http://www.gushaizi.com/fxbg/行业4 家庭用品.html" target="_blank">5</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.食品、饮料与烟草	<a href="http://www.gushaizi.com/fxbg/行业2 食品、饮料与烟草.html" target="_blank">143</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.食品	<a href="http://www.gushaizi.com/fxbg/行业3 食品.html" target="_blank">107</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.农产品	<a href="http://www.gushaizi.com/fxbg/行业4 农产品.html" target="_blank">30</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.食品加工与肉类	<a href="http://www.gushaizi.com/fxbg/行业4 食品加工与肉类.html" target="_blank">77</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.饮料	<a href="http://www.gushaizi.com/fxbg/行业3 饮料.html" target="_blank">36</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.白酒与葡萄酒	<a href="http://www.gushaizi.com/fxbg/行业4 白酒与葡萄酒.html" target="_blank">26</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.啤酒	<a href="http://www.gushaizi.com/fxbg/行业4 啤酒.html" target="_blank">8</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.软饮料	<a href="http://www.gushaizi.com/fxbg/行业4 软饮料.html" target="_blank">2</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.食品与主要用品零售Ⅱ	<a href="http://www.gushaizi.com/fxbg/行业2 食品与主要用品零售Ⅱ.html" target="_blank">34</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.食品与主要用品零售Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 食品与主要用品零售Ⅲ.html" target="_blank">34</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.大卖场与超市	<a href="http://www.gushaizi.com/fxbg/行业4 大卖场与超市.html" target="_blank">11</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.食品分销商	<a href="http://www.gushaizi.com/fxbg/行业4 食品分销商.html" target="_blank">2</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.药品零售	<a href="http://www.gushaizi.com/fxbg/行业4 药品零售.html" target="_blank">21</a>
<br/>	1.信息技术	<a href="http://www.gushaizi.com/fxbg/行业1 信息技术.html" target="_blank">412</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.半导体与半导体生产设备	<a href="http://www.gushaizi.com/fxbg/行业2 半导体与半导体生产设备.html" target="_blank">47</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.半导体产品与半导体设备	<a href="http://www.gushaizi.com/fxbg/行业3 半导体产品与半导体设备.html" target="_blank">47</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.半导体产品	<a href="http://www.gushaizi.com/fxbg/行业4 半导体产品.html" target="_blank">42</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.半导体设备	<a href="http://www.gushaizi.com/fxbg/行业4 半导体设备.html" target="_blank">5</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.技术硬件与设备	<a href="http://www.gushaizi.com/fxbg/行业2 技术硬件与设备.html" target="_blank">241</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.电脑与外围设备	<a href="http://www.gushaizi.com/fxbg/行业3 电脑与外围设备.html" target="_blank">18</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.电脑存储与外围设备	<a href="http://www.gushaizi.com/fxbg/行业4 电脑存储与外围设备.html" target="_blank">6</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.电脑硬件	<a href="http://www.gushaizi.com/fxbg/行业4 电脑硬件.html" target="_blank">12</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.电子设备、仪器和元件	<a href="http://www.gushaizi.com/fxbg/行业3 电子设备、仪器和元件.html" target="_blank">169</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.电子设备和仪器	<a href="http://www.gushaizi.com/fxbg/行业4 电子设备和仪器.html" target="_blank">72</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.电子元件	<a href="http://www.gushaizi.com/fxbg/行业4 电子元件.html" target="_blank">89</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.电子制造服务	<a href="http://www.gushaizi.com/fxbg/行业4 电子制造服务.html" target="_blank">3</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.技术产品经销商	<a href="http://www.gushaizi.com/fxbg/行业4 技术产品经销商.html" target="_blank">5</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.通信设备Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 通信设备Ⅲ.html" target="_blank">54</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.通信设备	<a href="http://www.gushaizi.com/fxbg/行业4 通信设备.html" target="_blank">54</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.软件与服务	<a href="http://www.gushaizi.com/fxbg/行业2 软件与服务.html" target="_blank">124</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.互联网软件与服务Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 互联网软件与服务Ⅲ.html" target="_blank">23</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.互联网软件与服务	<a href="http://www.gushaizi.com/fxbg/行业4 互联网软件与服务.html" target="_blank">23</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.软件	<a href="http://www.gushaizi.com/fxbg/行业3 软件.html" target="_blank">41</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.家庭娱乐软件	<a href="http://www.gushaizi.com/fxbg/行业4 家庭娱乐软件.html" target="_blank">1</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.应用软件	<a href="http://www.gushaizi.com/fxbg/行业4 应用软件.html" target="_blank">40</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.信息技术服务	<a href="http://www.gushaizi.com/fxbg/行业3 信息技术服务.html" target="_blank">60</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.数据处理与外包服务	<a href="http://www.gushaizi.com/fxbg/行业4 数据处理与外包服务.html" target="_blank">5</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.信息科技咨询与其它服务	<a href="http://www.gushaizi.com/fxbg/行业4 信息科技咨询与其它服务.html" target="_blank">55</a>
<br/>	1.医疗保健	<a href="http://www.gushaizi.com/fxbg/行业1 医疗保健.html" target="_blank">194</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.医疗保健设备与服务	<a href="http://www.gushaizi.com/fxbg/行业2 医疗保健设备与服务.html" target="_blank">29</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.医疗保健技术Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 医疗保健技术Ⅲ.html" target="_blank">2</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.医疗保健技术	<a href="http://www.gushaizi.com/fxbg/行业4 医疗保健技术.html" target="_blank">2</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.医疗保健设备与用品	<a href="http://www.gushaizi.com/fxbg/行业3 医疗保健设备与用品.html" target="_blank">23</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.医疗保健设备	<a href="http://www.gushaizi.com/fxbg/行业4 医疗保健设备.html" target="_blank">19</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.医疗保健用品	<a href="http://www.gushaizi.com/fxbg/行业4 医疗保健用品.html" target="_blank">4</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.医疗保健提供商与服务	<a href="http://www.gushaizi.com/fxbg/行业3 医疗保健提供商与服务.html" target="_blank">4</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.保健护理服务	<a href="http://www.gushaizi.com/fxbg/行业4 保健护理服务.html" target="_blank">2</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.保健护理设施	<a href="http://www.gushaizi.com/fxbg/行业4 保健护理设施.html" target="_blank">2</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;2.制药、生物科技与生命科学	<a href="http://www.gushaizi.com/fxbg/行业2 制药、生物科技与生命科学.html" target="_blank">165</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.生命科学工具和服务Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 生命科学工具和服务Ⅲ.html" target="_blank">3</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.生命科学工具和服务	<a href="http://www.gushaizi.com/fxbg/行业4 生命科学工具和服务.html" target="_blank">3</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.生物科技Ⅲ	<a href="http://www.gushaizi.com/fxbg/行业3 生物科技Ⅲ.html" target="_blank">30</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.生物科技	<a href="http://www.gushaizi.com/fxbg/行业4 生物科技.html" target="_blank">30</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.制药	<a href="http://www.gushaizi.com/fxbg/行业3 制药.html" target="_blank">132</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.西药	<a href="http://www.gushaizi.com/fxbg/行业4 西药.html" target="_blank">77</a>
<br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.中药	<a href="http://www.gushaizi.com/fxbg/行业4 中药.html" target="_blank">55</a>
<br/>	总计	<a href="http://www.gushaizi.com/fxbg/qpx.html" target="_blank">2780</a>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</big></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote>
'''
f = codecs.open('C:\\JR\\网站\\fxbg\\hyjg.html','w', 'UTF-8')
sm = ah.replace("股筛子","行业结构") + ae + at
f.write(sm)
f.close()
print("        行业名完成。")


print("7 开始写搜索首页……")
sosuo = '''
<html lang="zh-CN"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge" ><meta charset="utf-8">
<title>股筛子</title>
<head>
	<link rel="shortcut icon" href="/favicon.ico">
	<style>
		body {
			margin-left: 0px;
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 0px;
		}
		.auto_hidden {
			width:204px;border-top: 1px solid #333;
			border-bottom: 1px solid #333;
			border-left: 1px solid #333;
			border-right: 1px solid #333;
			position:absolute;
			display:none;
		}
		.auto_show {
			width:204px;
			border-top: 1px solid #333;
			border-bottom: 1px solid #333;
			border-left: 1px solid #333;
			border-right: 1px solid #333;
			position:absolute;
			z-index:9999; /* 设置对象的层叠顺序 */
			display:block;
		}
		.auto_onmouseover{
			color:#ffffff;
			background-color:highlight;
			width:100%;
		}
		.auto_onmouseout{
			color:#000000;
			width:100%;
			background-color:#ffffff;
		}
	</style>
 
	<script type="text/javascript">
		var codes = new Array('yd','jg','hyjg','help','000001','000002','000004','000005','000006','000007','000008','000009','000010','000011','000012','000014','000016','000017','000018','000019','000020','000021','000022','000023','000024','000025','000026','000027','000028','000029','000030','000031','000032','000033','000034','000035','000036','000037','000038','000039','000040','000042','000043','000045','000046','000048','000049','000050','000055','000056','000058','000059','000060','000061','000062','000063','000065','000066','000068','000069','000070','000078','000088','000089','000090','000096','000099','000100','000150','000151','000153','000155','000156','000157','000158','000159','000166','000301','000333','000338','000400','000401','000402','000403','000404','000407','000408','000409','000410','000411','000413','000415','000416','000417','000418','000419','000420','000421','000422','000423','000425','000426','000428','000429','000430','000488','000498','000501','000502','000503','000504','000505','000506','000507','000509','000510','000511','000513','000514','000516','000517','000518','000519','000520','000521','000523','000524','000525','000526','000528','000529','000530','000531','000532','000533','000534','000536','000537','000538','000539','000540','000541','000543','000544','000545','000546','000547','000548','000550','000551','000552','000553','000554','000555','000557','000558','000559','000560','000561','000563','000564','000565','000566','000567','000568','000570','000571','000572','000573','000576','000581','000582','000584','000585','000586','000587','000589','000590','000591','000592','000593','000595','000596','000597','000598','000599','000600','000601','000603','000605','000606','000607','000608','000609','000610','000611','000612','000613','000615','000616','000617','000619','000620','000622','000623','000625','000626','000627','000628','000629','000630','000631','000632','000633','000635','000636','000637','000638','000639','000650','000651','000652','000655','000656','000657','000659','000661','000662','000663','000665','000666','000667','000668','000669','000670','000671','000672','000673','000676','000677','000678','000679','000680','000681','000682','000683','000685','000686','000687','000688','000690','000691','000692','000693','000695','000697','000698','000700','000701','000702','000703','000705','000707','000708','000709','000710','000711','000712','000713','000715','000716','000717','000718','000719','000720','000721','000722','000723','000725','000726','000727','000728','000729','000731','000732','000733','000735','000736','000737','000738','000739','000748','000750','000751','000752','000753','000755','000756','000757','000758','000759','000760','000761','000762','000766','000767','000768','000776','000777','000778','000779','000780','000782','000783','000785','000786','000788','000789','000790','000791','000792','000793','000795','000796','000797','000798','000799','000800','000801','000802','000803','000806','000807','000809','000810','000811','000812','000813','000815','000816','000818','000819','000820','000821','000822','000823','000825','000826','000828','000829','000830','000831','000833','000835','000836','000837','000838','000839','000848','000850','000851','000852','000856','000858','000859','000860','000861','000862','000863','000868','000869','000875','000876','000877','000878','000880','000881','000882','000883','000885','000886','000887','000888','000889','000890','000892','000893','000895','000897','000898','000899','000900','000901','000902','000903','000905','000906','000908','000909','000910','000911','000912','000913','000915','000916','000917','000918','000919','000920','000921','000922','000923','000925','000926','000927','000928','000929','000930','000931','000932','000933','000935','000936','000937','000938','000939','000948','000949','000950','000951','000952','000953','000955','000957','000958','000959','000960','000961','000962','000963','000965','000966','000967','000968','000969','000970','000971','000972','000973','000975','000976','000977','000978','000979','000980','000981','000982','000983','000985','000987','000988','000989','000990','000993','000995','000996','000997','000998','000999','001696','001896','002001','002002','002003','002004','002005','002006','002007','002008','002009','002010','002011','002012','002013','002014','002015','002016','002017','002018','002019','002020','002021','002022','002023','002024','002025','002026','002027','002028','002029','002030','002031','002032','002033','002034','002035','002036','002037','002038','002039','002040','002041','002042','002043','002044','002045','002046','002047','002048','002049','002050','002051','002052','002053','002054','002055','002056','002057','002058','002059','002060','002061','002062','002063','002064','002065','002066','002067','002068','002069','002070','002071','002072','002073','002074','002075','002076','002077','002078','002079','002080','002081','002082','002083','002084','002085','002086','002087','002088','002089','002090','002091','002092','002093','002094','002095','002096','002097','002098','002099','002100','002101','002102','002103','002104','002105','002106','002107','002108','002109','002110','002111','002112','002113','002114','002115','002116','002117','002118','002119','002120','002121','002122','002123','002124','002125','002126','002127','002128','002129','002130','002131','002132','002133','002134','002135','002136','002137','002138','002139','002140','002141','002142','002143','002144','002145','002146','002147','002148','002149','002150','002151','002152','002153','002154','002155','002156','002157','002158','002159','002160','002161','002162','002163','002164','002165','002166','002167','002168','002169','002170','002171','002172','002173','002174','002175','002176','002177','002178','002179','002180','002181','002182','002183','002184','002185','002186','002187','002188','002189','002190','002191','002192','002193','002194','002195','002196','002197','002198','002199','002200','002201','002202','002203','002204','002205','002206','002207','002208','002209','002210','002211','002212','002213','002214','002215','002216','002217','002218','002219','002220','002221','002222','002223','002224','002225','002226','002227','002228','002229','002230','002231','002232','002233','002234','002235','002236','002237','002238','002239','002240','002241','002242','002243','002244','002245','002246','002247','002248','002249','002250','002251','002252','002253','002254','002255','002256','002258','002259','002260','002261','002262','002263','002264','002265','002266','002267','002268','002269','002270','002271','002272','002273','002274','002275','002276','002277','002278','002279','002280','002281','002282','002283','002284','002285','002286','002287','002288','002289','002290','002291','002292','002293','002294','002295','002296','002297','002298','002299','002300','002301','002302','002303','002304','002305','002306','002307','002308','002309','002310','002311','002312','002313','002314','002315','002316','002317','002318','002319','002320','002321','002322','002323','002324','002325','002326','002327','002328','002329','002330','002331','002332','002333','002334','002335','002336','002337','002338','002339','002340','002341','002342','002343','002344','002345','002346','002347','002348','002349','002350','002351','002352','002353','002354','002355','002356','002357','002358','002359','002360','002361','002362','002363','002364','002365','002366','002367','002368','002369','002370','002371','002372','002373','002374','002375','002376','002377','002378','002379','002380','002381','002382','002383','002384','002385','002386','002387','002388','002389','002390','002391','002392','002393','002394','002395','002396','002397','002398','002399','002400','002401','002402','002403','002404','002405','002406','002407','002408','002409','002410','002411','002412','002413','002414','002415','002416','002417','002418','002419','002420','002421','002422','002423','002424','002425','002426','002427','002428','002429','002430','002431','002432','002433','002434','002435','002436','002437','002438','002439','002440','002441','002442','002443','002444','002445','002446','002447','002448','002449','002450','002451','002452','002453','002454','002455','002456','002457','002458','002459','002460','002461','002462','002463','002464','002465','002466','002467','002468','002469','002470','002471','002472','002473','002474','002475','002476','002477','002478','002479','002480','002481','002482','002483','002484','002485','002486','002487','002488','002489','002490','002491','002492','002493','002494','002495','002496','002497','002498','002499','002500','002501','002502','002503','002504','002505','002506','002507','002508','002509','002510','002511','002512','002513','002514','002515','002516','002517','002518','002519','002520','002521','002522','002523','002524','002526','002527','002528','002529','002530','002531','002532','002533','002534','002535','002536','002537','002538','002539','002540','002541','002542','002543','002544','002545','002546','002547','002548','002549','002550','002551','002552','002553','002554','002555','002556','002557','002558','002559','002560','002561','002562','002563','002564','002565','002566','002567','002568','002569','002570','002571','002572','002573','002574','002575','002576','002577','002578','002579','002580','002581','002582','002583','002584','002585','002586','002587','002588','002589','002590','002591','002592','002593','002594','002595','002596','002597','002598','002599','002600','002601','002602','002603','002604','002605','002606','002607','002608','002609','002610','002611','002612','002613','002614','002615','002616','002617','002618','002619','002620','002621','002622','002623','002624','002625','002626','002627','002628','002629','002630','002631','002632','002633','002634','002635','002636','002637','002638','002639','002640','002641','002642','002643','002644','002645','002646','002647','002648','002649','002650','002651','002652','002653','002654','002655','002656','002657','002658','002659','002660','002661','002662','002663','002664','002665','002666','002667','002668','002669','002670','002671','002672','002673','002674','002675','002676','002677','002678','002679','002680','002681','002682','002683','002684','002685','002686','002687','002688','002689','002690','002691','002692','002693','002694','002695','002696','002697','002698','002699','002700','002701','002702','002703','002705','002706','002707','002708','002709','002711','002712','002713','002714','002715','002716','002717','002718','002719','002721','002722','002723','002724','002725','002726','002727','002728','002729','002730','002731','002732','002733','002734','002735','002736','002737','002738','002739','002740','002741','002742','002743','002745','002746','002747','002748','002749','002750','002751','002752','002753','002755','002756','002757','002758','002759','002760','002761','002762','002763','002765','002766','002767','002768','002769','002770','002771','002772','002773','002775','002776','300001','300002','300003','300004','300005','300006','300007','300008','300009','300010','300011','300012','300013','300014','300015','300016','300017','300018','300019','300020','300021','300022','300023','300024','300025','300026','300027','300028','300029','300030','300031','300032','300033','300034','300035','300036','300037','300038','300039','300040','300041','300042','300043','300044','300045','300046','300047','300048','300049','300050','300051','300052','300053','300054','300055','300056','300057','300058','300059','300061','300062','300063','300064','300065','300066','300067','300068','300069','300070','300071','300072','300073','300074','300075','300076','300077','300078','300079','300080','300081','300082','300083','300084','300085','300086','300087','300088','300089','300090','300091','300092','300093','300094','300095','300096','300097','300098','300099','300100','300101','300102','300103','300104','300105','300106','300107','300108','300109','300110','300111','300112','300113','300114','300115','300116','300117','300118','300119','300120','300121','300122','300123','300124','300125','300126','300127','300128','300129','300130','300131','300132','300133','300134','300135','300136','300137','300138','300139','300140','300141','300142','300143','300144','300145','300146','300147','300148','300149','300150','300151','300152','300153','300154','300155','300156','300157','300158','300159','300160','300161','300162','300163','300164','300165','300166','300167','300168','300169','300170','300171','300172','300173','300174','300175','300176','300177','300178','300179','300180','300181','300182','300183','300184','300185','300186','300187','300188','300189','300190','300191','300192','300193','300194','300195','300196','300197','300198','300199','300200','300201','300202','300203','300204','300205','300206','300207','300208','300209','300210','300211','300212','300213','300214','300215','300216','300217','300218','300219','300220','300221','300222','300223','300224','300225','300226','300227','300228','300229','300230','300231','300232','300233','300234','300235','300236','300237','300238','300239','300240','300241','300242','300243','300244','300245','300246','300247','300248','300249','300250','300251','300252','300253','300254','300255','300256','300257','300258','300259','300260','300261','300262','300263','300264','300265','300266','300267','300268','300269','300270','300271','300272','300273','300274','300275','300276','300277','300278','300279','300280','300281','300282','300283','300284','300285','300286','300287','300288','300289','300290','300291','300292','300293','300294','300295','300296','300297','300298','300299','300300','300301','300302','300303','300304','300305','300306','300307','300308','300309','300310','300311','300312','300313','300314','300315','300316','300317','300318','300319','300320','300321','300322','300323','300324','300325','300326','300327','300328','300329','300330','300331','300332','300333','300334','300335','300336','300337','300338','300339','300340','300341','300342','300343','300344','300345','300346','300347','300348','300349','300350','300351','300352','300353','300354','300355','300356','300357','300358','300359','300360','300362','300363','300364','300365','300366','300367','300368','300369','300370','300371','300372','300373','300374','300375','300376','300377','300378','300379','300380','300381','300382','300383','300384','300385','300386','300387','300388','300389','300390','300391','300392','300393','300394','300395','300396','300397','300398','300399','300400','300401','300402','300403','300404','300405','300406','300407','300408','300409','300410','300411','300412','300413','300414','300415','300416','300417','300418','300419','300420','300421','300422','300423','300424','300425','300426','300427','300428','300429','300430','300431','300432','300433','300434','300435','300436','300437','300438','300439','300440','300441','300442','300443','300444','300445','300446','300447','300448','300449','300450','300451','300452','300453','300455','300456','300457','300458','300459','300460','300461','300462','300463','300464','300465','300466','300467','300468','300469','300470','300471','300472','300473','300475','300476','300477','300478','300479','300480','300481','300482','300483','300485','300486','300487','300488','300489','600000','600004','600005','600006','600007','600008','600009','600010','600011','600012','600015','600016','600017','600018','600019','600020','600021','600022','600023','600026','600027','600028','600029','600030','600031','600033','600035','600036','600037','600038','600039','600048','600050','600051','600052','600053','600054','600055','600056','600057','600058','600059','600060','600061','600062','600063','600064','600066','600067','600068','600069','600070','600071','600072','600073','600074','600075','600076','600077','600078','600079','600080','600081','600082','600083','600084','600085','600086','600088','600089','600090','600091','600093','600094','600095','600096','600097','600098','600099','600100','600101','600103','600104','600105','600106','600107','600108','600109','600110','600111','600112','600113','600114','600115','600116','600117','600118','600119','600120','600121','600122','600123','600125','600126','600127','600128','600129','600130','600131','600132','600133','600135','600136','600137','600138','600139','600141','600143','600145','600146','600148','600149','600150','600151','600152','600153','600155','600156','600157','600158','600159','600160','600161','600162','600163','600165','600166','600167','600168','600169','600170','600171','600172','600173','600175','600176','600177','600178','600179','600180','600182','600183','600184','600185','600186','600187','600188','600189','600190','600191','600192','600193','600195','600196','600197','600198','600199','600200','600201','600202','600203','600206','600207','600208','600209','600210','600211','600212','600213','600215','600216','600217','600218','600219','600220','600221','600222','600223','600225','600226','600227','600228','600229','600230','600231','600232','600233','600234','600235','600236','600237','600238','600239','600240','600241','600242','600243','600246','600247','600248','600249','600250','600251','600252','600255','600256','600257','600258','600259','600260','600261','600262','600265','600266','600267','600268','600269','600270','600271','600272','600273','600275','600276','600277','600278','600279','600280','600281','600282','600283','600284','600285','600287','600288','600289','600290','600291','600292','600293','600295','600297','600298','600299','600300','600301','600302','600303','600305','600306','600307','600308','600309','600310','600311','600312','600313','600315','600316','600317','600318','600319','600320','600321','600322','600323','600325','600326','600327','600328','600329','600330','600331','600332','600333','600335','600336','600337','600338','600339','600340','600343','600345','600346','600348','600350','600351','600352','600353','600354','600355','600356','600358','600359','600360','600361','600362','600363','600365','600366','600367','600368','600369','600370','600371','600372','600373','600375','600376','600377','600378','600379','600380','600381','600382','600383','600385','600386','600387','600388','600389','600390','600391','600392','600393','600395','600396','600397','600398','600399','600400','600401','600403','600405','600406','600408','600409','600410','600415','600416','600418','600419','600420','600421','600422','600423','600425','600426','600428','600429','600432','600433','600435','600436','600438','600439','600444','600446','600448','600449','600452','600455','600456','600458','600459','600460','600461','600462','600463','600466','600467','600468','600469','600470','600475','600476','600477','600478','600479','600480','600481','600482','600483','600485','600486','600487','600488','600489','600490','600491','600493','600495','600496','600497','600498','600499','600500','600501','600502','600503','600505','600506','600507','600508','600509','600510','600511','600512','600513','600515','600516','600517','600518','600519','600520','600521','600522','600523','600525','600526','600527','600528','600529','600530','600531','600532','600533','600535','600536','600537','600538','600539','600540','600543','600545','600546','600547','600548','600549','600550','600551','600552','600555','600556','600557','600558','600559','600560','600561','600562','600563','600565','600566','600567','600568','600569','600570','600571','600572','600573','600575','600576','600577','600578','600579','600580','600581','600582','600583','600584','600585','600586','600587','600588','600589','600590','600592','600593','600594','600595','600596','600597','600598','600599','600600','600601','600602','600603','600604','600605','600606','600608','600609','600610','600611','600612','600613','600614','600615','600616','600617','600618','600619','600620','600621','600622','600623','600624','600626','600628','600629','600630','600633','600634','600635','600636','600637','600638','600639','600640','600641','600642','600643','600644','600645','600647','600648','600649','600650','600651','600652','600653','600654','600655','600656','600657','600658','600660','600661','600662','600663','600664','600665','600666','600667','600668','600671','600673','600674','600675','600676','600677','600678','600679','600680','600681','600682','600683','600684','600685','600686','600687','600688','600689','600690','600691','600692','600693','600694','600695','600696','600697','600698','600699','600701','600702','600703','600704','600705','600706','600707','600708','600710','600711','600712','600713','600714','600715','600716','600717','600718','600719','600720','600721','600722','600723','600724','600725','600726','600727','600728','600729','600730','600731','600732','600733','600734','600735','600736','600737','600738','600739','600740','600741','600742','600743','600744','600745','600746','600747','600748','600749','600750','600751','600753','600754','600755','600756','600757','600758','600759','600760','600761','600763','600764','600765','600766','600767','600768','600769','600770','600771','600773','600774','600775','600776','600777','600778','600779','600780','600781','600782','600783','600784','600785','600787','600789','600790','600791','600792','600793','600794','600795','600796','600797','600798','600800','600801','600802','600803','600804','600805','600806','600807','600808','600809','600810','600811','600812','600814','600815','600816','600817','600818','600819','600820','600821','600822','600823','600824','600825','600826','600827','600828','600829','600830','600831','600833','600834','600835','600836','600837','600838','600839','600841','600843','600844','600845','600846','600847','600848','600850','600851','600853','600854','600855','600856','600857','600858','600859','600860','600861','600862','600863','600864','600865','600866','600867','600868','600869','600870','600871','600872','600873','600874','600875','600876','600877','600879','600880','600881','600882','600883','600884','600885','600886','600887','600888','600889','600890','600891','600892','600893','600894','600895','600896','600897','600898','600900','600917','600958','600959','600960','600961','600962','600963','600965','600966','600967','600969','600970','600971','600973','600975','600976','600978','600979','600980','600981','600982','600983','600984','600985','600986','600987','600988','600990','600992','600993','600995','600997','600998','600999','601000','601001','601002','601003','601005','601006','601007','601008','601009','601010','601011','601012','601015','601016','601018','601021','601028','601038','601058','601069','601088','601098','601099','601100','601101','601106','601107','601111','601113','601116','601117','601118','601126','601137','601139','601158','601166','601168','601169','601177','601179','601186','601188','601198','601199','601208','601211','601216','601218','601222','601225','601226','601231','601233','601238','601258','601288','601311','601313','601318','601328','601333','601336','601339','601368','601369','601377','601388','601390','601398','601515','601518','601519','601555','601558','601566','601567','601579','601588','601599','601600','601601','601607','601608','601616','601618','601628','601633','601636','601666','601668','601669','601677','601678','601688','601689','601699','601700','601717','601718','601727','601766','601777','601788','601789','601798','601799','601800','601801','601808','601818','601857','601866','601872','601877','601880','601886','601888','601890','601898','601899','601901','601908','601918','601919','601928','601929','601933','601939','601958','601965','601968','601969','601985','601988','601989','601991','601992','601996','601998','601999','603000','603001','603002','603003','603005','603006','603008','603009','603010','603011','603012','603015','603017','603018','603019','603020','603021','603022','603023','603025','603026','603030','603066','603077','603085','603088','603099','603100','603108','603111','603116','603117','603118','603123','603126','603128','603158','603166','603167','603168','603169','603188','603198','603199','603222','603223','603227','603268','603288','603300','603306','603308','603309','603311','603315','603318','603328','603333','603338','603355','603366','603368','603369','603399','603456','603518','603519','603555','603558','603566','603567','603568','603588','603589','603598','603599','603600','603601','603606','603609','603611','603616','603618','603636','603669','603678','603686','603688','603698','603699','603703','603718','603729','603766','603788','603789','603799','603806','603808','603818','603828','603838','603869','603883','603885','603889','603898','603899','603901','603918','603939','603968','603969','603979','603988','603989','603993','603997','603998','px','qpx','sm','hy','hg', '行业1 金融',	'行业1 公用事业',	'行业1 可选消费',	'行业1 工业',	'行业1 医疗保健',	'行业1 日常消费',	'行业1 信息技术',	'行业1 电信服务',	'行业1 材料',	'行业1 能源','行业2 多元金融',	'行业2 银行',	'行业2 公用事业Ⅱ',	'行业2 保险Ⅱ',	'行业2 汽车与汽车零部件',	'行业2 耐用消费品与服装',	'行业2 房地产',	'行业2 运输',	'行业2 半导体与半导体生产设备',	'行业2 制药、生物科技与生命科学',	'行业2 食品、饮料与烟草',	'行业2 资本货物',	'行业2 媒体Ⅱ',	'行业2 软件与服务',	'行业2 电信服务Ⅱ',	'行业2 食品与主要用品零售Ⅱ',	'行业2 商业和专业服务',	'行业2 技术硬件与设备',	'行业2 消费者服务Ⅱ',	'行业2 材料Ⅱ',	'行业2 家庭与个人用品',	'行业2 零售业',	'行业2 医疗保健设备与服务',	'行业2 能源Ⅱ','行业3 资本市场',	'行业3 商业银行',	'行业3 电力Ⅲ',	'行业3 汽车',	'行业3 保险Ⅲ',	'行业3 家庭耐用消费品',	'行业3 独立电力生产商与能源贸易商Ⅲ',	'行业3 航空Ⅲ',	'行业3 建筑与工程Ⅲ',	'行业3 公路与铁路运输',	'行业3 互联网软件与服务Ⅲ',	'行业3 水务Ⅲ',	'行业3 房地产管理与开发',	'行业3 饮料',	'行业3 半导体产品与半导体设备',	'行业3 纺织品、服装与奢侈品',	'行业3 交通基础设施',	'行业3 制药',	'行业3 汽车零配件',	'行业3 电气设备',	'行业3 能源设备与服务',	'行业3 化工',	'行业3 媒体Ⅲ',	'行业3 个人用品Ⅲ',	'行业3 生物科技Ⅲ',	'行业3 建材Ⅲ',	'行业3 通信设备Ⅲ',	'行业3 多元电信服务',	'行业3 食品与主要用品零售Ⅲ',	'行业3 食品',	'行业3 贸易公司与工业品经销商Ⅲ',	'行业3 建筑产品Ⅲ',	'行业3 电子设备、仪器和元件',	'行业3 专业服务',	'行业3 酒店、餐馆与休闲Ⅲ',	'行业3 商业服务与用品',	'行业3 海运Ⅲ',	'行业3 软件',	'行业3 容器与包装',	'行业3 多元金融服务',	'行业3 机械',	'行业3 医疗保健设备与用品',	'行业3 燃气Ⅲ',	'行业3 航空货运与物流Ⅲ',	'行业3 复合型公用事业Ⅲ',	'行业3 多元化零售',	'行业3 金属、非金属与采矿',	'行业3 消费品经销商Ⅲ',	'行业3 纸与林木产品',	'行业3 专营零售',	'行业3 信息技术服务',	'行业3 石油、天然气与供消费用燃料',	'行业3 综合类Ⅲ',	'行业3 生命科学工具和服务Ⅲ',	'行业3 电脑与外围设备',	'行业3 休闲设备与用品',	'行业3 家庭用品Ⅲ',	'行业3 医疗保健提供商与服务',	'行业3 综合消费者服务Ⅲ',	'行业3 无线电信业务Ⅲ',	'行业3 医疗保健技术Ⅲ',	'行业3 航空航天与国防Ⅲ',	'行业3 互联网与售货目录零售','行业4 投资银行业与经纪业',	'行业4 多元化银行',	'行业4 电力',	'行业4 区域性银行',	'行业4 资产管理与托管银行',	'行业4 汽车制造',	'行业4 家用电器',	'行业4 多元化保险',	'行业4 媒体Ⅲ',	'行业4 铁路运输',	'行业4 多元化工',	'行业4 医疗保健用品',	'行业4 新能源发电业者',	'行业4 轮胎与橡胶',	'行业4 公路与铁路',	'行业4 航空',	'行业4 建筑与工程',	'行业4 互联网软件与服务',	'行业4 服装、服饰与奢侈品',	'行业4 人寿与健康保险',	'行业4 水务',	'行业4 家庭娱乐软件',	'行业4 软饮料',	'行业4 摩托车制造',	'行业4 石油与天然气的储存和运输',	'行业4 白酒与葡萄酒',	'行业4 非传统电信运营商',	'行业4 房地产开发',	'行业4 半导体产品',	'行业4 机场服务',	'行业4 中药',	'行业4 重型电气设备',	'行业4 财产与意外伤害保险',	'行业4 休闲设施',	'行业4 特种化工',	'行业4 消费电子产品',	'行业4 药品零售',	'行业4 电子元件',	'行业4 家庭装饰品',	'行业4 电影与娱乐',	'行业4 多领域控股',	'行业4 石油天然气设备与服务',	'行业4 房地产服务',	'行业4 化肥与农用化工',	'行业4 出版',	'行业4 电气部件与设备',	'行业4 钢铁',	'行业4 西药',	'行业4 个人用品',	'行业4 机动车零配件与设备',	'行业4 办公服务与用品',	'行业4 电脑存储与外围设备',	'行业4 生物科技',	'行业4 建材',	'行业4 基础化工',	'行业4 煤炭与消费用燃料',	'行业4 有线和卫星电视',	'行业4 通信设备',	'行业4 石油与天然气的炼制和销售',	'行业4 食品加工与肉类',	'行业4 房地产经营公司',	'行业4 贸易公司与工业品经销商','行业4 环境与设施服务');
            var jc = new Array('阅读','荐股','行业结构','帮助','平安银行','万科A','国农科技','世纪星源','深振业A','零七股份','神州高铁','中国宝安','深华新','深物业A','南玻A','沙河股份','深康佳A','深中华A','中冠A','深深宝A','深华发A','深科技','深赤湾A','深天地A','招商地产','特力A','飞亚达A','深圳能源','国药一致','深深房A','富奥股份','中粮地产','深桑达A','*ST新都','深信泰丰','中国天楹','华联控股','深南电A','深大通','中集集团','宝安地产','中洲控股','中航地产','深纺织A','泛海控股','康达尔','德赛电池','深天马A','方大集团','皇庭国际','深赛格','*ST华锦','中金岭南','农产品','深圳华强','中兴通讯','北方国际','长城电脑','*ST华赛','华侨城A','特发信息','海王生物','盐田港','深圳机场','天健集团','广聚能源','中信海直','TCL集团','宜华健康','中成股份','丰原药业','*ST川化','华数传媒','中联重科','常山股份','国际实业','申万宏源','东方市场','美的集团','潍柴动力','许继电气','冀东水泥','金融街','ST生化','华意压缩','胜利股份','金谷源','山东地矿','沈阳机床','英特集团','东旭光电','渤海租赁','民生控股','合肥百货','小天鹅A','通程控股','吉林化纤','南京中北','湖北宜化','东阿阿胶','徐工机械','兴业矿业','华天酒店','粤高速A','张家界','晨鸣纸业','山东路桥','鄂武商A','绿景控股','海虹控股','南华生物','珠江控股','中润资源','珠海港','华塑控股','*ST金路','烯碳新材','丽珠集团','渝开发','国际医学','荣安地产','四环生物','江南红箭','长航凤凰','美菱电器','广州浪奇','岭南控股','红太阳','银润投资','柳工','广弘控股','大冷股份','穗恒运A','力合股份','万家乐','万泽股份','华映科技','广宇发展','云南白药','粤电力A','中天城投','佛山照明','皖能电力','中原环保','金浦钛业','金圆股份','航天发展','湖南投资','江铃汽车','创元科技','靖远煤电','沙隆达A','泰山石油','神州信息','*ST广夏','莱茵体育','万向钱潮','昆百大A','烽火电子','陕国投A','西安民生','渝三峡A','海南海药','海德股份','泸州老窖','苏常柴A','新大洲A','海马汽车','粤宏远A','广东甘化','威孚高科','北部湾港','友利控股','东北电气','汇源通信','金叶珠宝','黔轮胎A','*ST古汉','桐君阁','平潭发展','大通燃气','宝塔实业','古井贡酒','东北制药','兴蓉环境','青岛双星','建投能源','韶能股份','盛达矿业','渤海股份','青海明胶','华媒控股','阳光股份','绵世股份','西安旅游','*ST蒙发','焦作万方','大东海A','湖北金环','海航投资','石油济柴','海螺型材','新华联','恒立实业','吉林敖东','长安汽车','如意集团','天茂集团','高新发展','攀钢钒钛','铜陵有色','顺发恒业','三木集团','合金投资','英力特','风华高科','茂化实华','万方发展','西王食品','仁和药业','格力电器','泰达股份','金岭矿业','金科股份','中钨高新','*ST中富','长春高新','索芙特','永安林业','湖北广电','经纬纺机','美好集团','荣丰控股','金鸿能源','盈方微','阳光城','上峰水泥','当代东方','智度投资','*ST海龙','襄阳轴承','大连友谊','山推股份','视觉中国','东方电子','远兴能源','中山公用','东北证券','恒天天鹅','建新矿业','宝新能源','亚太实业','惠天热电','华泽钴镍','滨海能源','炼石有色','沈阳化工','模塑科技','厦门信达','正虹科技','恒逸石化','浙江震元','双环科技','大冶特钢','河北钢铁','天兴仪表','*ST京蓝','锦龙股份','丰乐种业','中兴商业','黑芝麻','韶钢松山','苏宁环球','大地传媒','新能泰山','西安饮食','湖南发展','美锦能源','京东方A','鲁泰A','华东科技','国元证券','燕京啤酒','四川美丰','泰禾集团','振华科技','罗牛山','中房地产','南风化工','中航动控','普洛药业','长城信息','国海证券','锌业股份','西藏发展','漳州发展','山西三维','新华制药','浩物股份','中色股份','中百集团','斯太尔','本钢板材','西藏矿业','通化金马','漳泽电力','中航飞机','广发证券','中核科技','新兴铸管','三毛派神','平庄能源','美达股份','长江证券','武汉中商','北新建材','北大医药','万年青','华神集团','甘肃电投','盐湖股份','华闻传媒','太原刚玉','易食股份','中国武夷','中水渔业','*ST酒鬼','一汽轿车','四川九洲','北京文化','金宇车城','银河投资','云铝股份','铁岭新城','创维数字','烟台冰轮','陕西金叶','天山纺织','*ST美利','智慧农业','方大化工','岳阳兴长','金城股份','京山轻机','山东海化','超声电子','太钢不锈','桑德环境','东莞控股','天音控股','鲁西化工','五矿稀土','贵糖股份','长城动漫','鑫茂科技','秦川机床','国兴地产','中信国安','承德露露','华茂股份','高鸿股份','石化机械','冀东装备','五粮液','国风塑业','顺鑫农业','海印股份','银星能源','三湘股份','安凯客车','张裕A','吉电股份','新希望','天山股份','云南铜业','潍柴重机','大连国际','华联股份','湖北能源','同力水泥','海南高速','中鼎股份','峨眉山A','茂业物流','法尔胜','*ST星美','东凌粮油','双汇发展','津滨发展','鞍钢股份','赣能股份','现代投资','航天科技','新洋丰','云内动力','厦门港务','物产中拓','景峰医药','数源科技','大亚科技','南宁糖业','*ST天化','钱江摩托','山大华特','华北高速','电广传媒','嘉凯城','金陵药业','南方汇通','海信科龙','佳电股份','河北宣工','众合科技','福星股份','*ST夏利','中钢国际','兰州黄河','中粮生化','中关村','华菱钢铁','神火股份','四川双马','华西股份','冀中能源','紫光股份','凯迪生态','南天信息','新乡化纤','建峰化工','中国重汽','广济药业','河池化工','欣龙控股','中通客车','东方能源','首钢股份','锡业股份','中南建设','东方钽业','华东医药','天保基建','长源电力','上风高科','煤气化','安泰科技','中科三环','蓝鼎控股','新中基','佛塑科技','银泰资源','*ST春晖','浪潮信息','桂林旅游','中弘股份','金马股份','银亿股份','中银绒业','西山煤电','大庆华科','广州友谊','华工科技','九芝堂','诚志股份','闽东电力','*ST皇台','中国中期','新大陆','隆平高科','华润三九','宗申动力','豫能控股','新和成','鸿达兴业','伟星股份','华邦健康','德豪润达','精功科技','华兰生物','大族激光','天奇股份','传化股份','盾安环境','凯恩股份','中航机电','永新股份','*ST霞客','世荣兆业','东信和平','华信国际','亿帆鑫富','京新药业','中捷资源','科华生物','海特高新','苏宁云商','航天电器','山东威达','七喜控股','思源电气','七匹狼','达安基因','巨轮股份','苏泊尔','丽江旅游','美欣达','华帝股份','汉麻产业','久联发展','双鹭药业','黔源电力','南京港','登海种业','华孚色纺','兔宝宝','江苏三友','国光电器','轴研科技','宝鹰股份','宁波华翔','同方国芯','三花股份','中工国际','同洲电子','云南盐化','德美化工','得润电子','横店东磁','中钢天源','威尔泰','云南旅游','粤水电','江山化工','宏润建设','远光软件','华峰氨纶','东华软件','瑞泰科技','景兴纸业','黑猫股份','獐子岛','众和股份','长城影视','凯瑞德','软控股份','国轩高科','沙钢股份','雪莱特','大港股份','太阳纸业','苏州固锝','中材科技','金螳螂','栋梁新材','孚日股份','海鸥卫浴','万丰奥威','东方海洋','新野纺织','鲁阳节能','新海宜','金智科技','江苏国泰','中泰化学','国脉科技','青岛金王','生意宝','南岭民爆','山河智能','浔兴股份','海翔药业','天康生物','广东鸿图','冠福股份','广博股份','恒宝股份','信隆实业','莱宝高科','沃华医药','沧州明珠','兴化股份','三钢闽光','威海广泰','三变科技','天润控股','罗平锌电','三维通信','中国海诚','东港股份','紫鑫药业','康强电子','新海股份','科陆电子','天马股份','荣信股份','天邦股份','湘潭电化','银轮股份','新民科技','露天煤业','中环股份','沃尔核材','利欧股份','恒星科技','广宇集团','天津普林','东南网架','安纳达','实益达','顺络电子','拓邦股份','东华科技','蓉胜超微','宁波银行','印纪传媒','宏达高科','中核钛白','荣盛发展','方圆支承','北纬通信','西部材料','通润装备','北斗星通','广电运通','石基信息','报喜鸟','湖南黄金','通富微电','正邦科技','汉钟精机','三特索道','常铝股份','远望谷','斯米克','中航三鑫','宁波东力','红宝丽','莱茵生物','东方锆业','深圳惠程','智光电气','芭田股份','楚江新材','澳洋科技','千足珍珠','游族网络','东方网络','江特电机','御银股份','延华智能','中航光电','艾派克','粤传媒','云海金属','怡亚通','海得控制','华天科技','全聚德','广百股份','新嘉联','利达光电','成飞集成','劲嘉股份','*ST融捷','山东如意','武汉凡谷','二三四五','方正电机','证通电子','嘉应制药','东晶电子','云投生态','九鼎新材','金风科技','海亮股份','大连重工','国统股份','海利得','准油股份','合肥城建','达意隆','飞马国际','宏达新材','南洋股份','特尔佳','大立科技','诺普信','三全食品','合力泰','拓日新能','恒康医疗','天宝股份','东华能源','福晶科技','鱼跃医疗','三力士','濮耐股份','江南化工','奥特迅','合兴包装','鸿博股份','科大讯飞','奥维通信','启明信息','塔牌集团','民和股份','安妮股份','大华股份','恒邦股份','天威视讯','奥特佳','威华股份','歌尔声学','九阳股份','通产丽星','滨江集团','澳洋顺昌','北化股份','帝龙新材','华东数控','大洋电机','联化科技','步步高','上海莱士','川大智胜','泰和新材','海陆重工','彩虹精化','利尔化学','升达林业','德奥通航','拓维信息','恩华药业','大东南','新华都','西仪股份','浙富控股','陕天然气','卫士通','美邦服饰','法因数控','东方雨虹','川润股份','水晶光电','华昌化工','桂林三金','万马股份','友阿股份','神开股份','久其软件','联络互动','光迅科技','博深工具','天润曲轴','亚太股份','世联行','保龄宝','奇正藏药','超华科技','宇顺电子','禾盛新材','星期六','奥飞动漫','罗莱家纺','信立泰','精艺股份','辉煌科技','博云新材','鑫龙电器','圣农发展','太阳电缆','齐心集团','西部建设','美盈森','洋河股份','南国置业','*ST云网','北新路桥','威创股份','中利科技','东方园林','海大集团','三泰控股','日海通讯','雅致股份','焦点科技','键桥通讯','众生药业','久立特材','乐通股份','海峡股份','华英农业','理工监测','雅百特','普利特','洪涛股份','永太科技','富安娜','新朋股份','皇氏集团','得利斯','皖通科技','仙琚制药','罗普斯金','英威腾','科华恒盛','人人乐','赛象科技','奥普光电','积成电子','格林美','新纶科技','巨力索具','禾欣股份','海宁皮城','潮宏基','柘中股份','泰尔重工','高乐股份','精华制药','北京科锐','漫步者','鼎泰新材','杰瑞股份','天神娱乐','兴民钢圈','浩宁达','富临运业','森源电气','齐星铁塔','同德化工','神剑股份','汉王科技','隆基机械','中恒电气','永安药业','丹甫股份','康力电梯','太极股份','卓翼科技','亚太药业','七星电子','伟星新材','千方科技','丽鹏股份','亚厦股份','新北洋','国创高新','章源钨业','鲁丰环保','科远股份','双箭股份','蓝帆医疗','合众思壮','东山精密','大北农','天原集团','黑牛食品','新亚制程','南洋科技','信邦制药','长青股份','北京利尔','力生制药','联发股份','双象股份','星网锐捷','梦洁家纺','建研集团','海普瑞','省广股份','中海科技','和而泰','爱仕达','嘉欣丝绸','四维图新','远东传动','多氟多','齐翔腾达','雅克科技','广联达','九九久','汉森制药','常发股份','高德红外','海康威视','爱施德','*ST元达','康盛股份','天虹商场','毅昌股份','达实智能','科伦药业','中原特钢','贵州百灵','凯撒股份','胜利精密','尤夫股份','云南锗业','兆驰股份','杭氧股份','棕榈园林','九安医疗','太安堂','万里扬','长江润发','兴森科技','誉衡药业','江苏神通','启明星辰','闰土股份','众业达','龙星化工','金洲管道','巨星科技','中南重工','盛路通信','壹桥海参','中原内配','国星光电','康得新','摩恩电气','长高集团','天马精化','松芝股份','百川股份','欧菲光','青龙管业','益生股份','天业通联','赣锋锂业','珠江啤酒','嘉事堂','沪电股份','金利科技','海格通信','天齐锂业','二六三','艾迪西','三维工程','金正大','中超控股','双环传动','圣莱达','榕基软件','立讯精密','宝莫股份','雏鹰农牧','常宝股份','富春环保','新筑股份','双塔食品','广田股份','润邦股份','江海股份','希努尔','嘉麟杰','大金重工','金固股份','浙江永强','山东墨龙','通鼎互联','恒基达鑫','荣盛石化','华斯股份','佳隆股份','辉丰股份','雅化集团','汉缆股份','科林环保','山西证券','利源精制','骅威股份','搜于特','弘高创意','大康牧业','协鑫集成','涪陵榨菜','老板电器','天广消防','天汽模','中顺洁柔','达华智能','蓝丰生化','宝馨科技','金字火腿','旷达科技','泰亚股份','科士达','银河电子','日发精机','齐峰新材','浙江众成','天桥起重','光正集团','山东矿机','新时达','英飞拓','海源机械','丰东股份','天顺风能','新界泵业','金杯电工','杭锅股份','林州重机','西泵股份','海立美达','司尔特','新都化工','亚太科技','鸿路钢构','中化岩土','万和电气','杰赛科技','东方铁塔','新联电子','春兴精工','金新农','凯美特气','千红制药','尚荣医疗','宝鼎重工','南方轴承','惠博普','顺荣三七','辉隆股份','洽洽食品','世纪游轮','亚威股份','通达股份','徐家汇','兄弟科技','森马服饰','天沃科技','上海绿新','益盛药业','唐人神','百润股份','步森股份','贝因美','德力股份','索菲亚','清新环境','明牌珠宝','群兴玩具','通达动力','雷柏科技','闽发铝业','中京电子','圣阳股份','万昌科技','好想你','海能达','西陇化工','双星新材','围海股份','奥拓电子','史丹利','瑞康医药','万安科技','恒大高新','八菱科技','日上集团','比亚迪','豪迈科技','海南瑞泽','金禾实业','山东章鼓','盛通股份','江粉磁材','佰利联','世纪华通','以岭药业','龙力生物','姚记扑克','大连电瓷','亚夏汽车','*ST舜船','捷顺科技','爱康科技','东方精工','朗姿股份','北玻股份','蒙发利','哈尔斯','长青集团','露笑科技','丹邦科技','巨龙管业','瑞和股份','三垒股份','永大集团','亚玛顿','完美环球','龙生股份','金达威','宜昌交运','成都路桥','仁智油服','华西能源','德尔未来','道明光学','*ST申科','棒杰股份','安洁科技','金安国纪','赞宇科技','勤上光电','雪人股份','跨境通','永高股份','荣之联','万润股份','佛慈制药','华宏科技','青青稞酒','宏磊股份','卫星石化','博彦科技','加加食品','利君股份','扬子新材','海思科','万润科技','共达电声','卡奴迪路','中科金财','雪迪龙','中泰桥梁','茂硕电源','克明面业','京威股份','普邦园林','信质电机','首航节能','德联集团','鞍重股份','奥马电器','康达新材','华声股份','龙泉股份','东江环保','西部证券','兴业科技','东诚药业','顺威股份','浙江美大','珠江钢琴','福建金森','黄海机械','奋达科技','龙洲股份','宏大爆破','猛狮科技','华东重机','亿利达','乔治白','金河生物','博林特','美亚光电','冀凯股份','远程电缆','双成药业','顾地科技','煌上煌','百洋股份','红旗连锁','博实股份','美盛文化','新疆浩源','奥瑞金','海欣食品','浙江世宝','新宝股份','良信电器','众信旅游','光洋股份','天赐材料','欧浦智网','思美传媒','东易日盛','牧原股份','登云股份','金贵银业','岭南园林','友邦吊顶','麦趣尔','金一文化','金轮股份','金莱特','海洋王','跃岭股份','龙大肉食','一心堂','台城制药','好利来','电光科技','萃华珠宝','燕塘乳业','雄韬股份','利民股份','王子新材','国信证券','葵花药业','中矿资源','万达院线','爱迪尔','光华科技','三圣特材','富煌钢构','木林森','仙坛股份','埃斯顿','世龙实业','国光股份','龙津药业','易尚展示','昇兴股份','永东股份','东方新星','永兴特钢','南兴装备','华通医药','天际股份','凤形股份','多喜爱','金发拉比','汇洁股份','蓝黛传动','索菱股份','先锋电子','国恩股份','普路通','科迪乳业','真视通','众兴菌业','康弘药业','文科园林','柏堡龙','特锐德','神州泰岳','乐普医疗','南风股份','探路者','莱美药业','汉威电子','上海佳豪','安科生物','立思辰','鼎汉技术','华测检测','新宁物流','亿纬锂能','爱尔眼科','北陆药业','网宿科技','中元华电','硅宝科技','银江股份','大禹节水','吉峰农机','宝德股份','机器人','华星创业','红日药业','华谊兄弟','金亚科技','天龙光电','阳普医疗','宝通科技','金龙机电','同花顺','钢研高纳','中科电气','超图软件','新宙邦','梅泰诺','上海凯宝','九洲电气','回天新材','朗科科技','互动娱乐','赛为智能','华力创通','台基股份','天源迪科','合康变频','福瑞股份','世纪鼎利','三五互联','中青宝','欧比特','鼎龙股份','万邦达','三维丝','万顺股份','蓝色光标','东方财富','康耐特','中能电气','天龙集团','豫金刚石','海兰信','三川股份','安诺其','南都电源','金利华电','碧水源','华谊嘉信','三聚环保','当升科技','华平股份','数字政通','GQY视讯','国民技术','思创医惠','数码视讯','新大新材','恒信移动','奥克股份','劲胜精密','海默科技','银之杰','康芝药业','荃银高科','长信科技','文化长城','盛运环保','金通灵','科新机电','金刚玻璃','国联水产','华伍股份','易联众','智云股份','高新兴','尤洛卡','双林股份','振芯科技','乾照光电','达刚路机','乐视网','龙源技术','西部牧业','建新股份','双龙股份','新开源','华仁药业','向日葵','万讯自控','顺网科技','中航电测','长盈精密','坚瑞消防','嘉寓股份','东方日升','瑞普生物','经纬电材','阳谷华泰','智飞生物','太阳鸟','汇川技术','易世达','锐奇股份','银河磁体','锦富新材','泰胜风能','新国都','英唐智控','青松股份','华策影视','大富科技','宝利国际','信维通信','先河环保','晨光生物','福星晓程','启源装备','和顺电气','沃森生物','星河生物','宋城演艺','南方泵业','汤臣倍健','香雪制药','天舟文化','量子高科','世纪瑞尔','昌红科技','科融环境','科泰电源','瑞凌股份','安居宝','神雾环保','恒泰艾普','振东制药','新研股份','秀强股份','华中数控','雷曼股份','先锋新材','通源石油','天瑞仪器','东方国信','迪威视讯','万达信息','天晟新材','汉得信息','东富龙','中电环保','智慧松德','元力股份','朗源股份','鸿特精密','中海达','腾邦国际','四方达','华峰超纤','佐力药业','捷成股份','东软载波','力源信息','通裕重工','大华农','永清环保','美亚柏科','神农大丰','维尔利','潜能恒信','科斯伍德','佳士科技','福安药业','长荣股份','长海股份','铁汉生态','纳川股份','翰宇药业','高盟新材','海伦哲','聚龙股份','聚光科技','舒泰神','天喻信息','理邦仪器','欣旺达','恒顺众昇','天泽信息','森远股份','亿通科技','易华录','佳讯飞鸿','日科化学','电科院','千山药机','东方电热','安利股份','鸿利光电','金运激光','银禧科技','科大智能','北京君正','正海磁材','金力泰','上海钢联','光韵达','富瑞特装','拓尔思','永利带业','银信科技','洲明科技','金城医药','开尔新材','方直科技','上海新阳','美晨科技','冠昊生物','东宝生物','飞力达','瑞丰光电','明家科技','瑞丰高材','迪安诊断','天玑科技','宝莱特','乐金健康','新开普','依米康','初灵信息','光线传媒','金信诺','卫宁软件','仟源医药','常山药业','星星科技','开山股份','精锻科技','新天科技','新莱应材','雅本化学','巴安水务','隆华节能','佳创视讯','通光线缆','兴源环境','尔康制药','万福生科','联建光电','中威电子','华宇软件','开能环保','和佳股份','阳光电源','梅安森','三丰智能','海联讯','华昌达','和晶科技','南通锻压','金明精机','汇冠股份','温州宏丰','苏交科','国瓷材料','安科瑞','飞利信','朗玛信息','利德曼','荣科科技','华录百纳','吴通通讯','蓝英装备','博雅生物','三六五网','利亚德','蓝盾股份','三诺生物','富春通信','汉鼎股份','长方照明','同有科技','聚飞光电','云意电气','裕兴股份','远方光电','慈星股份','中际装备','吉艾科技','宜通世纪','任子行','邦讯技术','天山生物','戴维医疗','掌趣科技','晶盛机电','珈伟股份','博晖创新','麦捷科技','海达股份','同大股份','硕贝德','华灿光电','旋极信息','德威新材','凯利泰','中颖电子','宜安科技','海伦钢琴','华虹计通','苏大维格','天壕环境','兆日科技','津膜科技','迪森股份','新文化','银邦股份','开元仪器','润和软件','科恒股份','麦迪电气','天银机电','联创股份','太空板业','红宇新材','南大光电','泰格医药','长亮科技','金卡股份','华鹏飞','永贵电器','北信源','东土科技','东华测试','蒙草抗旱','光一科技','我武生物','楚天科技','全通教育','炬华科技','天保重装','博腾股份','中文在线','恒华科技','创意信息','东方网力','汇金股份','绿盟科技','安控科技','汇中股份','欣泰电气','扬杰科技','恒通科技','鹏翎股份','易事特','赢时胜','鼎捷软件','东方通','安硕信息','溢多利','斯莱克','光环新网','三联虹普','雪浪环境','飞天诚信','富邦股份','国祯环保','艾比森','天华超净','康跃科技','腾信股份','中来股份','天孚通信','菲利华','迪瑞医疗','天和防务','飞凯材料','京天利','劲拓股份','花园生物','宝色股份','地尔汉宇','博济医药','科隆精化','九强生物','凯发电气','三环集团','道氏技术','正业科技','金盾股份','迦南科技','快乐购','中光防雷','伊之密','苏试试验','南华仪器','昆仑万维','浩丰科技','五洋科技','力星股份','博世科','鲁亿通','航新科技','环能科技','唐德影视','红相电力','四通新材','强力新材','诚益通','暴风科技','富临精工','蓝思科技','金石东方','中泰股份','广生堂','清水源','鹏辉能源','美康生物','运达科技','鲍斯股份','普丽盛','金雷风电','双杰电气','康斯特','乐凯新材','全信股份','浩云科技','汉邦高科','先导股份','创业软件','山河药辅','三鑫医疗','康拓红外','耐威科技','赢合科技','全志科技','浙江金科','惠伦晶体','田中精机','华铭智能','迈克生物','星徽精密','高伟达','赛摩电气','迅游科技','四方精创','信息发展','日机密封','厚普股份','新元科技','德尔股份','聚隆科技','胜宏科技','合纵科技','杭州高新','神思电子','光力科技','濮阳惠成','万孚生物','沃施股份','赛升药业','东杰智能','蓝晓科技','恒锋工具','中飞股份','浦发银行','白云机场','武钢股份','东风汽车','中国国贸','首创股份','上海机场','包钢股份','华能国际','皖通高速','华夏银行','民生银行','日照港','上港集团','宝钢股份','中原高速','上海电力','山东钢铁','浙能电力','中海发展','华电国际','中国石化','南方航空','中信证券','三一重工','福建高速','楚天高速','招商银行','歌华有线','中直股份','四川路桥','保利地产','中国联通','宁波联合','浙江广厦','中江地产','黄山旅游','华润万东','中国医药','象屿股份','五矿发展','古越龙山','海信电器','国投安信','华润双鹤','皖维高新','南京高科','宇通客车','冠城大通','葛洲坝','*ST银鸽','浙江富润','*ST光学','钢构工程','上海梅林','保千里','新疆天业','青鸟华光','宋都股份','澄星股份','人福医药','金花股份','东风科技','海泰发展','博信股份','中葡股份','同仁堂','东方金钰','中视传媒','特变电工','啤酒花','*ST明科','禾嘉股份','大名城','哈高科','云天化','开创国际','广州发展','林海股份','同方股份','明星电力','青山纸业','上汽集团','永鼎股份','重庆路桥','美尔雅','亚盛集团','国金证券','中科英华','北方稀土','天成控股','浙江东日','东睦股份','东方航空','三峡水利','西宁特钢','中国卫星','长江投资','浙江东方','郑州煤电','宏图高科','兰花科创','铁龙物流','杭钢股份','金健米业','弘业股份','太极集团','波导股份','岷江水电','重庆啤酒','东湖高新','乐凯胶片','道博股份','浪莎股份','中青旅','西部资源','兴发集团','金发科技','*ST新亿','商赢环球','长春一东','廊坊发展','中国船舶','航天机电','维科精华','建发股份','宝硕股份','华升股份','永泰能源','中体产业','大龙地产','巨化股份','天坛生物','香江控股','*ST南纸','新日恒力','福田汽车','联美控股','武汉控股','太原重工','上海建工','上海贝岭','黄河旋风','卧龙地产','美都能源','中国巨石','雅戈尔','东安动力','黑化股份','瑞茂通','S佳通','生益科技','光电股份','格力地产','莲花味精','国中水务','兖州煤业','吉林森工','锦州港','华资实业','长城电工','创兴资源','中牧股份','复星医药','伊力特','大唐电信','金种子酒','江苏吴中','金宇集团','哈空调','福日电子','有研新材','安彩高科','新湖中宝','罗顿发展','紫江企业','西藏药业','江泉实业','亚星客车','长春经开','浙江医药','*ST秦岭','全柴动力','南山铝业','江苏阳光','海南航空','太龙药业','鲁商置业','天津松江','升华拜克','赤天化','昌九生化','城市传媒','沧州大化','凌钢股份','金鹰股份','大杨创世','山水文化','民丰特纸','桂冠电力','铜峰电子','海南椰岛','云南城投','华业资本','时代万恒','*ST中昌','青海华鼎','万通地产','*ST成城','延长化建','两面针','南纺股份','冠农股份','中恒集团','鑫科材料','广汇能源','大湖股份','首旅酒店','广晟有色','凯乐科技','阳光照明','北方股份','ST景谷','北京城建','海正药业','国电南自','赣粤高速','外运发展','航天信息','开开实业','嘉化能源','武昌鱼','恒瑞医药','亿利能源','东方创业','重庆港九','中央商场','太化股份','南钢股份','钱江水利','浦东建设','羚锐制药','江苏舜天','大恒科技','亿阳信通','华仪电气','西水股份','中电远达','三峡新材','鄂尔多斯','广汇汽车','安琪酵母','蓝星新材','维维股份','*ST南化','标准股份','曙光股份','恒顺醋业','商业城','酒钢宏兴','华泰股份','万华化学','桂东电力','荣华实业','平高电气','农发种业','上海家化','洪都航空','营口港','巢东股份','亚星化学','振华重工','国栋建设','天房发展','瀚蓝环境','华发股份','西藏天路','大东方','兰太实业','中新药业','天通股份','宏达股份','白云山','长春燃气','国机汽车','澳柯玛','美克家居','西藏珠峰','天利高新','华夏幸福','航天动力','长江通信','大橡塑','阳泉煤业','山东高速','亚宝药业','浙江龙盛','旭光股份','敦煌种业','精伦电子','恒丰纸业','国旅联合','新农开发','华微电子','华联综超','江西铜业','联创光电','通葡股份','宁波韵升','红星发展','五洲交通','西南证券','三房巷','万向德农','中航电子','中文传媒','华菱星马','首开股份','宁沪高速','天科股份','宝光股份','健康元','青海春天','广东明珠','金地集团','山东金泰','北巴传媒','海越股份','龙净环保','江山股份','金瑞科技','成发科技','盛和资源','东华实业','盘江股份','金山股份','安源煤业','海澜之家','抚顺特钢','红豆股份','*ST海润','大有能源','动力源','国电南瑞','*ST安泰','三友化工','华胜天成','小商品城','湘电股份','江淮汽车','天润乳业','现代制药','仰帆控股','昆药集团','柳化股份','青松建化','华鲁恒升','中远航运','三元股份','吉恩镍业','冠豪高新','北方导航','片仔癀','通威股份','瑞贝卡','*ST国通','金证股份','华纺股份','宁夏建材','涪陵电力','博通股份','宝钛股份','时代新材','贵研铂业','士兰微','洪城水业','石岘纸业','空港股份','蓝光发展','好当家','百利电气','风神股份','六国化工','华光股份','湘邮科技','杭萧钢构','科力远','千金药业','凌云股份','双良节能','风帆股份','福能股份','信威集团','扬农化工','亨通光电','天药股份','中金黄金','鹏欣资源','龙元建设','凤竹纺织','晋西车轴','精工钢构','驰宏锌锗','烽火通信','科达洁能','中化国际','航天晨光','安徽水利','华丽家族','西昌电力','香梨股份','方大特钢','上海能源','天富能源','黑牡丹','国药股份','腾达建设','联环药业','海岛建设','方大炭素','置信电气','康美药业','贵州茅台','中发科技','华海药业','中天科技','贵航股份','长园集团','菲达环保','江南高纤','中铁二局','山东药玻','交大昂立','豫光金铅','宏达矿业','栖霞建设','天士力','中国软件','亿晶光电','国发股份','*ST狮头','新赛股份','莫高股份','新疆城建','山煤国际','山东黄金','深高速','厦门钨业','保变电气','时代出版','方兴科技','九龙山','慧球科技','康缘药业','大西洋','老白干酒','金自天正','江西长运','国睿科技','法拉电子','迪马股份','济川药业','山鹰纸业','中珠控股','安阳钢铁','恒生电子','信雅达','康恩贝','惠泉啤酒','皖江物流','万好万家','精达股份','京能电力','天华院','卧龙电气','八一钢铁','天地科技','海油工程','长电科技','海螺水泥','金晶科技','新华医疗','用友网络','广东榕泰','泰豪科技','龙溪股份','大连圣亚','益佰制药','中孚实业','新安股份','光明乳业','北大荒','熊猫金控','青岛啤酒','方正科技','仪电电子','大洲兴业','市北高新','汇通能源','绿地控股','*ST沪科','金杯汽车','中毅达','大众交通','老凤祥','神奇制药','鼎立股份','丰华股份','金枫酒业','国新能源','氯碱化工','海立股份','天宸股份','华鑫股份','嘉宝集团','双钱股份','复旦复华','申达股份','新世界','棱光实业','龙头股份','浙报传媒','中技控股','大众公用','三爱富','东方明珠','新黄浦','浦东金桥','号百控股','万业企业','申能股份','爱建集团','*ST乐电','中源协和','同达创业','外高桥','城投控股','锦江投资','飞乐音响','游久游戏','申华控股','中安消','豫园商城','*ST博元','信达地产','电子城','福耀玻璃','新南洋','强生控股','陆家嘴','哈药股份','天地源','奥瑞德','太极实业','尖峰集团','天目药业','东阳光科','川投能源','中华企业','交运股份','航天通信','四川金顶','金山开发','上海普天','万鸿集团','南京新百','京投银泰','珠江实业','中船防务','金龙汽车','刚泰控股','上海石化','上海三毛','青岛海尔','*ST阳化','亚通股份','东百集团','大商股份','绿庭投资','匹凸匹','欧亚集团','湖南天雁','均胜电子','工大高新','沱牌舍得','三安光电','物产中大','中航资本','曲江文旅','彩虹股份','海博股份','*ST常林','盛屯矿业','南宁百货','南京医药','金瑞矿业','*ST松辽','凤凰股份','天津港','东软集团','大连热电','祁连山','百花村','*ST金化','首商股份','宁波富达','云维股份','华电能源','鲁北化工','佳都科技','重庆百货','中国高科','湖南海利','*ST新梅','S前锋','实达集团','新华锦','苏州高新','中粮屯河','兰州民百','辽宁成大','山西焦化','华域汽车','一汽富维','华远地产','华银电力','中茵股份','江苏索普','大连控股','上实发展','西藏旅游','江中药业','天海投资','东方银星','锦江股份','厦门国贸','浪潮软件','长江传媒','红阳能源','洲际油气','中航黑豹','安徽合力','通策医疗','中电广通','中航重机','园城黄金','运盛医疗','宁波富邦','祥龙电业','综艺股份','广誉远','西藏城投','汉商集团','南京熊猫','东方通信','新潮实业','友好集团','*ST水井','通宝能源','辅仁药业','新钢股份','鲁信创投','鲁银投资','新华百货','中储股份','鲁抗医药','轻纺城','京能置业','云煤能源','ST宜纸','保税科技','国电电力','钱江生化','浙大网新','宁波海运','天津磁卡','华新水泥','福建水泥','新奥股份','鹏博士','悦达投资','昆明机床','天业股份','马钢股份','山西汾酒','神马股份','东方集团','华北制药','杭州解百','厦工股份','安信信托','ST宏盛','中路股份','耀皮玻璃','隧道股份','津劝业','上海物贸','世茂股份','益民集团','新华传媒','兰生股份','百联股份','成商集团','人民同泰','香溢融通','广电网络','第一医药','申通地铁','上海机电','界龙实业','海通证券','上海九百','四川长虹','上柴股份','上工申贝','丹化科技','宝信软件','同济科技','万里股份','自仪股份','华东电脑','海欣股份','龙建股份','春兰股份','航天长峰','长百集团','宁波中百','银座股份','王府井','京城股份','北京城乡','南通科技','内蒙华电','哈投股份','百大集团','星湖科技','通化东宝','梅雁吉祥','智慧能源','*ST厦华','石化油服','中炬高新','梅花生物','创业环保','东方电气','洛阳玻璃','中国嘉陵','航天电子','博瑞传播','亚泰集团','华联矿业','博闻科技','杉杉股份','宏发股份','国投电力','伊利股份','新疆众和','南京化纤','中房股份','秋林集团','宝诚股份','中航动力','广日股份','张江高科','中海海盛','厦门空港','三联商社','长江电力','重庆燃气','东方证券','江苏有线','渤海活塞','株冶集团','*ST中鲁','岳阳林纸','福成五丰','博汇纸业','北方创业','郴电国际','中材国际','恒源煤电','宝胜股份','新五丰','健民集团','宜华木业','广安爱众','北矿磁材','汇鸿集团','宁波热电','惠而浦','*ST建机','雷鸣科化','科达股份','航民股份','赤峰黄金','四创电子','贵绳股份','马应龙','文山电力','开滦股份','九州通','招商证券','唐山港','大同煤业','晋亿实业','柳钢股份','重庆钢铁','大秦铁路','金陵饭店','连云港','南京银行','文峰股份','宝泰隆','隆基股份','陕西黑猫','节能风电','宁波港','春秋航空','玉龙股份','一拖股份','赛轮金宇','西部黄金','中国神华','中南传媒','太平洋','恒立油缸','昊华能源','中国一重','四川成渝','中国国航','华鼎股份','三江购物','中国化学','海南橡胶','四方股份','博威合金','深圳燃气','重庆水务','兴业银行','西部矿业','北京银行','杭齿前进','中国西电','中国铁建','龙江交通','东兴证券','江南水务','东材科技','国泰君安','内蒙君正','吉鑫科技','林洋电子','陕西煤业','华电重工','环旭电子','桐昆股份','广汽集团','庞大集团','农业银行','骆驼股份','江南嘉捷','中国平安','交通银行','广深铁路','新华保险','百隆东方','绿城水务','陕鼓动力','兴业证券','怡球资源','中国中铁','工商银行','东风股份','吉林高速','大智慧','东吴证券','华锐风电','九牧王','三星电气','会稽山','北辰实业','鹿港科技','中国铝业','中国太保','上海医药','中信重工','广电电气','中国中冶','中国人寿','长城汽车','旗滨集团','平煤股份','中国建筑','中国电建','明泰铝业','滨化股份','华泰证券','拓普集团','潞安环能','风范股份','郑煤机','际华集团','上海电气','中国中车','力帆股份','光大证券','宁波建工','蓝科高新','星宇股份','中国交建','皖新传媒','中海油服','光大银行','中国石油','中海集运','招商轮船','正泰电器','大连港','江河创建','中国国旅','亚星锚链','中煤能源','紫金矿业','方正证券','京运通','国投新集','中国远洋','凤凰传媒','吉视传媒','永辉超市','建设银行','金钼股份','中国汽研','宝钢包装','海南矿业','中国核电','中国银行','中国重工','大唐发电','金隅股份','丰林集团','中信银行','出版传媒','人民网','奥康国际','宏昌电子','龙宇燃油','晶方科技','联明股份','喜临门','北特科技','万盛股份','合锻股份','创力集团','弘讯科技','中衡设计','设计股份','中科曙光','爱普股份','山东华鹏','新通联','威帝股份','大豪科技','石大胜华','全筑股份','音飞储存','和邦生物','天成自控','宁波精达','长白山','川仪股份','润达医疗','康尼机电','红蜻蜓','万林股份','共进股份','翠微股份','中材节能','华贸物流','腾龙股份','福达股份','渤海轮渡','莎普爱思','兰石重装','亚邦股份','迎驾贡酒','九华旅游','济民制药','恒通股份','雪峰科技','松发股份','海天味业','华铁科技','华懋科技','应流股份','维力医疗','金海环境','福鞍股份','派思股份','依顿电子','明星电缆','浙江鼎力','莱克电气','日出东方','柳州医药','今世缘','新华龙','九洲药业','维格娜丝','立霸股份','贵人鸟','健盛集团','普莱柯','珍宝岛','伟明环保','高能环境','口子窖','引力传媒','广信股份','永艺股份','再升科技','东方电缆','禾丰牧业','诺力股份','韩建河山','杭电股份','南威软件','灵康药业','火炬电子','龙马环卫','石英股份','航天工程','纽威股份','盛洋科技','海利生物','龙韵股份','隆鑫通用','宁波高发','星光农机','华友钴业','福斯特','歌力思','曲美家居','柯利达','四通股份','北部湾旅','老百姓','吉祥航空','新澳股份','好莱客','晨光文具','永创智能','金桥信息','益丰药房','醋化股份','银龙股份','金诚信','中电电机','艾华集团','洛阳钼业','继峰股份','方盛制药','排序','全排序','说明','行业','宏观');
		function chk(fname){
			if (!Array.prototype.indexOf){
				Array.prototype.indexOf = function(elt /*, from*/){
					var len = this.length >>> 0;
					var from = Number(arguments[1]) || 0;
					from = (from < 0)
						 ? Math.ceil(from)
						 : Math.floor(from);
					if (from < 0)
					  from += len;
					for (; from < len; from++)
					{
					  if (from in this &&
						  this[from] === elt)
						return from;
					}
					return -1;
				};
			}
			if (codes.indexOf(fname.value)>=0)
			{
				var hl = 'http://www.gushaizi.com/fxbg/' + fname.value + '.html';
				window.open(hl);
			}else if(jc.indexOf(fname.value)>=0){
				var hl = 'http://www.gushaizi.com/fxbg/' + codes[jc.indexOf(fname.value)] + '.html';
				window.open(hl);	
			}else{
				alert('请输入正确的股票代码或中文简称！');
				fname.focus();
				return false;			
			}
		}
		


		var $ = function (id) {
			return "string" == typeof id ? document.getElementById(id) : id;
		}
		var Bind = function(object, fun) {
			return function() {
				return fun.apply(object, arguments);
			}
		}
		function AutoComplete(obj,autoObj,arr){
			this.obj=$(obj);        //输入框
			this.autoObj=$(autoObj);//DIV的根节点
			this.value_arr=arr;        //不要包含重复值
			this.index=-1;          //当前选中的DIV的索引
			this.search_value="";   //保存当前搜索的字符
		}
		AutoComplete.prototype={
			//初始化DIV的位置
			init: function(){
				this.autoObj.style.left = this.obj.offsetLeft + "px";
				this.autoObj.style.top  = this.obj.offsetTop + this.obj.offsetHeight + "px";
				this.autoObj.style.width= this.obj.offsetWidth - 2 + "px";//减去边框的长度2px   
			},
			//删除自动完成需要的所有DIV
			deleteDIV: function(){
				while(this.autoObj.hasChildNodes()){
					this.autoObj.removeChild(this.autoObj.firstChild);
				}
				this.autoObj.className="auto_hidden";
			},
			//设置值
			setValue: function(_this){
				return function(){
					_this.obj.value=this.seq;
					_this.autoObj.className="auto_hidden";
				}       
			},
			//模拟鼠标移动至DIV时，DIV高亮
			autoOnmouseover: function(_this,_div_index){
				return function(){
					_this.index=_div_index;
					var length = _this.autoObj.children.length;
					for(var j=0;j<length;j++){
						if(j!=_this.index ){       
							_this.autoObj.childNodes[j].className='auto_onmouseout';
						}else{
							_this.autoObj.childNodes[j].className='auto_onmouseover';
						}
					}
				}
			},
			//更改classname
			changeClassname: function(length){
				for(var i=0;i<length;i++){
					if(i!=this.index ){       
						this.autoObj.childNodes[i].className='auto_onmouseout';
					}else{
						this.autoObj.childNodes[i].className='auto_onmouseover';
						this.obj.value=this.autoObj.childNodes[i].seq;
					}
				}
			}
			,
			//响应键盘
			pressKey: function(event){
				var length = this.autoObj.children.length;
				//光标键"↓"
				if(event.keyCode==40){
					++this.index;
					if(this.index>length){
						this.index=0;
					}else if(this.index==length){
						this.obj.value=this.search_value;
					}
					this.changeClassname(length);
				}
				//光标键"↑"
				else if(event.keyCode==38){
					this.index--;
					if(this.index<-1){
						this.index=length - 1;
					}else if(this.index==-1){
						this.obj.value=this.search_value;
					}
					this.changeClassname(length);
				}
				//回车键
				else if(event.keyCode==13){
					this.autoObj.className="auto_hidden";
					this.index=-1;
				}else{
					this.index=-1;
				}
			},
			//程序入口
			start: function(event){
				if(event.keyCode!=13&&event.keyCode!=38&&event.keyCode!=40){
					this.init();
					this.deleteDIV();
					this.search_value=this.obj.value;
					var valueArr=this.value_arr;
					valueArr.sort();
					if(this.obj.value.replace(/(^\s*)|(\s*$)/g,'')==""){ return; }//值为空，退出
					try{ var reg = new RegExp("(" + this.obj.value + ")","i");}
					catch (e){ return; }
					var div_index=0;//记录创建的DIV的索引
					for(var i=0;i<valueArr.length;i++){
						if(reg.test(valueArr[i])){
							var div = document.createElement("div");
							div.className="auto_onmouseout";
							div.seq=valueArr[i];
							div.onclick=this.setValue(this);
							div.onmouseover=this.autoOnmouseover(this,div_index);
							div.innerHTML=valueArr[i].replace(reg,"<strong>$1</strong>");//搜索到的字符粗体显示
							this.autoObj.appendChild(div);
							this.autoObj.className="auto_show";
							div_index++;
						}
					}
				}
				this.pressKey(event);
				window.onresize=Bind(this,function(){this.init();});
			}
		}
	</script>
     <style type="text/css">
      a:link {color:#A1A1A1;text-decoration:none;} /*未被访问的链接 */
      a:visited {color:#A1A1A1;text-decoration:none;} /* 已被访问的链接 */
      a:hover {color:#FFA500;} /* 鼠标指针移动到链接上 */
      a:active {color:#FF0000;} /* 正在被点击的链接 */        
    </style>
	<style type="text/css">
      a.s2:link {color:#0000FF;text-decoration:none;} /*未被访问的链接 */
      a.s2:visited {color:#0000FF;text-decoration:none;} /* 已被访问的链接 */
      a.s2:hover {color:#FFA500;} /* 鼠标指针移动到链接上 */
      a.s2:active {color:#FF0000;} /* 正在被点击的链接 */  
    </style>
</head>
<body  bgcolor="#FFFFF4">
<div style = "line-height:0.45"><br/></div>
&nbsp;<a  target="_blank"  href="http://www.gushaizi.com/fxbg/px.html" >排序</a>
&nbsp;<a  target="_blank"  href="http://www.gushaizi.com/fxbg/hy.html" >行业</a>
&nbsp;<a  target="_blank"  href="http://www.gushaizi.com/fxbg/hg.html" >宏观</a>
&nbsp;<a  target="_blank"  href="http://www.gushaizi.com/fxbg/jg.html" >荐股</a>
&nbsp;<a  target="_blank"  href="http://www.gushaizi.com/fxbg/yd.html" >阅读</a>
<div style="color:#0000FF;z-index:17" align="center"  ><br/><br/><br/><br/><br/><br/><br/><br/>
	<big><big>
	<h1  align="center">
	<a class="s2" href="http://www.gushaizi.com/fxbg/sm.html"  target="_blank">股 筛 子<a>
	</h1>
	</big></big><br/><br/>
	<form name = "inputform">
	<input autocomplete="off" style="width:300px;height:40px;font-size:20px;text-align:justify;line-height:40px;" type="text" name=fname size="47" maxlength="100" id="o" onkeyup="autoComplete.start(event)" placeholder="请输入股票代码或中文简称" autofocus="autofocus" onkeydown='if(event.keyCode==13) javascript:chk(fname);' /><br/><br/><br/><br/><br/>
	<input style="width:140px;height:35px;font-family:'Times New Roman'; font-size:23px;" type="button" value="搜     索"  onclick="javascript:chk(fname)" />
	</form>
</div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="auto_hidden" id="auto"><!--自动完成 DIV--></div>
<script>
    var autoComplete=new AutoComplete('o','auto',codes.concat(jc));
</SCRIPT>
<div align="center" style="color:#A1A1A1;font-size:15px" ><a  href="http://www.gushaizi.com/fxbg/bz.html" alt="网站使用帮助"  target="_blank"><img src="/gushaizi.gif" align="center" height="17" width="17" alt="股筛子" />&nbsp;“股筛子”股票分析系统</a> by <a style="color:#A1A1A1;text-decoration:none;" href="mailto:imahero@gmail.com"> Jiangang</a></div>
<br/>
<div align="center" style="color:#A1A1A1;font-size:9px">【<a style="color:#A1A1A1;text-decoration:none;"  target="_blank" href="http://www.miitbeian.gov.cn/">沪ICP备16002210号</a>&nbsp;<big>©</big>2016-2020 版权所有】 </div>
</body>
</html>
'''
f = codecs.open('C:\\JR\\网站\\fxbg\\sosuo.html','w', 'UTF-8')
f.write(sosuo)
f.close()
print("        探索文件完成。")


print("8 开始写帮助文件……")
bz = '''
<br/><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote>
<div id="d0"><h2  align="center">网站使用说明</h2></div>  
<br/><big>
<font style="line-height:1.5;">
<ol><li>搜索个股页面：可以用6位股票代码或股票中文简称搜到该股票的分析报告；
</li><li>搜索行业页面：输入行业1、行业2、行业3、行业4加空格，再输入这些行业的名字；
</li><li>搜索其它重要页面：输入全排序、排序、行业、行业结构、宏观、说明和帮助可以进入到相关页面，也可以输入这些中文关键字的拼音首字母qpx、px、hy、hyjg、hg、sm和bz分别获得；
</li><li>股票估值方法说明：点首页“股筛子”可以得到股票估值方法说明；
</li><li>首页链接：首页左上角可以链接到“排序”（预计上涨10%及以上的股票排序）、“行业”（包括四个层级所有行业的泡沫情况）、“宏观”（关于宏观趋势的文章分享和分析）；
</li><li>各页面链接：排序、行业、每个股票的页面都有一些蓝色标示的链接，方便跳转到想去的页面，每个个股标题都可以链接到这只股票的公司网站，每个行业的标题可以链接到行业结构页面；
</li><li>网站使用说明：点首页最下面转动的图标可以获得网站帮助文档；
</li><li>个股详细资料外部网站链接：每个个股的页面上面都有各个股票在各大财经网站上的个股页面的链接；
</li><li>新闻网站链接：每个行业或排序的页面上面都有各个财经网站新闻页面的链接；
</li><li>浏览器：网站使用Chrome浏览器测试，不同浏览器显示效果可能不一样，在手机上使用可以使用“分享”按钮将网站“添加到主屏幕”以方便随时使用；
</li><li>访问密码：网站还只是本人个人网站，现阶段采用密码登陆，密码也可能随时改动，如果密码改动后还需要访问，请联系本人；
</li><li>网站更新：在本人力所能及的情况下会不断在网站上增加新内容或发布最新的股票投资方法的研究成果。
</li></ol>
</font>
</big><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</blockquote></blockquote></blockquote></blockquote></backquote></blockquote></blockquote>
    '''
f = codecs.open('C:\\JR\\网站\\fxbg\\bz.html','w', 'UTF-8')
bz = ah.replace("股筛子","帮助") + bz + at
f.write(bz)
f.close()
print("        帮助文件完成。")



import codecs
print("9 开始写阅读文件……")
yd = '''
<html lang="zh-CN"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"><meta charset="utf-8">
    <title>阅读</title>
    <head><link rel="shortcut icon" href="/favicon.ico">
    <style type="text/css">
        a:link {color:#0000FF;text-decoration:none;"} /* 未被访问的链接 */
        a:visited {color:#00FF00;} /* 已被访问的链接 */
        a:hover {color:#FFA500;} /* 鼠标指针移动到链接上 */
        a:active {color:#FF0000;} /* 正在被点击的链接 */
    </style>
    </head>
    <body bgcolor="#FFFFF4">
<br/><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote>
<div id="d0"><h2  align="center">阅读</h2></div>  
<big><blockquote><blockquote><br/><a href="#d2" >2016年1月29日    推荐一篇文章：《30年股票投资心得》</a><br/>
</blockquote></blockquote><br/><br/>
<div id="d2"><a href="#d0" ><h3 style="color:	#FF0000">2016年1月29日    推荐一篇文章：《30年股票投资心得》</h3></a></div>
（选自《冷眼：三十年股票投资心得》冯时能 马来西亚）
<br/>
<br/>“股市还会起吗？”这是我最常被问到的问题。我的回答一律是“不知道”。
<br/>　　
<br/>我知道询问者会感到失望，甚至心里还会抱怨。他们认为我自私，明明是知道的，却不肯跟他们分享预测股市动向的心得。实际上，“不知道”是我最诚实、最诚恳的答复。我确实不知道明天，下个月或明年股市会怎样，我也不认为有谁有这样的本领。
<br/>　　
<br/>如果我真的知道的话，我一定乐于跟大家分享，就好像我乐于跟大家分享我的基本面投资心得一样。无数的人，殚精竭虑，“发明”预测市场新的方法，都没有一样经得起时间的考验。我从此不再浪费时间去猜测股市的动向了。
<br/>　　
<br/>第一是因为股市根本是不可预测的。
<br/>　　
<br/>第二是股票投资赚钱根本不需要靠预测股市。
<br/>　　
<br/>股市有如黄鳝，浑身滑溜溜，你根本无法抓住它。一个曾经做过鱼贩的老同学告诉我抓黄鳝的“秘诀”。他说：“黄鳝吃软不吃硬，所以只能‘托’，不能用力‘抓’。”不能用力捏，否则，它感到不舒服，就会挣扎，你无论多么用力，都会从你手中溜走。抓黄鳝，紧不如松，快不如慢，刚不如柔，巧不如拙。
<br/>　　
<br/>股市也一样，你盯得太紧，企图预测它的动向，它偏偏跟你作对。许多股友，千方百计，企图“捕捉”股市的起落，结果都徒劳无功，就好像用力抓黄鳝，始终抓不住一样。
<br/>　　
<br/>最好的方法，是远离股市，不太在意它的波动，把焦点集中在公司的业绩表现上，反而更易“驯服”股市。就好像轻轻托起，反而更能将黄鳝“制服”一样。
<br/>　　
<br/>股市的波动，就好像黄鳝的不断蠕动一样，是正常的，不必去理会它。采取反向策略，低价买进好股，就不动如山。只要公司业绩不断上升，就不卖。不要理会股市短期的波动，不必担心你的股票不会起，因为当公司赚钱越来越多时，股价必然会同步上升。
<br/>　
<br/>股市于我何有哉？
<br/>　
<br/>此之谓投资正道。
<br/>　
<br/><b>股票风险有多高？</b>
<br/>
<br/>很多人都认为股票风险很高，但我认为，股票风险不会超过直接做生意的风险。
<br/>
<br/>只要你不是跟随市场情绪，高价买入公司股票，那么你的股份代表公司的业务，公司经营成功，你的股份价值也会随之上升，如果经营失败，甚至破产，你的亏损极限是0，但如果是做生意，有资产担保的话，可能还会累及个人。
<br/>
<br/>股票投资的风险，源自于企业的失败，这是企业风险。如果买价过高，还有市场跌价风险。
<br/>
<br/>所以，投资者应该避免高价买股，因为高价买好股，尚且难赚钱，何况可能买到劣股。治本之道就是反向+成长+时间=价值。这是我三十年所坚持的方程式。只要长期循正道而行，投资者就能取得合理的回报。
<br/>
<br/><b>为什么不能等三年？</b>
<br/>　
<br/>你买了一套房子，由跟开发商签约到开发商交房给你，前后三年，你觉得这是理所当然的事，三年的等待，你觉得一点也不长。在这期间，你没有分文收入，却定期的给银行利息，你也毫无怨言。
<br/>
<br/>如果你买荒地开辟种植油棕园，从伐木、烧芭、开路挖沟，育苗，种植，除草，施肥，整整忙了三年，才看到棕果出现，收成仍不足以维持开支，再等两年，棕果渐丰，油棕园的收支才达到平衡，仍没钱赚。这已是第五个年头了。忙了五年，只有付出，没有收入，你不以为苦，因为你知道那是赚钱无可避免的途径。
<br/>　
<br/>如果你是一名中小型企业家，你有制造某种产品的经验，过去你是为别人管理公司的，现在决定自己创业，你决定建一间工厂，你从调查市场，向银行接洽借款，寻找厂地，设计厂房，招聘员工，装置机器，试验生产，到产品推入市场，从策划到产品出现在百货公司的货架上，前后三年，再苦撑两年，才开始有盈利，那已是第五个年头了。你认为这是创业的正常过程，你心甘情愿与你的事业同行五年，毫无怨言。
<br/>　
<br/>以上的例子——开辟油棕园，从事工业，从筹备到赚钱，快则一年半，慢则五年，业者从无怨言，因为他们了解，做任何事业，都需要时间，绝对没有一蹴即成这回事。
<br/>　　
<br/>以上例子有一个共同点，那就是投入资金，希望赚取合理的利润，这叫“投资”，业者除了知道投资需要时间外，他们也接受一个事实，即凡是投资，都有风险，没有任何投资是没有风险的，风险是他们赚取比银行定存更高的利润所面付出的代价。
<br/>　　
<br/>业者接受两项事实：
<br/>
<br/>投资需要时间才能赚到利润，没有捷径可操。
<br/>
<br/>凡投资都有风险，风险的高低常与利润成正比。
<br/>
<br/>股票投资，是许许多多投资管道之一，为什么投资者不能接受以上的两项事实？
<br/>
<br/>做事业，你可以等三、五年，股票投资为什么不能等三、五年？在做任何事情失败后，多数人只怨别人，把责任推在别人或环境身上，能自我反省的人少之又少。股票投资也一样，亏了本不是怨股市，就是怨别人使奸用诈，从来不检讨自己失败的原因。
<br/>　　
<br/>再问一次：买房子可以等三年，为什么买股票不能等三年？
<br/>　
<br/><b>怎样减少亏损</b>
<br/>　
<br/>我曾问学医的大儿子：“学医最重要的是学什么？”
<br/>　
<br/>他说：“学习怎样不把人医死。”
<br/>
<br/>这个回答很奇特，事隔十多年仍记忆犹新。所以，做股票的人首先不是学怎么赚钱，而是学会不要亏掉大钱。作为散户，总会有看走眼和买错股蒙受亏损的时候，但只要赚多亏少，长期就可以赚钱。
<br/>　　
<br/>如何减少亏损呢？经验就是采取反向策略，尽量买低，一个简单看法就是一年中的股价最低和最高价之间的平均价，位于最低点和平均价之间就属于低买入区间。而要想在低买入区间购入股票，就要养成反向的习惯，在股市低潮时进场。
<br/>　　
<br/>大多数货物，都是价格越便宜越多人买，唯独股票是越低越没有人买。价格越高，买的人反而越多。这就是大多数人最终赔钱的原因。买入如果股价升够50%，则基本已经脱离危险区，可以放任股价奔跑。如果公司业绩继续改善，就不应该急于脱手，而是继续追随公司成长。但如果公司经营有恶化趋势，则无论赚或赔，都应果断卖掉。
<br/>　　
<br/><b>快　狠　准：破产有你份</b>
<br/>　　
<br/>“快、狠、准”是武林高手追求的最高境界。出手快如闪电，是为“快”，一招夺命，是为“狠”，一击中的，是为“准”。
<br/>　　
<br/>把这三招应用到股票投资上，胜算有多高？
<br/>　
<br/>“快”者，买和卖都比别人快一步。别人未买你先买，买价比别人低，是为“低买”。别人未卖你先卖，卖价比别人高，是为“高卖”。要低买高卖，必须养成反向思维的习惯，股市中人，99%是跟在群众后面的“顺”民，“顺民”多数是别人买了以后才敢买，别人卖了以后才甘愿卖，不是“低买高卖”，而是“高买低卖”，如何能赚钱？参与股市者，少说也有百万人，个个都想比别人快一步，你有胜过别人的条件吗？故要靠“快”赚钱，知易行难。
<br/>
<br/>“狠”者，是机会一出现，就全力以赴，一掷百万，绝不手软，不成功，便成仁，是“狠”得够酷。然而股市是不按牌理出牌的地方，你认为股市会起，它偏偏大跌，你认为一家公司前途亮丽，偏偏冒出一盘假账。如果你信心爆棚，孤注一掷的话，破产在等着你。
<br/>　
<br/>“准”者，臆测屡中也。问题是地球上任何一个角落所发生的事，都可能影响股市，你永远不知道在地球的另一边什么时候会发生什么事，预测怎能“准”？上市公司内幕重重，身为局外人的散户，都是后知后觉者，如何能准确预测公司的业绩？
<br/>　
<br/>既然对股市和对公司的预测变数多如牛毛，如何能“准”？在看不准的情况下，行动快如闪电，买卖胆大包天，等于自杀。
<br/>　
<br/>剑客难免剑下亡。欲以“快、狠、准”纵横股市，不怕一万，只怕万一。一次失准，永无翻身之日。
<br/>　　
<br/>慎之，慎之！
<br/>　　
<br/><b>慢　稳　忍：高明的拙招</b>
<br/>　　
<br/>股票投资要成功，"快"不如"慢"，"狠"不如"稳"，"准"不如"忍"。
<br/>　　
<br/>与其快狠准，不如慢、稳、忍。在你最冲动的时候，稍为停一停，放慢一步，可以使你恢复理智，减少错误。“快”中有错，“慢”中少错。
<br/>　　
<br/>许多人恐怕动作慢，会失去投资机会。实际上刚好相反，因为股市跌到谷底时，一定会在低价区徘徊一段相当长的时间，你有足够的时间，择肥而噬，根本不必担心买不到。
<br/>　　
<br/>要赚钱，首先要学不亏钱。稳扎稳打，步步为营是防亏的先决条件。轻率行事，鲁莽冒进，轻则招损，重则至亡。智者不为也。
<br/>　
<br/>“忍”者，心上插着一把刀。若无非凡之定力，难以承受。股票投资，“忍”功不够，鲜有能成大器者。
<br/>　
<br/><b>耐心乃成功之母</b>
<br/>　　
<br/>买进之前，能忍人之所不能忍，才能在低价区买进。
<br/>　　
<br/>卖出之前，能忍人之所不能忍，才能在高价区脱手。
<br/>　
<br/>买进之后，能忍有耐心，才能长期持有获大利。若不能忍，稍有盈利就迫不及待地抛出，所得有限。如何能“富”？公司要时间去发展，业务要时间去推行，油棕要时间来成长，计划要时间来完成，故“耐心”乃成功之母。能忍、能耐，谓之“忍耐”。不能忍，好比果子未熟就采摘，青涩难咽。甜美的果实，惟有忍者才能尝到。
<br/>　
<br/>故快不如慢，狠不如稳，准不如忍。“慢、稳、忍”看似笨拙，实属高明。<br/>  
<br/>


</big><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></blockquote></blockquote></blockquote></blockquote></backquote></blockquote></blockquote>
</body></html>
    '''
f = codecs.open('C:\\JR\\网站\\fxbg\\yd.html','w', 'UTF-8')
f.write(yd)
f.close()
print("        推荐阅读完成。")


import codecs
print("10 开始写宏观文件……")
hg = '''
<html lang="zh-CN"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"><meta charset="utf-8">
    <title>宏观</title>
    <head><link rel="shortcut icon" href="/favicon.ico">
    <style type="text/css">
        a:link {color:#0000FF;text-decoration:none;"} /* 未被访问的链接 */
        a:visited {color:#00FF00;} /* 已被访问的链接 */
        a:hover {color:#FFA500;} /* 鼠标指针移动到链接上 */
        a:active {color:#FF0000;} /* 正在被点击的链接 */
    </style>
    </head>
    <body bgcolor="#FFFFF4">
<br/><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote>
<div id="d0"><h2  align="center">宏观与趋势分析</h2></div>  
<big><blockquote><blockquote><br/>
<br/><a href="#d1" >2016年1月27日    在中国趋势可能比个股还重要</a>
</blockquote></blockquote><br/><br/>
          
<div id="d1"><a href="#d0"><h3 style="color:	#FF0000">2016年1月27日    在中国趋势可能比个股还重要</h3></a></div>
从今天开始，想写一些对经济和市场的判断，这也是强迫自己思考。之所以要这样是因为，做价值投资容易偷懒，忽视对趋势的判断，殊不知，在中国选择和长期持有个股固然重要，但是趋势把握对了才能如虎添翼，让复利借上东风，获得难以想像的收益。
<br/>
<br/>其实我有一个更加极端的看法，趋势可能比个股还重要。如果在大般底部建仓，在顶部清仓，收益将相当可观。这与选择个股相比，难度或许更大。但这不是不思考不判断的理由。
<br/>
<br/>最近一个月市场最产生了30%的最大下挫，这是何等让人感慨的事啊。更何况，这样的波动在未来还会是经常见到的。
<br/>
<br/>这就需要在价值投资策略上附加“波段策略”，而不是一味傻瓜似的长期持有。
<br/>
<br/>这一做法的主要原因是：
<ol><li>整个市场处于宏观经济中，受宏观周期的影响；</li>
<li>人们对经济周期的解读常常不是过于乐观就是过于悲观；</li>
<li>市场受到受到大量买盘和卖盘的信号时，有一个正反馈机制——买进->上涨->信心增强->继续买进，如此往复，反之亦然。</li>
</ol>
最近市场怎么操作呢？
<br/>
<br/>最近市场大概率已经处于过度反应的底部了，已经持有的股票，只要质地不错，就不适合在此时卖出，如果还有现金，反而应该进行一定的买入。不过，可能还有一定概率继续往下走。所以，不建议满仓。
<br/>
<br/>上次牛熊转化，2007年10月16日从6124点跌到2008年10月28日1664点，一年时间跌了73%。这次从5178点跌到什么点，难以预测。从比例上看，没有涨上次那么多，跌也不会上次那么多，算一下大约是1968点。这次还有一个情况是，有一个中国经济转型是否成功的预期，叠加资本外流、中国政府经济刺激失效、全球经济放缓、个别国家连续出现经济危机等情况，悲观情绪短时期难以转变。
<br/>
<br/>最后想说，我对中国经济是乐观的，特别是新兴产业，将有一个大的发展。这么多人，这么多人才，这么勤奋，这么想发财，中国经济还处于初级阶段，政治稳定，随着经济自由度和技术的自然发展，中国一些公司将发展成为全球性公司。选好行业，选好个股，长期持有，将有大的收益。
</big><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></blockquote></blockquote></blockquote></blockquote></backquote></blockquote></blockquote>
</body></html>
    '''
f = codecs.open('C:\\JR\\网站\\fxbg\\hg.html','w', 'UTF-8')
f.write(hg)
f.close()
print("        宏观文件完成。")


import codecs
print("11 开始写荐股文件……")
jg = '''
<html lang="zh-CN"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"><meta charset="utf-8">
    <title>荐股</title>
    <head><link rel="shortcut icon" href="/favicon.ico">
    <style type="text/css">
        a:link {color:#0000FF;text-decoration:none;"} /* 未被访问的链接 */
       /* a:visited {color:#0000FF;} 已被访问的链接 */
        a:hover {color:#FFA500;} /* 鼠标指针移动到链接上 */
        a:active {color:#FF0000;} /* 正在被点击的链接 */
    </style>
    </head>
    <body bgcolor="#FFFFF4">
<br/><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote>
<div id="d0"><h2  align="center">荐股</h2></div>  
<big>
<p align="center">2016年2月2日</p>
<blockquote>
<table  border="0" bordercolor="#F5F5F5" style="center:float;display:inline;word-break:keep-all;border:0px;" cellpadding="10">
<tr></td><td><a href="#d2" >阳光电源</a></td><td><a href="#d3" >金龙机电</a><td><a href="#d1" >网宿科技</a></td>
</tr><tr><td><a href="#d4" >恒顺众昇</a></td><td><a href="#d5" >东方财富</a></td><td><a href="#d6" >华谊兄弟</a></td>
</tr><tr><td><a href="#d7" >长城汽车</a></td><td><a href="#d8" >美晨科技</a></td><td><a href="#d9" >蓝帆医疗</a></td>
</tr><tr><td><a href="#d10">海澜之家</a></td><td></td><td></td></tr>
</table>
</blockquote>



<div align="center"><b>写在前面的说明</b></h3></div>
<br/>看资料形成了一些看法，但还没有时间落实成文字。文字是更精确的思考，还是应该写一写的。只是，业余做这个写作，时间有限，只能先进行简单的概述，有时间再逐渐完善。本网站的文字主要是写给自己看的，也许以后也会其他人看到，会有想法，并想留言，网站暂时没有留言功能，虽然加上这个功能并非难事，但总会花时间。以后再说吧。想联系我可以通过首页的邮件地址。
<br/><br/>以下按照我对股票的喜欢和推荐程度的顺序进行分析，这个顺序随着时间推移会在不断变化之中。股票各有特点，不同的人适合的股票不一样的，一般风险承受力小的（年纪大、负担重、收入不稳定、心态容易受股票波动影响的）适合更加稳定的股票，风险承受能力大的（年纪轻、负担不重、收入稳定、心态好的）适合博取更加容易高速成长的股票。我比较喜欢中小市值、主业是多年根植不易复制的龙头、企业高管不仅能在主业上精耕细作也善于不断扩展与其特殊能力关联的产品、科技含量比较高、属于中国可能未来在全球胜出的产业、概念比较容易被人理解、管理层比较踏实和勤奋的股票。研究股票不宜贪多，有闲时到是应该多研究些，应该勤奋点，股票是非常有趣的，通过股票可以透视世界的方方面面。
<br/><br/>一般主推三支股票，是已经比较成熟的，可以投资的，即排在前三的；其次，推另外七支股票，也是研究比较久，但在某些点上还不是很有信心的股票，或者投资时机还没有到，排在第四到十；另外研究十支股票，这些股票是处于熟悉的过程中。同时关注二十支股票是我现在的精力适当的量。随着时间的推移，积累的股票会逐渐增多。但只推荐购买前面三支，或适购买第四到十支。
<br/><br/>言归正转。以下对最近关注的股票进行分析。想来会写写改改，不断加上新的思考的。行文简洁的考虑，现在格式上主要是：引言段，说明我的认识过程；原因段，罗列值得投资的原因；结论段：用简短的陈述对股票特性和操作方法进行总结。原因段，首要的原因都是性价比足够高，这已经通过系统过滤了，排在前面的都是如此，就不专门说，请点击链接看股票排名和预计涨幅。所选一般是历史上成长不错的股票，这里要分析的关键是历史成长能不能持续。另外，随着时间推移会出一些补充段，主要是跟踪股票情况时发现的重要的需要说明的情况。

<div id="d2"><a href="#d0"></a><h3><a href="http://www.gushaizi.com/fxbg/300274.html" target="_blank" >阳光电源</a></h3></div>
能源是人类文明永恒的主题。该股值得期待：
<br/>
<ol>
<li>可控核聚变是终极解决方案，看起来近二十年没办法民用。可预见的未来，化石燃料占主要但处于下降趋势，清洁能源上升趋势。风能、太阳能、潮汐能等要并入电网就需要逆变器。该公司是该领域龙头。</li>
<li>精耕主业的同时，发力太阳能电站设计和管理，利用电量皆通过其逆变器的优势收集数据，建立难以复制的优势（电站的效益主要的设计环节决定的，设计需要大量环境数据）。与阿里合作建数据云，优势互补，进一步强化了优势。</li>
</ol>
结论：推荐信心9成把握。主业突出，有技术积累，做事稳健，也不乏想像力。市值这么小，未来两三年三到倍是可以期望的。公司比较低调，稳步上升的可能性比较大，要有耐心。
  
<div id="d3"><a href="#d0"></a><h3><a href="http://www.gushaizi.com/fxbg/300032.html" target="_blank" >金龙机电</a></h3></div>
电子制造业将是中国未来的强项，谁能胜出并走向全球呢？值得精选。看好理由：
<br/>
<ol>
<li>微电机用途非常广泛，各种震动的东西，触摸屏同样如此，而这是公司两大主业，现有很多手机都采用了。再就是指纹识别，其东莞的分公司已经开始出货。相关产品不断耕织，未来发展空间很大。任其前端做手机和快销产品的怎么拼，把零件最到最小，最稳定，最便宜，就会立于不败之地。而公司这方面表现不错，不仅主业稳固，不断涉足相关领域，都有斩获。最近涉足蓝宝石，与其触摸屏和指纹识别是相关联的。公司毛利和销量不断扩大，证明公司路子的正确性。</li>
<li>想像空间巨大。主要是在可穿戴设置上，公司的技术积累能帮助其在该领域不断延伸产业链。</li>
</ol>
结论：推荐信心8成把握。穿戴设置有想像空间。现在市值不大，业绩增长很快，未来两三年成长三到五倍是可能的。


<div id="d1"><a href="#d0"></a><h3><a href="http://www.gushaizi.com/fxbg/300017.html" target="_blank" >网宿科技</a></h3></div>
这只股票关注有一段时间了。最早是从一个分析师的报告中得知，该分析师推荐了这只股票很久，但前几年都没有爆发，应该也比较郁闷吧。但可贵的是，锲而不舍，最后这只股票真的成为大牛股。当然，现在继续关注，主要还是因为它排在系统的前列。
<br/><br/>
现在问题来了，还会再创辉煌吗。我认为会，主要原因是：
<br/>
<ol>
<li>服务器市场将维持长期增长。现有市值不到400亿，并不算大，增长到1000亿并不是不可能。主要原因是除了网络储存和加速，还可以切入安全。</li>
<li>服务器管理不仅是硬件，更重要是软件和服务。这方面急不得，需要不断积累。别的企业也很难快速侵占这个市场。</li>
<li>阿里、腾迅、百度，甚至电信公司的加入会不会颠覆这个市场的毛利？我认为CDN市场要中介中立，BAT很难受人信任，将企业最宝贵的数据挪为己用，所以他们主要做中小市场，与网宿是错位的。BAT培养小客户，最后这些客户会转移到网宿，其实是利好。电信等国企没有技术实力和服务上的态度。</li>
<li>其它企业的竞争呢？目前看，一旦优势形成，往往会有很强的规模优势。国外企业由于安全问题不可能占有国内巨大市场。网宿在国内做大做强到可能到海外发展。现在已经在各大洲布局了，目前增发就是在中国的社区云和国际的CDN。</li>
</ol>
结论：推荐信心9成把握。未来增长可期，中等市值，一两年翻倍问题不大，但要三五倍就需要观察。同时，是创业板里的蓝筹股，长得比较慢，跌起来也不狠。需要耐心。


<div id="d4"><a href="#d0"></a><h3><a href="http://www.gushaizi.com/fxbg/300208.html" target="_blank" >恒顺众昇</a></h3></div>
海外产业园，值得期待。有空再写。
     

<div id="d5"><a href="#d0"></a><h3><a href="http://www.gushaizi.com/fxbg/300059.html" target="_blank" >东方财富</a></h3></div>
股票软件和金融数据，值得期待。有空再写。


<div id="d6"><a href="#d0"></a><h3><a href="http://www.gushaizi.com/fxbg/300027.html" target="_blank" >华谊兄弟</a></h3></div>
影视龙头，值得期待。有空再写。

<div id="d7"><a href="#d7"></a><h3><a href="http://www.gushaizi.com/fxbg/601633.html" target="_blank" >长城汽车</a></h3></div>
自主品牌的希望，值得期待。有空再写。

<div id="d8"><a href="#d0"></a><h3><a href="http://www.gushaizi.com/fxbg/300237.html" target="_blank" >美晨科技</a></h3></div>
后来选股主要是依靠自己的系统了，排在前面小而美的就会花时间分析。这只股票排在最前面。为什么认为值得投资呢？原因有：
<br/>
<ol>
<li>在汽车橡胶领域，主要专注非轮胎橡胶，该细分市场的龙头，该市场涉及新材料，也是技术上需要长期积累的，也说明别的企业要突然占有该市场，并非易事。</li>
<li>切入汽车服务电商，与其主业并不冲突。这也是有想像力的市场。</li>
<li>切入园林，虽然与主业不是很相关，还好是中国未来比较有前途的市场。需要的也是精细管理，在管理上是相通的。作为企业的双主业，是可行的。</li>
</ol>
结论：推荐信心8成把握。双主业，关联度不大，汽车后期也是玩票的项目，近两年利润增长很快，但可持续性值得存疑。盘子很小，长跌都很猛，心脏不好的就要小心。如果业绩没有造假，风险不大，如果未来上涨持续，一到两年翻三到五倍是可以期望的。

<div id="d9"><a href="#0"></a><h3><a href="http://www.gushaizi.com/fxbg/002382.html" target="_blank" >蓝帆医疗</a></h3></div>
想在医疗器械上选一支股票，这支股票似乎有潜力，原因是：
<br/>
<ol>
<li>PVC医用级别的一次性手套的龙头，该产品用途会越来越广泛，生产并不复杂，但要达到医用级别，需要很强的生产现场管理经验，现在占有全球20%的市场，95%销往国外。国外市场基本饱和，但也稳定，国内市场有一定潜力。是现在公司的现金牛。该主业已经可以支撑现有的股价。</li>
<li>其原料主要是石油衍生品，石油价格可能长期处于低位，其原料成本将处于低位。人民币贬值利好该公司，因为收入主要是美元。</li>
<li>切入潜透医疗器械。设立并购基金在并购上海一定腹透公司时似乎对赌协议执行不力，但所投公司主要价值在其人力资源，如果没收对方股票，对方技术人员是不是能留下存疑，现在比较为难，情况拭目以待。当然，布局这一产业不止这家公司，还有相关试探性投资，似乎下决心要在这个领域发力。这个市场很有前途。蓝帆生产现场管理能力对于生产该精密器械很有帮助。</li>
</ol>
<br/>
结论：推荐信心8成把握。主业突出，现金充沛，负债很少，比较稳定的一家公司。想成立产业基金，复制其精密制造管理能力，思路是对的，但管理层在并购上缺乏经验。希望屌丝管理层尽快成长起来，进入到高大上的精密医疗器械行业。这个公司的情况，似乎是整个中国想要创新升级的写照。我还是比较有信心的。股票本身问题不大，市值很小，一旦再创辉煌，不可限量。只是要给管理层多些试错的时间和包容。
<br/>
<br/>2016年2月3日补充：
<br/>最近大股票蓝帆集团被关联公司蓝帆投资公司起诉，股权纠纷，造成蓝帆投资申请法院冻结了公司约50%的股份到2019年。这内部股权斗争暴露出来是好事，证明以前公司决策时可能有相互牵扯的现象，等尘埃落定，期待公司有一个转变，现在对外扩张并不是很得力。但这一纠纷也会造成公司现阶段处于不明期，公司战略可能受影响。但不必有大的担心，三年冻结不一定是坏事。此事报告太少，有待高层回应和媒体跟进。

<div id="d10"><a href="#d0"></a><h3><a href="http://www.gushaizi.com/fxbg/600398.html" target="_blank" >海澜之家</a></h3></div>
男性服装品牌的平台企业，现在股价已经涨了不少，市值也有四百多亿，还是看好。理由是：
<br/>
<ol>
<li>可能成为中国的优衣库。其模式有其特别之处。这几年的业绩增长似乎说明了这一点。衣服购买还是要通过线下，特别是男性。我尝试过线上，真的不容易成功，退货虽然可以，但男性最怕麻烦。品牌的确是男性的首选，但各种性价比高的还是需要有一个集中采购的地方。我主要是Gap、优衣库，以及迪卡龙，但海澜之家也可能成为国内品牌的整合者，未来品类应该会扩展到男性之外。国内市场还有很大的空间。经济不好，高级品牌买得少了，但国内品牌针对大量的中下层，还是继续发展。随着门店管理经验和供应商管理经验的提升，门店的增加，别的企业很难短期侵占这一市场。</li>
<li>如果模式成功，可能向海外复制。中国大量的服装生产企业，对接到海澜之家后，向海外复制并非没有可能。有一定的想像空间。</li>
</ol>
<br/>
结论：推荐信心8成把握。市值中等，上涨也不会太强劲了。不少人对其商业模式不理解，公司自己也在摸索之中。中国服装业要起来，似乎希望寄托在这家龙头了。吃穿住行，在穿上，中国还是有空间的。公司比较稳，算是中小盘蓝筹股。风险还是有的，3000多家门店，管理上千万不要出问题。话说回来，管理层白手创业，还是很有魄力和奋斗精神的，希望好好学习优衣库，结合中国实情，走出自己的路。虽然，我现在认为其男性服装的设计过于俗气，也希望能逐渐走好。当然其其它品牌店也是有潜力的，多品牌战略减少了风险。最近跌了不少，要涨一到两倍还是可期的，三到五倍就不容易了。


</ol>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></blockquote></blockquote></blockquote></blockquote></backquote></blockquote></blockquote>
</body></html>
'''
f = codecs.open('C:\\JR\\网站\\fxbg\\jg.html','w', 'UTF-8')
f.write(jg)
f.close()
print("        荐股文件完成。")


#ftpUpload('C:\\JR\\网站\\fxbg\\','hz163423.ftp.aliapp.com','hz163423','Sien730123','/htdocs/fxbg/')
