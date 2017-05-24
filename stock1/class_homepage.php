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
if ($name1!='') {
	$name=$name1;
	setcookie('name',$name1);
}

echo '<html lang="zh-CN">  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=1" /><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no"><meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
echo '<title>我的课程</title>';

echo '<head><link rel="shortcut icon" href="/favicon.ico"><link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">    a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:visited {color:RoyalBlue;} a:active {color:RoyalBlue;} </style> </head>';
echo '<body align="center" bgcolor="#fcfcfc">';
echo "<div align='center'>";
echo "<table width='100%' boder='0'><tr><td align='left'><a class='s2' style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'>回到首页</a></td><td align='right' style='line-height:1;'><a  style='color:#A1A1A1;' href='/stock1/user_homepage.php'>我的空间</a></td></tr></table></div><div align='center'>";
$result_course=mysql_query("select course from r0gbqnbc4x.user where name='$name';");
$arr_course=mysql_fetch_array($result_course);
if ($arr_course[0]!="" or $arr_course[0]!=NULL){
    echo '<br/><br/><h2 align="center" style="color:red">已选课程</h2>';
    echo "<div align='center'>";
    if ($arr_course[0]=="投资理论与实践（2017冬）"){
        echo "<br/><table><a  href='/stock1/investment_postgraduate.php'><h4>投资理论与实践</h4></a>";
        echo "<table><tr><td><a    href='/stock1/seats_inv_practice.php' style='text-decoration:none;'>选座&nbsp&nbsp</a></td>&nbsp&nbsp<td><a    href='/stock1/inv_stock_practice.php' style='text-decoration:none;'>选题</a></td></tr></table>";
    }
    if ($arr_course[0]=="财务专业英语（2017春）") {
        echo "<br/><table><a  href='/stock1/financial_english_undergraduate.php'><h4>财务专业英语</h4></a>";
        echo "<table><tr><td><a    href='/stock1/seats.php' style='text-decoration:none;'>选座&nbsp&nbsp</a></td>&nbsp&nbsp<td><a    href='/stock1/english_topic.php' style='text-decoration:none;'>选题</a></td></tr></table>";
    }
    if (strpos($arr_course[0],'论文指导')!==false) {
        echo "<br/><table><a  href='/stock1/research.php'><h4>论文指导</h4></a>";
        echo "<p ailgn='center'><a    href='/stock1/dissertation_topic.php' style='text-decoration:none;'>请登记或修改论文题目及进度</a></p>";
    }
    if ($arr_course[0]=='研究生投资学（2017春）') {
        echo "<br/><table><a  href='/stock1/investment_postgraduate.php'><h4>投资学</h4></a>";
        echo "<div align='center'><tr><td><a   href='/stock1/seats_inv.php' style='text-decoration:none;'>选座&nbsp&nbsp</a>&nbsp&nbsp</td><td><a    href='/stock1/inv_stock.php' style='text-decoration:none;'>选题</a></td></tr>";
    }
}


if ($name=='LYQ'){
    echo '<br/><br/><h2 align="center" style="color:red">所授课程</h2><br/><br/>';
    echo "<div align='center'>";
    echo "<br/><a  href='/stock1/yuanqin.php'><h4>远勤论文指导</h4></a><h4><a  href='/stock1/dissertation_topic_yq.php'>论文选题</a></h4>";
    echo "<h4 align=center>同门</h4>";
    $result=mysql_query("select username,name,course,year,stu_id,tel,email from r0gbqnbc4x.user where pass='1' and course='远勤论坛'  order by year asc,stu_id asc;");
    echo "<table  width=80%  cellspacing='0'  border='1' bordercolor='#D0D0D0' cellpadding='4' align='center'>";
    echo "<tr><th>编号</th><th>姓名</th><th>用户名</th><th>年级</th><th>学号</th><th>电话</th><th>电邮</th></tr>";
    $i=1;
    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {	printf("<tr><td>%s</td><td>%s</td><td><a  href='/stock1/user.php?name=%s'>%s</a></td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",$i,$row[0],$row[1],$row[1],$row[3],$row[4],$row[5],$row[6]);
        $i++;
    }
    echo "</table>";
}


