jQuery(document).ready(function($) {
	//alert('youhou');
	jQuery('#barre-top .btn-search').click(function() {
		jQuery('#barre-top .container-search-header').removeClass('hide');
		jQuery('#barre-top .container-search-header').slideToggle();
		
	});
	
new WOW().init();

// Egaliser les blocs NEWS et EVENTS :

var smaller_height_box= jQuery( ".events" ).height()  ;

var tallest_height_box= jQuery( ".news" ).height()  ;

if (smaller_height_box<tallest_height_box){
        jQuery( ".events" ).height(tallest_height_box);
}
else{
        jQuery( ".news" ).height(smaller_height_box);
};
	
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



// Slider bloc classement Homepage
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

     
