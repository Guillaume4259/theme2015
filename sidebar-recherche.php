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
					//12th Corporate FinanceDay
					if ($sidebar_a_acharger['section']=="12th_corporate"){ 
					?>
					<div class="conteneur_bloc conteneur_bloc_gris_medium">
<div class="bloc bloc_gris_medium ">
								<h4>Location</h4>
<p><strong>IESEG School of Management</strong></p>
<p><em>Socle de la Grande-Arche</em></p>
<p><em>1 parvis de la Défense</em></p>
<p><em>92044 Paris-La Défense, France</em></p>
								<a href="<?php bloginfo('url'); ?>/faculty-and-research/ieseg-research/corporate-finance-day/venue/"  title="Conference Venue" style="font-size:13px;font-weight:bold;">Conference Venue ></a>
					</div>
					</div>
					<div class="conteneur_bloc conteneur_bloc_jaune">
						<div class="bloc bloc_jaune bloc_contact">
							<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/corporate-finance-day/registration/')->ID);?>" style="font-size:15px;display:block;font-weight:bold;text-align:right;">Registration ></a>
						</div>
					</div>
					<div class="conteneur_bloc conteneur_bloc_gris_fonce">
							<div class="bloc bloc_gris_fonce ">
								<h4>Conference Fee</h4>
<p><strong>Participation fee is 75 euros. </strong></p>
<p><em>This covers lunch, coffee breaks and print-outs. </em></p>
<p><em>Participants are responsible for their own travel and accommodation budget</em>.</p>
								
							</div>
					</div>
					
					<div class="conteneur_bloc conteneur_bloc_gris_medium">
						<div class="bloc bloc_gris_medium ">
							<h4>Guest speaker</h4>

<p><em>Gilles Chemla</em></p>
								
							</div>
					</div>
					
					<?php
					} //fin if(is_page
					?>
					<?php
					//BRICS
					if ($sidebar_a_acharger['section']=="brics"){ 
					?>														

					<div class="conteneur_bloc conteneur_bloc_gris_medium">
						<div class="bloc bloc_gris_medium bloc_contact">
							<a href="http://www.ieseg.fr/en/workshop-brics" title="Workshop Brics Overview" style="font-size:13px;font-weight:bold;display:block;margin-bottom:20px;">Overview ></a>

							<a href="http://www.ieseg.fr/en/workshop-brics/thematics/" title="Workshop Brics Thematics" style="font-size:13px;font-weight:bold;display:block;margin-bottom:20px;">Thematics ></a>

							<a href="http://www.ieseg.fr/en/workshop-brics/professors/" title="Workshop Brics Professors" style="font-size:13px;font-weight:bold;display:block;margin-bottom:20px;">Professors ></a>
	
							<a href="http://www.ieseg.fr/wp-content/uploads/Program-BRICS-Workshop_November-2014.pdf" title="Workshop Brics Program" style="font-size:13px;font-weight:bold;display:block;margin-bottom:20px;">Program ></a>
					
							<a href="http://www.ieseg.fr/en/workshop-brics/partners/" title="Workshop Brics Partners" style="font-size:13px;font-weight:bold;display:block;margin-bottom:20px;">Partners ></a>
						</div>
					</div>
					<?php
					} //fin BRICS
					?>
					<?php
					//Research Day in Accounting
					if ($sidebar_a_acharger['section']=="rdia"){ 
					?>						
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/research-day-accounting/')->ID); ?>" class="lien_imp_conference_sidebar" title="The Research Day In Accounting"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/research-day-accounting.jpg" alt="Research Day In Accounting"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/research-day-accounting/call-for-papers/')->ID); ?>" class="lien_imp_conference_sidebar" title="Call for papers and discussants"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/call-papers.jpg" alt="Call for papers and discussants"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/research-day-accounting/key-dates/')->ID); ?>" class="lien_imp_conference_sidebar" title="Key dates"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/key-dates.jpg" alt="Key dates"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/research-day-accounting/program/')->ID); ?>" class="lien_imp_conference_sidebar" title="Program"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/program.jpg" alt="Program"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/research-day-accounting/accepted-papers/')->ID); ?>" class="lien_imp_conference_sidebar" title="Accepted papers"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/accepted-papers.jpg" alt="Accepted papers"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/research-day-accounting/venue/')->ID); ?>" class="lien_imp_conference_sidebar" title="Venue"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/venue.jpg" alt="Venue"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/research-day-accounting/hotels')->ID); ?>" class="lien_imp_conference_sidebar" title="Hotels close to IESEG"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/hotels.jpg" alt="Hotels close to IESEG"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/research-day-accounting/registration')->ID); ?>" class="lien_imp_conference_sidebar" title="Registration"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/registration.jpg" alt="Registration"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/research-day-accounting/contact')->ID); ?>" class="lien_imp_conference_sidebar" title="Contact"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/contact.jpg" alt="Contact"/></a>
					<?php
					} //fin Research Day in Accounting
					?>
					
					<?php
					//Workshop Lies Bouten
					if ($sidebar_a_acharger['section']=="bouten"){ 
					?>						
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/workshop-sea/')->ID); ?>" class="lien_imp_conference_sidebar" title="Emerging scholar consortium on social and environmental accounting"><img src="<?php echo get_template_directory_uri(); ?>/images/workshop_bouten/overview.jpg" alt="Emerging scholar consortium on social and environmental accounting"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/workshop-sea/call-papers/')->ID); ?>" class="lien_imp_conference_sidebar" title="Call for papers"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/call-papers.jpg" alt="Call for papers"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/workshop-sea/venue/')->ID); ?>" class="lien_imp_conference_sidebar" title="Venue"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/venue.jpg" alt="Venue"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/workshop-sea/hotels')->ID); ?>" class="lien_imp_conference_sidebar" title="Hotels close to IESEG"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/hotels.jpg" alt="Hotels close to IESEG"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/workshop-sea/keydates/')->ID); ?>" class="lien_imp_conference_sidebar" title="Key dates"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/key-dates.jpg" alt="Key dates"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/workshop-sea/programme/')->ID); ?>" class="lien_imp_conference_sidebar" title="Program"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/program.jpg" alt="Program"/></a>
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/workshop-sea/registration')->ID); ?>" class="lien_imp_conference_sidebar" title="Registration"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/registration.jpg" alt="Registration"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/workshop-sea/organisers//')->ID); ?>" class="lien_imp_conference_sidebar" title="Organisers"><img src="<?php echo get_template_directory_uri(); ?>/images/workshop_bouten/organisers.jpg" alt="Organisers"/></a>
						
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/workshop-sea/contact')->ID); ?>" class="lien_imp_conference_sidebar" title="Contact"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/contact.jpg" alt="Contact"/></a>
					<?php
					} //fin Workshop Lies Bouten

					?>
					<?php
					//Workshop MIFN
					if ($sidebar_a_acharger['section']=="mifn"){ 
					?>						
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/workshop-mifn/')->ID); ?>" class="lien_imp_conference_sidebar" title="Methods in International Finance Network (MIFN)"><img src="<?php echo get_template_directory_uri(); ?>/images/workshop_bouten/overview.jpg" alt="Methods in International Finance Network (MIFN)"/></a>
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/workshop-mifn/call-for-papers/')->ID); ?>" class="lien_imp_conference_sidebar" title="Call for papers"><img src="<?php echo get_template_directory_uri(); ?>/images/mifn/call-papers2.jpg" alt="Call for papers"/></a>	
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/workshop-mifn/submission-papers/')->ID); ?>" class="lien_imp_conference_sidebar" title="Submission of papers"><img src="<?php echo get_template_directory_uri(); ?>/images/mifn/call-papers.jpg" alt="Submission of papers"/></a>									
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/workshop-mifn/keynote-speakers/')->ID); ?>" class="lien_imp_conference_sidebar" title="Keynote speakers"><img src="<?php echo get_template_directory_uri(); ?>/images/mifn/speakers.jpg" alt="Keynote speakers"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/workshop-mifn/organising-scientific-committee/')->ID); ?>" class="lien_imp_conference_sidebar" title="Organising & scientific committee"><img src="<?php echo get_template_directory_uri(); ?>/images/workshop_bouten/organisers.jpg" alt="Organising & scientific committee"/></a>	
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/workshop-mifn/key-dates/')->ID); ?>" class="lien_imp_conference_sidebar" title="Key dates"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/key-dates.jpg" alt="Key dates"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/workshop-mifn/registration')->ID); ?>" class="lien_imp_conference_sidebar" title="Registration"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/registration.jpg" alt="Registration"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/workshop-mifn/venue/')->ID); ?>" class="lien_imp_conference_sidebar" title="Venue"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/venue.jpg" alt="Venue"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/workshop-mifn/contact')->ID); ?>" class="lien_imp_conference_sidebar" title="Contact"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/contact.jpg" alt="Contact"/></a>
					<?php
					} //fin Workshop MIFN
					?>
					<?php
					//Course in Applied Empirical Analysis in Economics and Finance
					if ($sidebar_a_acharger['section']=="applied_empirical"){ 
					?>						
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/applied-empirical-analysis-economics-finance/')->ID); ?>" class="lien_imp_conference_sidebar" title="Course in Applied Empirical Analysis in Economics and Finance"><img src="<?php echo get_template_directory_uri(); ?>/images/course_applied_empirical_analysis/objective.jpg" alt="Course in Applied Empirical Analysis in Economics and Finance"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/applied-empirical-analysis-economics-finance/course-outline/')->ID); ?>" class="lien_imp_conference_sidebar" title="Course Outline"><img src="<?php echo get_template_directory_uri(); ?>/images/course_applied_empirical_analysis/outline.jpg" alt="Course Outline"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/applied-empirical-analysis-economics-finance/submission-dossier/')->ID); ?>" class="lien_imp_conference_sidebar" title="Submission"><img src="<?php echo get_template_directory_uri(); ?>/images/course_applied_empirical_analysis/submission.jpg" alt="Submission"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/applied-empirical-analysis-economics-finance/registration')->ID); ?>" class="lien_imp_conference_sidebar" title="Registration"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/registration.jpg" alt="Registration"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/applied-empirical-analysis-economics-finance/venue/')->ID); ?>" class="lien_imp_conference_sidebar" title="Venue"><img src="<?php echo get_template_directory_uri(); ?>/images/course_applied_empirical_analysis/venue.jpg" alt="Venue"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/applied-empirical-analysis-economics-finance/hotels')->ID); ?>" class="lien_imp_conference_sidebar" title="Hotels"><img src="<?php echo get_template_directory_uri(); ?>/images/course_applied_empirical_analysis/hotels.jpg" alt="Hotels"/></a>
					
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/applied-empirical-analysis-economics-finance/conference')->ID); ?>" class="lien_imp_conference_sidebar" title="Conference"><img src="<?php echo get_template_directory_uri(); ?>/images/course_applied_empirical_analysis/conference.jpg" alt="Conference"/></a>
								
					<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/applied-empirical-analysis-economics-finance/contact')->ID); ?>" class="lien_imp_conference_sidebar" title="Contact"><img src="<?php echo get_template_directory_uri(); ?>/images/course_applied_empirical_analysis/contact.jpg" alt="Contact"/></a>
					<?php
					
					} //fin Course in Applied Empirical Analysis in Economics and Finance

					?>
