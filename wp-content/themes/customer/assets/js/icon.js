$(function(){
	//主選單&Link按鈕滑入滑出效果
	$("#bLink li").hover(function(){
		$(this).find('img').css({marginTop:-35})
	},function(){
		$(this).find('img').css({marginTop:0})
	})
	
	$('.clearlist li').hover(function(){
		$(this).find('div').eq(0).css({display:'none'})
		$(this).find('div').eq(1).css({display:'block'})
		$(this).find('div').eq(2).stop().animate({width:'50%'},300)
	},function(){
		
		if($(this).hasClass('on')){
			$(this).find('div').eq(0).css({display:'none'})
		$(this).find('div').eq(1).css({display:'block'})
		$(this).find('div').eq(2).stop().animate({width:'50%'},300)
		}else{
			$(this).find('div').eq(0).css({display:'block'})
		$(this).find('div').eq(1).css({display:'none'})
			$(this).find('div').eq(2).animate({width:0},300)
		}
	})
	})