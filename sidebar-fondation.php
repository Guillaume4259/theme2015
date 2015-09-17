<?php
/**
 * 
 *
 * @package WordPress
 * @subpackage IESEG2
 * @since IESEG2 1.0
 */

global $sidebar_a_acharger;
?>
<div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
	<div class="row">
<div class="col-sm-4 col-md-12">
    <div class="bloc">
        <h4>Faire un don</h4>
        3 moyens sont à votre disposition pour effectuer un don <br /><br />
        <div class="container-fluid">
            <div class="row">
                    <a href="https://www.apayer.fr/fondationieseg" class="btn col-sm-6 col-sm-offset-3" target="_blank">Don en ligne </a>
            </div>
            <br />
            <div class="row">
                    <a href="#don_cheque" title="Par chèque" class="btn col-sm-6 col-sm-offset-3">Don par chèque</a>
            </div><br />
            <div class="row">
                    <a href="#don_virement" title="Par virement" class="btn col-sm-6 col-sm-offset-3">Don par virement</a>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-4 col-md-12">
    <div class="bloc">
    	<h4>Plaquette</h4>
        <div class="container-fluid">
            <div class="row">
                    <a href="<?php bloginfo('url');?>/pdf/fondation_ieseg.pdf" target="_blank" title="Télécharger la plaquette" class="btn col-sm-6 col-sm-offset-3">Télécharger la plaquette</a>
            </div>
        </div>  
        
    </div>
</div>
<div class="col-sm-4 col-md-12">
    <div class="bloc">
        <h4>Contact</h4>
        
        <img src="<?php echo get_template_directory_uri().'/images/fondation/gderendinger.jpg' ;?>" class="alignleft" alt="Guillaume de RENDINGER"><strong>Guillaume de RENDINGER</strong>, <br />
        Délégué Général de la Fondation IÉSEG
        <br /><br />
        <div class="text-center">
      		<a href="mailto:fondation@ieseg.fr" target="_blank" title="Contacter Guillaume de RENDINGER" class="btn">fondation@ieseg.fr</a>
      	</div>
     </div>
</div>
</div>
</div><!-- #content-sidebar -->
