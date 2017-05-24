<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');


echo '<html lang="zh-CN"> <meta charset="utf-8" http-equiv="Content-Type" content="text/html;"><title>修改评论反馈</title><head><link rel="shortcut icon" href="/favicon.ico"></head><body bgcolor="#FFFFF4" align="center" style="background-attachment: fixed">';
$id = $_GET["id"];
$comm = @$_POST['comm'];
$comm = str_replace('<br/>','',$comm);
$comm = str_replace('
','<br/>',$comm);
$comm = str_replace("'","\\'",$comm);
$comm = str_replace('"','\\"',$comm);

$sql = "UPDATE r0gbqnbc4x.comment SET comm='$comm' WHERE comment.id = '$id' LIMIT 1;";
$result=mysql_query($sql);
if ($result)echo "修改评论成功";else echo "修改评论失败";
echo "</body></html>";
?>