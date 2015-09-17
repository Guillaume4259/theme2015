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
        	<img src="<?php echo get_template_directory_uri().'/images/404.jpg' ;?>" class="img-responsive" width="100%" alt="">
            <!-- END - SUB NAVIGATION -->
        </div>
        <?php 
		include('includes/test-current-page.php'); 
		
		if (!empty($sidebar_a_acharger['global'])):?>
        <div class="col-sm-9 col-md-6 center-col">
        <?php
		else:
		?>
        <div class="col-sm-9 center-col">
		<?php
		endif;

?>
			<h1 class="txt-orange1"><?php _e( 'Page not found', 'ieseg2015' ); ?></h1>
            <h2><?php _e( 'It\'s embarrassing but it looks like nothing was found at this location.', 'ieseg2015' ); ?></h2>
			<p><?php _e( 'The page you are looking for may have been removed or renamed', 'ieseg2015' ); ?>. <?php _e( 'But we can help you to get out of here', 'ieseg2015' ); ?>. 
             	<?php _e( 'First of all, please double-check the spelling of the URL', 'ieseg2015' ); ?>.
				<?php echo __( 'If the problem remains, feel free to', 'ieseg2015' ).' <a href="mailto:ieseg@ieseg.fr" target="_blank">'.__( 'contact us', 'ieseg2015' ).'</a> '.__( 'or go back to the ', 'ieseg2015' ).' <a href="'.get_bloginfo('url').'">'.__( 'Homepage', 'ieseg2015' ).'</a>'; ?>.
             </p>
            <p><strong><?php _e( 'You can also', 'ieseg2015' ); ?> :</strong></p>
            <div class="row">
                <div class="col-sm-12 search-box-404">
                    <h2><?php _e( 'Try a search', 'ieseg2015' ); ?></h2>
                    <?php get_search_form(); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                	<div class="bloc">
                        <h4><?php _e( 'Look into these pages', 'ieseg2015' ); ?></h4>
                        <ul>
                            <li><a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 1762, 'page' ));?>" title="<?php _e('Discover IÉSEG', 'ieseg2015');?>"><?php _e('Discover IÉSEG', 'ieseg2015');?></a></li>
                            <li><a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 1178, 'page' ));?>" title="<?php _e('View our programs', 'ieseg2015');?>"><?php _e('View our programs', 'ieseg2015');?></a></li>
                            <li><a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 711, 'page' ));?>" title="<?php _e('Admissions', 'ieseg2015');?>"><?php _e('Admissions', 'ieseg2015');?></a></li>
                            <li><a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 1782, 'page' ));?>" title="<?php _e('Meet with us', 'ieseg2015');?>"><?php _e('Meet with us', 'ieseg2015');?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                	<div class="bloc">
                        <h4><?php _e( 'Contact us', 'ieseg2015' ); ?></h4>
                        3 rue de la Digue - 59000 Lille <br />
                        1 parvis de La Défense - 92044 Paris La Défense <br />
                        03.20.54.58.92 <br />
                        <div class="text-center">
                        	<a href="mailto:ieseg@ieseg.fr" target="_blank" class="btn"><?php _e( 'Leave us an email', 'ieseg2015' ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<aside class="col-sm-12 col-md-3 right-col">
		<?php
			//get_sidebar( '404' );
		?>

		</aside>
    </div>
</div>
<?php get_footer(); ?>