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
<?php
	/*if ( have_posts() ) :
		// Start the Loop.
		 while ( have_posts() ) : the_post();*/
?>
<!-- VIDEOS --> 
<div class="center-col"> 
<div class="header-unit">
    <div id="container-video" >
        <video autoplay loop class="fillWidth">
        <source src="<?php echo get_template_directory_uri() ;?>/videos/home.mp4" type="video/mp4"/>
        <source src="<?php echo get_template_directory_uri() ;?>/videos/home.ogg" type="video/ogg"/>
        <source src="<?php echo get_template_directory_uri() ;?>/videos/home.webm" type="video/webm"/>
        Your browser does not support the video tag. Please upgrade your browser.
        </video>
        <div class="container-fluid container-1600">
            <div class="row">
                <h1><span ><?php _e("Make the change","ieseg2015") ?></span><?php _e("and challenge yourself","ieseg2015") ?></h1>
            </div>
        </div>
        <div class="container-boutons">
            <a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 1762, 'page' ));?>" title="<?php _e('Discover IÉSEG', 'ieseg2015');?>" class="btn btn-blanc foundry_demi"><?php _e("Discover IÉSEG","ieseg2015") ?></a>
            <a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 1178, 'page' ));?>" title="<?php _e('View our programs', 'ieseg2015');?>" class="btn btn-blanc foundry_demi"><?php _e("View our programs","ieseg2015") ?></a>
        </div>
        
        <div class="video-cover"></div>
    </div><!-- end video-container -->
</div><!-- end .header-unit -->


<!-- NEWS -->   
<section class="container-fluid container-1600 container-news">
	<h2 class="text-center"><?php _e("News","ieseg2015") ?></h2>
	<div class="row">
    	<?php
		$args = array( 'posts_per_page' => 4, 'order'=> 'DESC', 'orderby' => 'date','post_type' => 'news' );
		$postslist = get_posts( $args );
		foreach ( $postslist as $post ) :
		  setup_postdata( $post ); ?> 
			<div class="col-sm-3">
            	<div class="bloc bloc-news-home">
					<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}
					else {?>
                    
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri().'/images/1503.gif' ;?>" class="img-responsive"/>
					<?php
                    }
					?>
					<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt(); ?>
                </div>
			</div>
		<?php
		endforeach; 
		//wp_reset_postdata();
		?>	
        
    </div>
    <div class="row">
    	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 1786, 'page' ));?>" title="<?php _e('All the news', 'ieseg2015');?>" class="btn col-sm-2 col-sm-offset-5"><?php _e("All the news","ieseg2015") ?></a>	
    </div>

</section>
<!-- EVENTS -->
<section class="container-events">   
    <div class="container-fluid container-1600">
        <h2 class="text-center"><?php _e("Events","ieseg2015") ?></h2>
        <div class="row">
            <?php
            $args = array( 'posts_per_page' => 4, 'order'=> 'DESC', 'orderby' => 'meta_value','post_type' => 'events', 'meta_key'=> 'wpcf-start-date','suppress_filters' => false );
            //supress_filter false est utile pour WPML (ne retourne les posts que dans la langue en cours)
            $postslist = get_posts( $args );
            foreach ( $postslist as $post ) :
                setup_postdata( $post ); 
                $id=$post->ID;
              ?> 
                <div class="col-sm-6">
                	<div class="bloc-events-home">
                    	<div class="row">
                            <time class="col-sm-2 text-center"> 
								<span class="jour foundry_bold"><?php echo date('D',get_post_meta($id,'wpcf-start-date',true)); ?></span>
                                <span class="date foundry_bold"><?php echo date('d',get_post_meta($id,'wpcf-start-date',true)); ?></span>
                                <span class="moi foundry_bold"><?php echo date('M',get_post_meta($id,'wpcf-start-date',true)); ?></span>
                            </time>
                            <div class="col-sm-10">
                            	<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                            	<?php echo get_post_meta($id,'wpcf-city-town', true)?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endforeach; 
            //wp_reset_postdata();
            ?>		
        </div>
        <div class="row">
            <a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 1787, 'page' ));?>" title="<?php _e('All the events', 'ieseg2015');?>" class="btn btn-blanc col-sm-2 col-sm-offset-5"><?php _e("All the events","ieseg2015") ?></a>	
        </div>
    </div>
