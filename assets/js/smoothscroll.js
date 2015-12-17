$(function() {
	$('.smoothScroll').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
		|| location.hostname == this.hostname) {
			
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 1000, 'swing');
				return false;
			}
		}
	});
});

$(window).scroll(function() {
	var windscroll = $(window).scrollTop();
	if (windscroll >= 100) {
		$('.nav').addClass('fixed');
		$('.content').each(function(i) {
			if ($(this).position().top <= windscroll + 75) {
				$('.nav li.active').removeClass('active');
				$('.nav li').eq(i).addClass('active');
			}
		});
		} else {
		$('.nav').removeClass('fixed');
		$('.nav li.active').removeClass('active');
		$('.nav li:first').addClass('active');
	}
}).scroll();