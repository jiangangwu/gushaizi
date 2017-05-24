<?php
     setcookie('name','');
?>
<html lang="zh-CN">  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=1" /><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no"><meta charset="utf-8" http-equiv="Content-Type" content="text/html;">

<title>登录</title>
<head><link rel="shortcut icon" href="/favicon.ico"></head>
<body align="center">
<br/>
<h1><big><div style="color:blue">登&nbsp录</div></big></h1>

<form method="POST" action="/stock1/login_check.php">

<p><input type="text" name="name" style="float left;vertical-align:middle;width:220px;height:40px;font-size:20px;text-align:justify;line-height:40px;;" ></p>
<p><input type="password" name="password" style="float left;vertical-align:middle;width:220px;height:40px;font-size:20px;text-align:justify;line-height:40px;" ><br/></p><br/>
<p> <input type="submit" value="提&nbsp&nbsp交" name="B1"
           style="text-align:center;width:100px;height:40;font-size:20px;line-height:30px;"
           align="center" > &nbsp&nbsp
<input type="reset" value="重&nbsp&nbsp置" name="B2" style="text-align:center;width:100px;height:40;font-size:20px;line-height:30px;" Align="center"></p>

</form>

<br/>
<br/>
<a href='/stock1/regist.php' target='_blank' style="text-decoration:none;"><big>注&nbsp册</big></a>
</body>
</html>
