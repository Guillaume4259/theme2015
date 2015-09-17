<?php
 /**
 * System Template: IESEG || Index
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
            <?php
            if ( is_active_sidebar( 'left-menu' ) ) {
				dynamic_sidebar( 'left-menu' );
			} 
			?>   
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
            the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'ieseg2015' ) );
    
 	endwhile;
 endif;
?>
        </div>
        
        <?php
		if (!empty($sidebar_a_acharger['global'])){?>
			<aside class="col-sm-12 col-md-3 right-col">
        <?php
		}
		
		switch ($sidebar_a_acharger['global']) {
			case "ecole":
				get_sidebar( 'ecole' );
				break;
			case "admissions":
				get_sidebar( 'admissions' );
				break;
			case "bachelors":
				get_sidebar( 'bachelors' );
				break;
			case "chinese":
				get_sidebar( 'chinese' );
				break;
			case "dre":
				get_sidebar( 'dre' );
				break;
			case "exec":
				get_sidebar( 'exec' );
				break;
			case "fondation":
				get_sidebar( 'fondation' );
				break;
			case "imba":
				get_sidebar( 'imba' );
				break;
			case "mib":
				get_sidebar( 'mib' );
				break;
			case "msc":
				get_sidebar( 'msc' );
				break;
			case "pge":
				get_sidebar( 'pge' );
				break;
			case "recherche":
				get_sidebar( 'recherche' );
				break;
			case "summer":
				get_sidebar( 'summer' );
				break;
			case "taxe":
				get_sidebar( 'taxe' );
				break;
				
			/*default:
				echo "yep";*/
		}

		?>
        <?php
		if (!empty($sidebar_a_acharger['global'])){?>
			</aside>
        <?php
		}
		?>
    </div>
</div>
<?php get_footer(); ?>