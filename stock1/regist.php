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

echo '<title>注册</title>';
?>
<head>
     <style>
body:bgcolor {color:#FFFFF4;}
              body {
                  margin-left: 0px;
                  margin-top: 0px;
                  margin-right: 0px;
                  margin-bottom: 0px;
              }
              .auto_hidden {
                width:204px;border-top: 1px solid #333;
                border-bottom: 1px solid #333;
                border-left: 1px solid #333;
                border-right: 1px solid #333;
                position:absolute;
                display:none;
              }
              .auto_show {
                width:204px;
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
                border-left: 1px solid #333;
                border-right: 1px solid #333;
                position:absolute;
                z-index:9999; /* 设置对象的层叠顺序 */
                display:block;
              }
              .auto_onmouseover{
                color:#ffffff;
                background-color:highlight;
                width:100%;
              }
              .auto_onmouseout{
                color:#000000;
                width:100%;
                background-color:#ffffff;
              }


                            a.s2:link {color:#0000FF;text-decoration:none;} /*未被访问的链接 */
                                a.s2:visited {color:#0000FF;text-decoration:none;} /* 已被访问的链接 */
                                    a.s2:hover {color:#FFA500;} /* 鼠标指针移动到链接上 */
                                        a.s2:active {color:#FF0000;} /* 正在被点击的链接 */
</style>
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

            <br/><br/>
<table align="center"><tr><td><h2 align="center" style='color:red;'>注册</h2><br/>
    <form method="POST" action="/stock1/regist_check.php">
<p>用&nbsp户&nbsp名：&nbsp<input  style="float left;vertical-align:middle;height:23px;font-size:17px;text-align:justify;line-height:20px;" type="text" placeholder="请尽量使用真名" name="name" size="20"></p>
<p>登录密码：&nbsp<input   style="float left;vertical-align:middle;height:23px;font-size:17px;text-align:justify;line-height:20px;"  type="password" name="password" size="20"></p>
<p>再次输入：&nbsp<input   style="float left;vertical-align:middle;height:23px;font-size:17px;text-align:justify;line-height:20px;"  type="password" name="password1" onblur='javascript:chk(password, password1);'  size="20" ></p>
<p>真实姓名：&nbsp<input   style="float left;vertical-align:middle;height:23px;font-size:17px;text-align:justify;line-height:20px;"  type="text" name="username" size="20"></p>
<p>性&nbsp&nbsp&nbsp&nbsp别：&nbsp男<input   style="float left;vertical-align:middle;height:23px;font-size:17px;text-align:justify;line-height:20px;"  type="radio" value="男" name="gender">&nbsp&nbsp女<input   style="float left;vertical-align:middle;height:23px;font-size:17px;text-align:justify;line-height:20px;"  type="radio" name="gender" value="女"></p>
<p>电子邮箱：&nbsp<input   style="float left;vertical-align:middle;height:23px;font-size:17px;text-align:justify;line-height:20px;"  type="text" name="email" size="20"></p>
<p>手&nbsp机&nbsp号：&nbsp<input   style="float left;vertical-align:middle;height:23px;font-size:17px;text-align:justify;line-height:20px;"  type="text" name="tel" size="20"></p>
<p>自述：</p><p> <textarea  style="font-size:15px;" rows="8" name="message" cols="35" placeholder="（请尽量输入更多个人信息，以便相互了解。)"></textarea></p>
<p> </p>
<p> <input   style="float left;vertical-align:middle;height:23px;font-size:17px;text-align:justify;line-height:20px;"  type="submit" value="提交" Style="font-size:40px;" name="B1">
<input   style="float left;vertical-align:middle;height:23px;font-size:17px;text-align:justify;line-height:20px;"  type="reset" value="重置"  Style="font-size:40px;" name="B2"></p>

</form>
<br/><br/>
已经注册？<a href='/stock1/login.php' style='text-decoration:none;'>登录</a>
<br/>
<br/><a href="/stock1/student_regist.php" style="text-decoration:none;">学生通道</a>
</td></tr></table>

                <br/><br/><br/><br/><br/><br/><br/><br/></blockquote>
</body>

</html>
