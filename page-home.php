

<?php get_header(); ?>
</header>

    <!-- Hero Area -->
    <div class="hero_area">
       <div class="row" style="margin-left: 0; margin-right: 0;">
           <div class="hero col-xs-12">
                <div class="hero_pic col-xs-12">
                    <img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/assets/images//hero.jpg" />
                </div>
                <div class="tagline col-xs-12 animated fadeInLeft">
                    <img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/assets/images//tagline.png" />
                </div>
           </div>
        </div>
    </div>
    <!-- Hero ends -->

 <!-- Search Area begins -->
    <div class="search_area_overlay">
        <div class="search_area">
            <div class="container-fluid">
                <!-- form -->
                <?php if ( is_active_sidebar( 'quick_search_widget_area' ) ) : ?>
                    <?php dynamic_sidebar( 'quick_search_widget_area' ); ?>
                <?php endif; ?>
               <!-- form end -->
            </div>
        </div>
    </div>
<!-- Search Area ends -->
    
      <!-- RV Bar begins -->

    <div class="rv_bar_area">
        <div class="container-fluid">
            <div class="row" style="margin-right:0px; margin-left:0px;">
               <h3>Choose Your RV Type</h3>
                <div class="cta col-xs-6 col-sm-3">
                    <ul>
                       <li><img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/assets/images//class_a.png" alt="Class A"></li>
                       <li>
                            <a href="#">
                                <div class="cta_text_overlay">
                                    <div class="cta_text">
                                       Class A
                                    </div>
                                </div>
                            </a>
                       </li> 
                    </ul>
                </div>
                
                 <div class="cta col-xs-6 col-sm-3">
                    <ul>
                       <li><img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/assets/images//class_c.png" alt="Class A"></li>
                       <li>
                            <a href="#">
                                <div class="cta_text_overlay">
                                    <div class="cta_text">
                                       Class C
                                    </div>
                                </div>
                            </a>
                       </li> 
                    </ul>
                </div>
                
                 <div class="cta col-xs-6 col-sm-3">
                    <ul>
                       <li><img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/assets/images//fifth_wheel.png" alt="Class A"></li>
                       <li>
                            <a href="#">
                                <div class="cta_text_overlay">
                                    <div class="cta_text">
                                       Fifth Wheel
                                    </div>
                                </div>
                            </a>
                       </li> 
                    </ul>
                </div>
                
                 <div class="cta col-xs-6 col-sm-3">
                    <ul>
                       <li><img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/assets/images//travel_trailer.png" alt="Class A"></li>
                       <li>
                            <a href="#">
                                <div class="cta_text_overlay">
                                    <div class="cta_text">
                                       Travel Trailer
                                    </div>
                                </div>
                            </a>
                       </li> 
                    </ul>
                </div>
               
            </div>
        </div>
     </div>
    <!-- RV Bar ends -->
    
    <!-- Dealer_content start -->
    <div class="dealer_content_area">
        <div class="container-fluid">
            <div class="row" style="margin-right:0px; margin-left:0px;">
                <div class="dealer_content col-xs-12 col-md-6 col-lg-12">
                    <h2>Our Company</h2>
                    <h3>New Sales and Stand Out Deals</h3>
                    <p>RV Demo One has been doing business since 1979. We may have expanded our location in 1993, but we still believe in doing business the same way we did when we opened the doors of our original shop.
                    That's why when you buy an RV from RV Demo One, you aren't just getting a great vehicle, you're also getting a friend.
                    Find your next RV and start your own exciting adventure!</p>
                </div>
                
                <div class="cta_box col-xs-12 col-md-6">
                    <a href="#"><div class="cta_btn">
                        <div class="cta_heading">
                            <h1>Services</h1> 
                            <img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/assets/images//services.jpg">
                        </div>
                        
                    </div></a>
                </div>
                
                <div class="cta_box col-xs-12 col-md-6">
                    <a href="#"><div class="cta_btn">
                        <div class="cta_heading">
                            <h1>Parts</h1> 
                            <img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/assets/images//parts.jpg">
                        </div>
                        
                    </div></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Dealer_content ends -->
    
    <!-- Featured Inventory Area starts -->
    <div class="featured_area">
        <div class="container">
            <div class="featured_heading">
                <div class="row" style="margin-right: 0px; margin-left: 0px;">
                    <div class="heading_text col-xs-12">
                        <h2>RV Specials</h2></div>
                </div>
            </div>

            <div class="featured_inventory">
            <!-- featured inventory widget area -->
              <?php if (is_front_page() ) : ?>
                  <?php if ( is_active_sidebar( 'featured_inventory_widget_area' ) ) : ?>
                    <?php dynamic_sidebar( 'featured_inventory_widget_area' ); ?>
                  <?php endif; ?>
              <?php endif; ?>
            <!-- end widget area -->
            </div>
        </div>
    </div>

<!-- Featured Inventory Area ends -->

<?php get_footer(); ?>
