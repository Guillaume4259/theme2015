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
					//page accueil des MSc
					if ($sidebar_a_acharger['section']=="msc_accueil"){
					?>
					<div class="conteneur_bloc conteneur_bloc_gris_medium">
							<div class="bloc bloc_gris_medium bloc_edito">
								<h4>Foreword</h4>
								<p>An international faculty body of academics and practitioners guarantees the right balance between fundamentals skills and hands-on practical applications and much emphasis is put on the personalized development of each individual.</p>
								<p>And because students in these programs come from a wide range of academic and cultural backgrounds, participants have ample opportunity to learn from each other every day, inside and outside the classroom. After one year spent at IÉSEG our students are ready to feel at home in any corner of the world: a true global citizen.</p>
								<div class="edito_signature">
									<img src="<?php echo get_template_directory_uri(); ?>/images/msc_digital_marketing/giangreco.png" width="67" height="80" alt="Dr. Antonio Giangreco, Director of Post-graduate programs"/>
									<div>Dr. Antonio Giangreco,</div>
									Director of Post-graduate programs<br />
									
								</div>
							</div>
					</div>
					<?php
					} //fin page accueil des MSc
					?>
					<?php
					//MSc Digital Marketing
					if ($sidebar_a_acharger['section']=="msc_digital"){
					?>
					<div class="conteneur_bloc conteneur_bloc_gris_medium">
							<div class="bloc bloc_gris_medium bloc_edito">
								<h4>Foreword</h4>
								<p>The emergence of the internet has completely changed marketing practice and has led to new forms of communication and commercialisation.</p>
								<p>Today, online communication and building long term relationships with customers are the main priorities of any marketer in order to increase company competitiveness and profitability.</p>
								<p>MSc in Digital Marketing & CRM provides a unique opportunity to strengthen both your knowledge in digital marketing and CRM.</p>
								<div class="edito_signature">
									<img src="<?php echo get_template_directory_uri(); ?>/images/msc_digital_marketing/pauwels-delassus.png" width="67" height="80" alt="Dr. Véronique Pauwels Delassus, Academic Director of Marketing Department at IÉSEG"/>
									<div>Dr. Véronique Pauwels Delassus,</div>
									Academic Director,<br />
									Marketing Department
								</div>
							</div>
					</div>
					<a href="https://application.ieseg.fr/PGDInfo" target="_blank" title="Apply now" class="btn_apply"></a>
						
					<div class="conteneur_bloc conteneur_bloc_gris_fonce">
						<div class="bloc bloc_gris_fonce bloc_contact">
							<h4 style="margin-bottom:20px;">Contact</h4>
							<a href="mailto:msc@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ">Mrs. Noemie GONZALEZ</a>
							<a href="mailto:msc@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ" class="lien_mail"><span></span>msc@ieseg.fr</a>
						</div>
					</div>
					<?php
					} //fin MSc Digital Marketing
					?>
					<?php
					//MSc Business Analysis
					if ($sidebar_a_acharger['section']=="msc_business_analysis"){
					?>
					<div class="conteneur_bloc conteneur_bloc_gris_medium">
							<div class="bloc bloc_gris_medium bloc_edito">
								<h4>Foreword</h4>
								<p>The MSc in Business Analysis and Consulting has been carefully designed to mix theory and practice so that students can acquire the necessary knowledge and confidence to start a career in a fast changing environment..</p>
								<p>Upon completion of the program, the young consultants/managers will be able to promote best practices in their field, deal with risks and implement changes to achieve sustainable performance.</p>
								<div class="edito_signature">
									<img src="<?php echo get_template_directory_uri(); ?>/images/msc_business_analysis/di-martinelly.png" width="67" height="81" alt="Dr. Christine Di Martinelly, Academic Director of Management Department at IÉSEG"/>
									
									<div>Dr. Christine Di Martinelly,</div>
									Academic Director,<br />
									Management Department
								</div>
							</div>
					</div>
					<a href="https://application.ieseg.fr/PGDInfo" target="_blank" title="Apply now" class="btn_apply"></a>
						
					<div class="conteneur_bloc conteneur_bloc_gris_fonce">
						<div class="bloc bloc_gris_fonce bloc_contact">
							<h4 style="margin-bottom:20px;">Contact</h4>
							<a href="mailto:msc@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ">Mrs. Noemie GONZALEZ</a>
							<a href="mailto:msc@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ" class="lien_mail"><span></span>msc@ieseg.fr</a>
						</div>
					</div>
					<?php
					} //fin MSc Business Analysis
					?>
					<?php
					//MSc Finance
					if ($sidebar_a_acharger['section']=="msc_finance"){
					?>
					<div class="conteneur_bloc conteneur_bloc_gris_medium">
							<div class="bloc bloc_gris_medium bloc_edito">
								<h4>Foreword</h4>
								<p>Through a mix of theory and practice, interaction with finance professionals and dedicated sessions in our Bloomberg facilities, our MSc in Finance has been designed as a smooth transition to the finance industry.</p>
								<div class="edito_signature">
									<img src="<?php echo get_template_directory_uri(); ?>/images/msc_finance/titova.png" width="67" height="81" alt="Dr. Yulia Titova, Academic Director"/>
									<div>Dr. Yulia Titova,</div>
									Academic Director,<br />
									Finance, Audit & Control Department
								</div>
							</div>
					</div>
					<a href="https://application.ieseg.fr/PGDInfo" target="_blank" title="Apply now" class="btn_apply"></a>
						
					<div class="conteneur_bloc conteneur_bloc_gris_fonce">
						<div class="bloc bloc_gris_fonce bloc_contact">
							<h4 style="margin-bottom:20px;">Contact</h4>
							<a href="mailto:msc@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ">Mrs. Noemie GONZALEZ</a>
							<a href="mailto:msc@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ" class="lien_mail"><span></span>msc@ieseg.fr</a>
						</div>
					</div>
					<?php
					} //fin MSc Finance
					?>
					<?php
					//MSc Accounting
					if ($sidebar_a_acharger['section']=="msc_accounting"){
					?>
					<div class="conteneur_bloc conteneur_bloc_gris_medium">
							<div class="bloc bloc_gris_medium bloc_edito">
								<h4>Foreword</h4>
								<p>The MSc in Accounting provides you with a relevant insight into various aspects of accounting and without doubt gives you all the tools and knowledge you need for the real business world.</p>
								<p>It is a significant stepping stone in your career and a great opportunity to explore the importance of accounting for the modern business environment.</p>
								<div class="edito_signature">
									<img src="<?php echo get_template_directory_uri(); ?>/images/msc_accounting/beuselinck.png" width="67" height="82" alt="Dr. Christof Beuselinck, Academic Director of Finance, Audit & Control Department at IÉSEG"/>
									<div>Dr. Christof Beuselinck,</div>
									Academic Director,<br />
									Finance, Audit & Control Department
								</div>
							</div>
					</div>
					<a href="https://application.ieseg.fr/PGDInfo" target="_blank" title="Apply now" class="btn_apply"></a>
						
					<div class="conteneur_bloc conteneur_bloc_gris_fonce">
						<div class="bloc bloc_gris_fonce bloc_contact">
							<h4 style="margin-bottom:20px;">Contact</h4>
							<a href="mailto:msc@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ">Mrs. Noemie GONZALEZ</a>
							<a href="mailto:msc@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ" class="lien_mail"><span></span>msc@ieseg.fr</a>
						</div>
					</div>
					<?php
					} //fin MSc Accounting
					?>
					<?php
					//MSc in Banking and Capital Markets
					if ($sidebar_a_acharger['section']=="msc_banking_capital_markets"){
					?>
					<div class="conteneur_bloc conteneur_bloc_gris_medium">
							<div class="bloc bloc_gris_medium bloc_edito">
								<h4>Foreword</h4>
								<p>The MSc in Banking and Capital Markets explores how capital markets function and students develop the technical skills required for a successful career in the banking industry.</p>
								<div class="edito_signature">
									<img src="<?php echo get_template_directory_uri(); ?>/images/msc_banking_capital_markets/beaupain.png" width="67" height="82" alt="Dr. Renaud BEAUPAIN, Academic Director of Finance, Audit & Control Department at IÉSEG"/>
									<div>Dr. Renaud BEAUPAIN,</div>
									Academic Director,<br />
									Finance, Audit, and Control Department
								</div>
							</div>
					</div>
					<a href="https://application.ieseg.fr/" target="_blank" title="Apply now" class="btn_apply"></a>
						
					<div class="conteneur_bloc conteneur_bloc_gris_fonce">
						<div class="bloc bloc_gris_fonce bloc_contact">
							<h4 style="margin-bottom:20px;">Contact</h4>
							<a href="mailto:msc@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ">Mrs. Noemie GONZALEZ</a>
							<a href="mailto:msc@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ" class="lien_mail"><span></span>msc@ieseg.fr</a>
						</div>
					</div>
					<?php
					} //fin MSc in Banking and Capital Markets
					?>
					<?php
					//MSc in Big Data Analytics for Business
					if ($sidebar_a_acharger['section']=="msc_bigdata"){
					?>
					<div class="conteneur_bloc conteneur_bloc_gris_medium">
							<div class="bloc bloc_gris_medium bloc_edito">
								<h4>Foreword</h4>
								<p>BIG data. BIG analytics. BIG career. By teaching students how to master the new data-driven challenges that companies are currently experiencing in (online) marketing, finance, and operations, the MSc in Big Data Analytics for Business is an extraordinary relevant market-driven must-have on one's curriculum vitae.</p>
								<p>The opportunity to spend on academic year in an international environment, with instructors and peers from around the globe, creates a program that will be an ever-lasting professional and personal experience.</p>

								<div class="edito_signature">
									<img src="<?php echo get_template_directory_uri(); ?>/images/msc_big_data/coussement.png" width="67" height="82" alt="Dr. Kristof Coussement, Academic Director,IÉSEG Expertise Center in Database Marketing Director"/>
									<div>Dr. Kristof Coussement,</div>
									Academic Director,<br />
									IÉSEG Center for Marketing Analytics Director
								</div>
							</div>
					</div>
					<a href="https://application.ieseg.fr/" target="_blank" title="Apply now" class="btn_apply"></a>
						
					<div class="conteneur_bloc conteneur_bloc_gris_fonce">
						<div class="bloc bloc_gris_fonce bloc_contact">
							<h4 style="margin-bottom:20px;">Contact</h4>
							<a href="mailto:msc@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ">Mrs. Noemie GONZALEZ</a>
							<a href="mailto:msc@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ" class="lien_mail"><span></span>msc@ieseg.fr</a>
						</div>
					</div>
					<?php
					} //fin MSc in Big Data Analytics for Business
					?>
					<?php
					//MSc in Negotiation for Organizations
					if ($sidebar_a_acharger['section']=="msc_negociation"){
					?>
					<div class="conteneur_bloc conteneur_bloc_gris_medium">
							<div class="bloc bloc_gris_medium bloc_edito">
								<h4>Foreword </h4>
								<p>Negotiation is at the heart of every manager's responsibilities and contributes significantly to one's career development.</p>
								<p>This MSc aims to develop competences in negotiation and one's self-confidence through learning-by-doing and a practical perspective on business and organizational issues.</p>
								<div class="edito_signature">
									<img src="<?php echo get_template_directory_uri(); ?>/images/msc_negociation_organizations/elgoibar.png" width="67" height="82" alt="Dr. Patricia Elgoibar, 
Academic Director, Negotiation Department"/>
									<div>Dr. Patricia Elgoibar,</div>
									Academic Director,<br />
									Negotiation track
								</div>
							</div>
					</div>
					<a href="https://application.ieseg.fr/" target="_blank" title="Apply now" class="btn_apply"></a>
						
					<div class="conteneur_bloc conteneur_bloc_gris_fonce">
						<div class="bloc bloc_gris_fonce bloc_contact">
							<h4 style="margin-bottom:20px;">Contact</h4>
							<a href="mailto:msc@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ">Mrs. Noemie GONZALEZ</a>
							<a href="mailto:msc@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ" class="lien_mail"><span></span>msc@ieseg.fr</a>
						</div>
					</div>
					<?php
					} //fin MSc in Negotiation for Organizations
					?>
					<?php
					//SIDEBAR MSc Fashion Management
					if ($sidebar_a_acharger['section']=="msc_fashion"){
					?>
					<div class="conteneur_bloc conteneur_bloc_gris_medium">
							<div class="bloc bloc_gris_medium bloc_edito">
								<h4>Foreword</h4>
								<p>Our purpose is to create a top program for talented individuals looking for an international career in the fashion industry.</p>
								<p>The program is successful because of our established network in the fashion industry; the practical knowledge of a highly dedicated international faculty;
								and the program's location, Paris, which is a renowned fashion capital.</p>
								<div class="edito_signature">
									<img src="<?php echo get_template_directory_uri(); ?>/images/msc_fashion_management/slavich.png" width="67" height="80" alt="Dr. Barbara Slavich, Academic Director, Management Department"/>
									<div>Dr. Barbara Slavich,</div>
									Academic Director,<br />
									Management Department
								</div>
							</div>
					</div>
					<a href="https://application.ieseg.fr/" target="_blank" title="Apply now" class="btn_apply"></a>
						
					<div class="conteneur_bloc conteneur_bloc_gris_fonce">
						<div class="bloc">
							<h4 style="margin-bottom:20px;">Contact</h4>
							<a href="mailto:mfm@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ">Mrs. Noemie GONZALEZ</a>
							<a href="mailto:mfm@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ" class="lien_mail"><span></span>mfm@ieseg.fr</a>
						</div>
					</div>
					<?php
					} //fin MSc Fashion Management
					?>
</div>
</div><!-- #content-sidebar -->
