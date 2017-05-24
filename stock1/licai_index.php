<html lang="zh-CN"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" ><meta charset="utf-8">
  <title>理财</title>
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
      <h2 id="2349">理财网站</h2>
      <ul class="clearfix">
        <li><a href="http://finance.china.com.cn/money" target="_blank" class="">中国理财</a></li>
        <li><a href="http://money.hexun.com" target="_blank" class="">和讯理财网</a></li>
        <li><a href="http://www.amoney.com.cn" target="_blank" class="">第一理财网</a></li>
        <li><a href="http://www.wisemoney.cn/Index.html" target="_blank" class="">卓越理财</a></li>
        <li><a href="http://vip.cmbchina.com" target="_blank" class="">招商财智生活网</a></li>
        <li><a href="http://www.diyicaifu.cn/index.html" target="_blank" class="">第一财富网</a></li>
        <li><a href="http://www.diyicaifu.cn/index.html" target="_blank" class="">凡德财富</a></li>
        <li><a href="http://www.talicai.com" target="_blank" class="">她理财</a></li>
        <li><a href="http://www.myfund.com" target="_blank" class="">展恒理财</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2352">理财杂志</h2>
      <ul class="clearfix">
        <li><a href="http://www.popfinancing.com.cn" target="_blank" class="">大众理财顾问</a></li>
        <li><a href="http://www.xcf.cn" target="_blank" class="">新财富</a></li>
        <li><a href="http://act.viphow.com/magzine/czsh2013.htm" target="_blank" class="">财智生活</a></li>
        <li><a href="http://www.qianjing.cn/Index.html" target="_blank" class="">钱经杂志</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2351">保险</h2>
      <ul class="clearfix">
        <li><a href="http://www.pingan.com/index.shtml" target="_blank" class="">中国平安</a></li>
        <li><a href="http://www.cpic.com.cn/cpic/index.shtml" target="_blank" class="">太平洋保险</a></li>
        <li><a href="http://www.cntaiping.com/Channel/1557761" target="_blank" class="">中国太平</a></li>
        <li><a href="http://www.epicc.com.cn" target="_blank" class="">中国人保财险</a></li>
        <li><a href="http://www.minshenglife.com/templet/default" target="_blank" class="">民生保险</a></li>
        <li><a href="http://www.aia.com.cn/zh-cn" target="_blank" class="">友邦保险</a></li>
        <li><a href="http://www.taikang.com" target="_blank" class="">泰康人寿</a></li>
        <li><a href="http://www.picc.com" target="_blank" class="">中国人保股份公司</a></li>
        <li><a href="http://www.aviva-cofco.com.cn/web2013" target="_blank" class="">中英人寿</a></li>
        <li><a href="http://www.jiahelife.com/index.shtml" target="_blank" class="">农银人寿</a></li>
        <li><a href="http://www.sinosig.com" target="_blank" class="">阳光保险</a></li>
        <li><a href="http://www.mohrss.gov.cn" target="_blank" class="">人力资源和社会保障部</a></li>
        <li><a href="http://www.dajiabao.com" target="_blank" class="">大家保</a></li>
        <li><a href="http://www.cnpension.net" target="_blank" class="">中国养老金网</a></li>
        <li><a href="http://www.china-insurance.com" target="_blank" class="">中国保险网</a></li>
        <li><a href="http://www.xiangrikui.com" target="_blank" class="">向日葵保险网</a></li>
        <li><a href="http://www.circ.gov.cn/web/site0" target="_blank" class="">中国保险监督管理委员会</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2350">债券</h2>
      <ul class="clearfix">
        <li><a href="http://www.chinabond.com.cn" target="_blank" class="">中国债券信息网</a></li>
      </ul>
    </div>
  </div>
</div>
</body>
</html>
