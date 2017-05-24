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
$sql="select password,username,email,tel,message,course,stu_id,year,name,id,gender from user where name='$name';";
$result=mysql_query($sql);
$arr=mysql_fetch_array($result);

if ($arr[5]=="" and $arr[6]=="" and $arr[7]==""){
    setcookie('student',0);
}else{
    setcookie('student',1);
}

setcookie('id',$arr[9]);
  echo '<html lang="zh-CN">  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=1" /><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no"><meta charset="utf-8" http-equiv="Content-Type" content="text/html;">';
echo '<title>修改资料</title>';
echo '<head><link rel="shortcut icon" href="/favicon.ico"><link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">    a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:active {color:#FF0000;} </style> </head>';
    echo '<body bgcolor="#fcfcfc">';
    echo "<table width='100%' boder='0'><tr><td align='left'><a class='s2' style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'>回到首页</a></td><td align='right' style='line-height:1;'><a  style='color:#A1A1A1;' href='/stock1/user_homepage.php'>我的空间</a></td></tr></table>";
?>
<div align="center">
<h2 align="center" style="color:red;">修改资料</h2>
    <form method="POST" action="/stock1/modify_password_ok.php">

    <br/><table>
    <tr><td>用户名：&nbsp<?=$arr[8]?></td></tr>
    <tr><td>新的密码：<input style="font-size:15;" type="password" name="password" value="<?=$arr[0]?>" size="20" ></td></tr>
    <tr><td>再次确认：<input style="font-size:15;"  type="password" name="password1" onkeydown='if(event.keyCode==13) javascript:chk(password, password1);' value="<?=$arr[0]?>" size="20"></td></tr>
    <tr><td>您的姓名：<input  style="font-size:15;" type="text" name="username" onkeydown='if(event.keyCode==13) javascript:chk(password, password1);' value="<?=$arr[1]?>" size="20"></input></td></tr>
<?php

    if ($arr[10]=='男')
        echo '<tr><td>性&nbsp&nbsp别：&nbsp男<input   style="float left;vertical-align:middle;height:23px;font-size:17px;text-align:justify;line-height:20px;"  type="radio" value="男"  checked name="gender">女<input   style="float left;vertical-align:middle;height:23px;font-size:17px;text-align:justify;line-height:20px;"  type="radio" name="gender" value="女"></td></tr>';

elseif ($arr[10]=='女')
    echo '<tr><td>性&nbsp&nbsp别：&nbsp男<input   style="float left;vertical-align:middle;height:23px;font-size:17px;text-align:justify;line-height:20px;"  type="radio" value="男" name="gender">女<input   style="float left;vertical-align:middle;height:23px;font-size:17px;text-align:justify;line-height:20px;" checked  type="radio" name="gender" value="女"></td></tr>';
else echo '<p>性&nbsp&nbsp别：&nbsp男<input   style="float left;vertical-align:middle;height:23px;font-size:17px;text-align:justify;line-height:20px;"  type="radio" value="男" name="gender">女<input   style="float left;vertical-align:middle;height:23px;font-size:17px;text-align:justify;line-height:20px;" type="radio" name="gender" value="女"></p>';

?>
<tr><td>手机号码：<input  style="font-size:15;" type="text" name="tel" onkeydown='if(event.keyCode==13) javascript:chk(password, password1);' value="<?=$arr[3]?>" size="20"></input></td></tr>
    <tr><td>电子邮箱：<input  style="font-size:15;" type="text" name="email" onkeydown='if(event.keyCode==13) javascript:chk(password, password1);' value="<?=$arr[2]?>" size="28" ></input></td></tr>
    <tr><td>您的留言：</p><p> <textarea  style="font-size:15;" rows="8" name="message" cols="35"  onkeydown='if(event.keyCode==13) javascript:chk(password, password1);' ><?=$arr[4]?></textarea></td></tr>
<?php
    if ($arr[5]=="" and $arr[6]=="" and $arr[7]==""){

    }else{

        echo "<tr><td>您的学号: <input style='font-size:15;' type='text'
           name='stu_id' onkeydown='if(event.keyCode==13)
           javascript:chk(password,password1);' value='";
        echo $arr[6];
        echo "' size='20' ></input></td></tr><tr><td>选择班级：&nbsp<select name='course'>";
        if ($arr[5]=="投资理论与实践（2017冬）")echo  " <option value='投资理论与实践（2017冬）' selected='selected'>投资理论与实践（2017冬）</option>";else echo " <option value='投资理论与实践（2017冬）'>投资理论与实践（2017冬）</option>";
        if ($arr[5]=="研究生投资学（2017春）")echo  " <option value='研究生投资学（2017春）' selected='selected'>研究生投资学（2017春）</option>";else echo " <option value='研究生投资学（2017春）'>研究生投资学（2017春）</option>";
        if ($arr[5]=="财务专业英语（2017春）")echo  " <option value='财务专业英语（2017春）' selected='selected'>财务专业英语（2017春）</option>";else echo " <option value='财务专业英语（2017春）'>财务专业英语（2017春）</option>";
        if ($arr[5]=="本科论文指导")echo  " <option value='本科论文指导' selected='selected'>本科论文指导</option>";else echo " <option value='本科论文指导'>本科论文指导</option>";
        if ($arr[5]=="专业硕士论文指导")echo  " <option value='专业硕士论文指导' selected='selected'>专业硕士论文指导</option>";else echo " <option value='专业硕士论文指导'>专业硕士论文指导</option>";
        if ($arr[5]=="学术硕士论文指导")echo  " <option value='学术硕士论文指导' selected='selected'>学术硕士论文指导</option>";else echo " <option value='学术硕士论文指导'>学术硕士论文指导</option>";
        echo "</select></td></tr>";
        echo "<tr><td>选择入学年份：&nbsp<select name='year'>";
        if ($arr[7]=="2016")echo  " <option value='2016' selected='selected'>2016</option>";else echo " <option value='2016'>2016</option>";
        if ($arr[7]=="2015")echo  " <option value='2015' selected='selected'>2015</option>";else echo " <option value='2015'>2015</option>";
        if ($arr[7]=="2014")echo  " <option value='2014' selected='selected'>2014</option>";else echo " <option value='2014'>2014</option>";
        if ($arr[7]=="2013")echo  " <option value='2013' selected='selected'>2013</option>";else echo " <option value='2013'>2013</option>";
        echo "</select></td></tr>";
    }
        echo "
        <tr><td align='center'><input size=10 type='submit' onclick='javascript:chk(password,password1)' style='text-align:center;margin:auto;width:70px;height:23px;font-size:18px;line-height:18px;' align='center' value='修&nbsp改' name='B1'> </a>
        </td></tr></table></form>
        <br/><br/><a href='/stock1/login.php' style='text-decoration:none;'>重新登录</a>  <br/>  <br/>  <br/><button onclick='if(confirm(\"确认删除自己？\")==true)window.location.href=\"/stock1/del_user.php\";' style='text-decoration:none;'>删除自己</button><br/>  <br/>  <br/><br/>  <br/>  <br/><br/>  <br/>  <br/>
        <br/><br/><br/>
</div>        </body>
        </html>";

?>