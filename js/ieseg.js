jQuery(document).ready(function($) {
	//alert('youhou');
	jQuery('#barre-top .btn-search').click(function() {
		jQuery('#barre-top .container-search-header').removeClass('hide');
		jQuery('#barre-top .container-search-header').slideToggle();
		
	});
	
//Formulaire Cibles homepage	
$("#button-form-cibles-home").click(function(event){

	var q;
	q=$("#form-cibles-home select").val();
	window.location = q;
});
	
	$('#form-cibles-home').submit(function(event){
	
	var q;
	q=$("#form-cibles-home select").val();
	window.location = q;
	event.preventDefault();
});


$('.home .bloc-rankings .bxslider').bxSlider({
	auto: true,
	controls : false
});


// Slider Témoignages Homepage programmes

  $('.proghome-testimonials .bxslider').bxSlider({
  	mode: 'fade',
  	infiniteLoop: true,
  	easing: 'linear',
  	tickerHover: true,
  	preloadImages: 'visible',
  	auto: true,
  	autoHover: true,
  	speed: '400',
  	adaptiveHeight: true
});

});

     
