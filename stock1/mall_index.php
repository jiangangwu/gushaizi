<html lang="zh-CN"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" ><meta charset="utf-8">
  <title>购物</title>
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
      <h2 id="2395">综合购物平台</h2>
      <ul class="clearfix">
        <li><a href="http://www.tmall.com" target="_blank" class="">天猫</a></li>
        <li><a href="http://www.suning.com" target="_blank" class="">苏宁易购</a></li>
        <li><a href="http://www.amazon.cn" target="_blank" class="">亚马逊</a></li>
        <li><a href="http://www.taobao.com" target="_blank" class="">淘宝网</a></li>
        <li><a href="http://www.jd.com" target="_blank" class="">京东商城</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2396">垂直商城</h2>
      <ul class="clearfix">
	<li><a href="http://www.heilanhome.cn/" target="_blank" class="">海澜之家</a></li>
	<li><a href="http://www.vancl.com" target="_blank" class="">凡客诚品</a></li>
	<li><a href="http://www.yintai.com" target="_blank" class="">银泰网</a></li>
	<li><a href="http://shop.vipshop.com/sh_new_user.html" target="_blank" class="">唯品会</a></li>
	<li><a href="http://www.yihaodian.com" target="_blank" class="">一号店</a></li>
	<li><a href="http://www.jiuxian.com/index.html" target="_blank" class="">酒仙网</a></li>
	<li><a href="http://www.masamaso.com" target="_blank" class="">玛萨玛索</a></li>
	<li><a href="http://www.ehaier.com" target="_blank" class="">海尔商城</a></li>
	<li><a href="http://www.yougou.com" target="_blank" class="">优购</a></li>
	<li><a href="http://www.lefeng.com" target="_blank" class="">乐蜂网</a></li>
	<li><a href="http://www.gome.com.cn" target="_blank" class="">国美在线</a></li>
	<li><a href="http://www.tianpin.com" target="_blank" class="">天品网</a></li>
	<li><a href="http://www.shopin.net/index.html" target="_blank" class="">上品折扣</a></li>
	<li><a href="http://www.camel.com.cn" target="_blank" class="">骆驼官方商城</a></li>
	<li><a href="http://www.shishangqiyi.com" target="_blank" class="">时尚起义</a></li>
	<li><a href="http://www.moonbasa.com" target="_blank" class="">梦芭莎</a></li>
	<li><a href="http://outlets.xiu.com" target="_blank" class="">名品特卖</a></li>
	<li><a href="http://www.5lux.com" target="_blank" class="">第五大道奢侈品</a></li>
	<li><a href="http://www.kela.cn" target="_blank" class="">珂兰钻石</a></li>
	<li><a href="http://www.saite.com" target="_blank" class="">赛特春天</a></li>
	<li><a href="http://www.lesunvip.com" target="_blank" class="">乐尚网</a></li>
	<li><a href="http://www.zocai.com" target="_blank" class="">佐卡伊</a></li>
	<li><a href="http://www.winxuan.com" target="_blank" class="">文轩网</a></li>
	<li><a href="http://www.dangdang.com" target="_blank" class="">当当网</a></li>
	<li><a href="http://www.china-pub.com" target="_blank" class="">中国互动出版社</a></li>
	<li><a href="http://www.cnave.com" target="_blank" class="">中国音像商务网</a></li>
	<li><a href="http://www.wbiao.cn" target="_blank" class="">万表网</a></li>
	<li><a href="http://www.secoo.com" target="_blank" class="">寺库</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2397">团购</h2>
      <ul class="clearfix">
        <li><a href="http://www.meituan.com" target="_blank" class="">美团</a></li>
        <li><a href="http://www.dianping.com" target="_blank" class="">大众点评</a></li>
        <li><a href="http://www.lashou.com" target="_blank" class="">拉手网</a></li>
        <li><a href="http://t.58.com" target="_blank" class="">58团购</a></li>
        <li><a href="http://www.nuomi.com" target="_blank" class="">糯米网</a></li>
        <li><a href="http://www.juqi.com" target="_blank" class="">聚齐网</a></li>
        <li><a href="http://sh.jumei.com" target="_blank" class="">聚美优品</a></li>
        <li><a href="http://www.manzuo.com" target="_blank" class="">满座网</a></li>
        <li><a href="http://www.didatuan.com" target="_blank" class="">滴答团</a></li>
      </ul>
    </div>
  </div>
</div>
</body>
</html>
