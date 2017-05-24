<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');
date_default_timezone_set('PRC');
$time=time();

$name1=@$_GET['name'];
$name=@$_COOKIE['name'];

if ($name1!==null and $name1!=="建刚" and $name=='建刚'){setcookie('name',$name1);$name=$name1;};

echo '<html lang="zh-CN">  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=1" /><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no"><meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
echo '<title>我的空间</title>';

echo '<head><link rel="shortcut icon" href="/favicon.ico"><link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">    a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:visited {color:RoyalBlue;} a:active {color:RoyalBlue;} </style> </head>';
echo '<body align="center" bgcolor="#fcfcfc">';
echo "<div align='center'>";
echo "<table width='100%' boder='0'><tr><td align='left'><a class='s2' style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'>回到首页</a></td><td align='right' style='line-height:1;'><a  style='color:#A1A1A1;' href='/stock1/user_homepage.php'>我的空间</a></td></tr></table></div><div align='center'>";

echo '<h2 align="center" style="color:red">我的空间</h2>';
if ($name!==null and $name!=="" and $name!=="匿名用户"){

    $sql="select username,course from r0gbqnbc4x.user where name='$name';";
    $result=mysql_query($sql);
    $arr=mysql_fetch_array($result);
    $backup=$arr[0].'homepage'.$arr[1];
    $result_time=mysql_query("select id,time_at from log where name='$name' order by id desc limit 1;");
    $arr_time=mysql_fetch_array($result_time);
    if ($name!=='建刚' and $name!=="" and $name!==null){
        if (substr($arr_time[1],0,10)!==date('Y-m-d',$time) or ((substr($arr_time[1],0,10)==date('Y-m-d',$time)) and (intval(substr(date('Y-m-d H:i',$time),11,12)) * 60 + intval(substr(date('Y-m-d H:i',$time),14,15)) - intval(substr($arr_time[1],11,12))*60-intval(substr($arr_time[1],14,15)) > 5))) mysql_query("INSERT INTO r0gbqnbc4x.log (id, name, ip, course,time_at) VALUES (NULL, '$name','$ip','$backup', NOW());");
    }
    echo "<table cellpadding='10' cellspacing='20'><tr><td><h3><a   href='/stock1/user_stock.php' style='text-decoration:none;'>自选股<small>（";
    $result2=mysql_query("select count(*) from stock where name='$name';");
    $arr2=mysql_fetch_array($result2);
    echo $arr2[0];
    echo ")</small></a></h3>";

    echo "</td><td><h3><a   href='/stock1/user_friend.php' style='text-decoration:none;'>关注<small>（";
    $result2=mysql_query("select count(*) from friend where friend='$name';");
    $arr2=mysql_fetch_array($result2);
    echo $arr2[0];
    $result3=mysql_query("select count(*) from friend where name='$name';");
    $arr3=mysql_fetch_array($result3);
    echo "+";
    echo $arr3[0];
    echo ")";

    $result_time_regard=mysql_query("select id,time_at from log where name='$name' order by id desc limit 1,2;");
    $arr_time_regard=mysql_fetch_array($result_time_regard);
    $result_regard=mysql_query("select count(*) from friend where friend='$name' and time_at>'$arr_time_regard[1]';");
    $arr_regard=mysql_fetch_array($result_regard);

    if($arr_regard[0]!=="0"){
        echo "(";
        echo $arr_regard[0];
        echo "<small>新关注</small>)";
    }
    echo "</small></a></h3>";

    echo "</td></tr><tr><td><h3><a   href='/stock1/user_comm.php' style='text-decoration:none;'>评论<small>（";
    $result2=mysql_query("select count(*) from comment where name_0='$name';");
    $arr2=mysql_fetch_array($result2);
    echo $arr2[0];
    echo "+";

    $result2=mysql_query("select count(*) from comment where name='$name';");
    $arr2=mysql_fetch_array($result2);
    echo $arr2[0];
    echo ")";

    $result4=mysql_query("select time_at from log where name='$name' order by id desc limit 1,1;");
    $arr4=mysql_fetch_array($result4);
    $sql4_="select count(*) from r0gbqnbc4x.comment where name_0='$name' and time_at>'$arr4[0]'";
    $result4_=mysql_query($sql4_);
    $arr4_=mysql_fetch_array($result4_);
    if ($arr4_[0]!=="0"){
        echo "(";
        echo $arr4_[0];
        echo "<small>新评论</small>)";
    }
    echo "</small></a></h3>";

    echo "</td><td><h3><a   href='/stock1/user_letter.php' style='text-decoration:none;'>信件<small>（";
    $result2_=mysql_query("select count(*) from letter where name2='$name';");
    $arr2_=mysql_fetch_array($result2_);
    echo $arr2_[0];
    $result3_=mysql_query("select count(*) from letter where name='$name';");
    $arr3_=mysql_fetch_array($result3_);
    echo "+";
    echo $arr3_[0];
    echo ")";


    $result_time=mysql_query("select id,time_at from log where name='$name' order by id desc limit 1,2;");
    $arr_time=mysql_fetch_array($result_time);
    $result_letter=mysql_query("select count(*) from letter where name2='$name' and time_at>'$arr_time[1]';");
    $arr_letter=mysql_fetch_array($result_letter);
    if($arr_letter[0]!=="0"){
        echo "(";
        echo $arr_letter[0];
        echo "<small>新信</small>)";
    }
    echo "</small></a></h3>";


    echo "</td></tr><tr><td><h3><a   href='/stock1/user_blog.php' style='text-decoration:none;'>留言<small>（";
    $result2=mysql_query("select count(*) from bbs where name='$name';");
    $arr2=mysql_fetch_array($result2);
    echo $arr2[0];
    echo ")</small></a></h3></td>";

    echo "</td><td><h3><a   href='/stock1/user_collect.php' style='text-decoration:none;'>收藏<small>（";
    $result2=mysql_query("select count(*) from article where name='$name';");
    $arr2=mysql_fetch_array($result2);
    echo $arr2[0];
    echo ")</small></a></h3></td></tr>";
    //echo '</table>';
    //  echo '<a style="color:#A1A1A1;" id="qt" style="white-space: nowrap;" id="qt" onclick="javascript:var qt=document.getElementById(\'qt\');qt.style.visibility=\'hidden\';var show=document.getElementById(\'show\');show.style.visibility=\'visible\';"><b>>></b></a>';
    //   echo '<div id="show" style="float:center; display:inline;color:#A1A1A1;visibility:hidden;">';
//    echo '<a style="color:#A1A1A1;" onclick="javascript:var qt=document.getElementById(\'qt\');qt.style.visibility=\'visible\';var show=document.getElementById(\'show\');show.style.visibility=\'hidden\';"><b><<</b></a>';
//    echo "<table cellpadding='10' cellspacing='20'>";
    echo "<tr><td><h3><a href='/stock1/user_note.php' style='text-decoration:none;'>记事本<small>（";
    $result2=mysql_query("select count(*) from note where name='$name';");
    $arr2=mysql_fetch_array($result2);
    echo $arr2[0];
    echo ")</small></a></h3></td><td><h3><a href='/stock1/modify_password.php' style='text-decoration:none;'>修改资料</a></h3></td></tr>";

    if ($name==='建刚'){
    echo '<tr><td><h3><a href=\'/stock1/class_homepage.php\' style=\'text-decoration:none;\'>我的课程（0+3）</a></h3></td>';
        echo '<td><h3><a href=\'/stock1/user.php?name=建刚\'>所有课程（3）</a></h3></td></tr>';
    }else{
    echo '<tr><td><h3><a href=\'/stock1/class_homepage.php\' style=\'text-decoration:none;\'>我的课程（1）</a></h3></td>';
        echo '<td><h3><a href=\'/stock1/user.php?name=建刚\'>所有课程（3）</a></h3></td></tr>';
    }

    if ($name==='建刚'){
        echo "<tr><td><h4><a href='/stock1/allusers.php' style='text-decoration:none;'>用户列表</a></h4></td>";
        echo "<td><h4><a href='/stock1/login_record.php' style='text-decoration:none;'>登录记录</a></h4></td></tr></table>";
        $sql_approve="select * from r0gbqnbc4x.user where pass='0';";
        $result_approve=mysql_query($sql_approve);

        if(count(mysql_fetch_array($result_approve))>1){
            echo "<br/><br/><br/><br/><br/><br/><h3 align=center>待批准名单</h4>";
            echo "<table  width=80%  cellspacing='0'  border='1' bordercolor='#D0D0D0' cellpadding='4' align='center'>";
            echo "<tr><th>编号</th><th>ID</th><th>name</th><th>pswd</th><th>学号</th><th>sex</th><th>realname</th><th>email</th><th>message</th><th>pass</th><th>ip</th><th>批准</th><th>删除</th></tr>";
            $i=1;
            $result_approve=mysql_query($sql_approve);
            while ($row = mysql_fetch_array($result_approve, MYSQL_NUM)) {
                printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td><a href='/stock1/pass.php?id=%s' style='text-decoration:none;'>[批准]</a></td><td><a href='/stock1/del_user.php?id=%s' style='text-decoration:none;'>[删除]</a></td></tr>",$i,$row[0],$row[1],$row[2],$row[10],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[0],$row[0]);
                $i++;
            }
            echo "</td></tr></table>";
        }
    }
}else{
    echo "<font color='#A1A1A1'>登录后可以看到自己的空间。</font>";
}
echo "</div><br/><br/></body></html>";
?>
