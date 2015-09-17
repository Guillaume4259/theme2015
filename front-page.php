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
        <video autoplay loop class="fillWidth hidden-xs">
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
		$args = array( 'posts_per_page' => 4, 'order'=> 'DESC', 'orderby' => 'date','post_type' => 'news','suppress_filters' => false );
		//supress_filter false est utile pour WPML (ne retourne les posts que dans la langue en cours)
		$postslist = get_posts( $args );
		$i_news=1;
		foreach ( $postslist as $post ) :
		  setup_postdata( $post ); ?> 
			<div class="col-sm-6 col-md-3">
            	<div class="bloc bloc-news-home">
					<?php 
					if ( has_post_thumbnail() ) {
					$thumb_news = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'bloc-thumb' );	
					?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="container-img-une">
							<img src="<?php echo $thumb_news['0']; ?>" class="img-responsive" alt="<?php the_title(); ?>">
                            <?php //the_post_thumbnail('bloc-thumb', array( 'class' => 'img-responsive' )); ?>
                        </a>
                    <?php
					}
					else {?>
                    
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="container-img-une"><img src="<?php echo get_template_directory_uri().'/images/actu-home-defaut.jpg' ;?>" class="img-responsive" alt="<?php the_title(); ?>"/></a>
					<?php
                    }
					?>
					<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_excerpt(); ?></a>
                </div>
			</div>
            <?php
			if ($i_news==2){
			?>
            	<div class="clearfix visible-sm-block"></div>
            <?php
			}
			?>
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
                            <time class="col-sm-2 text-center" datetime="<?php echo date('Y',get_post_meta($id,'wpcf-start-date',true)).'-'.date('m',get_post_meta($id,'wpcf-start-date',true)).'-'.date('d',get_post_meta($id,'wpcf-start-date',true)); ?>"> 
								<span class="jour foundry_bold">
									<?php echo strftime('%a',get_post_meta($id,'wpcf-start-date',true)); ?>
                                </span>
                                <span class="date foundry_bold">
									<?php echo date('d',get_post_meta($id,'wpcf-start-date',true)); ?>
                                </span>
                                <span class="mois foundry_bold">
                                    <?php echo strftime('%b',get_post_meta($id,'wpcf-start-date',true)); ?>                            
                                </span>
                            </time>
                            <div class="col-sm-9">
                            	<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                            	<span class="picto-pin"></span> <?php echo get_post_meta($id,'wpcf-city-town', true)?>
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
        	<div class="col-xs-12 col-sm-2 col-sm-offset-5">
            	<a href="<?php echo get_post_type_archive_link('events'); ?>" title="<?php _e('All events', 'ieseg2015');?>" class="btn btn-blanc btn-cta-home"><?php _e("All events","ieseg2015") ?></a>	
        	</div>
        </div>
    </div>
