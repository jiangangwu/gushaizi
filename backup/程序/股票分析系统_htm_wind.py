import sys,os, codecs,xlrd
sys.path.append('C:\\wamp\\www\\程序\\')
from jg import *

ah = '''
<?php
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$page='blog';
$connect=mysql_connect('rds48z5k409g0753v62j.mysql.rds.aliyuncs.com',$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');
$name=@$_COOKIE['name'];
echo '<html lang="zh-CN"> <meta charset="utf-8" http-equiv="Content-Type" content="text/html;"><title>股筛子</title><head><link rel="shortcut icon" href="/favicon.ico">';
echo '<link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">  table {align:center;center:float;display:inline;} a:link {color:#0000FF;text-decoration:none;}  a:hover {color:#FFA500;}  a:active {color:#FF0000;} </style> </head>';
echo '<body align="center" bgcolor="#FFFFF4">';
if ($name!=""){
    echo '<table width="100%" boder="0"><tr><td></td><td align="right" style="line-height:1;font-size:3px;"><a target="_blank" style="color:#E0E0E0;" href="/stock/user.php">欢迎您！';
    echo $name;
}else{
        echo '<table width="100%" boder="0"><tr><td></td><td align="right" style="line-height:1;font-size:3px;"><a target="_blank" style="color:#E0E0E0;">欢迎您！';
}
echo '</a></td></tr></table>';
echo '<blockquote><blockquote><blockquote><blockquote><blockquote>';
?>
'''
at = '''
<?php
if ($name!=""){
	$result=mysql_query("select * from bbs where page='$page';");
     while ($arr=mysql_fetch_array($result)){ 	
		echo '<table border="0" width="70%" id="table1" bgcolor="#FFFFF4"><tr><td>';
		echo $arr[1];
		  echo '（';
		  echo $arr[4];
		echo '）：<br/>&nbsp&nbsp';
		echo $arr[2];
		echo '</td></tr></table><br/>';
		if ($name === $arr[1] and $name!='Jiangang'){
			echo "<p align='left'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a style='font-size:6pt; color:#A1A1A1;' href='/stock/del.php?id=$arr[0]'>[删除]</a>";
			echo "<a style='font-size:6pt;color:#A1A1A1;'  href='/stock/modify.php?id=$arr[0]'>[修改]</a></p>";
		}	
		 if ($name === 'Jiangang'){
			echo "<p align='left'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a style='font-size:6pt; color:#A1A1A1;' href='/stock/del.php?id=$arr[0]'>[删除]</a>";
			echo "<a style='font-size:6pt; color:#A1A1A1;' href='/stock/modify.php?id=$arr[0]'>[修改]</a></p>";
		}	

	}
	$result1=mysql_query("SELECT gender FROM user WHERE name='$name';");
	$arr1=mysql_fetch_array($result1);
	if ($arr1[0]==1)	$gender='先生';else if ($arr[0]==2)	$gender='女士';else	$gender='';
	echo "<font color='#8E8E8E'><p>";
	echo $name; 
	echo $gender;
	echo '&nbsp请留言：&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p></font><form method="POST" action="/stock/';
	echo $page;
	echo '.php"><p align="center"><font size="9px"> <textarea align="center" rows="15" name="message" cols="90"></textarea></font></p>';
	echo '<p><input type="submit"  style="text-align:center;margin:auto;width:50px;height:25px;font-size:15px;line-height:20px;" align="center"  value="提交" name="B1"> <input  style="text-align:center;margin:auto;width:50px;height:25px;font-size:15px;line-height:20px;" align="center" type="reset" value="重置" name="B2"></form></p>';
	$message=@$_POST['message'];
	$result2=mysql_query("SELECT name FROM bbs WHERE message='$message' and name='$name';");
	$arr2=mysql_fetch_array($result2);
     if($message==""){
	}else if ($name==$arr2[0]){         
         echo "<script>alert('您的留言重复了！或者不要重复提交。')</script>";
     }else{
         echo "<br/>您的留言如下：<br/>&nbsp&nbsp";
         echo $message;
         $sql = "INSERT INTO bbs (id, name, message, page, ip, time_at) VALUES (NULL, '$name',  '$message', '$page', '$ip', NOW());";
         $result=mysql_query($sql);
     }
		
}else{
	echo "<font color='#A1A1A1'>登录后可以看见别人发言或进行留言。</font>";
}

echo '</blockquote></blockquote></blockquote></blockquote></blockquote></body></html>';
?>
'''

