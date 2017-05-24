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
echo '<html lang="zh-CN"> <meta charset="utf-8" http-equiv="Content-Type" content="text/html;"><title>';
echo $name;
echo '的主页</title><head><link rel="shortcut icon" href="/favicon.ico">';
echo '<link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">  table {align:center;center:float;display:inline;} a {target:_blank} a:visited {color:RoyalBlue;} a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:active {color:#FF0000;} </style> </head>';
echo '<body align="center" bgcolor="#FFFFF4">';
if ($name!=""){
    echo '<table width="100%" boder="0"><tr><td></td><td align="right" style="line-height:1;"><font style="color:#A1A1A1;"><small>欢迎您！';
    echo $name;
	echo "</small>&nbsp&nbsp</font>";
	echo "<a style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'>回到首页</a>";
}else{
    echo '<table  width=80% width="100%" boder="0"><tr><td></td><td align="right" style="line-height:1;"><a target="_blank" style="color:#A1A1A1;"><small>欢迎您！';
    echo '</small>';
}
echo '</a></td></tr></table>';
echo '<h2 align="center" style="color:rde">我的管理</h2>';
echo '<br/><br/>';

if ($name=="建刚"){
    echo "<tr><td><h2><a   target='_blank' href='/stock1/research.php' style='text-decoration:none;'>学术研究</a></h2></td>";
    echo "<td><h3><a   target='_blank' href='/stock1/dissertation_topic.php' style='text-decoration:none;'>学生论文选题</a></h3></td></tr>";
    echo "</td><td width='30%'><h3><a  target='_blank' href='/stock1/seats1.php' style='text-decoration:none;'>财务专业英语考勤</a></h3></td><td><a  target='_blank'  href='/stock1/english_topic.php' style='text-decoration:none;'>选择题目</a></h3>";
    echo "</td><tr><td width='30%'><h3><a  target='_blank'  href='/stock1/seats1_inv.php' style='text-decoration:none;'>研究生投资学考勤</a></h3></td><td><a  target='_blank'  href='/stock1/inv_stock.php' style='text-decoration:none;'>选择题目</a></h3></td></tr>";
}



if ($name=="jimengying"){
    echo "</td><td width='30%'><h3><a  href='/stock1/seats1.php' style='text-decoration:none;'>财务专业英语考勤</a></h3>&nbsp&nbsp&nbsp";
}
echo "</table>";


$result_course=mysql_query("select distinct course from r0gbqnbc4x.user;");
$arr_course=mysql_fetch_array($result_course);
    echo "<br/><a target='_blank' href='http://www.gushaizi.com/stock1/";
    if ($arr_course[0]=='财务专业英语（2016春）') echo 'financial_english_undergraduate';
    echo ".php'><h2>";
    echo "<br/><a target='_blank' href='http://www.gushaizi.com/stock1/";
    if ($arr_course[0]=='远勤论坛') echo 'yuanqin';
    echo ".php'><h2>";
    echo "<br/><a target='_blank' href='http://www.gushaizi.com/stock1/";
    if ($arr_course[0]=='研究生投资学（2016春）') echo 'investment_postgraduate';
    echo ".php'><h2>";
    echo "<br/><a target='_blank' href='http://www.gushaizi.com/stock1/";
    if (strpos($arr_course[0],'论文指导')!==false) echo 'dissertation_postgraduate';
    echo ".php'><h2>";
    echo  $arr_course[0];
    echo "</h2></a><br/>";
    if ($arr_course[0]=="财务专业英语（2016春）") echo "<table><tr><td><h3><a  target='_blank'  href='/stock1/seats.php' style='text-decoration:none;'>选择座位&nbsp&nbsp</a></h3></td><td><h3><a  target='_blank'  href='/stock1/english_topic.php' style='text-decoration:none;'>选择题目</a></h3></td></tr></table>";
    if (strpos($arr_course[0],"论文指导")!==false) echo "<table><tr><td><h3><a  target='_blank'  href='/stock1/dissertation_topic.php' style='text-decoration:none;'>请登记论文指导题目</a></h3></td></tr></table>";
    if ($arr_course[0]=="研究生投资学（2016春）") echo "<table><tr><td><h3><a  target='_blank' href='/stock1/seats_inv.php' style='text-decoration:none;'>选择座位&nbsp&nbsp</a></h3></td><td><h3><a   target='_blank' href='/stock1/inv_stock.php' style='text-decoration:none;'>选择题目</a></h3></td></tr></table>";
}


if(strpos($arr_course[0],'论文指导')!==false){
    echo "<h3 align=center>同门</h3>";
    $result=mysql_query("select username,name,course,year,stu_id,tel,email from r0gbqnbc4x.user where pass='1' and course like '%论文指导'  order by year asc,stu_id asc;");
    echo "<table  width=80%  cellspacing='0'  border='1' bordercolor='#D0D0D0' cellpadding='4' align='center'>";
    echo "<tr><th>编号</th><th>姓名</th><th>用户名</th><th>类别</th><th>年级</th><th>学号</th><th>电话</th><th>电邮</th></tr>";
    $i=1;
    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {	printf("<tr><td>%s</td><td>%s</td><td><a target='_blank' href='/stock1/user.php?name=%s'>%s</a></td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",$i,$row[0],$row[1],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6]);
        $i++;

    }
}else{
    echo "<h3 align=center>我们班</h3>";
    $result=mysql_query("select * from r0gbqnbc4x.user where pass='1' and course='$arr_course[0]'  order by stu_id asc, year asc;");
    echo "<table  width=80%  cellspacing='0'  border='1' bordercolor='#D0D0D0' cellpadding='4' align='center'>";
    echo "<tr><th>编号</th><th>网名</th><th>学号</th><th>性别</th><th>姓名</th><th>电话</th><th>电邮</th></tr>";
    $i=1;
    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {	printf("<tr><td>%s</td><td><a target='_blank' href='/stock1/user.php?name=%s'>%s</a></td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",$i,$row[1],$row[1],$row[10],$row[3],$row[4],$row[11],$row[5]);
        $i++;
    }
    echo "</td></tr></table></blockquote></blockquote></blockquote></blockquote>";
}

?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
</body>
</html>
