// JavaScript Document

/*$(function(){*/
function setPress(url,num, name=''){
	$('body,html').css({overflow:'hidden'})
	var str="";
	for(var i=1;i<=num;i++){
		str+="<img src='images/press/"+url+"/p"+i+".jpg'>"
	}

	var HTML='<div class="viewPort"><div class="viewTitle" style="z-index: 5;margin:15px 0px 0px 30px;"><a class="viewTitle" style="color: white;font-size:14px;">'+name+'</a></div><div class="photoControl1"><img src="images/portfolio/close.jpg" id="idClose" style="width:25px;"></div><div class=viewIMG>'+str+'</div><div class="photoControl"><img src="images/portfolio/prev.jpg" id="idPrev"><img src="images/portfolio/stop.jpg" id="idAuto"><img src="images/portfolio/next.jpg" id="idNext"></div><div class="photomask"></div></div>'
	$('.page').append(HTML)


	var IMG=$('.viewIMG img')
	var ALL=num;
	var NOW=0;
	var SPEED=1000;
	var DTIME=3000;
	var autoPlay=true;

	IMG.eq(NOW).css({opacity:1,zIndex:3}).siblings('img').css({opacity:0,zIndex:1})

	function showPhoto(){
		IMG.eq(NOW).stop().fadeTo(SPEED,1).css({zIndex:3}).siblings('img').stop().fadeTo(SPEED,0).css({zIndex:1});
	}
	function showNext(){
		if(NOW<ALL-1){
			NOW+=1;
		}else{
			NOW=0;
		}
		showPhoto();
	}
	function showPrev(){
		if(NOW>0){
			NOW-=1;
		}else{
			NOW=ALL-1;
		}
		showPhoto();
	}
	function showAuto(){
		tt=setInterval(showNext,DTIME);
	}
	function showStop(){
		clearInterval(tt);
	}
	$("#idPrev").click(function(){
		showPrev();
		showStop();
		if(autoPlay){
			showAuto();
		}
	})
	$("#idNext").click(function(){
		showNext();
		showStop();
		if(autoPlay){
			showAuto();
		}
	})
	$("#idAuto").click(function(){
		if(autoPlay){
			showStop();
			$(this).attr("src","images/portfolio/play.jpg");
			autoPlay=false;
		}else{
			showAuto();
			$(this).attr("src","images/portfolio/stop.jpg");
			autoPlay=true
		}
	})
	$("#idClose, .photomask").click(function(){
		$('.viewPort').remove();
	})


	function setSize(){
		var viewWidth=$('.viewPort').width()-30*2
		var viewHeight=$('.viewPort').height()-60-90
		var viewRatio=viewWidth/viewHeight

		IMG.each(function(index, element) {
			if(index<ALL){
			var imgW=$(this)[0].naturalWidth
			var imgH=$(this)[0].naturalHeight
			var imgRatio=imgW/imgH

			if(imgRatio<viewRatio){
				$(this).css({height:viewHeight,width:'auto',top:90,left:30+(viewWidth-viewHeight*imgRatio)*0.5})
				$('.photoControl1').css({height:'auto',right:15, top:15})
			}else{
				$(this).css({height:'auto',width:viewWidth,top:60+(viewHeight-viewWidth/imgRatio)*0.5,left:30})
				$('.photoControl1').css({height:'auto',right:15, top:15})
			}
			}
		});
	}

	showAuto()
	setSize();

	$('.viewPort').imagesLoaded(function(){
		setSize();
		$('body,html').css({overflow:'auto'})
	})
	$(window).resize(function(){
		setSize();
	})

}
/*})*/



function setVideo(url){
 $('body,html').css({overflow:'hidden'})
 var str=url;

 var HTML='<div class="viewPort">'+str+'<div class="photoControl"><img src="images/portfolio/close.jpg" id="idClose"></div><div class="photomask"></div></div>'
 $('.page').append(HTML)

 $('.photomask').css({zIndex:-1})

 $("#idClose, .photomask").click(function(){
  $('.viewPort').remove();
 })
}
/*})*/