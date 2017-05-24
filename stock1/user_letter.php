
<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');
$page="user_letter";

$name2=@$_GET['name'];
$name=@$_COOKIE['name'];
echo '<html lang="zh-CN">  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=1" /><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no"><meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
echo '<title>站内信件</title>';
echo '<head><link rel="shortcut icon" href="/favicon.ico"><link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">    a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:active {color:#FF0000;} </style> </head>';
echo '<body align="center" bgcolor="#fcfcfc">';
    echo "<table width='100%' boder='0'><tr><td align='left'><a class='s2' style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'>回到首页</a></td><td align='right' style='line-height:1;'><a  style='color:#A1A1A1;' href='/stock1/user_homepage.php'>我的空间</a></td></tr></table>";
echo '<div align="center"><h2 style="color:red" align="center">我的信件</h2><small><a style="color:#A1A1A1;" href="#xing">写信</a></small>';

if ($name!=""){
	echo '<h3  style="color:red" >收  到</h3>';
	$result_=mysql_query("select * from letter where name2='$name'  order by time_at desc;");
	$result2_=mysql_query("select count(*) from letter where name2='$name';");
	$arr2_=mysql_fetch_array($result2_);
	echo "<p style='color:#9D9D9D;'>共";
	echo $arr2_[0];
	echo "条。</p>";
     while ($arr_=mysql_fetch_array($result_)){
		echo '<table border="0" width="70%" id="table1"><tr><td>';
		echo "<a style='color:#000093;' href='/stock1/user.php?name=$arr_[1]'>";
		echo $arr_[1];
		echo '</a><font style="color:#9D9D9D;">（';
		echo $arr_[5];
		echo '）：</font><br/><br/>';
		echo '</td></tr><tr><td>';
		echo $arr_[3];
		echo '</td></tr></table><br/>';
	
			echo "<p align='center'>";
			echo "<a style='font-size:6pt; color:#A1A1A1;' target='_blank' href='/stock1/del_letter.php?id=$arr_[0]'>[删除]</a></p>";
	 

	}
	echo '<h3  style="color:red" >寄  出</h3>';
	$result=mysql_query("select * from letter where name='$name' order by time_at desc;");
	$result2=mysql_query("select count(*) from letter where name='$name';");
	$arr2=mysql_fetch_array($result2);
	echo "<p style='color:#9D9D9D;'>共";
	echo $arr2[0];
	echo "条。</p>";
     while ($arr=mysql_fetch_array($result)){
		echo '<table border="0" width="70%" id="table1"><tr><td>';
		echo "<a style='color:#000093;' href='/stock1/user.php?name=$name'>";
		echo $arr[1];
		echo '</a><font style="color:#9D9D9D;">（';
		echo $arr[5];
		echo '）</font>寄给：<a target="_blank" href="/stock1/user.php?name=';
		echo $arr[2];
		echo '">';
		echo $arr[2];
		echo '</a></td></tr><tr><td><br/>';
		echo $arr[3];
		echo '</td></tr></table><br/>';
			echo "<p align='center'>";
			echo "<a style='font-size:6pt; color:#A1A1A1;' target='_blank'  href='/stock1/del_letter.php?id=$arr[0]'>[删除]</a></p>";

     }
            $result1=mysql_query("SELECT gender FROM user WHERE name='$name';");
	$arr1=mysql_fetch_array($result1);
	if ($arr1[0]=='男')	$gender='先生';elseif ($arr[0]=='女')	$gender='女士';else	$gender='';
	echo "<font color='#8E8E8E'><div id='xing'>";
	echo "</font><form method='POST' action='/stock1/user_letter.php'>";
	echo $name;
	echo $gender;
   echo '&nbsp写给&nbsp';
        echo "<input type='text' style='text-align:left;margin:auto;width:100px;height:25px;font-size:15px;line-height:20px;' placeholder='输入用户名'	align='center'  name='name2' value=";
        echo $name2;
        echo ">";
	echo "&nbsp的信：</div>";
	echo "<p align='center'><font size='9px'> <textarea style='font-size:18px;' align='center' rows='6' name='letter' cols='34'></textarea></font></p><p align='center'>";
    echo "<input type='submit'  style='text-align:center;margin:auto;width:90px;height:25px;font-size:16px;line-height:22px;' align='center'  value='提&nbsp&nbsp交' name='B1'></form></p>";
	$letter=str_replace('
','<br/><br/>',@$_POST["letter"]);
	$name2=@$_POST["name2"];
	$result2=mysql_query("SELECT name FROM letter WHERE letter='$letter' and name='$name';");
	$arr2=mysql_fetch_array($result2);
     if($letter==""){
	}else if ($name==$arr2[0]){
         echo "<script>alert('您的信重复了！或者不要重复提交。')</script>";
     }else{
		$sql3 = "INSERT INTO letter (id, name, name2, letter, ip, time_at) VALUES (NULL, '$name', '$name2', '$letter','$ip', NOW());";

         $result3=mysql_query($sql3);
	
    if ($result3) echo "<script>window.location.replace('/stock1/user_letter.php');</script>";
     }

}else{
	echo "<font color='#A1A1A1'>登录后可以看见别人发言或进行留言。</font>";
}

echo '</div></body></html>';
?>
