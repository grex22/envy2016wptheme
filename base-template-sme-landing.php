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
    <div class="call-to-action-box ctab-sme-hero fullscreen-bg" style="background-image:url('<?php echo site_url(); ?>/assets/img/sme-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-8 even_more_bottom_padding">

                <h1 class="bluetext_brighter"><span class="pn_reg_bold_italic">Leverage your expertise</span> to improve industry solutions</h1>
                <p class="lead">
									We're passionate about helping retailers reduce theft &amp; loss and increase proﬁtability with innovative video-based technology. Join our team to advance the industry solutions with your extensive experience. 
								</p>
                <button type="button" class="cta-btn cta-btn-lg orange" data-toggle="modal" data-target="#learn_more_modal">Learn More&hellip;</button>
                <br>
                <br>


          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="wrap more_padding">
    <div class="container">
			<div class="row">
				<div class="col-sm-10 col-centered">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="text-center pn_reg_bold_italic bluetext">Join us in Advancing the Industry</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row more_bottom_margin">
				<div class="col-sm-10 col-centered feature-grid">
					<div class="row">
						<div class="col-md-4">
							<div class="text-center">
								<img src="<?php echo site_url(); ?>/assets/img/sme-award.svg">
								<h3 class="pn_reg_bold">Leverage your Expertise</h3>
							</div>
						</div>
						<div class="col-md-4">
							<div class="text-center">
								<img src="<?php echo site_url(); ?>/assets/img/sme-arrow.svg">
								<h3 class="pn_reg_bold">Improve Solutions for your Industry</h3>
							</div>
						</div>
						<div class="col-md-4">
							<div class="text-center">
								<img src="<?php echo site_url(); ?>/assets/img/sme-money.svg">
								<h3 class="pn_reg_bold">Create Additional Revenue</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row more_bottom_margin">
				<div class="col-sm-8 col-centered text-center">
					<h2 class="bold-n-big more_bottom_margin headline-with-pinstripe"><span>OUR MISSION</span></h2>
					<p class="lead">We help retailers reduce theft &amp; loss and increase proﬁtability by leveraging video and data to provide valuable insights about their operations, customer experiences, and staff behaviors.</p>
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


      <div class="item active">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-centered text-center">
              <h2 class="quote">
							One of the biggest advantages to working with Envysion is knowing that more great products and services are always in the pipeline. It’s so exciting to see a company constantly going to the drawing board trying to get better instead of sitting back and enjoying their previous successes."
							</h2>
							<div class="row">
								<div class="col-sm-3 col-sm-offset-2 text-right">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/smepage/kfc.png">
								</div>
								<div class="col-sm-6 text-left">
									<p class="attrib">
									Jason Zakaras<br>President and CEO, Zak Family Foods, LLC<br>KFC Franchisee
									</p>
								</div>
							</div>
            </div>
          </div>
        </div>
      </div>
			<div class="item">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-centered text-center">
              <h2 class="quote">
							From maximizing sales to minimizing loss, we have placed our faith in Envysion to be our trusted advisor for many years and the Envysion team is a critical partner of our organization."
							</h2>
							<div class="row">
								<div class="col-sm-3 col-sm-offset-2 text-right">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/smepage/sprint-preferred.png">
								</div>
								<div class="col-sm-6 text-left">
									<p class="attrib">
									Jeremy Roberts<br>Director of Operations, N Touch Wireless<br>Sprint Preferred Retailer
									</p>
								</div>
							</div>
            </div>
          </div>
        </div>
      </div>
			
			<div class="item">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-centered text-center">
              <h2 class="quote">
							Envysion has been the ideal partner for a growing company like ours. We can rely on high-quality continuing training and support around each of the tools we use, so everyone on our team is more comfortable and proficient with the system. It’s translated into greater adoption and a stronger return on our investment."
							</h2>
							<div class="row">
								<div class="col-sm-3 col-sm-offset-2 text-right">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/smepage/kfc.png">
								</div>
								<div class="col-sm-6 text-left">
									<p class="attrib">
									Jason Zakaras<br>President and CEO, Zak Family Foods, LLC<br>KFC Franchisee
									</p>
								</div>
							</div>
            </div>
          </div>
        </div>
      </div>
			
			<div class="item">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-centered text-center">
              <h2 class="quote">
							As long as you have a mobile connection, check out your stores anytime anywhere. Also the audio feed is amazing. Not only can we see our employees and what they are doing, but we can hear them and really get a good understanding of what’s important to them and how we can actually improve our business in every single way."
							</h2>
							<div class="row">
								<div class="col-sm-3 col-sm-offset-2 text-right">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/smepage/att-portables.png">
								</div>
								<div class="col-sm-6 text-left">
									<p class="attrib">
									Attique Rasheed<br>Sales Operations Manager<br>AT&amp;T Portables
									</p>
								</div>
							</div>
            </div>
          </div>
        </div>
      </div>
			
			<div class="item">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-centered text-center">
              <h2 class="quote">
							We use Envysion to do throughput audits&mdash;operational things like being ready for the shift, all hands on deck, all the food prepared. If Envysion shows us that those elements are in place, we know we're going to bring more customers through the doors, which results in higher sales."
							</h2>
							<div class="row">
								<div class="col-sm-4 col-sm-offset-2 text-right">
									<img style="margin:7px 17px 0 0" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/smepage/chipotle.png">
								</div>
								<div class="col-sm-6 text-left">
									<p class="attrib">
									Tim Spong<br>Executive Director of Safety, Security, and Risk<br>Chipotle
									</p>
								</div>
							</div>
            </div>
          </div>
        </div>
      </div>
			
			<div class="item">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-centered text-center">
              <h2 class="quote">
							Envysion has proven concrete ROI through their creative approach to solving problems most companies assume as sunken costs of conducting business. They’re the ideal partner to help us continue streamlining our current operations and maximizing profitability to accomplish our longer term goals."
							</h2>
							<div class="row">
								<div class="col-sm-3 col-sm-offset-2 text-right">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/smepage/elpolloloco.png">
								</div>
								<div class="col-sm-6 text-left">
									<p class="attrib">
									Shaun Jackson<br>Director of Risk Management<br>El Pollo Loco
									</p>
								</div>
							</div>
            </div>
          </div>
        </div>
      </div>
			
			<div class="item">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-centered text-center">
              <h2 class="quote">
							We have found Envysion to be a powerful asset to increase our sales by improving our team and discovering missed sales opportunities. While Envysion has been a great security resource, helping avoid break-ins, employee theft and greatly reducing fraudulent transactions, it has worked out to be much, much more than that."
							</h2>
							<div class="row">
								<div class="col-sm-3 col-sm-offset-2 text-right">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/smepage/sprint-preferred.png">
								</div>
								<div class="col-sm-6 text-left">
									<p class="attrib">
									Mark Long<br>Vice President, CCT Wireless<br>Sprint Preferred Retailer
									</p>
								</div>
							</div>
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
    
    <a class="left carousel-control" href="#quote_carousel_1" role="button" data-slide="prev">
      <span class="fa fa-angle-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#quote_carousel_1" role="button" data-slide="next">
      <span class="fa fa-angle-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    
  </div>
	
  <div class="modal fade modal_white_form" id="learn_more_modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Leverage your expertise to improve the industry and create an additional revenue stream. Complete the form to learn more!</h4>
        </div>
        <div class="modal-body">
          <?php
            if(function_exists('gravity_form')):
              //gravity_form( 1, false, false, false, null, true, 150 ); //(for development instance on localhost)
              gravity_form( 4, false, false, false, null, true, 150 );
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
