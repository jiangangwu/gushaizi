<html lang="zh-CN"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" ><meta charset="utf-8">
  <title>IT</title>
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
      <h2 id="2421">科技媒体</h2>
      <ul class="clearfix">
        <li><a href="http://www.techweb.com.cn" target="_blank" class="">TechWeb</a></li>
        <li><a href="http://www.pintu360.com" target="_blank" class="">品途网</a></li>
        <li><a href="http://www.geekpark.net" target="_blank" class="">极客公园</a></li>
        <li><a href="http://www.3wcoffee.com" target="_blank" class="">3WCoffee</a></li>
        <li><a href="http://xianguo.com" target="_blank" class="">鲜果</a></li>
        <li><a href="http://techorange.com" target="_blank" class="">科技报橘</a></li>
        <li><a href="http://www.ittime.com.cn" target="_blank" class="">IT周刊</a></li>
        <li><a href="http://www.itchaguan.com" target="_blank" class="">IT茶馆</a></li>
        <li><a href="http://www.prnasia.com/blog" target="_blank" class="">美通说传播</a></li>
        <li><a href="https://www.upyun.com?s=jrall" target="_blank" class="">又拍云</a></li>
        <li><a href="http://android.eoe.cn" target="_blank" class="">移动开发者社区</a></li>
        <li><a href="http://www.mediadreamworks.net" target="_blank" class="">传媒梦工厂</a></li>
        <li><a href="http://www.aliyun.com" target="_blank" class="">阿里云</a></li>
        <li><a href="http://tech.sina.com.cn" target="_blank" class="">新浪科技</a></li>
        <li><a href="http://tech.163.com" target="_blank" class="">网易科技</a></li>
        <li><a href="http://www.huxiu.com" target="_blank" class="">虎嗅网</a></li>
        <li><a href="http://www.leiphone.com" target="_blank" class="">雷锋网</a></li>
        <li><a href="http://www.comebit.com" target="_blank" class="">ComeBit</a></li>
        <li><a href="http://www.tmtpost.com" target="_blank" class="">钛媒体</a></li>
        <li><a href="http://www.iheima.com" target="_blank" class="">i黑马</a></li>
        <li><a href="http://www.36kr.com" target="_blank" class="">36氪</a></li>
      </ul>
    </div>
  </div>
</div>
</body>
</html>
