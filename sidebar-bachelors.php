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
    //SIDEBAR Bachelors
    if($sidebar_a_acharger['section']=='bba-accueil'){
    ?>
    <div class="conteneur_bloc conteneur_bloc_gris_medium">
            <div class="bloc bloc_gris_medium bloc_edito">
                <h4>Where Life and Learning Begin</h4>
                    <p>Built on the strengths IÉSEG has in Business and Management education, our Bachelor programs prepare students to enter the job market right after graduation. </p>
                    <p>The three specializations available in International Business, Marketing & Sales and Accounting & Finance cover the majors that are most relevant in the job market
                    and highly-valued by companies.</p>
                    <p><strong>Get ready to live and learn at IÉSEG!</strong></p>
                <div class="edito_signature">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/grande_ecole/bied.png" width="67" height="80" alt="Pascal BIED, Director of Bachelor Programs"/>
                    <div>Pascal BIED,</div>
                    Director of Bachelor Programs</div>
            </div>
    </div>
    
    <div class="conteneur_bloc conteneur_bloc_gris_fonce">
                <div class="bloc bloc_gris_fonce bloc_contact">
                    <a href="http://issuu.com/ieseg/docs/ieseg_bba" target="_blank" title="Download brochure" style="font-size:13px;font-weight:bold;">View brochure ></a>
                </div>
            </div>
    <?php
    } //fin if(is_page
    ?>
    <?php
    //Bachelor International Business
    if($sidebar_a_acharger['section']=='bachelor-international-business'){
    ?>
    <div class="conteneur_bloc conteneur_bloc_gris_medium">
            <div class="bloc bloc_gris_medium bloc_edito">
                <h4>Foreword</h4>
                <p>Built on the strengths IÉSEG has in business and management education, the Bachelor in International Business prepares students to enter the job market with a strong competitive advantage.</p>
                <p>This three-year program permits students to develop high-level skills that will be a benefit to dynamic international organizations. Students will be immersed from day one in an intellectually stimulating environment on our multicultural campus.</p>
                <div class="edito_signature">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/grande_ecole/bied.png" width="67" height="80" alt="Pascal BIED, Director of Bachelor Programs"/>
                    <div>Pascal BIED,</div>
                    Director of Bachelor Programs
                </div>
            </div>
    </div>
    <a href="https://application.ieseg.fr/" target="_blank" title="Apply now" class="btn_apply"></a>
        
    <div class="conteneur_bloc conteneur_bloc_gris_fonce">
        <div class="bloc bloc_gris_fonce bloc_contact">
            <h4 style="margin-bottom:20px;">Contact</h4>
            <a href="mailto:bib@ieseg.fr" target="_blank" title="Contact Mrs. Kimberley TOMASSON">Ms. Kimberley TOMASSON</a>
            <a href="mailto:bib@ieseg.fr" target="_blank" title="Contact Mrs. Kimberley TOMASSON" class="lien_mail"><span></span>bib@ieseg.fr</a>
        </div>
    </div>
    <?php
    } //fin if(is_page
    ?>
    <?php
    //Bachelor in Accounting & Finance
    if($sidebar_a_acharger['section']=='bachelor-accounting-finance'){
    ?>
    <div class="conteneur_bloc conteneur_bloc_gris_medium">
            <div class="bloc bloc_gris_medium bloc_edito">
                <h4>Foreword</h4>
                <p>In an international environment, our Bachelor in Accounting and Finance will give you applied knowledge and skills in order to be readily operational in positions related to finance, accounting and control.</p>
                <div class="edito_signature">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/bba_accounting_finance/roussel.png" width="67" height="82" alt="Dr. Caroline Roussel, Head of Finance Audit & Control Department">				
                    <div>Dr. Caroline Roussel,</div>
                    Head of Finance Audit & Control Department<br />

                </div>
            </div>
    </div>
    
    <!--<a href="https://application.ieseg.fr/BB3Info" target="_blank" title="Apply now" class="btn_apply"></a>-->
        
    <div class="conteneur_bloc conteneur_bloc_gris_fonce">
        <div class="bloc bloc_gris_fonce bloc_contact">
            <h4 style="margin-bottom:20px;">Contact</h4>
            <a href="mailto:bba@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ">Mrs. Noemie GONZALEZ</a>
            <a href="mailto:bba@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ" class="lien_mail"><span></span>bba@ieseg.fr</a>
        </div>
    </div>
    <?php
    } //fin if(is_page
    ?>
    <?php
    //Bachelor in Marketing & Sales
    if($sidebar_a_acharger['section']=='bachelor-marketing-sales'){
    ?>
    <div class="conteneur_bloc conteneur_bloc_gris_medium">
            <div class="bloc bloc_gris_medium bloc_edito">
                <h4>Foreword</h4>
                <p>Upon completing this thorough tools and skill based Marketing and Sales Bachelor program, students will develop the core competencies to make a practical contribution to their organizations and differentiate themselves on their home market or anywhere in the world.</p>
                <div class="edito_signature">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/bba_marketing_sales/charry.png" width="67" height="82" alt="Dr. Karine Charry, Marketing and Negotiation Department"/>
                    <div>Dr. Karine Charry,</div>
                    Marketing and Negotiation Department
                </div>
            </div>
    </div>
    
    <!--<a href="https://application.ieseg.fr/BB3Info" target="_blank" title="Apply now" class="btn_apply"></a>-->
        
    <div class="conteneur_bloc conteneur_bloc_gris_fonce">
        <div class="bloc bloc_gris_fonce bloc_contact">
            <h4 style="margin-bottom:20px;">Contact</h4>
            <a href="mailto:bba@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ">Mrs. Noemie GONZALEZ</a>
            <a href="mailto:bba@ieseg.fr" target="_blank" title="Contact Mrs. Noemie GONZALEZ" class="lien_mail"><span></span>bba@ieseg.fr</a>
        </div>
    </div>
    <?php
    } //fin if(is_page
    ?>
</div><!-- #content-sidebar -->
