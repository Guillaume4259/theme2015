<?php
 /**
 * System Template: IESEG || Homepage
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
    	<span class="titre-deco hidden-xs"></span><h1 class="entry-title foundry_demi"><?php _e( 'This page doesn\'t exist', 'ieseg2015' ); ?></h1>
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
		
		if (!empty($sidebar_a_acharger['global'])):?>
        <div class="col-sm-6 center-col">
        <?php
		else:
		?>
        <div class="col-sm-9 center-col">
		<?php
		endif;

?>
            <h4><?php _e( 'This is somewhat embarrassing, isn’t it?', 'ieseg2015' ); ?></h4>
			<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'ieseg2015' ); ?></p>

			<?php get_search_form(); ?>

        </div>

		<aside class="col-sm-3 right-col">
		<?php
			//get_sidebar( '404' );
		?>

			</aside>
    </div>
</div>
<?php get_footer(); ?>