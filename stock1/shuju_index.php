<html lang="zh-CN"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" ><meta charset="utf-8">
  <title>数据</title>
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
<div class="main_cat">
  <div class="box">
    <div class="site-list shadow">
      <h2 id="2434">经济数据库</h2>
      <ul class="clearfix">
       
                   
	<li><a href="http://ccc.chinadegrees.com.cn/index/enterIndex.do" target="_blank" >中国专业学位教学案例中心</a></li>
	<li><a href="http://www.lib.shu.edu.cn/" target="_blank" >上大图书馆</a></li>
                   <li><a href="http://www.ccerdata.cn/" target="_blank" >国泰安</a></li>
	<li><a href="http://www.ccerdata.cn/" target="_blank" >色诺芬</a></li>
	<li><a href="http://www.stats.gov.cn/tjsj/" target="_blank" >统计局</a></li>
	<li><a href="http://tongji.cnki.net/kns55/index.aspx" target="_blank" >中国知网</a></li>
	<li><a href="http://www.wind.com.cn" target="_blank" >万得</a></li>
	<li><a href="http://www.wanfangdata.com.cn/" target="_blank" >万方</a></li>
	<li><a href=" http://www.cqvip.com/" target="_blank" >维普</a></li>
	<li><a href="http://sdb.csdl.ac.cn/index.jsp" target="_blank" >中国科学引文数据库(CSCD)</a></li>
	<li><a href="http://www.worldbank.org/data/" target="_blank" >世界银行数据</a></li>
	<li><a href="http://europa.eu.int/index.htm" target="_blank" >欧盟</a></li>
	<li><a href="http://www.oecd.org/" target="_blank" >OECD</a></li>
	<li><a href="http://www.census.gov/" target="_blank" >美国统计署</a></li>
	<li><a href="http://www.bea.gov/" target="_blank" >美国经济分析局</a></li>
	<li><a href="http://www.bls.gov/" target="_blank" >美国劳工局</a></li>
	<li><a href="http://www.usda.gov/nass/" target="_blank" >美国国家农业统计署</a></li>
	<li><a href="http://www.vanderbilt.edu/AEA/" target="_blank" >美国经济协会</a></li>
	<li><a href="http://www.bts.gov/" target="_blank" >美国交通统计局</a></li>
	<li><a href="http://www.nber.org/" target="_blank" >NBER</a></li>
	<li><a href="http://ssrn.com/en/" target="_blank" >SSRN</a></li>
	<li><a href="https://www.researchgate.net/" target="_blank" >Researchgate</a></li>
	<li><a href="http://cepr.org/" target="_blank" >CEPR</a></li>
	<li><a href="https://scholar.google.com.hk/" target="_blank" >Google Scholar</a></li>
	<li><a href="https://www.loc.gov/" target="_blank" >美国国会图书馆</a></li>
	<li><a href="http://statlab.stat.yale.edu/SSDA/ssda.html" target="_blank" >耶鲁大学社会科学数据</a></li>
	<li><a href="http://qed.econ.queensu.ca/jae/" target="_blank" >《计量经济学》杂志数据库</a></li>
	<li><a href="http://financial.thomsonreuters.com/" target="_blank" >THOMSON REUTERS</a></li>
	<li><a href="https://www.cia.gov/index.html" target="_blank" >CIA</a></li>
	<li><a href="http://www.umi.com/pqdauto" target="_blank" >ABI/INFORM Global </a></li>
	<li><a href="http://trial.global.epnet.com" target="_blank" >EBSCO</a></li>
	<li><a href="http://highwire.stanford.edu/" target="_blank" >HighWire Press</a></li>
	<li><a href="http://www.ingenta.com/" target="_blank" >Ingenta</a></li>
	<li><a href="http://infotrac.galegroup.com/" target="_blank" >Investext Plus</a></li>
	<li><a href="http://www.netlibrary.com/" target="_blank" >netLibrary </a></li>
	<li><a href="http://proquest.umi.com/login" target="_blank" >ProQuest</a></li>
	<li><a href="https://www.elsevier.com/journals/title/a" target="_blank" >Elsevier</a></li>
	<li><a href="https://www.douban.com/note/72892550/" target="_blank" >豆瓣推荐</a></li>
      </ul>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class="auto_hidden" id="auto"><!--自动完成 DIV--></div>
</div>
</body>
</html>
