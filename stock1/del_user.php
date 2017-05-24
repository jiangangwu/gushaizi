<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');



echo '<html lang="zh-CN"> <meta charset="utf-8"
				http-equiv="Content-Type"
				content="text/html;"><title>删除自己反馈</title><head><link rel="shortcut icon" href="/favicon.ico"></head><body bgcolor="#FFFFF4" align="center" style="background-attachment: fixed">';

$name=@$_COOKIE['name'];
$sql="DELETE FROM user WHERE name='$name';";

$result=mysql_query($sql);
if ($result)
echo "删除自己成功。";
else
echo "删除自己失败。";
?>
