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
<?php
//SIDEBAR page rencontrez nous
if ($sidebar_a_acharger['section']=="rencontrez-nous"){
	if (ICL_LANGUAGE_CODE=="fr"){
?>							
		
    <div class="bloc">
        <h4>Contact</h4>
        <em>Vous souhaitez rencontrer le service des admissions pour des informations sur :</em><br />
        <br />
        <strong>Une admission en 1ère année</strong><br /> 
        <em>En France métropolitaine :</em><br /><a href="mailto:c.etmans@ieseg.fr" target="_blank" class="lien_mail" style="margin-top:10px;">c.etmans@ieseg.fr</a><br /> 
        <a href="mailto:m.will@ieseg.fr" target="_blank" class="lien_mail" style="margin-top:10px;">m.will@ieseg.fr</a><br /><br />
        <strong>Une Admission parallèle</strong><br /><em>(3ème et 4ème année du programme Grande École)</em>
        <a href="mailto:m.brecville@ieseg.fr" target="_blank" class="lien_mail" style="margin-top:10px;">m.brecville@ieseg.fr</a>
        <br />
        <br />
        <strong>Admission en MSc </strong><br /> 
        <a href="mailto:admissions@ieseg.fr" target="_blank" class="lien_mail" style="margin-top:10px;">e.lagorsse@ieseg </a>
    </div>
    
    <div class="bloc">
		<div class="remove-margins">
			<iframe width="100%" height="222" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=3%20rue%20de%20la%20digue%20lille&key=AIzaSyAFz4SPvq87AbAH5da_ewmDcXEkmfHO43k" allowfullscreen></iframe>
		</div>
			<h4><?php _e("Lille Campus","ieseg2015") ?></h4>
			<span>3 rue de la Digue <br />
				59000 Lille
			</span><br />
            <div class="text-center">
                <a class="btn" title="Cliquer pour ouvrir la carte dans une nouvelle fenêtre" target="_blank" href="https://www.google.com/maps?ll=50.634972,3.0481&z=14&t=m&hl=fr&gl=US&mapclient=embed&q=3+Rue+de+la+Digue+59800+Lille+France">
                    Agrandir le plan
                </a>
            </div>
	</div>
    
    <div class="bloc">
        <div class="remove-margins">
            <iframe width="100%" height="222" frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?q=1%20parvis%20de%20la%20grande%20arche%20paris&key=AIzaSyAxUZS-Lj5u4m-uwMzqa98hw4-_bG1hOQE" allowfullscreen></iframe>
        </div>
        <h4><?php _e("Paris Campus","ieseg2015") ?></h4>
        <span>1 parvis de la Défense<br />
            Socle de la Grande Arche<br />
            92044 Paris la Défense
        </span>
        <div class="text-center">
            <a class="btn" title="Cliquer pour ouvrir la carte dans une nouvelle fenêtre" target="_blank" href="https://www.google.com/maps?ll=48.885543,2.209548&z=13&t=m&hl=fr-FR&gl=US&mapclient=embed&cid=44418648437117820">
                Agrandir le plan
            </a>
        </div>
	</div>
		
<?php
	}
} //fin if(is_page
?>
<?php
//SIDEBAR Admissions accueil, admissions Contact
if ($sidebar_a_acharger['section']=="adm-accueil" || $sidebar_a_acharger['section']=="adm-contact"){
	if (ICL_LANGUAGE_CODE=="fr"){
?>							
			<div class="bloc bloc_gris_medium bloc_contact">
				<a href="https://application.ieseg.fr/InfoRequest?lcid=1036" target="_blank" title="Demander la brochure" style="font-size:13px;font-weight:bold;">Demander la brochure ></a>
			</div>							
<?php
	}
	else{
?>					
			<div class="bloc bloc_gris_medium bloc_contact">
				<a href="https://application.ieseg.fr/InfoRequest?lcid=2057" target="_blank" title="Download brochure" style="font-size:13px;font-weight:bold;">Download brochure ></a>
			</div>
<?php
	}
?>

<?php
} //fin if(is_page
?>
<?php
//SIDEBAR Admissions 1ere année
if ($sidebar_a_acharger['section']=="adm-1ere-annee"){
	if (ICL_LANGUAGE_CODE=="fr"){
?>
		<div class="conteneur_bloc conteneur_bloc_gris_medium">
			<div class="bloc bloc_gris_medium bloc_contact">
				<a href="https://application.ieseg.fr/InfoRequest?lcid=1036" target="_blank" title="Demander la brochure" style="font-size:13px;font-weight:bold;">Demander la brochure ></a>
			</div>
		</div>
		
		<div class="conteneur_bloc conteneur_bloc_gris_fonce conteneur_brochure_acces">
			<div class="bloc bloc_gris_fonce bloc_contact">
				<a href="http://www.concours-acces.com/public/Plaquette_ACCES2014.pdf" target="_blank" title="Consulter la brochure Concours ACCÈS" style="font-size:13px;font-weight:bold;">Consulter la brochure Concours ACCÈS ></a>
			</div>
		</div>
		
		<a href="http://www.concours-acces.com" target="_blank" class="btn_concours_acces"><img src="<?php echo get_template_directory_uri(); ?>/images/btn_concours_acces.png" alt="Inscription Concours ACCES"/></a>
		
		<div class="conteneur_bloc conteneur_bloc_gris_fonce conteneur_qcm_acces">
			<div class="bloc bloc_gris_fonce bloc_qcm_acces">
			<a href="http://youtu.be/tNNUR4wRUiwf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/sidebar_qcm_acces.png" alt="Comment remplir le QCM ACCÈS ?"/></a>
				<a href="http://youtu.be/tNNUR4wRUiwf" target="_blank" title="Comment remplir le QCM ACCÈS ?" style="font-size:13px;font-weight:bold;">Comment remplir le QCM ACCÈS ? ></a>
			</div>
		</div>
		
		<a href="https://application.ieseg.fr" target="_blank" title="Candidature en ligne" class="btn_apply btn_apply_fr" style="display:none;"></a>
		
		<div class="conteneur_bloc conteneur_bloc_gris_fonce">
			<div class="bloc bloc_gris_fonce bloc_contact">
				<h4 style="margin-bottom:20px;">Contact</h4>
				<div style="" class="contact_acces">
				<a href="mailto:concours@ieseg.fr" target="_blank" title="Contacter le Service Admissions">Céline VERDRIÈRE, <em>Responsable du concours ACCÈS</em></a>
				<a href="mailto:concours@ieseg.fr" target="_blank" title="Contacter le Service Admissions" class="lien_mail"><span></span>concours@ieseg.fr</a>
				</div>
				
				
				<div style="display:none;" class="contact_will">
				<a href="mailto:lfe@ieseg.fr" target="_blank" title="Contacter le Service Admissions">Marie Will, <em>Coordinatrice des Admissions</em></a>
				<a href="mailto:lfe@ieseg.fr" target="_blank" title="Contacter le Service Admissions" class="lien_mail"><span></span>lfe@ieseg.fr</a>
				</div>
			</div>
		</div>
		
		
<?php
	}
	else{
?>
		<a href="https://application.ieseg.fr" target="_blank" title="Apply now" class="btn_apply"></a>
		
		<div class="conteneur_bloc conteneur_bloc_gris_medium">
			<div class="bloc bloc_gris_medium bloc_contact">
				<a href="https://application.ieseg.fr/InfoRequest?lcid=2057" target="_blank" title="Download brochure" style="font-size:13px;font-weight:bold;">Download brochure ></a>
			</div>
		</div>
		
		<div class="conteneur_bloc conteneur_bloc_gris_fonce">
			<div class="bloc bloc_gris_fonce bloc_contact">
				<h4 style="margin-bottom:20px;">Contact</h4>
				<div style="" class="contact_acces">
				<a href="mailto:concours@ieseg.fr" target="_blank" title="Contact Admissions Department">Céline VERDRIÈRE, <em>ACCÈS Exam Manager</em></a>
				<a href="mailto:concours@ieseg.fr" target="_blank" title="Contact Admissions Department" class="lien_mail"><span></span>concours@ieseg.fr</a>
				</div>
				<div style="display:none;" class="contact_will">
				<a href="mailto:lfe@ieseg.fr" target="_blank" title="Contact Admissions Department">Marie Will, <em>Admissions officer</em></a>
				<a href="mailto:lfe@ieseg.fr" target="_blank" title="Contact Admissions Department" class="lien_mail"><span></span>lfe@ieseg.fr</a>
				</div>
			</div>
		</div>
<?php
	}
?>

<?php
} //fin if(is_page
?>
<?php
//SIDEBAR Admissions 3eme année
if ($sidebar_a_acharger['section']=="adm-3eme-annee"){
	if (ICL_LANGUAGE_CODE=="fr"){
?>					
		<div class="conteneur_bloc conteneur_bloc_gris_fonce">
			<div class="bloc bloc_gris_fonce bloc_contact">
				<a href="<?php bloginfo('url'); ?>/programmes/programme-grande-ecole/"  title="Consulter le Programme Grande Ecole" >
					<img src="<?php echo get_template_directory_uri(); ?>/images/sidebar_pge.png" alt="Consulter le Programme Grande Ecole">
				</a>
				<a href="<?php bloginfo('url'); ?>/programmes/programme-grande-ecole/"  title="Consulter le Programme Grande Ecole" style="font-size:13px;font-weight:bold;">Consulter le Programme Grande Ecole ></a>
			</div>
		</div>
		
		<a href="https://application.ieseg.fr" target="_blank" title="Candidature en ligne" class="btn_apply btn_apply_fr"></a>
		
		<div class="conteneur_bloc conteneur_bloc_gris_medium">
			<div class="bloc bloc_gris_medium bloc_contact">
				<a href="https://application.ieseg.fr/InfoRequest?lcid=1036" target="_blank" title="Demander la brochure" style="font-size:13px;font-weight:bold;">Demander la brochure ></a>
			</div>
		</div>
		
		<div class="conteneur_bloc conteneur_bloc_gris_fonce">
			<div class="bloc bloc_gris_fonce bloc_contact">
				<h4 style="margin-bottom:20px;">Contact</h4>
				<div  class="">
				<a href="mailto:m.brecville@ieseg.fr" target="_blank" title="Contacter le Service Admissions">Matthieu BRECVILLE, Responsable Admissions Parallèles</a>
				<a href="mailto:m.brecville@ieseg.fr" target="_blank" title="Contacter le Service Admissions" class="lien_mail"><span></span>m.brecville@ieseg.fr</a>
				</div>
			</div>
		</div>
<?php
	}
	else{
?>
		<div class="conteneur_bloc conteneur_bloc_gris_fonce">
			<div class="bloc bloc_gris_fonce bloc_contact">
				<a href="<?php bloginfo('url'); ?>programs/grande-ecole-programme-5-years/bachelor/"  title="View Bachelor Program" >
					<img src="<?php echo get_template_directory_uri(); ?>/images/sidebar_pge.png" alt="View Bachelor Program">
				</a>
				<a href="<?php bloginfo('url'); ?>programs/grande-ecole-programme-5-years/bachelor/"  title="View Bachelor Program" style="font-size:13px;font-weight:bold;">View Bachelor Program</a>
			</div>
		</div>
		
		<a href="https://application.ieseg.fr" target="_blank" title="Apply now" class="btn_apply"></a>
		
		<div class="conteneur_bloc conteneur_bloc_gris_medium">
			<div class="bloc bloc_gris_medium bloc_contact">
				<a href="https://application.ieseg.fr/InfoRequest?lcid=2057" target="_blank" title="Download brochure" style="font-size:13px;font-weight:bold;">Download brochure ></a>
			</div>
		</div>
		
		<div class="conteneur_bloc conteneur_bloc_gris_fonce">
			<div class="bloc bloc_gris_fonce bloc_contact">
				<h4 style="margin-bottom:20px;">Contact</h4>
				<div  class="">
				<a href="mailto:m.brecville@ieseg.fr" target="_blank" title="Contact Admissions Department">Matthieu BRECVILLE, International Admissions Manager</a>
				<a href="mailto:m.brecville@ieseg.fr" target="_blank" title="Contact Admissions Department" class="lien_mail"><span></span>m.brecville@ieseg.fr</a>
				</div>
			</div>
		</div>
<?php
	}
?>

<?php
} //fin if(is_page
?>
<?php
//SIDEBAR Admissions Master
if ($sidebar_a_acharger['section']=="adm-master"){
	if (ICL_LANGUAGE_CODE=="fr"){
?>
		<div class="conteneur_bloc conteneur_bloc_gris_fonce">
			<div class="bloc bloc_gris_fonce bloc_contact">
				<a href="<?php bloginfo('url'); ?>/programmes/programme-grande-ecole/programme-master/"  title="Consulter le Programme Master" >
					<img src="<?php echo get_template_directory_uri(); ?>/images/sidebar_pge.png" alt="Consulter le Programme Master">
				</a>
				<a href="<?php bloginfo('url'); ?>/programmes/programme-grande-ecole/programme-master/"  title="Consulter le Programme Master" style="font-size:13px;font-weight:bold;">Consulter le Programme Master ></a>
			</div>
		</div>
		
		<a href="https://application.ieseg.fr" target="_blank" title="Candidature en ligne" class="btn_apply btn_apply_fr"></a>
		
		<div class="conteneur_bloc conteneur_bloc_gris_medium">
			<div class="bloc bloc_gris_medium bloc_contact">
				<a href="https://application.ieseg.fr/InfoRequest?lcid=1036" target="_blank" title="Demander la brochure" style="font-size:13px;font-weight:bold;">Demander la brochure ></a>
			</div>
		</div>
		
		<div class="conteneur_bloc conteneur_bloc_gris_fonce">
			<div class="bloc bloc_gris_fonce bloc_contact">
				<h4 style="margin-bottom:20px;">Contact</h4>
				<div  class="">
				<a href="mailto:m.brecville@ieseg.fr" target="_blank" title="Contacter le Service Admissions">Matthieu BRECVILLE, Responsable Admissions Parallèles</a>
				<a href="mailto:m.brecville@ieseg.fr" target="_blank" title="Contacter le Service Admissions" class="lien_mail"><span></span>m.brecville@ieseg.fr</a>
				</div>
			</div>
		</div>
<?php
	}
	else{
?>
		<div class="conteneur_bloc conteneur_bloc_gris_fonce">
			<div class="bloc bloc_gris_fonce bloc_contact">
				<a href="<?php bloginfo('url'); ?>programs/graduate-programmes/msc-in-management/"  title="View MSc in Management Program" >
					<img src="<?php echo get_template_directory_uri(); ?>/images/sidebar_pge.png" alt="View the MSc in Management Program">
				</a>
				<a href="<?php bloginfo('url'); ?>programs/graduate-programmes/msc-in-management/"  title="View MSc in Management Program" style="font-size:13px;font-weight:bold;">View MSc in Management Program ></a>
			</div>
		</div>
		
		<a href="https://application.ieseg.fr" target="_blank" title="Apply now" class="btn_apply"></a>
		
		<div class="conteneur_bloc conteneur_bloc_gris_medium">
			<div class="bloc bloc_gris_medium bloc_contact">
				<a href="https://application.ieseg.fr/InfoRequest?lcid=2057" target="_blank" title="Download brochure" style="font-size:13px;font-weight:bold;">Download brochure ></a>
			</div>
		</div>
		
		<div class="conteneur_bloc conteneur_bloc_gris_fonce">
			<div class="bloc bloc_gris_fonce bloc_contact">
				<h4 style="margin-bottom:20px;">Contact</h4>
				<div  class="">
				<a href="mailto:m.brecville@ieseg.fr" target="_blank" title="Contact Admissions Department">Matthieu BRECVILLE, International Admissions Manager</a>
				<a href="mailto:m.brecville@ieseg.fr" target="_blank" title="Contact Admissions Department" class="lien_mail"><span></span>m.brecville@ieseg.fr</a>
				</div>
			</div>
		</div>
<?php
	}
?>
<?php
} //fin if(is_page
?>
<?php
//SIDEBAR Admissions Master Apprentissage
if ($sidebar_a_acharger['section']=="adm-master-apprentissage"){
	if (ICL_LANGUAGE_CODE=="fr"){
?>							
		<div class="conteneur_bloc conteneur_bloc_gris_fonce">
			<div class="bloc bloc_gris_fonce bloc_contact">
				<a href="<?php bloginfo('url'); ?>/programmes/master-apprentissage/"  title="Consulter le Programme Master en Apprentissage" >
					<img src="<?php echo get_template_directory_uri(); ?>/images/sidebar_pge.png" alt="Consulter le Programme Master en Apprentissage">
				</a>
				<a href="<?php bloginfo('url'); ?>/programmes/master-apprentissage/"  title="Consulter le Programme Master en Apprentissage" style="font-size:13px;font-weight:bold;">Consulter le Programme Master en Apprentissage</a>
			</div>
		</div>
		
		<a href="https://application.ieseg.fr" target="_blank" title="Candidature en ligne" class="btn_apply btn_apply_fr"></a>
		
		<div class="conteneur_bloc conteneur_bloc_gris_medium">
			<div class="bloc bloc_gris_medium bloc_contact">
				<a href="https://application.ieseg.fr/InfoRequest?lcid=1036" target="_blank" title="Demander la brochure" style="font-size:13px;font-weight:bold;">Demander la brochure ></a>
			</div>
		</div>
		
		<div class="conteneur_bloc conteneur_bloc_gris_fonce">
			<div class="bloc bloc_gris_fonce bloc_contact">
				<h4 style="margin-bottom:20px;">Contact</h4>
				<div  class="">
				<a href="mailto:m.brecville@ieseg.fr" target="_blank" title="Contacter le Service Admissions">Matthieu BRECVILLE, Responsable Admissions Parallèles</a>
				<a href="mailto:m.brecville@ieseg.fr" target="_blank" title="Contacter le Service Admissions" class="lien_mail"><span></span>m.brecville@ieseg.fr</a>
				</div>
			</div>
		</div>
<?php
	}
	else{
?>
		<a href="https://application.ieseg.fr" target="_blank" title="Apply now" class="btn_apply"></a>
<?php
	}
?>

<?php
} //fin if(is_page
?>
</div>
</div><!-- #content-sidebar -->