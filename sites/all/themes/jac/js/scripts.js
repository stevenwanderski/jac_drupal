$(function(){
	if($('.page-band').length > 0){
		$('.fancybox').fancybox({
			prevEffect: 'fade',
			nextEffect: 'fade',
			helpers: {
				overlay: {
					opacity: 0.3
				}
			}
		});
	}

	if($('.img-wrap').length > 0){
		var speed = 400;
		$('nav.main a').hover(function() {
			var bandId = $(this).attr('data-band-id');
			$('.band-pic').not(this).fadeOut(speed);
			$('.band-pic-' + bandId).fadeIn(speed);
		}, function() {
			$('.band-pic').stop(true, true).fadeOut(speed);
		});

		$('nav.main').hover(function() {
			$('.img-main').fadeOut(speed);
		}, function() {
			$('.img-main').stop(true, true).fadeIn(speed);
		});
	}

	$('.webform-client-form').validate();

});