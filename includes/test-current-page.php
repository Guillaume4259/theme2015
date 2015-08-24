<?php
$sidebar_a_acharger=array();


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
//--------------------BACHELORS--------------------------
if(is_page(18322) || custom_is_child(18322)){ 
	$sidebar_a_acharger['global']="bachelors";
	$sidebar_a_acharger['section']="bachelor-international-business";	
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
//--------------------IMBA--------------------------
if(is_page(17148)){
	$sidebar_a_acharger['global']="imba";	
}

//--------------------MSC--------------------------

//Page Accueil MSc
if(is_page(554)){
	$sidebar_a_acharger['global']="msc";
	$sidebar_a_acharger['section']="msc_accueil";	
}

//MIB
if(is_page(17155) || custom_is_child(17155)){
	$sidebar_a_acharger['global']="mib";
	//$sidebar_a_acharger['section']="mib_accueil";	
	if(is_page($page_mib_program->ID)){
		$sidebar_a_acharger['global']="mib";
		$sidebar_a_acharger['section']="mib_program";			
	}
}
//MSc in Fashion Management
if(is_page(10873) || custom_is_child(10873)){
	$sidebar_a_acharger['global']="msc";
	$sidebar_a_acharger['section']="msc_fashion";	
}

//MSc Digital Marketing
if(is_page(17340) || custom_is_child(17340)){
	$sidebar_a_acharger['global']="msc";
	$sidebar_a_acharger['section']="msc_digital";	
}

//MSc in Business Analysis and Consulting
if(is_page(17394) || custom_is_child(17394)){
	$sidebar_a_acharger['global']="msc";
	$sidebar_a_acharger['section']="msc_business_analysis";	
}

//MSc in Finance
if(is_page(17445) || custom_is_child(17445)){
	$sidebar_a_acharger['global']="msc";
	$sidebar_a_acharger['section']="msc_finance";	
}

//MSc in Accounting
if(is_page(17417) || custom_is_child(17417)){
	$sidebar_a_acharger['global']="msc";
	$sidebar_a_acharger['section']="msc_accounting";	
}

//MSc in Banking and Capital Markets
if(is_page(21849) || custom_is_child(21849)){
	$sidebar_a_acharger['global']="msc";
	$sidebar_a_acharger['section']="msc_banking_capital_markets";	
}
//MSc in Big Data Analytics for Business
if(is_page(21911) || custom_is_child(21911)){
	$sidebar_a_acharger['global']="msc";
	$sidebar_a_acharger['section']="msc_bigdata";	
}
//MSc in Negotiation for Organizations
if(is_page(21935) || custom_is_child(21935)){
	$sidebar_a_acharger['global']="msc";
	$sidebar_a_acharger['section']="msc_negociation";	
}


//--------------------PGE--------------------------
if(is_page(18085)){ //PGG 3ème année
	$sidebar_a_acharger['global']="pge";	
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