</section>
<!-- Programmes -->   
<section class="container-fluid container-1600 container-programmes">
	<h2 class="text-center"><?php _e("A complete range of programs","ieseg2015") ?></h2>
    <p class="text-center">Ibi victu recreati et quiete, postquam abierat timor, vicos opulentos adorti equestrium adventu cohortium, quae casu propinquabant, nec resistere planitie porrecta conati digressi sunt retroque concedentes omne iuventutis robur relictum in sedibus acciverunt.</p>
	<div class="row">
        <div class="col-md-2 col-md-offset-1">
        	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 558, 'page' ));?>" title="<?php _e('Grande École Program', 'ieseg2015');?>" class="bloc-programme-home">
			<img src="<?php echo get_template_directory_uri() ;?>/images/1503.gif" alt="<?php _e("Grande École Program","ieseg2015") ?>" class="img-responsive"/>
			<?php _e("Grande École Program","ieseg2015") ?>
            	<span class=""><span class="duree-programme-picto"></span>5<?php _e("years","ieseg2015") ?></span>
                <span class=""><span class="acessibilite-programme-picto"></span><?php _e("Accessible xxx","ieseg2015") ?></span>
                <span class="more-info-programme"><?php _e("More information","ieseg2015") ?></span>
            </a>	
        </div>
        <div class="col-md-2">
        	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 558, 'page' ));?>" title="<?php _e('Grande École Program', 'ieseg2015');?>" class="bloc-programme-home">
			<img src="<?php echo get_template_directory_uri() ;?>/images/1503.gif" alt="<?php _e("Grande École Program","ieseg2015") ?>" class="img-responsive"/>
			<?php _e("Grande École Program","ieseg2015") ?>
            	<span class=""><span class="duree-programme-picto"></span>5<?php _e("years","ieseg2015") ?></span>
                <span class=""><span class="acessibilite-programme-picto"></span><?php _e("Accessible xxx","ieseg2015") ?></span>
                <span class="more-info-programme"><?php _e("More information","ieseg2015") ?></span>
            </a>
        </div>
        <div class="col-md-2">
        	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 558, 'page' ));?>" title="<?php _e('Grande École Program', 'ieseg2015');?>" class="bloc-programme-home">
			<img src="<?php echo get_template_directory_uri() ;?>/images/1503.gif" alt="<?php _e("Grande École Program","ieseg2015") ?>" class="img-responsive"/>
			<?php _e("Grande École Program","ieseg2015") ?>
            	<span class=""><span class="duree-programme-picto"></span>5<?php _e("years","ieseg2015") ?></span>
                <span class=""><span class="acessibilite-programme-picto"></span><?php _e("Accessible xxx","ieseg2015") ?></span>
                <span class="more-info-programme"><?php _e("More information","ieseg2015") ?></span>
            </a>
        </div>
        <div class="col-md-2">
        	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 558, 'page' ));?>" title="<?php _e('Grande École Program', 'ieseg2015');?>" class="bloc-programme-home">
			<img src="<?php echo get_template_directory_uri() ;?>/images/1503.gif" alt="<?php _e("Grande École Program","ieseg2015") ?>" class="img-responsive"/>
			<?php _e("Grande École Program","ieseg2015") ?>
            	<span class=""><span class="duree-programme-picto"></span>5<?php _e("years","ieseg2015") ?></span>
                <span class=""><span class="acessibilite-programme-picto"></span><?php _e("Accessible xxx","ieseg2015") ?></span>
                <span class="more-info-programme"><?php _e("More information","ieseg2015") ?></span>
            </a>
        </div>
        <div class="col-md-2">
        	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 558, 'page' ));?>" title="<?php _e('Grande École Program', 'ieseg2015');?>" class="bloc-programme-home">
			<img src="<?php echo get_template_directory_uri() ;?>/images/1503.gif" alt="<?php _e("Grande École Program","ieseg2015") ?>" class="img-responsive"/>
			<?php _e("Grande École Program","ieseg2015") ?>
            	<span class=""><span class="duree-programme-picto"></span>5<?php _e("years","ieseg2015") ?></span>
                <span class=""><span class="acessibilite-programme-picto"></span><?php _e("Accessible xxx","ieseg2015") ?></span>
                <span class="more-info-programme"><?php _e("More information","ieseg2015") ?></span>
            </a>
        </div>
    </div>
