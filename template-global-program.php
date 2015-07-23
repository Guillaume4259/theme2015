<?php
/*
Template Name: Home Program
*/
?>

<?php get_header(); ?>
<div class="container-fluid" id="container-img-une">
 <?php
            if (is_page('17340') || custom_is_child(17340)){
        ?>

 <div class="keyfacts col-sm-3 hidden-xs hidden-sm">
        <table class="table">
          <tr>
            <th colspan="2" class="keytitle foundry_bold">Key Facts</th>
          </tr>
          <tr class="foundry_light">
            <th>Duration</th>
            <td>3 semesters</td>
          </tr>
          <tr class="foundry_light">
            <th>Language</th>
            <td>English</td>
          </tr>
          <tr class="foundry_light">
            <th>Credits</th>
            <td>90 ECTS</td>
          </tr>
          <tr class="foundry_light">
            <th>Location</th>
            <td>Lille</td>
          </tr>
          <tr class="foundry_light">
            <th>Next intake</th>
            <td>September 2015</td>
          </tr>
        </table>
 </div>



        <?php } ?>


    <div class="container-titre">
      <div class="titre-deco"></div>
      <?php the_title( '<h1 class="entry-title foundry_demi">', '</h1>' ); ?>
        <?php
      if (is_page('17340') || custom_is_child(17340)){
    ?>
    
    <div class="punchline-program">
    Become a digital expert
    </div>

    <?php } ?>
    
    </div>

    </div>




<div class="container-fluid fond-menu-program hidden-xs" role="main">

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

<div class="container-fluid container-1600" role="main">

  <div id="breadcrumbs" class="row">
      <!-- BREADCRUMBS -->
            <div class="col-sm-12 fil-blanc">
           
                <?php if(function_exists('bcn_display')){ bcn_display();}?>
       
            </div>
            <!-- END - BREADCRUMBS -->
        </div>
    </div>


</div>
    


    
    
<div class="programme-overview">


    <div class="show-on-small hidden-md hidden-lg">
         <div class="keyfacts col-sm-3">
                <table class="table">
                  <tr>
                    <th colspan="2" class="keytitle foundry_bold">Key Facts</th>
                  </tr>
                  <tr class="foundry_light">
                    <th>Duration</th>
                    <td>3 semesters</td>
                  </tr>
                  <tr class="foundry_light">
                    <th>Language</th>
                    <td>English</td>
                  </tr>
                  <tr class="foundry_light">
                    <th>Credits</th>
                    <td>90 ECTS</td>
                  </tr>
                  <tr class="foundry_light">
                    <th>Location</th>
                    <td>Lille</td>
                  </tr>
                  <tr class="foundry_light">
                    <th>Next intake</th>
                    <td>September 2015</td>
                  </tr>
                </table>
         </div>
    </div>

    
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>



<?php get_footer(); ?>