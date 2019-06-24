jQuery(function () {
	jQuery('.owl-carousel.pict-slider').owlCarousel({
		'items': 1,
		'loop': true,
		'autoplay': true,
		'nav': true,
		'navText': ['<span class="icon-arr-left"></span>', '<span class="icon-arr-right"></span>']
	});

	jQuery('#order').click(function (e) {
		e.preventDefault();
		jQuery('.modal').modal('show');
	})


});


function tabs(tabs, blocs) {
	if (tabs.length == blocs.length) {
		jQuery(blocs[0]).show();
		tabs.on('click', function (e) {
			e.preventDefault();
			console.log('click');
			tabs.removeClass('active');
			blocs.hide();
			jQuery(this).addClass('active');
			jQuery(blocs[jQuery(this).data('order')]).fadeIn();
		})
	}
}


//complex solutions
var solutionPlates = jQuery('.complex-solutions .solution'),
	solutionTextBlocks = jQuery('.complex-solutions .solution__text-block');

tabs(solutionPlates, solutionTextBlocks);

// product tabs
tabs(jQuery('.tabs-controls>li'), jQuery('.tabs-content>li'))


// to top
jQuery('.go-top').click(function () {
	jQuery('html, body').stop().animate({
		scrollTop: 0
	}, 600);
})
jQuery(window).on('scroll', (function () {
	var scrollDistance = jQuery(window).scrollTop();
	if (window.scrollY >= window.innerHeight * 0.8) {
		jQuery('.go-top').addClass('s-scrolled');
	} else {
		jQuery('.go-top').removeClass('s-scrolled');
	};

}));


var acc = jQuery('.acc-block');
acc.find('.acc-block__header').on('click', function (e) {
	acc.find('.acc-text').fadeOut();
	acc.removeClass('active');
	jQuery(this).parent('.acc-block').find('.acc-text').fadeIn();
	jQuery(this).parent('.acc-block').addClass('active');
})



jQuery("#check-request-modal").submit(function () { //Change
	var th = jQuery(this);
	jQuery.ajax({
		type: "POST",
		url: "mail.php", //Change
		data: th.serialize()
	}).done(function () {
		jQuery('#check-request-modal').modal('hide');
		setTimeout(function () {
			// Done Functions
			th.trigger("reset");
		}, 1000);
	});
	return false;
});


jQuery('#searchsubmit').click(function () {
	jQuery('#searchform').submit();
})