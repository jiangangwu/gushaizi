<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');


$name=@$_COOKIE['name'];
  echo '<html lang="zh-CN">  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=1" /><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no"><meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
echo '<title>我的收藏</title>';

    echo '<head><link rel="shortcut icon" href="/favicon.ico"><link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">    a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:active {color:#FF0000;} </style> </head>';
    echo '<body align="center" bgcolor="#fcfcfc">';
    echo "<table width='100%' boder='0'><tr><td align='left'><a class='s2' style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'>回到首页</a></td><td align='right' style='line-height:1;'><a  style='color:#A1A1A1;' href='/stock1/user_homepage.php'>我的空间</a></td></tr></table>";
echo '<div align="center"><h2  style="color:red" align="center">我的收藏</h2>';

if ($name!=""){
	$result=mysql_query("select * from article where name='$name';");
	$result2=mysql_query("select count(*) from article where name='$name';");
	$arr2=mysql_fetch_array($result2);
	echo "<p style='color:#9D9D9D;'>共";
	echo $arr2[0];
	echo "条。</p>";
    while ($arr=mysql_fetch_array($result)){ 	
		echo "<p align='center'>&nbsp&nbsp<a target='_blank' href='/stock1/comment.php?id=";
		echo $arr[1];
		echo "'>";
		echo $arr[2];
		if ($name === $arr[3])echo "<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a  onclick= 'if(confirm(\"是否确定删除！\")==false)return false;' style='font-size:9pt;color:#A1A1A1;'  href='/stock1/del_collect.php?id=$arr[0]'>[删除]</a></p>";
    }
}

echo '</div></body></html>';
?>