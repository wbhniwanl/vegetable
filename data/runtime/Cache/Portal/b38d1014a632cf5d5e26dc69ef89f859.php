<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html>
	<head>
		<title>创新创业实习平台</title>
		<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
		<meta name="description" content="<?php echo ($site_seo_description); ?>">
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
	
		<link href="/themes/simplebootx/Public/css/slippry/slippry.css" rel="stylesheet">



		<style>
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
			}
			
			




		</style>
	</head>
<body class="body-white">
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

<?php $home_slides=sp_getslide("portal_index"); $home_slides=empty($home_slides)?$default_home_slides:$home_slides; ?>

<div class="container">   
<ul id="homeslider" class="unstyled">
	<?php if(is_array($home_slides)): foreach($home_slides as $key=>$vo): ?><li>
		<div class="caption-wraper">
			
		</div>
		<a href="<?php echo ($vo["slide_url"]); ?>"><img src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>" alt=""></a>
	</li><?php endforeach; endif; ?>
</ul> 
    </div>       

	<div class="container"> 
	<div class="pure-u-3-8"> 
	 <div class="box"> 
      <div class="box-head" style="margin-left:-15px;" > 
       <h2> <span>新闻动态</span> </h2> 
      </div> 
	 <?php $lastnews=sp_sql_posts("cid:$portal_index_lastnews;field:post_title,post_excerpt,tid,smeta;order:listorder asc;limit:5;"); ?>
      <div class="box-body cydt-list-wrap"> 
       <ul class="article-list cydt-list"> 
	    
       <?php if(is_array($lastnews)): foreach($lastnews as $key=>$vo): $smeta=json_decode($vo['smeta'],true); ?>
      	<li style="font-size:14px;"><a href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>"><?php echo ($vo["post_title"]); ?></a></li><?php endforeach; endif; ?>
       </ul> 
       <a href="http://127.0.0.1/index.php?m=list&a=index&id=1
