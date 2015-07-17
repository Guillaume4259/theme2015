<?php
/*
Template Name: Home Program
*/
?>

<?php get_header(); ?>
<div class="container-fluid" id="container-img-une">


    <div class="container-titre">
    	<div class="titre-deco"></div>
    	<?php the_title( '<h1 class="entry-title foundry_demi">', '</h1>' ); ?>
        <?php
			if (is_page('msc-digital-marketing-crm')){
		?>
		
		<div class="punchline-program">
		Become a digital expert
		</div>
		
		<?php } ?>
    
    </div>
    </div>


<div class="container-fluid fond-menu-program" role="main">

	<div id="menu-program">
        <ul>
            <li>
               <?php echo '<a class="boutons-menu" href="'.get_permalink($post->post_parent).'">
			   <span class="picto-menu-programme picto-overview"></span>
			   Overview</a>'; ?>
            </li>

        </ul>
            <?php if ( is_active_sidebar( 'program-menu' ) ) : ?>
            <?php dynamic_sidebar( 'program-menu' ); ?>
            <?php endif; ?>
    </div>
    <div class="clear"></div>

	<div id="breadcrumbs" class="row">
    	<!-- BREADCRUMBS -->
            <div class="col-sm-12 fil-blanc">
                <?php if(function_exists('bcn_display')){ bcn_display();}?>
            </div>
            <!-- END - BREADCRUMBS -->
    </div>
</div>
    
    
    
<div class="programme-overview">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>
        
        

<?php get_footer(); ?>