deleteFile('C:\\wamp\\www\\股票观察_副本.xlsm')
copyFile('C:\\wamp\\www\\股票观察.xlsm', 'C:\\wamp\\www\\股票观察_副本.xlsm')

data = xlrd.open_workbook('C:\\wamp\\www\\股票观察_副本.xlsm')
table = data.sheets()[1]
codes = table.col_values(1)

hh = {'行业1 金融':'jr1',	'行业1 公用事业':'gysy1',	'行业1 可选消费':'kxxf1',	'行业1 日常消费':'rcxf1',	'行业1 医疗保健':'ylbj1',	'行业1 工业':'gy1',	'行业1 电信服务':'dxfw1',	'行业1 材料':'cl1',	'行业1 信息技术':'xxjs1',	'行业1 能源':'ny1',	'行业2 银行':'yx2',	'行业2 多元金融':'dyjr2',	'行业2 公用事业Ⅱ':'gysye2',	'行业2 家庭与个人用品':'jtygryp2',	'行业2 汽车与汽车零部件':'qcyqclbj2',	'行业2 保险Ⅱ':'bxe2',	'行业2 耐用消费品与服装':'nyxfpyfz2',	'行业2 运输':'ys2',	'行业2 制药、生物科技与生命科学':'zyjswkjysmkx2',	'行业2 食品、饮料与烟草':'spjylyyc2',	'行业2 商业和专业服务':'syhzyfw2',	'行业2 软件与服务':'rjyfw2',	'行业2 食品与主要用品零售Ⅱ':'spyzyyplse2',	'行业2 电信服务Ⅱ':'dxfwe2',	'行业2 媒体Ⅱ':'mte2',	'行业2 资本货物':'zbhw2',	'行业2 材料Ⅱ':'cle2',	'行业2 技术硬件与设备':'jsyjysb2',	'行业2 消费者服务Ⅱ':'xfzfwe2',	'行业2 房地产':'fdc2',	'行业2 医疗保健设备与服务':'ylbjsbyfw2',	'行业2 能源Ⅱ':'nye2',	'行业2 零售业':'lsy2',	'行业2 半导体与半导体生产设备':'bdtybdtscsb2',	'行业3 商业银行':'syyx3',	'行业3 个人用品Ⅲ':'gryps3',	'行业3 资本市场':'zbsc3',	'行业3 电力Ⅲ':'dls3',	'行业3 汽车':'qc3',	'行业3 航空Ⅲ':'hks3',	'行业3 家庭耐用消费品':'jtnyxfp3',	'行业3 独立电力生产商与能源贸易商Ⅲ':'dldlscsynymyss3',	'行业3 保险Ⅲ':'bxs3',	'行业3 公路与铁路运输':'glytlys3',	'行业3 饮料':'yl3',	'行业3 建筑与工程Ⅲ':'jzygcs3',	'行业3 互联网软件与服务Ⅲ':'hlwrjyfws3',	'行业3 生物科技Ⅲ':'swkjs3',	'行业3 制药':'zy3',	'行业3 纺织品、服装与奢侈品':'fzpjfzyscp3',	'行业3 交通基础设施':'jtjcss3',	'行业3 电气设备':'dqsb3',	'行业3 化工':'hg3',	'行业3 食品':'sp3',	'行业3 水务Ⅲ':'sws3',	'行业3 容器与包装':'rqybz3',	'行业3 能源设备与服务':'nysbyfw3',	'行业3 建材Ⅲ':'jcs3',	'行业3 汽车零配件':'qclpj3',	'行业3 商业服务与用品':'syfwyyp3',	'行业3 多元电信服务':'dydxfw3',	'行业3 食品与主要用品零售Ⅲ':'spyzyyplss3',	'行业3 媒体Ⅲ':'mts3',	'行业3 建筑产品Ⅲ':'jzcps3',	'行业3 通信设备Ⅲ':'txsbs3',	'行业3 电子设备、仪器和元件':'dzsbjyqhyj3',	'行业3 专业服务':'zyfw3',	'行业3 酒店、餐馆与休闲Ⅲ':'jdjcgyxxs3',	'行业3 软件':'rj3',	'行业3 房地产管理与开发':'fdcglykf3',	'行业3 生命科学工具和服务Ⅲ':'smkxgjhfws3',	'行业3 航空货运与物流Ⅲ':'hkhyywls3',	'行业3 信息技术服务':'xxjsfw3',	'行业3 机械':'jx3',	'行业3 多元化零售':'dyhls3',	'行业3 燃气Ⅲ':'rqs3',	'行业3 纸与林木产品':'zylmcp3',	'行业3 海运Ⅲ':'hys3',	'行业3 医疗保健设备与用品':'ylbjsbyyp3',	'行业3 贸易公司与工业品经销商Ⅲ':'mygsygypjxss3',	'行业3 复合型公用事业Ⅲ':'fhxgysys3',	'行业3 电脑与外围设备':'dnywwsb3',	'行业3 金属、非金属与采矿':'jsjfjsyck3',	'行业3 医疗保健提供商与服务':'ylbjtgsyfw3',	'行业3 半导体产品与半导体设备':'bdtcpybdtsb3',	'行业3 专营零售':'zyls3',	'行业3 石油、天然气与供消费用燃料':'syjtrqygxfyrl3',	'行业3 医疗保健技术Ⅲ':'ylbjjss3',	'行业3 综合类Ⅲ':'zhls3',	'行业3 休闲设备与用品':'xxsbyyp3',	'行业3 综合消费者服务Ⅲ':'zhxfzfws3',	'行业3 消费品经销商Ⅲ':'xfpjxss3',	'行业3 多元金融服务':'dyjrfw3',	'行业3 家庭用品Ⅲ':'jtyps3',	'行业3 无线电信业务Ⅲ':'wxdxyws3',	'行业3 互联网与售货目录零售':'hlwyshmlls3',	'行业3 航空航天与国防Ⅲ':'hkhtygfs3',	'行业4 多元化银行':'dyhyx4',	'行业4 个人用品':'gryp4',	'行业4 家用电器':'jydq4',	'行业4 投资银行业与经纪业':'tzyxyyjjy4',	'行业4 区域性银行':'qyxyx4',	'行业4 电力':'dl4',	'行业4 家庭娱乐软件':'jtylrj4',	'行业4 汽车制造':'qczz4',	'行业4 媒体Ⅲ':'mts4',	'行业4 资产管理与托管银行':'zcglytgyx4',	'行业4 铁路运输':'tlys4',	'行业4 航空':'hk4',	'行业4 新能源发电业者':'xnyfdyz4',	'行业4 多元化保险':'dyhbx4',	'行业4 白酒与葡萄酒':'bjyptj4',	'行业4 石油与天然气的储存和运输':'syytrqdcchys4',	'行业4 公路与铁路':'glytl4',	'行业4 机场服务':'jcfw4',	'行业4 服装、服饰与奢侈品':'fzjfsyscp4',	'行业4 人寿与健康保险':'rsyjkbx4',	'行业4 休闲设施':'xxss4',	'行业4 软饮料':'ryl4',	'行业4 特种化工':'tzhg4',	'行业4 中药':'zy4',	'行业4 家庭装饰品':'jtzsp4',	'行业4 建筑与工程':'jzygc4',	'行业4 重型电气设备':'zxdqsb4',	'行业4 多元化工':'dyhg4',	'行业4 互联网软件与服务':'hlwrjyfw4',	'行业4 生物科技':'swkj4',	'行业4 非传统电信运营商':'fctdxyys4',	'行业4 金属与玻璃容器':'jsyblrq4',	'行业4 轮胎与橡胶':'ltyxj4',	'行业4 摩托车制造':'mtczz4',	'行业4 办公服务与用品':'bgfwyyp4',	'行业4 药品零售':'ypls4',	'行业4 西药':'xy4',	'行业4 消费电子产品':'xfdzcp4',	'行业4 医疗保健用品':'ylbjyp4',	'行业4 化肥与农用化工':'hfynyhg4',	'行业4 保健护理设施':'bjhlss4',	'行业4 农产品':'ncp4',	'行业4 出版':'cb4',	'行业4 食品加工与肉类':'spjgyrl4',	'行业4 水务':'sw4',	'行业4 基础化工':'jchg4',	'行业4 石油天然气设备与服务':'sytrqsbyfw4',	'行业4 建材':'jc4',	'行业4 电子元件':'dzyj4',	'行业4 电脑存储与外围设备':'dnccywwsb4',	'行业4 钢铁':'gt4',	'行业4 电气部件与设备':'dqbjysb4',	'行业4 环境与设施服务':'hjyssfw4',	'行业4 电影与娱乐':'dyyyl4',	'行业4 商业印刷':'syys4',	'行业4 机动车零配件与设备':'jdclpjysb4',	'行业4 石油与天然气的炼制和销售':'syytrqdlzhxs4',	'行业4 建筑产品':'jzcp4',	'行业4 财产与意外伤害保险':'ccyywshbx4',	'行业4 通信设备':'txsb4',	'行业4 煤炭与消费用燃料':'mtyxfyrl4',	'行业4 调查和咨询服务':'dchzxfw4',	'行业4 综合电信服务':'zhdxfw4',	'行业4 有线和卫星电视':'yxhwxds4',	'行业4 纸制品':'zzp4',	'行业4 房地产服务':'fdcfw4',	'行业4 鞋类':'xl4',	'行业4 海港与服务':'hgyfw4',	'行业4 房地产开发':'fdckf4',	'行业4 建筑机械与重型卡车':'jzjxyzxkc4',	'行业4 生命科学工具和服务':'smkxgjhfw4',	'行业4 信息科技咨询与其它服务':'xxkjzxyqtfw4',	'行业4 航空货运与物流':'hkhyywl4',	'行业4 摄影用品':'syyp4',	'行业4 百货商店':'bhsd4',	'行业4 酒店、度假村与豪华游轮':'jdjdjcyhhyl4',	'行业4 数据处理与外包服务':'sjclywbfw4',	'行业4 铝':'l4',	'行业4 工业机械':'gyjx4',	'行业4 纺织品':'fzp4',	'行业4 燃气':'rq4',	'行业4 应用软件':'yyrj4',	'行业4 海运':'hy4',	'行业4 贸易公司与工业品经销商':'mygsygypjxs4',	'行业4 电子设备和仪器':'dzsbhyq4',	'行业4 复合型公用事业':'fhxgysy4',	'行业4 医疗保健设备':'ylbjsb4',	'行业4 房地产经营公司':'fdcjygs4',	'行业4 半导体产品':'bdtcp4',	'行业4 化纤':'hx4',	'行业4 电子制造服务':'dzzzfw4',	'行业4 汽车零售':'qcls4',	'行业4 多领域控股':'dlykg4',	'行业4 住宅建筑':'zzjz4',	'行业4 家用器具与特殊消费品':'jyqjytsxfp4',	'行业4 电脑与电子产品零售':'dnydzcpls4',	'行业4 农用农业机械':'nynyjx4',	'行业4 纸包装':'zbz4',	'行业4 医疗保健技术':'ylbjjs4',	'行业4 综合类行业':'zhlxy4',	'行业4 教育服务':'jyfw4',	'行业4 大卖场与超市':'dmcycs4',	'行业4 消费品经销商':'xfpjxs4',	'行业4 综合支持服务':'zhzcfw4',	'行业4 休闲用品':'xxyp4',	'行业4 林木产品':'lmcp4',	'行业4 电脑硬件':'dnyj4',	'行业4 综合性石油天然气':'zhxsytrq4',	'行业4 黄金':'hj4',	'行业4 啤酒':'pj4',	'行业4 广告':'gg4',	'行业4 家庭用品':'jtyp4',	'行业4 金属非金属':'jsfjs4',	'行业4 无线电信业务':'wxdxyw4',	'行业4 白银':'by4',	'行业4 半导体设备':'bdtsb4',	'行业4 贵金属与矿石':'gjsyks4',	'行业4 食品分销商':'spfxs4',	'行业4 互联网零售':'hlwls4',	'行业4 公路运输':'glys4',	'行业4 石油天然气勘探与生产':'sytrqktysc4',	'行业4 保健护理服务':'bjhlfw4',	'行业4 技术产品经销商':'jscpjxs4',	'行业4 餐馆':'cg4',	'行业4 航天航空与国防':'hthkygf4',	'行业4 综合货品商店':'zhhpsd4',	'行业4 工业气体':'gyqt4',	'行业4 独立电力生产商与能源贸易商':'dldlscsynymys4',	'行业4 售货目录零售':'shmlls4',	'行业4 其他多元金融服务':'qtdyjrfw4',	'行业4 专卖店':'zmd4'}

    
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
    a =a + '<p align="center"><table cellspacing="0"  align="center" border="1" bordercolor="#D0D0D0" cellpadding="4"><tr><td>股票排序</td><td>' + tnn(pm)  \
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
         + '</td></tr><tr><td style="word-wrap:break-word;"><a href="/stock/' + hh['行业1 ' + hym1] + '.php">1. ' + hym1 + '</a></td><td>' + tp(pm1) \
         + '</td><td style="word-wrap:break-word;"><a href="/stock/' +hh['行业2 ' + hym2] + '.php">2. ' + hym2 + '</a></td><td>' + tp(pm2)\
         + '</td></tr><tr><td style="word-wrap:break-word;"><a href="/stock/' + hh['行业3 ' + hym3] + '.php">3. ' + hym3 + '</a></td><td>' + tp(pm3) \
         +'</td><td style="word-wrap:break-word;"><a href="/stock/' + hh['行业4 ' + hym4] + '.php">4. ' +  hym4 + '</a></td><td>' + tp(pm4)+'</td></tr></table>'

    a = a + '<h4 align="center">（二）股票现值情况</h4>' \
          + '<p align="center"><table cellspacing="0"  border="1" bordercolor="#D0D0D0" cellpadding="4"><tr><td>TTM市盈率</td><td>' + tn(ttmsy) \
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
          + '<p align="center"><table cellspacing="0"  border="1" bordercolor="#D0D0D0" cellpadding="4"><tr><td>合理市盈率</td><td>' + tn(hlsy) \
          + '</td><td>股票估计上涨率</td><td><font color="Chocolate">' + tp(yc) \
          + '</font></td></tr><tr><td>加权估价</td><td>' + tn(jqgj)+'</td><td>扣非TTM估价（占3/6）</td><td>' + tn(kfttmgj) \
          + '</td></tr><tr><td>平均收益估价（占2/6）</td><td>' + tn(pjsygj) \
          +'</td><td>TTM估价（占1/6）</td><td>' + tn(ttmgj) \
          + '</td></tr><tr><td>收益估计成长率</td><td>' + tp(dzczl) \
          +'</td><td>收益历史成长率</td><td>' + tp(pjczl) +'</td></tr></table>'

    a = a + '<h4 align="center">（四）股票弹性得分：' + tn2(txdf) + '</h4>' \
          + '<p align="center"><table cellspacing="0"  border="1" bordercolor="#D0D0D0" cellpadding="4"><tr><td>偏离20日均价</td><td>' + tp(jj20pc) \
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
          + '<p align="center"><table cellspacing="0"  border="1" bordercolor="#D0D0D0" cellpadding="4"><tr><td>利润加权成长率</td><td>' + tp(pjczl) \
          + '</td><td>利润趋势</td><td>' + tp(lrzzqs) \
          + '</td></tr><tr><td>15年预告增长</td><td><font color="Chocolate">' + tp(ywygzz) \
          + '</font></td><td>前三季增长率</td><td>' + tp(jlrzz153) \
          + '</td</tr><tr><td>近三年增长率</td><td>' + tp(lrjszzl) \
          + '</td><td>三季度每股收益</td><td>' + tn(mgsy153) + '元</td></tr></table>'

    a = a + '<h4 align="center">（六）主营成长得分：' + tn2(zyczdf) + '</h4>' \
          + '<p align="center"><table cellspacing="0"  border="1" bordercolor="#D0D0D0" cellpadding="4"><tr><td>主营加权成长率</td><td>' + tp(zypjzz) \
          + '</td><td>主营增长趋势</td><td>' + tp(zyzzqs) \
          + '</td></tr><tr><td>主营三季增长率</td><td>' + tp(zyzzl153) \
          + '</td><td>近半年增长率</td><td>' + tp(zybnzzl) \
          + '</td></tr><tr><td>近三年增长率</td><td>' + tp(zyjszzl) \
          + '</td><td>三季度主营</td><td>' + tn(zy153) + '亿</td></tr></table>'

    a = a + '<h4 align="center">（七）盈利能力得分：' + tn2(ylnldf) + '</h4>' \
          + '<p align="center"><table cellspacing="0"  border="1" bordercolor="#D0D0D0" cellpadding="4">' \
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
          + '<p align="center"><table cellspacing="0"  border="1" bordercolor="#D0D0D0" cellpadding="4">'\
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
          + '<p align="center"><table width="70%" cellspacing="0"  border="1" bordercolor="#D0D0D0" style="font-size 12px;center:float;display:inline;word-wrap:break-word;" cellpadding="4">' \
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
          + '<p align="center"><table width="70%" cellspacing="0"  border="1" bordercolor="#D0D0D0" style="font-size 12px;center:float;display:inline;" cellpadding="4">' \
          + '<tr><td>IPO</td><td>' + iposj[0:10] +'</td></tr>' \
          + '<tr><td>属性</td><td>' + gssx +'</td></tr>' \
          + '<tr><td>省市</td><td>' + sf +'&nbsp;' + cs+'</td></tr>' \
          + '<tr><td nowrap="nowrap">行业</td><td>' + hym1 + '->' + hym2 + '->' + hym3  + '->' + hym4 \
          + '<tr><td>品类</td><td>' + zycplx +'</td></tr>' \
          + '<tr><td>品名</td><td>' + zycpmc +'</td></tr>'   \
          + '<tr><td>板块</td><td>' + ssgnbk +'</td></tr>'  \
          + '<tr><td>简介</td><td>' + jj  + '</td></tr>' \
          + '<tr><td>评价</td><td>打折：' + tn2(zgdf) + '。评价：' + zgdfyy  + '。</td></tr></table></p>'
    pagename=c[0:6]
    a = ah.replace('blog',pagename).replace('股筛子', gpjc) + a + '<table><br/></table>' + at
    fl = 'C:\\wamp\\www\\stock\\' + c[0:6] + '.php'
    f = codecs.open(fl, 'w','UTF-8')
    f.write(a)
    f.close()
