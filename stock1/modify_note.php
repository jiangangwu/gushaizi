<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');



$page='modify';

echo '<html lang="zh-CN"> <meta charset="utf-8" http-equiv="Content-Type" content="text/html;"><title>修改留言</title><head><link rel="shortcut icon" href="/favicon.ico"></head><body bgcolor="#FFFFF4" align="center" style="background-attachment: fixed">';
$id = $_GET["id"];
$result=mysql_query("select topic, note from note where id=$id;");
$arr=mysql_fetch_array($result);
?>
<html lang="zh-CN">
<meta charset="utf-8" http-equiv="Content-Type" content="text/html;">
<title>记事修改</title>
<head>
	<link rel="shortcut icon" href="/favicon.ico">
</head>
<body>
<form method="POST" action="/stock1/modify_note_ok.php?id=<?php echo $id;?>">
<p>您的记事内容：</p>
<p> <input type="text" name="topic" style="width:400px;height:35px;font-size:18px;vertical-align:middle ;float left;" value="<?php echo $arr[0];?>"/></p>
<p> <textarea style="font-size:16px;" rows="19" name="note" cols="91" ><?=$arr[1]?></textarea></p>
<p> </p>
<p> <a href="/stock1/modify_note_ok.php?id=<?=$id?>" style='text-decoration:none;'><input type="submit" style="text-align:center;margin:auto;width:80px;height:23px;font-size:16px;line-height:20px;" align="center"  value="确认修改" name="B1"> </a></form>
</body>

</html>
