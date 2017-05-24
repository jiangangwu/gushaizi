<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");

echo '<html lang="zh-CN"> <meta charset="utf-8" http-equiv="Content-Type" content="text/html;"><title>留言修改</title><head><link rel="shortcut icon" href="/favicon.ico"></head><body bgcolor="#FFFFF4" align="center" style="background-attachment: fixed">';
$id = $_GET["id"];
$message = @$_POST['message'];
$message = str_replace('<br/>','',$message);
$message = str_replace('
','<br/>',$message);
$message = str_replace("'","\'",$message);
$message = str_replace('"','\"',$message);
$topic = $_POST['topic'];
$sql = "UPDATE bbs SET topic='$topic', message='$message' WHERE id='$id';";
$result=mysql_query($sql);

if ($result){
    echo "<script>window.location.replace('/stock1/comment.php?id=$id')</script>";
}else{
    echo "<html lang='zh-CN'><meta charset='utf-8'><body>";
    echo "修改失败，可能服务器暂时不能连接。请返回重试。</body></html>";
}
?>
