<html lang="zh-CN"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge" ><meta charset="utf-8">
<title>能源</title>
<head>
  <style>
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
      <h2 id="2414">能源网站</h2>
      <ul class="clearfix">
        <li><a href="http://www.tyn.cc" target="_blank" class="">中国太阳能网</a></li>
        <li><a href="http://www.mt.cago365.com" target="_blank" class="">365煤炭采购网</a></li>
        <li><a href="http://www.chuandong.com" target="_blank" class="">中国传动网</a></li>
        <li><a href="http://www.cnmhg.com" target="_blank" class="">中国煤工网</a></li>
        <li><a href="http://www.21tyn.com" target="_blank" class="">中国太阳能产业联盟网</a></li>
        <li><a href="http://www.bjx.com.cn" target="_blank" class="">北极星电力网</a></li>
        <li><a href="http://www.dm3.com.cn" target="_blank" class="">电煤网</a></li>
        <li><a href="http://www.windhr.net" target="_blank" class="">中国风电新闻网</a></li>
        <li><a href="http://www.stone.tm" target="_blank" class="">石汇网</a></li>
        <li><a href="http://www.sxcoalme.com" target="_blank" class="">山西煤炭设备网</a></li>
        <li><a href="http://www.cbcu.com.cn" target="_blank" class="">中国电池联盟</a></li>
        <li><a href="http://www.mtw001.com" target="_blank" class="">中国煤网</a></li>
        <li><a href="http://www.xnyauto.com" target="_blank" class="">新能源汽车网</a></li>
        <li><a href="http://www.50cnnet.com" target="_blank" class="">物联中国</a></li>
        <li><a href="http://www.gridsources.com" target="_blank" class="">国家电子产业网</a></li>
        <li><a href="http://www.cps800.com" target="_blank" class="">电源在线</a></li>
        <li><a href="http://www.nengyuan.com" target="_blank" class="">能源网</a></li>
        <li><a href="http://www.oilchem.net" target="_blank" class="">石化网</a></li>
        <li><a href="http://www.aladdiny.com" target="_blank" class="">中营网</a></li>
        <li><a href="http://www.cnal.com" target="_blank" class="">中铝网</a></li>
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
