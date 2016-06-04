$(function(){

	//将内容插入到body开始处，页面加载完毕后自动展开
	$('body').prepend("<div class='logo1'><a href=' ' class='link'></a></div>");
	$('.logo1').slideDown(1500,function(){
		$('.logo1').append("<a href='javascript:;' class='up'></a>");									  
	});	
	//设置延时函数
	function adsUp(){
		$('.logo1').animate({
			height:'100px',
			opacity:'1.0'						 
		},1000,function(){
			//$(this).find('.up').addClass('down').removeClass('up');	
		});	
	}
	//五秒钟后自动收起
	var t = setTimeout(adsUp,2000);
	//点击收起
	/*$('.zzsc a.up').live('click',function(){
		clearTimeout(t);
		$('.zzsc').animate({
			height:'100px'						 
		},function(){
			$(this).find('.up').addClass('down').removeClass('up');	
		});	 
	});	
	
	//点击下拉
	$('.zzsc a.down').live('click',function(){
		$(this).css({
			opacity:'0'	,
			filter:'alpha(opacity=0)'
		});
		$('.zzsc').animate({
			height:'250px'
		},function(){
			$(this).find('.down').addClass('up').removeClass('down').css({opacity:'1',filter:'alpha(opacity=100)'});
		});	 
	});**/
	
	

});