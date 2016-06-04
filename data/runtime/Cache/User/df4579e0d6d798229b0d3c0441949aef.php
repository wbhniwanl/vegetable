<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title><?php echo ($site_name); ?></title>
<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
<meta name="description" content="<?php echo ($site_seo_description); ?>">
<meta name="author" content="ThinkCMF">
	<?php  function _sp_helloworld(){ echo "hello ThinkCMF!"; } function _sp_helloworld2(){ echo "hello ThinkCMF2!"; } function _sp_helloworld3(){ echo "hello ThinkCMF3!"; } ?>
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
	
<style type="text/css">
.tab-content{overflow: visible;}
</style>
<!--加载Css-->
<link rel="stylesheet" type="text/css" href="/public/js/shearphoto/css/ShearPhoto.css" />
</head>
<body class="body-white" id="top">
	<?php echo hook('body_start');?>
<div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <a class="brand" href="/"><img src="/themes/simplebootx/Public/images/logo.png"/></a>
       <div class="nav-collapse collapse" id="main-menu">
       	<?php
 $effected_id="main-menu"; $filetpl="<a href='\$href' target='\$target'>\$label</a>"; $foldertpl="<a href='\$href' target='\$target' class='dropdown-toggle' data-toggle='dropdown'>\$label <b class='caret'></b></a>"; $ul_class="dropdown-menu" ; $li_class="" ; $style="nav"; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?>
		
		<ul class="nav pull-right" id="main-menu-user">
			<li class="dropdown user login">
	            <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
	            <img src="/themes/simplebootx//Public/images/headicon.png" class="headicon" id="avatar_small"/>
	            <span class="user-nicename"></span><b class="caret"></b></a>
	            <ul class="dropdown-menu pull-right">
	               <li><a href="<?php echo U('user/center/index');?>"><i class="fa fa-user"></i> &nbsp;个人中心</a></li>
				    <li><a href="<?php echo U('blog/index/keyword');?>"><i class="fa fa-user"></i> &nbsp;个性推荐</a></li>
	               <li class="divider"></li>
	               <li><a href="<?php echo U('user/index/logout');?>"><i class="fa fa-sign-out"></i> &nbsp;退出</a></li>
	            </ul>
          	</li>
          	<li class="dropdown user offline">
	            <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
	           		<img src="/themes/simplebootx//Public/images/headicon.png" class="headicon"/>登录<b class="caret"></b>
	            </a>
	            <ul class="dropdown-menu pull-right">
	              
	               
	               <li><a href="<?php echo leuu('user/login/index');?>"><i class="fa fa-sign-in"></i> &nbsp;登录</a></li>
				   
	               <li class="divider"></li>
	               <li><a href="<?php echo leuu('user/register/index');?>"><i class="fa fa-user"></i> &nbsp;注册</a></li>
	            </ul>
          	</li>
		</ul>
		<div class="pull-right">
        	<form method="post" class="form-inline" action="<?php echo U('portal/search/index');?>" style="margin:18px 0;">
				 <input type="text" class="" placeholder="Search" name="keyword" value="<?php echo I('get.keyword');?>"/>
				 <input type="submit" class="btn btn-info" value="Go" style="margin:0"/>
			</form>
		</div>
       </div>
     </div>
   </div>
 </div>

		<div class="container tc-main">
                <div class="row">
                    <div class="span3">
	                    <div class="list-group">
	<a class="list-group-item" href="<?php echo U('user/profile/edit');?>"><i class="fa fa-list-alt fa-fw"></i> 修改资料</a>
	<a class="list-group-item" href="<?php echo U('user/profile/94');?>"><i class="fa fa-list-alt fa-fw"></i> 查看辅导老师</a>
	<a class="list-group-item" href="<?php echo U('user/profile/sendmes');?>"><i class="fa fa-list-alt fa-fw"></i> 发送创意信息</a>
	<a class="list-group-item" href="<?php echo U('user/profile/password');?>"><i class="fa fa-lock fa-fw"></i> 修改密码</a>
	<a class="list-group-item" href="<?php echo U('user/profile/avatar');?>"><i class="fa fa-user fa-fw"></i> 编辑头像</a>
	<a class="list-group-item" href="<?php echo U('user/profile/bang');?>"><i class="fa fa-exchange fa-fw"></i> 绑定账号</a>
	<a class="list-group-item" href="<?php echo U('user/favorite/index');?>"><i class="fa fa-star-o fa-fw"></i> 我的收藏</a>
	<a class="list-group-item" href="<?php echo U('comment/comment/index');?>"><i class="fa fa-comments-o fa-fw"></i> 我的评论</a>
	<a class="list-group-item" href="<?php echo U('blog/index/keyword_detail');?>"><i class="fa fa-list-alt fa-fw"></i> 关键词更新</a>
