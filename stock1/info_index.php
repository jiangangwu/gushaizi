<html lang="zh-CN"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" ><meta charset="utf-8">
  <title>综合</title>
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
      <h2 id="2369">金融期刊</h2>
      <ul class="clearfix">
        <li><a href="http://www.ceweekly.cn" target="_blank" class="">经济网</a></li>
        <li><a href="http://www.mycfz.com" target="_blank" class="">创富志</a></li>
        <li><a href="http://www.ihongpan.com" target="_blank" class="">证券市场周刊</a></li>
        <li><a href="http://www.fortunechina.com/magazine/zazhi_index.htm" target="_blank" class="">财富杂志</a></li>
        <li><a href="http://www.xcf.cn" target="_blank" class="">新财富</a></li>
        <li><a href="http://www.sdjrzz.com" target="_blank" class="">时代金融</a></li>
        <li><a href="http://fw.xinhua08.com" target="_blank" class="">金融世界</a></li>
        <li><a href="http://www.cnfinance.cn/magzi" target="_blank" class="">中国金融</a></li>
	<li><a href="http://www.cyz.org.cn/" target="_blank" >创业者</a></li>
	<li><a href="http://www.sino-manager.com/" target="_blank" >经理人网</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2358">财经综合</h2>
      <ul class="clearfix">
        <li><a href="http://www.21so.com" target="_blank" class="">21财经搜索</a></li>
        <li><a href="http://www.nbd.com.cn" target="_blank" class="">每经网</a></li>
        <li><a href="http://www.ccstock.cn" target="_blank" class="">中国资本证券网</a></li>
        <li><a href="http://www.eastmoney.com" target="_blank" class="">东方财富网</a></li>
        <li><a href="http://finance.qq.com" target="_blank" class="">腾讯财经</a></li>
        <li><a href="http://finance.sina.com.cn" target="_blank" class="">新浪财经</a></li>
        <li><a href="http://www.caijing.com.cn" target="_blank" class="">财经网</a></li>
        <li><a href="http://hkcaijing.com" target="_blank" class="">香港财经网</a></li>
        <li><a href="http://bbs.jjxj.org" target="_blank" class="">经济学家论坛</a></li>
        <li><a href="http://www.yicai.com" target="_blank" class="">一财网</a></li>
        <li><a href="http://www.windin.com" target="_blank" class="">万点网</a></li>
        <li><a href="http://www.ftchinese.com" target="_blank" class="">FT中文网</a></li>
        <li><a href="http://hkcaijing.com" target="_blank" class="">香港财经网</a></li>
        <li><a href="http://www.p5w.net" target="_blank" class="">全景网</a></li>
      </ul>
    </div>
  </div>
  <div class="blk detail shadow">
    <div class="cnt hig">
      <dl id="ls1">
	<dt><a href="/stock1/jigou_index.php" target="_blank" >管理机构</a></dt>
	<dd class="l">
	  <a href="http://www.pbc.gov.cn/" target="_blank" >中国人民银行</a>
	  <a href="http://www.csrc.gov.cn/pub/newsite/" target="_blank" >证券监管委员会</a>
	  <a href="http://www.cbrc.gov.cn/index.html" target="_blank" >银行业监管委员会</a>
	  <a href="http://www.sac.net.cn/" target="_blank" >证券业协会</a>
	  <a href="http://jrall.com/hao/html/jigou/" target="_blank" >商务部</a>
	</dd>
	<dd class="m"><a href="/stock1/jigou_index.php" target="_blank">更多 &raquo;</a></dd>
      </dl>
      <dl class="alt"id="ls2">
	<dt><a href="/stock1/bank_index.php" target="_blank">银  行</a></dt>
	<dd class="l">
	  <a href="http://www.icbc.com.cn/icbc/" target="_blank" >工商银行</a>
	  <a href="http://www.cmbchina.com/" target="_blank" >招商银行</a>
	  <a href="http://www.cmbc.com.cn/" target="_blank" >民生银行</a>
	  <a href="http://www.boc.cn/" target="_blank" >中国银行</a>
	  <a href="http://bank.pingan.com/index.shtml" target="_blank" >平安银行</a>
	  <a href="http://www.eximbank.gov.cn/" target="_blank" >进出口银行</a>
	</dd>
	<dd class="m"><a href="/stock1/bank_index.php" target="_blank">更多 &raquo;</a></dd>
      </dl>
      <dl id="ls3">
	<dt><a href="/stock1/securities_index.php" target="_blank">证券公司</a></dt>
	<dd class="l">
	  <a href="http://www.newone.com.cn/" target="_blank" >招商证券</a>
	  <a href="http://www.dfzq.com.cn/" target="_blank" >东方证券</a>
	  <a href="http://www.ebscn.com/index.html" target="_blank" >光大证券</a>
	  <a href="http://www.cicc.com.cn/CICC/chinese/index.htm" target="_blank" >中金公司</a>
	  <a href="http://www.cs.ecitic.com/" target="_blank" >中信证券</a>
	  <a href="http://www.chinastock.com.cn/" target="_blank" >银河证券</a>
	</dd>
	<dd class="m"><a href="/stock1/securities_index.php" target="_blank">更多 &raquo;</a></dd>
      </dl>
      <dl class="alt"id="ls4">
	<dt><a href="/stock1/securities_index.php" target="_blank">证券网站</a></dt>
	<dd class="l">
	  <a href="http://www.stockstar.com/" target="_blank" >证券之星</a>
	  <a href="http://www.cnfol.com/" target="_blank" >中金在线</a>
	  <a href="http://www.cnstock.com/" target="_blank" >中国证券网</a>
	  <a href="http://stock.zgjrw.com/index/" target="_blank" >中国金融网</a>
	  <a href="http://www.p5w.net/index.htm" target="_blank" >全景网</a>
	  <a href="http://www.secutimes.com/" target="_blank" >证券时报网</a>
	</dd>
	<dd class="m"><a href="/stock1/securities_index.php" target="_blank">更多 &raquo;</a></dd>
      </dl>
      <dl id="ls5">
	<dt><a href="/stock1/fund_index.php" target="_blank">基金公司</a></dt>
	<dd class="l">
	  <a href="http://www.icbccs.com.cn/" target="_blank" >工银瑞信</a>
	  <a href="http://www.ccfund.com.cn/home.htm" target="_blank" >长城基金</a>
	  <a href="http://www.fullgoal.com.cn/indexweb.do?utm_inner=a0" target="_blank" >富国基金</a>
	  <a href="http://www.gffunds.com.cn/" target="_blank" >广发基金</a>
	  <a href="http://www.orient-fund.com/" target="_blank" >东方基金</a>
	  <a href="http://www.byfunds.com/" target="_blank" >宝盈基金</a>
	</dd>
	<dd class="m"><a href="/stock1/fund_index.php" target="_blank">更多 &raquo;</a></dd>
      </dl>
      <dl class="alt"id="ls6">
	<dt><a href="/stock1/fund_index.php" target="_blank">基金网站</a></dt>
	<dd class="l">
	  <a href="http://fund.eastmoney.com/" target="_blank" >天天基金网</a>
	  <a href="http://www.etf88.com/" target="_blank" >易天富基金网</a>
	  <a href="http://fund.10jqka.com.cn/" target="_blank" >爱基金</a>
	  <a href="http://www.tttz.com/main.php" target="_blank" >金基网</a>
	  <a href="http://www.cifco.com.cn/index.shtml" target="_blank" >中期在线</a>
	</dd>
	<dd class="m"><a href="/stock1/fund_index.php" target="_blank">更多 &raquo;</a></dd>
      </dl>
      <dl id="ls7">
	<dt><a href="/stock1/futures_index.php" target="_blank">期货公司</a></dt>
	<dd class="l">
	  <a href="http://www.zjtmqh.com/" target="_blank" >浙商期货</a>
	  <a href="http://futures.pingan.com/index.shtml" target="_blank" >平安期货</a>
	  <a href="http://www.ebfcn.com/" target="_blank" >光大期货</a>
	  <a href="http://www.htfutures.com/" target="_blank" >海通期货</a>
	  <a href="http://www.gfqh.com.cn/" target="_blank" >广发期货</a>
	  <a href="http://www.dyqh.info/" target="_blank" >大越期货</a>
	</dd>
	<dd class="m"><a href="/stock1/futures_index.php" target="_blank">更多 &raquo;</a></dd>
      </dl>
      <dl class="alt"id="ls8">
	<dt><a href="/stock1/futures_index.php" target="_blank">期货综合</a></dt>
	<dd class="l">
	  <a href="http://futures.hexun.com/" target="_blank" >和讯期货</a>
	  <a href="http://www.cffex.com.cn/" target="_blank" >期货交易所</a>
	  <a href="http://www.futurescn.net/" target="_blank" >中国期货基金网</a>
	  <a href="http://futures.cnfol.com/" target="_blank" >中金期货</a>
	  <a href="http://www.shfe.com.cn/" target="_blank" >上海期货交易所</a>
	  <a href="http://www.cfachina.org/" target="_blank" >中国期货业协会</a>
	</dd>
	<dd class="m"><a href="/stock1/futures_index.php" target="_blank">更多 &raquo;</a></dd>
      </dl>
      <dl id="ls9">
	<dt><a href="/stock1/gold_index.php" target="_blank">黄金网站</a></dt>
	<dd class="l">
	  <a href="http://www.gold58.com/" target="_blank" >BEST黄金投资</a>
	  <a href="http://www.gold9999.cn/" target="_blank" >黄金交易网</a>
	  <a href="http://www.godsignal.com/" target="_blank" >黄金投资策略</a>
	  <a href="http://www.hjplw.com/" target="_blank" >黄金评论网</a>
	  <a href="http://www.8884321.com/" target="_blank" >汇金网</a>
	</dd>
	<dd class="m"><a href="/stock1/gold_index.php" target="_blank">更多 &raquo;</a></dd>
      </dl>
      <dl class="alt"id="ls10">
	<dt><a href="/stock1/software_index.php" target="_blank">三方支付</a></dt>
	<dd class="l">
	  <a href="http://www.chinaunionpay.com/" target="_blank" >中国银联</a>
	  <a href="http://www.chinapnr.com/" target="_blank" >汇付天下</a>
	  <a href="https://www.alipay.com/" target="_blank" >支付宝</a>
	  <a href="http://www.yeepay.com/" target="_blank" >易宝支付</a>
	  <a href="https://www.99bill.com/" target="_blank" >快钱</a>
	  <a href="https://www.tenpay.com/v2/" target="_blank" >财付通</a>
	</dd>
	<dd class="m"><a href="/stock1/software_index.php" target="_blank">更多 &raquo;</a></dd>
      </dl>
      <dl id="ls11">
	<dt><a href="/stock1/licai_index.php" target="_blank">理财</a></dt>
	<dd class="l">
	  <a href="http://www.picc.com/" target="_blank" >PICC</a>
	  <a href="http://www.amoney.com.cn/" target="_blank" >第一理财网</a>
	  <a href="http://www.popfinancing.com.cn/" target="_blank" >大众理财顾问</a>
	  <a href="http://www.diyicaifu.cn/index.html" target="_blank" >第一财富网</a>
	  <a href="http://www.wisemoney.cn/Index.html" target="_blank" >卓越理财</a>
	  <a href="http://www.aia.com.cn/zh-cn/" target="_blank" >友邦保险</a>
	</dd>
	<dd class="m"><a href="/stock1/licai_index.php" target="_blank">更多 &raquo;</a></dd>
      </dl>
      <dl class="alt"id="ls12">
	<dt><a href="/stock1/invest_index.php" target="_blank">投融资</a></dt>
	<dd class="l">
	  <a href="http://invest.china.com.cn/" target="_blank" >投资中国</a>
	  <a href="http://www.roadoor.com/" target="_blank" >融道网</a>
	  <a href="http://www.11186.com/" target="_blank" >融众网</a>
	  <a href="http://www.tzt.cn/" target="_blank" >投资堂</a>
	  <a href="http://www.cyz.org.cn/" target="_blank" >创业者</a>
	  <a href="http://www.aasmart.com/" target="_blank" >智汇财富</a>
	  <a href="http://www.rong800.cn" target="_blank" >融800</a>
	</dd>
	<dd class="m"><a href="/stock1/invest_index.php" target="_blank">更多 &raquo;</a></dd>
      </dl>
      <dl id="ls13">
	<dt><a href="/stock1/commerce_index.php" target="_blank">商业</a></dt>
	<dd class="l">
	  <a href="http://www.iceo.com.cn/" target="_blank" >中国企业家网</a>
	  <a href="http://www.chinavalue.net/" target="_blank" >价值中国</a>
	  <a href="http://www.forbeschina.com/" target="_blank" >福布斯中文</a>
	  <a href="http://www.21cbh.com/" target="_blank" >21世纪网</a>
	  <a href="http://www.lwgcw.com/" target="_blank" >瞭望观察网</a>
	</dd>
	<dd class="m"><a href="/stock1/commerce_index.php" target="_blank">更多 &raquo;</a></dd>
      </dl>
      <dl class="alt"id="ls14">
	<dt><a href="/stock1/software_index.php" target="_blank">炒股软件</a></dt>
	<dd class="l">
	  <a href="http://www.gw.com.cn/download.shtml" target="_blank" >大智慧</a>
	  <a href="http://www.resset.cn/cn/" target="_blank" >锐思数据</a>
	  <a href="http://mobile.10jqka.com.cn/" target="_blank" >同花顺手机炒股</a>
	  <a href="http://download.10jqka.com.cn/pay/ifindganggu/" target="_blank" >iFind</a>
	  <a href="http://shop.jrj.com.cn/" target="_blank" >金融界软件</a>
	  <a href="http://www.newone.com.cn/ws/html?arg=2personal/trade/jiaoyi_6&" target="_blank" >招商证券智远</a>
	</dd>
	<dd class="m"><a href="/stock1/software_index.php" target="_blank">更多 &raquo;</a></dd>
      </dl>
    </div>
  </div><!-- /.blk -->
</div>
</div>
<div id="gotop"><a href="#page" target="_self">返回顶部</a></div>
</div>
</div>
</div>
</body>
</html>
