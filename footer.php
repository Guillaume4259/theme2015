<footer>
	<div class="container-fluid barre-deco" >
        <div class="row">
            <div class="deco bg-orange1"></div>
            <div class="deco bg-orange2"></div>
            <div class="deco bg-jaune"></div>
            <div class="deco bg-bleu"></div>
            <div class="deco bg-bleu-ciel"></div>
            <div class="deco bg-rouge"></div>
            <div class="deco bg-corail"></div>
            <div class="deco bg-rose"></div>
            <div class="deco bg-violet"></div>
            <div class="deco bg-vert-canard"></div>
        </div>
    </div>
    <div id="footer-utilities" >
        <div class="container-fluid container-1600 footer-utilities" >
            <div class="row">
                <div class="col-xs-6 col-sm-3 text-center">
                	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 2446, 'page' ));?>" title="<?php _e('Contact', 'ieseg2015');?>" class="footer-contact">
					<span></span>
					<?php _e('Contact', 'ieseg2015');?>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3 text-center">
                	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 711, 'page' ));?>" title="<?php _e('Admissions', 'ieseg2015');?>" class="footer-admissions">
					<span></span>
					<?php _e('Admissions', 'ieseg2015');?>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3 text-center">
                	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 1782, 'page' ));?>" title="<?php _e('Meet with us', 'ieseg2015');?>" class="footer-meet-us">
                    <span></span>
					<?php _e('Meet with us', 'ieseg2015');?>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3 text-center">
                	<a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 14423, 'page' ));?>" title="<?php _e('Brochures', 'ieseg2015');?>" class="footer-brochures">
						<span></span>
						<?php _e('Brochures', 'ieseg2015');?>     
                    </a>
        		 </div>
            </div>
        </div>
    </div>
    
    <div id="footer-infos" class="container-fluid container-1600" >
            <div class="row">
                <div class="col-md-9">
               		<div class="row">
                    	<div class="col-xs-12 col-sm-9">
                             <!-- FOOTER NAVIGATION -->
                            <?php wp_nav_menu( array(
                                  'theme_location'  => 'footer2015',
                                  'menu'            => 'Footer 2015', 
                                  'container'       => 'nav', 
                                  'container_class' => 'footer-menu', 
                                  'container_id'    => '',
                                  'menu_class'      => '', 
                                  'menu_id'         => '',
                                  'echo'            => true,
                                  'fallback_cb'     => 'wp_page_menu',
                                  'before'          => '',
                                  'after'           => '',
                                  'link_before'     => '',
                                  'link_after'      => '',
                                  'items_wrap'      => '<ul>%3$s</ul>',
                                  'depth'           => 2
                               ) );
                            ?>              
                            <!-- END FOOTER NAVIGATION -->
                        </div>
                        <div class="col-xs-12 col-sm-3">
                        	<div class="footer-title"><?php _e('Social Networks', 'ieseg2015');?></div>
                            <a href="https://www.facebook.com/pages/IESEG-School-of-Management/358733860458" class="lien-rs lien-fb" target="_blank" title="Facebook"></a>
                            <a href="https://twitter.com/IESEG" class="lien-rs lien-twitter" target="_blank" title="Twitter"></a>
                            <a href="https://www.youtube.com/user/iesegchannel" class="lien-rs lien-youtube" target="_blank" title="Youtube"></a>
                            <a href="https://www.linkedin.com/edu/school?id=12453" class="lien-rs lien-linkedin" target="_blank" title="Linkedin"></a>
                            <?php 
							/* Temporarily use custom_search_form_2 to output the search form. */
							add_filter( 'get_search_form', 'custom_search_footer' );
							get_search_form();
							remove_filter( 'get_search_form', 'custom_search_footer' );
							//get_search_form(); 
							
							?>
                        </div>
                	</div>
                    <div class="row footer-adress">
                    	<div class="col-sm-3">
                        	<a href="<?php home_url(); ?>" title="Ieseg School Of Management" class="footer-logo">
                            
                            </a>
                        </div>
                        <div class="col-sm-3">
                        	<div class="conteneur-adresse"><div class="picto-adresse picto-adresse-lille"></div>3 rue de la Digue - 59000 Lille</div>
                            <div class="conteneur-adresse"><div class="picto-adresse picto-adresse-paris"></div>1 parvis de La Défense - 92044 Paris La Défense</div>
                        </div>
                        <div class="col-sm-3">
                        	<div class="conteneur-adresse"><div class="picto-adresse picto-adresse-tel"></div><?php _e('(+33)3.20.54.58.92', 'ieseg2015');?></div>
                            <div class="conteneur-adresse"><div class="picto-adresse picto-adresse-map"></div><a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 2446, 'page' ));?>" title="<?php _e('Map & Directions', 'ieseg2015');?>" class="footer-brochures"><?php _e('Map & Directions', 'ieseg2015');?></a></div>
                        </div>
                	</div>
                </div>
                <div class="col-md-3">
                	<a class="twitter-timeline" href="https://twitter.com/IESEG" data-widget-id="616624456727928834">Tweets de @IESEG</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                </div>
            </div>
        </div>   
</footer>

<?php
if(function_exists('show_popup_fonction')){
	show_popup_fonction();
}
?>
<?php wp_footer(); ?>
</div><!-- fin de #container-global-->
</body>
</html>