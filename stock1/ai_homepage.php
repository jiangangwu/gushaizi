<?php
$host='rds48z5k409g0753v62j.mysql.rds.aliyuncs.com';
$user='r0gbqnbc4x';
$password='19760209';
$db='r0gbqnbc4x';
$connect=mysql_connect($host,$user,$password);
mysql_select_db($db);
mysql_query("set names 'utf8'");
$ip=getenv('REMOTE_ADDR');

$page='ai_homepage';

$name=@$_GET['name'];
$name1=@$_COOKIE['name'];
if ($name=='') {$name=$name1;}
echo '<html lang="zh-CN"> <meta charset="utf-8" http-equiv="Content-Type" content="text/html;"><title>软饮料</title><head><link rel="shortcut icon" href="/favicon.ico">';
echo '<link rel="apple-touch-icon" href="/custom_icon.png"><style type="text/css">  table {align:center;center:float;display:inline;} a {target:_blank} a:link {color:RoyalBlue;text-decoration:none;}  a:hover {color:#FFA500;}  a:active {color:#FF0000;} </style> </head>';
echo '<body align="center" bgcolor="#FFFFF4">';
?>
<table width="100%" boder='0'><tr><td>
&nbsp;<a   href="/stock1/ai.php" target="_blank">AI</a>
&nbsp;<a   href="/stock1/robot.php" target="_blank">Robot</a>
&nbsp;<a   href="/stock1/sf.php" target="_blank">SF</a>
&nbsp;<a   href="/stock1/share.php" target="_blank">Share</a>
<?php
if ($name!=""){
    echo '</td><td align="right" style="line-height:1;"><a target="_blank" style="color:#A1A1A1;" href="/stock1/user_homepage.php"><small>欢迎您！</small>';
    echo $name1;
}else{
        echo '</td><td align="right" style="line-height:1;"><a target="_blank" style="color:#A1A1A1;"><small>欢迎您！</small>';
}
echo '</a></td></tr></table>';
echo '<blockquote><blockquote><blockquote>';
?>
<br/>
<table cellspacing="25px">
<tr><td width="30%" align="left">
<h3><a href="http://www.microsoft.com/zh-cn/mobile/campaign-cortana/" target="_blank">&nbsp&nbspMicrosoft: Cortana</h3>
&nbsp&nbsp&nbsp<img src="/stock1/cortana.jpg"></img></a>
<br/><br/><p>
（中文名：微软小娜）是微软发布的全球第一款个人智能助理。它“能够了解用户的喜好和习惯”，
“帮助用户进行日程安排、问题回答等”。
Cortana 可以说是微软在机器学习和人工智能领域方面的尝试。微软想实现的事情是，
手机用户与小娜的智能交互，不是简单地基于存储式的问答，
而是对话。它会 记录用户的行为和使用习惯，利用云计算、搜索引擎和“非结构化数据”分析，
读取和“学习”包括手机中的文本文件、电子邮件、图片、视频等数据，来理解用户 的语义和语境，从而实现人机交互。
一个很简单的例子就是，假如手机中记录的日程显示将要参加会议，那么不需任何操作，Cortana 到时就会自动将手机调至会议状态。
这也是微软的研究，从个人计算机（personal computer）走向个人计算（personal computing）的开始。<br/><br/><br/><br/>
</p></td><td  width="30%"  align="left">
<h3><a href="http://www.tensorflow.org" target="_blank">&nbsp&nbspGoogle: TensorFlow</h3>
&nbsp&nbsp&nbsp<img src="/stock1/tensorflow.jpg"  height="150" width="190"></img></a>
<br/><br/><br/><br/>
<p>TensorFlow是谷歌基于DistBelief进行研发的第二代人工智能学习系统，其命名来源于本身的运行原理。Tensor（张量）意味着N维数组，Flow（流）意味着基于数据流图的计算，TensorFlow为张量从图象的一端流动到另一端计算过程。TensorFlow是将复杂的数据结构传输至人工智能神经网中进行分析和处理过程的系统。
TensorFlow可被用于语音识别或照片识别等多项机器深度学习领域，通过对2011年开发的深度学习基础架构DistBelief进行了各方面的改进，它可在小到一部智能手机、大到数千台数据中心服务器的各种设备上运行。TensorFlow将完全开源，任何人都可以用。
</p><br/><br/><br/><br/>
</td><td width="30%"  align="left"  target="_blank"><h3><a href="https://openai.com/blog/introducing-openai/" target="_blank">&nbsp&nbsp&nbspOpenAI</h3>
&nbsp&nbsp&nbsp<img src="/stock1/openai.jpg" height="150" width="170"></img></a>
<br/><br/><br/><br/>
<p>2015年12月12日，特斯拉CEO Elon Musk在推特上正式宣布启动非盈利人工智能项目OpenAI，立誓公开研究成果，包括代码和专利，和世人共享。一些人担心一旦人工智能超越了人类智能，会发生像电影《终结者》那样的末日之灾。而OpenAI所做的一切就是为了防止这种恐惧成真。
包括Elon Musk、LinkedIn 创始人Reid Hoffman、PayPal联合创始人Peter Thiel、YC创始合伙人Jessica Livingston在内的许多科技名人，
OpenAI在本质上是一个研究实验室。建立这个实验室的目的在于监督企业和政府，以免这两个群体依靠超级人工智能系统过度榨取利润或者谋取权力，并以此压制市民。
</p><br/><br/><br/><br/>
</td></tr></table>
</big>
</blockquote></blockquote>
<br/><br/><br/>
</body>
</html>