<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');



$page='content';

$id=@$_GET['id'];
if ($name=='') {$name=@$_COOKIE['name'];}
echo '<html lang="zh-CN"> <meta charset="utf-8" http-equiv="Content-Type" content="text/html;"><title>留言</title><head><link rel="shortcut icon" href="/favicon.ico">';
echo '<link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">  table {align:center;center:float;display:inline;} a:link {color:#0000FF;text-decoration:none;}  a:hover {color:#FFA500;}  a:active {color:#FF0000;} </style> </head>';
echo '<body align="center" bgcolor="#FFFFF4">';
if ($name!=""){
    echo '<table width="100%" boder="0"><tr><td></td><td align="right" style="line-height:1;"><a target="_blank" style="color:#A1A1A1;" href="/stock/user_homepage.php">欢迎您！';
    echo $name;
}else{
        echo '<table width="100%" boder="0"><tr><td></td><td align="right" style="line-height:1;"><a target="_blank" style="color:#A1A1A1;">欢迎您！';
}
echo '</a></td></tr></table>';
echo '<blockquote><blockquote><blockquote>';
?>
<h1 align="center">留言</h1><br/>
<?php
if ($name!=""){
	$result=mysql_query("select * from bbs where id='$id';");
	$result2=mysql_query("select count(*) from bbs where page='$page';");
	$arr2=mysql_fetch_array($result2);
	echo "<p style='color:#9D9D9D;'>共";
	echo $arr2[0];
	echo "条。</p>";
     while ($arr=mysql_fetch_array($result)){ 	
		echo '<table border="0" width="70%" id="table1" bgcolor="#FFFFF4"><tr><td>';
		echo "<a style='color:#000093;' href='/stock/user.php?name=";
           echo $arr[1];
           echo "'>";
		echo $arr[1];
		echo '</a><font style="color:#9D9D9D;">（';
		echo $arr[4];
		echo '）：</font><br/>&nbsp&nbsp';
		echo $arr[2];
		echo "</td></tr><tr><td align='right'><a target='_blank' style='color:#9D9D9D;' href='/stock/comment.php?id=$arr[0]'>";
           $result3=mysql_query("select count(*) from comment where id0='$arr[0]';");
           $arr3=mysql_fetch_array($result3);
           echo "评论（";
           echo $arr3[0];
           echo "）</a>&nbsp&nbsp&nbsp&nbsp&nbsp";
           echo '</td></tr></table><br/>';
		if ($name === $arr[1] and $name!='Jiangang'){
			echo "<p align='left'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a style='font-size:6pt; color:#A1A1A1;' href='/stock/del.php?id=$arr[0]'>[删除]</a>";
			echo "<a style='font-size:6pt;color:#A1A1A1;'  href='/stock/modify.php?id=$arr[0]'>[修改]</a></p>";
		}	
		 if ($name === 'Jiangang'){
			echo "<p align='left'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a style='font-size:6pt; color:#A1A1A1;' href='/stock/del.php?id=$arr[0]'>[删除]</a>";
			echo "<a style='font-size:6pt; color:#A1A1A1;' href='/stock/modify.php?id=$arr[0]'>[修改]</a></p>";
		}	

	}
	$result1=mysql_query("SELECT gender FROM user WHERE name='$name';");
	$arr1=mysql_fetch_array($result1);
	if ($arr1[0]==1)	$gender='先生';else if ($arr[0]==2)	$gender='女士';else	$gender='';
	echo "<font color='#8E8E8E'><p>";
	echo $name; 
	echo $gender;
	echo '&nbsp评论：&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p></font><form method="POST" action="/stock/';
	echo $page;
	echo '.php"><p align="center"><font size="9px"> <textarea style="font-size:18px;" align="center" rows="13" name="comm" cols="65"></textarea></font></p>';
	echo '<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
      echo '<input type="submit"  style="text-align:center;margin:auto;width:50px;height:25px;font-size:15px;line-height:20px;" align="center"  value="提交" name="B1">';
      echo '&nbsp <input  style="text-align:center;margin:auto;width:50px;height:25px;font-size:15px;line-height:20px;" align="center" type="reset" value="重置" name="B2"></form>';
      echo '</p>';
	$comm=@$_POST['comm'];
	$result2=mysql_query("SELECT name FROM comment WHERE comm='$comm' and name='$name';");
	$arr2=mysql_fetch_array($result2);
     if($comm==""){
	}else if ($name==$arr2[0]){         
      //   echo "<script>alert('您的留言重复了！或者不要重复提交。')</script>";
     }else{
         echo "<br/>您的留言如下：<br/>&nbsp&nbsp";
         echo $comm;
         $sql4 = "INSERT INTO comment (id, id0, name, comm, ip, time_at) VALUES (NULL, 'id', '$name',  '$comm', '$ip', NOW());";
         $result4=mysql_query($sql4);
     }
		
}else{
	echo "<font color='#A1A1A1'>登录后可以看见别人发言或进行留言。</font>";
}

echo '</blockquote></blockquote></blockquote></body></html>';
?>
