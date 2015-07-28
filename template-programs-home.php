<?php
/*
Template Name: template-programs-home
*/
?>

<?php get_header(); ?>

<div class="container-fluid" id="container-img-une">
                <div class="keyfacts col-sm-3 hidden-xs hidden-sm">
                <?php include('includes/blocs-keyfacts.php'); ?>
        		</div>

        <div class="container-titre">
                <div class="titre-deco"></div>
					<?php the_title( '<h1 class="entry-title foundry_demi">', '</h1>' ); ?>
                    <?php
                        if (is_page(17340) || custom_is_child(17340)){
                    ?>
                <div class="punchline-program">
                	Become a digital expert
                </div>
                <?php } ?>
    	</div>
</div>

<div class="container-fluid fond-menu-program hidden-xs" role="main">

	<div id="menu-program">
        <ul>
            <li class="secondary-menu boutons-menu picto-menu-programme picto-overview menu-item menu-item-type-post_type menu-item-object-page">

               <?php echo '<a  href="'.get_permalink($post->post_parent).'">
			   Overview</a>'; ?>
            </li>
        </ul>
            <?php if ( is_active_sidebar( 'program-menu' ) ) : ?>
            <?php dynamic_sidebar( 'program-menu' ); ?>
            <?php endif; ?>
    </div>

   	<div class="clear"></div>

    <div class="container-fluid container-1600" role="main">
    
        <div id="breadcrumbs" class="row">
            <!-- BREADCRUMBS -->
                <div class="col-sm-12">
               
                    <?php if(function_exists('bcn_display')){ bcn_display();}?>
           
                </div>
            <!-- END - BREADCRUMBS -->
          </div>
    </div>

</div>
    
<div class="programme-overview">

    <div class="hidden-md hidden-lg">
    	<div class="keyfacts col-sm-3">
           <?php include('includes/blocs-keyfacts.php'); ?>
         </div>
    </div>
           
</div>
		
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
</div>
    
   
<!--   Temoignages   -->

<div class="container-fluid title container-titre-section-programmes-gris">
	<h2 class="foundry_bold">Our students</h2> <h2 class="foundry_light">speak</h2>
</div>

    <div class="col-sm-12">

        <div  class="proghome-testimonials">

            <ul class="bxslider">
                         <?php
                        $args = array(
                            'posts_per_page' => -1,
                            'order'=> 'DESC',
                            'post_type' => 'testimonial',
                            //'suppress_filters' => false,
                            'tax_query' => 
                            array(
                                array(
                                    'taxonomy' => 'testimonial-category',
                                    'field'    => 'term_id',
                                    'terms'    => apply_filters('wpml_object_id', 124, 'testimonial-category'),
                                ),
                            )

                        );

                        //supress_filter false est utile pour WPML (ne retourne les posts que dans la langue en cours)
                        $postslist = get_posts( $args );
                        foreach ( $postslist as $post ) :
                            setup_postdata( $post ); 
                          ?> 
                <li>
                            <?php if ( has_post_thumbnail() ) { ?>
                            <?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'small' );
                            } ?>
                        <div style="background-image: url('<?php echo $background[0]; ?>');" class="clear testimonials-home-photo img-responsive"></div>

                        <div class="col-sm-6 col-sm-offset-0">
                            <?php 
                            $id=$post->ID;
                            ?>

                            <div id="container-testimonial-homepage-programs">
                                <div class="yellow-quotation-mark"></div>
                                <span><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>"title="Read full post">
                                <div class="readmore">Keep reading <div class="glyphicon glyphicon-menu-right" style="font-size:12px; padding-top:5px;"></div></div></a>
                                </span>
                                <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?>
                                <br><?php echo get_post_meta($id,'wpcf-class', true)?></a>
                                </h3>
                            </div>
                        </div>
                </li>
                        <?php
                        endforeach; 
                        //wp_reset_postdata();
                        ?>
            </ul>

             
            <a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 124, 'testimonial-category' ));?>" title="<?php _e('All testimonials', 'ieseg2015');?>" class="btn col-sm-2 col-sm-offset-5"><?php _e("All testimonials","ieseg2015") ?></a>    
               
        </div>
    </div>

