<?php get_template_part('templates/head'); ?>
<link rel="stylesheet" href="<?php get_stylesheet_directory_uri(); ?>/assets/css/budicons.css">
<body <?php body_class(); ?> id="body_new2016theme">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    <div class="call-to-action-box ctab-mobilelp-padding fullscreen-bg escalator-video">
      <video loop muted autoplay poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/iqmetrix/video-poster.jpg" class="fullscreen-bg__video">
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/iqmetrix/iqmetrix-video.webm" type="video/webm">
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/iqmetrix/iqmetrix-video.mp4" type="video/mp4">
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/iqmetrix/iqmetrix-video.ogv" type="video/ogg">
      </video>
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center col-md-offset-3">

                <h3 style="color:white;font-family: proxima_novalight;font-size: 29px;margin-bottom: 0;">The holidays are here.</h3>
                <h1 style="color:white;font-weight:900;margin-top: 0;">Are you ready?</h1>
                <p class="lead">Cut out the chaos and take on this season with confidence using data insights and video intelligence.</p>
                <button type="button" class="cta-btn cta-btn-lg orange" data-toggle="modal" data-target="#learn_more_modal">Learn More&hellip;</button>
                <br>
                <br>
                <a href="#feelyourpain" class="smooth_scroll" style="font-size:60px"><i class="fa fa-inverse fa-angle-down"></i><span id="feelyourpain"></span></a>

          </div>
        </div>
      </div>
    </div>
  </div>
  <span ></span>
  <div class="wrap more_padding dark_blue_wrap">
    <div class="container">
      <div class="col-sm-9 col-centered feature-grid">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center pn_light bluetext larger">We feel your pain.</h2>
            <p class="text-center padded">Between cranking out promotions, getting temp staff up and running, and preparing for the inevitable onslaught of foot traffic, the holidays can feel heinous. We understand how important it is to make the most of the holidays, which is why Envysion &amp; iQmetrix are teaming up to provide helpful resources so you can <span class="orangetext">#SurviveTheSeason</span> like a pro.</p>
            <div class="text-center">
              <img src="<?php get_stylesheet_directory_uri(); ?>/assets/img/iqmetrix/iqmetrix-plus-envysion-white.png" style="margin:10px 0;">
            </div>
          </div>
        </div>
      </div>
      <!--
      <div class="col-sm-12 col-centered feature-grid text-center">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="resource_widget text-center">
              <h3 class="bluetext pn_light">Some Resource PDF or case study</h3>
              <hr>
              <a href="#" class="cta-btn cta-btn-lg orange" style="border-left:none;">Read More&hellip;</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="resource_widget text-center">
              <h3 class="bluetext pn_light">Some External Blog Article</h3>
              <hr>
              <a href="#" class="cta-btn cta-btn-lg orange" style="border-left:none;">Read More&hellip;</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="resource_widget text-center">
              <h3 class="bluetext pn_light">Some Resource PDF or otherwise</h3>
              <hr>
              <a href="#" class="cta-btn cta-btn-lg orange" style="border-left:none;">Read More&hellip;</a>
            </div>
          </div>
        </div>
      </div>
      -->
    </div>
  </div>
  <!--
  <div class="gray_wrap more_padding webinar_cta_wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-md-offset-1">
          <div class="webinar_attract">
            <h3>FREE LIVE WEBINAR</h3>
            <h2 class="bluetext pn_light"><a href="https://attendee.gototraining.com/r/8153718025708558338">Using Video Intelligence to Boost Sales and Ensure an Awesome Customer Experience this Holiday Season</a></h2>
            <h4>with Qwynn McDowell</h4>
            <a href="https://attendee.gototraining.com/r/8153718025708558338" class="giant_button">REGISTER</a>
          </div>
        </div>
        <div class="col-md-3 webinar_summary">
          <strong>Learn how you can:</strong>
          <ul>
            <li>Offer an excellent customer experience</li>
            <li>Prevent theft and fraud interally</li>
            <li>Stop order-taking and maximize opportunities</li>
            <li>Improve coaching and accountability</li>
            <li>Improve policy and procedure compliance</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  -->
  <div class="wrap more_padding">
    <div class="container">
      <div class="col-sm-10 col-centered feature-grid">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Gain More Revenue, More Time, and a Better-Monitored Staff</h2>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-centered feature-grid">
        <div class="row">
          <div class="col-md-6">
            <div class="text-center">
              <i class="material-icons big-orange-icon-circle">remove_red_eye</i>
              <h4>Gain Complete Visibility</h4>
              <p>Are employees offering great customer experiences? Perform look-ins by individual store or across multiple locations at once.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="text-center">
              <i class="fa fa-signal big-orange-icon-circle"></i>
              <h4>Boost Sales</h4>
              <p>See beyond the numbers to understand the drivers that increase sales with exception reports and operational audits.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="text-center">
              <i class="material-icons big-orange-icon-circle">lock_outline</i>
              <h4>Reduce Theft &amp; Fraud</h4>
              <p>Prevent theft and fraud internally and externally during the most high-risk time of the year for retail.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="text-center">
              <i class="material-icons big-orange-icon-circle">ondemand_video</i>
              <h4>Coach to Behaviors</h4>
              <p>Receive notifications of missed opportunities and use actual video footage to help coach and train your staff to boost sales.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="quote_carousel_1" class="carousel fade quote-carousel">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2 class="pn_light no_bottom_margin" style="font-size:29px;margin-top:25px;">What our users are saying:</h2>
        </div>
      </div>
    </div>
    <!-- Indicators -->
    <!--
    <ol class="carousel-indicators">
      <li data-target="#quote_carousel_1" data-slide-to="0" class="active"></li>
      <li data-target="#quote_carousel_1" data-slide-to="1"></li>
      <li data-target="#quote_carousel_1" data-slide-to="2"></li>
      <li data-target="#quote_carousel_1" data-slide-to="3"></li>
    </ol>
    -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">


      <div class="item weird_height active">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-centered text-center">
              <h2 class="quote">Envysion helps me maximize every foot of floor space, which is really helpful when it comes to moving accessories and other high-margin items."</h2>
              <p class="attrib">Attique Rasheed, Head of Training &amp; Operations - AT&amp;T Portables</p>
            </div>
          </div>
        </div>
      </div>
      <!--
      <div class="item weird_height">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-centered text-center">
              <h2 class="quote">If you have a thief stealing on the drive-thru, with this system they are going to get caught."</h2>
              <p class="attrib">Alex Salgueiro - Savannah Restaurants, Corp.</p>
            </div>
          </div>
        </div>
      </div>
      -->

    </div>
    <!-- Left and right controls -->
    <!--
    <a class="left carousel-control" href="#quote_carousel_1" role="button" data-slide="prev">
      <span class="fa fa-angle-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#quote_carousel_1" role="button" data-slide="next">
      <span class="fa fa-angle-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    -->
  </div>

  <div class="modal fade modal_white_form" id="learn_more_modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Complete the form below to learn how video can you can boost sales, reduce theft, and streamline operations.</h4>
        </div>
        <div class="modal-body">
          <?php
            if(function_exists('gravity_form')):
              //gravity_form( 1, false, false, false, null, true, 150 ); //(for development instance on localhost)
              gravity_form( 3, false, false, false, null, true, 150 );
            endif;
          ?>

        </div>
        <div class="modal-footer">
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->




  <?php get_template_part('templates/footer'); ?>
  </div>
</body>
</html>
