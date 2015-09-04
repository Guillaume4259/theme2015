<?php
/*
Template Name: Mediatheque
*/
?>
<?php get_header(); ?>
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
    	<span class="titre-deco hidden-xs"></span><?php the_title( '<h1 class="entry-title foundry_demi">', '</h1>' ); ?>
    </div>
</div>
<div class="container-fluid container-1600" role="main">
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
    <div class="row">
    	<div role="navigation" class="col-sm-3 hidden-xs left-col">
        	<!-- SUB NAVIGATION -->    
        	<?php get_sidebar( 'left-menu' ); ?>
            <!-- END - SUB NAVIGATION -->
        </div>
        <?php 
		include('includes/test-current-page.php'); 
		
		if (!empty($sidebar_a_acharger['global'])):?>
        <div class="col-sm-6 center-col">
        <?php
		else:
		?>
        <div class="col-sm-9 center-col">
		<?php
		endif;

		if ( have_posts() ) :
		// Start the Loop.
		while ( have_posts() ) : the_post();
      	                  
		if (has_excerpt()) :
?>
            <div class="page_chapeau wow fadeInUp" data-wow-delay="0.5s">
                <?php the_excerpt(); ?>
            </div>
<?php 
		endif;   
            the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'ieseg2015' ) );
    
 	endwhile;
 endif;
?>
            <div class="row">
            	<div class="col-md-6">
                    <h3><?php _e("Videos","ieseg2015") ?></h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe id="ytplayer" type="text/html" width="853" height="480" 	
                                    src="http://www.youtube.com/embed?listType=user_uploads&list=IESEGChannel&origin=http://www.ieseg.fr" frameborder="0"/>					
                            
                        <iframe src="https://ytchannelembed.com/ytce-gallery.php?user=IESEGChannel&rows=1&ratio=hd&width=350&margin=15" style="width:100%;max-width:350px;height:200px;" class="ytce"></iframe>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-4">
                            <a href="https://www.youtube.com/user/IESEGChannel" title="<?php _e('Visit IÉSEG Youtube Channel', 'ieseg2015');?>" class="btn center-block" target="_blank"><?php _e("Visit IÉSEG Youtube Channel","ieseg2015") ?></a>	
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                	<h3><?php _e("Photos","ieseg2015") ?></h3>
                    <div class="row">
                    <?php
					$phototheque = get_post(apply_filters( 'wpml_object_id', 1790, 'page' ));
                    if ( get_post_gallery($phototheque) ) :
					$gallery = get_post_gallery( $phototheque, false );
					
					/* Loop through all the image and output them one by one */
					$i_gal=1;
					
						foreach( $gallery['src'] AS $src ){
							if ($i_gal <=6 ){
					?>
					
							<div class="col-sm-4">
                            	<img src="<?php echo $src; ?>" class="img-responsive" alt="Gallery image" />
							</div>
						<?php
							$i_gal++;
							}
						}
        			endif;
					?>
                    </div>
                    <div class="col-sm-4 col-sm-offset-4">
                        <a href="<?php echo get_permalink($phototheque); ?>" title="<?php _e('All photos', 'ieseg2015');?>" class="btn center-block"><?php _e("All photos","ieseg2015") ?></a>	
                    </div>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-6">
            		<h3><?php _e("News","ieseg2015") ?></h3>
                    <div class="row">
					<?php
                    $args = array( 'posts_per_page' => 8, 'order'=> 'DESC', 'orderby' => 'date','post_type' => 'news','suppress_filters' => false );
                    //supress_filter false est utile pour WPML (ne retourne les posts que dans la langue en cours)
                    $postslist = get_posts( $args );
                    $i_news=1;
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
                    $i_news++;	
                    endforeach; 
                    ?>	
                    
                	</div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 col-sm-offset-5">
                            <a href="<?php echo get_post_type_archive_link('news'); ?>" title="<?php _e('All news', 'ieseg2015');?>" class="btn btn-cta-home"><?php _e("All news","ieseg2015") ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
            		<h3><?php _e("Events","ieseg2015") ?></h3>
                    
                    <div class="row">
						<?php
                        $args = array( 'posts_per_page' => 8, 'order'=> 'DESC', 'orderby' => 'meta_value_num','post_type' => 'events', 'meta_key'=> 'wpcf-start-date','suppress_filters' => false );
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
                        ?>
                        <br />
                    </div>
                    
                    <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <a href="<?php echo get_post_type_archive_link('events'); ?>" title="<?php _e('All events', 'ieseg2015');?>" class="btn center-block"><?php _e("All events","ieseg2015") ?></a>	
                    </div>
				</div>	
                </div>
            </div>
        </div>
        
        <?php
		if (!empty($sidebar_a_acharger['global'])){?>
			<aside class="col-sm-3 right-col">
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
<?php get_footer(); ?>