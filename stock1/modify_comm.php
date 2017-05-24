<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');


echo '<html lang="zh-CN"> <meta charset="utf-8" http-equiv="Content-Type" content="text/html;"><title>修改评论</title><head><link rel="shortcut icon" href="/favicon.ico"></head><body bgcolor="#FFFFF4" align="center" style="background-attachment: fixed">';
$id = $_GET["id"];
$result=mysql_query("select comm from comment where id=$id;");
$arr=mysql_fetch_array($result);
?>
<html lang="zh-CN"> 
<meta charset="utf-8" http-equiv="Content-Type" content="text/html;">
<title>评论修改</title>
<head>
	<link rel="shortcut icon" href="/favicon.ico">
</head>
<body>
<form method="POST" action="/stock1/modify_comm_ok.php?id=<?php echo $id;?>">
<p>您的评论内容：</p>
<p> <textarea style="font-size:16px;" rows="13" name="comm" cols="79" ><?=$arr[0]?></textarea></p>
<p> </p>
<p> <a href="/stock1/modify_comm_ok.php?id=<?=$id?>"
       style='text-decoration:none;'><input type="submit"
                                            style="text-align:center;margin:auto;width:80px;height:30px;font-size:25px;line-height:20px;"
                                            align="center"  value="确认修改" name="B1"> </a>
</p>
</form>
</body>

</html>
