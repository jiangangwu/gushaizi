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
   $course[0]="研究生投资学（2017春）";
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
echo "

     <script type='text/javascript'>
      function setSeat(myseat){
      if (myseat.indexOf('R')>=0){
          confirm('确认选择该座？');
          document.getElementById('seat').value=myseat;
          document.getElementById('seat_show').value=myseat;
      }else{
          alert('座位已经被占，请重新选择。');
          }
      return myseat;
      }
    </script>";

echo '</head><body align="center" bgcolor="#fcfcfc">';
echo "<div  align='center' ><table width='100%'boder='0'><tr><td align='left'><a class='s2' style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'>回到首页</a></td><td align='right' style='line-height:1;'><a  style='color:#A1A1A1;' href='/stock1/user_homepage.php'>我的空间</a></td></tr></table><div align=''center'>";
    ?>
<br/>
   <form method="POST" action="/stock1/seat_check_inv.php">
   <h2 style="color:red;">讲&nbsp&nbsp台</h2>
   <Table cellspacing="6px" >
 <tr><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c1').value)" id="r1c1" name="r1c1" value=<?php echo $arr[0];if (strpos($arr[0],"R")===false)echo $arr1[0];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c2').value)" id="r1c2" name="r1c2" value=<?php echo $arr[1];if (strpos($arr[1],"R")===false)echo $arr1[1];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c3').value)" id="r1c3" name="r1c3" value=<?php echo $arr[2];if (strpos($arr[2],"R")===false)echo $arr1[2];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c4').value)" id="r1c4" name="r1c4" value=<?php echo $arr[3];if (strpos($arr[3],"R")===false)echo $arr1[3];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c5').value)" id="r1c5" name="r1c5" value=<?php echo $arr[4];if (strpos($arr[4],"R")===false)echo $arr1[4];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c6').value)" id="r1c6" name="r1c6" value=<?php echo $arr[5];if (strpos($arr[5],"R")===false)echo $arr1[5];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c7').value)" id="r1c7" name="r1c7" value=<?php echo $arr[6];if (strpos($arr[6],"R")===false)echo $arr1[6];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c8').value)" id="r1c8" name="r1c8" value=<?php echo $arr[7];if (strpos($arr[7],"R")===false)echo $arr1[7];?>>
