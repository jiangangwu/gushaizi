<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');



$page='del_letter';


echo '<html lang="zh-CN"> <meta charset="utf-8" http-equiv="Content-Type" content="text/html;"><title>删除信件反馈</title><head><link rel="shortcut icon" href="/favicon.ico"></head><body bgcolor="#FFFFF4" align="center" style="background-attachment: fixed">';

$id = $_GET["id"];
$sql="DELETE FROM letter WHERE id=$id;";

$result=mysql_query($sql);
    if ($result)   echo "<script>window.location.replace('/stock1/user_letter.php');</script>";
    else echo "删除信件失败，请重试。";
?>
