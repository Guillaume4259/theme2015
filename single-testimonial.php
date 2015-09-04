<?php get_header(); ?>
<?php
//
//Categorie du testimonial;
$cat_testi=get_the_terms($post->ID,'testimonial-category');
//var_dump($cat_testi);
//echo $cat_testi[0]->name;

global $sidebar_a_acharger;
include('includes/test-current-page.php');
?>
<div class="container-fluid" id="container-img-une">
        <div class="container-titre">
                <div class="titre-deco hidden-xs"></div>
                
				<h1 class="entry-title foundry_demi"><?php the_title( '<h1 class="entry-title foundry_demi">', '</h1>' ); ?></h1>
                <div class="punchline-program">
                	<?php echo $cat_testi[0]->name; ?>
                    <?php //echo $punchline_programme; ?>
                </div>
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
<section>
    <div class="container-fluid container-1600"  role="main">
    	<?php if (have_posts()) : while (have_posts()) : the_post();?>
    	<div class="row">
        	<?php
			$nbr_col=12;
			if ( has_post_thumbnail() ) :
			$thumb_testi = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'mega-thumb' ); ?>
				<div class="col-sm-4">
                	<?php the_post_thumbnail('',array('class' => 'img-responsive')); ?>
                </div>
			<?php
				$nbr_col=8;
			endif;
			?>
        	<div class="col-sm-<?php echo $nbr_col;?>">
            	<div class="testimonial-infos-bar text-center">
					<?php 
					//On recupere dans un tableau toutes les metas (custom fields du testimonial)
					$metas_testimonial=get_post_meta(get_the_ID());
					//var_dump($metas_testimonial);
					if ($metas_testimonial['wpcf-class']){
						echo '<span class="glyphicon glyphicon-education" aria-hidden="true"></span>'.__('Class','ieseg2015').' : '.$metas_testimonial['wpcf-class'][0];
					}
					if ($metas_testimonial['wpcf-position']){
						echo '<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>'.__('Position','ieseg2015').' : '.$metas_testimonial['wpcf-position'][0];
					}
					if ($metas_testimonial['wpcf-country']){
						echo '<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>'.__('Country','ieseg2015').' : '.$metas_testimonial['wpcf-country'][0];
					}
					?>
                </div>
                <?php
                if (has_excerpt()) :
				?>
                <div class="testimonial_chapeau wow fadeInUp foundry_light" data-wow-delay="0.5s">
                    <?php the_excerpt(); ?>
                </div>
				<?php 
           		endif;?>  
				<?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?> 
        </div>       
    </div>
</section>	


<!--  Autres témoignages   -->    
<?php
$args = array(
	'posts_per_page' 	=> -1,
	'order'				=> 'DESC',
	'post_type' 		=> 'testimonial',
	'exclude' 			=> $post->ID, //on exclu le post actuel
	//'suppress_filters' => false,
	'tax_query' => 
	array(
		array(
			'taxonomy' => 'testimonial-category',
			'field'    => 'term_id',
			'terms'    => apply_filters('wpml_object_id', $cat_testi[0]->term_id, 'testimonial-category'),
		),
	)

);

//supress_filter false est utile pour WPML (ne retourne les posts que dans la langue en cours)
$postslist = get_posts( $args );
if ($postslist){
?>
<section id="container-other-testimonials">
	<div class="container-fluid container-1600">
    	<h2 class="text-center"><span class="foundry_light"><?php echo _e("Read more testimonials about","ieseg2015")?></span> <span class="foundry_bold"><?php echo $cat_testi[0]->name ;?></span></h2>
        <div class="row">
        <?php
            foreach ( $postslist as $post ) :
            	setup_postdata( $post ); 
         ?>
        	<div class="col-sm-4 col-md-3">
            	<div class="bloc bloc-other-testimonials text-center">
                	<div class="container-texte-other-testi">
                        <h3 class="text-center"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
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
			endforeach;	
		?>
        </div>
    </div>
</section>
<?php
}
?>
<!-- Fin autres Témoignages-->


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
                                <a href="<?php echo get_post_type_archive_link('news'); ?>" title="<?php _e('All news', 'ieseg2015');?>" class="btn center-block"><?php _e("All news","ieseg2015") ?></a>
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
                    <a href="<?php echo get_post_type_archive_link('events'); ?>" title="<?php _e('All events', 'ieseg2015');?>" class="btn center-block"><?php _e("All events","ieseg2015") ?></a>	
                </div>
            </div>	
           </div><!--END box-->
        </div><!--END col-sm-6-->
    </div><!--END row-->
    </div>
</section>

<?php get_footer(); ?>