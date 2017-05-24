<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');



echo '<html lang="zh-CN"> <meta charset="utf-8" http-equiv="Content-Type" content="text/html;"><title>接收</title><head><link rel="shortcut icon" href="/favicon.ico"></head><body bgcolor="#FFFFF4" align="center" style="background-attachment: fixed">';

  $name=$_POST['name'];
  
$password=$_POST['password'];
$username=$_POST['username'];
$stu_id=$_POST['stu_id'];
$gender=$_POST['gender'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$course=$_POST['course'];
$year=$_POST['year'];
$pass='0';
$message=$_POST['message'];
  
if ($name=='Jiangang' and $password=='Sien700806'){
	$result=mysql_query("select * from r0gbqnbc4x.user where pass='0';");
	while ($arr=mysql_fetch_array($result)){
		echo "enter while";
		echo '<html lang="zh-CN">';
		echo '<meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
		echo '<title>管理批准</title>';
		echo '<head><link rel="shortcut icon" href="/favicon.ico"></head>';
		echo '<body align="center" style="background-attachment: fixed">';
		echo '<br/><br/><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote><blockquote>';
		echo "<?=$name?>";
		echo '<table border="0" width="100%" id="table1" bgcolor="#FFFFF4"><tr>';
		echo '<td><p>';	echo $arr[0];echo '</p><p>';	echo $arr[1];echo '</p><p>';
		echo $arr[2];echo '</p><p>';echo $arr[3];echo '</p><p>';echo $arr[4];echo '</p><p>';
		echo $arr[5];echo '</p><p>';echo $arr[6];echo '</p><p>';echo $arr[7];echo '</p><p>';
		echo $arr[8];echo '</p><p>';echo $arr[9];echo '</p><p>';
		echo "<p><a href='/stock1/pass.php?id=$arr[0]' style='text-decoration:none;' target='_blank'>[批准]</a>";
		echo "<a href='/stock1/del_user.php?id=$arr[0]' style='text-decoration:none;' target='_blank'>[删除]</a></td>";
		echo '</td></tr></table></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote>';
	}
	echo '</body></html>';
}else{
	$result=mysql_query("select name from r0gbqnbc4x.user where name='$name';");
	$arr=mysql_fetch_array($result);
	if ($arr[0]==$name and $name!=''){
		echo "<html  lang='zh-CN'><meta charset='utf-8'><body><a href='/stock1/regist.php' style='text-decoration:none;'>注册名已被使用，请重新输入。</a></body></html>";
	}else if ($name=='' or $password=='' or $username=='' or $gender==''
	or $email=='' or $tel=='' or $stu_id=='' or $course=='' or $year=='' or $message==''){
		echo "<html><meta charset='utf-8'><body><a href='/stock1/regist.php' style='text-decoration:none;'>信息不完整，请重新输入。</a></body></html>";
	}else{
		$sql = "INSERT INTO r0gbqnbc4x.user (id, name, password, gender, message, username, stu_id, email, tel, course, year, pass, ip, time_at) VALUES (NULL, '$name', '$password', '$gender', '$message', '$username', '$stu_id','$email', '$tel', '$course', '$year', '$pass','$ip', NOW());";
		$result=mysql_query($sql);
		if ($result){
			echo "<html lang='zh-CN'><meta charset='utf-8'><body><a style='text-decoration:none;' href='/stock1/login.php'>注册成功！请登陆。</a></body></html>";
		}else{
			echo "<html lang='zh-CN'><meta charset='utf-8'><body><a href='/stock1/student_regist.php' style='text-decoration:none;'>系统出现问题，请重试。</a></body></html>";
		}
	}
}
?>