</section>
<!-- Programmes -->   
<section class="container-fluid container-1600 container-programmes">
	<h2 class="text-center"><?php _e("A complete range of programs","ieseg2015") ?></h2>
    <div class="row">
    	<p class="col-md-10 col-md-offset-1 text-center">
        <?php 
		if (ICL_LANGUAGE_CODE=="fr"){?>
			L’IÉSEG School of Management propose sur ses campus lillois et parisien un Programme Grande École post-bac en 5 ans, des programmes internationaux de type BBA ,MSc et MBA ainsi qu’une offre de formation continue.
		<?php 
		}
		else {
		?>
			Ibi victu recreati et quiete, postquam abierat timor, vicos opulentos adorti equestrium adventu cohortium, quae casu propinquabant, nec resistere planitie porrecta conati digressi sunt retroque concedentes omne iuventutis robur relictum in sedibus acciverunt.
		<?php 
		}
		?>
        </p>
	</div>
    <div class="row">
        <div class="col-sm-4 col-lg-2 col-lg-offset-1 wow fadeInUp" data-wow-delay="0.5s">
        	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id',9782, 'page' ));?>" title="<?php _e('Grande École Program', 'ieseg2015');?>" class="bloc-programme-home center-block">
				<span class="container-titre-programme-home"><?php _e("Grande École Program","ieseg2015") ?></span>
            	<img src="<?php echo get_template_directory_uri() ;?>/images/home/programme-grande-ecole.jpg" alt="<?php _e("Grande École Program","ieseg2015") ?>" class="img-responsive"/>
            	<span class="container-info-programme-home">
                    <span class="show programme-duration"><span class="picto-programme-duration"></span>5 <?php _e("years","ieseg2015") ?></span>
                    <span class="show">
                    	<span class="picto-programme-acessibility show pull-left"></span>
                        <span>
							<?php 
                            if (ICL_LANGUAGE_CODE=="fr"){?>
                                Accessible niveau Bac, Bac+3 et Bac+4
                            <?php 
                            }
                            else {
                            ?>
                                Combined Bachelor and Master Program
                            <?php 
                            }
                            ?>
                        </span>
					</span>
                    <span class="btn btn-blanc more-info-programme hidden-xs"><?php _e("More information","ieseg2015") ?></span>
                </span>
            </a>	
        </div>
        <div class="col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay="1s">
        	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id',19878, 'page' ));?>" title="<?php _e('Bachelor Program', 'ieseg2015');?>" class="bloc-programme-home center-block">
				<span class="container-titre-programme-home"><?php _e("Bachelor Program","ieseg2015") ?></span>
            	<img src="<?php echo get_template_directory_uri() ;?>/images/home/bachelor.jpg" alt="<?php _e("Bachelor Program","ieseg2015") ?>" class="img-responsive"/>
                <span class="container-info-programme-home">
                    <span class="show programme-duration"><span class="picto-programme-duration"></span>3 <?php _e("years","ieseg2015") ?></span>
                    <span class="show"><span class="picto-programme-acessibility show pull-left"></span>
						Accessible niveau Bac
                    </span>
                    <span class="btn btn-blanc more-info-programme hidden-xs"><?php _e("More information","ieseg2015") ?></span>
                </span>
            </a>	
        </div>
        <div class="col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay="1.5s">
        	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id',18645, 'page' ));?>" title="<?php _e('Postgraduate Programs', 'ieseg2015');?>" class="bloc-programme-home center-block">
				<span class="container-titre-programme-home"><?php _e("Postgraduate Programs","ieseg2015") ?></span>
            	<img src="<?php echo get_template_directory_uri() ;?>/images/home/msc.jpg" alt="<?php _e("Postgraduate Programs","ieseg2015") ?>" class="img-responsive"/>
            	<span class="container-info-programme-home">
                    <span class="show programme-duration"><span class="picto-programme-duration"></span>18 <?php _e("months","ieseg2015") ?></span>
                    <span class="show">
                    	<span class="picto-programme-acessibility show pull-left"></span>
						<?php 
						if (ICL_LANGUAGE_CODE=="fr"){?>
							Accessible niveau Bac+4
						<?php 
						}
						else {
						?>
							MSc programs
						<?php 
						}
						?>
                    </span>
                    <span class="btn btn-blanc more-info-programme hidden-xs"><?php _e("More information","ieseg2015") ?></span>
                </span>
            </a>	
        </div>
        <div class="col-sm-4 col-lg-2 col-sm-offset-2 col-lg-offset-0 wow fadeInUp" data-wow-delay="2s">
        	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id',17148, 'page' ));?>" title="<?php _e('International MBA', 'ieseg2015');?>" class="bloc-programme-home center-block">
				<span class="container-titre-programme-home"><?php _e("International MBA","ieseg2015") ?></span>
            	<img src="<?php echo get_template_directory_uri() ;?>/images/home/imba.jpg" alt="<?php _e("International MBA","ieseg2015") ?>" class="img-responsive"/>
            	<span class="container-info-programme-home">
                    <span class="show programme-duration"><span class="picto-programme-duration"></span>18 <?php _e("months","ieseg2015") ?></span>
                    <span class="show"><span class="picto-programme-acessibility show pull-left"></span>
						<?php 
						if (ICL_LANGUAGE_CODE=="fr"){?>
							Accessible niveau Bac+4
						<?php 
						}
						else {
						?>
							
						<?php 
						}
						?>
                    </span>
                    <span class="btn btn-blanc more-info-programme hidden-xs"><?php _e("More information","ieseg2015") ?></span>
                </span>
            </a>	
        </div>
         <div class="col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay="2.5s">
        	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id',2554, 'page' ));?>" title="<?php _e('Executive Education', 'ieseg2015');?>" class="bloc-programme-home center-block">
				<span class="container-titre-programme-home"><?php _e("Executive Education","ieseg2015") ?></span>
            	<img src="<?php echo get_template_directory_uri() ;?>/images/home/formation-continue.jpg" alt="<?php _e("Executive Education","ieseg2015") ?>" class="img-responsive"/>
            	<span class="container-info-programme-home">
                    <span class="show text-center">
						<?php 
						if (ICL_LANGUAGE_CODE=="fr"){?>
							Sur-mesure ou diplômante
						<?php 
						}
						else {
						?>
							Customized and degree programs
						<?php 
						}
						?>
					
					</span>
                    <span class="btn btn-blanc more-info-programme hidden-xs"><?php _e("More information","ieseg2015") ?></span>
                </span>
            </a>	
        </div>
    </div>
