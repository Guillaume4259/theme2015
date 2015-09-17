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
//SIDEBAR PGE 3eme année
if(is_page(array($icl_object_id_page_pge_3eme_annee, $page_pge_3eme_annee->ID))){
?>
<div class="conteneur_bloc conteneur_bloc_gris_medium">
		<div class="bloc">
			<h4>Live - Learn</h4>
<p>Pour appréhender au mieux les défis du monde professionnel, l'IÉSEG développe
un programme et une pédagogie adaptés aux challenges de l'entreprise. Dès la
3ème année, l'intégralité des cours est dispensée en anglais et la flexibilité du
Master Grande École permet aux étudiants de construire leur programme « à
la carte ».</p>
<p>Que ce soit sur le campus de Lille ou Paris, rejoindre l'IÉSEG, c'est se donner
les clés d'un avenir réussi dans un environnement international en constante
évolution.</p>
			<div class="edito_signature">
				<img src="<?php echo get_template_directory_uri(); ?>/images/grande_ecole/bied.png" width="67" height="80" alt="Pascal BIED, Directeur des Programmes Bachelor"/>
				<div>Pascal BIED,</div>
				Directeur des Programmes Bachelor</div>
		</div>
</div>

<a href="https://application.ieseg.fr" target="_blank" title="Candidature en ligne" class="btn_apply btn_apply_fr"></a>
<?php
} //fin if(is_page
?>
</div><!-- #content-sidebar -->