<?php
/**
 * 
 *
 * @package WordPress
 * @subpackage IESEG2
 * @since IESEG2 1.0
 */
/*
if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}*/
global $sidebar_a_acharger;

?>
<div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
<?php
//ID de la taxonomie en cours
$id_current_taxo = get_queried_object()->term_id;

//On veut savoir sur quel type de post on est
$post_type = get_post_type( $post->ID );
$obj = get_post_type_object( $post_type );

//var_dump($obj->taxonomies);

$custom_post_type_slug = $obj->name; 
$custom_post_type_name = $obj->labels->name;
$custom_post_type_taxonomy = $obj->taxonomies[0];
if (ICL_LANGUAGE_CODE=="fr"){
	if ($custom_post_type_slug=="news"){
		$str_titre_bloc ="Catégories d'actualités";
		$str_btn_all="Toutes les actualités"; 
	}
	elseif ($custom_post_type_slug=="events"){
		$str_titre_bloc ="Catégories d'événements";
		$str_btn_all="Tous les événements"; 
	}
	elseif ($custom_post_type_slug=="testimonials"){
		$str_titre_bloc ="Catégories de temoignaes";
		$str_btn_all="Tous les témoignages";  
	}
}

else{
	$str_titre_bloc = $custom_post_type_name.' categories';
	$str_btn_all = "All ".strtolower($custom_post_type_name); 
}

$args = 
	array(
		'type'                     => $custom_post_type_slug,
		'child_of'                 => 0,
		'parent'                   => '',
		'orderby'                  => 'name',
		'order'                    => 'ASC',
		'hide_empty'               => 1,
		'hierarchical'             => 1,
		'exclude'                  => '',
		'include'                  => '',
		'number'                   => '',
		'taxonomy'                 => $custom_post_type_taxonomy,
		'pad_counts'               => false 
	);

//get all categories
$categories = get_categories( $args );
    
    if ($categories):					
?> 
<div class="bloc">
<h4><?php echo $str_titre_bloc ?></h4>
<ul>
<?php
	foreach ($categories as $category) {
		$class = ($id_current_taxo == $category->term_id) ? 'class="font-bold"' : '';   
?>
	<li <?php echo $class ?>><a href="<?php echo get_term_link($category) ; ?>" title="<?php echo $category->cat_name ; ?>"><?php echo $category->cat_name  ; ?></a></li>
<?php
	}
?>
</ul>
<a href="<?php echo get_post_type_archive_link($custom_post_type_slug); ?>" title="<?php echo $str_btn_all ?>" class="btn"><?php echo $str_btn_all ?></a>
</div>
<?php endif; ?>                  
</div><!-- #content-sidebar -->
