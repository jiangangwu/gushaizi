<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');


$name=@$_GET['name'];
$name1=@$_COOKIE['name'];
if ($name=='') {$name=$name1;}
echo '<html lang="zh-CN">  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=1" /><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no"><meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
echo '<title>我的自选股</title>';
echo '<head><link rel="shortcut icon" href="/favicon.ico"><link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">    a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:active {color:#FF0000;} </style> </head>';
echo '<body align="center" bgcolor="#fcfcfc">';
echo "<table width='100%' boder='0'><tr><td align='left'><a class='s2' style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'>回到首页</a></td><td align='right' style='line-height:1;'><a  style='color:#A1A1A1;' href='/stock1/user_homepage.php'>我的空间</a></td></tr></table>";
echo '<div align="center"><h2  style="color:red" align="center">自选股</h2>';

if ($name!=""){
	$result=mysql_query("select * from stock where name='$name' order by time_at desc;");
	$result2=mysql_query("select count(*) from stock where name='$name';");
	$arr2=mysql_fetch_array($result2);
	echo "<p style='color:#9D9D9D;'>共";
	echo $arr2[0];
	echo "条。</p>";
	echo '<table cellspacing="0"  align="center" border="1" bordercolor="#D0D0D0" cellpadding="4">';
    echo '<tr><th>序号</th><th>简称</th><th>现价</th><th>涨跌幅</th><th>今开盘</th><th>昨收盘</th><th>最高价</th><th>最低价</th>';
    $ii=0;
    while ($arr=mysql_fetch_array($result)){
        $ii=$ii+1;
        $c=$arr[1];
        if (substr($c,0,1)=='6'){$c2=$c.".SH";$jys = "sh";}
        if (substr($c,0,1)=='3' or substr($c,0,1)=='0'){$c2=$c.".SZ";$jys="sz";};
        $url = "http://hq.sinajs.cn/list=".$jys.$c;
        $info = file_get_contents($url);
        $hq = explode(",",$info);
        echo "<tr><td>".$ii."</td><td>";
        echo "<a style='color:#000093;' href='/stock1/stock.php?c=";
        echo $arr[1];
        echo "'>";
        echo $arr[5];
        echo '</a></td><td align="right">'.number_format(round($hq[3],2),2).'</td><td align="right"><font color="chocolate">'.number_format(round(($hq[3]-$hq[2])/$hq[2]*100,2),2).'%</font></td><td align="right">'.number_format(round($hq[1],2),2).'</td><td align="right">'.number_format(round($hq[2],2),2).'</td><td align="right">'.number_format(round($hq[4],2),2).'</td><td align="right">'.number_format(round($hq[5],2),2);
        echo '</td></tr>';
    }

    echo "</table><br/>";
}else{
	echo "<font color='#A1A1A1'>登录后可以添加自选股。</font>";
}

echo '</div></body></html>';
?>


</body>
</html>
