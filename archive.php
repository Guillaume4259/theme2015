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
    	<span class="titre-deco hidden-xs"></span><?php
		//Si on est dans une categorie, on recuperere le nom de la categorie courante
		$cat_actuelle=single_cat_title('',false);
		//Si on est dans une categorie (par exemple a la racine d'un custom post type,on recupere le titre du type d'archive 
		if (!$cat_actuelle){
			$cat_actuelle=post_type_archive_title('',false);
		}
		?><h1 class="entry-title foundry_demi"><?php echo $cat_actuelle ?></h1>
    </div>
</div>
<div class="container-fluid container-1600" role="main">
	<div id="breadcrumbs" class="row">
    	<!-- BREADCRUMBS -->
        <div class="col-sm-12">
            <?php if(function_exists('bcn_display')){ bcn_display();}?>
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
        	<div class="row">
		<?php
		$i_news=1;
		if ( have_posts() ) :
		// Start the Loop.
			while ( have_posts() ) : the_post();	      	                  
?>
			<div class="col-sm-6">
            	<div class="bloc bloc-news-home">
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </div>
            </div>
			<?php
			if (is_int($i_news/2)){
			?>
            	<div class="clearfix visible-sm-block visible-md-block visible-lg-block"></div>
            <?php
			}
			?>
<?php 
			$i_news++;
 			endwhile;
			if ( function_exists( 'wp_pagenavi') ){
				wp_pagenavi();
			}
 endif;
 wp_reset_postdata();
?>
        	</div>
        </div>
        
       
			<aside class="col-sm-3 right-col">
      			<?php get_sidebar( 'news' ); ?>
		
			</aside>
   
    </div>
</div>
<?php get_footer(); ?>