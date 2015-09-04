<?php
 /**
 * System Template: IESEG || Single
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
    	<span class="titre-deco hidden-xs"></span><?php the_title( '<h1 class="entry-title foundry_demi">', '</h1>' ); ?>
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
    	<div role="navigation" class="col-sm-3 hidden-xs left-col">
        	<!-- SUB NAVIGATION -->    
        	<?php get_sidebar( 'left-menu' ); ?>
            <!-- END - SUB NAVIGATION -->
        </div>
        <?php 
		include('includes/test-current-page.php'); 
		?>
        <div class="col-sm-6 center-col">
		<?php
		if ( have_posts() ) :
		// Start the Loop.
		while ( have_posts() ) : the_post();
		      	                  
		if (has_excerpt()) :
?>
            <div class="page_chapeau wow fadeInUp" data-wow-delay="0.5s">
                <?php the_excerpt(); ?>
            </div>
<?php 
        endif; 

		$metas_post=get_post_meta(get_the_ID());
		if($metas_post['wpcf-start-date']){
			echo '<span class="glyphicon glyphicon-calendar"></span>'.strftime('%d %B %Y',$metas_post['wpcf-start-date'][0]);
		}
		if($metas_post['wpcf-city-town']){
		
			echo '<span class="glyphicon glyphicon-map-marker"></span>'.$metas_post['wpcf-city-town'][0];
		}
		  
		the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'ieseg2015' ) );
    
 	endwhile;
 endif;
?>
        </div>
        
        <aside class="col-sm-3 right-col">
            <?php get_sidebar( 'news' );?>
        </aside>
    </div>
</div>
<?php get_footer(); ?>