<?php
//2015 ILM Conference
if ($sidebar_a_acharger['section']=="2015_ilm"){ 
?>						
<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/2015-ilm-conference/')->ID); ?>" class="lien_imp_conference_sidebar" title="2015 ILM Conference"><img src="<?php echo get_template_directory_uri(); ?>/images/workshop_bouten/overview.jpg" alt="2015 ILM Workshop"/></a>

<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/2015-ilm-conference/program/')->ID); ?>" class="lien_imp_conference_sidebar" title="Program"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/program.jpg" alt="Program"/></a>								

<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/2015-ilm-conference/speakers/')->ID); ?>" class="lien_imp_conference_sidebar" title="Speakers"><img src="<?php echo get_template_directory_uri(); ?>/images/ilm_workshop/speakers.jpg" alt="Speakers"/></a>

<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/2015-ilm-conference/venue/')->ID); ?>" class="lien_imp_conference_sidebar" title="Venue"><img src="<?php echo get_template_directory_uri(); ?>/images/ilm_workshop/venue.jpg" alt="Venue"/></a>

<a href="<?php echo get_permalink(get_page_by_path('faculty-and-research/ieseg-research/2015-ilm-conference/registration')->ID); ?>" class="lien_imp_conference_sidebar" title="Registration"><img src="<?php echo get_template_directory_uri(); ?>/images/research_day_accounting/registration.jpg" alt="Registration"/></a>

<?php
} //fin if(is_page
?>

