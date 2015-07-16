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
        <?php _e("Your browser does not support the video tag. Please upgrade your browser.","ieseg2015") ?>
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
					if ( has_post_thumbnail() ) {?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="container-img-une"><?php the_post_thumbnail(); ?></a>
                    <?php
					}
					else {?>
                    
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="container-img-une" style="display:block;overflow:hidden;"><img src="<?php echo get_template_directory_uri().'/images/actu-home-defaut.jpg' ;?>" class="img-responsive" alt="<?php the_title(); ?>"/>
					<?php
                    }
					?>
					<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_excerpt(); ?></a>
                </div>
			</div>
		<?php
		endforeach; 
		//wp_reset_postdata();
		?>	
        
    </div>
    <div class="row">
    	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 1786, 'page' ));?>" title="<?php _e('All news', 'ieseg2015');?>" class="btn btn-cta-home col-sm-2 col-sm-offset-5"><?php _e("All news","ieseg2015") ?></a>	
    </div>

</section>
<!-- EVENTS -->
<section class="container-events">   
    <div class="container-fluid container-1600">
        <h2 class="text-center"><?php _e("Events","ieseg2015") ?></h2>
        <div class="row">
            <?php
            $args = array( 'posts_per_page' => 4, 'order'=> 'DESC', 'orderby' => 'meta_value_num','post_type' => 'events', 'meta_key'=> 'wpcf-start-date','suppress_filters' => false );
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
                            <div class="col-sm-9">
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
            <a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 1787, 'page' ));?>" title="<?php _e('All events', 'ieseg2015');?>" class="btn btn-blanc btn-cta-home col-sm-2 col-sm-offset-5"><?php _e("All events","ieseg2015") ?></a>	
        </div>
    </div>
</section>
<!-- Programmes -->   
<section class="container-fluid container-1600 container-programmes">
	<h2 class="text-center"><?php _e("A complete range of programs","ieseg2015") ?></h2>
    <div class="row">
    	<p class="col-md-10 col-md-offset-1 text-center">Ibi victu recreati et quiete, postquam abierat timor, vicos opulentos adorti equestrium adventu cohortium, quae casu propinquabant, nec resistere planitie porrecta conati digressi sunt retroque concedentes omne iuventutis robur relictum in sedibus acciverunt.</p>
	</div>
    <div class="row">
        <div class="col-md-2 col-md-offset-1">
        	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id',9782, 'page' ));?>" title="<?php _e('Grande École Program', 'ieseg2015');?>" class="bloc-programme-home">
				<span class="container-titre-programme-home"><?php _e("Grande École Program","ieseg2015") ?></span>
            	<img src="<?php echo get_template_directory_uri() ;?>/images/home/programme-grande-ecole.jpg" alt="<?php _e("Grande École Program","ieseg2015") ?>" class="img-responsive"/>
            	<span class="container-info-programme-home">
                    <span class="show"><span class="duree-programme-picto"></span>5 <?php _e("years","ieseg2015") ?></span>
                    <span class="show"><span class="acessibilite-programme-picto"></span><?php _e("Accessible xxx","ieseg2015") ?></span>
                    <span class="btn btn-blanc more-info-programme"><?php _e("More information","ieseg2015") ?></span>
                </span>
            </a>	
        </div>
        <div class="col-md-2">
        	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id',19878, 'page' ));?>" title="<?php _e('Bachelor Program', 'ieseg2015');?>" class="bloc-programme-home">
				<span class="container-titre-programme-home"><?php _e("Bachelor Program","ieseg2015") ?></span>
            	<img src="<?php echo get_template_directory_uri() ;?>/images/home/bachelor.jpg" alt="<?php _e("Bachelor Program","ieseg2015") ?>" class="img-responsive"/>
                <span class="container-info-programme-home">
                    <span class="show"><span class="duree-programme-picto"></span>3 <?php _e("years","ieseg2015") ?></span>
                    <span class="show"><span class="acessibilite-programme-picto"></span><?php _e("Accessible xxx","ieseg2015") ?></span>
                    <span class="btn btn-blanc more-info-programme"><?php _e("More information","ieseg2015") ?></span>
                </span>
            </a>	
        </div>
        <div class="col-md-2">
        	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id',18645, 'page' ));?>" title="<?php _e('Postgraduate Programs', 'ieseg2015');?>" class="bloc-programme-home">
				<span class="container-titre-programme-home"><?php _e("Postgraduate Programs","ieseg2015") ?></span>
            	<img src="<?php echo get_template_directory_uri() ;?>/images/home/msc.jpg" alt="<?php _e("Postgraduate Programs","ieseg2015") ?>" class="img-responsive"/>
            	<span class="container-info-programme-home">
                    <span class="show"><span class="duree-programme-picto"></span>18 <?php _e("monthes","ieseg2015") ?></span>
                    <span class="show"><span class="acessibilite-programme-picto"></span><?php _e("Accessible xxx","ieseg2015") ?></span>
                    <span class="btn btn-blanc more-info-programme"><?php _e("More information","ieseg2015") ?></span>
                </span>
            </a>	
        </div>
        <div class="col-md-2">
        	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id',17148, 'page' ));?>" title="<?php _e('International MBA', 'ieseg2015');?>" class="bloc-programme-home">
				<span class="container-titre-programme-home"><?php _e("International MBA","ieseg2015") ?></span>
            	<img src="<?php echo get_template_directory_uri() ;?>/images/home/imba.jpg" alt="<?php _e("International MBA","ieseg2015") ?>" class="img-responsive"/>
            	<span class="container-info-programme-home">
                    <span class="show">18 <?php _e("monthes","ieseg2015") ?></span>
                    <span class="show"><span class="acessibilite-programme-picto"></span><?php _e("Accessible xxx","ieseg2015") ?></span>
                    <span class="btn btn-blanc more-info-programme"><?php _e("More information","ieseg2015") ?></span>
                </span>
            </a>	
        </div>
         <div class="col-md-2">
        	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id',2554, 'page' ));?>" title="<?php _e('Executive Education', 'ieseg2015');?>" class="bloc-programme-home">
				<span class="container-titre-programme-home"><?php _e("Executive Education","ieseg2015") ?></span>
            	<img src="<?php echo get_template_directory_uri() ;?>/images/home/formation-continue.jpg" alt="<?php _e("Executive Education","ieseg2015") ?>" class="img-responsive"/>
            	<span class="container-info-programme-home">
                    <span class="show"><span class="duree-programme-picto"></span><?php _e("Customized Learning solutions and XXXX","ieseg2015") ?></span>
                    <span class="btn btn-blanc more-info-programme"><?php _e("More information","ieseg2015") ?></span>
                </span>
            </a>	
        </div>
    </div>
