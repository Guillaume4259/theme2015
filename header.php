<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 8]><!--><html <?php language_attributes(); ?>> <!--<![endif]--><head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<title><?php wp_title(''); ?></title>
    <meta name="author" content="IESEG School of Management" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="<?php echo get_template_directory_uri(); ?>js/html5shiv.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>js/respond.min.js"></script>
	<![endif]-->
    <?php wp_head(); ?>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-300186-3']);
		_gaq.push(['_trackPageview']);	
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
							ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
							var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
		</script>
        
         <?php if (is_page ( array( 'mib-class-profile', 'mfm-student-profiles', 'msc-digital-marketing-crm-class-profile', 'msc-business-analysis-consulting-class-profile', 'msc-accounting-audit-control', 'msc-finance-class-profile', 'msc-banking-capital-markets-class-profile', 'msc-in-negotiation-for-organizations-class-profile', 'msc-big-data-analytics-business-class-profile','imba-class-profile')) )?>
    	<script type="text/javascript" src="https://www.google.com/jsapi"></script>	
</head>   
<body <?php body_class(); ?> id="<?php echo get_locale();?>">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45279853-8', 'auto');
  ga('send', 'pageview');

</script>
<div id="container-global">    
<header>
	<div id="barre-top">
    	<div class="container-fluid container-1600">
            <div class="row" style="position:relative;">
                <a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 18286, 'page' ));?>" class="logos-accreditations pull-left" title="<?php _e("Our accreditations","ieseg2015") ?>"></a> 
                
                <div class="btn-search pull-right"><span class="glyphicon glyphicon-search"></span></div>
                <div class="container-search-header">
                    <?php get_search_form(); ?>
                </div>
                <div class="conteneur_selecteur_flags pull-right">
                    <?php do_action('icl_language_selector'); ?>
                </div>
                <nav class="menu-cibles pull-right hidden-xs">
                    <!-- HEADER NAVIGATION -->
                    <?php wp_nav_menu( array(
                          'theme_location'  => 'header2015',
                          'menu'            => '', 
                          'container'       => '', 
                          'container_class' => '', 
                          'container_id'    => '',
                          'menu_class'      => '', 
                          'menu_id'         => '',
                          'echo'            => true,
                          'fallback_cb'     => 'wp_page_menu',
                          'before'          => '',
                          'after'           => '',
                          'link_before'     => '',
                          'link_after'      => '',
                          'items_wrap'      => '<ul class="menu">%3$s</ul>',
                          'depth'           => 1
                       ) );
                    ?>                            
                </nav>
            </div>
		</div>
	</div>
    <div class="container-fluid barre-deco" >
        <div class="row">
            <div class="deco bg-orange1"></div>
            <div class="deco bg-orange2"></div>
            <div class="deco bg-jaune"></div>
            <div class="deco bg-bleu"></div>
            <div class="deco bg-bleu-ciel"></div>
            <div class="deco bg-rouge"></div>
            <div class="deco bg-corail"></div>
            <div class="deco bg-rose"></div>
            <div class="deco bg-violet"></div>
            <div class="deco bg-vert-canard"></div>
        </div>
    </div> 

    <div class="container-fluid container-1600 container-main-nav clearfix" role="main">
    	<div class="row">
        <a href="<?php home_url(); ?>" title="IÉSEG School Of Management" id="header-logo">IÉSEG School Of Management, école de commerce post-bac à Lille et Paris</a>
     
            <!-- MAIN NAVIGATION -->
            <?php wp_nav_menu( array(
                  'theme_location'  => 'Primary Menu 2015',
                  'menu'            => '', 
                  'container'       => 'nav', 
                  'container_class' => 'menu-principal collapse navbar-collapse navbar-ex1-collapse', 
                  'container_id'    => 'mainNav',
                  'menu_class'      => 'navbar-nav', 
                  'menu_id'         => 'pouet',
                  'echo'            => true,
                  'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                  'before'          => '',
                  'after'           => '',
                  'link_before'     => '<span><span class="link-inner">',
                  'link_after'      => '</span></span>',
                  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'depth'           => 2,
				  //'walker' => new wp_bootstrap_navwalker()
                  //'walker' => new Walker_Page_Mainnav
               ) );
            ?> 
 			</div>
      </div>    
</header>