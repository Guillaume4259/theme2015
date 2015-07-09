<?php
/**
 * 
 *
 * @package WordPress
 * @subpackage IESEG2
 * @since IESEG2 1.0
 */
/*
if ( ! is_active_sidebar( 'sidebar-left-menu' ) ) {
	return;
}
 wp_nav_menu( array(
                  'theme_location'  => 'Left Menu',
                  'menu'            => 'main-menu', 
                  //'theme_location'  => 'Left Menu',
                  //'menu'            => 'primary-navigation', 
                  'container'       => 'nav', 
                  'container_class' => '', 
                  'container_id'    => 'subNav',
                  'menu_class'      => '', 
                  'menu_id'         => '',
                  'echo'            => true,
                  'fallback_cb'     => 'wp_page_menu',
                  'before'          => '',
                  'after'           => '',
                  'link_before'     => '',
                  'link_after'      => '',
                  'items_wrap'      => '<ul>%3$s</ul>',
                  'depth'           => 5,
                  'walker'          => new sub_nav_walker
               ) );
*/
dynamic_sidebar( 'sidebar-left-menu' );        	      
			 
                                      
            
?>
