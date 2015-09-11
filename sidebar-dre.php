<?php
/**
 * 
 *
 * @package WordPress
 * @subpackage IESEG2
 * @since IESEG2 1.0
 *
 *
 */
global $sidebar_a_acharger;
?>
<div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
<?php
$args = 
		array(
			'posts_per_page' => 4,
			'order'=> 'DESC',
			'orderby' => 'meta_value_num',
			'post_type' => 'events',
			'meta_key'=> 'wpcf-start-date',
			'tax_query' => 
                            array(
                                array(
                                    'taxonomy' => 'events-category',
                                    'field'    => 'term_id',
                                    'terms'    => apply_filters('wpml_object_id', 55, 'events-category'),
                                ),
                            )
		);
 $postslist = get_posts( $args );
 if (!empty($postslist)){?>
<div class="bloc bloc-agenda">
	<h4><?php _e('Agenda', 'ieseg2015'); ?></h4>

 
 <?php
	foreach ( $postslist as $post ) :
		setup_postdata( $post ); 
		$id=$post->ID;
	  ?>
		<div class="container-event-agenda">
        	<time class="" datetime="<?php echo date('Y',get_post_meta($id,'wpcf-start-date',true)).'-'.date('m',get_post_meta($id,'wpcf-start-date',true)).'-'.date('d',get_post_meta($id,'wpcf-start-date',true)); ?>"> 
                 <span class="glyphicon glyphicon-calendar"></span> 
					<?php echo strftime('%d %B %Y',get_post_meta($id,'wpcf-start-date',true)).' - '.get_post_meta($id,'wpcf-city-town', true) ;?>
             
			</time>
        	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>	
		</div>
	<?php
	endforeach;
	?>

     <?php
	  $id_rub_dre = intval(apply_filters('wpml_object_id', 55, 'events-category')); //obligé de faire un intval pour convertir l'id en int
	 ?>
     <a href="<?php echo get_term_link($id_rub_dre,'events-category')?>" title="<?php _e('All events', 'ieseg2015')?>" class="btn"><?php _e('All events', 'ieseg2015')?></a>
 </div>
 <?php
 }
 ?>	
</div><!-- #content-sidebar -->