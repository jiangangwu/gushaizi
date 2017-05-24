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
   
if ($topic==""){
    echo "还没有选择！";
}else{
    $topic_all=mysql_fetch_array(mysql_query("select topic from user where course='研究生投资学（2016春）';"));
    $sign=0;
    for ($i=0;$i<count($topic_all);$i++){
        if ($topic==$topic_all[i]){
            echo "已经有人选择了这只股票，请重选！"；
                $sign=1;
        }
    }
    if ($sign=0){
        $id=mysql_fetch_array(mysql_query("select id from user where name='$name';"));
        $sql="UPDATE user SET topic='$topic' where id='$id[0]';";
        $result=mysql_query($sql);
        if ($result){
            echo "<script>window.location.replace('/stock1/inv_stock.php')</script>";
        }else{
            echo "<html lang='zh-CN'><meta charset='utf-8'><body><a href='/stock1/inv_stock.php' style='text-decoration:none;'>系统出现问题，请重试。</a></body></html>";
        }
    }
}
?>