</div>
                    </div>
                    <div class="span9">
                           <div class="tabs">
                               <ul class="nav nav-tabs">
                                   <li class="active"><a href="#one" data-toggle="tab"><i class="fa fa-user"></i> 修改头像</a></li>
                               </ul>
                               <div class="tab-content">
					<div class="tab-pane active" id="one">
					<div class="row">
					<?php if(empty($user['avatar'])): ?><img src="/themes/simplebootx//Public/images/headicon_128.png" class="headicon" id="avatar_big" style="max-width:128px"/>
					<?php else: ?>
					<img src="<?php echo sp_get_user_avatar_url($avatar);?>?t=<?php echo time();?>" class="headicon" id="avatar_big"/><?php endif; ?>
					<div id="shearphoto_loading">程序加载中......</div>
					<div id="shearphoto_main">
						<div class="Effects" id="shearphoto_Effects" autocomplete="off">
							<strong class="EffectsStrong">截图效果</strong>
							<a href="javascript:;" StrEvent="原图" class="Aclick"><img src="/public/js/shearphoto/images/Effects/e0.jpg"/>原图</a>
							<a href="javascript:;" StrEvent="美肤"><img src="/public/js/shearphoto/images/Effects/e1.jpg"/>美肤效果</a>
							<a href="javascript:;" StrEvent="素描"><img src="/public/js/shearphoto/images/Effects/e2.jpg"/>素描效果</a>
							<a href="javascript:;" StrEvent="自然增强"><img src="/public/js/shearphoto/images/Effects/e3.jpg" />自然增强</a>
							<a href="javascript:;" StrEvent="紫调"><img src="/public/js/shearphoto/images/Effects/e4.jpg" />紫调效果</a>
							<a href="javascript:;" StrEvent="柔焦"><img src="/public/js/shearphoto/images/Effects/e5.jpg"/>柔焦效果</a>
							<a href="javascript:;" StrEvent="复古"><img src="/public/js/shearphoto/images/Effects/e6.jpg"/>复古效果</a>
							<a href="javascript:;" StrEvent="黑白"><img src="/public/js/shearphoto/images/Effects/e7.jpg"/>黑白效果</a>
							<a href="javascript:;" StrEvent="仿lomo"><img src="/public/js/shearphoto/images/Effects/e8.jpg"/>仿lomo</a>
							<a href="javascript:;" StrEvent="亮白增强"><img src="/public/js/shearphoto/images/Effects/e9.jpg"/>亮白增强</a>
							<a href="javascript:;" StrEvent="灰白"><img src="/public/js/shearphoto/images/Effects/e10.jpg"/>灰白效果</a>
							<a href="javascript:;" StrEvent="灰色"><img src="/public/js/shearphoto/images/Effects/e11.jpg"/>灰色效果</a>
							<a href="javascript:;" StrEvent="暖秋"><img src="/public/js/shearphoto/images/Effects/e12.jpg"/>暖秋效果</a>
							<a href="javascript:;" StrEvent="木雕"><img src="/public/js/shearphoto/images/Effects/e13.jpg"/>木雕效果</a>
							<a href="javascript:;" StrEvent="粗糙"><img src="/public/js/shearphoto/images/Effects/e14.jpg"/>粗糙效果</a>
						</div>
						<div class="primary"> 
							<div id="main">
								<div class="point"></div>
								<div id="SelectBox">
									<form    id="ShearPhotoForm" enctype="multipart/form-data" method="post"  target="POSTiframe">
									<a href="javascript:;" id="selectImage"><input type="file"  name="UpFile" autocomplete="off"/></a>
									</form>           
									<a href="javascript:;" id="PhotoLoading"></a>
									<a href="javascript:;" id="camerasImage"></a>
								</div>
								<div id="relat">
									<div id="black"></div>
									<div id="movebox">
										<div id="smallbox">
										<img src="/public/js/shearphoto/images/default.gif" class="MoveImg"  style="max-width:300%"/>
										</div>
										<i id="borderTop"></i>
										<i id="borderLeft"></i>
										<i id="borderRight"></i>
										<i id="borderBottom"></i>
										<i id="BottomRight"></i>
										<i id="TopRight"></i>
										<i id="Bottomleft"></i>
										<i id="Topleft"></i>
										<i id="Topmiddle"></i>
										<i id="leftmiddle"></i>
										<i id="Rightmiddle"></i>
										<i id="Bottommiddle"></i>
									</div>
									<img src="/public/js/shearphoto/images/default.gif" class="BigImg" />
								</div>
							</div> 
							<div style="clear: both"></div>
							<div id="Shearbar">
								<a id="LeftRotate" href="javascript:;"><em></em>向左旋转</a>
								<em class="hint L"></em>
								<div class="ZoomDist" id="ZoomDist">
									<div id="Zoomcentre"></div>
									<div id="ZoomBar"></div>
									<span class="progress"></span>
								</div>
								<em class="hint R"></em>
								<a id="RightRotate" href="javascript:;">向右旋转<em></em></a>
								<p class="Psava">
									<a id="againIMG"  href="javascript:;">重新选择</a>
									<a id="saveShear" href="javascript:;">保存截图</a>
								</p>
							</div>
						</div>   
						<div style="clear: both"></div>
					</div>
					<div id="photoalbum">
						<i id="close"></i>
						<ul>
							<li><img src="/public/js/shearphoto/file/photo/1.jpg" serveUrl="file/photo/1.jpg" /></li>
							<li><img src="/public/js/shearphoto/file/photo/2.jpg" serveUrl="file/photo/2.jpg" /></li>
							<li><img src="/public/js/shearphoto/file/photo/3.jpg" serveUrl="file/photo/3.jpg" /></li>
							<li><img src="/public/js/shearphoto/file/photo/4.jpg" serveUrl="file/photo/4.jpg" /></li>
							<li><img src="/public/js/shearphoto/file/photo/5.jpg" serveUrl="file/photo/5.jpg" /></li>
							<li><img src="/public/js/shearphoto/file/photo/6.jpg" serveUrl="file/photo/6.jpg" /></li>
							<li><img src="/public/js/shearphoto/file/photo/7.jpg" serveUrl="file/photo/7.jpg" /></li>
							<li><img src="/public/js/shearphoto/file/photo/8.jpg" serveUrl="file/photo/8.jpg" /></li>
						</ul>
					</div>
					<div id="CamBox">
						<p class="lens"></p>
						<div id="CamFlash"></div>
						<p class="cambar">
						<a href="javascript:;" id="CamOk"  >拍照</a>
						<a href="javascript:;" id="setCam">设置</a>
						<a href="javascript:;" id="camClose">关闭</a>
						<span style="clear:both;"></span>
						</p>
						<div id="timing"></div>
					</div>
				</div></div>
                               </div>							
                           </div>
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
	<!-- /container -->
	<!--加载Js-->
	<script  type="text/javascript" src="/public/js/shearphoto/js/ShearPhoto.js?t=<?php echo time();?>" ></script>
	<script  type="text/javascript"  src="/public/js/shearphoto/js/webcam_ShearPhoto.js?t=<?php echo time();?>" ></script>
	<script  type="text/javascript"  src="/public/js/shearphoto/js/alloyimage.js?t=<?php echo time();?>" ></script>
	<script  type="text/javascript"  src="/public/js/shearphoto/js/handle.js?t=<?php echo time();?>" ></script>
    <script type="text/javascript">
        var SHEAR = {
			PATH_RES: '/public/js',
			PATH_AVATAR: '/data/upload/avatar',
			URL:"<?php echo U('profile/do_avatar');?>",
        };
    </script>
	<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/",
    JS_ROOT: "public/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/public/js/jquery.js"></script>
    <script src="/public/js/wind.js"></script>
    <script src="/themes/simplebootx/Public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
    <script src="/public/js/frontend.js"></script>


	
	<script>
	$(function(){
		$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
		
		$("#main-menu li.dropdown").hover(function(){
			$(this).addClass("open");
		},function(){
			$(this).removeClass("open");
		});
		
		$.post("<?php echo U('user/index/is_login');?>",{},function(data){
			if(data.status==1){
				if(data.user.avatar){
					$("#main-menu-user .headicon").attr("src",data.user.avatar.indexOf("http")==0?data.user.avatar:"/data/upload/avatar/"+data.user.avatar);
				}
				
				$("#main-menu-user .user-nicename").text(data.user.user_nicename!=""?data.user.user_nicename:data.user.user_login);
				$("#main-menu-user li.login").show();
				
			}
			if(data.status==0){
				$("#main-menu-user li.offline").show();
			}
			
		});	
		;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});
					
					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery); 
		
		$("#backtotop").totop();
		
		
	});
	</script>

