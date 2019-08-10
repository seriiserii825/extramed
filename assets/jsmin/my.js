jQuery( document ).ready(function( $ ) {

	let certificateGallery = function(){
		$('.certificates-gallery__item').magnificPopup({
			type: 'image',
			gallery:{
				enabled:true
			}
		});
	};

	let certificateGallerySlider = function(){
		$('#js-certificates-gallery').slick({
			slidesToShow: 4,
			slidesToScroll: 2,
			arrows: true,
			nextArrow: '<i class="fa fa-angle-right fa-next" aria-hidden="true"></i>',
			prevArrow: '<i class="fa fa-angle-left fa-prev" aria-hidden="true"></i>',
			responsive: [
				{
					breakpoint: 700,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}]
		});

	}

	let pdfWidth = function(){
		$('.wp-block-cgb-block-algori-pdf-viewer-iframe').css({
			'margin': '0 auto',
			'max-width': '1400px',
			'width': '100%'
		});
	};

	let presentationPopup = function(){
		$('.presentation .popup').magnificPopup({
			type: 'image',
			gallery:{
				enabled:true
			}
		});
	};

	let presentationSlider3 = function(){
		$('#js-presentation-slider-3').slick({
			dots: false,
			arrows: true,
			prevArrow: $('#js-presentation-slider3-wrap .presentation-arrow-prev'),
			nextArrow: $('#js-presentation-slider3-wrap .presentation-arrow-next'),
		});
	};

	let citeSlider = function(){
		$('#js-quote-slider').slick({
			dots: false,
			arrows: true,
			fade: true,
			autoplay: true,
			autoplaySpeed: 6000,
			infinite: true,
			speed: 1000,
			prevArrow: $('.quote-arrows .arrow-prev'),
			nextArrow: $('.quote-arrows .arrow-next'),
		});
	};

	certificateGallery();
	certificateGallerySlider();
	pdfWidth();
	presentationPopup();
	presentationSlider3();
	citeSlider();
});


