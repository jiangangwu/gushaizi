<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');


$topic=@$_GET['topic'];
$author=@$_GET['author'];
$name=@$_COOKIE['name'];
echo '<html lang="zh-CN"> <meta charset="utf-8" http-equiv="Content-Type" content="text/html;"><title>收藏文章</title><head><link rel="shortcut icon" href="/favicon.ico">';
echo '<link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">  table {align:center;center:float;display:inline;} a:link {color:#0000FF;text-decoration:none;}  a:hover {color:#FFA500;}  a:active {color:#FF0000;} </style> </head>';
echo '<body align="center" bgcolor="#FFFFF4">';
echo '<table width="100%" boder="0"><tr><td></td><td align="right" style="line-height:1;"><a target="_blank" style="color:#A1A1A1;" href="/stock1/user_homepage.php"><small>欢迎您！</small>';
echo $name;
echo '</a></td></tr></table>';
echo '<blockquote><blockquote><blockquote>';
echo '<h1 align="center" style="color:red">收藏文章</h1><br/>';
$result1=mysql_query("select count(*) from bbs where name='$author' and topic='$topic';");
$arr1=mysql_fetch_array($result1);
echo "<p style='color:#9D9D9D;'>共";
echo $arr1[0];
echo "条评论。</p>";
$result2=mysql_query("select name,time_at,message,topic,id from bbs where name='$author' and topic='$topic';");
$arr2=mysql_fetch_array($result2);
echo '<table border="0" width="70%" id="table1" bgcolor="#FFFFF4"><tr><td>';
echo "<a style='color:#000093;' target='_blank' href='/stock1/user.php?name=";
echo $author;
echo "'>";
echo $author;
echo '</a>（';
echo $arr2[1];
echo ')<font style="color:#9D9D9D;">：</font>&nbsp&nbsp<h2 style="color:red" align="center">';
echo $arr2[3];
echo '</h2>';
echo $arr2[2];

$sql_article="select articleid from article where articleid='$arr2[4]' limit 1;";
$result_article=mysql_query($sql_article);
$arr_article=mysql_fetch_array($result_article);

if ($arr_article[0]==''){
	echo "<form method='POST' name='form1' action=''><p align='center'><input type='submit' style='width:60px;color:#A1A1A1;background:white;border:0' value='加入收藏' name='regard1' id='regard1'/></p></form>";
}else{
	echo "<form method='POST' name='form1' action=''><p align='center'><input type='submit' style='width:60px;color:#A1A1A1;background:white;border:0' value='取消收藏' name='regard1' id='regard1'/></p></form>";
}
$regard = @$_POST['regard1'];
if ($regard=="取消收藏"){
	$sql="DELETE FROM article WHERE articleid='$arr2[4]';";
	$result=mysql_query($sql);
	if ($result){
		echo '<meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
		echo "<script>form1.regard1.value='加入收藏';</script>";
	}else{
		echo '<meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
		echo "<script>alert('取消收藏失败，请重试。');</script>";
	}
}
if ($regard=="加入收藏"){
	$sql="INSERT INTO article (id, articleid, articlename, name, time_at) VALUES (NULL, '$arr2[4]', '$arr2[3]', '$name', NOW());";
	$result=mysql_query($sql);
	if ($result){
		echo '<meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
		echo "<script>form1.regard1.value='取消收藏';</script>";
	}else{
		echo '<meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
		echo "<script>alert('加入收藏失败，请重试。');</script>";
	}
}        


echo '<br/><br/>&nbsp&nbsp';
echo $arr2[2];
echo '</td></tr></table><br/>';
echo "<blockquote><blockquote>";
$result=mysql_query("select * from comment where id0='$arr2[4]';");
while ($arr=mysql_fetch_array($result)){ 	
	echo '<table border="0" width="70%" id="table1" bgcolor="#FFFFF4"><tr><td>';
	echo "<a style='color:#000093;' href='/stock1/user.php?name=";
	echo $arr[2];
	echo "'>";
	echo $arr[2];
	echo '</a><font style="color:#9D9D9D;">（';
	echo $arr[5];
	echo '）的评论：</font><br/>&nbsp&nbsp';
	echo $arr[3];
	echo '</td></tr></table><br/>';
	if ($name === $arr[2] and $name!='Jiangang'){
		echo "<p align='left'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a style='font-size:6pt; color:#A1A1A1;' href='/stock1/del_comm.php?id=$arr[0]'>[删除]</a>";
		echo "<a style='font-size:6pt;color:#A1A1A1;'  href='/stock1/modify_comm.php?id=$arr[0]'>[修改]</a></p>";
	}	
	 if ($name === 'Jiangang'){
		echo "<p align='left'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a style='font-size:6pt; color:#A1A1A1;' href='/stock1/del_comm.php?id=$arr[0]'>[删除]</a>";
		echo "<a style='font-size:6pt; color:#A1A1A1;' href='/stock1/modify_comm.php?id=$arr[0]'>[修改]</a></p>";
	}	

}
echo "</blockquote></blockquote>";
$result1=mysql_query("SELECT gender FROM user WHERE name='$name';");
$arr1=mysql_fetch_array($result1);
if ($arr1[0]==1)	$gender='先生';else if ($arr[0]==2)	$gender='女士';else	$gender='';
echo "<font color='#8E8E8E'><p>";
echo $name;
echo $gender;
echo '&nbsp请评论：&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
echo '</p></font><form method="POST" action="/stock1/';
echo $page;
echo '.php?id=';
echo $id0;
echo '"><p align="center"><font size="9px"> <textarea style="font-size:18px;" align="center" rows="10" name="comm" cols="70"></textarea></font></p>';
echo '<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
echo '<input type="submit"  style="text-align:center;margin:auto;width:50px;height:25px;font-size:15px;line-height:20px;" align="center"  value="提交" name="B1">';
echo '&nbsp <input  style="text-align:center;margin:auto;width:50px;height:25px;font-size:15px;line-height:20px;" align="center" type="reset" value="重置" name="B2"></form>';
echo '</p>';
$comm=@$_POST['comm'];
$result3=mysql_query("SELECT name FROM comment WHERE comm='$comm' and name='$name';");
$arr3=@mysql_fetch_array($result3);
if($comm==""){
	}else if ($name==$arr3[0]){         
		 // echo "<script>alert('您的评论重复了！或者不要重复提交。')</script>";
	}else{
		 echo "<br/>您的评论如下：<br/>&nbsp&nbsp";
		 echo $comm;
		 $sql = "INSERT INTO comment (id, id0, name, comm, ip, time_at, name_0) VALUES (NULL, '$id0', '$name', '$comm', '$ip', NOW(), '$arr2[0]');";
		 $result=mysql_query($sql);
}
echo '</blockquote></blockquote></blockquote></body></html>';
?>
