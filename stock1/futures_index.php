<html lang="zh-CN"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" ><meta charset="utf-8">
  <title>期货</title>
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
      <h2 id="2356">交易所</h2>
      <ul class="clearfix">
        <li><a href="http://www.cffex.com.cn" target="_blank" class="">中国金融期货交易所</a></li>
        <li><a href="http://www.czce.com.cn/portal/index.htm" target="_blank" class="">郑州商品交易所</a></li>
        <li><a href="http://www.dce.com.cn/portal/template/index.html" target="_blank" class="">大连商品交易所</a></li>
        <li><a href="http://www.shfe.com.cn" target="_blank" class="">上海期货交易所</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2355">期货单品</h2>
      <ul class="clearfix">
        <li><a href="http://www.gm178.net" target="_blank" class="">谷盟</a></li>
        <li><a href="http://www.ometal.com" target="_blank" class="">全球金属网</a></li>
        <li><a href="http://www.cncotton.com" target="_blank" class="">中国棉花网</a></li>
        <li><a href="http://www.chinamaize.com.cn" target="_blank" class="">中国玉米网</a></li>
        <li><a href="http://www.cria.org.cn" target="_blank" class="">中国橡胶网</a></li>
        <li><a href="http://www.yntw.com" target="_blank" class="">云南糖网</a></li>
        <li><a href="http://www.metalnews.cn" target="_blank" class="">中国金属新闻网</a></li>
        <li><a href="http://news.gtxh.com" target="_blank" class="">中国钢铁现货网</a></li>
        <li><a href="http://www.cnal.com" target="_blank" class="">中铝网</a></li>
        <li><a href="http://www.ccmn.cn" target="_blank" class="">长江有色金属网</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2354">期货公司</h2>
      <ul class="clearfix">
        <li><a href="http://www.ddqh.com" target="_blank" class="">大地期货</a></li>
        <li><a href="http://www.dyqh.info" target="_blank" class="">大越期货</a></li>
        <li><a href="http://www.gfqh.com.cn" target="_blank" class="">广发期货</a></li>
        <li><a href="http://www.htfutures.com" target="_blank" class="">海通期货</a></li>
        <li><a href="http://www.ebfcn.com" target="_blank" class="">光大期货</a></li>
        <li><a href="http://www.guodu.cc" target="_blank" class="">国都期货</a></li>
        <li><a href="http://futures.pingan.com/index.shtml" target="_blank" class="">平安期货</a></li>
        <li><a href="http://yhqh.com.cn" target="_blank" class="">银河期货</a></li>
        <li><a href="http://www.zjtmqh.com" target="_blank" class="">浙商期货</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2353">期货网站</h2>
      <ul class="clearfix">
        <li><a href="http://money.163.com/futures" target="_blank" class="">网易期货</a></li>
        <li><a href="http://futures.hexun.com" target="_blank" class="">和讯期货</a></li>
        <li><a href="http://www.cifco.com.cn/index.shtml" target="_blank" class="">中期在线</a></li>
        <li><a href="http://www.qhstar.com" target="_blank" class="">期货之星</a></li>
        <li><a href="http://www.gold-futures.cn" target="_blank" class="">黄金期货网</a></li>
        <li><a href="http://www.cnffi.com" target="_blank" class="">中国期货信息网</a></li>
        <li><a href="http://finance.sina.com.cn/futuremarket" target="_blank" class="">新浪期货</a></li>
        <li><a href="http://www.guzhiwang.com" target="_blank" class="">金融期货网</a></li>
        <li><a href="http://www.xincainet.com" target="_blank" class="">新财网</a></li>
        <li><a href="http://www.qhdb.com.cn" target="_blank" class="">期货日报网</a></li>
        <li><a href="http://www.futurescn.net" target="_blank" class="">中国期货基金网</a></li>
      </ul>
    </div>
  </div>
</div>
</body>
</html>
