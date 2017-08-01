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
    <div class="call-to-action-box ctab-mobilelp-padding fullscreen-bg wireless-video">
      <video loop muted autoplay poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/wirelesslp/retail-vid.jpg" class="fullscreen-bg__video">
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/wirelesslp/retail-vid.webm" type="video/webm">
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/wirelesslp/retail-vid.mp4" type="video/mp4">
      </video>
      <div class="container">
        <div class="row">
          <div class="col-md-10 text-center col-md-offset-1">

                <h1 style="color:white;font-weight:400;margin-top: 0; font-size:56px;">Leverage Video to Coach to Behaviors &amp; <strong><em>Increase Profitability</em></strong></h1>
                <p class="lead">Transform your store video, audio and POS data into actionable insights you can use to change behaviors in your stores.</p>
                <button type="button" class="cta-btn cta-btn-lg orange" data-toggle="modal" data-target="#learn_more_modal">Learn More&hellip;</button>
                <br>
                <br>
                <a href="#feelyourpain" class="smooth_scroll" style="font-size:60px"><i class="fa fa-inverse fa-angle-down"></i><span id="feelyourpain"></span></a>

          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="wrap more_padding">
    <div class="container">
      <div class="col-sm-12 col-centered feature-grid">
        <div class="row">
          <div class="col-sm-4 text-center">
            <img width="150" src="<?php get_stylesheet_directory_uri(); ?>/assets/img/wirelesslp/wlp-chart.svg" alt="Envysion Boost Sales">
            <h3 class="more_bottom_margin">Boost Sales</h3>
            <p>See the metrics you need to optimize your sales process, capture missed opportunities, improve sales training, recognize top performers, and improve the customer experience. </p>
          </div>
          <div class="col-sm-4 text-center">
            <img width="150" src="<?php get_stylesheet_directory_uri(); ?>/assets/img/wirelesslp/wlp-shield.svg" alt="Envysion Reduces Theft">
            <h3 class="more_bottom_margin">Reduce Theft</h3>
            <p>Receive alerts of possible employee theft (including commission fraud) and external theft. Quickly take action with the video, audio, and receipt details at your fingertips.</p>
          </div>
          <div class="col-sm-4 text-center">
            <img width="150" src="<?php get_stylesheet_directory_uri(); ?>/assets/img/wirelesslp/wlp-gears.svg" alt="Envysion Streamline Operations">
            <h3 class="more_bottom_margin">Streamline Operations</h3>
            <p>Keep an eye on process efficiency and policy compliance so you can make proactive improvements and address issues before they impact your profitability. </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="quote_carousel_1" class="carousel fade quote-carousel light-scheme">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2 class="no_bottom_margin text-center pn_reg_bold bluetext" style="font-size:29px;margin-top:35px;">Reasons Our Customers Love Us</h2>
        </div>
      </div>
    </div>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php
      $quotes = array(
        array(
          'quote' => "From maximizing sales to minimizing loss, we have placed our faith in Envysion to be our trusted advisor for many years and the Envysion team is a critical partner of our organization.",
          'attrib'=>"Jeremy Roberts, Director of Operations<br>N Touch Wireless, Sprint Preferred Retailer"
        ),
        array(
          'quote' => "Since using Envysion's sales reporting, which contains real live video of transactions done within the store, accountability has reached an all-time high.",
          'attrib'=>"Daniel Martinez, District Manager<br>N Touch Wireless"
        ),
        array(
          'quote' => "We find the feedback and reporting to be invaluable tools for molding our employee's behaviors. We use the system for remote sales observations, thus getting a more realistic picture of their processes.",
          'attrib'=>"Mark Long, Vice President<br>CCT Wireless, Sprint Preferred Retailer"
        ),
        array(
          'quote' => "Envysion has become a vital part of my everyday routine. The simplicity of the system and the scope it covers has made my job much more efficient. The value Envysion brings to my business is unparalleled!",
          'attrib'=>"Klay Bingham, Chief of Staff<br>BrightStar Wireless, Inc"
        ),
        array(
          'quote' => "I have really been able to coach and train my team using Envysion. I feel they now have a better understanding of how the whole sales process works and how the numbers work.",
          'attrib'=>"Kerri Mumford-Asheboro, Store Manager<br>N Touch Wireless"
        ),
        array(
          'quote' => "Envysion is a great resource we use for coaching and training. Instead of driving from store to store they have the ability to check in regularly with their stores and inspect whether we are exhibiting good behaviors.",
          'attrib'=>"Elthon Munoz, AT&amp;T Portables"
        )
      );
      foreach($quotes as $i => $q): ?>
      <div class="item<?php if($i == 0) echo " active"; ?>">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-centered text-center">
              <h2 class="quote">
              <?php echo $q['quote'];?>"
              </h2>
              <div class="row">
                <!--<div class="col-sm-5 text-right text-center-xs">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/smepage/KFC_logo.svg" height="80">
                </div>-->
                <div class="col-sm-offset-2 col-sm-8 text-center text-center-xs">
                  <p class="attrib">
                  <?php echo $q['attrib'];?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <a class="left carousel-control" href="#quote_carousel_1" role="button" data-slide="prev">
      <span class="fa fa-angle-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#quote_carousel_1" role="button" data-slide="next">
      <span class="fa fa-angle-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>


  <div class="wrap more_padding dark_blue_wrap hidden">
    <div class="container">
      <div class="col-sm-9 col-centered feature-grid">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2 class="pn_light bluetext larger">Lorem Ipsum Quantas Dolor AT&amp;T</h2>
            <p class="padded">Discover how Envysion helped AT&amp;T reduce such and such, make things, and stuff </p>
            <a href="http://envysion.com/media/Envysion-Case-Study-ATT-Portables.pdf" target="_blank" class="cta-btn cta-btn-lg orange" style="border-left:none;">Read the Case Study</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="wrap">
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-centered feature-grid">
          <div class="row">
            <div class="col-sm-12">
              <br>
              <h2 class="text-center pn_light bluetext no_top_margin" style="font-size:46px;">Shorten the cycle of coaching and behavior change with video</h2>
              <p class="text-center padded">See and hear each interaction across all your stores with our easy-to-use video management system. Hone in on the interactions that matter most with exception-based reports. Save and share video clips to showcase best practices and coach struggling employees to improve behaviors. Then, save time and money by reviewing performance in our easy-to-use desktop or mobile application instead of traveling to observe on-location.</p>
            </div>
          </div>
        </div>
      </div>
		</div>
	</div>
	<div class="wrap more_padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-centered text-center">
          <h2 class="bold-n-big no_top_margin">HOW OUR SYSTEM WORKS:</h2>
          <hr>
          <img class="img-responsive" src="<?php get_stylesheet_directory_uri(); ?>/assets/img/wirelesslp/how-enyvsion-works.png" style="margin:10px 0 55px;">
          <h2 class="bold-n-big no_top_margin more_bottom_margin">SO YOU CAN ADDRESS:</h2>
          <div class="row">
            <div class="col-sm-4 text-left col-centered cap-col-width-at-340">
              <h4><strong>Sales Behaviors</strong></h4>
              <ul class="fancy-bullet-list">
                <li>Customer engagement</li>
                <li>Sales process compliance</li>
                <li>Proper qualification</li>
                <li>Wireless account analysis</li>
              </ul>
            </div>
            <div class="col-sm-4 text-left col-centered cap-col-width-at-340">
              <h4><strong>Loss Behaviors</strong></h4>
              <ul class="fancy-bullet-list">
                <li>Safe procedure compliance</li>
                <li>Inventory handling</li>
                <li>Cash-handling procedures</li>
                <li>Commission fraud</li>
              </ul>
            </div>
            <div class="col-sm-4 text-left col-centered cap-col-width-at-340">
              <h4><strong>Operational Behaviors</strong></h4>
              <ul class="fancy-bullet-list">
                <li>Employee clock-ins/outs</li>
                <li>Open/close procedures</li>
                <li>Performance in peak traffic</li>
                <li>Inventory procedures</li>
              </ul>
            </div>
          </div>
          <br>
        </div>
      </div>
    </div>
  </div>

	<div class="wrap gray_wrap more_padding">

		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 text-center">
					<h2 class="pn_bold orangetext">Ready to get started?</h2>
					<p class="lead">Learn how video can help you can boost sales, reduce theft, and streamline operations.</p>
					<button type="button" class="cta-btn cta-btn-lg orange more_bottom_margin" data-toggle="modal" data-target="#learn_more_modal">Learn More&hellip;</button>
				</div>
			</div>
		</div>

	</div>

  <div class="modal fade modal_white_form" id="learn_more_modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Complete the form below to learn how video can help you can boost sales, reduce theft, and streamline operations.</h4>
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
