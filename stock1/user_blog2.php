<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');



$page='user_blog';
$name=@$_COOKIE['name'];
$name2=@$_GET['name'];

if ($name!=""){
    if ($name2=='') {$name2=@$_COOKIE['name'];}
  echo '<html lang="zh-CN">  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=1" /><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no"><meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
echo '<title>'.$name2.'的主页</title>';

    echo '<head><link rel="shortcut icon" href="/favicon.ico"><link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">    a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:active {color:#FF0000;} </style> </head>';
    echo '<body align="center" bgcolor="#fcfcfc">';
    echo "<table width='100%' boder='0'><tr><td align='left'><a class='s2' style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'>回到首页</a></td><td align='right' style='line-height:1;'><a  style='color:#A1A1A1;' href='/stock1/user_homepage.php'>我的空间</a></td></tr></table>";

    echo '<div align="center"><h2  style="color:red" align="center">'.$name2.'的留言</h2><br/>';
	$result=mysql_query("select * from bbs where name='$name2' order by time_at desc;;");
	$result2=mysql_query("select count(*) from bbs where name='$name2';");
	$arr2=mysql_fetch_array($result2);
	echo "<p style='color:#9D9D9D;'>共";
	echo $arr2[0];
	echo "条。</p>";
    while ($arr=mysql_fetch_array($result)){
		echo '<table border="0" width="70%" id="table1" bgcolor="#FFFFF4"><tr><td>';
		echo "<a style='color:#000093;' href='/stock1/user.php?name=$name'>";
		echo $arr[1];
		echo '</a><font style="color:#9D9D9D;">（';
		echo $arr[4];
		echo '）：</font><br/>&nbsp&nbsp';
		echo "<h2 align='center' style='color:red'><a target='_blank'  href='/stock1/comment.php?id=$arr[0]'>";
		echo $arr[6];
		echo "</a></h2>";
		echo $arr[2];
		$result3=mysql_query("select count(*) from comment where id0='$arr[0]';");
        $arr3=mysql_fetch_array($result3);
        echo "<br/><br/><p align='center'><a target='_blank' style='color:#9D9D9D;' href='/stock1/comment.php?id=$arr[0]'>共";
        echo $arr3[0];
        echo "条评论</a></p>";
		echo '</td></tr></table><br/>';
		if ($name === $arr[1]){
            echo "<form method='POST' action=''><p align='center'><input onclick= 'if(confirm(\"是否确定删除！\")==false)return false;' type='submit' style='width:60px;color:#A1A1A1;background:white;border:0' value='删除' name='id' id='id'/></p></form>";
            $id = @$_POST['id'];
            $sql2="DELETE FROM bbs WHERE id='$id';";
            $result2=mysql_query($sql2);
            if ($result2){
                echo "<script>window.location.href='/stock1/user.php';</script>";
            }else{
                echo '<meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
                echo "<script>alert('删除失败，请重试。');</script>";
            }
            echo "&nbsp&nbsp<a style='font-size:9pt; color:#A1A1A1;' target='_blank' href='/stock1/modify.php?id=$arr[0]'>[修改]</a></p><br/><br/>";
        }
    }
}else{
	echo "<font color='#A1A1A1'>登录后可以看见别人发言或进行留言。</font>";
}
echo '</div></body></html>';
?>