</section>
<!-- Besoin infos -->
<section class="container-besoin-info bg-orange1">
    <div class="container-fluid container-1600">
        <h2 class="text-center"><?php _e("Need information ?","ieseg2015") ?></h2>
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
</section>
<!-- Chiffres et classement -->   
<section class="container-chiffres-classements">
    <div class="container-fluid container-1600">
        <div class="row">
            <div class="col-sm-9">
            	<h2 class="text-center"><?php _e("Facts & Figures","ieseg2015") ?></h2>
            	<div class="row">
            		<div class="col-xs-6 col-sm-3 text-center key-fact wow fadeInUp" data-wow-delay="0.5s">
                    	<a href="<?php echo get_page_link(apply_filters('wpml_object_id',1766, 'page' ));?>">
                        	<span class="key-fact-picto key-fact-students"></span>
                            <span class="key-fact-number txt-rose">3800</span>
                            <?php _e("students","ieseg2015") ?>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-3 text-center key-fact wow fadeInUp" data-wow-delay="1s">
                    	<a href="<?php echo get_page_link(apply_filters('wpml_object_id',1976, 'page' ));?>">
                        	<span class="key-fact-picto key-fact-universities"></span>
                    		<div class="key-fact-number txt-orange1">223</div>
                    		<?php _e("partner universities","ieseg2015") ?>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-3 text-center key-fact wow fadeInUp" data-wow-delay="1.5s">
                    	<a href="<?php echo get_page_link(apply_filters('wpml_object_id',2029, 'page' ));?>">
                        	<span class="key-fact-picto key-fact-professors"></span>
                            <div class="key-fact-number txt-violet">83 %</div>
                            <?php _e("international professors","ieseg2015") ?>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-3 text-center key-fact wow fadeInUp" data-wow-delay="2s">
                    	<a href="<?php echo get_page_link(apply_filters('wpml_object_id',2134, 'page' ));?>">
                        	<span class="key-fact-picto key-fact-companies"></span>
                            <div class="key-fact-number txt-vert-canard">2500</div>
                            <?php _e("partner companies","ieseg2015") ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
            	<h2 class="text-center"><?php _e("Rankings","ieseg2015") ?></h2>
            	<div class="bloc bloc-rankings">
                	<ul class="bxslider">
                    	<li>
                        	<h3>Financial Times</h3>
                            <?php
                            if (ICL_LANGUAGE_CODE=="fr"){?>
                            	<ul>
                                	<li>1<sup>ère</sup> École Post-Bac</li>
                                    <li>Classement international : 21<sup>ème</sup></li>
                                    <li>Classement national: 7<sup>ème</sup></li>
                                </ul>
                            <?php
							}
							else{
							?>
                            	<ul>
                                    <li>International Ranking: 21<sup>st</sup></li>
                                    <li>French Ranking: 7<sup>th</sup></li>
                                </ul>
							<?php
							}
							?> 
                        </li>
                        <li>
                        	<h3>L’Étudiant / L’Express</h3>
                            <?php
                            if (ICL_LANGUAGE_CODE=="fr"){?>
                            	<ul>
                                    <li>Excellence académique : 3<sup>ème</sup></li>
                                    <li>International : 4<sup>ème</sup></li>
                                </ul>
                            <?php
							}
							else{
							?>
                            	<ul>
                                    <li>Academic Excellence: 3<sup>rd</sup></li>
                                    <li>International Excellence: 4<sup>th</sup></li>
                                </ul>
							<?php
							}
							?> 
                        </li>
                        <li>
                        	<h3>Le Figaro Étudiant</h3>
                            <?php
                            if (ICL_LANGUAGE_CODE=="fr"){?>
                            	<ul>
                                    <li>1<sup>ère</sup> École Post-Bac</li>
                                    <li>7<sup>ème</sup> école de commercce</li>
                                </ul>
                            <?php
							}
							else{
							?>
                            	<ul>
                                    <li>French Ranking: 1<sup>st</sup> Business School Recruiting Students from High School</li>
                                    <li>French Ranking: 7<sup>th</sup> Business School</li>
                                </ul>
							<?php
							}
							?> 
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
            <div class="col-sm-6">
            	<a href="<?php echo get_page_link(apply_filters('wpml_object_id',1910, 'page' ));?>" class="lien-container-campus">
                	<img src="<?php echo get_template_directory_uri() ;?>/images/home/campus-lille.jpg" alt="<?php _e("Lille Campus","ieseg2015") ?>" class="img-responsive"/>
                	<h2 class="text-center">
                    	<?php _e("Lille Campus","ieseg2015") ?><br />
                    	<span class="btn btn-blanc btn-lille"><span></span><?php _e("Discover","ieseg2015") ?></span>      
                	</h2>
                </a>
            </div>
            <div class="col-sm-6">
            	<a href="<?php echo get_page_link(apply_filters('wpml_object_id',31473, 'page' ));?>" class="lien-container-campus">
                	<img src="<?php echo get_template_directory_uri() ;?>/images/home/campus-paris.jpg" alt="<?php _e("Paris Campus","ieseg2015") ?>" class="img-responsive"/>
                	<h2 class="text-center">
                    	<?php _e("Paris Campus","ieseg2015") ?><br />
                    	<span class="btn btn-blanc btn-paris"><span></span><?php _e("Discover","ieseg2015") ?></span>      
                	</h2>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- IESEG EN images -->   
