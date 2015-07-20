<?php
/*
Template Name: Home Program
*/
?>

<?php get_header(); ?>
<div class="container-fluid" id="container-img-une">


    <div class="container-titre">
    	<div class="titre-deco"></div>
    	<?php the_title( '<h1 class="entry-title foundry_demi">', '</h1>' ); ?>
        <?php
			if (is_page('msc-digital-marketing-crm')){
		?>
		
		<div class="punchline-program">
		Become a digital expert
		</div>
		
		<?php } ?>
    
    </div>
    </div>


<div class="container-fluid fond-menu-program" role="main">

	<div id="menu-program">
        <ul>
            <li class="rub-programmes boutons-menu picto-menu-programme picto-overview menu-item menu-item-type-post_type menu-item-object-page">


               <?php echo '<a  href="'.get_permalink($post->post_parent).'">
			   Overview</a>'; ?>
            </li>

        </ul>
            <?php if ( is_active_sidebar( 'program-menu' ) ) : ?>
            <?php dynamic_sidebar( 'program-menu' ); ?>
            <?php endif; ?>
    </div>
    <div class="clear"></div>

	<div id="breadcrumbs" class="row">
    	<!-- BREADCRUMBS -->
            <div class="col-sm-12 fil-blanc">
                <?php if(function_exists('bcn_display')){ bcn_display();}?>
            </div>
            <!-- END - BREADCRUMBS -->
    </div>
</div>
    
    
    
<div class="programme-overview">
		
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>
    
   
<!--   Temoignages   -->

<div class="container-fluid title container-overview-part5">
	<span class="foundry_bold">Our students</span> <span class="foundry_light">speak</span>
</div>
       

<!--NEWS Box-->

<div class="container-fluid title container-news-events  container-overview-part6">
       
                <div class="col-sm-6">
                    <div class="box">
                        <h3>News</h3>

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
    
    <div class="row">
    	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 1786, 'page' ));?>" title="<?php _e('All news', 'ieseg2015');?>" class="btn btn-see-all col-sm-2 col-sm-offset-5"><?php _e("All news","ieseg2015") ?></a>	
    </div>

                     </div><!--END box-->
                </div><!--END col-sm-6-->
        


    <!--EVENTS Box-->

        <div class="col-sm-6">
           <div class="box">
             <h3>Events</h3>
                   
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
                            	<div class="lieu-event"><div class="picto-pin"></div><div class="lieu"><?php echo get_post_meta($id,'wpcf-city-town', true)?></div></div>
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
            <a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 1787, 'page' ));?>" title="<?php _e('All events', 'ieseg2015');?>" class="btn btn-see-all col-sm-2 col-sm-offset-5"><?php _e("All events","ieseg2015") ?></a>	
        </div>	
           </div><!--END box-->
        </div><!--END col-sm-6-->
    </div><!--END row-->
</div>

       

<?php get_footer(); ?>