print("        股票分析报告文件完成。")

    
print("2 开始写股票排序文件……")
(pm,	gpdm,	gpjc,	hym4,	spj,	hljg,	yc,	jymrj,	jymcj,	ttmsy,	hlsy,	ltz,	zsz,	hlsz,	hym1,	hym2,	hym3,	pm1,	pm2,	pm3,	pm4,	hypjpm,	hy1df,	hy2df,	hy3df,	hy4df,	hypjdf,	txdf,	txfz,	lrczdf,	lrfz,	zyczdf,	zyfz,	ylnldf,	ylnlfz,	wjxdf,	wjxfz,	gpdf,	zgdf,	dzxs,	zgdfyy,	zzqs,	pjczl,	dzczl,	gjsy,	kfttmgj,	pjsygj,	ttmgj,	jqgj,	hlsz1,	gjsz1,	wzg,	wzd,	dtzd) = \
(table.col_values(0),	table.col_values(1),	table.col_values(2),	table.col_values(3),	table.col_values(4),	table.col_values(5),	table.col_values(6),	table.col_values(7),	table.col_values(8),	table.col_values(9),	table.col_values(10),	table.col_values(11),	table.col_values(12),	table.col_values(13),	table.col_values(14),	table.col_values(15),	table.col_values(16),	table.col_values(17),	table.col_values(18),	table.col_values(19),	table.col_values(20),	table.col_values(21),	table.col_values(22),	table.col_values(23),	table.col_values(24),	table.col_values(25),	table.col_values(26),	table.col_values(27),	table.col_values(28),	table.col_values(29),	table.col_values(30),	table.col_values(31),	table.col_values(32),	table.col_values(33),	table.col_values(34),	table.col_values(35),	table.col_values(36),	table.col_values(37),	table.col_values(38),	table.col_values(39),	table.col_values(40),	table.col_values(41),	table.col_values(42),	table.col_values(43),	table.col_values(44),	table.col_values(45),	table.col_values(46),	table.col_values(47),	table.col_values(48),	table.col_values(49),	table.col_values(50),	table.col_values(51),	table.col_values(52),	table.col_values(53))

