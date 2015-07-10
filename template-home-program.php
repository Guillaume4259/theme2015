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


<div class="container-fluid container-1600 fond-menu-program" role="main">
	<div id="breadcrumbs" class="row">
    	<!-- BREADCRUMBS -->
            <div class="col-sm-12">
                <?php if(function_exists('bcn_display')){ bcn_display();}?>
            </div>
            <!-- END - BREADCRUMBS -->
    </div>
</div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
        blabla

<?php get_footer(); ?>