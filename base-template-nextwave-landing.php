<?php get_template_part('templates/head'); ?>
<link rel="stylesheet" href="<?php get_stylesheet_directory_uri(); ?>/assets/css/budicons.css">
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
          <div class="col-md-12">
            <div class="row">
              <div class="col-lg-7 col-md-7 text-center even_more_bottom_margin more_top_margin">
                <h2 style="color:white">Introducing the next wave of Envysion loss prevention solutions</h2>
                <p class="lead"><img src="<?php get_stylesheet_directory_uri(); ?>/assets/img/envysion-brand-nextwave-white@2x.png" id="envy_nextwave_logo"></p>
              </div>
              <div class="col-lg-4 col-md-5 text-center">
                <img src="<?php get_stylesheet_directory_uri(); ?>/assets/img/funnel-larger.png" id="funnel">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="gray_wrap make_room_for_small_funnel">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-center-sm">
          <h3 class="text-center-xs more_bottom_margin larger pn_light">Incident alerts delivered directly to your inbox, so you can spend less time finding problems and more time solving them.</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="wrap more_padding">
    <div class="container">
      <div class="col-sm-10 col-centered feature-grid">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Stop Theft in its Tracks</h2>
            <h3 class="text-center no_top_margin pn_light">Identify all types of suspicious transactions and protect your bottom line with a suite of powerful loss prevention solutions.</h3>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-centered feature-grid text-center">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="text-center">
              <i class="icon-budicon-221 orangetext feature-icon"></i>
              <h4>Every Transaction Analyzed by Algorithm</h4>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="text-center">
              <i class="icon-budicon-371 orangetext feature-icon"></i>
              <h4>Theft-Smart Reports Spotlight Employee Theft</h4>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
            <div class="text-center">
              <i class="icon-budicon-730 orangetext feature-icon"></i>
              <h4>Hotline Connection to Theft Analysts</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 text-center">
          <hr>
          <button type="button" class="cta-btn cta-btn-lg orange" data-toggle="modal" data-target="#learn_more_modal">Learn More&hellip;</button>
          <hr>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
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


      <div class="item weird_height active">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-centered text-center">
              <h2 class="quote">Next Wave has truly made a positive impact on my operations and continues to innovate with new business solutions that impact my bottom line."</h2>
              <p class="attrib">Tom Herman - CR Restaurants</p>
            </div>
          </div>
        </div>
      </div>

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

      <div class="item weird_height">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-centered text-center">
              <h2 class="quote">Within weeks of installing the Next Wave system we identified theft from a long time manager. Next Wave has reduced theft, food costs, and unwanted back door activity.</h2>
              <p class="attrib">Tom Herman - CR Restaurants, Inc.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="item weird_height">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-centered text-center">
              <h2 class="quote">If you have a couple of employees stealing from you they can affect your food costs anywhere from 1 to 3 percent. That represents thousands of dollars per month per year."</h2>
              <p class="attrib">Alex Salgueiro - Savannah Restaurants, Corp.</p>
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
      <div class="col-sm-10 col-centered feature-grid">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">First in Automated Theft Detection at the Drive-Thru</h2>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-centered feature-grid">
        <div class="row">
          <div class="col-md-4">
            <div class="text-center">
              <i class="icon-budicon-221 orangetext feature-icon"></i>
              <h4>Algorithm-Driven Software</h4>
              <p>Our algorithm-embedded, proprietary software analyzes every transaction to find suspicious activity. It's like handing you a glass of water out of a Niagara Falls of data.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="text-center">
              <i class="icon-budicon-254 orangetext feature-icon"></i>
              <h4>Like None Other</h4>
              <p>We’ve been tested in side-by-side comparisons with other services that claim to catch theft. Our customers tell us, "Next Wave catches theft the others can't."</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="text-center">
              <i class="icon-budicon-256 orangetext feature-icon"></i>
              <h4>Return on Investment</h4>
              <p>In as little as two months our customers are adding 2 percent of recovered revenue to their top-line sales. On average, that's $2,000 a month.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="text-center">
              <i class="icon-budicon-243 orangetext feature-icon"></i>
              <h4>Fired Proof</h4>
              <p>You will fire thieves. And you'll have all the proof you need at the unemployment hearing. Our "Caught-in-the-act" case files include YouTube-like video clip evidence.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="text-center">
              <i class="icon-budicon-369 orangetext feature-icon"></i>
              <h4>Easy Installation</h4>
              <p>Most of our customers install our theft detection system themselves in conjunction with our on-call support team. But we also offer professional installation.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="text-center">
              <i class="icon-budicon-687 orangetext feature-icon"></i>
              <h4>Surveillance Too</h4>
              <p>Old school surveillance systems are necessary... but they don't make money. For our customers who want Next Wave with a companion surveillance system, we do it.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="wrap more_padding">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center more_bottom_margin">
          <h2 class="">Stop Theft in its Tracks</h2><br>
          <button type="button" class="cta-btn cta-btn-lg orange" data-toggle="modal" data-target="#learn_more_modal">Contact Next Wave</button>
          <hr>
        </div>
      </div>
    </div>
  </div>

  <div class="gray_wrap dark_gray_wrap">
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="row next_wave_contact_row">
            <div class="col-md-4 text-center col-md-offset-2">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/envysion-brand-nextwave-white@2x.png" style="max-width:240px;">
            </div>
            <div class="col-md-4 col-md-offset-1 whitetext white text-center-sm text-center-xs">
              <h3 class="white">Envysion Next Wave</h3>
              8638 Veterans Highway, Suite 203<br>
              Millersville, MD 21106<br>
              <br>
              P: 877 300 3423<br>
              F: 877 698 3679<br>
              <a href="mailto:info@theftspot.com" style="color:lightblue">info@theftspot.com</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade modal_white_form" id="learn_more_modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Learn more about our Envysion Next Wave platform:</h4>
        </div>
        <div class="modal-body">
          <?php
            if(function_exists('gravity_form')):
              //gravity_form( 1, false, false, false, null, true, 150 ); (for development instance on localhost)
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
