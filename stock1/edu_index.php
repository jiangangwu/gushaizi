<html lang="zh-CN"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" ><meta charset="utf-8">
  <title>教育</title>
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
      <h2 id="2390">人才</h2>
      <ul class="clearfix">
        <li><a href="http://www.wealink.com" target="_blank" class="">若邻网</a></li>
        <li><a href="http://www.jobcn.com" target="_blank" class="">卓博网</a></li>
        <li><a href="http://job.dajie.com/index" target="_blank" class="">大街网</a></li>
        <li><a href="http://www.lietou.com" target="_blank" class="">猎聘网</a></li>
        <li><a href="http://www.zhaopin.com" target="_blank" class="">智联招聘</a></li>
        <li><a href="http://www.51job.com" target="_blank" class="">前程无忧</a></li>
        <li><a href="http://www.job1001.com" target="_blank" class="">一览英才网</a></li>
        <li><a href="http://www.yinhangzhaopin.com" target="_blank" class="">银行招聘网</a><span style="color:#f00">√</span></li>
        <li><a href="http://www.bankhr.com" target="_blank" class="">金融英才网</a></li>
        <li><a href="http://www.workws.com" target="_blank" class="">华尔街招聘</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2403">英语学习</h2>
      <ul class="clearfix">
        <li><a href="http://www.cet.edu.cn" target="_blank" class="">大学英语四六级</a></li>
        <li><a href="http://www.china-cet.com" target="_blank" class="">中国四六级考试网</a></li>
        <li><a href="http://toefl.etest.net.cn" target="_blank" class="">托福考试</a></li>
        <li><a href="http://ielts.etest.edu.cn" target="_blank" class="">IELTS考试</a></li>
        <li><a href="http://www.neea.edu.cn/zsks/bec/bec.jsp?class_id=10_01" target="_blank" class="">BEC商务英语考试</a></li>
        <li><a href="http://toeic.cn" target="_blank" class="">托业TOEIC考试</a></li>
        <li><a href="http://www.cnielts.com" target="_blank" class="">中国雅思网</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2404">公务员考试</h2>
      <ul class="clearfix">
        <li><a href="http://www.scs.gov.cn/Desktop.aspx?PATH=gjgwyj/gjgwyjsy" target="_blank" class="">国家公务员局</a></li>
        <li><a href="http://edu.sina.com.cn/official/index.shtml" target="_blank" class="">中公教育</a></li>
        <li><a href="http://www.gjgwy.org" target="_blank" class="">公务员考试网</a></li>
        <li><a href="http://bbs.qzzn.com" target="_blank" class="">光华教育</a></li>
        <li><a href="http://www.koolearn.com/zhijiao/gwy.html?a_id=ff8080812eb820a3012eb820a3cc0000&amp;kid=ff8080813f34d416013f3850724440c7" target="_blank" class="">公务员 新东方在线</a></li>
        <li><a href="http://gongwuyuan.eol.cn" target="_blank" class="">公务员频道</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2405">考研网站</h2>
      <ul class="clearfix">
        <li><a href="http://www.koolearn.com/kaoyan/?a_id=ff8080812eb820a3012eb820a3cc0000&amp;kid=ff8080813f34d340013f3855b6713ae3" target="_blank" class="">新东方在线 考研</a></li>
        <li><a href="http://yz.chsi.com.cn" target="_blank" class="">中国研究生招生信息网</a></li>
        <li><a href="http://www.zzyjs.com" target="_blank" class="">中国在职研究生网</a></li>
        <li><a href="http://www.chinakaoyan.com" target="_blank" class="">中国考研网</a></li>
        <li><a href="http://www.cnedu.cn" target="_blank" class="">考研教育网</a></li>
        <li><a href="http://www.medkaoyan.net" target="_blank" class="">医学考研网</a></li>
        <li><a href="http://edu.sina.com.cn/kaoyan" target="_blank" class="">新浪 考研</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2406">专业类考试</h2>
      <ul class="clearfix">
        <li><a href="http://www.chinaacc.com" target="_blank" class="">中华会计网校</a></li>
        <li><a href="http://www.coc.gov.cn" target="_blank" class="">中国建造师网</a></li>
        <li><a href="http://www.nmec.org.cn" target="_blank" class="">国家医学考试网</a></li>
        <li><a href="http://www.ck100.com" target="_blank" class="">财考网</a></li>
        <li><a href="http://www.moj.gov.cn/sfkss/node_226.htm" target="_blank" class="">司法考试网</a></li>
        <li><a href="http://www.jszg.edu.cn/portal/home/index" target="_blank" class="">中国教师资格网</a></li>
        <li><a href="http://mnks.jxedt.com" target="_blank" class="">驾校一点通 模拟考试</a></li>
        <li><a href="http://www.233.com" target="_blank" class="">233网校</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2407">各省考试中心</h2>
      <ul class="clearfix">
        <li><a href="http://www.bjeea.cn" target="_blank" class="">北京教育考试网</a></li>
        <li><a href="http://www.zhaokao.net" target="_blank" class="">天津教育考试网</a></li>
        <li><a href="http://www.shmeea.com.cn/node2/index.html" target="_blank" class="">上海教育考试网</a></li>
        <li><a href="http://www.lzk.hl.cn/lzk/index.htm" target="_blank" class="">黑龙江教育考试网</a></li>
        <li><a href="http://www.lnzsks.com" target="_blank" class="">辽宁教育考试网</a></li>
        <li><a href="http://www.hebeea.edu.cn" target="_blank" class="">河北教育考试网</a></li>
        <li><a href="http://www.heao.gov.cn" target="_blank" class="">河南教育考试网</a></li>
        <li><a href="http://www.nm.zsks.cn" target="_blank" class="">内蒙古教育考试网</a></li>
        <li><a href="http://www.sxkszx.cn/index.html" target="_blank" class="">山西教育考试网</a></li>
        <li><a href="http://www.eeagd.edu.cn/portal/bizdesk/PortaluserAction.do?dispatch=preLogin" target="_blank" class="">广东教育考试网</a></li>
        <li><a href="http://www.gxeea.cn" target="_blank" class="">广西教育考试网</a></li>
        <li><a href="http://www.ahzsks.cn" target="_blank" class="">安徽教育考试网</a></li>
        <li><a href="http://www.hneeb.cn" target="_blank" class="">湖南教育考试网</a></li>
        <li><a href="http://www.hbea.edu.cn" target="_blank" class="">湖北教育考试网</a></li>
        <li><a href="http://www.jseea.cn" target="_blank" class="">江苏教育考试网</a></li>
        <li><a href="http://www.zjzs.net" target="_blank" class="">浙江教育考试网</a></li>
        <li><a href="http://www.jxedu.gov.cn" target="_blank" class="">江西教育考试网</a></li>
        <li><a href="http://www.eeafj.cn" target="_blank" class="">福建教育考试网</a></li>
        <li><a href="http://www.ynzs.cn" target="_blank" class="">云南教育考试网</a></li>
        <li><a href="http://www.gzszk.com" target="_blank" class="">贵州教育考试网</a></li>
        <li><a href="http://www.xjedu.gov.cn" target="_blank" class="">新疆教育考试网</a></li>
        <li><a href="http://www.sceea.cn" target="_blank" class="">四川教育考试网</a></li>
        <li><a href="http://www.sneac.com" target="_blank" class="">陕西教育考试网</a></li>
        <li><a href="http://www.gszs.edu.cn" target="_blank" class="">甘肃教育考试网</a></li>
        <li><a href="http://www.qhzk.com" target="_blank" class="">青海教育考试网</a></li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2408">高考/成考/自考网站</h2>
      <ul class="clearfix">
        <li><a href="http://www.zikao365.com" target="_blank" class="">自考365</a></li>
        <li><a href="http://www.chinazikao.com" target="_blank" class="">中国自考网</a></li>
        <li><a href="http://gkcx.eol.cn/soudaxue/queryschool.html" target="_blank" class="">中国教育在线</a></li>
        <li><a href="http://www.ms211.com" target="_blank" class="">中国美术高考网</a></li>
        <li><a href="http://www.zhongkao.com" target="_blank" class="">中考网</a></li>
        <li><a href="http://edu.sina.com.cn/gaokao" target="_blank" class="">新浪 高考录取查询</a></li>
        <li><a href="http://www.chengkao365.com" target="_blank" class="">成人高考教育</a></li>
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