bt = '<div style = "line-height:0.35"><br/></div><h2 align="center">预计涨跌排序</h2><p  align="center">' + getDate() \
        + '</p><p align="center">市场平均泡沫：' + tp(str((float(table.cell(3,3).value) + float(table.cell(3,6).value) + float(table.cell(3,9).value))/3)) \
        + '&nbsp;建议仓位：' + tp(str(table.cell(3,2).value)) \
        + '</p><p align="center">上证泡沫：' + tp(str(table.cell(3,3).value)) \
        + '&nbsp;中小板泡沫：' + tp(str(table.cell(3,6).value)) \
        + '&nbsp;创业板泡沫：' + tp(str(table.cell(3,9).value))  + '</p>'
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
pagename = 'qpx'
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
            + gpdm[i][0:6] + '</td><td align="center" width="8%" nowrap="nowrap" ><a href="/stock/' + gpdm[i][0:6] + '.php">' \
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
            + tn2(dzxs[i]) + '</td><td width="9.5%"  nowrap="nowrap"><a   href="/stock/' + hh['行业4 ' + hym4[i].replace(' ','')] + '.php" >' \
            + hym4[i].replace(' ','') + '</a></td></tr>'
    if ii == 0:
        if float(yc[i+1]) < 0.1:
            ii = ii + 1
            f = codecs.open('C:\\wamp\\www\\stock\\px.php','w', 'UTF-8')
            px =  ah.replace('blog',pagename).replace("股筛子",'排序') + hybt1.replace("预计涨跌排序",'<a   href="/stock/qpx.php" >排序（大于10%）</a>') + nr + '<table><br/><br/><br/><br/><br/><br/><br/></table>' + at
            f.write(px)
            f.close()

