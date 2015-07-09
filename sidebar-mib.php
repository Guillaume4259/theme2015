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
					
	//SIDEBAR MIB
	if ($sidebar_a_acharger['section']!='mib-program'){
	?>
		<div class="conteneur_bloc conteneur_bloc_gris_medium">
			<div class="bloc bloc_gris_medium bloc_edito">
				<h4>Foreword</h4>
				
				<p>The MIB is an exceptional opportunity for students from different educational backgrounds and professional experiences to learn about management and the
				<strong>challenges of international business</strong>.</p>
				
				<p>Spending an academic year with fellow international students and meeting well-connected instructors from different regions provides the foundation for building a network of international contacts. In combination with the quality curriculum <strong>the MIB becomes an incredibly rich life experience</strong> at both a professional and personal level.</p>
				
				<div class="edito_signature">
					<img src="<?php echo get_template_directory_uri(); ?>/images/mib/bart-claus.png" width="66" height="80" alt="Dr. Bart Claus, Academic Director, Marketing & 	
					International Negotiation Department"/>
					<div>Dr. Bart Claus,</div>
					Academic Director,<br />
					Marketing & 	
					International Negotiation Department
				</div>
			</div>
		</div>
	<?php
	} //fin if
	if ($sidebar_a_acharger['section']=='mib-program'){
	?>
		<div class="conteneur_bloc conteneur_bloc_gris_medium">
			<div class="bloc bloc_gris_medium bloc_edito">
				<h4>Ask a student</h4>
				<p><strong>What is Globalization?</strong></p>
				<p>An Indian national, studied in France, will work for an American registered company, which is based in China and started by an Italian…</p>
				<p>This is called Globalization.</p>
				<div class="edito_signature">
					<div>Sayak Choudhury</div>
					Former MIB scholarship recipient
				</div>
			</div>
		</div>
	<?php
	}
	?>	
    <a href="https://application.ieseg.fr/" target="_blank" title="Apply now" class="btn_apply"></a>
    
    <div class="conteneur_bloc conteneur_bloc_gris_fonce">
        <div class="bloc bloc_gris_fonce bloc_contact">
            <h4 style="margin-bottom:20px;">Contact</h4>
            <a href="mailto:mib@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ">Mrs. Noemie GONZALEZ</a>
            <a href="mailto:mib@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ" class="lien_mail"><span></span>mib@ieseg.fr</a>
        </div>
    </div>
</div><!-- #content-sidebar -->