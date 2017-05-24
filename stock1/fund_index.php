<html lang="zh-CN"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" ><meta charset="utf-8">
  <title>基金</title>
  <head>
    <link rel="shortcut icon" href="/favicon.ico">
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
      <h2 id="2347">基金公司</h2>
      <ul class="clearfix">
        <li><a href="http://www.icbccs.com.cn" target="_blank" class="">工银瑞信</a></li>
        <li><a href="http://www.gffunds.com.cn" target="_blank" class="">广发基金</a></li>
        <li><a href="http://www.founderff.com" target="_blank" class="">方正富邦基金</a></li>
        <li><a href="http://www.fadfunds.com" target="_blank" class="">富安达基金</a></li>
        <li><a href="http://www.fullgoal.com.cn" target="_blank" class="">富国基金</a></li>
        <li><a href="http://www.scfund.com.cn" target="_blank" class="">东吴基金</a></li>
        <li><a href="http://www.orient-fund.com" target="_blank" class="">东方基金</a></li>
        <li><a href="http://www.ctfund.com" target="_blank" class="">财通基金</a></li>
        <li><a href="http://www.dcfund.com.cn/dcjj/index.jhtml" target="_blank" class="">大成基金</a></li>
        <li><a href="http://www.bosera.com/index.html" target="_blank" class="">博时基金</a></li>
        <li><a href="http://www.ccfund.com.cn/home.htm" target="_blank" class="">长城基金</a></li>
        <li><a href="http://www.csfunds.com.cn" target="_blank" class="">长盛基金</a></li>
        <li><a href="http://www.cxfund.com.cn" target="_blank" class="">长信基金</a></li>
        <li><a href="http://www.byfunds.com" target="_blank" class="">宝盈基金</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2348">基金网站</h2>
      <ul class="clearfix">
        <li><a href="http://www.etf88.com" target="_blank" class="">易天富</a></li>
        <li><a href="http://www.fundxy.com" target="_blank" class="">基金互动网</a></li>
        <li><a href="http://fund.10jqka.com.cn" target="_blank" class="">爱基金</a></li>
        <li><a href="http://www.tttz.com/main.php" target="_blank" class="">金基网</a></li>
        <li><a href="http://fund.eastmoney.com" target="_blank" class="">天天基金网</a></li>
        <li><a href="http://www.cifco.com.cn/index.shtml" target="_blank" class="">中期在线</a></li>
      </ul>
    </div>
  </div>
</div>
</div>
</body>
</html>
