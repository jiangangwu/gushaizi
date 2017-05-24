<html lang="zh-CN"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" ><meta charset="utf-8">
  <title>商业</title>
  <head>
    <link rel="shortcut icon" href="/favicon.ico">
    <style type="text/css">
      a:link {color:#A1A1A1;text-decoration:none;} /*未被访问的链接 */
      a:visited {color:#A1A1A1;text-decoration:none;} /* 已被访问的链接 */
      a:hover {color:#FFA500;} /* 鼠标指针移动到链接上 */
      a:active {color:#FF0000;} /* 正在被点击的链接 */        
      a.s2:link {color:#0000FF;text-decoration:none;} /*未被访问的链接 */
      a.s2:visited {color:#0000FF;text-decoration:none;} /* 已被访问的链接 */
      a.s2:hover {color:#FFA500;} /* 鼠标指针移动到链接上 */
      a.s2:active {color:#FF0000;} /* 正在被点击的链接 */  
    </style>
    <link href="/stock1/style.css" rel="stylesheet" type="text/css" />
  </head>
  <body  bgcolor="#FFFFF4">
    <br/>
    <div class="container">
      <div class="content clearfix">
	<!-- 侧边栏 -->
	<!-- 侧边栏 -->
	<div class="sidebar">
	  <!-- 网站分类 -->
	  <div class="rblk shadow">
	    <div class="rblk-content">
	      <div class="smart">
		<h3>金融财经</h3>
		<ul>
		  <li ><a href="/stock1/info_index.php" target="_blank">综合</a></li>
		  <li ><a href="/stock1/bank_index.php" target="_blank">银行</a></li>
		  <li ><a href="/stock1/jigou_index.php" target="_blank">机构</a></li>
		  <li ><a href="/stock1/securities_index.php" target="_blank">证券</a></li>
		  <li ><a href="/stock1/fund_index.php" target="_blank">基金</a></li>
		  <li ><a href="/stock1/futures_index.php" target="_blank">期货</a></li>
		  <li ><a href="/stock1/licai_index.php" target="_blank">理财</a></li>
		  <li ><a href="/stock1/gold_index.php" target="_blank">黄金</a></li>
		  <li ><a href="/stock1/exchange_index.php" target="_blank">外汇</a></li>
		  <li ><a href="/stock1/trust_index.php" target="_blank">信托</a></li>
		  <li ><a href="/stock1/niublog_index.php" target="_blank">牛博</a></li>
		  <li ><a href="/stock1/software_index.php" target="_blank">软件</a></li>
		</ul>
		<h3>产经商业</h3>
		<ul>
		  <li ><a href="/stock1/car_index.php" target="_blank">汽车</a></li>
		  <li ><a href="/stock1/IT_index.php" target="_blank">科技</a></li>
		  <li ><a href="/stock1/energy_index.php" target="_blank">能源</a></li>
		  <li ><a href="/stock1/estate_index.php" target="_blank">房产</a></li>
		  <li ><a href="/stock1/trade_index.php" target="_blank">商贸</a></li>
		  <li ><a href="/stock1/commerce_index.php" target="_blank">商业</a></li>
		  <li ><a href="/stock1/industry_index.php" target="_blank">行业</a></li>
		  <li ><a href="/stock1/invest_index.php" target="_blank">投融</a></li>
		</ul>
		<h3>生活服务</h3>
		<ul>
		  <li ><a href="/stock1/journey_index.php" target="_blank">旅游</a></li>
		  <li ><a href="/stock1/mall_index.php" target="_blank">购物</a></li>
		  <li ><a href="/stock1/edu_index.php" target="_blank">教育</a></li>
		  <li ><a href="/stock1/life_index.php" target="_blank">生活</a></li>
		</ul>
	      </div>
	    </div>
	  </div><!-- /.rblk -->
	</div><!-- /.sidebar -->	
	<!-- 内容页 -->
	<div class="main">
	  <div class="blk daohang shadow">
	    <div class="title">
	      <?php
		 echo '<table width="100%" boder="0"><tr>';
		 $name1=@$_COOKIE['name'];
		 if ($name1==""){
		 echo '</td><td align="right" style="line-height:1;color:#A1A1A1;"><small>欢迎您！请</small><a href="/stock1/login.php">登录</a><small>或</small><a href="/stock1/regist.php">注册</a><?php echo $name;?></a></td></tr></table>';
		 }else{
		 echo '<td style="line-height:1;color:#A1A1A1;" align="left" width="30%">&nbsp';
		 echo '</td><td align="right" style="line-height:1;color:#A1A1A1;"><a style="color:#A1A1A1;" href="/stock1/user_homepage.php" target="_blank"><small>欢迎您！</small>';
		 echo $name1;
		 echo '</a></td></tr></table>';
		 }
		 ?>
</div>
<!-- 内容页 -->
<div class="main_cat">
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2418">商业综合网站</h2>
      <ul class="clearfix">
	<li><a href="http://www.eeo.com.cn/" target="_blank" >经济观察</a></li>
	<li><a href="http://www.digitimes.com.cn" target="_blank" class="">数字商业时代</a></li>
	<li><a href="http://www.lwgcw.com" target="_blank" class="">瞭望观察网</a></li>
	<li><a href="http://www.iceo.com.cn" target="_blank" class="">中国企业家网</a></li>
	<li><a href="http://www.21cbh.com" target="_blank" class="">21世纪网</a></li>
	<li><a href="http://www.pkubr.com" target="_blank" class="">北大商业评论</a></li>
	<li><a href="http://www.ceconline.com" target="_blank" class="">世界经理人网站</a></li>
	<li><a href="http://www.forbeschina.com" target="_blank" class="">福布斯中文网</a></li>
	<li><a href="http://www.bossline.com" target="_blank" class="">世界企业家</a></li>
	<li><a href="http://www.topcfo.net" target="_blank" class="">首席财务官</a></li>
	<li><a href="http://www.windin.com" target="_blank" class="">Windin万点</a></li>
	<li><a href="http://www.yingxiao360.com" target="_blank" class="">第一赢销网</a></li>
	<li><a href="http://www.cb.com.cn" target="_blank" class="">中国经营网</a></li>
	<li><a href="http://www.tophr.net" target="_blank" class="">HR第一资源</a></li>
	<li><a href="http://www.managershare.com" target="_blank" class="">经理人分享</a></li>
	<li><a href="http://www.ebusinessreview.cn" target="_blank" class="">商业评论网</a></li>
	<li><a href="http://www.ceobrand.net" target="_blank" class="">首席执行官</a></li>
	<li><a href="http://www.sino-manager.com" target="_blank" class="">经理人网</a></li>
	<li><a href="http://i.wshang.com" target="_blank" class="">天下网商</a></li>
	<li><a href="http://www.chinavalue.net" target="_blank" class="">价值中国网</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2419">商学院</h2>
      <ul class="clearfix">
        <li><a href="http://www.rbs.org.cn" target="_blank" class="">中国人民大学商学院</a></li>
        <li><a href="http://www.bm.ust.hk/web/en-US" target="_blank" class="">香港科大商学院</a></li>
        <li><a href="http://www.gsm.pku.edu.cn/index/index.html" target="_blank" class="">光华管理学院</a></li>
        <li><a href="http://www.ceibs.edu/index_cn.shtml" target="_blank" class="">中欧国际工商学院</a></li>
        <li><a href="http://www.sem.tsinghua.edu.cn" target="_blank" class="">清华经管学院</a></li>
        <li><a href="http://www.ckgsb.edu.cn" target="_blank" class="">长江商学院</a></li>
        <li><a href="http://www.zjut.edu.cn/zjutnews/index.html" target="_blank" class="">浙江工业大学MBA</a></li>
        <li><a href="http://www.sjtumba.org" target="_blank" class="">上海交通大学MBA</a></li>
        <li><a href="http://www.fdsm.fudan.edu.cn/Aboutus/index.aspx" target="_blank" class="">复旦大学管理学院</a></li>
        <li><a href="http://www.shumba.shu.edu.cn/Default.aspx" target="_blank" class="">上海大学工商管理</a></li>
        <li><a href="http://mba.zju.edu.cn/old" target="_blank" class="">浙江大学MBA</a></li>
        <li><a href="http://www.saif.sjtu.edu.cn" target="_blank" class="">上海高级金融学院</a></li>
        <li><a href="http://www.sh-xjtu.cn" target="_blank" class="">西安交通大学EMBA</a></li>
        <li><a href="http://mba.shift.edu.cn" target="_blank" class="">上海对外经贸大学MBA</a></li>
        <li><a href="http://ibs.uibe.edu.cn/index.html" target="_blank" class="">对外经济贸易大学国际商学院</a></li>
        <li><a href="http://www.cufemba.org/index.asp" target="_blank" class="">中央财经大学MBA</a></li>
        <li><a href="http://www.nankaimba.org" target="_blank" class="">南开大学MBA</a></li>
        <li><a href="http://www.som.zju.edu.cn/cn" target="_blank" class="">浙江大学管理学院</a></li>
        <li><a href="http://www.bnet.com.cn" target="_blank" class="">BNET商学院</a></li>
      </ul>
    </div>
  </div>
</div>
</div>
<div id="gotop"><a href="#page" target="_self">返回顶部</a></div>
</div>
</div>					
</body>
</html>
