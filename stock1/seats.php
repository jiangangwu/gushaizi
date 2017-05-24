<?php
   $host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
   $user='r0gbqnbc4x';
   $password='19760209';
   $db='r0gbqnbc4x';
   $connect=mysql_connect($host,$user,$password);
   mysql_select_db($db);
   mysql_query("set names 'utf8'");
   $ip=getenv('REMOTE_ADDR');
$course_0= @$_POST["course"];
   $name=@$_COOKIE['name'];
   if ($name=="建刚"){
   $course[0]="投资理论与实践（2016春）";
   }else{
   
   $result_course=mysql_query("select course from user where name='$name';");
   $course=mysql_fetch_array($result_course);
   }
   $result_seat=mysql_query("SELECT seat FROM seats where course='$course[0]';");
     
   $result_seat1=mysql_query("SELECT absence FROM seats where course='$course[0]';");
  

   $arr1 = array();
   while($row = mysql_fetch_array($result_seat1)) $arr1[] = $row[0];



   $arr = array();
   while($row = mysql_fetch_array($result_seat)) $arr[] = $row[0];

   
   echo "<html lang='zh-CN'> <meta charset='utf-8' http-equiv='Content-Type' content='text/html;'><title>选座</title>";
   ?>
<head>
	<style>	a.s2:link {color:#A1A1A1;text-decoration:none;} /*未被访问的链接 */
		a.s2:visited {color:#A1A1A1;text-decoration:none;} /* 已被访问的链接 */
		a.s2:hover {color:#FFA500;} /* 鼠标指针移动到链接上 */
		a.s2:active {color:#FF0000;} /* 正在被点击的链接 */ 	</style>
  <link rel="shortcut icon" href="/favicon.ico">
     <script type="text/javascript">
      function setSeat(myseat){
      if (myseat.indexOf("R")>=0){
          confirm("确认选择该座？");
          document.getElementById('seat').value=myseat;
          document.getElementById('seat_show').value=myseat;
      }else{
          alert("座位已经被占，请重新选择。");
          }
      return myseat;
      }
    </script>
</head>
<body bgcolor="#FFFFF4" style="background-attachment: fixed"><br/>
  <?php
     echo "<table width='100%' boder='0'><tr><td></td><td align='right'  style='line-height:1;color:#E0E0E0;font-size:13px;'>欢迎您！<a class='s2' href='/stock1/user_homepage.php'>";
     echo $name;
     echo "</a></td></tr></table>";
    ?>
 <br/><br/><br/><br/>
   <form method="POST" action="/stock1/seat_check.php">

 <div align="center">
   <h2 style="color:red;">讲&nbsp&nbsp台</h2>

<table cellspacing="6px" >
  <tr><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c1').value)" id="r1c1" name="r1c1" value=<?php echo $arr[0];if (strpos($arr[0],"R")===false)echo $arr1[0];?>>
 </td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c2').value)" id="r1c2" name="r1c2" value=<?php echo $arr[1];if (strpos($arr[1],"R")===false)echo $arr1[1];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c3').value);" id="r1c3" name="r1c3" value=<?php echo $arr[2];if (strpos($arr[2],"R")===false)echo $arr1[2];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c4').value);" id="r1c4" name="r1c4" value=<?php echo $arr[3];if (strpos($arr[3],"R")===false)echo $arr1[3];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c5').value);" id="r1c5" name="r1c5" value=<?php echo $arr[4];if (strpos($arr[4],"R")===false)echo $arr1[4];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c6').value);" id="r1c6" name="r1c6" value=<?php echo $arr[5];if (strpos($arr[5],"R")===false)echo $arr1[5];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r1c7').value);" id="r1c7" name="r1c7" value=<?php echo $arr[6];if (strpos($arr[6],"R")===false)echo $arr1[6];?>></tr><tr>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c1').value);" id="r2c1" name="r2c1" value=<?php echo $arr[7];if (strpos($arr[7],"R")===false)echo $arr1[7];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c2').value);" id="r2c2" name="r2c2" value=<?php echo $arr[8];if (strpos($arr[8],"R")===false)echo $arr1[8];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c3').value);" id="r2c3" name="r2c3" value=<?php echo $arr[9];if (strpos($arr[9],"R")===false)echo $arr1[9];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c4').value);" id="r2c4" name="r2c4" value=<?php echo $arr[10];if (strpos($arr[10],"R")===false)echo $arr1[10];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c5').value);" id="r2c5" name="r2c5" value=<?php echo $arr[11];if (strpos($arr[11],"R")===false)echo $arr1[11];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c6').value);" id="r2c6" name="r2c6" value=<?php echo $arr[12];if (strpos($arr[12],"R")===false)echo $arr1[12];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r2c7').value);" id="r2c7" name="r2c7" value=<?php echo $arr[13];if (strpos($arr[13],"R")===false)echo $arr1[13];?>></tr><tr>
     <td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c1').value);" id="r3c1" name="r3c1" value=<?php echo $arr[14];if (strpos($arr[14],"R")===false)echo $arr1[14];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c2').value);" id="r3c2" name="r3c2" value=<?php echo $arr[15];if (strpos($arr[15],"R")===false)echo $arr1[15];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c3').value);" id="r3c3" name="r3c3" value=<?php echo $arr[16];if (strpos($arr[16],"R")===false)echo $arr1[16];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c4').value);" id="r3c4" name="r3c4" value=<?php echo $arr[17];if (strpos($arr[17],"R")===false)echo $arr1[17];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c5').value);" id="r3c5" name="r3c5" value=<?php echo $arr[18];if (strpos($arr[18],"R")===false)echo $arr1[18];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c6').value);" id="r3c6" name="r3c6" value=<?php echo $arr[19];if (strpos($arr[19],"R")===false)echo $arr1[19];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r3c7').value);" id="r3c7" name="r3c7" value=<?php echo $arr[20];if (strpos($arr[20],"R")===false)echo $arr1[20];?>></tr><tr>
     <td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r4c1').value);" id="r4c1" name="r4c1" value=<?php echo $arr[21];if (strpos($arr[21],"R")===false)echo $arr1[21];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r4c2').value);" id="r4c2" name="r4c2" value=<?php echo $arr[22];if (strpos($arr[22],"R")===false)echo $arr1[22];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r4c3').value);" id="r4c3" name="r4c3" value=<?php echo $arr[23];if (strpos($arr[23],"R")===false)echo $arr1[23];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r4c4').value);" id="r4c4" name="r4c4" value=<?php echo $arr[24];if (strpos($arr[24],"R")===false)echo $arr1[24];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r4c5').value);" id="r4c5" name="r4c5" value=<?php echo $arr[25];if (strpos($arr[25],"R")===false)echo $arr1[25];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r4c6').value);" id="r4c6" name="r4c6" value=<?php echo $arr[26];if (strpos($arr[26],"R")===false)echo $arr1[26];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r4c7').value);" id="r4c7" name="r4c7" value=<?php echo $arr[27];if (strpos($arr[27],"R")===false)echo $arr1[27];?>></tr><tr>
     <td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r5c1').value);" id="r5c1" name="r5c1" value=<?php echo $arr[28];if (strpos($arr[28],"R")===false)echo $arr1[28];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r5c2').value);" id="r5c2" name="r5c2" value=<?php echo $arr[29];if (strpos($arr[29],"R")===false)echo $arr1[29];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r5c3').value);" id="r5c3" name="r5c3" value=<?php echo $arr[30];if (strpos($arr[30],"R")===false)echo $arr1[30];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r5c4').value);" id="r5c4" name="r5c4" value=<?php echo $arr[31];if (strpos($arr[31],"R")===false)echo $arr1[31];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r5c5').value);" id="r5c5" name="r5c5" value=<?php echo $arr[32];if (strpos($arr[32],"R")===false)echo $arr1[32];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r5c6').value);" id="r5c6" name="r5c6" value=<?php echo $arr[33];if (strpos($arr[33],"R")===false)echo $arr1[33];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r5c7').value);" id="r5c7" name="r5c7" value=<?php echo $arr[34];if (strpos($arr[34],"R")===false)echo $arr1[34];?>></tr><tr>
     <td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r6c1').value);" id="r6c1" name="r6c1" value=<?php echo $arr[35];if (strpos($arr[35],"R")===false)echo $arr1[35];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r6c2').value);" id="r6c2" name="r6c2" value=<?php echo $arr[36];if (strpos($arr[36],"R")===false)echo $arr1[36];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r6c3').value);" id="r6c3" name="r6c3" value=<?php echo $arr[37];if (strpos($arr[37],"R")===false)echo $arr1[37];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r6c4').value);" id="r6c4" name="r6c4" value=<?php echo $arr[38];if (strpos($arr[38],"R")===false)echo $arr1[38];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r6c5').value);" id="r6c5" name="r6c5" value=<?php echo $arr[39];if (strpos($arr[39],"R")===false)echo $arr1[39];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r6c6').value);" id="r6c6" name="r6c6" value=<?php echo $arr[40];if (strpos($arr[40],"R")===false)echo $arr1[40];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r6c7').value);" id="r6c7" name="r6c7" value=<?php echo $arr[41];if (strpos($arr[41],"R")===false)echo $arr1[41];?>></tr><tr>
     <td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r7c1').value);" id="r7c1" name="r7c1" value=<?php echo $arr[42];if (strpos($arr[42],"R")===false)echo $arr1[42];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r7c2').value);" id="r7c2" name="r7c2" value=<?php echo $arr[43];if (strpos($arr[43],"R")===false)echo $arr1[43];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r7c3').value);" id="r7c3" name="r7c3" value=<?php echo $arr[44];if (strpos($arr[44],"R")===false)echo $arr1[44];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r7c4').value);" id="r7c4" name="r7c4" value=<?php echo $arr[45];if (strpos($arr[45],"R")===false)echo $arr1[45];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r7c5').value);" id="r7c5" name="r7c5" value=<?php echo $arr[46];if (strpos($arr[46],"R")===false)echo $arr1[46];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r7c6').value);" id="r7c6" name="r7c6" value=<?php echo $arr[47];if (strpos($arr[47],"R")===false)echo $arr1[47];?>>
</td><td><input type="button" style="font-size:18px;"  onclick="setSeat(document.getElementById('r7c7').value);" id="r7c7" name="r7c7" value=<?php echo $arr[48];if (strpos($arr[48],"R")===false)echo $arr1[48];?>>
</td></tr><table
                   </div><br/>

所选座位为：<input size=10 type="button" id="seat_show" name="seat" value="">
<input size=10 type="hidden" id="seat" name="seat" value="">

<?php echo @$_POST["seat"];?>
<br/><br/>
<input size=18 style="font-size:18px;" onclick="if(document.getElementById('seat').value==''){alert('还没有选择!');window.location.replace('/stock1/seats.php');}" type="submit" size=10 value="提交">
</form>


</blockquote></blockquote></blockquote></body>
</html>
