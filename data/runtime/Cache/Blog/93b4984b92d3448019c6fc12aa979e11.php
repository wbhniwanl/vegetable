<?php if (!defined('THINK_PATH')) exit();?>	<?php  function _sp_helloworld(){ echo "hello ThinkCMF!"; } function _sp_helloworld2(){ echo "hello ThinkCMF2!"; } function _sp_helloworld3(){ echo "hello ThinkCMF3!"; } ?>
	<?php $portal_index_lastnews="1,2"; $portal_hot_articles="1,2"; $portal_last_post="1,2"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/3.jpg", "slide_url"=>"", ), ); ?>
	<meta name="author" content="ThinkCMF">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

   	<!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
	<link rel="icon" href="/themes/simplebootx/Public/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/themes/simplebootx/Public/images/favicon.ico" type="image/x-icon">
    <link href="/themes/simplebootx/Public/simpleboot/themes/simplebootx/theme.min.css" rel="stylesheet">
    <link href="/themes/simplebootx/Public/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/themes/simplebootx/Public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="/themes/simplebootx/Public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
	<link href="/themes/simplebootx/Public/css/style.css" rel="stylesheet">
		 <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/css/footer.css" /> 
   <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/css/grids-min.css" /> 
   <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/css/top1.css" />
   		 <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/css/base-min.css" /> 
   <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/css/lrtk.css" /> 
   <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/css/style1" />  
   <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/css/animate.min.css" />  
	<style>
		/*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
		#backtotop{position: fixed;bottom: 50px;right:20px;display: none;cursor: pointer;font-size: 50px;z-index: 9999;}
		#backtotop:hover{color:#333}
		#main-menu-user li.user{display: none}
	</style>
	


<style>
body{

background:#EEEEEE;
}
	*{ margin: 0px;
		padding: 0px;
		}
	.leftpic{height:110px;
			width:200px;
			margin-right: 210px;
			margin-top: 30px;
            float: right;}
	.yifa{height:110px;
			width:200px;
			margin-right: -200px;
			margin-top: 175px;
            float: right;}
    .rightpic{height:110px;
			width:200px;
            margin-right: -200px;
			margin-top: 320px;
            float: right;}
		.shuoming{
			height:450px;
			width:400px;
			margin-left:100px;
		  
			
			}
.shuoming h1{
			color:red;
			 text-align:center;			  
			   margin-top:0px;		  
			}
	.shuoming h2{
	color:black;
	
	}
.boxdiv{height: 450px;
margin: auto;
margin-top: 20px;
width: 1170px;
background:url(/themes/simplebootx/Public/images/fabubg.jpg);
}

	.caption-wraper{position: absolute;left:50%;bottom:2em;}
			.caption-wraper .caption{
			position: relative;left:-50%;
			background-color: rgba(0, 0, 0, 0.54);
			padding: 0.4em 1em;
			color:#fff;
			-webkit-border-radius: 1.2em;
			-moz-border-radius: 1.2em;
			-ms-border-radius: 1.2em;
			-o-border-radius: 1.2em;
			border-radius: 1.2em;
			}
			@media (max-width: 767px){
				.sy-box{margin: 12px -20px 0 -20px;}
				.caption-wraper{left:0;bottom: 0.4em;}
				.caption-wraper .caption{
				left: 0;
				padding: 0.2em 0.4em;
				font-size: 0.92em;
				-webkit-border-radius: 0;
				-moz-border-radius: 0;
				-ms-border-radius: 0;
				-o-border-radius: 0;
				border-radius: 0;}
</style>
<div class="container">
<div class="boxdiv">


	<div class="leftpic">
		<a href="http://127.0.0.1/index.php?g=blog&m=index&a=index"><button type="button" style="height: 110;width: 200; background: url(/themes/simplebootx/Public/images/fabu.png);"></button></a>

	</div>
	
	<div class="yifa">
		<a href="http://127.0.0.1/index.php?g=blog&m=index&a=recruit_detail"><button type="button" style="height: 110;width: 200; background: url(/themes/simplebootx/Public/images/yifatiezi.png);"></button></a>

	</div>

	<div class="rightpic">
		<a href="/index.php?g=user&amp;m=index&amp;a=logout"><button type="button" style="height: 110;width: 200; background: url(/themes/simplebootx/Public/images/bacshouye.png);"></button></a>

	</div >
	<div class="shuoming">
		
<h1> **发帖注意事项**</h1>
<h2><span>
1. 有关于商品提供者和与商品提供者所提供的交易内容，商品处理，服务以及在网页上由商品提供者所提供的个人资料及商品内容等的真伪、正确性、最新性、有用性、可靠性、 合法性以及有无侵害第三者权利的事项等的情报，本公司一概不负任何相关责任。

2. 使用本系统时若出现中断或故障等现象，可能会造成使用上的不便、资料丧失、错误、遭人篡改或其他经济上损失等情形。 为避免此情况的发生
</span>
</h2>
	</div>

</div>


      <hr>

  <div class="footer1"> 
   <div class="friendlink"> 
    <div class="hnnu_link_left_title"></div> 
    <div class="linkTxt"> 
     <p> <a href="http://www.edu.cn/" title="教育科研网 " target="_blank">教育科研网</a>| <a href="http://www.hainan.edu.cn/" title="海南教育网 " target="_blank">海南教育网</a>| <a href="http://www.cnki.net/" title="中国知网 " target="_blank">中国知网</a>| <a href="http://www.csdn.net/" title="中国软件 " target="_blank">中国软件</a>| <a href="http://www.china.com.cn/" title="中国网 " target="_blank">中国网</a>| <a href="http://www.cutech.edu.cn/" title="教育部科技发展中心 " target="_blank">教育部科技发展中心</a>| <a href="http://www.hngjc.cn/" title="海南省高等教育网 " target="_blank">海南省高等教育网</a>| <a href="http://www.cste.net.cn/" title="中国软件技术教育网 " target="_blank">中国软件技术教育网</a>| <a href="http://hainnunews.cuepa.cn/index.php" title="《海南师范大学报》电子版 " target="_blank">《海南师范大学报》电子版</a>| <a href="http://hsxb.hainnu.edu.cn/" title="学报 " target="_blank">学报</a>| <a href="http://second.hainnu.edu.cn/dzjgou/0507/" title="社团联合会 " target="_blank">社团联合会</a>| <a href="http://ihaishi.sinaapp.com/" title="海师大网络中心工作室 " target="_blank">海师大网络中心工作室</a>| <a href="http://tw.hainnu.edu.cn/html/xsh/" title="学生会 " target="_blank">学生会</a>| <a href="http://www.hngqt.cn/index_xds.php/" title="学党史 " target="_blank">学党史</a>| <a href="http://second.hainnu.edu.cn/dzjgou/tuanwei/qx/" title="校青年志愿者协会 " target="_blank">校青年志愿者协会</a>| <a href="http://dynamic.hainnu.edu.cn/" title="新闻投稿入口 " target="_blank">新闻投稿入口</a>| <a href="http://210.37.0.39:8091/unisys/app" title="学生工作管理信息系统 " target="_blank">学生工作管理信息系统</a>| <a href="http://210.37.0.6/xlwz/" title=" 海南师范大学心理健康教育与咨询中心 " target="_blank"> 海南师范大学心理健康教育与咨询中心</a>| <a href="http://zhuanti.youth.cn/2012/18d/index.html" title="喜迎党的十八大专题网 " target="_blank">喜迎党的十八大专题网</a>| <a href="http://71.youth.cn/" title="党在我心中 " target="_blank">党在我心中</a>| <a href="http://zgm.youth.cn/" title="我的中国梦 " target="_blank">我的中国梦</a>| <a href="http://www.haishi100.com" title="家教服务中心 " target="_blank">家教服务中心</a>| <a href="http://www1.hainnu.edu.cn/" title="旧版入口 " target="_blank">旧版入口</a>| <a href="http://m.hainnu.edu.cn/" title="手机版 " target="_blank">手机版</a>| </p> 
    </div> 
   </div> 
   <p>本LTF小组团队</p> 
   <p>感谢ThinkCmf框架开发小组</p> 
   
  </div>   
  </div> 
  </div>
    </div>
     
</div>