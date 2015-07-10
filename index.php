<?php
 /**
 * System Template: IESEG || Homepage
 *
 * @since IESEG 1.0
 * @package Wordpress 
 * @subpackage IESEG Theme
 */
?>
<?php get_header(); ?>
<div class="container-fluid" id="container-img-une">
<?php
	if ( have_posts() ) :
		// Start the Loop.
		 while ( have_posts() ) : the_post();
		 if ( has_post_thumbnail()) :  ?>
				<div class="master-image">
					<?php /*the_post_thumbnail('master-thumb'); */?>
				</div>
<?php
         endif;
?>
    <div class="container-titre">
    	<div class="titre-deco"></div>
    	<?php the_title( '<h1 class="entry-title foundry_demi">', '</h1>' ); ?>
    </div>
</div>
<div class="container-fluid container-1600" role="main">
	<div id="breadcrumbs" class="row">
    	<!-- BREADCRUMBS -->
            <div class="col-sm-12">
                <?php if(function_exists('bcn_display')){ bcn_display();}?>
            </div>
            <!-- END - BREADCRUMBS -->
    </div>
    
    
    
    <div class="row">
    	<div role="navigation" class="col-md-3 left-col">
        	<!-- SUB NAVIGATION -->    
        	<?php get_sidebar( 'left-menu' ); ?>
            <!-- END - SUB NAVIGATION -->
        </div>
        <?php include('includes/blocs-sidebar-test.php'); ?>
        <?php
		if (!empty($sidebar_a_acharger['global'])):?>
        <div class="col-md-6 center-col">
        <?php
		else:
		?>
        <div class="col-md-9 center-col">
		<?php
		endif;
		?>
<?php       	                  
		if (has_excerpt()) :
?>
            <div class="page_chapeau">
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
			<aside class="col-md-3 right-col">
        <?php
		}
		
		switch ($sidebar_a_acharger['global']) {
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

<?php //get_sidebar( 'nom_sidebar' ); ?>
<?php get_footer(); ?>