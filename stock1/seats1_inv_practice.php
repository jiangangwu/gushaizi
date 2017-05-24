<?php
   $host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
   $user='r0gbqnbc4x';
   $password='19760209';
   $db='r0gbqnbc4x';
   $connect=mysql_connect($host,$user,$password);
   mysql_select_db($db);
   mysql_query("set names 'utf8'");
   $ip=getenv('REMOTE_ADDR');


   $name=@$_COOKIE['name'];
   if ($name=="建刚"){
   $course[0]="投资理论与实践（2017冬）";
   }else{
   $result_course=mysql_query("select course from user where name='$name';");
   $course=mysql_fetch_array($result_course);
   }
   $result_seat=mysql_query("SELECT seat FROM seats_inv where course='$course[0]';");
   $result_seat1=mysql_query("SELECT absence FROM seats_inv where course='$course[0]';");
   $arr1 = array();
   while($row = mysql_fetch_array($result_seat1)) $arr1[] = $row[0];
   $arr = array();
   while($row = mysql_fetch_array($result_seat)) $arr[] = $row[0];
echo '<html lang="zh-CN">  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=1" /><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no"><meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
echo '<title>选座</title>';
echo '<head><link rel="shortcut icon" href="/favicon.ico"><link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">    a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:active {color:#FF0000;} </style>';

   if ($name=="建刚"){
   echo "<script type='text/javascript'>
      function setSeat(myseat){
            document.getElementById('seat').value=myseat;
            document.getElementById('seat1').value=myseat;
      }
    </script>";
}
echo '</head><body align="center" bgcolor="#fcfcfc">';
echo "<table width='100%' boder='0'><tr><td align='left'><a class='s2' style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'>回到首页</a></td><td align='right' style='line-height:1;'><a  style='color:#A1A1A1;' href='/stock1/user_homepage.php'>我的空间</a></td></tr></table><div align='center'>";
?>
<h2 style="color:red">投资理论与实践课程考勤</h2>

<form method="post" action="/stock1/seat_absence_inv_practice.php">

<table cellspacing="6px" >
  <tr>
<td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c10').name)" id="r3c10" name="r3c10" value=<?php echo $arr[29];if (strpos($arr[29],"R")===false)echo $arr1[29];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c9').name)" id="r3c9" name="r3c9" value=<?php echo $arr[28];if (strpos($arr[28],"R")===false)echo $arr1[28];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c8').name)" id="r3c8" name="r3c8" value=<?php echo $arr[27];if (strpos($arr[27],"R")===false)echo $arr1[27];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c7').name)" id="r3c7" name="r3c7" value=<?php echo $arr[26];if (strpos($arr[26],"R")===false)echo $arr1[26];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c6').name)" id="r3c6" name="r3c6" value=<?php echo $arr[25];if (strpos($arr[25],"R")===false)echo $arr1[25];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c5').name)" id="r3c5" name="r3c5" value=<?php echo $arr[24];if (strpos($arr[24],"R")===false)echo $arr1[24];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c4').name)" id="r3c4" name="r3c4" value=<?php echo $arr[23];if (strpos($arr[23],"R")===false)echo $arr1[23];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c3').name)" id="r3c3" name="r3c3" value=<?php echo $arr[22];if (strpos($arr[22],"R")===false)echo $arr1[22];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c2').name)" id="r3c2" name="r3c2" value=<?php echo $arr[21];if (strpos($arr[21],"R")===false)echo $arr1[21];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c1').name)" id="r3c1" name="r3c1" value=<?php echo $arr[20];if (strpos($arr[20],"R")===false)echo $arr1[20];?>>
</tr><tr>
<td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c10').name)" id="r2c10" name="r2c10" value=<?php echo $arr[19];if (strpos($arr[19],"R")===false)echo $arr1[19];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c9').name)" id="r2c9" name="r2c9" value=<?php echo $arr[18];if (strpos($arr[18],"R")===false)echo $arr1[18];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c8').name)" id="r2c8" name="r2c8" value=<?php echo $arr[17];if (strpos($arr[17],"R")===false)echo $arr1[17];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c7').name)" id="r2c7" name="r2c7" value=<?php echo $arr[16];if (strpos($arr[16],"R")===false)echo $arr1[16];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c6').name)" id="r2c6" name="r2c6" value=<?php echo $arr[15];if (strpos($arr[15],"R")===false)echo $arr1[15];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c5').name)" id="r2c5" name="r2c5" value=<?php echo $arr[14];if (strpos($arr[14],"R")===false)echo $arr1[14];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c4').name)" id="r2c4" name="r2c4" value=<?php echo $arr[13];if (strpos($arr[13],"R")===false)echo $arr1[13];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c3').name)" id="r2c3" name="r2c3" value=<?php echo $arr[12];if (strpos($arr[12],"R")===false)echo $arr1[12];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c2').name)" id="r2c2" name="r2c2" value=<?php echo $arr[11];if (strpos($arr[11],"R")===false)echo $arr1[11];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c1').name)" id="r2c1" name="r2c1" value=<?php echo $arr[10];if (strpos($arr[10],"R")===false)echo $arr1[10];?>>
</tr><tr>
<td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c10').name)" id="r1c10" name="r1c10" value=<?php echo $arr[9];if (strpos($arr[9],"R")===false)echo $arr1[9];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c9').name)" id="r1c9" name="r1c9" value=<?php echo $arr[8];if (strpos($arr[8],"R")===false)echo $arr1[8];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c8').name)" id="r1c8" name="r1c8" value=<?php echo $arr[7];if (strpos($arr[7],"R")===false)echo $arr1[7];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c7').name)" id="r1c7" name="r1c7" value=<?php echo $arr[6];if (strpos($arr[6],"R")===false)echo $arr1[6];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c6').name)" id="r1c6" name="r1c6" value=<?php echo $arr[5];if (strpos($arr[5],"R")===false)echo $arr1[5];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c5').name)" id="r1c5" name="r1c5" value=<?php echo $arr[4];if (strpos($arr[4],"R")===false)echo $arr1[4];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c4').name)" id="r1c4" name="r1c4" value=<?php echo $arr[3];if (strpos($arr[3],"R")===false)echo $arr1[3];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c3').name)" id="r1c3" name="r1c3" value=<?php echo $arr[2];if (strpos($arr[2],"R")===false)echo $arr1[2];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c2').name)" id="r1c2" name="r1c2" value=<?php echo $arr[1];if (strpos($arr[1],"R")===false)echo $arr1[1];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c1').name)" id="r1c1" name="r1c1" value=<?php echo $arr[0];if (strpos($arr[0],"R")===false)echo $arr1[0];?>>
</td></tr></table>
      <h2 style="color:red;">讲&nbsp&nbsp台</h2>
             <br/>
<font color=black>缺席座位为：</font><input type="button" style="font-size:15px;" size=10 id="seat1" name="identifier" value="">
<input type="hidden" style="font-size:15px;" size=10 id="seat" name="identifier" value="">

<br/><br/>
<input style="font-size:18px;" size=18 onclick="if (confirm('确认选择？')===false)return false；" style="font-size=20;" size=12 type="submit" value="提交">
</form>

</div></body>
</html>