</section>
<!-- Besoin infos -->
<section class="container-besoin-info bg-orange1">
    <div class="container-fluid container-1600">
        <h2 class="text-center"><?php _e("Need informations ?","ieseg2015") ?></h2>
        <div class="row"></div>
    </div>
</div>
</section>
<!-- Chiffres et classement -->   
<section class="container-chiffres-classements">
    <div class="container-fluid container-1600">
        <div class="row">
            <div class="col-sm-9">
            	<h2 class="text-center"><?php _e("Facts & Figures","ieseg2015") ?></h2>
            	<div class="row">
            		<div class="col-sm-3 text-center key-fact">
                    	<div class="key-fact-number txt-rose">3800</div>
                    	<?php _e("students","ieseg2015") ?>
                    </div>
                    <div class="col-sm-3 text-center key-fact">
                    	<div class="key-fact-number txt-orange2">223</div>
                    	<?php _e("partner universities","ieseg2015") ?>
                    </div>
                    <div class="col-sm-3 text-center key-fact">
                    	<div class="key-fact-number txt-violet">83 %</div>
                    	<?php _e("international professors","ieseg2015") ?>
                    </div>
                    <div class="col-sm-3 text-center key-fact">
                    	<div class="key-fact-number txt-vert-canard">2500</div>
                    	<?php _e("partner companies","ieseg2015") ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
            	<h2 class="text-center"><?php _e("Rankings","ieseg2015") ?></h2>
            
            </div>
        </div>
    </div>
</section>
<!-- Campus -->   
<section class="container-campus">
    <div class="container-fluid container-1600">
        <div class="row">
            <div class="col-sm-6"><h2 class="text-center"><?php _e("Lille Campus","ieseg2015") ?></h2></div>
            <div class="col-sm-6"><h2 class="text-center"><?php _e("Paris Campus","ieseg2015") ?></h2></div>
        </div>
    </div>
</section>
<!-- IESEG EN images -->   
<section class="container-ieseg-images">
    <div class="container-fluid">
        <h2 class="text-center"><?php _e("Photo gallery","ieseg2015") ?></h2>
        <div class="row">
        
        </div>
        <div class="row">
            <a href="https://instagram.com/ieseg_school/" title="<?php _e('Follow IÉSEG on Instagram', 'ieseg2015');?>" class="btn col-sm-2 col-sm-offset-5"><?php _e("Follow IÉSEG on Instagram","ieseg2015") ?></a>	
        </div>
    </div>
</section>
<!-- TEMOIGNAGES -->   
<section class="container-testimonials">
    <div class="container-fluid container-1600">
        <h2 class="text-center"><?php _e("Testimonials","ieseg2015") ?></h2>
        <div class="row">
            <?php
            $args = array( 'posts_per_page' => 4, 'order'=> 'DESC','post_type' => 'testimonial','suppress_filters' => false);
            //supress_filter false est utile pour WPML (ne retourne les posts que dans la langue en cours)
            $postslist = get_posts( $args );
            foreach ( $postslist as $post ) :
                setup_postdata( $post ); 
                
              ?> 
                <div class="col-sm-3">
                    <?php 
                    $id=$post->ID;
                    /*echo date('D',get_post_meta($id,'wpcf-start-date',true));
                    echo date('d',get_post_meta($id,'wpcf-start-date',true));
                    echo date('M',get_post_meta($id,'wpcf-start-date',true));*/
                    ?>
                    <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                    
                    <?php echo get_post_meta($id,'wpcf-city-town', true)?>
                </div>
            <?php
            endforeach; 
            //wp_reset_postdata();
            ?>		
        </div>
        <div class="row">
            <a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 1787, 'page' ));?>" title="<?php _e('All the testimonials', 'ieseg2015');?>" class="btn col-sm-2 col-sm-offset-5"><?php _e("All the testimonials","ieseg2015") ?></a>	
        </div>
    </div>
</section>
</div><!--fin center-col-->
<?php
		/*endwhile;
	endif;*/
?>
<?php get_footer(); ?>