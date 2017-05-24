<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');


$name1=@$_GET['name'];
$name=@$_COOKIE['name'];
if ($name1!='') {
	$name=$name1;
	setcookie('name',$name1);
}
echo '<html lang="zh-CN"> <meta charset="utf-8" http-equiv="Content-Type" content="text/html;"><title>科研</title><head><link rel="shortcut icon" href="/favicon.ico">';
echo '<link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">  table {align:center;center:float;display:inline;} a {target:_blank} a:visited {color:RoyalBlue;} a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:active {color:#FF0000;} </style> </head>';
echo '<body align="center" bgcolor="#FFFFF4">';
if ($name!=""){
    echo '<table width="100%" boder="0"><tr><td></td><td align="right" style="line-height:1;"><font style="color:#A1A1A1;"><small>欢迎您！</small>';
    echo $name1;
	echo "&nbsp</font>";
	echo "<a style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'>回到首页</a>";
}else{
        echo '<table width="100%" boder="0"><tr><td></td><td align="right" style="line-height:1;"><a target="_blank" style="color:#A1A1A1;"><small>欢迎您！</small>';
}
echo '</a></td></tr></table>';
echo '<h1 align="center" style="color:red">科  研</h1>';
echo '<br/><br/><br/><br/><br/><br/>';
echo "<table cellpadding='10' cellspacing='20'><tr><td width='30%'><h2><a  target='_blank' href='/stock1/research.php' style='text-decoration:none;'>公司金融</a></h2>";
echo "</td><td width='30%'><h2><a  target='_blank' href='/stock1/ai.php' style='text-decoration:none;'>人工智能</a></h2>";
echo "</td></tr><tr><td width='30%'><h2><a  target='_blank'
      href='/stock1/dissertation_postgraduate.php'
      style='text-decoration:none;'>论文指导</a></h2></td></tr></table>";
if ($name=='Jiangang'){
	$result=mysql_query("select * from r0gbqnbc4x.user where pass='0';");
	while ($arr=mysql_fetch_array($result)){
		echo '<html lang="zh-CN">';
		echo '<meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
		echo '<title>管理批准</title>';
		echo '<head><link rel="shortcut icon" href="/favicon.ico"></head>';
		echo '<body align="center" style="background-attachment: fixed">';
		echo '<br/><br/><blockquote><blockquote><blockquote><blockquote><blockquote>';
		echo "<?=$name?>";
		echo '<table border="0" width="100%" id="table1" bgcolor="#FFFFF4"><tr>';
		echo '<td><p>';
		echo $arr[0];
		echo '</p><p>';
		echo $arr[1];
		echo '</p><p>';
		echo $arr[2];
		echo '</p><p>';
		echo $arr[3];
		echo '</p><p>';
		echo $arr[4];
		echo '</p><p>';
		echo $arr[5];
		echo '</p><p>';
		echo $arr[6];
		echo '</p><p>';
		echo $arr[7];
		echo '</p><p>';
		echo $arr[8];
		echo '</p><p>';
		echo $arr[9];
		echo '</p><p>';
		echo "<p><a href='/stock1/pass.php?id=$arr[0]' target='_blank' style='text-decoration:none;' target='_blank'>[批准]</a>";
		echo "<a href='/stock1/del_user.php?id=$arr[0]' target='_blank' style='text-decoration:none;' target='_blank'>[删除]</a></td>";
		echo '</td></tr></table></blockquote></blockquote></blockquote></blockquote></blockquote>';
	}
}	
echo '</blockquote></blockquote></blockquote></body></html>';
?>
</blockquote></blockquote></blockquote></blockquote></blockquote></blockquote>
</body>
</html>
