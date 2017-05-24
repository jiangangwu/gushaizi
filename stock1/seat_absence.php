<?php
   $host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
   $user='r0gbqnbc4x';
   $password='19760209';
   $db='r0gbqnbc4x';
   $connect=mysql_connect($host,$user,$password);
   mysql_select_db($db);
   mysql_query("set names 'utf8'");
   $ip=getenv('REMOTE_ADDR');



   echo '<html lang="zh-CN"> <meta charset="utf-8" http-equiv="Content-Type"
                                   content="text/html;"><title>选座确认</title><head><link rel="shortcut icon" href="/favicon.ico"></head><body bgcolor="#FFFFF4" align="center" style="background-attachment: fixed">';

   $name=$_COOKIE['name'];
   $identifier=$_POST['identifier'];
$mysql="UPDATE seats SET absence=absence+1,absence_time=concat(absence_time,NOW()) where identifier='$identifier';";
    mysql_query($mysql);
   echo "<script>window.location.replace('/stock1/seats1.php')</script>";
?>
