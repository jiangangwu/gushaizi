
<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');

$name=@$_COOKIE['name'];
  echo '<html lang="zh-CN">  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=1" /><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no"><meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
echo '<title>个人记事簿</title>';
echo '<head><link rel="shortcut icon" href="/favicon.ico"><link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">    a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:active {color:#FF0000;} </style> </head>';
echo '<body align="center" bgcolor="#fcfcfc">';
echo "<table width='100%' boder='0'><tr><td align='left'><a class='s2' style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'>回到首页</a></td><td align='right' style='line-height:1;'><a  style='color:#A1A1A1;' href='/stock1/user_homepage.php'>我的空间</a></td></tr></table>";
echo '<div align="center"><h2 style="color:red" align="center">个人记事</h2><small><a style="color:#A1A1A1;" href="#liuyan">记事</a></small><br/>';
    if ($name!=""){
        $result=mysql_query("select * from note where name='$name';");
        $result2=mysql_query("select count(*) from note where name='$name';");
        $arr2=mysql_fetch_array($result2);
        echo "<p style='color:#9D9D9D;'>共";
        echo $arr2[0];
        echo "条。</p>";
        while ($arr=mysql_fetch_array($result)){ 	
            echo '<table border="0" width="70%" id="table1"><tr><td style="color:red" ><h3 align="center">';
            echo $arr[2];
            echo "</h3></td></tr><tr><td>";
            echo $arr[3];
            echo "</td></tr></table><br/><br/>";
            if ($name === $arr[1] or $name!='Jiangang' or $name!='建刚'){
                echo "<p align='left'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a  onclick= 'if(confirm(\"是否确定删除！\")==false)return false;' style='font-size:9pt;color:#A1A1A1;'  target='_blank' href='/stock1/del_note.php?id=$arr[0]'>[删除]</a>";
                echo "<a  style='font-size:9pt;color:#A1A1A1;' target='_blank' href='/stock1/modify_note.php?id=$arr[0]'>[修改]</a></p>";
            }	

        }
        echo "<div id='liuyan'>";
        echo '我的记事：<br/><br/>';
        echo '<form method="POST" action="/stock1/user_note.php">';
        echo '<input type="text" name=topic placeholder="请输入标题" style="width:200px;height:35px;font-size:18px;vertical-align:middle ;float left;"/> ';
        echo '</p><p align="center"><font size="9px"> <textarea style="font-size:16px;" align="center" rows="13" name="note" cols="35"></textarea></font></p>';
        echo '<p align="center">';
        echo '<input type="submit"  style="text-align:center;margin:auto;width:60px;height:30px;font-size:20px;line-height:20px;" align="center"  onclick="refresh()" value="提交" name="B1"></p></div>';
        $topic=@$_POST['topic'];
        $note=str_replace('
','<br/><br/>',@$_POST['note']);
        echo '<script type="text/javascript">function refresh(){    windowl.location.href=window.location.href;}</script>';
        $result2=mysql_query("SELECT name FROM note WHERE note='$note' and name='$name';");
        $arr2=mysql_fetch_array($result2);
        if($note==""){
        }else if ($name==$arr2[0]){         
        }else{
            $sql4 = "INSERT INTO note (id, name, note,  ip, time_at,topic) VALUES (NULL, '$name',  '$note', '$ip', NOW(), '$topic');";
            $result4=mysql_query($sql4);
            echo "<script>window.location.replace('/stock1/user_note.php?id=$id')</script>";
        }
		
    }else{
        echo "<font color='#A1A1A1'>登录后可以看见别人发言或进行留言。</font>";
    }

echo '</div></body></html>';
?>