f = codecs.open('C:\\wamp\\www\\stock\\qpx.php','w', 'UTF-8')
qpx =  ah.replace('blog',pagename).replace("股筛子",'全排序') + hybt1.replace("预计涨跌排序",'全部股票排序') + nr + '<table><br/><br/><br/><br/><br/><br/><br/></table>' + at
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
                    + gpdm[i][0:6] + '</td><td align="center" width="8%" nowrap="nowrap" ><a href="/stock/' + gpdm[i][0:6] + '.php">' \
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
                    + tn2(dzxs[i]) + '</td><td width="9.5%"  nowrap="nowrap"><a   href="/stock/'+ hh['行业2 ' + hym2[i].replace(' ','')] + '.php" >' \
                    + hym2[i].replace(' ','') + '</a></td></tr>'
    nr = ah.replace('blog','行业1 ' + h).replace("股筛子",h)  \
                + hybt1.replace('行业名4','行业名2').replace("预计涨跌排序",'<a   href="/stock/hyjg.php" >行业1：' + h + '</a>')  \
                + nr + '</table>' + '<table><br/><br/><br/><br/><br/><br/><br/></table>' + at
    f = codecs.open('C:\\wamp\\www\\stock\\'+ hh['行业1' + ' ' + h] + '.php','w', 'UTF-8')
    f.write(nr)
    f.close()
