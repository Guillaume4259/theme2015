<?php
$msc_marketing_punchline = 'Become a digital expert';
$msc_mib_punchline = 'Manage Organizations in a Global Environment';
$msc_fashion_punchline = 'Where fashion meets management';
$msc_business_analysis_punchline = 'Translate Strategic Plans into Tangible Performance';
$msc_accounting_punchline = 'Explore the Importance of Financial Reporting
in the Modern Business Environment';
$msc_finance_punchline = 'Enhance your Understanding of Financial Mechanisms';
$msc_banking_punchline = 'Deepen your Expertise in Capital Markets';
$msc_negotiation_punchline = 'Effectively Negotiate in Multiple Contexts';
$msc_big_data_punchline = 'Optimize Managerial Decision Making through Big Data Analytics';
$imba_punchline = 'Sharpen your skills for the Global Market';
$pge_punchline_fr = 'En attente de la Punchline';

if(is_page(17340) || custom_is_child(17340))//msc Marketing & CRM ENG
	{
		echo $msc_marketing_punchline;			
	}
elseif(is_page(17155) || custom_is_child(17155)) //MIB ENG
	{
		echo $msc_mib_punchline;			
	}
elseif(is_page(10873) || custom_is_child(10873)) //Msc Fashion Management ENG
	{
		echo $msc_fashion_punchline;			
	}
elseif(is_page(17394) || custom_is_child(17394)) //Msc Business Analysis ENG
	{
		echo $msc_business_analysis_punchline;			
	}
elseif(is_page(17417) || custom_is_child(17417)) //Msc Accounting ENG
	{
		echo $msc_accounting_punchline;			
	}
elseif(is_page(17445) || custom_is_child(17445)) //Msc Finance ENG
	{
		echo $msc_finance_punchline;			
	}
elseif(is_page(21849) || custom_is_child(21849)) //Msc Banking and Capital Markets ENG
	{
		echo $msc_banking_punchline;			
	}
elseif(is_page(21935) || custom_is_child(21935)) //Msc Negotiation for Organizations ENG
	{
		echo $msc_negotiation_punchline;			
	}
elseif(is_page(21911) || custom_is_child(21911)) //Msc Big Data Analytics for Business ENG
	{
		echo $msc_big_data_punchline;			
	}
elseif(is_page(17148) || custom_is_child(17148)) // IMBA ENG
	{
		echo $imba_punchline;			
	}
elseif(is_page(9782) || custom_is_child(9782)) // PGE FR
    {
    echo $pge_punchline_fr;     
    }
?>


