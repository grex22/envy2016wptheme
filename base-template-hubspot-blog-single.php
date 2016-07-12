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
      <div class="col-lg-11 col-lg-offset-1">
        <div class="row" id="subscribe_row">
          <div class="col-sm-8">
            <div class="subscribe_vertical_box with_prompt">
              <h4 class="pull-left">Get new articles in your inbox!</h4>
              <div class="blog_input_w_button pull-right">
                <a href="#" class="blog_input_button"><i class="fa fa-envelope-o"></i></a>
                <input type="text" class="wider" placeholder="Enter your email to subscribe...">
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-sm-4"></div>
        </div>
        <div class="row" id="articles_wrap">
          <div class="col-sm-8">
            <div class="article">
              <h2>Video Intelligence Uncovers Opportunities to Boost Sales in Wireless Stores</h2>
              <p class="byline">By <a href="#">Jennifer Taylor</a> :: Jun 18, 2016</p>
              <a href="#"><img class="blog_feature_image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hubspot/wireless-single.jpg"></a>
              <p class="blog_excerpt">While leading the pack for the last half decade, QSRs are starting to see a shift in consumer tastes, yet the lorem ipsum dolor quantas while last half decade, QSRs are starting to see a shift in consumer tastes.</p>
              <p class="blog_excerpt">While leading the pack for yet the lorem ipsum dolor quantas while last the last half decade, QSRs are starting to yet the lorem ipsum dolor quantas while last see a shift in consumer tastes, yet the lorem ipsum dolor quantas while last half decade, QSRs are starting to see a shift in consumer tastes.</p>
              <p class="blog_excerpt">Leading the pack for the last half decade, QSRs are starting to see While leading the pack for the last half decade, QSRs are starting to see a shift in consumer tastes, yet the lorem ipsum dolor quantas while last half decade, QSRs are starting to see a shift in consumer tastes, yet the consumer.</p>
              <p class="blog_excerpt">While leading the pack for the last half decade, QSRs are starting to see a shift in consumer tastes, yet the lorem ipsum dolor quantas while last half decade, QSRs are starting to see a shift in consumer tastes, yet the lorem quants.</p>
              <p class="blog_excerpt">While leading the pack for the last half decade, QSRs are yet the lorem ipsum dolor quantas while last yet the lorem ipsum dolor quantas while last starting to see a shift in consumer tastes, yet the lorem ipsum dolor quantas while last half decade, QSRs are starting to see a shift in consumer tastes, yet the consumer consumer.</p>
              <p class="blog_excerpt">Leading the pack for the last half decade, QSRs are starting to see While leading the pack for the last half decade, QSRs are starting to see a shift in consumer tastes, yet the lorem ipsum dolor quantas while last half decade, QSRs are starting to see a shift in consumer tastes, yet the lorem ipsum.</p>
            </div>
            <ul class="list-inline topics_list more_bottom_margin more_top_margin">
              <li><strong>Topics:</strong></li>
              <li><a href="#">Social Media</a></li>
              <li><a href="#">Wireless Retail</a></li>
              <li><a href="#">POS</a></li>
            </ul>
            <hr>
            <div class="blog_author">
              <div class="row">
                <div class="col-sm-3">
                  <img src="http://placehold.it/180x180" class="img-circle img-responsive">
                </div>
                <div class="col-sm-9">
                  <h3>About the Author</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
            </div>
            <div class="article adinject">
              <br>
              <a href="#">Some sort of ad TBD</a>
              <br>
              <br>
            </div>
            <div id="comment_wrap">
              <div class="well">
              <p>Comments accordion / form goes here!</p>
              </div>
            </div>
            <div class="post-navigation">
              <div class="row">
                <div class="col-sm-5 text-left">
                  Previous:<br>
                  <a href="#">The new Client Intake Form for 2016</a>
                </div>
                <div class="col-sm-5 col-sm-offset-2 text-right">
                  Next:<br>
                  <a href="#">How your WIFI Network's Speed may be Affecting Profits</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-sm-offset-1" id="blogsidebar">
            <div class="module">
              <h5>Search</h5>
              <div class="blog_input_w_button">
                <a href="#" class="blog_input_button"><i class="fa fa-search"></i></a>
                <input type="text" placeholder="Search...">
              </div>
            </div>

            <div class="module">
              <h5>Recommended Content</h5>
              <ul class="list-unstyled">
                <li><a href="#">Video Intelligence Uncovers Opportunities to Boost Sales in Wireless Stores.</a></li>
                <li><a href="#">Quick Sonsumer Tastes, Wait Times.</a></li>
                <li><a href="#">Quick Service to Spot Shift in Consumer Tastes, Wait Times.</a></li>
                <li><a href="#">Quick Service Restaurants Per Tastes, Wait Times.</a></li>
              </ul>
            </div>

            <div class="module">
              <img src="http://placehold.it/215x190"></a>
            </div>

            <div class="module">
              <h5>Topics</h5>
              <ul class="list-unstyled">
                <li><a href="#">Quick Service Restaurants</a></li>
                <li><a href="#">Retail</a></li>
                <li><a href="#">Wireless</a></li>
              </ul>
            </div>

            <div class="module">
              <h5>Follow Us</h5>
              <div class="blog_social_icons">
                <a href="#"><i class="fa fa-facebook-square "></i></a>
                <a href="#"><i class="fa fa-twitter-square "></i></a>
                <a href="#"><i class="fa fa-linkedin-square "></i></a>
                <a href="#"><i class="fa fa-google-plus-square "></i></a>
              </div>
            </div>
          </div>
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