</Td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c9').value)" id="r1c9" name="r1c9" value=<?php echo $arr[8];if (strpos($arr[8],"R")===false)echo $arr1[8];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c10').value)" id="r1c10" name="r1c10" value=<?php echo $arr[9];if (strpos($arr[9],"R")===false)echo $arr1[9];?>>
</tr><tr>
<td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c1').value)" id="r2c1" name="r2c1" value=<?php echo $arr[10];if (strpos($arr[10],"R")===false)echo $arr1[10];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c2').value)" id="r2c2" name="r2c2" value=<?php echo $arr[11];if (strpos($arr[11],"R")===false)echo $arr1[11];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c3').value)" id="r2c3" name="r2c3" value=<?php echo $arr[12];if (strpos($arr[12],"R")===false)echo $arr1[12];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c4').value)" id="r2c4" name="r2c4" value=<?php echo $arr[13];if (strpos($arr[13],"R")===false)echo $arr1[13];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c5').value)" id="r2c5" name="r2c5" value=<?php echo $arr[14];if (strpos($arr[14],"R")===false)echo $arr1[14];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c6').value)" id="r2c6" name="r2c6" value=<?php echo $arr[15];if (strpos($arr[15],"R")===false)echo $arr1[15];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c7').value)" id="r2c7" name="r2c7" value=<?php echo $arr[16];if (strpos($arr[16],"R")===false)echo $arr1[16];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c8').value)" id="r2c8" name="r2c8" value=<?php echo $arr[17];if (strpos($arr[17],"R")===false)echo $arr1[17];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c9').value)" id="r2c9" name="r2c9" value=<?php echo $arr[18];if (strpos($arr[18],"R")===false)echo $arr1[18];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c10').value)" id="r2c10" name="r2c10" value=<?php echo $arr[19];if (strpos($arr[19],"R")===false)echo $arr1[19];?>>
</tr><tr>
<td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c1').value)" id="r3c1" name="r3c1" value=<?php echo $arr[20];if (strpos($arr[20],"R")===false)echo $arr1[20];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c2').value)" id="r3c2" name="r3c2" value=<?php echo $arr[21];if (strpos($arr[21],"R")===false)echo $arr1[21];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c3').value)" id="r3c3" name="r3c3" value=<?php echo $arr[22];if (strpos($arr[22],"R")===false)echo $arr1[22];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c4').value)" id="r3c4" name="r3c4" value=<?php echo $arr[23];if (strpos($arr[23],"R")===false)echo $arr1[23];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c5').value)" id="r3c5" name="r3c5" value=<?php echo $arr[24];if (strpos($arr[24],"R")===false)echo $arr1[24];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c6').value)" id="r3c6" name="r3c6" value=<?php echo $arr[25];if (strpos($arr[25],"R")===false)echo $arr1[25];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c7').value)" id="r3c7" name="r3c7" value=<?php echo $arr[26];if (strpos($arr[26],"R")===false)echo $arr1[26];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c8').value)" id="r3c8" name="r3c8" value=<?php echo $arr[27];if (strpos($arr[27],"R")===false)echo $arr1[27];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c9').value)" id="r3c9" name="r3c9" value=<?php echo $arr[28];if (strpos($arr[28],"R")===false)echo $arr1[28];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c10').value)" id="r3c10" name="r3c10" value=<?php echo $arr[29];if (strpos($arr[29],"R")===false)echo $arr1[29];?>>
</tr><tr>
<td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r4c1').value)" id="r4c1" name="r4c1" value=<?php echo $arr[30];if (strpos($arr[30],"R")===false)echo $arr1[30];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r4c2').value)" id="r4c2" name="r4c2" value=<?php echo $arr[31];if (strpos($arr[31],"R")===false)echo $arr1[31];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r4c3').value)" id="r4c3" name="r4c3" value=<?php echo $arr[32];if (strpos($arr[32],"R")===false)echo $arr1[32];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r4c4').value)" id="r4c4" name="r4c4" value=<?php echo $arr[33];if (strpos($arr[33],"R")===false)echo $arr1[33];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r4c5').value)" id="r4c5" name="r4c5" value=<?php echo $arr[34];if (strpos($arr[34],"R")===false)echo $arr1[34];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r4c6').value)" id="r4c6" name="r4c6" value=<?php echo $arr[35];if (strpos($arr[35],"R")===false)echo $arr1[35];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r4c7').value)" id="r4c7" name="r4c7" value=<?php echo $arr[36];if (strpos($arr[36],"R")===false)echo $arr1[36];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r4c8').value)" id="r4c8" name="r4c8" value=<?php echo $arr[37];if (strpos($arr[37],"R")===false)echo $arr1[37];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r4c9').value)" id="r4c9" name="r4c9" value=<?php echo $arr[38];if (strpos($arr[38],"R")===false)echo $arr1[38];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r4c10').value)" id="r4c10" name="r4c10" value=<?php echo $arr[39];if (strpos($arr[39],"R")===false)echo $arr1[39];?>>
</tr><tr>
<td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r5c1').value)" id="r5c1" name="r5c1" value=<?php echo $arr[40];if (strpos($arr[40],"R")===false)echo $arr1[40];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r5c2').value)" id="r5c2" name="r5c2" value=<?php echo $arr[41];if (strpos($arr[41],"R")===false)echo $arr1[41];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r5c3').value)" id="r5c3" name="r5c3" value=<?php echo $arr[42];if (strpos($arr[42],"R")===false)echo $arr1[42];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r5c4').value)" id="r5c4" name="r5c4" value=<?php echo $arr[43];if (strpos($arr[43],"R")===false)echo $arr1[43];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r5c5').value)" id="r5c5" name="r5c5" value=<?php echo $arr[44];if (strpos($arr[44],"R")===false)echo $arr1[44];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r5c6').value)" id="r5c6" name="r5c6" value=<?php echo $arr[45];if (strpos($arr[45],"R")===false)echo $arr1[45];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r5c7').value)" id="r5c7" name="r5c7" value=<?php echo $arr[46];if (strpos($arr[46],"R")===false)echo $arr1[46];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r5c8').value)" id="r5c8" name="r5c8" value=<?php echo $arr[47];if (strpos($arr[47],"R")===false)echo $arr1[47];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r5c9').value)" id="r5c9" name="r5c9" value=<?php echo $arr[48];if (strpos($arr[48],"R")===false)echo $arr1[48];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r5c10').value)" id="r5c10" name="r5c10" value=<?php echo $arr[49];if (strpos($arr[49],"R")===false)echo $arr1[49];?>>
</tr><tr>
<td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r6c1').value)" id="r6c1" name="r6c1" value=<?php echo $arr[50];if (strpos($arr[50],"R")===false)echo $arr1[50];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r6c2').value)" id="r6c2" name="r6c2" value=<?php echo $arr[51];if (strpos($arr[51],"R")===false)echo $arr1[51];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r6c3').value)" id="r6c3" name="r6c3" value=<?php echo $arr[52];if (strpos($arr[52],"R")===false)echo $arr1[52];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r6c4').value)" id="r6c4" name="r6c4" value=<?php echo $arr[53];if (strpos($arr[53],"R")===false)echo $arr1[53];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r6c5').value)" id="r6c5" name="r6c5" value=<?php echo $arr[54];if (strpos($arr[54],"R")===false)echo $arr1[54];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r6c6').value)" id="r6c6" name="r6c6" value=<?php echo $arr[55];if (strpos($arr[55],"R")===false)echo $arr1[55];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r6c7').value)" id="r6c7" name="r6c7" value=<?php echo $arr[56];if (strpos($arr[56],"R")===false)echo $arr1[56];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r6c8').value)" id="r6c8" name="r6c8" value=<?php echo $arr[57];if (strpos($arr[57],"R")===false)echo $arr1[57];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r6c9').value)" id="r6c9" name="r6c9" value=<?php echo $arr[58];if (strpos($arr[58],"R")===false)echo $arr1[58];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r6c10').value)" id="r6c10" name="r6c10" value=<?php echo $arr[59];if (strpos($arr[59],"R")===false)echo $arr1[59];?>>
</tr><tr>
<td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r7c1').value)" id="r7c1" name="r7c1" value=<?php echo $arr[60];if (strpos($arr[60],"R")===false)echo $arr1[60];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r7c2').value)" id="r7c2" name="r7c2" value=<?php echo $arr[61];if (strpos($arr[61],"R")===false)echo $arr1[61];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r7c3').value)" id="r7c3" name="r7c3" value=<?php echo $arr[62];if (strpos($arr[62],"R")===false)echo $arr1[62];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r7c4').value)" id="r7c4" name="r7c4" value=<?php echo $arr[63];if (strpos($arr[63],"R")===false)echo $arr1[63];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r7c5').value)" id="r7c5" name="r7c5" value=<?php echo $arr[64];if (strpos($arr[64],"R")===false)echo $arr1[64];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r7c6').value)" id="r7c6" name="r7c6" value=<?php echo $arr[65];if (strpos($arr[65],"R")===false)echo $arr1[65];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r7c7').value)" id="r7c7" name="r7c7" value=<?php echo $arr[66];if (strpos($arr[66],"R")===false)echo $arr1[66];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r7c8').value)" id="r7c8" name="r7c8" value=<?php echo $arr[67];if (strpos($arr[67],"R")===false)echo $arr1[67];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r7c9').value)" id="r7c9" name="r7c9" value=<?php echo $arr[68];if (strpos($arr[68],"R")===false)echo $arr1[68];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r7c10').value)" id="r7c10" name="r7c10" value=<?php echo $arr[69];if (strpos($arr[69],"R")===false)echo $arr1[69];?>>
</tr><tr>
<td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r8c1').value)" id="r8c1" name="r8c1" value=<?php echo $arr[70];if (strpos($arr[70],"R")===false)echo $arr1[70];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r8c2').value)" id="r8c2" name="r8c2" value=<?php echo $arr[71];if (strpos($arr[71],"R")===false)echo $arr1[71];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r8c3').value)" id="r8c3" name="r8c3" value=<?php echo $arr[72];if (strpos($arr[72],"R")===false)echo $arr1[72];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r8c4').value)" id="r8c4" name="r8c4" value=<?php echo $arr[73];if (strpos($arr[73],"R")===false)echo $arr1[73];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r8c5').value)" id="r8c5" name="r8c5" value=<?php echo $arr[74];if (strpos($arr[74],"R")===false)echo $arr1[74];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r8c6').value)" id="r8c6" name="r8c6" value=<?php echo $arr[75];if (strpos($arr[75],"R")===false)echo $arr1[75];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r8c7').value)" id="r8c7" name="r8c7" value=<?php echo $arr[76];if (strpos($arr[76],"R")===false)echo $arr1[76];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r8c8').value)" id="r8c8" name="r8c8" value=<?php echo $arr[77];if (strpos($arr[77],"R")===false)echo $arr1[77];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r8c9').value)" id="r8c9" name="r8c9" value=<?php echo $arr[78];if (strpos($arr[78],"R")===false)echo $arr1[78];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r8c10').value)" id="r8c10" name="r8c10" value=<?php echo $arr[79];if (strpos($arr[79],"R")===false)echo $arr1[79];?>>
</tr><tr>
<td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r9c1').value)" id="r9c1" name="r9c1" value=<?php echo $arr[80];if (strpos($arr[80],"R")===false)echo $arr1[80];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r9c2').value)" id="r9c2" name="r9c2" value=<?php echo $arr[81];if (strpos($arr[81],"R")===false)echo $arr1[81];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r9c3').value)" id="r9c3" name="r9c3" value=<?php echo $arr[82];if (strpos($arr[82],"R")===false)echo $arr1[82];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r9c4').value)" id="r9c4" name="r9c4" value=<?php echo $arr[83];if (strpos($arr[83],"R")===false)echo $arr1[83];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r9c5').value)" id="r9c5" name="r9c5" value=<?php echo $arr[84];if (strpos($arr[84],"R")===false)echo $arr1[84];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r9c6').value)" id="r9c6" name="r9c6" value=<?php echo $arr[85];if (strpos($arr[85],"R")===false)echo $arr1[85];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r9c7').value)" id="r9c7" name="r9c7" value=<?php echo $arr[86];if (strpos($arr[86],"R")===false)echo $arr1[86];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r9c8').value)" id="r9c8" name="r9c8" value=<?php echo $arr[87];if (strpos($arr[87],"R")===false)echo $arr1[87];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r9c9').value)" id="r9c9" name="r9c9" value=<?php echo $arr[88];if (strpos($arr[88],"R")===false)echo $arr1[88];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r9c10').value)" id="r9c10" name="r9c10" value=<?php echo $arr[89];if (strpos($arr[89],"R")===false)echo $arr1[89];?>>
</td></tr><table
                   </div><br/>

所选座为：<input size=10 type="button" id="seat_show" name="seat" value="">
<input size=10 type="hidden" id="seat" name="seat" value="">

<?php echo @$_POST["seat"];?>
<br/><br/>
<input size=18 style="font-size:18px;" onclick="if(document.getElementById('seat').value==''){alert('还没有选择!');window.location.replace('/stock1/seats_inv.php');}" type="submit" size=10 value="提交">
</form>


</div></body>
</html>
