<html lang="zh-CN"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" ><meta charset="utf-8">
  <title>机构</title>
  <head>
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
    <link rel="shortcut icon" href="/favicon.ico">
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
<div class="main_cat">
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2434">智囊机构</h2>
      <ul class="clearfix">
        <li><a href="http://ifb.cass.cn/" target="_blank" class="">社科院金融研究所</a></li>
        <li><a href="http://www.cenet.org.cn/" target="_blank" class="">经济金融网</a></li>
	<li><a href="http://www.drc.gov.cn/" target="_blank" class="">国家发展研究中心</a></li>
	<li><a href="http://www.nber.org/" target="_blank" >NBER</a></li>
	<li><a href="http://cepr.org/" target="_blank" >CEPR</a></li>
	<li><a href="http://www.iie.com/" target="_blank" >Peterson</a></li>
	<li><a href="http://ineteconomics.org/" target="_blank" >INET</a></li>
	<li><a href="http://www.chathamhouse.org/" target="_blank" >Chathamhouse</a></li>
	<li><a href="http://bruegel.org/" target="_blank" >Bruegel</a></li>
	<li><a href="http://csis.org/" target="_blank" >CSIS</a></li>
	<li><a href="http://www.rand.org/" target="_blank" >RAND</a></li>
	<li><a href="http://asiasociety.org/" target="_blank" >AsiaSociaty</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2332">管理机构</h2>
      <ul class="clearfix">
        <li><a href="http://www.csrc.gov.cn/pub/newsite" target="_blank" class="">证券监督管委会</a></li>
        <li><a href="http://www.pbc.gov.cn" target="_blank" class="">中国人民银行</a></li>
        <li><a href="http://www.cbrc.gov.cn/index.html" target="_blank" class="">中国银监会</a></li>
        <li><a href="http://www.mofcom.gov.cn" target="_blank" class="">商务部</a></li>
        <li><a href="http://www.circ.gov.cn/web/site0" target="_blank" class="">保险监督管委会</a></li>
        <li><a href="http://www.mohrss.gov.cn" target="_blank" class="">人力资源和社会保障部</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2325">行业协会</h2>
      <ul class="clearfix">
        <li><a href="http://www.gold.org" target="_blank" class="">世界黄金协会</a></li>
        <li><a href="http://www.sge.sh/publish/sge/index.htm" target="_blank" class="">上海黄金交易所</a></li>
        <li><a href="http://www.cngold.org.cn" target="_blank" class="">中国黄金协会</a></li>
        <li><a href="http://www.bjqh.org" target="_blank" class="">北京期货商会</a></li>
        <li><a href="http://www.cfachina.org/index.php?id=1" target="_blank" class="">中国期货业协会</a></li>
        <li><a href="http://www.china-cba.net" target="_blank" class="">中国银行业协会</a></li>
        <li><a href="http://www.ndac.org.cn/cn/index.aspx" target="_blank" class="">中国国债协会</a></li>
        <li><a href="http://www.sac.net.cn" target="_blank" class="">中国证券业协会</a></li>
        <li><a href="http://www.amac.org.cn" target="_blank" class="">中国基金业协会</a></li>
      </ul>
    </div>
  </div>
</div>
</body>
</html>
