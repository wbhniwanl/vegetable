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
	
</head>

<body class="body-white">
	

	<div class="container tc-main" style="background:#eeeeee;">
		<div class="row">
			<div class="span4 offset4">
				<h1 class="text-center">发布招聘</h1>
				<!-- <ul class="nav nav-tabs" id="myTab">
					<li class="active"><a href="#mobile" data-toggle="tab">手机注册</a></li>
					<li><a href="#email" data-toggle="tab">邮箱注册</a></li>
				</ul> -->

				<div class="tab-content">
					<div class="tab-pane" id="mobile">
						<form class="form-horizontal js-ajax-form" action="<?php echo U('user/register/doregister');?>" method="post">
		
							<div class="control-group">
								<input type="text" name="mobile" placeholder="职位标题" class="span4">
							</div>
		
							<div class="control-group">
								<input type="password" name="password" placeholder="密码" class="span4">
							</div>
							
							<div class="control-group">
								<div class="span4" style="margin-left: 0px;">
									<input type="text" name="verify" placeholder="验证码" style="width:232px;">
									<?php echo sp_verifycode_img('length=4&font_size=14&width=120&height=34&charset=1234567890&use_noise=1&use_curve=0');?>
								</div>
							</div>
		
							<div class="control-group">
								<div class="span4" style="margin-left: 0px;">
									<input type="text" name="mobile_verify" placeholder="手机验证码" style="width:232px;">
									<a class="btn btn-success" style="width: 96px;">获取验证码</a>
								</div>
							</div>
		
							<div class="control-group">
								<button class="btn btn-primary js-ajax-submit span4" type="submit" data-wait="1500" style="margin-left: 0px;">确定注册</button>
							</div>
		
							<div class="control-group" style="text-align: center;">
								<p>
									已有账号? <a href="<?php echo leuu('user/login/index');?>">点击此处登录</a>
								</p>
							</div>
						</form>
					</div>
					<div class="tab-pane active" id="email">
						<form class="form-horizontal js-ajax-form" action="<?php echo U('blog/index/job_offer');?>" method="post">
		
							<div class="control-group">
							<h3><label for="Position_title" style="float:left;margin-left:-80px;margin-top:-5px;"> 职位标题：</label></h3>
								<input type="text" name="Position_title" placeholder="职位标题" class="span4">
							</div>
                            <div class="control-group">
						<h3><label for="Position_name" style="float:left;margin-left:-80px;margin-top:-5px;"> 职位名称：</label></h3>
								<input type="text" name="Position_name" placeholder="职位名称" class="span4">
							</div>
                            <div class="control-group">
							<h3><label for="Position_nature" style="float:left;margin-left:-80px;margin-top:-13px;"> 职位性质：</label></h3>
							 <input value="1" checked="checked" type="radio" name="Position_nature" /> 
                                           兼职
                                            <input value="2" type="radio" name="Position_nature" /> 
                                           全职                                            
										   <input value="3" type="radio" name="Position_nature" />
										   其他
							</div>
                            <div class="control-group">
						<h3><label for="Work_place" style="float:left;margin-left:-80px;margin-top:-5px;"> 工作地点：</label></h3>
								<input type="text" name="Work_place" placeholder="工作地点" class="span4">
							</div>
		
							<div class="control-group">
							<h3><label for="Sex_require" style="float:left;margin-left:-80px;margin-top:-13px;"> 性别要求：</label></h3>
								
                                       <input value="1" checked="checked" type="radio" name="Sex_require"  /> 男 
									   <input value="2" type="radio" name="Sex_require" />  女   
									   <input value="3" type="radio" name="Sex_require" />  无要求
							</div>
							
							<div class="control-group">
							<h3><label for="Require_number" style="float:left;margin-left:-80px;margin-top:-5px;"> 招聘人数：</label></h3>
								<input type="text" name="Require_number" placeholder="招聘人数" class="span4">
							</div>
		                    <div class="control-group">
						<h3><label for="Job_offer" style="float:left;margin-left:-80px;margin-top:-5px;"> 工资待遇：</label></h3>
								<input type="text" name="Job_offer" placeholder="工资待遇" class="span4">
							</div>
							<div class="control-group">
						<h3><label for="Work_time" style="float:left;margin-left:-80px;margin-top:-5px;"> 工作时间：</label></h3>
								<input type="text" name="Work_time" placeholder="工作时间" class="span4">
							</div>
							<div class="control-group">
						<h3><label for="Position_describe" style="float:left;margin-left:-80px;margin-top:-5px;"> 工作描述：</label></h3>
								
								<textarea   style="height:150px;width:355px;wrap:hard"name="Position_describe"></textarea>
							</div>
							<div class="control-group">
							<h3><label for="Contact" style="float:left;margin-left:-80px;margin-top:-5px;"> 联系人：</label></h3>
								<input type="text" name="Contact" placeholder="联系人" class="span4">
							</div>
							<div class="control-group">
						<h3><label for="Contact_way" style="float:left;margin-left:-80px;margin-top:-5px;"> 联系方式：</label></h3>
								<input type="text" name="Contact_way" placeholder="联系方式" class="span4">
							</div>
							
							<div class="control-group">
					<h3><label for="email" style="float:left;margin-left:-80px;margin-top:-5px;"> 验证码：</label></h3>
								<div class="span4" style="margin-left: 0px;">
                                
									<input type="text" name="code" placeholder="验证码" style="width:252px;">
                                    <p></p>
                                   
									<?php echo sp_verifycode_img('length=4&font_size=14&width=100&height=34&charset=1234567890&use_noise=1&use_curve=0');?>
								</div>
								
							</div>
		
							
							
							<div class="control-group">
						<button class="btn btn-primary  span4" type="submit" style="margin-left: 0px">发布招聘</button>
					</a></div>
							
								
							
		
							
						</form>
					
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

	</div>
	<!-- /container -->

	
</body>
</html>