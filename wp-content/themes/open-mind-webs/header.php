<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title();?></title>
        <meta property="og:description" content="Open Mind Webs - The personal site of front end developer, Matt Tarter. Contact me today to obtain your business goals through the web with a professionally developed website!" />
        <meta property="og:image" content="http://openmindwebs.com/img/work-desk.jpg" />        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <?php wp_head(); ?>
    </head>
    <body>
      <!--[if lte IE 8]><script src="/js/ie6/warning.js"></script><script>window.onload=function(){e("js/ie6/")}</script><![endif]-->
        <nav id="main-nav">
          <div class="container">
                <div class="row">
                     <a href="index.html">
                        <div class="col-sm-offset-3 col-md-offset-0 col-md-4 col-lg-4" id="logo">
                            <img class="img-responsive p-vert-5 inline-block" id="header-img" alt="Open Mind Webs logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
                            <p class="m-0 p-vert-35 text-center" id="header-slogan">
                                <span style="font-size:1.2em"><strong>OPEN MIND WEBS</strong></span><br><i>Bring Your Ideas To Life</i>
                            </p>
                        </div>
                    </a>
                    <div class="col-md-8 col-lg-8">
                        <!-- Begin Nav Menu !-->
                        <?php 
                            $defaults = array(
                                'container' => 'ul',
                                'menu_id' => 'menu',
                            );
                            wp_nav_menu($defaults);
                        ?>
                        <!-- End Nav Menu !-->
                    </div>
                </div>
            </div>
        </nav>