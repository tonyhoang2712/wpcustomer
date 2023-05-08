// JavaScript Document

function setPhoto(urls, name=''){

	if (document.getElementById("myModal")) {
		document.getElementById('myModal').remove();
	}
	if (document.getElementById("showBtn")) {
		document.getElementById('showBtn').remove();
	}
	$('body,html').css({overflow:'hidden'});
	var realUrls = urls.split(",");

	var str = "";
	var HTML = "";
	HTML+= '<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" id="showBtn"></button>';
	realUrls.forEach(function(item) {
		str+="<div><div class='item'><img class='img-responsive' src='" + item + "'></div></div>";
	})

	HTML+='<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" tabindex="-1"><path d="M20 20L4 4m16 0L4 20"></path></svg></button><h4 class="modal-title" id="myModalLabel">'+name+'</h4></div><div class="modal-body"><div class="main"><div class="slider">'+str+'</div><div class="slider-nav"></div></div></div></div></div>';
	$('.page').append(HTML);
	$('.category').append(HTML);

	$('#showBtn').hide();
 
	$('.slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		infinite: true,
		appendDots:'.slider-nav',
		dots: true,
		arrows: true
	});

	$('.slick-dots').wrap('<div class="slider-nav dots-constrained"></div>');
	
	const shiftUnit = 20;
	let totalSlides = $('.slider-nav .slick-dots li').length;
	let shiftValue = 0;
	const RIGHT = -1;
	const LEFT = 1;
	const DotsToShow = 5;

	totalSlides > DotsToShow ? $('.slider-nav').addClass("dots-constrained"): "";

	initialDotsLayout(0);

	$('.slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
		reqSlideVal = 0;

		$('.slider-nav .slick-dots li').removeClass("dot--medium");

		if(nextSlide > currentSlide) {
			reqSlideVal = shiftValueCalculator(currentSlide, nextSlide, RIGHT)*shiftUnit*RIGHT;
		} else {
			reqSlideVal = shiftValueCalculator(currentSlide, nextSlide, LEFT)*shiftUnit;
		}

		if( nextSlide > 2 && nextSlide < totalSlides-3) {
			shiftValue = shiftValue + reqSlideVal;
			$('.slider-nav .slick-dots li').eq(nextSlide + 1).addClass("dot--medium");
			$('.slider-nav .slick-dots li').eq(nextSlide - 1).addClass("dot--medium");

		} else if(nextSlide <=2){
			shiftValue = 0;
			initialDotsLayout(nextSlide);
		} else if (nextSlide >= totalSlides-3) {
			shiftValue = (totalSlides - DotsToShow)*shiftUnit*RIGHT;
			lastDotsLayout(nextSlide);
		}

		$('.slider-nav .slick-dots').css({'transform' : 'translateX(' + shiftValue + 'px' + ')'});
	});


	function shiftValueCalculator(currentSlide, nextSlide, direction) {
		let slideDifference = 0;
		if(direction === RIGHT) {
			slideDifference = nextSlide - currentSlide;
		} else {
			slideDifference = currentSlide - nextSlide;
		}
	 
		switch(slideDifference) {
			case 4: return 2;
			case 3: return 1;
			default: return slideDifference;
		}
	}

	function initialDotsLayout(nextSlide) {
		if (nextSlide==0){
			$('.slider-nav .slick-dots li').eq(1).addClass("dot--medium");
		} else if (nextSlide==1){
			$('.slider-nav .slick-dots li').eq(0).addClass("dot--medium");
			$('.slider-nav .slick-dots li').eq(2).addClass("dot--medium");
		} else if (nextSlide==2){
			$('.slider-nav .slick-dots li').eq(1).addClass("dot--medium");
			$('.slider-nav .slick-dots li').eq(3).addClass("dot--medium");
		}
	}

	function lastDotsLayout(nextSlide) {
		$('.slider-nav .slick-dots li').eq(nextSlide + 1).addClass("dot--medium");
		$('.slider-nav .slick-dots li').eq(nextSlide - 1).addClass("dot--medium");
	}

	document.getElementById("showBtn").click();
}