" class="more">更多 &gt;&gt;</a> 
      </div> 
     </div> 
     <!-- cydt E --> 
     <!-- cyzc S --> 
     <div class="box"> 
      <div class="box-head" style="margin-left:-15px;"> 
       <h2> <span>实习信息</span></h2> 
	  
      </div> 
      <div class="box-body"> 
       <ul class="article-list"> 

			<?php if(is_array($Position_info)): $i = 0; $__LIST__ = array_slice($Position_info,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<a href="<?php echo U('blog/index/job_output',array('id'=>$vo['position_id']));?>"> <?php echo ($vo["position_title"]); ?>
							
						</a>
						
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			


       </ul> 
	    <a href="http://127.0.0.1/index.php?g=blog&m=index&a=recruit
" class="more" style="float:right;">更多&gt;&gt;</a> 
      </div> 
     </div> 
	 </div>
    
    
     <div class="pure-u-1-3">
     <div class="pure-g">
				<div class="box">
					<div class="introduce">
                      <div class="introduce1">
                     <a href="http://www.hainnu.edu.cn/"> <img src="/themes/simplebootx/Public/images/bg3.png"></a>
                      <div class="introducebox">   
                         李红梅书记一行与陵水县委书记麦正华等县领导洽谈合作事宜后合影
                      </div>
                      <div class="leftintroduce">
                       <a href="#"><img src="/themes/simplebootx/Public/images/bg1.png"/></a>
                      </div>
                        </div>
                      <div class="introduce2">
                      <a href="http://www.hainnu.edu.cn/"> <img src="/themes/simplebootx/Public/images/bg4.png"></a>
                      <div class="introducebox1">
                      美丽的学校
                      </div>
                        <div class="leftintroduce1">
                      <a href="#"><img src="/themes/simplebootx/Public/images/bg12.png"/></a>
                      </div>
                        </div>                    
                        </div>					
				</div>
           </div>
  
    </div>
 
   
  
	
     <div class="pure-g">
   <div class="pure-u-1-3">
	<div class="box">
    <div class="box-head" style="margin-left:-15px;">
    <h2> <span class="text-center">最新文章  Last News</span>  </h2>
	</div>
    </div>
    </div>
    </div>
	<?php $lastnews=sp_sql_posts("cid:$portal_index_lastnews;field:post_title,post_excerpt,tid,smeta;order:listorder asc;limit:4;"); ?>
	<div class="row">
		<?php if(is_array($lastnews)): foreach($lastnews as $key=>$vo): $smeta=json_decode($vo['smeta'],true); ?>
		<div class="span3">
			<div class="tc-gridbox">
				<div class="header">
					<div class="item-image">
						<a href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>">
							<?php if(empty($smeta['thumb'])): ?><img src="/themes/simplebootx/Public/images/default_tupian1.png" class="img-responsive" alt="<?php echo ($vo["post_title"]); ?>"/>
							<?php else: ?> 
								<img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" class="img-responsive img-thumbnail" alt="<?php echo ($vo["post_title"]); ?>" /><?php endif; ?>
						</a>
					</div>
					<h3><a href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>"><?php echo ($vo["post_title"]); ?></a></h3>
					<hr>
				</div>
				<div class="body">
					<p><a href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>"><?php echo msubstr($vo['post_excerpt'],0,32);?></a></p>
				</div>
			</div>
		</div><?php endforeach; endif; ?>
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


     <div class="pure-g">
  <div class="pure-u-1-3"  >
			 	<div class="box" >
			 		<!--

					<div class="box-head" style="margin-left:-13px;" >
						<h2> <span>团队介绍</span>   </h2>
					</div>
					<div class="box-body" style="height:415px;"  >
						<style type="text/css">
.mqs{ margin:auto; width:300px; height:400px;}
</style>
<div class="mqs">
    <div id="mq" style="OVERFLOW: hidden;  margin:0 auto; HEIGHT:400px;">
        <ul>
            <li>
						<div class="cont1" style="height: 133px;">
                       <img src="/themes/simplebootx/Public/images/111.png">
						</div>
			</li>
				
            
            <li>
						<div  class="cont1" style="height:133px; ">
							<img src="/themes/simplebootx/Public/images/112.png">
						</div>
             </li>

							<li>
						<div   class="cont1" style="height:133px; ">
							<img src="/themes/simplebootx/Public/images/113.png">
						</div>
              </li>
              <li>
						<div   class="cont1" style="height: 133px; ">
							<img src="/themes/simplebootx/Public/images/114.png">
						</div>
              </li>

              <li>
						<div class="cont1" style="height: 133px;">
                       <img src="/themes/simplebootx/Public/images/111.png">
						</div>
			</li>
				
            
            <li>
						<div  class="cont1" style="height:133px; ">
							<img src="/themes/simplebootx/Public/images/112.png">
						</div>
             </li>

							<li>
						<div   class="cont1" style="height:133px; ">
							<img src="/themes/simplebootx/Public/images/113.png">
						</div>
              </li>
              <li>
						<div   class="cont1" style="height: 133px; ">
							<img src="/themes/simplebootx/Public/images/114.png">
						</div>
              </li>
            

           
        </ul>
    </div>
</div>
<script>
	var oMarquee = document.getElementById("mq"); //滚动对象
	var iLineHeight = 130; //单行高度，像素
	var iLineCount =9; //实际行数
	var iScrollAmount = 1; //每次滚动高度，像素
	function run() { oMarquee.scrollTop += iScrollAmount;
		if ( oMarquee.scrollTop == iLineCount * iLineHeight )
			oMarquee.scrollTop = 0;
		if ( oMarquee.scrollTop % iLineHeight == 0 )
		{ window.setTimeout( "run()", 2500 ); }
		else
		{ window.setTimeout( "run()", 10 ); }
	} oMarquee.innerHTML += oMarquee.innerHTML; window.setTimeout( "run()", 2500 );
</script>



					</div>-->

				</div>
            </div> 
                
             <!-- <div class="pure-u-2-3"  >
				<div class="box" style="margin-left:23px;" >
					<div class="box-head" >
						<h2> <span>视频专区</span> </h2>
					</div>
					
						<div style="width:745px; height:360px; margin:auto">
                  <video class="mejs-wmp"  style="width:745px; height:415px;"  controls="controls">
                     <source src="/themes/simplebootx/Public/video/1.mp4" type="video/mp4">
                         </video>
                      </div>
					
				</div>
			</div>   -->          
   
            </div>


          
  
   
    <!--  <div class="box"> 
    <div class="box-head" style="margin-left:-15px;"> 
     <h2> <span>创业团队交流热门分类综合讨论区</span>  </h2> 
    </div> 
    <div class="bottom_bigbox" style="margin-left:-15px;"> 
     <div class="bottom_smailbox" > 
      <a href="http://www.java.com/zh_CN/"> <img style="float:left" src="/themes/simplebootx/Public/images/java.png" /> </a> 
      <h2><a href="http://www.java.com/zh_CN/ "><span style="color: #F00;font-size:24px; padding-left:15px;">Java</span></a>&nbsp;<span class="hot-img">Hot !</span></h2> 
      <span style="color:  #000;">&nbsp;&nbsp;语法基础/面向对象/核心技术/Java Web/</span>
      
      <span style="color:  #000;">&nbsp;&nbsp;Java是一种可以撰写跨平台应用软件的面向对象的程序设计语言。</span>
      <br /> 
     </div> 
     <div class="bottom_smailbox"> 
      <a href="http://bbs.hiapk.com/"> <img style="float:left"src="/themes/simplebootx/Public/images/android.png" /> </a> 
      <h2><a href="http://bbs.hiapk.com/ "><span style="color: #F00; font-size: 24px;">&nbsp;安卓</span></a>&nbsp;<span class="hot-img">Hot !</span></h2> 
      <span style="color: #000;">&nbsp;&nbsp;是一种基于Linux的自由及开放源代码的操作系统，</span>
      <br /> 
      <span style="color: #000;">&nbsp;&nbsp;主要使用于移动设备，如智能手机和平板电脑。</span>
      <br /> 
     </div> 
     
     <div class="bottom_smailbox"> 
      <a href="http://www.w3school.com.cn/h.asp"> <img style="float:left"src="/themes/simplebootx/Public/images/web-qianduan.png" /> </a> 
      <h2><a href="http://www.w3school.com.cn/h.asp "><span style="color: #F00; font-size: 24px;">&nbsp;前端</span></a>&nbsp;<span class="hot-img">Hot !</span></h2> 
      <span style="color:  #000;">&nbsp;&nbsp;主要职责是利用HTML/CSS/JavaScript/等各种Web技术进行客户端产品的开发。</span>
      <br /> 
      <span style="color:  #000;">&nbsp;&nbsp;同时结合后台开发技术模拟，进行丰富互联网的Web开发。</span>
      <br /> 
     </div> 
     <div class="bottom_smailbox"> 
      <a href="http://www.w3school.com.cn/s.asp"> <img style="float:left" src="/themes/simplebootx/Public/images/apple45.png" /> </a> 
      <h2><a href="http://www.w3school.com.cn/s.asp"><span style="color: #F00; font-size: 24px;">&nbsp;Object-c</span></a>&nbsp;<span class="hot-img">Hot !</span></h2> 
      <span style="color:  #000;">&nbsp;&nbsp;Object-C通常写作Objective-C或者Obj-C或OC</span>
      <br /> 
      <span style="color: #000;">&nbsp;&nbsp;是根据C语言所衍生出来的语言，继承了C语言的特性，是扩充C的面向对象编程语言。</span>
      <br /> 
     </div> 
     
      <div class="bottom_smailbox"> 
      <a href="http://www.w3school.com.cn/php/index.asp"> <img style="float:left" src="/themes/simplebootx/Public/images/web-houtai.png" /> </a> 
      <h2><a href="http://www.w3school.com.cn/php/index.asp "><span style="color: #F00; font-size: 24px;">&nbsp;PHP</span></a>&nbsp;<span class="hot-img">Hot !</span></h2> 
      <span style="color:  #000;">&nbsp;&nbsp;是一种通用开源脚本语言。</span>
      <br /> 
      <span style="color: #000;">&nbsp;&nbsp;语法吸收了C语言、Java和Perl的特点，利于学习，使用广泛，主要适用于Web开发领域。</span>
      <br /> 
     </div> 
     
     <div class="bottom_smailbox"> 
      <a href="http://www.acmerblog.com/"> <img style="float:left" src="/themes/simplebootx/Public/images/acm-talk.png" /> </a> 
      <h2><a href=" http://www.acmerblog.com/"><span style="color: #F00; font-size: 24px;">&nbsp;Python</span></a>&nbsp;<span class="hot-img">Hot !</span></h2> 
      <span style="color: #000;">&nbsp;&nbsp;Python是纯粹的自由软件</span>
      <br /> 
      <span style="color: #000;">&nbsp;&nbsp;Python具有丰富和强大的库。它常被昵称为胶水语言，能够把用其他语言制作的各种模块（尤其是C/C++）很轻松地联结在一起。</span>
      <br /> 
     </div> 
     <div class="bottom_smailbox"> 
      <a href="http://www.w3school.com.cn/ws.asp"> <img style="float:left"src="/themes/simplebootx/Public/images/wangpan.png" /> </a> 
      <h2><a href=" http://www.w3school.com.cn/ws.asp"><span style="color: #F00; font-size: 24px;">&nbsp;Web</span></a>&nbsp;<span class="hot-img">Hot !</span></h2> 
      <span style="color: #000;">&nbsp;&nbsp;web的本意是蜘蛛网和网的意思</span>
      <br /> 
      <span style="color: #000;">&nbsp;&nbsp;在网页设计中我们称为网页的意思,表现为三种形式，即超文本（hypertext）、超文本传输协议（HTTP）等。</span>
      <br /> 
     </div> 
     
     <div class="bottom_smailbox"> 
      <a href="http://yun.baidu.com/"> <img style="float:left"src="/themes/simplebootx/Public/images/pan.png" /> </a> 
      <h2><a href="http://yun.baidu.com/ "><span style="color: #F00; font-size: 24px;">&nbsp;网盘</span></a>&nbsp;<span class="hot-img">Hot !</span></h2> 
      <span style="color: #000;">&nbsp;&nbsp;又称网络U盘、网络硬盘，是由互联网公司推出的在线存储服务</span>
      <br /> 
      <span style="color: #000;">&nbsp;&nbsp;向用户提供文件的存储、访问、备份、共享等文件管理等功能。</span>
      <br /> 
     </div> 
    </div> 
   </div>        -->
     
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
      

        <div id="leftsead">
	<ul>
		<li>
			<a href="javascript:void(0)" class="youhui">
				<img src="/themes/simplebootx/Public/images/l02.png" width="47" height="49" class="shows" />
				<img src="/themes/simplebootx/Public/images/a.png" width="57" height="49" class="hides" />
				<img src="/themes/simplebootx/Public/images/weixin.jpg" width="145" class="2wm" style="display:none;margin:-100px 57px 0 0" />
			</a>
		</li>
		<li>
			<a href="http://wpa.qq.com/msgrd?v=3&uin=800022936&site=qq&menu=yes" target="_blank">
				<div class="hides" style="width:161px;display:none;" id="qq">
					<div class="hides" id="p1">
						<img src="/themes/simplebootx/Public/images/ll04.png">
					</div>
					<div class="hides" id="p2"><span style="color:#FFF;font-size:13px">800022936</span>
					</div>
				</div>
				<img src="/themes/simplebootx/Public/images/l04.png" width="47" height="49" class="shows" />
			</a>
		</li>
        <li id="tel">
        <a href="javascript:void(0)">
            <div class="hides" style="width:161px;display:none;" id="tels">
                <div class="hides" id="p1">
                    <img src="/themes/simplebootx/Public/images/ll05.png">
                </div>
                <div class="hides" id="p3"><span style="color:#FFF;font-size:12px">0551-65371998</span>
                </div>
            </div>
        <img src="/themes/simplebootx/Public/images/l05.png" width="47" height="49" class="shows" />
        </a>
        </li>
        <li id="btn">
        <a id="top_btn">
            <div class="hides" style="width:161px;display:none">
                <img src="/themes/simplebootx/Public/images/ll06.png" width="161" height="49" />
            </div>
            <img src="/themes/simplebootx/Public/images/l06.png" width="47" height="49" class="shows" />
        </a>
    </li>
    </ul>
</div>
<script src="/themes/simplebootx/Public/js/slippry.min.js"></script>
<script>
$(function() {
	var demo1 = $("#homeslider").slippry({
		transition: 'fade',
		useCSS: true,
		captions: false,
		speed: 1000,
		pause: 3000,
		auto: true,
		preload: 'visible'
	});
});
</script>
<?php echo hook('footer_end');?>
</body>
</html>