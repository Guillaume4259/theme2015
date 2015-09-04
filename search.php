<?php
 /**
 * System Template: IESEG || Search
 *
 * @since IESEG 1.0
 * @package Wordpress 
 * @subpackage IESEG Theme
 */
 get_header(); ?>
<?php
 if ( has_post_thumbnail()) : 
 $str_img_une = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'mega-thumb' );
 //echo get_the_ID().' '.var_dump($str_img_une);
 ?>
<?php
 endif;
?>
<div class="container-fluid" id="container-img-une" <?php if (!empty ($str_img_une[0]) && $str_img_une[1]>1000 ) { echo 'style="background-image:url('.$str_img_une[0].');"';}?>>
    <div class="container-titre">
    	<h1 class="entry-title foundry_demi"><?php _e('Search results','ieseg2015'); ?></h1>
    </div>
</div>
<div class="container-fluid container-1600" role="main">
	<div id="breadcrumbs" class="row">
    	<!-- BREADCRUMBS -->
        <div class="col-sm-12">
            <?php
            	if ( function_exists( 'yoast_breadcrumb' ) ) {
					yoast_breadcrumb();
				}
			?>
        </div>
         <!-- END - BREADCRUMBS -->
    </div>
    <div class="row">
    	

        <div class="col-sm-9 col-sm-offset-3 center-col">

		<?php

		if ( have_posts() ) :
		// Start the Loop.
		$hit_count = $wp_query->found_posts; // count # of search results ?>
		<p><?php echo $hit_count . __(' result(s)','ieseg2015'); ?></p>
		<?php while ( have_posts() ) : the_post();
		      	                  

?>
			<div class="">
            	<div class="">
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <?php custom_excerpt(70); ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn"><?php _e('Read more','ieseg2015')?></a>
                </div>
            </div>
<?php 
      

    
 			endwhile;
			if ( function_exists( 'wp_pagenavi') ){
				wp_pagenavi();
			}
		?>
        
        <?php
		else :
			_e("Sorry, your request returned 0 result","ieseg2015");
		endif;
?>
        </div>
        

    </div>
</div>
<?php get_footer(); ?>