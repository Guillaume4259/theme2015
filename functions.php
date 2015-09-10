<?php
if ( ! function_exists( 'theme_ieseg_setup' ) ) :
function theme_ieseg_setup() {
	load_theme_textdomain( 'ieseg2015', get_template_directory() . '/languages' );
	
	add_theme_support('automatic-feed-links');
	add_theme_support( 'html5', array( 'search-form' ) );
	
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150 ); // default Post Thumbnail dimensions   


	add_image_size( 'mega-thumb', 2000, 786, true ); //content main image
	add_image_size( 'master-thumb', 556, 183, true ); //old ieseg theme legacy
	add_image_size( 'bloc-thumb', 378, 171, true ); //bloc actus
	add_image_size( 'testimonial-thumb', 420, 385, true ); //testimonial
	
	
	register_nav_menus( array(
		'header2015' => 'Header Navigation 2015',
		'Primary Menu 2015' => 'Main Navigation 2015',
		'footer2015' => 'Footer Navigation 2015'
    ) );
	
	if (ICL_LANGUAGE_CODE=="fr"){
		setlocale (LC_TIME, 'fr_FR.utf8','fra');
	}
}
endif; // theme_ieseg_setup
add_action( 'after_setup_theme', 'theme_ieseg_setup' );

/*function ieseg_font_url() {

	$font_url = add_query_arg( 'family',urlencode('Source+Sans+Pro:400,600,700,300,400italic'), "//fonts.googleapis.com/css" );

	return $font_url;
}
*/

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Twenty Fourteen 1.0
 */
