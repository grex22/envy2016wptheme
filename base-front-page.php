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
    <div id="home_carousel" class="carousel fade" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#home_carousel" data-slide-to="0" class="active"></li>
        <li data-target="#home_carousel" data-slide-to="1"></li>
        <li data-target="#home_carousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home-bokeh.jpg')">
          <div class="container">
            <div class="row">
              <div class="col-md-6 text-center-sm text-center-xs">
                <h2>See at scale.<br>Act on what matters.</h2>
                <p class="lead">It’s difficult to oversee day-to-day activities across all your stores. It’s even more challenging to identify instances of fraud and operational inefficiencies, without the time and expense of having to be physically on location. <strong><em>Until now&hellip;</em></strong></p>
                <a href="#" class="cta-btn cta-btn-lg orange">Learn More</a>
              </div>
              <div class="col-md-6 hidden-sm hidden-xs no_right_padding">
                <img src="assets/img/home-app-screen.png">
              </div>
            </div>
          </div>
        </div>

        <div class="item" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home-bokeh-2.jpg')">
          <div class="container">
            <div class="row">
              <div class="col-md-6 text-center-sm text-center-xs">
                <h2>Protect your business.</h2>
                <p class="lead">As you expand into new locations, add employees and the number of transactions increase, it becomes difficult for loss prevention professionals and store managers to see, identify and correct instances of fraud without the visual context of what is actually happening in your stores. <strong><em>Until now&hellip;</em></strong></p>
                <a href="#" class="cta-btn cta-btn-lg orange">Learn More</a>
              </div>
              <div class="col-md-6 hidden-sm hidden-xs no_right_padding">
                <img src="assets/img/home-app-screen-2-2.png">
              </div>
            </div>
          </div>
        </div>

        <div class="item" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home-bokeh-3.jpg')">
          <div class="container">
            <div class="row">
              <div class="col-md-6 text-center-sm text-center-xs">
                <h2>Grow your business.</h2>
                <p class="lead">As you expand into new locations, add employees and the number of transactions increase, best practices such as sales conversion, throughput, store cleanliness, food handling become difficult to maintain, measure and improve without the visual context of what is actually happening in your stores. <strong><em>Until now&hellip;</em></strong></p>
                <a href="#" class="cta-btn cta-btn-lg orange">Learn More</a>
              </div>
              <div class="col-md-6 hidden-sm hidden-xs no_right_padding">
                <img src="assets/img/home-app-screen-3-2.png">
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#home_carousel" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#home_carousel" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="container" id="logo_spread">
    <div class="row">
      <div class="col-md-5 text-center">
        <img src="/assets/img/logos/logo-spread-1of2.png">
      </div>
      <div class="col-sm-7 text-center hidden-sm hidden-xs">
        <img src="/assets/img/logos/logo-spread-2of2.png">
      </div>
    </div>
  </div>

  <div class="container even_more_bottom_margin">
    <div class="row more_bottom_margin">
      <div class="col-sm-10 col-sm-offset-1 text-center">
        <h2 class="bold-n-big">OUR BRAND PROMISE</h2>
        <p class="lead">Envysion exists to help passionate business people enhance their customer experience, streamline operations, mitigate loss, and increase profitability. We do this by providing actionable insights that can only be derived from visual context of what is actually happening inside and across all stores.</p>
        <p class="lead">See at scale. <strong>Act on what matters.</strong></p>
        <p class="lead"><strong>Protect</strong> &amp; <strong>Grow</strong> your business.</p>
      </div>
    </div>
    <div class="row more_bottom_margin">
      <div class="col-sm-10 col-xs-12 col-centered">
        <ul class="iconlist list-unstyled row">
          <li class="col-sm-3 animated scroll-animate transparent" data-animation-class="fadeIn" data-delay="400">
            <img src="assets/img/service.svg">
            <br>
            ENHANCE CUSTOMER<BR>EXPERIENCE
          </li>
          <li class="col-sm-3 animated scroll-animate transparent" data-animation-class="fadeIn" data-delay="600">
            <img src="assets/img/operations.svg">
            <br>
            STREAMLINE<BR>OPERATIONS
          </li>
          <li class="col-sm-3 animated scroll-animate transparent" data-animation-class="fadeIn" data-delay="800">
            <img src="assets/img/safety-blue.svg">
            <br>
            MITIGATE<BR>LOSS
          </li>
          <li class="col-sm-3 animated scroll-animate transparent" data-animation-class="fadeIn" data-delay="800">
            <img src="assets/img/sales.svg">
            <br>
            INCREASE<BR>PROFITABILITY
          </li>
        </ul>
      </div>
    </div>
    <div class="row gutter-90 even_more_bottom_margin">
      <div class="col-md-4 text-center">
        <h3 class="col-tab-header">Video Management</h3>
        <p>Search for, watch, save, share and manage video among all your store locations via one cloud-based application.</p>
        <a href="/products/envysion-video" class="cta-btn orange">Learn More</a>
      </div>
      <div class="col-md-4 text-center">
        <h3 class="col-tab-header">Insights &amp; Analytics</h3>
        <p>Keep a pulse on your organization's performance with a suite of video analytics and delivered insights.</p>
        <a href="/products/envysion-insight" class="cta-btn orange">Learn More</a>
      </div>
      <div class="col-md-4 text-center">
        <h3 class="col-tab-header">Video Audits</h3>
        <p>Utilize a team of trained auditors to review your video and deliver insights - save time, money & resources.</p>
        <a href="/products/envysion-audit-services" class="cta-btn orange">Learn More</a>
      </div>
    </div>

  </div>

  <div id="quote_carousel_1" class="carousel fade quote-carousel">
    <!-- Indicators -->
    <!--<ol class="carousel-indicators">
      <li data-target="#quote_carousel_1" data-slide-to="0" class="active"></li>
      <li data-target="#quote_carousel_1" data-slide-to="1"></li>
      <li data-target="#quote_carousel_1" data-slide-to="2"></li>
    </ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="container">
          <div class="row">
            <div class="col-md-8 text-center col-centered">
              <h2 class="no_bottom_margin">Actionable Insights</h2>
              <p class="lead more_bottom_margin">Envysion’s powerful exception reporting delivers actionable insights to capture day-to-day activity, helping you mitigate loss and improve operations. </p>
              <div class="row more_bottom_margin">
                <div class="col-sm-6">
                  <ul class="text-left bullet-points">
                    <li>High-Risk Transactions</li>
                    <li>Sales Performance</li>
                    <li>Customer Experience</li>
                    <li>Sales Conversions</li>
                  </ul>
                </div>
                <div class="col-sm-6">
                  <ul class="text-left bullet-points">
                    <li>Store Cleanliness</li>
                    <li>Environment</li>
                    <li>Food Safety</li>
                    <li>Return Fraud</li>
                  </ul>
                </div>
              </div>
              <p class="lead even_more_bottom_margin">Use these and other insights to quickly pinpoint the actions that need attention.</p>
              <a href="/solutions" class="cta-btn cta-btn-lg orange">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page_section container">
    <div class="row more_bottom_margin">
      <div class="col-xs-12">
        <h2 class="text-center">Featured Case Studies</h2>
      </div>
    </div>
    <div class="row vertical-align-col-fix more_bottom_margin">
      <div class="col-sm-4"><a data-toggle="modal" href="#cs_shell" class="big-border-button scroll-animate animated transparent" data-animation-class="fadeIn" data-delay="200"><img class="vcenter" src="assets/img/logos/shell.png"></a></div>
      <div class="col-sm-4"><a data-toggle="modal" href="#cs_popeyes" class="big-border-button scroll-animate animated transparent" data-animation-class="fadeIn" data-delay="300"><img class="vcenter" src="assets/img/logos/popeyes.png"></a></div>
      <div class="col-sm-4"><a data-toggle="modal" href="#cs_att" class="big-border-button scroll-animate animated transparent" data-animation-class="fadeIn" data-delay="400"><img class="vcenter" src="assets/img/logos/att.png"></a></div>
      <div class="col-sm-4"><a data-toggle="modal" href="#cs_cinemark" class="big-border-button scroll-animate animated transparent" data-animation-class="fadeIn" data-delay="200"><img class="vcenter" src="assets/img/logos/cinemark.png"></a></div>
      <div class="col-sm-4"><a data-toggle="modal" href="#cs_noodles" class="big-border-button scroll-animate animated transparent" data-animation-class="fadeIn" data-delay="300"><img class="vcenter" src="assets/img/logos/noodles.png"></a></div>
      <div class="col-sm-4"><a data-toggle="modal" href="#cs_footlocker" class="big-border-button scroll-animate animated transparent" data-animation-class="fadeIn" data-delay="400"><img class="vcenter" src="assets/img/logos/foot-locker.png"></a></div>
    </div>
    <div class="row text-center"><a href="http://envysion.com/case-studies/" class="cta-btn cta-btn-lg orange">View More</a></div>
  </div>



  <div class="modal fade chunky-modal" id="cs_shell" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="clearfix"></div>
        </div>
        <div class="modal-body text-center">
          <img src="assets/img/logos/shell.png">
          <h3 class="quote"> We never have to worry about upgrades or having outdated video capabilities because our users simply log in to the Envysion application and have access to the latest features and capabilities."</h3>
          <p class="attrib">Sonny Goyal, COO, Au Energy, Shell Branded Dealer</p>
          <a href="#" class="cta-btn orange">View Case Study</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade chunky-modal" id="cs_popeyes" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="clearfix"></div>
        </div>
        <div class="modal-body text-center">
          <img src="assets/img/logos/popeyes.png">
          <h3 class="quote"> We never have to worry about upgrades or having outdated video capabilities because our users simply log in to the Envysion application and have access to the latest features and capabilities."</h3>
          <p class="attrib">Sonny Goyal, COO, Au Energy, Shell Branded Dealer</p>
          <a href="#" class="cta-btn orange">View Case Study</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade chunky-modal" id="cs_att" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="clearfix"></div>
        </div>
        <div class="modal-body text-center">
          <img src="assets/img/logos/att.png">
          <h3 class="quote"> We never have to worry about upgrades or having outdated video capabilities because our users simply log in to the Envysion application and have access to the latest features and capabilities."</h3>
          <p class="attrib">Sonny Goyal, COO, Au Energy, Shell Branded Dealer</p>
          <a href="#" class="cta-btn orange">View Case Study</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade chunky-modal" id="cs_cinemark" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="clearfix"></div>
        </div>
        <div class="modal-body text-center">
          <img src="assets/img/logos/cinemark.png">
          <h3 class="quote"> We never have to worry about upgrades or having outdated video capabilities because our users simply log in to the Envysion application and have access to the latest features and capabilities."</h3>
          <p class="attrib">Sonny Goyal, COO, Au Energy, Shell Branded Dealer</p>
          <a href="#" class="cta-btn orange">View Case Study</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade chunky-modal" id="cs_noodles" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="clearfix"></div>
        </div>
        <div class="modal-body text-center">
          <img src="assets/img/logos/noodles.png">
          <h3 class="quote"> We never have to worry about upgrades or having outdated video capabilities because our users simply log in to the Envysion application and have access to the latest features and capabilities."</h3>
          <p class="attrib">Sonny Goyal, COO, Au Energy, Shell Branded Dealer</p>
          <a href="#" class="cta-btn orange">View Case Study</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade chunky-modal" id="cs_footlocker" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="clearfix"></div>
        </div>
        <div class="modal-body text-center">
          <img src="assets/img/logos/foot-locker.png">
          <h3 class="quote"> We never have to worry about upgrades or having outdated video capabilities because our users simply log in to the Envysion application and have access to the latest features and capabilities."</h3>
          <p class="attrib">Sonny Goyal, COO, Au Energy, Shell Branded Dealer</p>
          <a href="#" class="cta-btn orange">View Case Study</a>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part('templates/footer'); ?>
  </div>
</body>
</html>
