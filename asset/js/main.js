$(document).ready(function () {

	$(window).resize(function() {
		$('.swiper-slide a').css('height',$(window).height()+'px');
	});
	
	$(window).trigger('resize');
	
	var slide_count = 0,is_next = true;
	
	var sw = $('.swiper-container').swiper({
		pagination : '.swiper-pagination',
		effect: 'fade',
		speed: 800,
		autoplay : 5000,
		keyboardControl : true,
		mousewheelControl : true,
		paginationClickable: true,
		onInit:function(swiper){
			var $items = JSON.parse(items);
			slide_count = $items.length;

			$.each($items, function(i,v){
				var a_url = '';
				if( v.url ) { a_url = 'href="'+v.url+'"'; }

				swiper.appendSlide('<div class="swiper-slide"><a '+a_url+' target="'+v.url_target+'" style="background-image:url('+v.image_path+'/'+v.image+'?v='+v.utime+')"></div>');
			});
			setTimeout(function() {
				$('.swiper-pagination').css('margin-top','-'+($('.swiper-pagination').height()-((slide_count-1)*55))+'px').show();
			}, 100);
		},
		onSlideChangeStart: function(swiper){
			if( swiper.activeIndex==slide_count-1 ) {
				$('.arrows').removeClass('arrow-right').addClass('arrow-left');
				is_next = false;
			}
			if( swiper.activeIndex==0 ) {
				$('.arrows').removeClass('arrow-left').addClass('arrow-right');
				is_next = true;
			} else {
				if( swiper.activeIndex==slide_count ){
					$('.logo').hide();
				} else {
					$('.logo').show();
				}
			}
		}
	});

	$(document.body).on('click','.arrows', function(e) {
		e.preventDefault();
		if( is_next ) {
			sw.slideNext();
		} else {
			sw.slidePrev();
		}
	});

	$('.logo').on('click', function(e){
		sw.slideTo(0);
	});
});