<section class="container-ieseg-images">
    <div class="container-fluid">
        <h2 class="text-center"><?php _e("Photo gallery","ieseg2015") ?></h2>
    </div>
    <div class="row no-gutters"><!-- no container needed for no-gutters rows-->
        <div class="col-xs-6 col-sm-3">
            <img src="<?php echo get_template_directory_uri() ;?>/images/home/la-defense.jpg" alt="<?php _e("Paris Campus","ieseg2015") ?>" class="img-responsive" />
            <img src="<?php echo get_template_directory_uri() ;?>/images/home/cour-bat-a.jpg" alt="<?php _e("Lille Campus","ieseg2015") ?>" class="img-responsive" />
        </div>
        <div class="col-xs-6 col-sm-3">
            <img src="<?php echo get_template_directory_uri() ;?>/images/home/cours-ecole-commerce.jpg" alt="<?php _e("Business classroom in paris","ieseg2015") ?>" class="img-responsive" />
        </div>
        <div class="col-xs-12 col-sm-3">
            <img src="<?php echo get_template_directory_uri() ;?>/images/home/cours-commerce-lille.jpg" alt="<?php _e("Business classroom in Lille","ieseg2015") ?>" class="img-responsive" />
            <div class="row no-gutters">
                <div class="col-xs-6">
                    <img src="<?php echo get_template_directory_uri() ;?>/images/home/remise-diplome-ecole-commerce.jpg" alt="<?php _e("Graduation ceremony","ieseg2015") ?>" class="img-responsive" />
                </div>
                <div class="col-xs-6">	
                    <img src="<?php echo get_template_directory_uri() ;?>/images/home/travail-cour.jpg" alt="<?php _e("Students in courtyard","ieseg2015") ?>" class="img-responsive" />
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3">
            <img src="<?php echo get_template_directory_uri() ;?>/images/home/travail-paris.jpg" alt="<?php _e("Students at works","ieseg2015") ?>" class="img-responsive" />
        </div>
    </div>
	<div class="container-fluid">
        <div class="row">
            <a href="https://instagram.com/ieseg_school/" title="<?php _e('Follow IÉSEG on Instagram', 'ieseg2015');?>" class="btn btn-instagram col-sm-2 col-sm-offset-5" target="_blank"><span></span><?php _e("Follow IÉSEG on Instagram","ieseg2015") ?></a>	
        </div>
    </div>
</section>
<!-- TEMOIGNAGES -->   
<section class="container-testimonials">
    <div class="container-fluid container-1600">
        <h2 class="text-center"><?php _e("Testimonials","ieseg2015") ?></h2>
        <div class="row">
        <div class="col-sm-12">

        <div class="proghome-testimonials">
                         <?php
                        $args = array(
                            'posts_per_page' => -1,
                            'order'=> 'DESC',
                            'post_type' => 'testimonial', 
                            'suppress_filters' => false,
							'tax_query' =>  array ( //Exclusion de la cat EMBA
													array(
														'taxonomy' => 'testimonial-category', // My Custom Taxonomy
														'terms' => 'emba', // My Taxonomy Term that I wanted to exclude
														'field' => 'slug', // Whether I am passing term Slug or term ID
														'operator' => 'NOT IN', // Selection operator - use IN to include, NOT IN to exclude
													),
												),

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
                                        <div class="container-testimonial-homepage-programs">
                                            <div class="yellow-quotation-mark"></div>
                                            <div class="testi-excerpt"><?php ieseg_excerpt_debut_contenu(430) ?>
                                                <?php //the_excerpt(); ?>
                                                <a href="<?php the_permalink(); ?>" class="readmore" title="<?php _e("Keep reading","ieseg2015") ?>">
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
            <a href="<?php echo get_post_type_archive_link('testimonial'); ?>" title="<?php _e('All testimonials', 'ieseg2015');?>" class="btn col-sm-2 col-sm-offset-5"><?php _e("All the testimonials","ieseg2015") ?></a>	
        </div>
    </div>
</section>
</div><!--fin center-col-->
<?php
		/*endwhile;
	endif;*/
?>
<?php get_footer(); ?>