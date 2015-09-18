jQuery(document).ready(function($) {
	//alert('youhou');
	jQuery('#barre-top .btn-search').click(function() {
		jQuery('#barre-top .container-search-header').removeClass('hide');
		jQuery('#barre-top .container-search-header').slideToggle();
		
	});

//Initialisation de wow.js
wow = new WOW(
    {
      mobile:false 
    }
  );
wow.init();


// Egaliser les blocs News et Events :

var news = jQuery( ".news" ).height()  ;

var events = jQuery( ".events" ).height()  ;

if (news < events){
        jQuery( ".news" ).height(events);
}
else{
        jQuery( ".events" ).height(news);
}



function egalize_blocks(){
	 // Egaliser deux blocs (divers) :

	var a = jQuery( ".bloca" ).height()  ;

	var b = jQuery( ".blocb" ).height()  ;
//alert('a = '+ a + 'b = '+ b);
	if (a < b){
	        jQuery( ".bloca" ).height(b);
	}
	else{
	        jQuery( ".blocb" ).height(a);
	}

	// Egaliser deux blocs (dans la cas où on a 4 blocs sur la même page) :

	var c = jQuery( ".blocc" ).height()  ;

	var d = jQuery( ".blocd" ).height()  ;

	if (c < d){
	        jQuery( ".blocc" ).height(d);
	}
	else{
	        jQuery( ".blocd" ).height(c);
	}   
}


//Formulaire Recherche sur page 404

//$(".error404 .search-box-404 form").addClass("form-inline");
//$(".error404 .search-box-404 .search-field").addClass("form-control input-lg");
$(".error404 .search-box-404 .search-submit").addClass("btn");



	
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

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////// Tableaux programs /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	
jQuery('.click_to_show_all_courses').click(function(){

	jQuery(this).parents('.tableau_programs_details').find("tbody").toggle('slow');
   
	if (jQuery(this).find('.read_more').html()==='+'){
			jQuery(this).find('.read_more').html('-');
			 
	}
	else if 
			(jQuery(this).find('.read_more').html()==='-'){
			jQuery(this).find('.read_more').html('+');

	}
	
});

jQuery('.course_title').click(function(){

	jQuery(this).parents('.program').find('.course_description').slideToggle(500);
	if (jQuery(this).parents('.program').find('.read_on').html()==='+'){
			jQuery(this).parents('.program').find('.read_on').html('-');
			 
	}
	else if 
			(jQuery(this).parents('.program').find('.read_on').html()==='-'){
			jQuery(this).parents('.program').find('.read_on').html('+');

	}
	
});

egalize_blocks();

jQuery('.activate-egalizer').click(function(){
	egalize_blocks();
});

});