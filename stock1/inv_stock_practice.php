<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('RMOTE_ADDR');

$name=@$_COOKIE['name'];
$topic=@$_POST['topic'];
if ($topic!="")mysql_query("UPDATE user SET topic='$topic' WHERE name='$name';");
$course="投资理论与实践（2017冬）";
$result=mysql_query($mysql="SELECT name,username,stu_id,topic FROM user where course='$course' order by stu_id asc;");
  
echo '<html lang="zh-CN">  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=1" /><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no"><meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
echo '<title>投资学选题</title>';
echo '<head><link rel="shortcut icon" href="/favicon.ico"><link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">    a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:active {color:#FF0000;} </style> </head>';
echo '<body align="center" bgcolor="#fcfcfc">';
echo "<table width='100%' boder='0'><tr><td align='left'><a class='s2' style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'>回到首页</a></td><td align='right' style='line-height:1;'><a  style='color:#A1A1A1;' href='/stock1/user_homepage.php'>我的空间</a></td></tr></table><div align=''center'>";
?>


              <div align="center">
              <h2 style="color:red;">投资理论与实践课程论文选股</h2>

              <table  cellspacing='0'  border='1' bordercolor='#D0D0D0' cellpadding='4' align='center'>
                   <tr><th>序号</th><th>网名</th><th>姓名</th><th>学号</th><th>股票简称</th></tr>
<?php
              $i=1;
              while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
                  printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $i, $row[0], $row[1], $row[2], $row[3]);
                  $i++;
              }
?>

     
              <table
              </div><br/>
                    <form method="POST" action="/stock1/inv_check_practice.php">
              所选股票为：<input size=20 type="text"  style="font-size:16px;" id="topic" name="topic" placeholder="请输入股票简称">
                  <br/><br/>
              <input size=18 style="font-size:16px;" type="submit" size=10 value="提交">
              </form>
  <br/>
</div> </body>
              </html>
