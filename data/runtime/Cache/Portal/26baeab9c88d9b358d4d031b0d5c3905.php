<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html>
	<head>
		<title><?php echo ($post_title); ?> <?php echo ($site_name); ?> </title>
		<meta name="keywords" content="<?php echo ($post_keywords); ?>" />
		<meta name="description" content="<?php echo ($post_excerpt); ?>">
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
	
		<style>
			#article_content img{height:auto !important}
			#article_content {word-wrap: break-word;}
    		.btn {margin-top: 33px;}
		</style>
	</head>
<body class="">
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
		<div class="span9">
			
			<div class="tc-box first-box article-box">
		    	<h2><?php echo ($post_title); ?></h2>
		    	<div class="article-infobox">
		    		<span><?php echo ($post_date); ?> by <?php echo ((isset($user_nicename) && ($user_nicename !== ""))?($user_nicename):$user_login); ?></span>
		    		<span>
		    			<a href="javascript:;"><i class="fa fa-eye"></i><span><?php echo ($post_hits); ?></span></a>
						<a href="<?php echo U('article/do_like',array('id'=>$object_id));?>" class="js-count-btn"><i class="fa fa-thumbs-up"></i><span class="count"><?php echo ($post_like); ?></span></a>
						<a href="<?php echo U('user/favorite/do_favorite',array('id'=>$object_id));?>" class="js-favorite-btn" data-title="<?php echo ($post_title); ?>" data-url="<?php echo leuu('article/index',array('id'=>$tid,'cid'=>$term_id));?>" data-key="<?php echo sp_get_favorite_key('posts',$object_id);?>">
							<i class="fa fa-star-o"></i>
						</a>
					</span>
		    	</div>
		    	<hr>
		    	<div id="article_content">
		    	<?php echo ($post_content); ?>
		    	</div>
                <?php if(!empty($post_source)): ?><div>
                        <b>注：本文转载自<?php echo ($post_source); ?>，转载目的在于传递更多信息，并不代表本网赞同其观点和对其真实性负责。如有侵权行为，请联系我们，我们会及时删除。</b>
                    </div><?php endif; ?>
		    	<div>
					<?php if(!empty($prev)): ?><a href="<?php echo leuu('article/index',array('id'=>$prev['tid'],'cid'=>$prev['term_id']));?>" class="btn btn-primary pull-left">上一篇</a><?php endif; ?>
					<?php if(!empty($next)): ?><a href="<?php echo leuu('article/index',array('id'=>$next['tid'],'cid'=>$next['term_id']));?>" class="btn btn-warning pull-right">下一篇</a><?php endif; ?>
    	            <script type="text/javascript" src="/themes/simplebootx/Public/js/qrcode.min.js"></script>
                    <div id="qrcode" style="width: 100px;margin:0 auto"></div>
    					
					<div class="clearfix"></div>
				</div>
		    	
		    	
		    	<?php echo hook('comment',array( 'post_id'=>$object_id, 'post_table'=>'posts', 'post_title'=>$post_title ));?>
		    </div>
		    
		    <?php $ad=sp_getad("portal_article_bottom"); ?>
			<?php if(!empty($ad)): ?><div class="tc-box">
	        	<div class="headtitle">
	        		<h2>赞助商</h2>
	        	</div>
	        	<div>
		        	<?php echo ($ad); ?>
		        </div>
			</div><?php endif; ?>
		    
		</div>
		<div class="span3">
			
        	
        	<div class="tc-box">
	        	<div class="headtitle">
	        		<h2>热门文章</h2>
	        	</div>
	        	<div class="ranking">
	        		<?php $hot_articles=sp_sql_posts("cid:$portal_hot_articles;field:post_title,post_excerpt,tid,smeta,term_id;order:post_hits desc;limit:5;"); ?>
		        	<ul class="unstyled">
		        		<?php if(is_array($hot_articles)): foreach($hot_articles as $key=>$vo): $top=$key<3?"top3":""; ?>
							<li class="<?php echo ($top); ?>"><i><?php echo ($key+1); ?></i><a title="<?php echo ($vo["post_title"]); ?>" href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>"><?php echo ($vo["post_title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>
			
			<div class="tc-box">
	        	<div class="headtitle">
	        		<h2>最新加入</h2>
	        	</div>
	        	<?php $last_users=sp_get_users("field:*;limit:0,8;order:create_time desc;"); ?>
	        	<ul class="list-unstyled tc-photos margin-bottom-30">
	        		<?php if(is_array($last_users)): foreach($last_users as $key=>$vo): ?><li>
	                    <a href="<?php echo U('user/index/index',array('id'=>$vo['id']));?>">
	                    <img alt="" src="<?php echo U('user/public/avatar',array('id'=>$vo['id']));?>">
	                    </a>
                    </li><?php endforeach; endif; ?>
                </ul>
			</div>
			
			<div class="tc-box">
	        	<div class="headtitle">
	        		<h2>最新评论</h2>
	        	</div>
	        	<div class="comment-ranking">
	        		<?php $last_comments=sp_get_comments("field:*;limit:0,5;order:createtime desc;"); ?>
	        		<?php if(is_array($last_comments)): foreach($last_comments as $key=>$vo): ?><div class="comment-ranking-inner">
	                        <i class="fa fa-comment"></i>
	                        <a href="<?php echo U('user/index/index',array('id'=>$vo['uid']));?>"><?php echo ($vo["full_name"]); ?>:</a>
	                        <span><?php echo ($vo["content"]); ?></span>
	                        <a href="/<?php echo ($vo["url"]); ?>#comment<?php echo ($vo["id"]); ?>">查看原文</a>
	                        <span class="comment-time"><?php echo date('m月d日  H:i',strtotime($vo['createtime']));?></span>
	                    </div><?php endforeach; endif; ?>
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