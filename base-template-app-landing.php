<?php get_template_part('templates/head'); ?>

<body <?php body_class(); ?> id="body_new2016theme">

  <!--[if lt IE 8]><div class="alert alert-warning"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
  <div id="main_wrap">
    <div class="call-to-action-box ctab-mobilelp-padding" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bokeh.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-xs-12 col-sm-offset-1">
            <div class="row">
              <div class="col-md-7 col-md-push-5 text-center even_more_bottom_margin more_top_margin">
                <h2>Complete visibility<br><strong>on the go</strong></h2>
                <p class="lead">Our elegantly simple mobile interface makes keeping up with your stores' performance easier than ever before. </p>
                <a href="https://itunes.apple.com/us/app/envysion/id1097606625?ls=1&mt=8" class="app-store-btn" title="Download Envysion Mobile App in iOS App Store">
                  <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mobileapp/ios-store-btn.png" alt="Download Envysion Mobile App in iOS App Store">
                </a>
              </div>
              <div class="col-md-5 col-md-pull-7 text-center">
                <div id="iosScreenCarouselWrap">
                  <div id="iosScreenCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mobileapp/screen1.png">
                      </div>

                      <div class="item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mobileapp/screen2.png">
                      </div>

                      <div class="item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mobileapp/screen3.png">
                      </div>

                      <div class="item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mobileapp/screen4.png">
                      </div>
                      
                      <div class="item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mobileapp/screen5.png">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="gray_wrap">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <h3 class="text-center more_bottom_margin larger pn_light">You can't physically be in each of your stores to oversee day-to-day operations&mdash;but Envysion can.</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="wrap more_padding">
    <div class="container">
      <div class="col-sm-10 col-centered feature-grid">
        <div class="row">
          <div class="col-md-6">
            <div class="text-center">
              <i class="fa fa-eye fa-fw orangetext feature-icon"></i>
              <h3>Enjoy complete visibility</h3>
              <p>Are employees following best practices? Perform look-ins by individual store or across multiple locations at once.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="text-center">
              <i class="fa fa-search fa-fw orangetext feature-icon"></i>
              <h3>Drill deeper</h3>
              <p>Jump back to review a questionable incident by searching across locations, cameras, or even by day and time.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="text-center">
              <i class="fa fa-check-square-o fa-fw orangetext feature-icon"></i>
              <h3>Take action</h3>
              <p>Easily pinpoint interactions that need attention and share an instant snapshot with anyone on your team to make impactful improvements.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="text-center">
              <i class="fa fa-arrows-alt fa-fw orangetext feature-icon"></i>
              <h3>Maximize 360&deg; views</h3>
              <p>Get the most from your 360&deg; cameras by dewarping views with simple gestures.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <hr>
        <h2 class="bluetext pn_light more_bottom_margin">What our users are saying:</h2>
      </div>
    </div>
  </div>
  
  <div id="quote_carousel_1" class="carousel fade quote-carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#quote_carousel_1" data-slide-to="0" class="active"></li>
      <li data-target="#quote_carousel_1" data-slide-to="1"></li>
      <li data-target="#quote_carousel_1" data-slide-to="2"></li>
      <li data-target="#quote_carousel_1" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      

      <div class="item active">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-centered text-center">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clientlogos/ntouch-wireless.png">
              <h2 class="quote">It's super user friendly and straight­forward. I can easily drag my finger across the timeline and move all cameras at the same time."</h2>
              <p class="attrib">Jeremy Roberts, Director of Operations at NTouch Wireless</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="item">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-centered text-center">
              <img width="190" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clientlogos/chipotle-logo-white.png">
              <h2 class="quote">Now I can be in 5 places at once!"</h2>
              <p class="attrib">Ulises Dubon, Team Director at Chipotle</p>
            </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-centered text-center">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clientlogos/client_logo_tacobell.png">
              <h2 class="quote">I can quickly pull up sites and use live data to increase operational efficiency while I'm on the road."</h2>
              <p class="attrib">Jason Zakaras, Director of Operations at Zak Family Foods</p>
            </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-centered text-center">
              <img width="190" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clientlogos/chipotle-logo-white.png">
              <h2 class="quote">I can instantly review footage with my staff and coach them. It's like reviewing tape in the middle of the game. And the scrubber timeline is just awesome."</h2>
              <p class="attrib">Matt Dittoe, Restaurant General Manager at Chipotle</p>
            </div>
          </div>
        </div>
      </div>


    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#quote_carousel_1" role="button" data-slide="prev">
      <span class="fa fa-angle-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#quote_carousel_1" role="button" data-slide="next">
      <span class="fa fa-angle-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  <div class="wrap more_padding">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center more_bottom_margin">
          <h2 class="orangetext">Install Now</h2>
          <a href="https://itunes.apple.com/us/app/envysion/id1097606625?ls=1&mt=8" class="app-store-btn" title="Download Envysion Mobile App in iOS App Store">
            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mobileapp/ios-store-btn.png" alt="Download Envysion Mobile App in iOS App Store">
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--
  <div class="blurry_wrap" style="padding-bottom:25px;">
    <div class="container">
      <div class="row padded">
        <div class="col-sm-8 col-centered text-center padded">
          <h2 class="text-center">Have an Android device?</h2>
          <h3 class="text-center no_top_margin pn_light">Don't worry - we've got an app for you in the works!<br><a href="#" class="orangetext">Click here</a> to receive updates on the upcoming release.</h3>
        </div>
      </div>
    </div>
  </div>
  -->       

  <?php get_template_part('templates/footer'); ?>
  </div>
</body>
</html>
