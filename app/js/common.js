$(function() {
	$('.owl-carousel.pict-slider').owlCarousel({
		'items': 1,
		'loop': true,
		'autoplay': true,
		'nav': true,
		'navText': ['<span class="icon-arr-left"></span>', '<span class="icon-arr-right"></span>']
	});




});



//complex solutions
var solutionPlates = $('.complex-solutions .solution'),
	solutionTextBlocks = $('.complex-solutions .solution__text-block');
$(solutionTextBlocks[0]).show();
solutionPlates.on('click', function (e) {
	e.preventDefault();
	solutionPlates.removeClass('active');
	solutionTextBlocks.hide();
	$(this).addClass('active');
	$(solutionTextBlocks[$(this).data('order')]).fadeIn();
})

// to top
$('.go-top').click(function () {
	$('html, body').stop().animate({
					scrollTop: 0
				}, 600);
})
$(window).on('scroll', (function() {
		var scrollDistance = $(window).scrollTop();
		if ( window.scrollY >= window.innerHeight * 0.8 ) {
			$('.go-top').addClass('s-scrolled');
		} else {
			$('.go-top').removeClass('s-scrolled');
		};

	}));


var acc = $('.acc-block');
	acc.find('.acc-block__header').on('click', function (e) {
		acc.find('.acc-text').fadeOut();
		acc.removeClass('active');
		$(this).parent('.acc-block').find('.acc-text').fadeIn();
		$(this).parent('.acc-block').addClass('active');
	})