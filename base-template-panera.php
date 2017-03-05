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
  <div id="main_wrap" style="background-size:cover;background-position:top center;background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/panera/panera-hero-bg.jpg')">
    <div class="call-to-action-box triangle-bg-mobile-version relative">
      <div class="container triangle-bg">
        <div class="row">
          <div class="col-md-5 text-left">
            <h1 class="white panera_title">Could your cameras be doing more for you?</h1>
            <a href="#" class="scroll_to_hubspot_form cta-btn cta-btn-md orange">Explore the power of intelligent video</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row more_padding" style="margin-bottom:180px;">
      <div class="col-md-11 col-centered text-center">
        <h2 class="more_bottom_margin larger pn_light bluetext">Transform your caf&eacute; video and POS data into rich business insights with our cloud-based application</h2>
        <h3 class="no_top_margin orangetext"><em><strong>Tailored solutions for Panera franchisees</strong></em></h3>
        <br>
        <img style="max-width:80%;width:425px;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/panera/panera-and-envysion.png">
      </div>
    </div>
  </div>
  <div class="gray_wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
          <img class="panera_hardware" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/panera/panera-hardware.png">
          <h3 class="even_more_bottom_margin">You likely have surveillance cameras in your cafés, but are you making the most of your investment? Reveal key business insights to protect and grow your business by transforming surveillence video into intelligent video with Envysion</h3>
          <div class="row panera_features_columns">
            <div class="col-sm-3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/panera/mobile.svg">
              <h4>Instant access to video via any web ready device</h4>
            </div>
            <div class="col-sm-3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/panera/transactions.svg">
              <h4>Transaction analysis to intelligently identify suspicious events</h4>
            </div>
            <div class="col-sm-3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/panera/data.svg" style="height:75px;margin:10px 0 35px;">
              <h4>Actionable insights delivered straight to your inbox</h4>
            </div>
            <div class="col-sm-3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/panera/security.svg">
              <h4>Professional loss prevention auditing services — only $30!*</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part('templates/footer-panera'); ?>
  </div>
</body>
</html>