<!--//人物介绍-->
 <script>
        $(document).ready(function () {
            $('.introduce1').hover(function () {   
                $(this).find('.introducebox').stop().slideDown('fast')
            }, function () {
                $(this).find('.introducebox').stop().slideUp('fast')
            })
        });
    </script>  
     <script>
        $(document).ready(function () {
            $('.introduce2').hover(function () {   
                $(this).find('.introducebox1').stop().slideDown('fast')
           }, function () {
                $(this).find('.introducebox1').stop().slideUp('fast')
            })
        });
    </script>  
    <!--//咨询-->
 <script>

$(document).ready(function(){
    
    $("#leftsead a").hover(function(){
        if($(this).prop("className")=="youhui"){
            $(this).children("img.hides").show();
        }else{
            $(this).children("div.hides").show();
            $(this).children("img.shows").hide();
            $(this).children("div.hides").animate({marginRight:'0px'},'0'); 
        }
    },function(){ 
        if($(this).prop("className")=="youhui"){
            $(this).children("img.hides").hide();
        }else{
            $(this).children("div.hides").animate({marginRight:'-163px'},0,function(){$(this).hide();$(this).next("img.shows").show();});
        }
    });

    $("#top_btn").click(function(){if(scroll=="off") return;$("html,body").animate({scrollTop: 0}, 600);});

	    //右侧导航 - 二维码
        $(".youhui").mouseover(function(){
            $(this).children(".2wm").show();
        })
        $(".youhui").mouseout(function(){
            $(this).children(".2wm").hide();
        });
});
</script>
 <!--//技术-->
<script type="text/javascript">
$(function(){
	$(".bottom_smailbox").hover(function(){
		$(this).addClass("animated  tada");
		$(this).find(".decx").show().removeClass("fadeout").addClass("animated fadeIn");
	},function(){
      $(this).removeClass("animated  tada");
	  $(this).find(".decx").hide().addClass("fadeIn").addClass("animated fadeout");
		});	
		
	});


</script>



  <!--//滚动-->
<script>
	var oMarquee = document.getElementById("mq1"); //滚动对象
	var iLineHeight = 134; //单行高度，像素
	var iLineCount = 9; //实际行数
	var iScrollAmount = 2; //每次滚动高度，像素
	function run() { oMarquee.scrollTop += iScrollAmount;
		if ( oMarquee.scrollTop == iLineCount * iLineHeight )
			oMarquee.scrollTop = 0;
		if ( oMarquee.scrollTop % iLineHeight == 0 )
		{ window.setTimeout( "run()", 2500 ); }
		else
		{ window.setTimeout( "run()", 10 ); }
	} oMarquee.innerHTML += oMarquee.innerHTML; window.setTimeout( "run()", 2500 );
</script>

</body>
</html>