<?php get_header(); ?>
<?php
//
echo $post->ID;
$cat_testi=get_the_terms($post->ID,'testimonial-category');
//var_dump($cat_testi);
//echo $cat_testi[0]->name;

global $sidebar_a_acharger;
include('includes/test-current-page.php');
?>
<div class="container-fluid" id="container-img-une">
                

        <div class="container-titre">
                <div class="titre-deco hidden-xs"></div>
                
				<h1 class="entry-title foundry_demi"><?php echo $cat_testi[0]->name; ?></h1>
                <div class="punchline-program">
                    <?php echo $punchline_programme; ?>
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
					if ($is_home_programe==true){
						if ( is_active_sidebar( 'program-menu' ) ) {
							dynamic_sidebar( 'program-home-menu' );
						}
					}
					else{
						switch ($sidebar_a_acharger['global']) {

							/*case "bachelors":
								if ( is_active_sidebar( 'msc-program-menu' ) ) {
									dynamic_sidebar( 'msc-program-menu' );
								}
								break;*/
							/*case "exec":
								if ( is_active_sidebar( 'msc-program-menu' ) ) {
									dynamic_sidebar( 'msc-program-menu' );
								}
								break;*/
							case "imba":
								if ( is_active_sidebar( 'imba-program-menu' ) ) {
									dynamic_sidebar( 'imba-program-menu' );
								}
								break;
							case "pge":
								if ( is_active_sidebar( 'pge-program-menu' ) ) {
									dynamic_sidebar( 'pge-program-menu' );
								}
								break;
								
							default:
								if ( is_active_sidebar( 'msc-program-menu' ) ) {
									dynamic_sidebar( 'msc-program-menu' );
								}
						}
						
					}
					
					?>
            </div>
        </div>
    </div>
<div id="clear"></div>
    <div class="container-fluid container-1600">
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
    </div>
</div>
 <div class="programme-overview">

           
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
		<h2><span class="foundry_light"><?php _e("What our students","ieseg2015") ?></span> <span class="foundry_bold"><?php _e("say","ieseg2015") ?></span></h2>
    </div>
    <div class="container-fluid container-1600">
        <div class="row">
        <div class="col-sm-12">

        <div class="proghome-testimonials">
        	<?php
			//echo $sidebar_a_acharger['section'];
			switch ($sidebar_a_acharger['section']) {
				case "mib_program":
				$id_cat_testimonials = 121;
				break;
				
				case "msc_fashion":
				$id_cat_testimonials = 123;
				break;
				
				case "msc_digital":
				$id_cat_testimonials = 124;
				break;
				
				case "msc_business_analysis":
				$id_cat_testimonials = 119;
				break;
				
				case "msc_finance":
				$id_cat_testimonials = 122;
				break;
				
				case "msc_accounting":
				$id_cat_testimonials = 127;
				break;
				
				case "msc_banking_capital_markets":
				$id_cat_testimonials = 126;
				break;
				
				case "msc_bigdata":
				$id_cat_testimonials = 125;
				break;
				
				case "msc_negociation":
				$id_cat_testimonials = 120;
				break;
				
				
			}
			?>
            
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
                                    'terms'    => apply_filters('wpml_object_id', $id_cat_testimonials, 'testimonial-category'),
                                ),
                            )

                        );
                        //supress_filter false est utile pour WPML (ne retourne les posts que dans la langue en cours)
                        $postslist = get_posts( $args );
						if ($postslist){
						?>
                        <ul class="bxslider">
                 		<?php
                        foreach ( $postslist as $post ) :
                            setup_postdata( $post ); 
                          ?> 
                            <li>
                                <div class="row">
                                	<div class="col-sm-4 col-sm-offset-1">
                                    	<?php
                                        if ( has_post_thumbnail() ) { 
                                        $thumb_testi = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'testimonial-thumb' ); ?>
                                        
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <img src="<?php echo $thumb_testi['0']; ?>" class="testimonials-home-photo img-responsive" alt="<?php the_title(); ?>"/>
                                         </a>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="col-sm-6 col-sm-offset-0">           
                                        <div id="container-testimonial-homepage-programs">
                                            <div class="yellow-quotation-mark"></div>
                                            <div class="testi-excerpt">
                                                <?php the_excerpt(); ?>
                                                <a href="<?php the_permalink(); ?>" class="readmore" title="<?php _e("Read testimonial","ieseg2015"); ?>">
                                                    <?php _e("Keep reading","ieseg2015") ?> 
                                                    <span class="glyphicon glyphicon-menu-right"></span>
                                                 </a>
                                            </div>
                                            <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?>
                                                <br><?php echo get_post_meta($id,'wpcf-class', true)?></a>
                                            </h3>
                                        </div>
                                    </div>
                                 </div>
                            </li>
                        <?php
                        endforeach; 
						?>
                        </ul> 
                        <?php
 						}
						else{
                        	_e("No testimonial for this program","ieseg2015");
						}
                        ?>
     
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
<!--News et events-->
<section class="container-overview-part6 container-news-events">
<!--NEWS Box-->
    <div class="container-fluid container-1600">
    	<div class="row">
          <div class="col-sm-6">
            <div class="box news">
              <h3><?php _e("News","ieseg2015") ?></h3>
                    	<div class="row">  
                        	<?php
                    		$args = array( 'posts_per_page' => 3, 'order'=> 'DESC', 'orderby' => 'date','post_type' => 'news','suppress_filters' => false );
                    		$postslist = get_posts( $args );
                    		foreach ( $postslist as $post ) :
                    		  setup_postdata( $post ); ?>
                    			<div class="col-sm-12 news-program">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <?php 
                                            if ( has_post_thumbnail() ) {?>
                                                <div class="pouetrow">
                                                	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="container-img-news"><?php the_post_thumbnail('thumbnail'); ?></a>
                                                </div>
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
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-4">
                                <a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 1786, 'page' ));?>" title="<?php _e('All news', 'ieseg2015');?>" class="btn center-block"><?php _e("All news","ieseg2015") ?></a>
                            </div>
                        </div>
           </div><!--END box-->
        </div><!--END col-sm-6-->
    <!--EVENTS Box-->
        <div class="col-sm-6">
           <div class="box events">
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
                                        <span class="mois foundry_bold"><?php echo date('M',get_post_meta($id,'wpcf-start-date',true)); ?></span>
                                    </time>
                                    <div class="col-sm-9">
                                        <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                                        <span class="picto-pin"></span> <?php echo get_post_meta($id,'wpcf-city-town', true)?>
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
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 1787, 'page' ));?>" title="<?php _e('All events', 'ieseg2015');?>" class="btn center-block"><?php _e("All events","ieseg2015") ?></a>	
                </div>
            </div>	
           </div><!--END box-->
        </div><!--END col-sm-6-->
    </div><!--END row-->
    </div>
</section>

<?php get_footer(); ?>