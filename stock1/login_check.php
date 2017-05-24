<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');


$name = $_POST['name'];
$password =$_POST['password'];
setcookie('name',$name,time()+60*60*24*30);

echo "<html><title>登录反馈</title><head><meta charset='utf-8'><link rel='/shortcut icon' href='favicon.ico'><link rel='shortcut icon' href='/favicon.ico'></head><body align='center' style='background-attachment:fixed'>";

$sql="select password,pass, username,course from r0gbqnbc4x.user where name='$name';";
$result=mysql_query($sql);
$arr=mysql_fetch_array($result);
$backup=$arr[2].'login'.$arr[3];
if($password == $arr[0]){
	if ($arr[1]=='1'or $arr[1]=='0'){
		mysql_query("INSERT INTO r0gbqnbc4x.log (id, name, username, course, ip, time_at) VALUES (NULL, '$name','$arr[3]','$backup','$ip', NOW());");
        echo "<script>window.location.replace('/stock1/homepage.php')</script>";
	}else{
		echo "还没有批准，请耐心等待。";
	}
}else{
	echo "<br/><br/><p><a href='/stock1/login.php' style='text-decoration:none;'>密码不对，请重新登录。</a></p><br/><p><a href='/stock1/regist.php' style='text-decoration:none;'>或者，请先注册。</a></p>";
}
echo "</body></html>";
?>
