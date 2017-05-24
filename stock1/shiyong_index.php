<html lang="zh-CN">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" ><meta charset="utf-8">
  <title>实用站点</title>
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
<div class="box">
  <div class="site-list shadow">
    <h2 id="2434">实用站点</h2>
    <ul class="clearfix">
      <li><a target="_blank" href="http://www.google.com/">谷 歌</a></li>
      <li><a href="https://www.quora.com/" target="_blank">Quora</a></li>
      <li><a target="_blank" href="https://www.washingtonpost.com/">WP</a></li>
      <li><a href="http://www.zhihu.com/" target="_blank">知 乎</a></li>
      <li><a target="_blank" href="http://edition.cnn.com/">CNN</a></li>
      <li><a target="_blank" href="http://www.nbcnews.com/">NBC</a></li>
      <li><a target="_blank" href="http://www.ft.com/">FT</a></li>
      <li><a target="_blank" href="http://time.com/">Time</a></li>
      <li><a target="_blank" href="http://www.forbes.com/">Forbes</a></li>
      <li><a target="_blank" href="http://www.reuters.com/">Reuters</a></li>
      <li><a target="_blank" href="http://www.nationalgeographic.com.cn/">NG</a></li>
      <li><a target="_blank" href="http://www.wsj.com/">WSJ</a></li>
      <li><a target="_blank" href="http://www.net.cn/">必 应</a></li>
      <li><a target="_blank" href="http://www.baidu.com">百 度</a></li>
      <li><a target="_blank" href="http://www.sogou.com/">搜 狗</a></li>
      <li><a target="_blank" href="http://mail.qq.com">QQ邮箱</a></li>
      <li><a target="_blank" href="http://translate.google.cn/">在线翻译</a></li>
      <li><a target="_blank" href="http://www.weiyun.com/">微 云</a></li>
      <li><a target="_blank" href="http://vdisk.weibo.com/">微 盘</a></li>
      <li><a target="_blank" href="http://www.aol.com/">AOL</a></li>
      <li><a target="_blank" href="http://time.com/">Time</a></li>
      <li><a target="_blank" href="https://account.aliyun.com/login/login.htm?oauth_callback=http%3A%2F%2Fews.console.aliyun.com%2F#/ewsDetail/163423">阿里云</a></li>
      <li><a target="_blank" href="https://www.sharelatex.com/">Sharelatex</a></li>
      <li><a target="_blank" href="https://www.hao123.com/">hao123</a></li>
      <li><a target="_blank" href="http://www.weibo.com/">微 博</a></li>
      <li><a href="http://www.zhihu.com/" target="_blank">知 乎</a></li>
      <li><a href="https://www.quora.com/" target="_blank">Quora</a></li>
      <li><a target="_blank" href="http://www.tianya.com/">天 涯</a></li>
      <li><a target="_blank" href="http://www.mop.com/">猫 扑</a></li>
      <li><a target="_blank" href="http://mail.shu.edu.cn">豆 瓣</a></li>
      <li><a target="_blank" href="http://www.topit.me/">TOPIT.ME</a></li>
      <li><a target="_blank" href="http://www.xinli001.com/">壹心理</a></li>
      <li><a target="_blank" href="http://www.guokr.com/">果壳网</a></li>
      <li><a target="_blank" href="http://danhuaer.com/">蛋花网</a></li>
      <li><a target="_blank" href="http://www.xiachufang.com/">下厨房</a></li>
      <li><a target="_blank" href="http://jandan.net/">煎 蛋</a></li>
      <li><a target="_blank" href="http://bbs.qyer.com/">穷游网</a></li>
      <li><a target="_blank" href="http://www.duitang.com/">堆 糖</a></li>
      <li><a target="_blank" href="http://www.time.com">时代杂志</a></li>
      <li><a target="_blank" href="http://www.nationalgeographic.com/">National Geographic</a></li>
      <li><a target="_blank" href="http://www.nationalgeographic.com.cn/">国家地理</a></li>
      <li><a target="_blank" href="http://ww.xitek.com/">色影无忌</a></li>
      <li><a target="_blank" href="http://www.ooopic.com/">我图网</a></li>
      <li><a target="_blank" href="http://www.u17.com/">有妖气</a></li>
      <li><a href="http://www.airpano.com/" target="_blank">Airpano</a></li>
      <li><a href="http://feedly.com/i/discover" target="_blank">Feedly</a></li>
      <li><a href="http://fuliba.net/" target="_blank">福利吧</a></li>
      <li><a href="http://www.huxiu.com/" target="_blank">虎嗅网</a></li>
      <li><a href="http://www.xinli001.com/" target="_blank">壹心理</a></li>
      <li><a href="http://www.zhihu.com/question/26009615" target="_blank">少数派</a></li>
      <li><a href="http://www.zhihu.com/question/19676830" target="_blank">怪有趣的</a></li>
      <li><a target="_blank" href="http://mail.shu.edu.cn">上大邮箱</a></li>
      <li><a target="_blank" href="http://www.lib.shu.edu.cn/">上大图书馆</a></li>
      <li><a target="_blank" href="http://mh.shu.edu.cn/irj/portal">上大信息门户</a></li>
      <li><a target="_blank" href="http://202.121.199.182:8080/gmis/login.aspx">上大研究生管理</a></li>
      <li><a target="_blank" href="http://www.ms.shu.edu.cn/">上大管院</a></li>
      <li><a target="_blank" href="http://www.jwc.shu.edu.cn/jwc.html">上大教务处</a></li>
      <li><a target="_blank" href="http://www.cwc.shu.edu.cn/cwc.html">上大财务处</a></li>
      <li><a target="_blank" href="http://news.shu.edu.cn/">上大新闻网</a></li>
      <li><a target="_blank" href="http://www.lehu.shu.edu.cn/">乐乎社区</a></li>
      <li><a target="_blank" href="http://bb.shu.edu.cn/">上大网上教学</a></li>
    </ul>
  </div>
</div>
</body>
</html>
