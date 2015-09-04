
<?php get_header(); ?>
<?php

global $sidebar_a_acharger;
include('includes/test-current-page.php');
?>
<div class="container-fluid" id="container-img-une">
        <div class="container-titre">
            <span class="titre-deco hidden-xs"></span><?php
            //Si on est dans une categorie, on recuperere le nom de la categorie courante
            $cat_actuelle=single_cat_title('',false);
            //Si on est pas dans une categorie (par exemple a la racine d'un custom post type,on recupere le titre du type d'archive 
            if (!$cat_actuelle){
                $cat_actuelle=post_type_archive_title('',false);
            }
            ?><h1 class="entry-title foundry_demi"><?php echo $cat_actuelle ?></h1>
        </div>
</div>
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
<?php
		$i_news=1;
		if ( have_posts() ) :
	?>
<section id="container-other-testimonials" style="margin-bottom:30px;">
    <div class="container-fluid container-1600"  role="main">
    <?php
		// Start the Loop.
			while ( have_posts() ) : the_post();	      	                  
?>
				<div class="col-sm-4 col-md-3">
                    <div class="bloc bloc-other-testimonials text-center">
                        <div class="container-texte-other-testi">
                            <h3 class="text-center"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                            <?php $cat_testi=get_the_terms($post->ID,'testimonial-category'); echo $cat_testi[0]->name ; ?><br />
							<?php echo get_post_meta($id,'wpcf-position', true); ?>
                            
                        </div>
                        <a href="<?php the_permalink(); ?>" class="container-img-une-other-testi text-center">
                         <?php
                         if ( has_post_thumbnail() ) :
                            the_post_thumbnail('testimonial-thumb',array('class' => 'img-responsive'));
                        else:?>
                        
                            <img src="<?php echo get_template_directory_uri() ;?>/images/user.png" alt="<?php the_title(); ?>" class="img-responsive" />
                        <?php
                         endif;
                         
                         ?>  
                         </a>                    
                    </div>
                </div>

<?php 
			$i_news++;
 			endwhile;
			?>
 </div>
    
</section>           
 <?php
			if ( function_exists( 'wp_pagenavi') ){
				wp_pagenavi();
			}
 endif;
 wp_reset_postdata();
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
                    $args = array( 'posts_per_page' => 4, 'order'=> 'DESC', 'orderby' => 'meta_value_num','post_type' => 'events', 'meta_key'=> 'wpcf-start-date','suppress_filters' => false );
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