</section>
<!-- Besoin infos -->
<section class="container-besoin-info bg-orange1">
    <div class="container-fluid container-1600">
        <h2 class="text-center"><?php _e("Need informations ?","ieseg2015") ?></h2>
        <div class="row">
            	<form id="form-cibles-home" action="<?php bloginfo('url');?>">
                	<div class="col-sm-4 col-sm-offset-4">
                        <select name="select-statut-home" class="form-control input-lg">
                            <option><?php _e("You are","ieseg2015") ?></option>
                            <option value="<?php echo get_page_link(apply_filters('wpml_object_id',1825, 'page' ));?>"><?php _e("A prospective student","ieseg2015") ?></option>
                            <option value="<?php echo get_page_link(apply_filters('wpml_object_id',31796, 'page' ));?>"><?php _e("A parent","ieseg2015") ?></option>
                            <option value="<?php echo get_page_link(apply_filters('wpml_object_id',31798, 'page' ));?>"><?php _e("A company","ieseg2015") ?></option>
                            <option value="http://www.ieseg-network.com"><?php _e("An alumny","ieseg2015") ?></option>
                        </select>
                    </div>
                    <div class="col-sm-1">
                    	<input type="submit" id="button-form-cibles-home" class="btn btn-blanc" value="OK">
                    </div>
                </form>
        </div>
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
                    	<a href="<?php echo get_page_link(apply_filters('wpml_object_id',1766, 'page' ));?>">
                        	<span class="key-fact-picto"></span>
                            <span class="key-fact-number txt-rose">3800</span>
                            <?php _e("students","ieseg2015") ?>
                        </a>
                    </div>
                    <div class="col-sm-3 text-center key-fact">
                    	<a href="<?php echo get_page_link(apply_filters('wpml_object_id',1976, 'page' ));?>">
                        	<span class="key-fact-picto"></span>
                    		<div class="key-fact-number txt-orange2">223</div>
                    		<?php _e("partner universities","ieseg2015") ?>
                        </a>
                    </div>
                    <div class="col-sm-3 text-center key-fact">
                    	<a href="<?php echo get_page_link(apply_filters('wpml_object_id',2029, 'page' ));?>">
                        	<span class="key-fact-picto"></span>
                            <div class="key-fact-number txt-violet">83 %</div>
                            <?php _e("international professors","ieseg2015") ?>
                        </a>
                    </div>
                    <div class="col-sm-3 text-center key-fact">
                    	<a href="<?php echo get_page_link(apply_filters('wpml_object_id',2134, 'page' ));?>">
                        	<span class="key-fact-picto"></span>
                            <div class="key-fact-number txt-vert-canard">2500</div>
                            <?php _e("partner companies","ieseg2015") ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
            	<h2 class="text-center"><?php _e("Rankings","ieseg2015") ?></h2>
            	<div class="bloc">
                	<ul class="bxslider">
                    	<li>
                        	<h3>Financial Times</h3>
                            <ul>
                            	<li>1ère École Post-Bac</li>
                                <li>21ème au niveau international</li>
                                <li>7ème au niveau national</li>
                            </ul>
                        </li>
                        <li>
                        	<h3>Prout</h3>
                            <ul>
                            	<li>1ère École Post-Bac</li>
                                <li>21ème au niveau international</li>
                                <li>7ème au niveau national</li>
                            </ul>
                        </li>
                    </ul>
                </div>
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