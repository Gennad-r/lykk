$(function() {
	$('.owl-carousel.pict-slider').owlCarousel({
		'items': 1,
		'loop': true,
		'autoplay': true,
		'nav': true,
		'navText': ['<span class="icon-arr-left"></span>', '<span class="icon-arr-right"></span>']
	});

$('#order').click(function (e) {
	e.preventDefault();
	$('.modal').modal('show');
})


});


function tabs(tabs, blocs) {
	if (tabs.length == blocs.length) {
		$(blocs[0]).show();
		tabs.on('click', function (e) {
			e.preventDefault();
			console.log('click');
			tabs.removeClass('active');
			blocs.hide();
			$(this).addClass('active');
			$(blocs[$(this).data('order')]).fadeIn();
		})
	}
}


//complex solutions
var solutionPlates = $('.complex-solutions .solution'),
	solutionTextBlocks = $('.complex-solutions .solution__text-block');

tabs(solutionPlates, solutionTextBlocks);

// product tabs
tabs( $('.tabs-controls>li'), $('.tabs-content>li') )


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



$("#check-request-modal").submit(function() { //Change
		var th = $(this);
			$.ajax({
				type: "POST",
				url: "mail.php", //Change
				data: th.serialize()
			}).done(function() {
				$('#check-request-modal').modal('hide');
				setTimeout(function() {
					// Done Functions
					th.trigger("reset");
				}, 1000);
			});
return false;
		});
