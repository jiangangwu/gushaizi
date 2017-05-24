<html lang="zh-CN"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" ><meta charset="utf-8">
  <title>银行</title>
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
      <h2 id="2430">政策性</h2>
      <ul class="clearfix">
        <li><a href="http://www.cdb.com.cn/web" target="_blank" class="">国家开发银行</a></li>
        <li><a href="http://www.adbc.com.cn" target="_blank" class="">中国农业发展银行</a></li>
        <li><a href="http://www.eximbank.gov.cn" target="_blank" class="">中国进出口银行</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2431">国商行</h2>
      <ul class="clearfix">
        <li><a href="http://www.icbc.com.cn/icbc" target="_blank" class="">工商银行</a></li>
        <li><a href="http://www.abchina.com/cn" target="_blank" class="">农业银行</a></li>
        <li><a href="http://www.boc.cn" target="_blank" class="">中国银行</a></li>
        <li><a href="http://bank.ecitic.com" target="_blank" class="">中信银行</a></li>
        <li><a href="http://www.cmbchina.com" target="_blank" class="">招商银行</a></li>
        <li><a href="http://www.bankcomm.com/BankCommSite/cn/index.html" target="_blank" class="">交通银行</a></li>
        <li><a href="http://www.cmbc.com.cn" target="_blank" class="">民生银行</a></li>
        <li><a href="http://www.spdb.com.cn/chpage/c1" target="_blank" class="">浦发银行</a></li>
        <li><a href="http://www.cib.com.cn/netbank/cn/index.html" target="_blank" class="">兴业银行</a></li>
        <li><a href="http://www.ccb.com/cn/home/index.html" target="_blank" class="">建设银行</a></li>
        <li><a href="http://www.hxb.com.cn/chinese/index.html" target="_blank" class="">华夏银行</a></li>
        <li><a href="http://www.cebbank.com/Site/ceb/cn" target="_blank" class="">光大银行</a></li>
        <li><a href="http://www.cgbchina.com.cn" target="_blank" class="">广发银行</a></li>
        <li><a href="http://bank.pingan.com/index.shtml" target="_blank" class="">平安银行</a></li>
        <li><a href="http://www.cbhb.com.cn/bhbank/S101/index.htm" target="_blank" class="">渤海银行</a></li>
        <li><a href="http://www.psbc.com/portal/zh_CN/index.html" target="_blank" class="">邮储银行</a></li>
        <li><a href="http://www.czbank.com" target="_blank" class="">浙商银行</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2432">城商行</h2>
      <ul class="clearfix">
        <li><a href="http://www.bankofbeijing.com.cn" target="_blank" class="">北京银行</a></li>
        <li><a href="http://www.bankofshanghai.com" target="_blank" class="">上海银行</a></li>
        <li><a href="http://bank.pingan.com/index.shtml" target="_blank" class="">平安银行</a></li>
        <li><a href="http://www.nbcb.com.cn" target="_blank" class="">宁波银行</a></li>
        <li><a href="http://www.jsbchina.cn" target="_blank" class="">江苏银行</a></li>
        <li><a href="http://www.bank-of-tianjin.com.cn/Site/Home/CN" target="_blank" class="">天津银行</a></li>
        <li><a href="http://www.hccb.com.cn" target="_blank" class="">杭州银行</a></li>
        <li><a href="http://www.hsbank.com.cn" target="_blank" class="">徽商银行</a></li>
        <li><a href="http://www.hrbcb.com.cn" target="_blank" class="">哈尔滨银行</a></li>
        <li><a href="http://www.bocd.com.cn" target="_blank" class="">成都银行</a></li>
        <li><a href="http://www.jlbank.com.cn" target="_blank" class="">吉林银行</a></li>
        <li><a href="http://www.shengjingbank.com.cn" target="_blank" class="">盛京银行</a></li>
        <li><a href="http://www.njcb.com.cn" target="_blank" class="">南京银行</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2433">农商行</h2>
      <ul class="clearfix">
        <li><a href="http://www.wjrcb.com" target="_blank" class="">吴江农商行</a></li>
        <li><a href="http://www.zrcbank.com/cms" target="_blank" class="">张家港农商行</a></li>
        <li><a href="http://www.ksrcb.cn" target="_blank" class="">昆山农商行</a></li>
        <li><a href="http://www.tcrcb.com" target="_blank" class="">太仓农商行</a></li>
        <li><a href="http://www.4001961200.com/portal/zh_CN/home/index.html#1" target="_blank" class="">深圳农商行</a></li>
        <li><a href="http://www.csrcbank.com" target="_blank" class="">常熟农商行</a></li>
        <li><a href="http://www.jybank.com.cn" target="_blank" class="">江阴农商行</a></li>
        <li><a href="http://www.wrcb.com.cn" target="_blank" class="">无锡农商行</a></li>
        <li><a href="http://www.srcb.com/html/index.html" target="_blank" class="">上海农商行</a></li>
        <li><a href="http://www.bjrcb.com" target="_blank" class="">北京农商行</a></li>
        <li><a href="http://www.syrcb.net" target="_blank" class="">江苏射阳农商行</a></li>
        <li><a href="http://www.trcbank.com.cn" target="_blank" class="">天津农商行</a></li>
        <li><a href="http://www.sdebank.com/cms/S101_21/index.html" target="_blank" class="">顺德农商行</a></li>
        <li><a href="http://www.whrcbank.com" target="_blank" class="">武汉农商行</a></li>
        <li><a href="http://www.grcbank.com/index.html" target="_blank" class="">广州农商行</a></li>
        <li><a href="http://www.tjbhb.com" target="_blank" class="">天津滨海农商行</a></li>
        <li><a href="http://www.hfrcbc.com" target="_blank" class="">合肥科技农商行</a></li>
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