function ieseg2_scripts() {
	//<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300,400italic' rel='stylesheet' type='text/css'>
	// Add Source Sans.
	wp_enqueue_style( 'ieseg-source-sans', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300,400italic', array(), null );

	// Add Genericons font, used in the main stylesheet.
	//wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.0.2' );

	// Load our main stylesheet.
	//wp_enqueue_style( 'twentyfourteen-style', get_stylesheet_uri(), array( 'genericons' ) );
	
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',false,'1.0');
	wp_enqueue_style('bootstrap-theme',get_template_directory_uri().'/css/bootstrap-theme.min.css',array('bootstrap'),'1.0');
	
	wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.css',false,'1.0'); // utile pour wow.js
	wp_enqueue_style('style-ieseg',get_template_directory_uri().'/css/ieseg.min.css',array('bootstrap'),'1.0');
   	//wp_enqueue_style('fancybox','/wp-content/themes/'.get_template().'/lib/fancybox/jquery.fancybox-1.3.4.css',false,'1.0');
	

	// Load the Internet Explorer specific stylesheet.
	//wp_enqueue_style( 'twentyfourteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfourteen-style', 'genericons' ), '20131205' );
	//wp_style_add_data( 'twentyfourteen-ie', 'conditional', 'lt IE 9' );

	//BX slider
	if ( is_front_page() || is_page_template('template-page-programs.php') ){
		wp_enqueue_script( 'bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array( 'jquery' ), '1.0', true );
		wp_enqueue_style('style-bxslider',get_template_directory_uri().'/css/jquery.bxslider.css',array('style-ieseg'),'1.0');
	}
	wp_enqueue_script( 'ieseg-script', get_template_directory_uri() . '/js/ieseg.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array( 'jquery' ), '1.0', true );
	//wp_enqueue_script( 'responsive-nav', get_template_directory_uri() . '/js/responsive-nav.min.js', array( 'jquery' ), '1.0', true ); //menu de gauche responsive

	if (is_page ( array( 'mib-class-profile', 'mib-career-opportunities','mfm-student-profiles', 'msc-digital-marketing-crm-class-profile', 'msc-business-analysis-consulting-class-profile', 'msc-accounting-audit-control', 'msc-finance-class-profile', 'msc-banking-capital-markets-class-profile', 'msc-in-negotiation-for-organizations-class-profile', 'msc-big-data-analytics-business-class-profile','imba-class-profile', 'programme-grande-ecole')) ){
	wp_enqueue_script( 'classprofiles', get_bloginfo('template_directory').'/js/classprofiles.js', array(),'1.1',true );
	}
}

add_action( 'wp_enqueue_scripts', 'ieseg2_scripts' );

/**
 * Register widget areas.
 *
 */
function ieseg_widgets_init() {

	register_sidebar( array(
		'name'          => __('Left Menu','ieseg2015'),
		'id'            => 'sidebar-left-menu',
		'description'   => __('Left Menu','ieseg2015'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __('Left Menu for Pages Cibles','ieseg2015'),
		'id'            => 'sidebar-left-menu-cibles',
		'description'   => __('Left Menu for Pages Cibles','ieseg2015'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __('Menu for Programs homepages','ieseg2015'),
		'id'            => 'program-home-menu',
		'description'   => __('Menu for Programs homepages','ieseg2015'),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __('Menu for MSc Programs pages','ieseg2015'),
		'id'            => 'msc-program-menu',
		'description'   => __('Menu for default MSc Programs pages (ie. not homepages)','ieseg2015'),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __('Menu for IMBA Programs pages','ieseg2015'),
		'id'            => 'imba-program-menu',
		'description'   => __('Menu for default IMBA Programs pages (ie. not homepage)','ieseg2015'),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'ieseg_widgets_init' );


function custom_is_child($pid) {
	// $pid = The ID of the ancestor page
	global $post; // load details about this page
	$anc = get_post_ancestors( $post->ID );
	foreach($anc as $ancestor) {
		if(is_page() && $ancestor == $pid) {
			return true;
		}
	}
	return false; // we're elsewhere
}


//--------------------------------Excerpt----------------------------------

function ieseg_excerpt_debut_contenu($length = 200) {

    global $post;

    $format = $post->post_format;
    $content_uf = $post->post_content;
    $excerpt_uf = $post->post_excerpt;

	$excerpt_gen = substr(strip_tags($content_uf), 0, $length);

    $summary = (!$excerpt) ? $excerpt_gen : $excerpt_uf;
    
	echo $summary .= ' ...';
	
    return $summary;
}

//Longueur de l'excerpt
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


//Ajout de l'excerpt sur les pages
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'my_add_excerpts_to_pages' );

//Fonction a appeller pour une longueur d'excerpt differente
// Parametres : 1 longueur souhaitée, 2. caractères de troncature
function custom_excerpt($new_length = 20, $new_more = '...') {
  add_filter('excerpt_length', function () use ($new_length) {
    return $new_length;
  }, 999);
  add_filter('excerpt_more', function () use ($new_more) {
    return $new_more;
  });
  $output = get_the_excerpt();
  $output = apply_filters('wptexturize', $output);
  $output = apply_filters('convert_chars', $output);
  $output = '<p>' . $output . '</p>';
  echo $output;
}

//--------------Droits pour modifier les menus pour les Editeurs------------ 
// get the the role object
$role_object = get_role( 'editor' );
// add $cap capability to this role object
$role_object->add_cap( 'edit_theme_options' );

/*--------------Personnalisation formulaires de recherche----------------*/
//Formulaire du header
function custom_search_form( $form ) {
    $form = '<form method="get" id="quick-search" action="'.home_url( '/' ).'" >';
    $form .= '<input type="text" value="' . get_search_query() . '" name="s" id="s" class="search-field" />';
    $form .= '<input type="submit" value="OK" class="search-submit" />';
    $form .= '</form>';
    return $form;
}
add_filter( 'get_search_form', 'custom_search_form' );

//Formulaire du footer
//L'absence de add_filter pour ce formulaire est normale. Cela sera fait au moment de l'affichage dans le template
function custom_search_footer( $form ) {
    $form = '<form role="search" method="get" class="search-form" action="'.home_url( '/' ).'">';
    $form .= '<label for="s2" class="screen-reader-text">'.__( 'Search for', 'label' ).'</label>';
    $form .= '<input type="search" class="search-field" placeholder="'.esc_attr_x( 'Search …', 'placeholder' ).'" value="' . get_search_query() . '" name="s" id="s2" />';
    $form .= '<input type="submit" value=" " class="search-submit" />';
    $form .= '</form>';
    return $form;
}

add_filter('body_class','menu_class_to_body');
function menu_class_to_body($classes)
{
	$id_menu=49;
    if (ICL_LANGUAGE_CODE=="fr"){
		$id_menu=142;
	}
	elseif (ICL_LANGUAGE_CODE=="en"){
		$id_menu=144;
	}
	elseif (ICL_LANGUAGE_CODE=="zh-hans"){
		$id_menu=69;
	}
		$items = wp_get_nav_menu_items($id_menu); //change to suit your menu id

          foreach ($items as $item):
                $menuClasses = $item->classes;
                $objectId = $item->object_id.' ';

                //if ( is_page($item->object_id) ):
				if ( is_page($item->object_id) || is_archive($item->object_id) || is_category($item->object_id)  ):
                    $current[] = $menuClasses;
                endif;

          endforeach;

        $classes[] =  $current[0][0];

        return $classes;
}
