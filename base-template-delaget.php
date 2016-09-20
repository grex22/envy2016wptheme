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
  <div id="main_wrap" class="blue_gradient_bg relative">
    <div class="section_box hero mesh">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center even_more_bottom_margin more_top_margin laptop_overlay_helper">
            <img class="qsr_badge" src="<?php get_stylesheet_directory_uri(); ?>/assets/img/delaget/qsr-badge.png" alt="QSR Business Insights">
            <h2 class="venera">Improve Your Game Stats</h2>
            <h3>with side-by-side video and in-store analytics.</h3>
            <div class="laptop_image_cropped"><img src="<?php get_stylesheet_directory_uri(); ?>/assets/img/delaget/laptop-cropped.png" alt="QSR Business Insights"></div>
            <a href="#first_section" class="venera continue_prompt smooth_scroll">Get into the Action</a>
          </div>
        </div>
      </div>
    </div>
    <div class="laptop_image"><img src="<?php get_stylesheet_directory_uri(); ?>/assets/img/delaget/laptop.png" alt="QSR Business Insights"></div>
    
  </div>
  <div class="gray_wrap gray_wrap_gradient" id="first_section">
    <div class="section_box">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                <h2 class="more_bottom_margin larger venera">Become an All-Pro QSR.</h2>
                <img class="more_bottom_margin" src="<?php get_stylesheet_directory_uri(); ?>/assets/img/delaget/blue-envy-delaget.png" alt="Envysion and Delaget Integration"><br>
                <img class="even_more_bottom_margin" src="<?php get_stylesheet_directory_uri(); ?>/assets/img/delaget/gray-football.svg" alt="Envysion and Delaget Integration">
                <h3 class="venera delaget_blue">Highlights of our integration with Delaget:</h3>
                <p class="lead more_bottom_margin">Delaget and Envysion are working together to help you mitigate loss and improve operations at your restaurant. Contact us to learn more.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 text-center delaget_feature_box">
                <h3>GET THE COMPLETE PICTURE</h3>
                <hr>
                <p>No need to rely on either video or transaction data alone to uncover loss; have both to make your investigations air-tight.</p>
              </div>
              <div class="col-sm-4 text-center delaget_feature_box">
                <h3>SIMPLIFY YOUR RESEARCH</h3>
                <hr>
                <p>Forget stacks of exception reports and only focus on those few loss opportunities that are going to make a difference to your bottom line.</p>
              </div>
              <div class="col-sm-4 text-center delaget_feature_box">
                <h3>SAVE TIME</h3>
                <hr>
                <p>In mere minutes, you’ll identify, validate, and resolve loss and operational issues without toggling between systems, so you can quickly move on to other priorities.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <?php get_template_part('templates/footer-delaget'); ?>
  </div>
</body>
</html>
