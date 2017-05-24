<html lang="zh-CN"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" ><meta charset="utf-8">
  <title>软件</title>
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
      <h2 id="2365">炒股软件</h2>
      <ul class="clearfix">
        <li><a href="http://www.genius.com.cn" target="_blank" class="">巨灵财经</a></li>
        <li><a href="http://www.resset.cn/cn" target="_blank" class="">锐思数据</a></li>
        <li><a href="http://www.gw.com.cn/download.shtml" target="_blank" class="">大智慧</a></li>
        <li><a href="http://mobile.10jqka.com.cn" target="_blank" class="">同花顺手机炒股</a></li>
        <li><a href="http://download.10jqka.com.cn/pay/ifindganggu" target="_blank" class="">同花顺iFind</a></li>
        <li><a href="http://shop.jrj.com.cn" target="_blank" class="">金融界软件</a></li>
        <li><a href="http://www.newone.com.cn/ws/html?arg=2personal/trade/jiaoyi_6&amp;" target="_blank" class="">招商证券智远</a></li>
        <li><a href="http://data.stats.gov.cn" target="_blank" class="">国家数据</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2341">网络支付</h2>
      <ul class="clearfix">
        <li><a href="http://www.cebnet.com.cn" target="_blank" class="">中国电子银行网</a></li>
        <li><a href="http://www.chinaunionpay.com" target="_blank" class="">中国银联</a></li>
        <li><a href="https://www.alipay.com" target="_blank" class="">支付宝</a></li>
        <li><a href="http://www.yeepay.com" target="_blank" class="">易宝支付</a></li>
        <li><a href="https://www.99bill.com" target="_blank" class="">快钱</a></li>
        <li><a href="https://www.tenpay.com/v2" target="_blank" class="">财付通</a></li>
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
