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
                                   content='text/html;'><title>选座确认</title><head><link rel='shortcut icon' href='/favicon.ico'></head><body bgcolor='#FFFFF4' align='center' style='background-attachment: fixed'>";

   $name=$_COOKIE['name'];
   $seat=$_POST['seat'];
   $result_formername=mysql_query("select name from seats_inv where identifier='$seat';");
   $formername=mysql_fetch_array($result_formername);
   
   if ($seat==""){
       echo "还没有选择！";
           echo "<script>window.location.replace('/stock1/seats_inv_practice.php')</script>";
   }else{
       $result_username=mysql_query("select username from user where name='$name';");
       $username=mysql_fetch_array($result_username);
   
   $result_absence=mysql_query("select absence,absence_time from seats_inv where name='$name';");
   $absence=mysql_fetch_array($result_absence);
    
   mysql_query("UPDATE seats_inv SET seat=identifier,name='',absence=0,absence_time='' where name='$name';");

   $sql = "update seats_inv set name='$name', seat='$username[0]',absence='$absence[0]', absence_time='$absence[1]', ip='$ip',
           time_at=NOW() where identifier='$seat';";

   $result=mysql_query($sql);
   if ($result){
      echo "<script>window.location.replace('/stock1/seats_inv_practice.php')</script>";
       echo "<html lang='zh-CN'><meta charset='utf-8'><body><a style='text-decoration:none;'
    href='/stock1/seats_inv_practice.php'>，恭喜！选座成功。请点击返回。</a></body></html>";
   }else{
       echo "<html lang='zh-CN'><meta charset='utf-8'><body><a href='/stock1/seats_inv_practice.php' style='text-decoration:none;'>系统出现问题，请重试。</a></body></html>";
   }
   }
?>