for h in hy2list:
    nr = '<p align="center">'
    for i in range(8,len(pm)):
        if hym2[i] == h:
            nr = nr + '<tr><td align="center" width="3%">' \
                    + tnn(pm[i]) + '</td><td align="center" width="6%" >' \
                    + gpdm[i][0:6] + '</td><td align="center" width="8%" nowrap="nowrap" ><a href="/stock/' + gpdm[i][0:6] + '.php">' \
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
                    + tn2(dzxs[i]) + '</td><td width="9.5%"  nowrap="nowrap"><a   href="/stock/' + hh['行业3 ' + hym3[i].replace(' ','')] + '.php" >' \
                    + hym3[i].replace(' ','') + '</a></td></tr>'
    nr = ah.replace('blog','行业2 ' + h).replace("股筛子",h)  \
                + hybt1.replace('行业名4','行业名3').replace("预计涨跌排序",'<a   href="/stock/hyjg.php" >行业2：' + h + '</a>')  \
                + nr + '</table>' + '<table><br/><br/><br/><br/><br/><br/><br/></table>' + at
    f = codecs.open('C:\\wamp\\www\\stock\\' + hh['行业2' + ' ' + h] + '.php','w', 'UTF-8')
    f.write(nr)
    f.close()
for h in hy3list:
    nr = '<p align="center">'
    for i in range(8,len(pm)):
        if hym3[i] == h:
            nr = nr + '<tr><td align="center" width="3%">' \
                    + tnn(pm[i]) + '</td><td align="center" width="6%" >' \
                    + gpdm[i][0:6] + '</td><td align="center" width="8%" nowrap="nowrap" ><a href="/stock/' + gpdm[i][0:6] + '.php">' \
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
                    + tn2(dzxs[i]) + '</td><td width="9.5%"  nowrap="nowrap"><a   href="/stock/' + hh['行业4 ' + hym4[i].replace(' ','')] + '.php" >' \
                    + hym4[i].replace(' ','') + '</a></td></tr>'
    nr = ah.replace('blog','行业3 ' + h).replace("股筛子",h)  \
                + hybt1.replace("预计涨跌排序",'<a   href="/stock/hyjg.php" >行业3：' + h + '</a>')  \
                + nr + '</table>' + '<table><br/><br/><br/><br/><br/><br/><br/></table>' + at
    f = codecs.open('C:\\wamp\\www\\stock\\' + hh['行业3' + ' ' + h] + '.php','w', 'UTF-8')
    f.write(nr)
    f.close()
