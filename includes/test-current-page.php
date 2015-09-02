<?php
$sidebar_a_acharger=array();
$punchline_programme="";
//--------------------L'Ecole--------------------------
if(is_page(1910)  //Campus de Lille - FR
|| custom_is_child(1910)
|| is_page(31454) //Campus de Paris - FR
|| custom_is_child(31454)
|| is_page(1797) //Espace Presse - FR
){
	$sidebar_a_acharger['global']="ecole";
	if(is_page(1910) || custom_is_child(1910) ) //Campus de Lille - FR
	{
		$sidebar_a_acharger['section']="campus-lille-fr";			
	}
	if(is_page(31454) || custom_is_child(31454) ) //Campus de Paris - FR
	{
		$sidebar_a_acharger['section']="campus-paris-fr";			
	}
	if(is_page(1797)) //Presse - FR
	{
		$sidebar_a_acharger['section']="presse-fr";			
	}
}

//--------------------ADMISSIONS--------------------------
if(is_page(1782)  //rencontrez nous
|| is_page(1832) //admissions accueil
|| is_page(12298) //admissions contact
|| is_page(1834) //admissions 1ere annee
|| is_page(18073) //admissions 3eme année
|| is_page(1836) //admissions master
|| is_page(10626) //admissions master apprentissage
){
	$sidebar_a_acharger['global']="admissions";
	
	if(is_page(1782)) //rencontrez nous
	{
		$sidebar_a_acharger['section']="rencontrez-nous";			
	}
	if(is_page(1832)) //admissions accueil
	{
		$sidebar_a_acharger['section']="adm-accueil";			
	}
	if(is_page(12298)) //admissions contact
	{
		$sidebar_a_acharger['section']="adm-contact";			
	}
	if(is_page(1834)) //admissions 1ere annee
	{
		$sidebar_a_acharger['section']="adm-1ere-annee";			
	}
	if(is_page(18073)) //admissions 3eme année
	{
		$sidebar_a_acharger['section']="adm-3eme-annee";			
	}
	if(is_page(1836)) //admissions master
	{
		$sidebar_a_acharger['section']="adm-master";			
	}
	if(is_page(10626)) //admissions master apprentissage
	{
		$sidebar_a_acharger['section']="adm-master-apprentissage";			
	}
}
//--------------------CHINESE--------------------------
if (ICL_LANGUAGE_CODE=="zh-hans"){
	$sidebar_a_acharger['global']="chinese";
}

//--------------------DRE--------------------------
if(is_page(2134)){
	$sidebar_a_acharger['global']="dre";	
}

//--------------------TAXE--------------------------
if(is_page(2203)){
		$sidebar_a_acharger['global']="taxe";
}


//--------------------EXEC--------------------------
//Exec GB
if(is_page(642) || custom_is_child(642)){ 
	$sidebar_a_acharger['global']="exec";
	$sidebar_a_acharger['section']="global-gb";
}
//EMBA GB
if(is_page(29818) || custom_is_child(29818)){ 
	$sidebar_a_acharger['global']="exec";
	$sidebar_a_acharger['section']="emba-gb";
}

//MS Direction Financiere GB
if(is_page(29909) || custom_is_child(29909)){ 
	$sidebar_a_acharger['global']="exec";
	$sidebar_a_acharger['section']="programme-direction-financiere-gb";		
}

//Exec FR
if(is_page(2554) || custom_is_child(2554)){ 
	$sidebar_a_acharger['global']="exec";
	$sidebar_a_acharger['section']="global-fr";
		
	if(is_page(22831) || custom_is_child(22831)){ 
		$sidebar_a_acharger['section']="programme-direction-financiere";		
	}
	
	if(is_page(12691) || custom_is_child(12691)){ 
		$sidebar_a_acharger['section']="emba";		
	}

}

//--------------------FONDATION--------------------------
if(is_page(22381)){
	$sidebar_a_acharger['global']="fondation";
}

//--------------------BACHELORS--------------------------
if(is_page(18322) || custom_is_child(18322)){ 
	$sidebar_a_acharger['global']="bachelors";
	$sidebar_a_acharger['section']="bachelor-international-business";
		
	$punchline_programme="Punchline en attente";
	$keyfacts_programme = '
      <table class="table">
          <tr>
            <th colspan="2" class="keytitle foundry_bold">Key Facts</th>
          </tr>
          <tr class="foundry_light">
            <th>Duration</th>
            <td>3 years</td>
          </tr>
          <tr class="foundry_light">
            <th>Language</th>
            <td>English</td>
          </tr>
          <tr class="foundry_light">
            <th>Credits</th>
            <td>180 ECTS</td>
          </tr>
          <tr class="foundry_light">
            <th>Location</th>
            <td>Lille - France</td>
          </tr>
          <tr class="foundry_light">
            <th>Intakes</th>
            <td>September</td>
          </tr>
        </table>
  ';
}


