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
    
   
<!--   Temoignages   -->

<div class="container-fluid title container-overview-part5">
	<span class="foundry_bold">Our students</span> <span class="foundry_light">speak</span>
</div>
       

<!--NEWS Box-->

<div class="container-fluid title container-news-events  container-overview-part6">
       
                <div class="col-sm-6">
                    <div class="box">
                        <h3>News</h3>
                            <?php _e("News","ieseg2015") ?></h2>
                                <div class="row">
                                
                                
                                
                                 <?php
                    $args = array( 'posts_per_page' => 4, 'order'=> 'DESC', 'orderby' => 'meta_value_num','post_type' => 'events', 'meta_key'=> 'wpcf-start-date','suppress_filters' => false );
                    //supress_filter false est utile pour WPML (ne retourne les posts que dans la langue en cours)
                    $postslist = get_posts( $args );
                    foreach ( $postslist as $post ) :
                        setup_postdata( $post ); 
                        $id=$post->ID;
                     ?> 
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            <?php 
                                if ( has_post_thumbnail() ) {?>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="container-img-une"><?php the_post_thumbnail(); ?></a>
                                <?php
                                }
                                else {?>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="container-img-une" style="display:block;overflow:		hidden;"><img src="<?php echo get_template_directory_uri().'/images/actu-home-defaut.jpg' ;?>" class="img-responsive" alt="<?php the_title(); ?>"/>
                                <?php
                                        }?>
                                <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_excerpt(); ?></a>
                     </div><!--END box-->
                </div><!--END col-sm-6-->
            </div><!--END row-->


    <!--EVENTS Box-->

        <div class="col-sm-6">
           <div class="box">
             <h3>Events</h3>
                    
                      
                     <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                     <?php echo get_post_meta($id,'wpcf-city-town', true)?>
                     
                    <?php
                    endforeach; 
                    //wp_reset_postdata();
                    ?>		
           </div><!--END box-->
        </div><!--END col-sm-6-->

</div>
       

<?php get_footer(); ?>