for h in hy4list:
    nr = '<p align="center">'
    for i in range(8,len(pm)):
        if hym4[i] == h:
            nr = nr + '<tr><td align="center" width="3%">' \
                    + tnn(pm[i]) + '</td><td align="center" width="6%" >' \
                    + gpdm[i][0:6] + '</td><td align="center" width="8%" nowrap="nowrap" ><a href="/stock/' + gpdm[i][0:6] + '.php">' \
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
                    + tn2(dzxs[i]) + '</td><td width="9.5%"  nowrap="nowrap"><a   href="/stock/' + hh['行业3 ' + hym3[i].replace(' ','')] + '.php" >' \
                    + hym3[i].replace(' ','') + '</a></td></tr>'
    nr = ah.replace('blog','行业4 ' + h).replace("股筛子",h)  \
                + hybt1.replace('行业名4','行业名3').replace("预计涨跌排序",'<a   href="/stock/hyjg.php" >行业4：' + h + '</a>')  \
                + nr + '</table>' + '<table><br/><br/><br/><br/><br/><br/><br/></table>' + at
    f = codecs.open('C:\\wamp\\www\\stock\\' + hh['行业4 ' + h] + '.php','w', 'UTF-8')
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
hy = '<div style = "line-height:0.35"><br/></div><h2 align="center"><a href="/stock/hyjg.php">行业</a></h2>'+ '<p  align="center">' + getDate() + '</p><p align="center">市场平均泡沫：' + tp(str((float(table.cell(3,3).value) + float(table.cell(3,6).value) + float(table.cell(3,9).value))/3)) + '&nbsp;建议仓位：' + tp(str(table.cell(3,2).value)) + '</p><p  align="center">上证泡沫：' + tp(str(table.cell(3,3).value)) + '&nbsp;中小板泡沫：' + tp(str(table.cell(3,6).value)) +'&nbsp;创业板泡沫：' + tp(str(table.cell(3,9).value))  + '</p>'
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
            + c0[i][-1] + '</td><td align="left" width="3%" ><a  href="/stock/' + hh[c0[i] + ' ' + c1[i]] + '.php" >' \
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
f = codecs.open('C:\\wamp\\www\\stock\\hy.php','w', 'UTF-8')
hy = ah.replace('blog','hy').replace('股筛子','行业') + '' + hy + '</table>' + '<table><br/><br/><br/><br/><br/><br/><br/></table>' + at
f.write(hy)
f.close()
print("        行业排序文件完成。")

def wnjian(fname,title, contents,ah,at):    
    print("开始写" + title + "文件……")
    topic = '<h1 align="center">' + title + '</h1>'
    f = codecs.open('C:\\wamp\\www\\stock\\' + fname + '.php','w', 'UTF-8')
    contents = ah.replace('blog',fname).replace('股筛子',title) + topic + contents + '<br/>' + at
    f.write(contents)
    f.close()
    print("        " + title + "文件完成。")
wnjian('sm', '说明','',ah,at)
wnjian('bz', '帮助','',ah,at)
wnjian('jg', '荐股','',ah,at)
wnjian('yd', '阅读','',ah,at)
wnjian('hg', '宏观','',ah,at)
wnjian('blog', '留言','',ah,at)