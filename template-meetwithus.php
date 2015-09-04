<?php
/*
Template Name: Meet with Us
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
        	<div class="col-xs-12">
				<?php
                $args = array( 
							'posts_per_page' 	=> -1,
							'order'				=> 'ASC',
							'orderby' 			=> 'meta_value',
							'post_type' 		=> 'events',
							'meta_key'			=> 'wpcf-event-country',
							'tax_query' => 
												array(
													array(
														'taxonomy' => 'events-category',
														'field'    => 'term_id',
														'terms'    => apply_filters('wpml_object_id', 139, 'events-category'),
													),
												)
							);

                $fairs = get_posts( $args );
                if ($fairs):?>
                <h2><?php _e("Fairs","ieseg2015");?></h2>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" width="100%">
                    	<thead>
                            <tr>
                                <th width="15%"><?php _e("Country","ieseg2015");?></th>
                                <th width="15%"><?php _e("City","ieseg2015");?></th>
                                <th width="30%"><?php _e("Date","ieseg2015");?></th>
                                <th width="40%"><?php _e("Organizer","ieseg2015");?></th>
                            </tr>
                        </thead>
                    <?php
                    foreach ( $fairs as $post ) :
                        setup_postdata( $post ); 
                        //$id=$post->ID;
						//On recupere dans un tableau toutes les metas (custom fields du testimonial)
						$metas_fair=get_post_meta(get_the_ID());
                      ?> 
                      	<tr>
                        	<th><?php 
								if($metas_fair['wpcf-event-country'][0]!=$country_previous_fair){
									echo $metas_fair['wpcf-event-country'][0]; 
								}
								?>
                            </th>
                        	<td><?php echo $metas_fair['wpcf-city-town'][0]; ?></td>
                        	<td><?php echo date('d',$metas_fair['wpcf-start-date'][0]).' '.strtolower(date('M',$metas_fair['wpcf-start-date'][0])).' '.date('Y',$metas_fair['wpcf-start-date'][0]); ?>
                            	<?php
								 if ($metas_fair['wpcf-start-date'][0] != $metas_fair['wpcf-end-date'][0]){
									 echo ' - '.date('d',$metas_fair['wpcf-end-date'][0]).' '.strtolower(date('M',$metas_fair['wpcf-end-date'][0])).' '.date('Y',$metas_fair['wpcf-end-date'][0]);
								 }
								?>
                            </td>
                            <td><?php 
								if($metas_fair['wpcf-external-url'][0]){
									echo '<a href="'.$metas_fair['wpcf-external-url'][0].'" target="_blank">'.get_the_title().'</a>'; 
								}
								else{
									the_title(); 
								}?>
                           </td>
                        </tr>
                    <?php
						$country_previous_fair = $metas_fair['wpcf-event-country'][0];
                    endforeach; ?>
                    </table>
                </div>
                <?php
				endif;
                ?>
				</div>
        </div><!--fin des fairs-->
		<div class="row">
        	<div class="col-xs-12">
				<?php
                $args = array( 
							'posts_per_page' 	=> -1,
							'order'				=> 'ASC',
							'orderby' 			=> 'meta_value_num',
							'post_type' 		=> 'events',
							'meta_key'			=> 'wpcf-start-date',
							'tax_query' => 
												array(
													array(
														'taxonomy' => 'events-category',
														'field'    => 'term_id',
														'terms'    => apply_filters('wpml_object_id', 134, 'events-category'),
													),
												)
							);

                $opendays = get_posts( $args );
                if ($opendays):?>
                <h2><?php _e("Open days","ieseg2015");?></h2>
                <?php if (ICL_LANGUAGE_CODE=="fr"){?>
                <div class="embed-responsive embed-responsive-16by9" style="margin-bottom:30px;">
                	<iframe width="640" height="360" src="https://www.youtube.com/embed/BPgQyFs-Jgs" frameborder="0" allowfullscreen></iframe>
                </div>
                <?php }?>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" width="100%">
                    	<thead>
                            <tr>
                                <th width="40%"><?php _e("City","ieseg2015");?></th>
                                <th width="40%"><?php _e("Date","ieseg2015");?></th>
                                <th width="20%"></th>
                            </tr>
                        </thead>
                    <?php
                    foreach ( $opendays as $post ) :
                        setup_postdata( $post ); 
                        //$id=$post->ID;
						//On recupere dans un tableau toutes les metas (custom fields du testimonial)
						$metas_openday=get_post_meta(get_the_ID());
                      ?> 
                      	<tr>
                        	<td><?php echo $metas_openday['wpcf-city-town'][0]; ?></td>
                        	<td><?php echo date('d',$metas_openday['wpcf-start-date'][0]).' '.strtolower(date('M',$metas_openday['wpcf-start-date'][0])).' '.date('Y',$metas_openday['wpcf-start-date'][0]); ?>
                            	<?php
								 if ($metas_openday['wpcf-start-date'][0] != $metas_openday['wpcf-end-date'][0]){
									 echo ' - '.date('d',$metas_openday['wpcf-end-date'][0]).' '.strtolower(date('M',$metas_openday['wpcf-end-date'][0])).' '.date('Y',$metas_openday['wpcf-end-date'][0]);
								 }
								?>
                            </td>
                            <td><?php 
									echo '<a href="'.get_permalink().'" >'.__("Learn more","ieseg2015").'</a>'; 
								?>
                           </td>
                        </tr>
                    <?php
                    endforeach; ?>
                    </table>
                </div>
                <?php
				endif;
                ?>
				</div>
            </div>
        </div><!--end center-col-->
        
        <?php
		if (!empty($sidebar_a_acharger['global'])){?>
			<aside class="col-sm-3 right-col">
        <?php
		}
		
		switch ($sidebar_a_acharger['global']) {
			case "ecole":
				get_sidebar( 'ecole' );
				break;
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
				
			/*default:
				echo "yep";*/
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