//--------------------IMBA--------------------------
if(is_page(17148) || custom_is_child(17148) || $cat_testi[0]->term_id==128){
	$sidebar_a_acharger['global']="imba";
	$punchline_programme="Sharpen your skills for the Global Market";	
	$id_cat_testimonials = 128;
	$keyfacts_programme = '
      <table class="table">
          <tr>
            <th colspan="2" class="keytitle foundry_bold">Key Facts</th>
          </tr>
          <tr class="foundry_light">
            <th>Duration</th>
            <td>1 year</td>
          </tr>
          <tr class="foundry_light">
            <th>Language</th>
            <td>English</td>
          </tr>
          <tr class="foundry_light">
            <th>Credits</th>
            <td>90 ECTS</td>
          </tr>
          <tr class="foundry_light">
            <th>Location</th>
            <td>Paris - France</td>
          </tr>
          <tr class="foundry_light">
            <th>Intakes</th>
            <td>September</td>
          </tr>
        </table>
  ';
}

//--------------------MSC--------------------------

//Page Accueil MSc
if(is_page(554)){
	$sidebar_a_acharger['global']="msc";
	$sidebar_a_acharger['section']="msc_accueil";	
}

//MIB
if(is_page(17155) || custom_is_child(17155) || $cat_testi[0]->term_id==121){
	$sidebar_a_acharger['global']="msc";
	$sidebar_a_acharger['section']="mib";
	$punchline_programme="Manage Organizations in a Global Environment";
	$id_cat_testimonials = 121;
	$keyfacts_programme = '
    <table class="table">
          <tr>
            <th colspan="2" class="keytitle foundry_bold">Key Facts</th>
          </tr>
          <tr class="foundry_light">
            <th>Duration</th>
            <td>1 year / 3 terms</td>
          </tr>
          <tr class="foundry_light">
            <th>Language</th>
            <td>English</td>
          </tr>
          <tr class="foundry_light">
            <th>Credits</th>
            <td>90 ECTS</td>
          </tr>
          <tr class="foundry_light">
            <th>Location</th>
            <td>Lille & Paris - France</td>
          </tr>
          <tr class="foundry_light">
            <th>Intakes</th>
            <td>Sept. & Jan. (Lille only)</td>
          </tr>
        </table>
  ';
}

//MSc in Fashion Management
if(is_page(10873) || custom_is_child(10873) || $cat_testi[0]->term_id==123){
	$sidebar_a_acharger['global']="msc";
	$sidebar_a_acharger['section']="msc_fashion";	
	$punchline_programme="Where fashion meets management";
	$id_cat_testimonials = 123;
	$keyfacts_programme = '
      <table class="table">
          <tr>
            <th colspan="2" class="keytitle foundry_bold">Key Facts</th>
          </tr>
          <tr class="foundry_light">
            <th>Duration</th>
            <td>1 year / 3 terms</td>
          </tr>
          <tr class="foundry_light">
            <th>Language</th>
            <td>English</td>
          </tr>
          <tr class="foundry_light">
            <th>Credits</th>
            <td>90 ECTS</td>
          </tr>
          <tr class="foundry_light">
            <th>Location</th>
            <td>Paris - France</td>
          </tr>
          <tr class="foundry_light">
            <th>Intakes</th>
            <td>September</td>
          </tr>
        </table>
  ';
}

//MSc Digital Marketing
if(is_page(17340) || custom_is_child(17340) || $cat_testi[0]->term_id==124){
	$sidebar_a_acharger['global']="msc";
	$sidebar_a_acharger['section']="msc_digital";	
	$punchline_programme="Become a digital expert";
	$id_cat_testimonials = 124;
	$keyfacts_programme = '
        <table class="table">
          <tr>
            <th colspan="2" class="keytitle foundry_bold">Key Facts</th>
          </tr>
          <tr class="foundry_light">
            <th>Duration</th>
            <td>3 semesters</td>
          </tr>
          <tr class="foundry_light">
            <th>Language</th>
            <td>English</td>
          </tr>
          <tr class="foundry_light">
            <th>Credits</th>
            <td>90 ECTS</td>
          </tr>
          <tr class="foundry_light">
            <th>Location</th>
            <td>Lille - France</td>
          </tr>
          <tr class="foundry_light">
            <th>Intakes</th>
            <td>September</td>
          </tr>
        </table>
  ';
}

