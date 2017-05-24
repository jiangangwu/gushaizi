<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');


echo '<html lang="zh-CN"> <meta charset="utf-8" http-equiv="Content-Type" content="text/html;"><title>批准用户反馈</title><head><link rel="shortcut icon" href="/favicon.ico"></head><body bgcolor="#A1A1A1" align="center" style="background-attachment: fixed">';

$id = $_GET["id"];
$sql="UPDATE user SET pass='1' WHERE id=$id;";
$result=mysql_query($sql);
$sql2="select pass from user WHERE id=$id;";
$result2=mysql_query($sql2);
$arr=mysql_fetch_array($result2);
if ($arr[0]=='1'){
	echo '<meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
	echo "批准成功";
     echo "<script>window.location.replace('/stock1/user_homepage.php')</script>";

}else{
	echo '<meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
	echo "批准失败";
}
echo '</body></html>';
?>