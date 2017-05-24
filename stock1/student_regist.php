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
echo '<title>学生注册</title>';
?>
<head>
<link rel="shortcut icon" href="/favicon.ico">
	<script type="text/javascript">
    function chk(password,password1){
        if (password.value!=password1.value){
            alert("两次密码输入不一致！");
            password.focus();
            return false;
        }
    }
</script>
</head>
<body bgcolor="#FFFFF4" style="background-attachment: fixed">
    <blockquote>
<?php
    echo '<body  bgcolor="#FFFFF4">';
    if ($name!=""){
        echo '<table width="100%" boder="0"><tr><td></td><td align="right" style="line-height:1;"><a  style="color:#A1A1A1;" href="/stock1/user_homepage.php"><small>欢迎您！</small>';
        echo $name;
    }else{
        echo '<table width="100%" boder="0"><tr><td></td><td align="right" style="line-height:1;"><a  style="text-decoration:none;color:#A1A1A1;" class="s2"><small>欢迎您！</small>';
    }
            echo "</a>&nbsp<a class='s2' style='color:#9D9D9D;' href='/stock1/homepage.php' style='text-decoration:none;'><small>回到首页</small></a>";
            echo '</td></tr></table>';
?>
<table align="center"><tr><td>
<h2 align='center' style='color:red'>注&nbsp&nbsp册</h2>
<form method="POST" action="/stock1/student_regist_check.php">
    <p>用&nbsp户&nbsp名：&nbsp<input  style="float left;vertical-align:middle;height:23px;font-size:17px;text-align:justify;line-height:20px;" type="text" placeholder="请尽量用真名" name="name" size="12"></p>
    <p>登录密码：&nbsp<input type="password"  style="float left;vertical-align:middle;height:23px;font-size:16px;text-align:justify;line-height:20px;" name="password" size="12"></p>
    <p>再次输入：&nbsp<input type="password"  style="float left;vertical-align:middle;height:23px;font-size:16px;text-align:justify;line-height:20px;"  name="password1" onblur='javascript:chk(password, password1);'  size="12" ></p>
    <p>真实姓名：&nbsp<input type="text"  style="float left;vertical-align:middle;height:23px;font-size:16px;text-align:justify;line-height:20px;" name="username" size="12"></p>
    <p>您的学号：&nbsp<input type="text"   style="float left;vertical-align:middle;height:23px;font-size:16px;text-align:justify;line-height:20px;" name="stu_id" size="12"></textarea></p>
    <p>性&nbsp&nbsp&nbsp&nbsp别：&nbsp男<input type="radio"  style="float left;vertical-align:middle;height:23px;font-size:16px;text-align:justify;line-height:20px;" value="男" name="gender">&nbsp&nbsp女<input type="radio" name="gender" value="女"></p>
    <p>电子邮箱：&nbsp<input type="text"  style="float left;vertical-align:middle;height:23px;font-size:16px;text-align:justify;line-height:20px;" name="email" size="12"></p>
    <p>手&nbsp机&nbsp号：&nbsp<input type="text"  style="float left;vertical-align:middle;height:23px;font-size:16px;text-align:justify;line-height:20px;" name="tel" size="12"></p>
    <p>选择班级：&nbsp<select name='course'>
    <option value=''></option>
    <option value='专业硕士论文指导'>专业硕士论文指导</option>
    <option value='学术硕士论文指导'>学术硕士论文指导</option>
    <option value=' 本科论文指导'>本科论文指导</option>
    <option value='投资理论与实践（2017冬）'>投资理论与实践(2017冬)</option>
    <option value='财务专业英语（2017春）'>财务专业英语（2017春）</option>
    <option value='研究生投资学（2017春）'>研究生投资学（2017春）</option>
    </select></p>
    <p>选择入学年份：&nbsp&nbsp<select name='year'>
    <option value=''></option>
    <option value='2016'>2017</option>
    <option value='2016'>2016</option>
    <option value='2015'>2015</option>
    <option value='2014'>2014</option>
    <option value='2013'>2013</option>
    </select></p>

    <p>自述：</p><p> <textarea  style="font-size:15px;" rows="8" name="message" cols="35" placeholder="请输入家乡、毕业院校、专业、兴趣等想让别人了解你的一些事。(此为必填内容。)"></textarea></p>

    <p> </p>
    <p> <input type="submit" value="提交"  Style="font-size:18px;" name="B1"> &nbsp&nbsp
    <input type="reset" value="重置"  Style="font-size:18px;" name="B2"></p>

    </form>
    <br/><br/>
    已经注册？<a href='/stock1/login.php' style='text-decoration:none;'>登录</a>
</td></tr></table>
    </body>

    </html>