//MSc in Business Analysis and Consulting
if(is_page(17394) || custom_is_child(17394) || $cat_testi[0]->term_id==119){
	$sidebar_a_acharger['global']="msc";
	$sidebar_a_acharger['section']="msc_business_analysis";	
	$id_cat_testimonials = 119;
	$punchline_programme="Translate Strategic Plans into Tangible Performance";
	$keyfacts_programme = '
    <table class="table">
          <tr>
            <th colspan="2" class="keytitle foundry_bold">Key Facts</th>
          </tr>
          <tr class="foundry_light">
            <th>Duration</th>
            <td>1 year / 3 terms</td>
          </tr>
          <tr class="foundry_light">
            <th>Language</th>
            <td>English</td>
          </tr>
          <tr class="foundry_light">
            <th>Credits</th>
            <td>90 ECTS</td>
          </tr>
          <tr class="foundry_light">
            <th>Location</th>
            <td>Paris - France</td>
          </tr>
          <tr class="foundry_light">
            <th>Intakes</th>
            <td>September</td>
          </tr>
        </table>
  ';
}

//MSc in Finance
if(is_page(17445) || custom_is_child(17445) || $cat_testi[0]->term_id==122){
	$sidebar_a_acharger['global']="msc";
	$sidebar_a_acharger['section']="msc_finance";	
	$id_cat_testimonials = 122;
	$punchline_programme="Enhance your Understanding of Financial Mechanisms";
	$keyfacts_programme = '
      <table class="table">
          <tr>
            <th colspan="2" class="keytitle foundry_bold">Key Facts</th>
          </tr>
          <tr class="foundry_light">
            <th>Duration</th>
            <td>1 year / 3 terms</td>
          </tr>
          <tr class="foundry_light">
            <th>Language</th>
            <td>English</td>
          </tr>
          <tr class="foundry_light">
            <th>Credits</th>
            <td>90 ECTS</td>
          </tr>
          <tr class="foundry_light">
            <th>Location</th>
            <td>Paris - France</td>
          </tr>
          <tr class="foundry_light">
            <th>Intakes</th>
            <td>September</td>
          </tr>
        </table>
  ';
}

//MSc in Accounting
if(is_page(17417) || custom_is_child(17417) || $cat_testi[0]->term_id==127){
	$sidebar_a_acharger['global']="msc";
	$sidebar_a_acharger['section']="msc_accounting";	
	$id_cat_testimonials = 127;
	$punchline_programme="Explore the Importance of Financial Reporting in the Modern Business Environment";
	$keyfacts_programme = '
      <table class="table">
          <tr>
            <th colspan="2" class="keytitle foundry_bold">Key Facts</th>
          </tr>
          <tr class="foundry_light">
            <th>Duration</th>
            <td>1 year / 3 terms</td>
          </tr>
          <tr class="foundry_light">
            <th>Language</th>
            <td>English</td>
          </tr>
          <tr class="foundry_light">
            <th>Credits</th>
            <td>90 ECTS</td>
          </tr>
          <tr class="foundry_light">
            <th>Location</th>
            <td>Paris - France</td>
          </tr>
          <tr class="foundry_light">
            <th>Intakes</th>
            <td>September</td>
          </tr>
        </table>
  ';
}

//MSc in Banking and Capital Markets
if(is_page(21849) || custom_is_child(21849) || $cat_testi[0]->term_id==126){
	$sidebar_a_acharger['global']="msc";
	$sidebar_a_acharger['section']="msc_banking_capital_markets";
	$id_cat_testimonials = 126;	
	$punchline_programme="Deepen your Expertise in Capital Markets";
	$keyfacts_programme = '
      <table class="table">
          <tr>
            <th colspan="2" class="keytitle foundry_bold">Key Facts</th>
          </tr>
          <tr class="foundry_light">
            <th>Duration</th>
            <td>1 year / 3 terms</td>
          </tr>
          <tr class="foundry_light">
            <th>Language</th>
            <td>English</td>
          </tr>
          <tr class="foundry_light">
            <th>Credits</th>
            <td>90 ECTS</td>
          </tr>
          <tr class="foundry_light">
            <th>Location</th>
            <td>Lille - France</td>
          </tr>
          <tr class="foundry_light">
            <th>Intakes</th>
            <td>September</td>
          </tr>
        </table>
  ';
}
//MSc in Big Data Analytics for Business
if(is_page(21911) || custom_is_child(21911)){
	$sidebar_a_acharger['global']="msc";
	$sidebar_a_acharger['section']="msc_bigdata";	
	$id_cat_testimonials = 125;
	$punchline_programme="Optimize Managerial Decision Making through Big Data Analytics";
	$keyfacts_programme = '
      <table class="table">
          <tr>
            <th colspan="2" class="keytitle foundry_bold">Key Facts</th>
          </tr>
          <tr class="foundry_light">
            <th>Duration</th>
            <td>1 year / 3 terms</td>
          </tr>
          <tr class="foundry_light">
            <th>Language</th>
            <td>English</td>
          </tr>
          <tr class="foundry_light">
            <th>Credits</th>
            <td>90 ECTS</td>
          </tr>
          <tr class="foundry_light">
            <th>Location</th>
            <td>Lille - France</td>
          </tr>
          <tr class="foundry_light">
            <th>Intakes</th>
            <td>September</td>
          </tr>
        </table>
  ';
}
//MSc in International Business Negotiation
if(is_page(21935) || custom_is_child(21935) || $cat_testi[0]->term_id==120){
	$sidebar_a_acharger['global']="msc";
	$sidebar_a_acharger['section']="msc_negociation";	
	$id_cat_testimonials = 120;
	$punchline_programme="Effectively Negotiate in Multiple Contexts";
	$keyfacts_programme = '
      <table class="table">
          <tr>
            <th colspan="2" class="keytitle foundry_bold">Key Facts</th>
          </tr>
          <tr class="foundry_light">
            <th>Duration</th>
            <td>1 year / 3 terms</td>
          </tr>
          <tr class="foundry_light">
            <th>Language</th>
            <td>English</td>
          </tr>
          <tr class="foundry_light">
            <th>Credits</th>
            <td>90 ECTS</td>
          </tr>
          <tr class="foundry_light">
            <th>Location</th>
            <td>Paris - France</td>
          </tr>
          <tr class="foundry_light">
            <th>Intakes</th>
            <td>September</td>
          </tr>
        </table>
  ';
}


