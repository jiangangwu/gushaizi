
<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');

$page='disertation_postgraduate';

$name=@$_GET['name'];
$name1=@$_COOKIE['name'];
if ($name=='') {$name=$name1;}
echo '<html lang="zh-CN"> <meta charset="utf-8" http-equiv="Content-Type" content="text/html;"><title>硕士论文</title><head><link rel="shortcut icon" href="/favicon.ico">';
echo '<link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">  table {align:center;center:float;display:inline;}  a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:active {color:#FF0000;} </style> </head>';
echo '<body align="center" bgcolor="#FFFFF4">';
if ($name!=""){
    echo '<table width="100%" boder="0"><tr><td></td><td align="right" style="line-height:1;"><a target="_blank" style="color:#A1A1A1;" href="/stock1/user_homepage.php"><small>欢迎您！</small>';
    echo $name1;
}else{
        echo '<table width="100%" boder="0"><tr><td></td><td align="right" style="line-height:1;"><a target="_blank" style="color:#A1A1A1;"><small>欢迎您！</small>';
}
echo '</a></td></tr></table>';
echo '<blockquote><blockquote><blockquote>';
?>
<h1 style="color:red" align="center">硕士论文</h1><br/>
<?php
if ($name!=""){
	$result=mysql_query("select * from bbs where page='$page' order by time_at desc;");
	$result2=mysql_query("select count(*) from bbs where page='$page';");
	$arr2=mysql_fetch_array($result2);
	echo "<p style='color:#9D9D9D;'>共";
	echo $arr2[0];
	echo "条。</p>";
     while ($arr=mysql_fetch_array($result)){ 	
		echo '<table border="0" width="70%" id="table1" bgcolor="#FFFFF4"><tr><td>';
		echo "<a style='color:#000093;' href='/stock1/user.php?name=";
           echo $arr[1];
           echo "'>";
		echo $arr[1];
		echo '</a><font style="color:#9D9D9D;">（';
		echo $arr[4];
		echo '）：</font><h3 align="center">';
            echo "<a target='_blank' href='/stock1/comment.php?id=$arr[0]'>";
           echo $arr[6];
           echo "</a></h3>";
           if (strlen($arr[2])>3500){
               echo substr($arr[2],0,3500);
               echo "<br/>&nbsp&nbsp...... ......";
            }else{
                echo $arr[2];
            }
		echo "</td></tr><tr><td align='center'><p align='center'><a target='_blank' style='color:#9D9D9D;' href='/stock1/comment.php?id=$arr[0]'>";
           $result3=mysql_query("select count(*) from comment where id0='$arr[0]';");
           $arr3=mysql_fetch_array($result3);
           echo "<br/><br/>看全文及评论（共";
           echo $arr3[0];
           echo "条评论）</a></p>";
           echo '</td></tr></table><br/><br/>';
		if ($name === $arr[1] and $name!='Jiangang'){
			echo "<p align='left'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a style='font-size:6pt; color:#A1A1A1;' target='_blank' href='/stock1/del.php?id=$arr[0]'>[删除]</a>";
			echo "&nbsp&nbsp<a style='font-size:6pt;color:#A1A1A1;' target='_blank' href='/stock1/modify.php?id=$arr[0]'>[修改]</a></p>";
		}	
		 if ($name === 'Jiangang'){
			echo "<p align='left'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a style='font-size:6pt; color:#A1A1A1;' target='_blank' href='/stock1/del.php?id=$arr[0]'>[删除]</a>";
			echo "&nbsp&nbsp<a style='font-size:6pt; color:#A1A1A1;' target='_blank' href='/stock1/modify.php?id=$arr[0]'>[修改]</a></p>";
		}	

	}
	$result1=mysql_query("SELECT gender FROM user WHERE name='$name';");
	$arr1=mysql_fetch_array($result1);
	if ($arr1[0]==1)	$gender='先生';else if ($arr[0]==2)	$gender='女士';else	$gender='';
	echo "<font color='#8E8E8E'><p>";
	echo $name; 
	echo $gender;
	echo '&nbsp';
      echo '请留言：&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</font>';
      echo '<form method="POST" action="/stock1/';
	echo $page;
	echo '.php"><p align="center"><input type="text" name=topic placeholder="请输入标题" style="width:400px;height:35px;font-size:18px;vertical-align:middle ;float left;"/> ';
      echo '</p><p align="center"><font size="9px"> <textarea style="font-size:16px;" align="center" rows="17" name="message" cols="91"></textarea></font></p>';
	echo '<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
      echo '<input type="submit"  style="text-align:center;margin:auto;width:60px;height:25px;font-size:15px;line-height:20px;" align="center"  onclick="refresh()" value="提交" name="B1">';
      echo '&nbsp&nbsp <input  style="text-align:center;margin:auto;width:60px;height:25px;font-size:15px;line-height:20px;" align="center" type="reset" value="重置" name="B2"></form>';
      echo '</p>';
      $topic=@$_POST['topic'];
	$message=str_replace('
','<br/>',@$_POST['message']);
     echo '<script type="text/javascript">function refresh(){    windowl.location.href=window.location.href;}</script>';
	$result2=mysql_query("SELECT name FROM bbs WHERE message='$message' and name='$name';");
	$arr2=mysql_fetch_array($result2);
     if($message==""){
	}else if ($name==$arr2[0]){         
      //   echo "<script>alert('您的留言重复了！或者不要重复提交。')</script>";
     }else{
         $sql4 = "INSERT INTO bbs (id, name, message, page, ip, time_at,topic) VALUES (NULL, '$name',  '$message', '$page', '$ip', NOW(), '$topic');";
         $result4=mysql_query($sql4);
         if ($result4)echo "留言成功！"; else echo "留言失败，可能服务器暂时不响应，请返回重试！";
         echo "<br/>您的留言如下：<br/><table><tr><td>";
         echo "<h2 align='center' style='color:red'>";
         echo $topic;
         echo "</h2>";
         echo $message;
         echo "</td></tr></table>";
     }
		
}else{
	echo "<font color='#A1A1A1'>登录后可以看见别人发言或进行留言。</font>";
}

echo '</blockquote></blockquote></blockquote><br/><br/><br/><br/><br/><br/><br/></body></html>';
?>
