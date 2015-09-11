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
//Sidebar pages Exec
if ($sidebar_a_acharger['section']=="global-fr"){ 
?>	
<div class="bloc bloc-agenda">
	<h4><?php _e('Agenda', 'ieseg2015'); ?></h4>
<?php
$args = 
		array(
			'posts_per_page' => 4,
			'order'=> 'DESC',
			'orderby' => 'meta_value_num',
			'post_type' => 'events',
			'meta_key'=> 'wpcf-start-date',
			'tax_query' => 
                            array(
                                array(
                                    'taxonomy' => 'events-category',
                                    'field'    => 'term_id',
                                    'terms'    => apply_filters('wpml_object_id', 137, 'events-category'),
                                ),
                            )
		);
 $postslist = get_posts( $args );
 if (!empty($postslist)){?>
 
 <?php
	foreach ( $postslist as $post ) :
		setup_postdata( $post ); 
		$id=$post->ID;
	  ?>
		<div class="container-event-agenda">
        	<time class="" datetime="<?php echo date('Y',get_post_meta($id,'wpcf-start-date',true)).'-'.date('m',get_post_meta($id,'wpcf-start-date',true)).'-'.date('d',get_post_meta($id,'wpcf-start-date',true)); ?>"> 
                 <span class="glyphicon glyphicon-calendar"></span> 
					<?php echo strftime('%d %B %Y',get_post_meta($id,'wpcf-start-date',true)).' - '.get_post_meta($id,'wpcf-city-town', true) ;?>
             
			</time>
        	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>	
		</div>
	<?php
	endforeach;
	?>

     <?php
	  $id_rub_dre = intval(apply_filters('wpml_object_id', 55, 'events-category')); //obligé de faire un intval pour convertir l'id en int
	 ?>
     <a href="<?php echo get_term_link($id_rub_dre,'events-category')?>" title="<?php _e('All events', 'ieseg2015')?>" class="btn"><?php _e('All events', 'ieseg2015')?></a>
 <?php
 }
 else{
	 _e('No event in this category', 'ieseg2015');
 }
 ?>	
</div>
	<div class="conteneur_bloc conteneur_bloc_gris_medium">
		<div class="bloc bloc_gris_medium bloc_contact">
			<h4 style="margin-bottom:20px;">Documents</h4>
			<a href="http://issuu.com/ieseg/docs/i__seg_executive_education?e=3614770/9860701" target="_blank" title="Téléchargez le catalogue Formation Continue" class="btn">Téléchargez le catalogue Formation Continue ></a>
			<br /><br />
			<a href="http://issuu.com/ieseg/docs/ieseg-emba" target="_blank" title="Téléchargez la brochure Executive MBA" style="font-size:13px;font-weight:bold;">Téléchargez la brochure Executive MBA ></a>
			<br /><br />
			<a href="http://issuu.com/ieseg/docs/executive_education_-_business-trip" target="_blank" title="Téléchargez la plaquette Learning Trip & Training Programs" class="btn">Téléchargez la plaquette "Learning Trip & Training Programs" ></a>
			<br /><br />
		</div>
	</div>

	<div class="conteneur_bloc conteneur_bloc_gris_fonce">
		<div class="bloc bloc_gris_fonce bloc_contact">
			<h4 style="margin-bottom:20px;">Contact</h4>
			Lille : &nbsp;&nbsp;03.20.29.62.27<br />
			Paris : 01.55.91.98.02<br /><br />
			<div  class="">
				<a href="mailto:executive@ieseg.fr" target="_blank" title="Contacter le service Formation Continue" class="lien_mail btn"><span></span>executive@ieseg.fr</a>
			</div>
		</div>
	</div>
<?php
} //fin pages Exec
?>
                    
                    
<?php
//Sidebar pages Exec GB
if ($sidebar_a_acharger['section']=="global-gb"){  
?>	
	<div class="conteneur_bloc conteneur_bloc_jaune">
		<div class="bloc bloc_jaune bloc_contact">
			<h4 style="margin-bottom:20px;">Executive MBA Agenda</h4>
			<a href="http://www.ieseg.fr/programmes/formation-continue/executive-mba/agenda/" class="btn">Conferences and workshops schedule ></a>
		</div>
	</div>
	<div class="conteneur_bloc conteneur_bloc_gris_medium">
		<div class="bloc bloc_gris_medium bloc_contact">
			<h4 style="margin-bottom:20px;">Brochures</h4>
			<a href="http://issuu.com/ieseg/docs/i__seg_executive_education?e=3614770/9860701" target="_blank" title="Executive Education catalog" class="btn">Executive Education catalog ></a>
			<br /><br />
			<a href="http://issuu.com/ieseg/docs/ieseg-emba" target="_blank" title="Executive MBA Program" class="btn">Executive MBA Program</a>
			<br /><br />
			<a href="http://issuu.com/ieseg/docs/executive_education_-_business-trip" target="_blank" title="Learning trip" style="font-size:13px;font-weight:bold;">Learning trip ></a>
			<br /><br />
		</div>
	</div>

	<div class="conteneur_bloc conteneur_bloc_gris_fonce">
		<div class="bloc bloc_gris_fonce bloc_contact">
			<h4 style="margin-bottom:20px;">Contact</h4>
			Lille : &nbsp;&nbsp;03.20.29.62.27<br />
			Paris : 01.55.91.98.02<br /><br />
			<div  class="">
				<a href="mailto:executive@ieseg.fr" target="_blank" title="Contacter le service Formation Continue" class="lien_mail"><span></span>executive@ieseg.fr</a>
			</div>
		</div>
	</div>
<?php
} //fin pages Exec GB
?>
                    <?php
					//SIDEBAR EMBA
					if ($sidebar_a_acharger['section']=="emba"){  
					?>									
					<div class="conteneur_bloc conteneur_bloc_jaune">
						<div class="bloc bloc_jaune bloc_contact">
							<h4 style="margin-bottom:20px;">Agenda Executive MBA</h4>
							<p>
							<i>Conférence</i><br /><br />
							<strong>24 mars 2015 - Lille</strong></p>
							Créer l’engagement collectif pour faire réussir l’entreprise<br /><br />
							<a href="http://www.ieseg.fr/programmes/formation-continue/executive-mba/conference-creer-engagement/" class="btn">S'inscrire</a>
							<a href="http://www.ieseg.fr/programmes/formation-continue/executive-mba/agenda/" class="btn">Voir l'agenda complet ></a>
						</div>
					</div>
					

					<div class="conteneur_bloc conteneur_bloc_gris_medium">
						<div class="bloc bloc_gris_medium bloc_contact">
							<h4 style="margin-bottom:20px;">Documents</h4>
							<a href="http://issuu.com/ieseg/docs/ieseg-emba" target="_blank" title="Demander la brochure" style="font-size:13px;font-weight:bold;display:block;margin-bottom:15px;">Voir la brochure ></a>
							<a href="http://www.ieseg.fr/wp-content/uploads/emba_faculty_book.pdf" target="_blank" title="Voir le Faculty Book" class="btn">Voir le Faculty Book ></a>
                            <a href="http://www.ieseg.fr/pdf/emba_presse.pdf" target="_blank" title="Téléchargez la revue de presse" class="btn">Téléchargez la revue de presse ></a>
                            <a href="http://www.ieseg.fr/pdf/emba_calendrier.pdf" target="_blank" title="Téléchargez le calendrier du programme" class="btn">Téléchargez le calendrier du programme ></a>
						</div>
					</div>	
					<div class="conteneur_bloc conteneur_bloc_gris_fonce">
						<div class="bloc bloc_gris_fonce bloc_contact">
                        <h4 style="margin-bottom:20px;">Vidéos</h4>
                            <a href="https://www.youtube.com/watch?v=LhhAoppD_-g" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/emba/nadisic.jpg" alt="3 questions au Directeur et Responsable pédagogique du Programme "/></a>
							<a href="https://www.youtube.com/watch?v=LhhAoppD_-g" target="_blank" title="3 questions au Directeur et Responsable pédagogique du Programme " style="font-size:13px;font-weight:bold;">3 questions au Directeur et Responsable pédagogique du Programme ></a>
                            <br /><br />
                            <a href="https://www.youtube.com/watch?v=gEHlvccvbrE" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/emba/conf_leader.jpg" alt="Conférence Leadership et changement "/></a>
							<a href="https://www.youtube.com/watch?v=gEHlvccvbrE" target="_blank" title="Conférence Leadership et changement " style="font-size:13px;font-weight:bold;">Conférence Leadership et changement  ></a>
                            <br /><br />
                            <a href="https://www.youtube.com/watch?v=ZKzSs_vOdYo" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/emba/conf_ted.jpg" alt="Dynamiser son leadership avec TED"/></a>
							<a href="https://www.youtube.com/watch?v=ZKzSs_vOdYo" target="_blank" title="Dynamiser son leadership avec TED" style="font-size:13px;font-weight:bold;">Dynamiser son leadership avec TED ></a>
						</div>
					</div>		
					<div class="conteneur_bloc conteneur_bloc_gris_fonce">
						<div class="bloc bloc_gris_fonce bloc_contact">
							<h4 style="margin-bottom:20px;">Contact</h4>
							<div  class="">
							<a href="mailto:e.denis@ieseg.fr" target="_blank" title="Contacter Emmanuelle DENIS" class="btn">Emmanuelle DENIS <br />01 55 91 98 02</a>
							<a href="mailto:e.denis@ieseg.fr" target="_blank" title="Contacter Emmanuelle DENIS" class="btn lien_mail"><span></span>e.denis@ieseg.fr</a>
							</div>
						</div>
					</div>
					<?php
					} //fin if(is_page
					?>
                    <?php
					//SIDEBAR EMBA GB
					if ($sidebar_a_acharger['section']=="emba-gb"){  
					?>									
					<div class="conteneur_bloc conteneur_bloc_jaune">
						<div class="bloc bloc_jaune bloc_contact">
							<h4 style="margin-bottom:20px;">Executive MBA Agenda</h4>
							<a href="http://www.ieseg.fr/programmes/formation-continue/executive-mba/agenda/" style="text-align:right;display:block;font-weight:bold;">Conferences and workshops schedule ></a>
						</div>
					</div>

					<div class="conteneur_bloc conteneur_bloc_gris_medium">
						<div class="bloc bloc_gris_medium bloc_contact">
							<h4 style="margin-bottom:20px;">Brochures</h4>
							<a href="http://issuu.com/ieseg/docs/ieseg-emba" target="_blank" title="Executive MBA Program" style="font-size:13px;font-weight:bold;display:block;margin-bottom:15px;">Executive MBA Program</a>
							<a href="http://www.ieseg.fr/wp-content/uploads/emba_faculty_book.pdf" target="_blank" title="Faculty and courses descriptions" style="font-size:13px;font-weight:bold;display:block;margin-bottom:15px;">Faculty and courses descriptions ></a>
                            <a href="http://www.ieseg.fr/pdf/emba_presse.pdf" target="_blank" title="Press review" style="font-size:13px;font-weight:bold;display:block;margin-bottom:15px;">Press review ></a>
                            <a href="http://www.ieseg.fr/pdf/emba_calendrier.pdf" target="_blank" title="Planning" style="font-size:13px;display:block;font-weight:bold;">Planning ></a>
						</div>
					</div>	
					<div class="conteneur_bloc conteneur_bloc_gris_fonce">
						<div class="bloc bloc_gris_fonce bloc_contact">
                        <h4 style="margin-bottom:20px;">Videos</h4>
                            <a href="https://www.youtube.com/watch?v=LhhAoppD_-g" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/emba/nadisic.jpg" alt="3 questions au Directeur et Responsable pédagogique du Programme "/></a>
							<a href="https://www.youtube.com/watch?v=LhhAoppD_-g" target="_blank" title="Executive MBA Director interview" style="font-size:13px;font-weight:bold;">Executive MBA Director interview ></a>
                            <br /><br />
                            <a href="https://www.youtube.com/watch?v=gEHlvccvbrE" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/emba/conf_leader.jpg" alt="Conférence Leadership et changement "/></a>
							<a href="https://www.youtube.com/watch?v=gEHlvccvbrE" target="_blank" title="Leadership and Change Management conference" style="font-size:13px;font-weight:bold;">Leadership and Change Management conference</a>
                            
                            <?php
                            /*
							<br /><br />
							<a href="https://www.youtube.com/watch?v=ZKzSs_vOdYo" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/emba/conf_ted.jpg" alt="Dynamiser son leadership avec TED"/></a>
							<a href="https://www.youtube.com/watch?v=ZKzSs_vOdYo" target="_blank" title="Dynamiser son leadership avec TED" style="font-size:13px;font-weight:bold;">Dynamiser son leadership avec TED ></a>
							*/?>
						</div>
					</div>		
					<div class="conteneur_bloc conteneur_bloc_gris_fonce">
						<div class="bloc bloc_gris_fonce bloc_contact">
							<h4 style="margin-bottom:20px;">Contact</h4>
							<div  class="">
							<a href="mailto:e.denis@ieseg.fr" target="_blank" title="Contacter Emmanuelle DENIS">Emmanuelle DENIS <br />01 55 91 98 02</a>
							<a href="mailto:e.denis@ieseg.fr" target="_blank" title="Contacter Emmanuelle DENIS" class="lien_mail"><span></span>e.denis@ieseg.fr</a>
							</div>
						</div>
					</div>
					<?php
					} //fin EMBA GB
					?>
					<?php
					//PROGRAMME DIRECTION FINANCIERE
					if ($sidebar_a_acharger['section']=="programme-direction-financiere" || $sidebar_a_acharger['section']=="programme-direction-financiere-gb"){  
					?>								
					<div class="conteneur_bloc conteneur_bloc_gris_fonce">
						<div class="bloc bloc_gris_fonce bloc_contact">
							<h4 style="margin-bottom:20px;">Contact</h4>
							<div  class="">
							<a href="mailto:e.denis@ieseg.fr" target="_blank" title="Contacter Emmanuelle DENIS">Emmanuelle DENIS <br />01 55 91 98 02</a>
							<a href="mailto:e.denis@ieseg.fr" target="_blank" title="Contacter Emmanuelle DENIS" class="lien_mail"><span></span>e.denis@ieseg.fr</a>
							</div>
						</div>
					</div>
					<?php
					} //fin PROGRAMME DIRECTION FINANCIERE
					?>
                    
</div><!-- #content-sidebar -->
