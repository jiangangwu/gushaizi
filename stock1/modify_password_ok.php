<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');

$id = $_COOKIE['id'];
$name = $_COOKIE['name'];
$password = $_POST['password'];
$username = $_POST['username'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$stu_id = $_POST['stu_id'];
$tel = $_POST['tel'];
$message=$_POST['message'];
$student=$_COOKIE['student'];

if ($student==1){
    $course=$_POST['course'];
    $year=$_POST['year'];
    $stu_id=$_POST['stu_id'];
}
echo '<html lang="zh-CN"> <meta charset="utf-8" http-equiv="Content-Type" content="text/html;"><title>修改资料反馈</title><head><link rel="shortcut icon" href="/favicon.ico">';
echo '<link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">  table {center:float;display:inline;} a:link {color:#0000FF;text-decoration:none;}  a:hover {color:#FFA500;}  a:active {color:#FF0000;} </style> </head> <body bgcolor="#FFFFF4">';
echo '<table width="100%" boder="0"><tr><td></td><td align="right" style="line-height:1;"><a style="color:#A1A1A1;" href="/stock1/user.php">欢迎您！';
echo $name;
echo '</a></td></tr></table>';
echo '<blockquote><blockquote><blockquote><blockquote><blockquote><blockquote>';

$result=mysql_query("select name from r0gbqnbc4x.user where name='$name' and id!='$id';");
$arr=mysql_fetch_array($result);
if ($arr[0]==$name){
    echo "<html  lang='zh-CN'><meta charset='utf-8'><body><a href='/stock1/regist.php' style='text-decoration:none;'>注册名已被使用，请重新输入。</a></body></html>";
}elseif ($name=='' or $password=='' or $username=='' or $gender=='' or $email=='' or $tel=='' or $message==''){
    echo "信息不完整，请重新输入。";
    echo '名字：'.$name.'密码：'.$password.'用户名：'.$username.'性别'.$gender.'电邮：'.$email.'电话'.$tel.'信息'.$message;

}elseif ($student==1){
    $sql = "UPDATE r0gbqnbc4x.user SET gender='$gender',name='$name', password='$password',
  username='$username', email='$email', tel='$tel', message='$message',
  course='$course', year='$year', stu_id='$stu_id'  WHERE id='$id';";

}else{
    $sql = "UPDATE r0gbqnbc4x.user SET name='$name', gender='$gender',password='$password', username='$username', email='$email', tel='$tel', message='$message'  WHERE id='$id' LIMIT 1;";
}

$result=mysql_query($sql);
if ($result)echo "<a href='/stock1/login.php'>修改成功，请重新登录。</a>";else echo "<a href='/stock1/user.php'>修改失败，重新修改。</a>";
echo "</body></html>";
?>