<!--End Témoignages-->

<div class="clear">&nbsp;</div>

<!--NEWS Box-->

    <div class="container-fluid title container-news-events  container-overview-part6">
        <section class="container-1600">
          <div class="col-sm-6">
            <div class="box">
              <h3>News</h3>
                    	<div class="row">  
                        	<?php
                    		$args = array( 'posts_per_page' => 3, 'order'=> 'DESC', 'orderby' => 'date','post_type' => 'news' );
                    		$postslist = get_posts( $args );
                    		foreach ( $postslist as $post ) :
                    		  setup_postdata( $post ); ?>
                              
                         
                    			<div class="col-sm-12 news-program">
                                
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <?php 
                                            if ( has_post_thumbnail() ) {?>
                                                <div class="row"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="container-img-news"><?php the_post_thumbnail(); ?></a></div>
                                            <?php
                                            }
                                            else {?>
                                            
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="container-img-news"><img src="<?php echo get_template_directory_uri().'/images/actu-home-defaut.jpg' ;?>" alt="<?php the_title(); ?>"/>
                                            <?php
                                            }
                                            ?>
                             </div><!--END col-sm-3-->
            				<div class="col-sm-9">
                                <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><div class="news-program-excerpt"><?php the_excerpt(); ?></div></a>
                            </div>
                       	</div><!--END row-->
                      </div>
        		<?php
        		endforeach; 
        		//wp_reset_postdata();
        		?>	
            </div>
        <div class="container">
            <div class="row">
            	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 1786, 'page' ));?>" title="<?php _e('All news', 'ieseg2015');?>" class="btn center-block"><?php _e("All news","ieseg2015") ?></a>
            </div>
        </div>
           </div><!--END box-->
        </div><!--END col-sm-6-->
        


    <!--EVENTS Box-->

        <div class="col-sm-6">
           <div class="box">
             <h3>Events</h3>
                   
        <div class="row">
            <?php
            $args = array( 'posts_per_page' => 3, 'order'=> 'DESC', 'orderby' => 'meta_value_num','post_type' => 'events', 'meta_key'=> 'wpcf-start-date','suppress_filters' => false );
            //supress_filter false est utile pour WPML (ne retourne les posts que dans la langue en cours)
            $postslist = get_posts( $args );
            foreach ( $postslist as $post ) :
                setup_postdata( $post ); 
                $id=$post->ID;
              ?> 
                <div class="col-sm-12">
                	<div class="bloc-events-home">
                    	<div class="row">
                            <time class="col-sm-2 text-center"> 
								<span class="jour foundry_bold"><?php echo date('D',get_post_meta($id,'wpcf-start-date',true)); ?></span>
                                <span class="date foundry_bold"><?php echo date('d',get_post_meta($id,'wpcf-start-date',true)); ?></span>
                                <span class="moi foundry_bold"><?php echo date('M',get_post_meta($id,'wpcf-start-date',true)); ?></span>
                            </time>
                            <div class="col-sm-9">
                            	<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                            	<div class="show"><div class="picto-pin"></div><div class="lieu"><?php echo get_post_meta($id,'wpcf-city-town', true)?></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endforeach; 
            //wp_reset_postdata();
            ?>
            <br>
        </div>
        <div class="container">
            <div class="row">
                <a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 1787, 'page' ));?>" title="<?php _e('All events', 'ieseg2015');?>" class="btn center-block"><?php _e("All events","ieseg2015") ?></a>	
            </div>	
        </div>
           </div><!--END box-->
        </div><!--END col-sm-6-->
    </div><!--END row-->
</section>
</div>


<?php get_footer(); ?>