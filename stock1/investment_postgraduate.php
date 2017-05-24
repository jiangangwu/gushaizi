
<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');

$page='investment_postgraduate';

$name=@$_GET['name'];
$name1=@$_COOKIE['name'];
if ($name=='') {$name=$name1;}
if ($name=='') {$name='匿名用户';}
echo '<html lang="zh-CN">  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=1" /><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no"><meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
echo '<title>投资学</title>';
echo '<head><link rel="shortcut icon" href="/favicon.ico"><link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">    a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:active {color:#FF0000;} </style> </head>';
echo '<body align="center" bgcolor="#fcfcfc">';
echo "<table width='100%' align='center' boder='0'><tr><td align='left'><a class='s2' style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'>回到首页</a></td><td align='right' style='line-height:1;'><a  style='color:#A1A1A1;' href='/stock1/user_homepage.php'>我的空间</a></td></tr></table><div align=''center'>";
?>
<h2 style="color:red" align="center">投资学</h2><small><br/><a style="color:#A1A1A1;" href="#liuyan">留言</a><br/></small><br/>
   <div align='center'> 2017年春季学期
<br/><br/>
课程时间：每周二上午1到4节课
    <br/>课程地点：嘉定一教209
<br/><br/>
坐班时间:每周二下午14：10-15：50<br/>周二晚上18：55-20：45<br/><br/>坐班地点：办公室（经管412办公）
<br/><br/>

 </div>
<?php
if ($name!=""){
	$result=mysql_query("select * from bbs where page='$page' order by time_at desc;");
	$result2=mysql_query("select count(*) from bbs where page='$page';");
	$arr2=mysql_fetch_array($result2);
	echo "<p style='color:#9D9D9D;'>共";
	echo $arr2[0];
	echo "条。</p>";
     echo '<table border="0" align="center" width="70%">';
     while ($arr=mysql_fetch_array($result)){
		echo "<tr><td><a style='color:#000093;' href='/stock1/user.php?name=";
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
           echo "条评论）</a>&nbsp&nbsp";
           echo '</td></tr></table><br/>';
		if ($name === $arr[1] and $name!='Jiangang'){
			echo
"<a onclick= 'if(confirm(\"是否确定删除！\")==false)return false;' style='font-size:9pt;color:#A1A1A1;' target='_blank' href='/stock1/del.php?id=$arr[0]'>[删除]</a>";
			echo "&nbsp&nbsp<a style='font-size:9pt;color:#A1A1A1;' target='_blank' href='/stock1/modify.php?id=$arr[0]'>[修改]</a></p><br/><br/>";
		}
		 if ($name === 'Jiangang'){
			echo
"<a onclick= 'if(confirm(\"是否确定删除！\")==false)return false;' style='font-size:9pt;color:#A1A1A1;' target='_blank' href='/stock1/del.php?id=$arr[0]'>[删除]</a>";
			echo "&nbsp&nbsp<a style='font-size:9pt; color:#A1A1A1;' target='_blank' href='/stock1/modify.php?id=$arr[0]'>[修改]</a></p><br/><br/>";
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
	echo '.php"><div id="liuyan" align="center"><input type="text" name=topic placeholder="请输入标题" style="width:250px;height:25px;font-size:15px;vertical-align:middle ;float left;"/> ';
      echo '</div><p align="center"><font size="9px"> <textarea style="font-size:16px;" align="center" rows="10" name="message" cols="35"></textarea></font></p>';
	echo '<p><input size=10 type="submit"  style="text-align:center;margin:auto;width:60px;height:20px;font-size:15px;line-height:15px;" align="center"  onclick="refresh()" value="提交" name="B1">';
      echo '&nbsp&nbsp <input size=10 style="text-align:center;margin:auto;width:60px;height:20px;font-size:15px;line-height:15px;" align="center" type="reset" value="重置" name="B2"></form>';
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
         if ($result4)echo "<script>window.location.replace('/stock1/investment_postgraduate.php')</script>"; else echo "留言失败，可能服务器暂时不响应，请返回重试！";
     }

}else{
	echo "<font color='#A1A1A1'>登录后可以看见别人发言或进行留言。</font>";
}
echo '</div><br/><br/><br/><br/></body></html>';
?>
