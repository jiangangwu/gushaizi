
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
if ($name=='' and $name!='Jiangang') {$name=@$_COOKIE['name'];}
  echo '<html lang="zh-CN">  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=1" /><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no"><meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
echo '<title>'.$name.'的主页</title>';
echo '<head><link rel="shortcut icon" href="/favicon.ico"><link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">    a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:active {color:#FF0000;} </style> </head>';
    echo '<body align="center" bgcolor="#fcfcfc">';
    echo "<table width='100%' boder='0'><tr><td align='left'><a class='s2' style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'>回到首页</a></td><td align='right' style='line-height:1;'><a  style='color:#A1A1A1;' href='/stock1/user_homepage.php'>我的空间</a></td></tr></table>";
echo "<div align='center'>";
echo "<h2 style='color:red' align='center'>关注</h2>";
echo '<h3  style="color:red"  align="center">被以下人关注了</h3>';

if ($name!=""){
	$sql2="select * from friend where friend='$name' order by time_at desc;";
    $result2=mysql_query($sql2);
	$result3=mysql_query("select count(*) from friend where friend='$name';");
	$arr3=mysql_fetch_array($result3);
	echo "<p style='color:#9D9D9D;'>共";
	echo $arr3[0];
	echo "个人。</p>";
     while ($arr2=mysql_fetch_array($result2)){ 	
		echo '<table cellspacing="10px" border="0" width="70%" id="table1"><tr><td align="left" width="30%">';
		echo "<big><a style='color:#000093;' href='/stock1/user.php?name=";
		echo $arr2[1];
		echo "'>";
		echo $arr2[1];
		echo "</a></big></td><td align='left' width='50%'><a target='_blank' href='/stock1/user_letter.php?name=";
		echo $arr2[1];
		$result12=mysql_query("SELECT username FROM user WHERE name='$arr2[1]';");
		$arr12=mysql_fetch_array($result12);
		echo "'>给";
        echo $arr12[0];
        echo "写信</a></td><td>";
        echo $arr2[3];
        echo "</td></tr></table><br/>";
	}		
}



echo '<h3 style="color:red"  align="center">我关注的</h3><br/>';

if ($name!=""){
	$result=mysql_query("select * from friend where name='$name'  order by time_at desc;");
	$result2=mysql_query("select count(*) from friend where name='$name';");
	$arr2=mysql_fetch_array($result2);
	echo "<p style='color:#9D9D9D;'>共";
	echo $arr2[0];
	echo "个人。</p>";
     while ($arr=mysql_fetch_array($result)){ 	
		echo '<table cellspacing="10px" border="0" width="70%" id="table1"><tr><td align="left" width="30%">';
		echo "<big><a style='color:#000093;' href='/stock1/user.php?name=";
		echo $arr[2];
		echo "'>";
		echo $arr[2];
		echo "</a></big></td><td align='left' width='50%'><a target='_blank' href='/stock1/user_letter.php?name=";
		echo $arr[2];
		$result11=mysql_query("SELECT username FROM user WHERE name='$arr[2]';");
		$arr11=mysql_fetch_array($result11);
		echo "'>给";
        echo $arr11[0];
        echo "写信</a></td><td>";
        echo $arr[3];
        echo "</td></tr></table><br/>";
	}		
}else{
	echo "<font color='#A1A1A1'>登录后可以看见别人发言或进行留言。</font>";
}


echo '</div><br/><br/><br/><br/></body></html>';
?>

</blockquote></blockquote></blockquote></blockquote></blockquote></blockquote>
</body>
</html>