<?php
//Recherche FR
if ($sidebar_a_acharger['section']=="recherche-fr"){
?>
<div class="col-sm-4 col-md-12">
<div class="bloc">
	<h4><?php _e('Research Agenda', 'ieseg2015'); ?></h4>
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
                                    'terms'    => apply_filters('wpml_object_id', 48, 'events-category'),
                                ),
                            )
		);
 $postslist = get_posts( $args );
 if (!empty($postslist)){?>
 	<ul>
 <?php
	foreach ( $postslist as $post ) :
		setup_postdata( $post ); 
		$id=$post->ID;
	  ?>
		<li>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			<time class="" datetime="<?php echo date('Y',get_post_meta($id,'wpcf-start-date',true)).'-'.date('m',get_post_meta($id,'wpcf-start-date',true)).'-'.date('d',get_post_meta($id,'wpcf-start-date',true)); ?>"> 
				<?php echo date('d',get_post_meta($id,'wpcf-start-date',true)).' '.date('M',get_post_meta($id,'wpcf-start-date',true)).' '.date('Y',get_post_meta($id,'wpcf-start-date',true)); ?>
				<?php echo get_post_meta($id,'wpcf-city-town', true)?>
			</time>

		</li>
	<?php
	endforeach;
	?>
     </ul>
     <?php
	  $id_rub_recherche = intval(apply_filters('wpml_object_id', 48, 'events-category')); //obligé de faire un intval pour convertir l'id en int
	 ?>
     <a href="<?php echo get_term_link($id_rub_recherche,'events-category')?>" title="<?php _e('All Research Events', 'ieseg2015')?>" class="btn"><?php _e('All Research Events', 'ieseg2015')?></a>
 <?php
 }
 else{
	 _e('No event in this category', 'ieseg2015');
 }
 ?>	
</div>
</div>
<?php
} //Fin Recherche FR
?>
</div>                 				
</div><!-- #content-sidebar -->