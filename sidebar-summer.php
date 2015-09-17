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
	<?php
	//Fashion Summer Business Program 
	if ($sidebar_a_acharger['section']=="fashion_summer"){ 
	?>
			<div class="bloc">
				<h4>Foreword</h4>
				<p>Grab the chance to learn more about yourself, expand your perspective, your network and add an attention getting asset to your CV.</p>
				<p>This two-week credit-awarding summer program taught in English will provide you with the opportunity to study something new; learn more about the fashion industry; 
				and meet people from across the globe.</p> 
				<p>You will study with world-class academics; take part in exciting cultural activities; and make friends and memories that can last forever</p>
				<div class="edito_signature">
					<img src="<?php echo get_template_directory_uri(); ?>/images/spring-summer/marcheva.png" width="67" height="80" alt="Dr. Marta Marcheva, Head of International Summer Academy"/>
					<div>Dr. Marta Marcheva,</div>
					Head of International Summer Academy<br />
					
				</div>
			</div>
	<?php
	} //fin Fashion Summer Business Program
	?>
	<?php
    //French Culture
    if ($sidebar_a_acharger['section']=="french_culture"){ 
    ?>
            <div class="bloc bloc_gris_medium bloc_edito">
                <h4>Foreword</h4>
                <p>Studying for a month in Paris will be an unforgettable cultural and educational experience. We will look forward to you joining us on this year's Summer French Culture Spring Session and to making your time in France as rewarding and as enjoyable as possible.</p>
                <div class="edito_signature">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/frenchspring/vazquez.png" width="67" height="82" alt="Marta Vazquez, Associate Director - International Relations"/>
                    <div>Marta Vazquez,</div>
                    Associate Director - International Relations
                </div>
            </div>
        
        <div class="bloc bloc_gris_fonce bloc_contact">
            <h4>Contact</h4>
            Mrs. Marta VAZQUEZ</a><br /><br />
            <div class="text-center">
            	<a href="mailto:m.vazquez@ieseg.fr" target="_blank" title="Contact Mrs. Marta VAZQUEZ" class="btn">m.vazquez@ieseg.fr</a>
            </div>
        </div>
    <?php
    } //fin French Culture
    ?>
</div><!-- #content-sidebar -->