jQuery(document).ready(function($) {
	//alert('youhou');
	jQuery('#barre-top .btn-search').click(function() {
		jQuery('#barre-top .container-search-header').removeClass('hide');
		jQuery('#barre-top .container-search-header').slideToggle();
		
	});

//Initialisation de wow.js
wow = new WOW(
    {
      mobile:       false       // default
    }
  )
wow.init();


// Egaliser les blocs News et Events :

var news = jQuery( ".news" ).height()  ;

var events = jQuery( ".events" ).height()  ;

if (news < events){
        jQuery( ".news" ).height(events);
}
else{
        jQuery( ".events" ).height(news);
};


// Egaliser deux blocs (divers) :

var a = jQuery( ".bloca" ).height()  ;

var b = jQuery( ".blocb" ).height()  ;

if (a < b){
        jQuery( ".bloca" ).height(b);
}
else{
        jQuery( ".blocb" ).height(a);
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


});

     
