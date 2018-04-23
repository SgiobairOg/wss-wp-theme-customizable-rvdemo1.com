<!doctype html>
<html>
  <head>

<!-- Title -->
    <TITLE><?php wp_title(); ?></title>

<!-- Meta Tags -->
    <meta property="og:url" content="<?php bloginfo( 'url' ); ?>"/>
    <meta property="og:image" content="Empty"/>
    <meta property="og:title" content="<?php wp_title(); ?>"/>
    <meta property="og:description" content="<?php bloginfo( 'description' ); ?>"/>
    <meta name="rating" content="General">
    <meta name="robots" content="index,follow">
    <meta name="GOOGLEBOT" content="index,follow">

<!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="canonical" href="<?php bloginfo( 'url' ); ?>">
    <link rel="alternate" media="only screen and (max-width: 1024px)" href="<?php bloginfo( 'url' ); ?>">

<!-- jQuery 1.9.1 -->
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  COMMENTED FOR CURRENCY - Roll back if version errors -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    
<!-- Font-Awesome 4.6.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Font Call-Ins-->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
     <link href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
  <!-- or -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

  <!-- Bootstrap call-ins PROBABLY DONE ELSEWHERE 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->

<!-- Additional CSS -->
<!--    <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/additional.css" rel="stylesheet" type="text/css"> -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css">

<!-- WordPress Head Includes -->
<?php wp_head(); ?>

 </head>
<body>
   <?php if(is_front_page()) :?>
      <div class="whole"> 
  <?php endif; ?>

   <?php if(!is_front_page()) :?>
        <div class="detail_whole">
          
      <?php endif; ?>
    <!-- Header starts -->

    <div class="nav_area_overlay">
    <div class="nav_area">

        <div class="nav_bar">
            <div id="main-nav-wrapper">
              <div id="navbar">
                  <div id="menuBtn" class="visible-xs">
                      <a href="#"></a>
                  </div>

                      <nav class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                          <div class="row" style="margin-left: 0; margin-right: 0;">
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                             
                            </div>
                            <?php 
                            wp_nav_menu( array(
                              'menu'              => 'primary',
                              'theme_location'    => 'primary',
                              'depth'             => 2,
                              'container'         => 'div',
                              'container_class'   => 'collapse navbar-collapse',
                              'container_id'      => 'bs-example-navbar-collapse-1',
                              'menu_class'        => 'nav navbar-nav',
                              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                              'walker'            => new WP_Bootstrap_Navwalker())
                            );
                            ?>
                          </div>
                        </div>
                      </nav>

              </div>
              <div class="spacer"></div>
            </div>
        </div>

    </div>
    </div>
   
    <div class="header_area">
        <div class="container-fluid">
            <div class="row" style="margin-left: 0; margin-right: 0;">
                <div class="header_logo col-xs-12 col-sm-4">
                    <a href="/"><img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/assets/images//logo.png" /></a>
                </div>
                
                <div class="header_info col-xs-12 col-sm-8">
                    <p><a href="#"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> 467 Quart Rd  Norfolk, VA 23431</a></p>
                    <p><a href="tel:8004072339"><span><i class="fa fa-phone" aria-hidden="true"></i></span> (800) 407-2339</a></p>
                </div>
            </div>
        </div>
    </div>

        <!-- Duplication -->
</div>
    <?php if(is_front_page()) :?>
     <div class="header_area2">
     <?php endif; ?>
    
    <?php if(!is_front_page()) :?>
        <div class="detail_header_area2">
          
      <?php endif; ?>



        <div class="container-fluid">
            <div class="row" style="margin-left: 0; margin-right: 0;">
                <div class="header_logo col-xs-12 col-sm-4">
                    <a href="/"><img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/assets/images//logo.png" /></a>
                </div>
                
                <div class="header_info col-xs-12 col-sm-8">
                    <p><a href="#"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> 467 Quart Rd  Norfolk, VA 23431</a></p>
                    <p><a href="tel:8004072339"><span><i class="fa fa-phone" aria-hidden="true"></i></span> (800) 407-2339</a></p>
                </div>
            </div>
        </div>
    </div> 

  <?php if(!is_front_page()) :?>
     <div class="cover container-fluid">
     <?php endif; ?>
    <!-- Header ends -->

