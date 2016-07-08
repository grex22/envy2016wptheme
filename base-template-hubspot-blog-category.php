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
    <div class="call-to-action-box ctab-less-padding" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hubspot/blogheader.png')">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-xs-12 col-sm-offset-1">
            <div class="row">
              <div id="blog_header_hero" class="col-sm-12 text-center even_more_bottom_margin more_top_margin">
                <h1>Wireless Retail Blog</h2>
                <p class="lead">The latest from Envysion in the Wireless Retail world</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="blog_nav_wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
          <ul id="blog_nav_menu" class="list-inline">
            <li><a href="#">Quick Service Restaurant</a></li>
            <li class="active"><a href="#">Wireless</a></li>
            <li><a href="#">Retail</a></li>
            <li><a href="http://blog.envysion.com">New Posts</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container" id="mainblog">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="row" id="subscribe_row">
          <div class="col-sm-9">

            <div class="subscribe_vertical_box with_prompt">
              <h4 class="pull-left">Get new articles in your inbox!</h4>
              <div class="pull-right">
                <a href="#" class="submit_subscribe"><i class="fa fa-envelope-o"></i></a>
                <input type="text" placeholder="Enter your email to subscribe...">
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-sm-3"></div>
        </div>
        <div class="row" id="articles_wrap">
          <div class="col-sm-9">
            <div class="article">
              <h2><a href="#">Quick Service Restaurants Using Analytics to Spot Shift in Consumer Tastes, Wait Times.</a></h2>
              <p class="byline">By <a href="#">Jennifer Taylor</a> :: Jun 18, 2016</p>
              <a href="#"><img class="blog_feature_image" src="http://placehold.it/847x415"></a>
              <p class="blog_excerpt">While leading the pack for the last half decade, QSRs are starting to see a shift in consumer tastes, yet the lorem ipsum dolor quantas while last half decade, QSRs are starting to see a shift in consumer tastes, yet the...</p>
              <a href="#">Read More...</a>
            </div>
            <div class="article">
              <h2><a href="#">Quick Service Restaurants Using Analytics to Spot Shift in Consumer Tastes, Wait Times.</a></h2>
              <p class="byline">By <a href="#">Jennifer Taylor</a> :: Jun 18, 2016</p>
              <p class="blog_excerpt">While leading the pack for the last half decade, QSRs are starting to see a shift in consumer tastes, yet the lorem ipsum dolor quantas while last half decade, QSRs are starting to see a shift in consumer tastes, yet the...</p>
              <a href="#">Read More...</a>
            </div>
            <div class="article">
              <h2><a href="#">Quick Service Restaurants Using Analytics to Spot Shift in Consumer Tastes, Wait Times.</a></h2>
              <p class="byline">By <a href="#">Jennifer Taylor</a> :: Jun 18, 2016</p>
              <p class="blog_excerpt">While leading the pack for the last half decade, QSRs are starting to see a shift in consumer tastes, yet the lorem ipsum dolor quantas while last half decade, QSRs are starting to see a shift in consumer tastes, yet the...</p>
              <a href="#">Read More...</a>
            </div>
            <div class="article adinject">
              <a href="#">Some sort of ad TBD</a>
            </div>
            <div class="article">
              <h2><a href="#">Quick Service Restaurants Using Analytics to Spot Shift in Consumer Tastes, Wait Times.</a></h2>
              <p class="byline">By <a href="#">Jennifer Taylor</a> :: Jun 18, 2016</p>
              <p class="blog_excerpt">While leading the pack for the last half decade, QSRs are starting to see a shift in consumer tastes, yet the lorem ipsum dolor quantas while last half decade, QSRs are starting to see a shift in consumer tastes, yet the...</p>
              <a href="#">Read More...</a>
            </div>
          </div>
          <div class="col-sm-3" id="blogsidebar"></div>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part('templates/footer'); ?>
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-577fe186f06ab52e"></script>

  </div>
</body>
</html>
