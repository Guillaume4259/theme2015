<?php
/*
Template Name: Page programme Testimonials
*/
//on a besoin de savoir si l'on est sur une home de programme pour :
//charger la bonne sidebar, 
//charger ou non les testimonials,
?>
<?php get_header(); ?>
<?php
if ( has_post_thumbnail()) : 
	$str_img_une = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'mega-thumb' );
	//echo get_the_ID().' '.var_dump($str_img_une);

endif;

$is_home_programe = false;
$homes_programmes=array(18322,22831,12691,17155,10873,17340,17394,17445,17417,21849,21911,21935,17148,9782,558); 
if (is_page($homes_programmes)){
	$is_home_programe = true;
}
global $sidebar_a_acharger;
include('includes/test-current-page.php');
?>
<div class="container-fluid" id="container-img-une" <?php if (!empty ($str_img_une[0]) && $str_img_une[1]>1000 ) { echo 'style="background-image:url('.$str_img_une[0].');"';}?>>
        <div class="keyfacts col-sm-3 hidden-xs hidden-sm wow fadeInUp" data-wow-duration="2s">
			<?php echo $keyfacts_programme ; ?>
        </div>

        <div class="container-titre">
                <div class="titre-deco hidden-xs"></div>
                <?php    
 					if ($is_home_programe==true){
 						the_title( '<h1 class="entry-title foundry_demi">', '</h1>' ); 
					}
					else{
						echo '<h1 class="entry-title foundry_demi">'.get_the_title( $post->post_parent ).'</h1>';
					}
				?>
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
                    		
                       <?php 
					   	include('includes/test-current-page.php'); 
						
					   	if ($is_home_programe==true){
						   echo '<a  href="'.get_permalink().'"> Overview</a>'; 
						}
						else{
							echo '<a  href="'.get_permalink($post->post_parent).'"> Overview</a>'; 
						}
						?>
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

    <div class="hidden-md hidden-lg">
    	<div class="keyfacts col-sm-3">
           <?php echo $keyfacts_programme ; ?>
         </div>
    </div>
           
</div>
	
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php the_content(); ?>
<?php endwhile; endif; ?>

<?php
$args = array(
	'posts_per_page' 	=> -1,
	'order'				=> 'DESC',
	'post_type' 		=> 'testimonial',
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
<section id="container-other-testimonicvbcbals" class="background-programme">
	<div class="container-fluid container-1600">
    	<?php /* <h2 class="text-center"><span class="foundry_light"><?php echo _e("Read more testimonials about","ieseg2015")?></span> <span class="foundry_bold"><?php echo $cat_testi[0]->name ;?></span></h2>*/?>
        <div class="row">
        <?php
            foreach ( $postslist as $post ) :
            	setup_postdata( $post ); 
         ?>
        	<div class="col-sm-4 col-md-3">
            	<div class="bloc bloc-other-testimonials text-center">
                	<div class="container-texte-other-testi">
                        <h3 class="text-center"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                        <?php 
						if (get_post_meta($id,'wpcf-position', true)){
							echo get_post_meta($id,'wpcf-position', true); 
						}
						else{
							echo get_post_meta($id,'wpcf-class', true); 
						}
						?>
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
                                <a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 1786, 'page' ));?>" title="<?php _e('All news', 'ieseg2015');?>" class="btn btn-gris center-block"><?php _e("All news","ieseg2015") ?></a>
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
                    <a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 1787, 'page' ));?>" title="<?php _e('All events', 'ieseg2015');?>" class="btn btn-gris center-block"><?php _e("All events","ieseg2015") ?></a>	
                </div>
            </div>	
           </div><!--END box-->
        </div><!--END col-sm-6-->
    </div><!--END row-->
    </div>
</section>
<?php get_footer(); ?>