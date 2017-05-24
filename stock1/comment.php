<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');

$page='comment';
$id0=@$_GET['id'];
$name=@$_COOKIE['name'];
echo '<html lang="zh-CN">  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=1" /><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no"><meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
echo '<title>原文及评论</title>';

echo '<head><link rel="shortcut icon" href="/favicon.ico"><link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">    a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:visited {color:RoyalBlue;} a:active {color:RoyalBlue;} </style> </head>';
echo '<body align="center" bgcolor="#fcfcfc">';
echo "<table width='100%' boder='0'><tr><td align='left'><a class='s2' style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'>回到首页</a></td><td align='right' style='line-height:1;'><a  style='color:#A1A1A1;' href='/stock1/user_homepage.php'>我的空间</a></td></tr></table>";
echo '<div align="center"><h2 align="center" style="color:red">原文及评论</h2>';
$result1=mysql_query("select count(*) from comment where id0='$id0';");
$arr1=mysql_fetch_array($result1);
echo "<p style='color:#9D9D9D;'>共";
echo $arr1[0];
echo "条评论。</p>";
$result2=mysql_query("select name,time_at,message,topic,page from bbs where id='$id0';");
$arr2=mysql_fetch_array($result2);
echo '<table border="0" width="70%"><tr><td>';
echo "<a style='color:#000093;'  href='/stock1/user.php?name=";
echo $arr2[0];
echo "'>";
echo $arr2[0];
echo '</a><font style="color:#9D9D9D;">（';
echo $arr2[1];
echo '）：</font>&nbsp&nbsp<h2 style="color:red" align="center">';
echo $arr2[3];
echo "<a style='font-size:13px'  href='/stock1/stock.php?c=$arr2[4]'>&nbsp&nbsp&nbsp@页面</a></h2>";
$sql_article="select articleid from article where articleid='$id0' limit 1;";
$result_article=mysql_query($sql_article);
$arr_article=mysql_fetch_array($result_article);
if ($arr_article[0]==''){
	echo "<form method='POST' name='form1' action=''><p align='center'><input type='submit' style='width:60px;color:#A1A1A1;background:white;border:0' value='加入收藏' name='regard1' id='regard1'/></p></form>";
}else{
	echo "<form method='POST' name='form1' action=''><p align='center'><input type='submit' style='width:60px;color:#A1A1A1;background:white;border:0' value='取消收藏' name='regard1' id='regard1'/></p></form>";
}
$regard = @$_POST['regard1'];
if ($regard=="取消收藏"){
	$sql="DELETE FROM article WHERE articleid='$arr_article[0]';";
	$result=mysql_query($sql);
	if ($result){
		echo "<script>form1.regard1.value='加入收藏';</script>";
	}else{
		echo '<meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
		echo "<script>alert('取消收藏失败，请重试。');</script>";
	}
}
if ($regard=="加入收藏"){
	$sql="INSERT INTO article (id, articleid, articlename, name, time_at) VALUES (NULL, '$id0', '$arr2[3]', '$name', NOW());";
	$result=mysql_query($sql);
	if ($result){
		echo "<script>form1.regard1.value='取消收藏';</script>";
	}else{
		echo '<meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
		echo "<script>alert('加入收藏失败，请重试。');</script>";
	}
}
echo $arr2[2];
echo '</td></tr></table><br/>';
if ($name === $arr2[0] and ($name!='建刚')){
    echo
        "<a onclick= 'if(confirm(\"是否确定删除！\")==false)return false;' style='font-size:9pt;color:#A1A1A1;'  href='/stock1/del.php?id=$id0'>[删除]</a>";
    echo "&nbsp&nbsp<a style='font-size:9pt;color:#A1A1A1;'  href='/stock1/modify.php?id=$id0'>[修改]</a></p><br/><br/>";
}
if ($name === 'Jiangang'){
    echo
        "<a onclick= 'if(confirm(\"是否确定删除！\")==false)return false;' style='font-size:9pt;color:#A1A1A1;'  href='/stock1/del.php?id=$id0'>[删除]</a>";
    echo "&nbsp&nbsp<a style='font-size:9pt;color:#A1A1A1;'  href='/stock1/modify.php?id=$id0'>[修改]</a></p><br/><br/>";
}
$result=mysql_query("select * from comment where id0='$id0';");
while ($arr=mysql_fetch_array($result)){
	echo '<table border="0" width="70%"><tr><td>';
	echo "<a style='color:#000093;' href='/stock1/user.php?name=";
	echo $arr[2];
	echo "'>";
	echo $arr[2];
	echo '</a><font style="color:#9D9D9D;">（';
	echo $arr[5];
	echo '）的评论：</font><br/><br/>';
	echo $arr[3];
	echo '</td></tr></table><br/>';
	if ($name === $arr[2] and $name!='建刚'){
        echo
            "<a onclick= 'if(confirm(\"是否确定删除！\")==false)return false;' style='font-size:9pt;color:#A1A1A1;'  href='/stock1/del_comm.php?id=$arr[0]'>[删除]</a>";
        echo "&nbsp&nbsp<a style='font-size:9pt;color:#A1A1A1;'  href='/stock1/modify_comm.php?id=$arr[0]'>[修改]</a></p><br/><br/>";
	}
    if ($name=='建刚'){
        echo
            "<a onclick= 'if(confirm(\"是否确定删除！\")==false)return false;' style='font-size:9pt;color:#A1A1A1;'  href='/stock1/del_comm.php?id=$arr[0]'>[删除]</a>";
        echo "&nbsp&nbsp<a style='font-size:9pt;color:#A1A1A1;'  href='/stock1/modify_comm.php?id=$arr[0]'>[修改]</a></p><br/><br/>";
	}
}
$result1=mysql_query("SELECT gender FROM user WHERE name='$name';");
$arr1=mysql_fetch_array($result1);
if ($arr1[0]==1)	$gender='先生';else if ($arr[0]==2)	$gender='女士';else	$gender='';
echo "<font color='#8E8E8E'><p align='center'>";
echo $name;
echo $gender;
if ($name!=""){
    echo '&nbsp请评论：';
    echo '</p></font><form method="POST" action="/stock1/';
    echo $page;
    echo '.php?id=';
    echo $id0;
    echo '"><p align="center"><font size="9px"> <textarea style="font-size:16px;"  align="center" rows="13" name="comm" cols="35"></textarea></font></p>';
    echo '<p><input type="submit"  style="text-align:center;margin:auto;width:60px;height:25px;font-size:15px;line-height:20px;" align="center"  value="提交" name="B1">';
    echo '&nbsp <input  style="text-align:center;margin:auto;width:60px;height:25px;font-size:15px;line-height:20px;" align="center" type="reset" value="重置" name="B2"></form>';
    echo '</p>';
    $comm=str_replace('\n','<br/>',@$_POST['comm']);
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
        if ($result){
            echo "<script>window.location.replace('/stock1/comment.php?id=$id0')</script>";
        }else{
            echo "<script>alert('系统出现问题，请重试。)'</script>";
        }
    }
}
echo '<div/></body></html>';
?>
