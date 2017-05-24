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
$gender=$_POST['gender'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$message=$_POST['message'];
$pass='0';

$result=mysql_query("select name from r0gbqnbc4x.user where name='$name';");
$arr=mysql_fetch_array($result);
if ($arr[0]==$name and $name!=''){
    echo "<html  lang='zh-CN'><meta charset='utf-8'><body><a href='/stock1/regist.php' style='text-decoration:none;'>注册名已被使用，请重新输入。</a></body></html>";
}elseif ($name=='' or $password=='' or $username=='' or $gender=='' or $email=='' or $tel=='' or $message==''){
    echo "<html><meta charset='utf-8'><body><a href='/stock1/regist.php' style='text-decoration:none;'>信息不完整，请重新输入。</a></body></html>";
}else{
    $sql = "INSERT INTO r0gbqnbc4x.user (id, name, password, gender, username, email, message, pass, ip, time_at,tel) VALUES (NULL, '$name', '$password', '$gender', '$username', '$email','$message', '$pass','$ip', NOW(),'$tel');";
    $result=mysql_query($sql);
    if ($result){
        echo "<html lang='zh-CN'><meta charset='utf-8'><body><a style='text-decoration:none;' href='/stock1/login.php'>注册成功！请登陆。</a></body></html>";
        #			echo "<html lang='zh-CN'><meta charset='utf-8'><body><a style='text-decoration:none;' href='/stock1/login.php'>注册成功！请耐心等待管理员批准。批准后方可登陆。</a></body></html>";
    }else{
        echo "<html lang='zh-CN'><meta charset='utf-8'><body><a href='/stock1/regist.php' style='text-decoration:none;'>系统出现问题，请重试。</a></body></html>";
    }
}

?>
