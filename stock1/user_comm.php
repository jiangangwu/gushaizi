<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');


$page='user';

$name=@$_GET['name'];
$name1=@$_COOKIE['name'];
if ($name=='') {$name=@$_COOKIE['name'];}
echo '<html lang="zh-CN">  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=1" /><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no"><meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
echo '<title>评论</title>';
echo '<head><link rel="shortcut icon" href="/favicon.ico"><link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">    a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:active {color:#FF0000;} </style> </head>';
echo '<body align="center" bgcolor="#fcfcfc">';
echo "<table width='100%' boder='0'><tr><td align='left'><a class='s2' style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'>回到首页</a></td><td align='right' style='line-height:1;'><a  style='color:#A1A1A1;' href='/stock1/user_homepage.php'>我的空间</a></td></tr></table>";
echo '<div align="center"><h2  style="color:red" align="center">评论</h2>';
echo '<h3  style="color:red" align="center">对我的评论</h3>';
if ($name!=""){
	$result=mysql_query("select * from comment where name_0='$name' order by time_at desc;");
	$result2=mysql_query("select count(*) from comment where name_0='$name';");
	$arr2=mysql_fetch_array($result2);
	echo "<p style='color:#9D9D9D;'>共";
	echo $arr2[0];
	echo "条。</p>";
    while ($arr=mysql_fetch_array($result)){
        echo '<br/>';
		echo '<table border="0" width="70%"><tr><td>';
		echo "<a style='color:#000093;' href='/stock1/user.php?name=$arr[2]'>";
		echo $arr[2];
		echo '</a><font style="color:#9D9D9D;">对《';
       	$result3=mysql_query("select topic from bbs where id='$arr[1]';");
    	$arr3=mysql_fetch_array($result3);
        echo "<a target='_blank' href='/stock1/comment.php?id=$arr[1]'>";
		echo $arr3[0];
		echo '》</a>的评论（';
        echo $arr[5];
        echo '）：</font><br/><br/>&nbsp&nbsp';
		echo $arr[3];
		echo '</td></tr></table><br/>';
	}
}
echo "<br/><br/>";
echo '<h3 style="color:red"  align="center">我的评论</h3>';
if ($name!=""){
	$result=mysql_query("select * from comment where name='$name';");
	$result2=mysql_query("select count(*) from comment where name='$name';");
	$arr2=mysql_fetch_array($result2);
	echo "<p style='color:#9D9D9D;'>共";
	echo $arr2[0];
	echo "条。</p>";
    while ($arr=mysql_fetch_array($result)){
		echo '<table border="0"  width="70%"><tr><td>';
		echo "<a style='color:#000093;' href='/stock1/user.php?name=$arr[2]'>";
		echo $arr[2];
		echo '</a><font style="color:#9D9D9D;">（';
		echo $arr[5];
		echo '）对《';
       	$result3=mysql_query("select topic from bbs where id='$arr[1]';");
    	$arr3=mysql_fetch_array($result3);
        echo "<a target='_blank' href='/stock1/comment.php?id=$arr[1]'>";
		echo $arr3[0];
		echo '》</a>的评论：</font><br/><br/>&nbsp&nbsp';
		echo $arr[3];
		echo '</td></tr></table><br/>';
		if ($name === $arr[2]){
			echo "<p align='right'>";
			echo "<a style='font-size:6pt; color:#A1A1A1;' target='_blank'  href='/stock1/del_comm.php?id=$arr[0]'>[删除]</a></p>";
		}
		 
	}
}else{
	echo "<font color='#A1A1A1'>登录后可以看见别人发言或进行留言。</font>";
}

echo '</div></body></html>';
?>
