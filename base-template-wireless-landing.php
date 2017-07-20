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
      <div class="col-sm-12 col-centered feature-grid">
        <div class="row">
          <div class="col-sm-4 text-center">
            <img width="150" src="<?php get_stylesheet_directory_uri(); ?>/assets/img/wirelesslp/wlp-chart.svg" alt="Envysion Boost Sales">
            <h3 class="more_bottom_margin">Boost Sales</h3>
            <p>See the metrics you need to optimize your sales process, capture missed opportunities, improve sales training, recognize top performers, and improve the customer experience. </p>
            <hr>
          </div>
          <div class="col-sm-4 text-center">
            <img width="150" src="<?php get_stylesheet_directory_uri(); ?>/assets/img/wirelesslp/wlp-shield.svg" alt="Envysion Reduces Theft">
            <h3 class="more_bottom_margin">Reduce Theft</h3>
            <p>Receive alerts of possible employee theft (including commission fraud) and external theft. Quickly take action with the video, audio, and receipt details at your fintertips.</p>
            <hr>
          </div>
          <div class="col-sm-4 text-center">
            <img width="150" src="<?php get_stylesheet_directory_uri(); ?>/assets/img/wirelesslp/wlp-gears.svg" alt="Envysion Streamline Operations">
            <h3 class="more_bottom_margin">Streamline Operations</h3>
            <p>Keep an eye on process efficiency and policy compliance so you can make proactive improvements and address issues before they impact your profitability. </p>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="wrap more_padding" style="padding-top:0;">
    <div class="container">
      <div class="col-sm-12 col-centered">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="bold-n-big text-center no_top_margin more_bottom_margin">WHAT OUR CUSTOMERS ARE SAYING:</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="testimonial">
              <p>From maximizing sales to minimizing loss, we have placed our faith in Envysion to be our trusted advisor for many years and the Envysion team is a critical partner of our organization.</p>
              <div class="testimonial_attrib">
                  Jeremy Roberts, Director of Operations, N Touch Wireless<br>
                  Sprint Preferred Retailer
              </div>
            </div>
            <div class="testimonial">
              <p>Since using Envysion's sales reporting, which contains real live video of transactions done within the store, accountability has reached an all-time high.</p>
              <div class="testimonial_attrib">
                Daniel Martinez, District Manager, N Touch Wireless
              </div>
            </div>
            <div class="testimonial">
              <p>We find the feedback and reporting to be invaluable tools for molding our employee's behaviors. We use the system for sales observations, rather than standing next to our people and watching them, thus getting a more realistic picture of their processes. We have found Envysion to be a powerful asset to increase our sales by improving our team and discovering missed sales opportunities. While Envysion has been a great security resource, helping avoid break-ins, employee theft and greatly reducing fraudulent transactions, it has worked out to be much, much more than that.</p>
              <div class="testimonial_attrib">
                Mark Long, Vice President, CCT Wireless<br>
                Sprint Preferred Retailer

              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="testimonial">
              <p>Envysion has become a vital part of my everyday routine. The simplicity of the system and the scope it covers has made my job much more efficient. The value Envysion brings to my business is unparalleled! I would recommend Envysion for anyone who wants to free up time, make more money, and see their business grow.</p>
              <div class="testimonial_attrib">
                Klay Bingham, Chief of Staff<br>BrightStar Wireless, Inc
              </div>
            </div>
            <div class="testimonial">
              <p>I have really been able to coach and train my team using Envysion. I feel they now have a better understanding of how the whole sales process works and how the numbers work.</p>
              <div class="testimonial_attrib">
                Kerri Mumford-Asheboro, Store Manager<br>N Touch Wireless
              </div>
            </div>
            <div class="testimonial">
              <p>Envysion is a great resource we use for coaching and training. For my District Managers Envysion saves them time and money.  Instead of driving from store to store they have the ability to check in regularly with their stores and inspect whether we are exhibiting good behaviors. Envysion has helped us increase sales by inspecting sales to see if we are maximizing and again helping us inspect if our reps are customer focused. Additionally we are able to help prevent fraud.  We look forward to continue using Envysion and learn a new practices on how to use Envysion to help us improve every day.  </p>
              <div class="testimonial_attrib">
                Elthon Munoz, AT&amp;T Portables
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="wrap more_padding dark_blue_wrap">
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

  <div class="wrap more_padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-centered feature-grid">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="text-center pn_light bluetext no_top_margin" style="font-size:46px;">Shorten the cycle of coaching and behavior change with video</h2>
              <p class="text-center padded">See and hear each interaction across all your stores with our easy-to-use video management system. Hone in on the interactions that matter most with exception-based reports. Save and share video clips to showcase best practices and coach struggling employees to improve behaviors. Then, save time and money by reviewing performance in our easy-to-use desktop or mobile application instead of traveling to observe on-location.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-centered text-center">
          <h2 class="bold-n-big no_top_margin">HOW OUR SYSTEM WORKS:</h2>
          <hr>
          <img class="img-responsive" src="<?php get_stylesheet_directory_uri(); ?>/assets/img/wirelesslp/how-enyvsion-works.png" style="margin:10px 0 55px;">
          <h2 class="bold-n-big no_top_margin more_bottom_margin">SO YOU CAN ADDRESS:</h2>
          <div class="row">
            <div class="col-sm-4 text-left ">
              <h4><strong>Sales Behaviors</strong></h4>
              <ul class="fancy-bullet-list">
                <li>Customer engagement</li>
                <li>Sales process compliance</li>
                <li>Proper qualification</li>
                <li>Wireless account analysis</li>
              </ul>
            </div>
            <div class="col-sm-4 text-left ">
              <h4><strong>Loss Behaviors</strong></h4>
              <ul class="fancy-bullet-list">
                <li>Safe procedure compliance</li>
                <li>Inventory handling</li>
                <li>Cash-handling procedures</li>
                <li>Commission fraud</li>
              </ul>
            </div>
            <div class="col-sm-4 text-left ">
              <h4><strong>Operational Behaviors</strong></h4>
              <ul class="fancy-bullet-list">
                <li>Employee clock-ins/outs</li>
                <li>Open/close procedures</li>
                <li>Performance in peak traffic</li>
                <li>Inventory procedures</li>
              </ul>
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
