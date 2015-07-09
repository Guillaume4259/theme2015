<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<!-- pd template single -->
<div id="main" role="main">
	<div id="content" >
		<div id="right">
			<div class="column-one content">
				<div class="column-one-inner">  
					<?php include (TEMPLATEPATH . '/templates/_partial-breadcrumbs.php'); ?>                  
					<div class="left clearfix long">
						
						<?php 
						while ( have_posts() ) : the_post(); ?>
	
							<?php // get_template_part( 'content', 'single' ); ?>
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
							<?php comments_template(); ?>

							
							<nav id="nav-single">
								<?php
								/*
								<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Précédent', 'twentyeleven' ) ); ?></span>
								*/?>

								<span class="nav-next"><?php next_post_link( '%link', __( 'Suivant <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
							</nav><!-- #nav-single -->	
							<?php endwhile; // end of the loop. ?>
							<hr />
					</div>
			   </div>                   
			
			<div class="column-one-bottom"><!--//--></div>  
		</div>
		
		<div class="column-two"> </div>                  
		
	</div>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>