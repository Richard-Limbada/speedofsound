<head>
    <meta <?php language_attributes(); ?>>
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
  </head>



  <body id="page-top" <?php body_class(); ?>>
      
      
      
     <!-- Navigation -->
  
        <div class="topnav" id="myTopnav">
            <a class="logo navbar-brand js-scroll-trigger" href="#page-top"><?php the_custom_logo(); ?></a>
            <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
            <span class="right">
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                </span>

        </div>

          
                  
      
      
 