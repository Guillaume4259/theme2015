<?php
/**
 * 
 *
 * @package WordPress
 * @subpackage IESEG2
 * @since IESEG2 1.0
 */
/*
if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}*/
global $sidebar_a_acharger;
?>
<div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
	<div class="row">
        <div class="col-sm-4 col-md-12">		
            <div class="bloc ">
                <h4>Schéma taxe</h4>
                <a href="<?php home_url();?>/pdf/schema_taxe_2015.pdf" target="_blank" title="Schéma taxe 2015" class="btn">Voir le schéma taxe 2015</a>
            </div>
        </div> 
        <div class="col-sm-4 col-md-12">     
            <div class="bloc">
                <div class="remove-margins">
                <img src="<?php echo get_template_directory_uri().'/images/fondation/sidebar-fondation.jpg' ;?>" class="img-responsive" width="100%" alt="Fondation IÉSEG">
                </div>
                <h4>La Fondation IÉSEG</h4>
                Vous pouvez également soutenir l'École grâce à la fondation IÉSEG.<br /><br />
                <div class="text-center">
                    <a href="<?php home_url();?>/a-propos-de-lieseg/fondation-ieseg/" title="En savoir +" class="btn">En savoir +</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- #content-sidebar -->