//--------------------PGE--------------------------
if(is_page(9782) || custom_is_child(9782)){ //PGE FR
	$sidebar_a_acharger['global']="pge";	
	$punchline_programme="Effectively Negotiate in Multiple Contexts";
	$id_cat_testimonials = 104;
	$keyfacts_programme = '<table class="table">
          <tr>
            <th colspan="2" class="keytitle foundry_bold">Informations</th>
          </tr>
          <tr class="foundry_light">
            <th>Durée</th>
            <td>5 ans</td>
          </tr>
          <tr class="foundry_light">
            <th>Langue</th>
            <td>Anglais - (Français possible les 2 premières années)</td>
          </tr>
          <tr class="foundry_light">
            <th>Credits</th>
            <td>300 ECTS</td>
          </tr>
          <tr class="foundry_light">
            <th>Lieu</th>
            <td>Lille ou Paris</td>
          </tr>
          <tr class="foundry_light">
            <th>Rentrée</th>
            <td>Septembre</td>
          </tr>
        </table>
  ';
}
//--------------------RECHERCHE--------------------------
if(
(is_page(18853) || custom_is_child(18853)) //12th Corporate FinanceDay
|| (is_page(21007) || custom_is_child(21007)) //Brics
|| (is_page(19069) || custom_is_child(19069)) //Research Day in Accounting
|| (is_page(19762) || custom_is_child(19762)) //Workshop Lies Bouten
|| (is_page(20450) || custom_is_child(20450)) //Workshop MIFN
|| (is_page(20925) || custom_is_child(20925)) //Course in Applied Empirical Analysis in Economics and Finance
|| (is_page(24376) || custom_is_child(24376)) //2015 ILM Conference
|| (is_page(2089) || custom_is_child(2089)) //Recherche FR
){
	$sidebar_a_acharger['global']="recherche";
	
	//12th Corporate FinanceDay
	if(is_page(18853) || custom_is_child(18853)){
		$sidebar_a_acharger['section']="12th_corporate";
	}
	
	//Brics
	if(is_page(21007) || custom_is_child(21007)){
		$sidebar_a_acharger['section']="brics";
	}
	
	//Research Day in Accounting
	if(is_page(19069) || custom_is_child(19069)){
		$sidebar_a_acharger['section']="rdia";
	}
	
	//Workshop Lies Bouten
	if(is_page(19762) || custom_is_child(19762)){
		$sidebar_a_acharger['section']="bouten";
	}
	
	//Workshop MIFN
	if(is_page(20450) || custom_is_child(20450)){
		$sidebar_a_acharger['section']="mifn";
	}
	
	//Course in Applied Empirical Analysis in Economics and Finance
	if(is_page(20925) || custom_is_child(20925)){
		$sidebar_a_acharger['section']="applied_empirical";
	}
	
	//2015 ILM Conference
	if(is_page(24376) || custom_is_child(24376)){
		$sidebar_a_acharger['section']="2015_ilm";
	}
	
	//Recherche FR
	if(is_page(2089) || custom_is_child(2089)){
		$sidebar_a_acharger['section']="recherche-fr";
	}
}
//--------------------SUMMER--------------------------
if(is_page(23503) || custom_is_child(23503)){
	$sidebar_a_acharger['global']="summer";
	$sidebar_a_acharger['section']="fashion_summer";
}
//French culture spring session
if(is_page(19894) || custom_is_child(19894)){
	$sidebar_a_acharger['global']="summer";
	$sidebar_a_acharger['section']="french_culture";
}


?>