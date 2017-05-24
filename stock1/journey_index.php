<html lang="zh-CN"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" ><meta charset="utf-8">
  <title>旅游</title>
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
      <h2 id="2398">推荐旅游网站</h2>
      <ul class="clearfix">
        <li><a href="http://www.ctrip.com" target="_blank" class="">携程旅游</a></li>
        <li><a href="http://www.qunar.com" target="_blank" class="">去哪儿</a></li>
        <li><a href="http://www.ctrip.com" target="_blank" class="">携程旅行网</a></li>
        <li><a href="http://www.uzai.com" target="_blank" class="">悠哉旅游网</a></li>
        <li><a href="http://www.qunar.com" target="_blank" class="">去哪儿</a></li>
        <li><a href="http://www.elong.com" target="_blank" class="">艺龙网</a></li>
        <li><a href="http://www.zoutu.com" target="_blank" class="">走途旅游网</a></li>
        <li><a href="http://www.byecity.com" target="_blank" class="">佰程旅行网</a></li>
        <li><a href="http://jipiao.kuxun.cn" target="_blank" class="">酷讯旅游</a></li>
        <li><a href="http://www.mangocity.com" target="_blank" class="">芒果网</a></li>
        <li><a href="http://www.lvmama.com" target="_blank" class="">驴妈妈旅游网</a></li>
        <li><a href="http://www.lotour.com" target="_blank" class="">乐途旅游网</a></li>
        <li><a href="http://www.springtour.com" target="_blank" class="">春秋旅游网</a></li>
        <li><a href="http://fashion.ifeng.com" target="_blank" class="">凤凰旅游</a></li>
        <li><a href="http://www.qmango.com" target="_blank" class="">青芒果</a></li>
        <li><a href="http://www.yuelvxing.com" target="_blank" class="">悦旅行</a></li>
        <li><a href="http://www.qyer.com" target="_blank" class="">穷游</a></li>
        <li><a href="http://www.1youku.com" target="_blank" class="">壹游酷</a></li>
        <li><a href="http://www.qtour.com" target="_blank" class="">趣旅网</a></li>
        <li><a href="http://www.trip8.com" target="_blank" class="">去吧</a></li>
        <li><a href="http://192.168.0.118/tdbin/start_a.htm" target="_blank" class="">中国古镇网</a></li>
        <li><a href="http://www.lenonle.com" target="_blank" class="">乐融融</a></li>
        <li><a href="http://www.etpass.com" target="_blank" class="">快乐E行</a></li>
        <li><a href="http://www.mipang.com" target="_blank" class="">米胖旅游网</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2399">旅行社</h2>
      <ul class="clearfix">
        <li><a href="http://www.cits.com.cn" target="_blank" class="">中国国旅</a></li>
        <li><a href="http://c.ctsho.com" target="_blank" class="">中国旅行社总社</a></li>
        <li><a href="http://www.aoyou.com" target="_blank" class="">中青旅遨游网</a></li>
        <li><a href="http://www.gzl.com.cn" target="_blank" class="">广之旅</a></li>
        <li><a href="http://www.nanhutravel.com" target="_blank" class="">南湖国旅</a></li>
        <li><a href="http://www.caissa.com.cn" target="_blank" class="">上海凯撒旅游网</a></li>
        <li><a href="http://www.bjsoyo.com" target="_blank" class="">海洋国际旅行社</a></li>
        <li><a href="http://www.jinjiang.com" target="_blank" class="">锦江旅行家</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2400">航空公司</h2>
      <ul class="clearfix">
        <li><a href="http://www.airchina.com.cn" target="_blank" class="">中国国际航空</a></li>
        <li><a href="http://www.csair.com/cn/index.shtml" target="_blank" class="">南方航空</a></li>
        <li><a href="http://www.ceair.com" target="_blank" class="">东方航空</a></li>
        <li><a href="http://www.hnair.com" target="_blank" class="">海南航空</a></li>
        <li><a href="http://www.shandongair.com.cn" target="_blank" class="">山东航空</a></li>
        <li><a href="http://www.tianjin-air.com/index.jsp" target="_blank" class="">天津航空</a></li>
        <li><a href="http://www.shenzhenair.com" target="_blank" class="">深圳航空</a></li>
        <li><a href="http://www.xiamenair.com" target="_blank" class="">厦门航空</a></li>
        <li><a href="http://www.scal.com.cn" target="_blank" class="">四川航空</a></li>
        <li><a href="http://www.chinawestair.com" target="_blank" class="">西部航空</a></li>
        <li><a href="http://www.capitalairlines.com.cn/index.jsp" target="_blank" class="">首都航空</a></li>
        <li><a href="http://www.juneyaoair.com" target="_blank" class="">吉祥航空</a></li>
        <li><a href="http://www.americanairlines.cn" target="_blank" class="">美国航空</a></li>
        <li><a href="http://www.britishairways.com" target="_blank" class="">英国航空</a></li>
        <li><a href="http://www.airmacau.com.mo" target="_blank" class="">澳门航空</a></li>
        <li><a href="http://www.cathaypacific.com" target="_blank" class="">国泰航空</a></li>
        <li><a href="http://www.singaporeair.com" target="_blank" class="">新加坡航空</a></li>
        <li><a href="http://www.dragonair.com" target="_blank" class="">港龙航空</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2401">连锁酒店</h2>
      <ul class="clearfix">
        <li><a href="http://e.7daysinn.cn/market/index.php" target="_blank" class="">7天连锁酒店</a></li>
        <li><a href="http://www.homeinns.com" target="_blank" class="">如家连锁酒店</a></li>
        <li><a href="http://www.huazhu.com" target="_blank" class="">华住酒店</a></li>
        <li><a href="http://www.jinjianginns.com" target="_blank" class="">锦江之星</a></li>
        <li><a href="http://www.super8.com.cn" target="_blank" class="">速8酒店</a></li>
        <li><a href="http://www.wyn88.com" target="_blank" class="">维也纳连锁酒店</a></li>
        <li><a href="http://www.podinns.com" target="_blank" class="">布丁酒店</a></li>
        <li><a href="http://www.998.com" target="_blank" class="">格林豪泰酒店</a></li>
        <li><a href="http://www.orangehotel.com.cn" target="_blank" class="">桔子水晶酒店</a></li>
        <li><a href="http://www.motel168.com" target="_blank" class="">莫泰168</a></li>
        <li><a href="http://www.thankyou99.com" target="_blank" class="">尚客优快捷酒店</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2402">自助·游记</h2>
      <ul class="clearfix">
        <li><a href="http://www.doyouhike.net" target="_blank" class="">磨房</a></li>
        <li><a href="http://www.lvping.com" target="_blank" class="">驴评网</a></li>
        <li><a href="http://www.ilvping.com/view/Index/home.html" target="_blank" class="">旅评网</a></li>
        <li><a href="http://www.yuelvxing.com/zine/column" target="_blank" class="">旅行生活杂志</a></li>
        <li><a href="http://www.16fan.com" target="_blank" class="">十六番</a></li>
        <li><a href="http://www.lotour.com" target="_blank" class="">乐途旅游网</a></li>
      </ul>
    </div>
  </div>
</div>

</body>
</html>
