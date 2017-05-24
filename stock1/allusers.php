<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');


$name1=@$_GET['name'];
$name=@$_COOKIE['name'];
  echo '<html lang="zh-CN">  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=1" /><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no"><meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
echo '<title>网站用户</title>';

    echo '<head><link rel="shortcut icon" href="/favicon.ico"><link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">    a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:visited {color:RoyalBlue;} a:active {color:RoyalBlue;} </style> </head>';
    echo '<body align="center" bgcolor="#fcfcfc">';
    echo "<table width='100%' boder='0'><tr><td align='left'><a class='s2' style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'>回到首页</a></td><td align='right' style='line-height:1;'><a  style='color:#A1A1A1;' href='/stock1/user_homepage.php'>我的空间</a></td></tr></table>";
echo '<div align="center"><h2 align="center" style="color:red">网站用户</h2>';

if ($name==='Jiangang' or $name==='建刚'){
	$result=mysql_query("select * from r0gbqnbc4x.user where pass='1' order by  time_at desc, course asc, stu_id asc, year asc;");
	echo "<table  width='70%'  cellspacing='0'  border='1' bordercolor='#D0D0D0' cellpadding='4' align='center'>";
	echo "<tr><th>编号</th><th>网名</th><th>psw</th><th>性别</th><th>班级</th><th>姓名</th><th>email</th><th>时间</th><th>自述</th><th>删除</th></tr>";
    $i=1;
    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {	printf("<tr><td>%s</td><td><a target='_blank' href='/stock1/user.php?name=%s'>%s</a></td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td><a href='/stock1/del_user.php?id=%s' style='text-decoration:none;' target='_blank'>[删除]</a></td></tr>",$i,$row[1],$row[1],$row[2],$row[3],$row[12],$row[4],$row[5],$row[9],$row[6],$row[0]);
        $i++;
	}
    		echo "</td></tr></table>";
}
echo "</div></body></html>";
?>
