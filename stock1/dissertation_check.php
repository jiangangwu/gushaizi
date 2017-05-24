<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');



echo "<html lang='zh-CN'> <meta charset='utf-8' http-equiv='Content-Type'
                                   content='text/html;'><title>选题确认</title><head><link rel='shortcut icon' href='/favicon.ico'></head><body bgcolor='#FFFFF4' align='center' style='background-attachment: fixed'>";

$name=$_COOKIE['name'];
$topic=$_POST['topic'];
echo $topic;
if ($topic=="" or $name==""){
    echo "还没有填写！或请先登陆后再填写！";
}else{
    $id=mysql_fetch_array(mysql_query("select id from user where name='$name';"));
    $sql="UPDATE user SET topic='$topic' where id='$id[0]';";
    $result=mysql_query($sql);
    if ($result){
        echo "<script>window.location.replace('/stock1/dissertation_topic.php')</script>";
    }else{
        echo "<html lang='zh-CN'><meta charset='utf-8'><body><a href='/stock1/dissertation_topic_yq.php' style='text-decoration:none;'>系统出现问题，请重试。</a></body></html>";
    }
}
?>