if (!($arr_course[0]===null or $arr_course[0]==="")){
    if(strpos($arr_course[0],'论文指导')!==false){
        echo "<h4 align=center>同门</h4>";
        $result=mysql_query("select username,name,course,year,stu_id,tel,email from r0gbqnbc4x.user where pass='1' and course like '%论文指导'  order by year desc,stu_id asc;");
        echo "<table  width=80%  cellspacing='0'  border='1' bordercolor='#D0D0D0' cellpadding='4' align='center'>";
        echo "<tr><th>编号</th><th>姓名</th><th>用户名</th><th>类别</th><th>年级</th><th>学号</th><th>电话</th><th>电邮</th></tr>";
        $i=1;
        while ($row = mysql_fetch_array($result, MYSQL_NUM)) {	printf("<tr><td>%s</td><td>%s</td><td><a  href='/stock1/user.php?name=%s'>%s</a></td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",$i,$row[0],$row[1],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6]);
            $i++;

        }
    }else{
        echo "<h4 align=center>我们班</h4>";
        $result=mysql_query("select * from r0gbqnbc4x.user where course='$arr_course[0]'  order by stu_id asc, year asc;");
        echo "<table  width=80%  cellspacing='0'  border='1' bordercolor='#D0D0D0' cellpadding='4' align='center'>";
        echo "<tr><th>编号</th><th>网名</th><th>学号</th><th>性别</th><th>姓名</th><th>电话</th><th>电邮</th></tr>";
        $i=1;
        while ($row = mysql_fetch_array($result, MYSQL_NUM)) {	printf("<tr><td>%s</td><td><a  href='/stock1/user.php?name=%s'>%s</a></td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",$i,$row[1],$row[1],$row[10],$row[3],$row[4],$row[11],$row[5]);
            $i++;
        }
    }
    echo "</td></tr></table>";
}




if ($name=="建刚"){
    echo '<br/><br/><h2 align="center" style="color:red">所授课程</h2><br/><br/>';
    echo "<div align='center'>";
    echo "<table  width=50%  cellspacing='0'  cellpadding='4' align='center'>";
    echo "<tr><td><a  href='/stock1/investment_postgraduate.php'><h4>投资理论与实践（2017冬）</h4></a></td><td><h4><a    href='/stock1/seats1_inv_practice.php' style='text-decoration:none;'>考勤</a>&nbsp&nbsp<a    href='/stock1/inv_stock_practice.php' style='text-decoration:none;'>选题</a></h4></td></tr>";
    echo "<tr><td><h4><a  href='/stock1/financial_english_undergraduate.php'>财务专业英语（2017春）</a></h4></td><td><h4><a   href='/stock1/seats1.php' style='text-decoration:none;'>考勤</a>&nbsp&nbsp<a    href='/stock1/english_topic.php' style='text-decoration:none;'>选题</a></h4></td></tr>";
    echo "<tr><td><a  href='/stock1/investment_postgraduate.php'><h4>研究生投资学（2017春）</h4></a></td><td><h4><a    href='/stock1/seats1_inv.php' style='text-decoration:none;'>考勤</a>&nbsp&nbsp<a    href='/stock1/inv_stock.php' style='text-decoration:none;'>选题</a></h4></td></tr>";
    echo "<tr><td><h4><a href='/stock1/research.php' style='text-decoration:none;'>论文指导</a></h4></td><td><h4><a href='/stock1/dissertation_topic.php' style='text-decoration:none;'>论文选题</a></h4></td></tr></table>";

}


echo '</div>';



echo '</table></blockquote></blockquote></blockquote></blockquote></blockquote>';

echo '</blockquote></blockquote></blockquote><br/><br/><br/><br/><br/><br/><br/></body></html>';
?>