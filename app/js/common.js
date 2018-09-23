$(function() {
	$('.owl-carousel.pict-slider').owlCarousel({
		'items': 1,
		'loop': true
	});


	$('.about-company').click(function (e) {
		e.stopPropagation();
		$.each($('.about-company .about-company__plate'), function(i, el){
			$(el).removeClass('active-plate');
		})
			console.log($(e.target).parent('.about-company__plate'));
			$(e.target).parent('.about-company__plate').addClass('active-plate');
			var dataAttr = $(e.target).parent('.about-company__plate').attr('data-num');
			$('.owl-carousel.pict-slider').trigger('to.owl.carousel', dataAttr);
	})
});
