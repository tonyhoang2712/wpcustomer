$(function(){
	function setAudio(){
		if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
			musicPlay=false;
			$('.musicBtn').css({display:'none'})
			$('#Audio').remove()
		}else{
			musicPlay=true;
		}
	}
	setAudio()
	
	$('.musicBtn').click(function(){
		if(musicPlay){
			$('.musicBtn').addClass('musicStop')
			$('#Audio').trigger("pause");
			musicPlay=false;			
		}else{
			$('.musicBtn').removeClass('musicStop')			
			$('#Audio').trigger("play");
			musicPlay=true;
		}		
	})
	
	setViewPort();	
	setNav();
	setSize();
	Loading();
})