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


$sql_message="select message from user where name='$name';";

$result_message=mysql_query($sql_message);
$arr_message=mysql_fetch_array($result_message);


echo '<html lang="zh-CN">  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=1" /><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no"><meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
echo '<title>'.$name.'的主页</title>';

echo '<head><link rel="shortcut icon" href="/favicon.ico"><link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">    a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:active {color:#FF0000;} </style> </head>';
echo '<body align="center" bgcolor="#fcfcfc">';
echo "<div align='center'>";
echo "<table width='100%' boder='0'><tr><td align='left'><a class='s2' style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'>回到首页</a></td><td align='right' style='line-height:1;'><a  style='color:#A1A1A1;' href='/stock1/user_homepage.php'>我的空间</a></td></tr></table>";
echo "<div align='center'>";
echo '<h2 style="color:red" align="center">'.$name.'的主页</h2>';
echo "<div style='font-size:11px;font-family:楷体;color:#A1A1A1;'>自述：$arr_message[0]</div><br/>";

$sql_friend="select name from friend where name='$name1' and friend='$name' limit 1;";

$result_friend=mysql_query($sql_friend);
$arr_friend=mysql_fetch_array($result_friend);

if ($arr_friend[0]==''){
	echo "<form method='POST' name='form1' action=''><input type='submit' style='width:60px;color:#A1A1A1;background:white;border:0' value='关注此人' name='regard1' id='regard1'/></form>";
}else{
	echo "<form method='POST' name='form1' action=''><input type='submit' style='width:60px;color:#A1A1A1;background:white;border:0' value='取消关注' name='regard1' id='regard1'/></form>";
}
$regard = @$_POST['regard1'];
if ($regard=="取消关注"){
	$sql="DELETE FROM friend WHERE friend='$name' and name='$name1';";
	$result=mysql_query($sql);
	if ($result){
		echo '<meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
		echo "<script>form1.regard1.value='关注此人';</script>";
	}else{
		echo '<meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
		echo "<script>alert('取消关注失败，请重试。');</script>";
	}
}
if ($regard=="关注此人"){
	$sql="INSERT INTO friend (id, name, friend, time_at) VALUES (NULL, '$name1', '$name', NOW());";
	$result=mysql_query($sql);
	if ($result){
		echo '<meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
		echo "<script>form1.regard1.value='取消关注';</script>";
	}else{
		echo '<meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
		echo "<script>alert('关注失败，请重试。');</script>";
	}
}

$result11=mysql_query("SELECT username FROM user WHERE name='$name';");
$arr11=mysql_fetch_array($result11);


echo "<a target='_blank' style='color:#A1A1A1;font-size:13px;' href='/stock1/user_letter.php?name=$name '>给 $arr11[0] 写信</a>";


if ($name=='建刚'){
    echo "<br/><br/>所授课程：&nbsp&nbsp&nbsp&nbsp";
    echo "<a target='_blank' href='/stock1/financial_english_undergraduate.php'>财务专业英语&nbsp&nbsp&nbsp&nbsp</a>";
    echo "<a target='_blank' href='/stock1/investment_postgraduate.php'>投资学&nbsp&nbsp&nbsp&nbsp</a>";
    echo "<a target='_blank' href='/stock1/research.php'>论文指导</a>";
}

if ($name=='LYQ'){
    echo "<br/><br/>所授课程：&nbsp";
    echo "<a target='_blank' href='/stock1/yuanqin.php'>论文指导</a>";
}

if ($name!=""){
	$result=mysql_query("select * from bbs where name='$name' and page!='user_note' order by time_at desc;");
	$result2=mysql_query("select count(*) from bbs where name='$name' and page!='user_note';");
	$arr2=mysql_fetch_array($result2);
	echo "<p style='color:#9D9D9D;'>共";
	echo $arr2[0];
	echo "条留言。</p>";
    echo '<table border="0" width="70%">';
    while ($arr=mysql_fetch_array($result)){
        echo "<tr><td><a style='color:#000093;' href='/stock1/user.php?name=";
        echo $arr[1];
        echo "'>";
		echo $arr[1];
		echo '</a><font style="color:#9D9D9D;">（';
		echo $arr[4];
		echo '）：</font><h3 align="center">';
        echo "<a target='_blank' href='/stock1/comment.php?id=$arr[0]'>";
        echo $arr[6];
        echo "</a></h3>";
        if (strlen($arr[2])>350){
            echo substr($arr[2],0,2000);
            echo "<br/>&nbsp&nbsp...... ......";
        }else{
            echo $arr[2];
        }
		echo "</td></tr><tr><td align='center'><p align='center'><a target='_blank' style='color:#9D9D9D;' href='/stock1/comment.php?id=$arr[0]'>";
        $result3=mysql_query("select count(*) from comment where id0='$arr[0]';");
        $arr3=mysql_fetch_array($result3);
        echo "<br/><br/>看全文及评论（共";
        echo $arr3[0];
        echo "条评论）</a></p>";
		if ($name1 === $arr[1]){
			echo "<p align='center'><a style='font-size:6pt; color:#A1A1A1;' target='_blank' href='/stock1/del.php?id=$arr[0]'>[删除]</a>";
			echo "<a style='font-size:6pt;color:#A1A1A1;' target='_blank' href='/stock1/modify.php?id=$arr[0]'>[修改]</a></p><br/><br/>";
		}
/*		 if ($name1=='建刚'){
         echo "<p align='center'><a style='font-size:6pt; color:#A1A1A1;' target='_blank' href='/stock1/del.php?id=$arr[0]'>[删除]</a>";
         echo "<a style='font-size:6pt; color:#A1A1A1;' target='_blank' href='/stock1/modify.php?id=$arr[0]'>[修改]</a></p><br/><br/>";
         }*/

	}
    echo '</td></tr></table>';

}
else{
	echo "<font color='#A1A1A1'>登录后可以看见别人发言或进行留言。</font>";
}

if ($name1=='建刚'){
	echo "<a targe='_blank' href='/stock1/user_homepage.php?name=";
	echo $name;
	echo "'>该用户主页</a>";
}

echo '</div></body></html>';
?>
