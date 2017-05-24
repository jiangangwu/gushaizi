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
if ($name=="建刚"){
    $course[0]="论文";
}else{
    $result_course=mysql_query("select course from user where name='$name';");
    $course=mysql_fetch_array($result_course);
}
$result=mysql_query("SELECT username,name,stu_id,year,course,topic FROM user where course like '%论文指导' order by year desc, course desc,username asc;");
?>
<html lang="zh-CN">  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=1" /><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no"><meta charset="utf-8" http-equiv="Content-Type" content="text/html;"><title>毕业论文选题</title>
<head><link rel="shortcut icon" href="/favicon.ico"><link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">    a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:visited {color:RoyalBlue;} a:active {color:RoyalBlue;} </style> </head>
    
              <body style="background-attachment: fixed"><br/>
<body align="center" bgcolor="#fcfcfc"><table width='100%' boder='0'><tr><td align='left'><a class='s2' style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'>回到首页</a></td><td align='right' style='line-height:1;'><a  style='color:#A1A1A1;' href='/stock1/user_homepage.php'>我的空间</a></td></tr></table>
              <div align="center">
              <h2 style="color:red;">论文题目及进度描述</h2>
              <table width=80%  cellspacing='0'  border='1' bordercolor='#D0D0D0' cellpadding='4' align='center'>
                   <tr><th>编号</th><th>姓名</th><th>网名</th><th>学号</th><th>年级</th><th>项目</th><th>论文题目</th></tr>
<?php
              $i=1;
              while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
                  printf("<tr><td>%s</td><td>%s</td><td><a target='_blank' href='/stock1/user.php?name=%s'>%s</a></td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $i, $row[0], $row[1], $row[1], $row[2], $row[3], $row[4], $row[5]);
                  $i++;
              }
?>
              <table
              <br/><br/>
                    <form method="POST" action="/stock1/dissertation_check.php">
              题目及内容进度描述：<br/><br/> <textarea style="font-size:13px;" align="center" rows="5" name="topic" cols="70" placeholder="请输入题目，并简要描述你的论文进度（如果题目还没有定，可以输入研究领域，并在今后不断细化）。这有利于我了解你的进度，并有利于同学之间增进了解和讨论。（需要修改时请将原来的内容拷贝到此处，修改后提交。）"></textarea>
                  <br/><br/>
              <input size=50 style="font-size:16px;background:#white;" type="submit" value="提&nbsp交">
              </form>
  <br/><br/>  <br/><br/>  <br/><br/><br/><br/>  <br/><br/><br/><br/>  <br/><br/>
              </body>
              </html>