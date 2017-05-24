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
$sql="SELECT username,name,stu_id,year,course,topic FROM user where course='远勤论坛' order by course desc,year asc, username asc;";
$result=mysql_query($sql);

echo "<html lang='zh-CN'> <meta charset='utf-8' http-equiv='Content-Type' content='text/html;'><title>毕业论文选题</title>";
?>
<head>
<style>	a.s2:link {color:#A1A1A1;text-decoration:none;} /*未被访问的链接 */
  a.s2:visited {color:#A1A1A1;text-decoration:none;} /* 已被访问的链接 */
    a.s2:hover {color:#FFA500;} /* 鼠标指针移动到链接上 */
		a.s2:active {color:#FF0000;} /* 正在被点击的链接 */ 	</style>
              <link rel="shortcut icon" href="/favicon.ico">
              </head>
              <body bgcolor="#FFFFF4" style="background-attachment: fixed"><br/>
<?php
              echo "<table width='100%'  border='0'><tr><td></td><td align='right'  style='line-height:1;color:#E0E0E0;font-size:13px;'>欢迎您！<a class='s2' href='/stock1/user_homepage.php'>";
              echo $name;
              echo "</a></td></tr></table>";
?>
              <br/><br/><br/><br/>
              <div align="center">
              <h2 style="color:red;">论文题目及进度描述</h2>
              <table width=80%  cellspacing='0'  border='1' bordercolor='#D0D0D0' cellpadding='4' align='center'>
                   <tr><th>编号</th><th>用户名</th><th>姓名</th><th>学号</th><th>年级</th><th>论文题目</th></tr>
              
<?php
              $i=1;
              while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
                  printf("<tr><td>%s</td><td>%s</td><td><a target='_blank' href='/stock1/user.php?name=%s'>%s</a></td><td>%s</td><td>%s</td><td>%s</td></tr>", $i, $row[0], $row[1], $row[1], $row[2], $row[3], $row[5]);
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