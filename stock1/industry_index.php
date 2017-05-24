<html lang="zh-CN"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" ><meta charset="utf-8">
  <title>行业</title>
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
      <h2 id="2422">农林牧渔</h2>
      <ul class="clearfix">
        <li><a href="http://www.aweb.com.cn" target="_blank" class="">农博网</a></li>
        <li><a href="http://www.zhue.com.cn" target="_blank" class="">猪E网</a></li>
        <li><a href="http://www.farmer.com.cn" target="_blank" class="">中国农业新闻网</a></li>
        <li><a href="http://www.fert.cn" target="_blank" class="">中国化肥网</a></li>
        <li><a href="http://www.jinnong.cn" target="_blank" class="">金农网</a></li>
        <li><a href="http://www.xinnong.com" target="_blank" class="">新农网</a></li>
        <li><a href="http://www.chinabreed.com" target="_blank" class="">中国养殖网</a></li>
        <li><a href="http://www.zgny.com.cn" target="_blank" class="">中国农业网</a></li>
        <li><a href="http://www.moa.gov.cn" target="_blank" class="">中华人民共和国农业部</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2423">建筑建材</h2>
      <ul class="clearfix">
        <li><a href="http://www.jc.net.cn" target="_blank" class="">中国建材在线</a></li>
        <li><a href="http://www.ccd.com.cn" target="_blank" class="">中国建筑装饰网</a></li>
        <li><a href="http://www.tgnet.com" target="_blank" class="">天工网</a></li>
        <li><a href="http://www.co188.com" target="_blank" class="">土木在线</a></li>
        <li><a href="http://www.bmlink.com" target="_blank" class="">中国建材网</a></li>
        <li><a href="http://www.glass.com.cn" target="_blank" class="">中国玻璃网</a></li>
        <li><a href="http://www.jszhaobiao.com" target="_blank" class="">中国建设招标网</a></li>
        <li><a href="http://www.tumukeji.com" target="_blank" class="">土木科技网</a></li>
        <li><a href="http://www.buildhr.com" target="_blank" class="">建筑英才网</a></li>
        <li><a href="http://www.luwenwang.com" target="_blank" class="">鲁文建筑服务网</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2424">机械仪表</h2>
      <ul class="clearfix">
        <li><a href="http://www.jx.cn" target="_blank" class="">中国机械网</a></li>
        <li><a href="http://china.machine365.com" target="_blank" class="">中华机械网</a></li>
        <li><a href="http://www.gongkong.com" target="_blank" class="">中国工控网</a></li>
        <li><a href="http://www.bzjw.com" target="_blank" class="">中华标准件网</a></li>
        <li><a href="http://www.587766.com" target="_blank" class="">中国工业信息网</a></li>
        <li><a href="http://www.zcwz.com" target="_blank" class="">中华轴承网</a></li>
        <li><a href="http://www.jdol.com.cn" target="_blank" class="">机电在线</a></li>
        <li><a href="http://www.mechr.com" target="_blank" class="">机械英才网</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2425">医疗相关</h2>
      <ul class="clearfix">
        <li><a href="http://www.medlive.cn" target="_blank" class="">医脉通</a></li>
        <li><a href="http://www.sda.gov.cn/WS01/CL0001" target="_blank" class="">国家药监局</a></li>
        <li><a href="http://www.pharmacy.hc360.com" target="_blank" class="">慧聪制药工业网</a></li>
        <li><a href="http://www.pharmnet.com.cn" target="_blank" class="">医药网</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2426">化学环保</h2>
      <ul class="clearfix">
        <li><a href="http://china.chemnet.com" target="_blank" class="">中国化工网</a></li>
        <li><a href="http://www.chem17.com" target="_blank" class="">中国化工仪器网</a></li>
        <li><a href="http://www.chem.hc360.com" target="_blank" class="">慧聪化工网</a></li>
        <li><a href="http://www.yuanlin.com" target="_blank" class="">中国园林网</a></li>
        <li><a href="http://www.acef.com.cn" target="_blank" class="">中华环保联合会</a></li>
        <li><a href="http://www.chinaeol.net" target="_blank" class="">环境保护部</a></li>
        <li><a href="http://www.12369.gov.cn" target="_blank" class="">中国环保热线</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2427">纺织皮革</h2>
      <ul class="clearfix">
        <li><a href="http://www.texnet.com.cn" target="_blank" class="">中国纺织网</a></li>
        <li><a href="http://www.tnc.com.cn" target="_blank" class="">全球纺织网</a></li>
        <li><a href="http://www.texindex.com.cn" target="_blank" class="">中华纺织网</a></li>
        <li><a href="http://www.tex365.com" target="_blank" class="">365纺织网</a></li>
        <li><a href="http://www.cncotton.com" target="_blank" class="">中国棉花网</a></li>
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
