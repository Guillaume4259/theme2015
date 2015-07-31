<?php
/*
Template Name: Page programme
*/
//on a besoin de savoir si l'on est sur une home de programme pour :
//charger la bonne sidebar, 
//charger ou non les testimonials,
$is_home_programe = false;
$homes_programmes=array(18322,22831,12691,17155,10873,17340,17394,17445,17417,21849,21911,21935); //PGE a rajouter
if (is_page($homes_programmes)){
	$is_home_programe = true;
}
?>
<?php get_header(); ?>

<div class="container-fluid" id="container-img-une">
                <div class="keyfacts col-sm-3 hidden-xs hidden-sm wow fadeInUp" data-wow-duration="2s">
                <?php include('includes/blocs-keyfacts.php'); ?>
        		</div>

        <div class="container-titre">
                <div class="titre-deco hidden-xs"></div>
				<?php the_title( '<h1 class="entry-title foundry_demi">', '</h1>' ); ?>
                <div class="punchline-program">
                    <?php include('includes/program-punchlines.php'); ?>
                </div>
    	</div>
</div>

<div class="fond-menu-program hidden-xs">
    <div class="container-fluid container-1600">
        <div class="row container-sous-menu">
        	<div id="menu-program">
                <ul>
                    <li class="secondary-menu btn-home-rub-programme picto-overview">
                       <?php echo '<a  href="'.get_permalink($post->post_parent).'">
        			   Overview</a>'; ?>
                    </li>
                </ul>
           			<?php
					//Pour charger la bonne sidebar (et donc le bon menu), on a besoin de savoir si l'on est sur une home de programme 
					$homes_programmes=array(18322,22831,12691,17155,10873,17340,17394,17445,17417,21849,21911,21935); //PGE a rajouter
					if ($is_home_programe==true){
						if ( is_active_sidebar( 'program-menu' ) ) {
							dynamic_sidebar( 'program-home-menu' );
						}
					}
					else{
						if ( is_active_sidebar( 'program-menu' ) ) {
							dynamic_sidebar( 'program-menu' );
						}
					}
					
					?>
            </div>
        </div>
    </div>

    <div class="container-fluid container-1600">
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

<?php    
 if ($is_home_programe==true){ 
 ?>
<!--   Temoignages   -->    
<section class="container-testimonials">
	<div class="container-fluid title container-titre-section-programmes-gris">
		<h2><span class="foundry_bold"><?php _e("Our students","ieseg2015") ?></span> <span class="foundry_light"><?php _e("speak","ieseg2015") ?></span></h2>
    </div>
    <div class="container-fluid container-1600">
        <div class="row">
        <div class="col-sm-12">

        <div class="proghome-testimonials">
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
                                <div class="readmore"><?php _e("Keep reading","ieseg2015") ?> <div class="glyphicon glyphicon-menu-right" style="font-size:12px; padding-top:5px;"></div></div></a>
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
               
        </div>
    </div>
    	</div>
        <div class="row">
            <a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 1787, 'page' ));?>" title="<?php _e('All testimonials', 'ieseg2015');?>" class="btn col-sm-2 col-sm-offset-5"><?php _e("All the testimonials","ieseg2015") ?></a>	
        </div>
    </div>
</section>

<!--End Témoignages-->

<?php
 }//end if is_home_programme
?>

<!--NEWS Box-->

    <div class="container-fluid title container-news-events  container-overview-part6">
        <section class="container-1600">
          <div class="col-sm-6">
            <div class="box news">
              <h3><?php _e("News","ieseg2015") ?></h3>
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
           <div class="box events ">
             <h3><?php _e("Events","ieseg2015") ?></h3>
                   
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