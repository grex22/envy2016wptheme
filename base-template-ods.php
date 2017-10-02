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
  <div id="main_wrap" style="background-size:cover;background-position:top center;background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/parapetods/ods-hero-bg.jpg')">
    <div class="call-to-action-box relative">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/parapetods/splash-corner.png" class="triangle-corners tri-top">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/parapetods/splash-corner.png" class="triangle-corners tri-bottom">
			<img id="parapet-splash" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/parapetods/app-and-camera-splash-ods.png">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 text-left" style="padding-left:25px;">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/parapetods/envysion-ods-rev.png" style="max-width:350px">
            <h1 class="white pn_reg_bold no_bottom_margin">INTEGRATED VIDEO + DATA</h1>
            <h3 class="pn_reg_bold orangetext no_top_margin">For Quicker Incident Verification</h3>
          </div>
					<div class="col-md-5 col-sm-6 col-md-offset-1 text-left">
						
          </div>
					<a href="#first_section" class="scroll_prompt smooth_scroll"></a>
        </div>
      </div>
    </div>
  </div>
  <div class="container" id="first_section">
    <div class="row more_padding" style="">
      <div class="col-md-10 col-centered text-center">
        <h2 class="more_bottom_margin larger_2x pn_light bluetext">Improving Business Intelligence and Loss Prevention with Video</h2>
        <h3 class="no_top_margin">Envysion and OneDataSource, two technology leaders in the QSR industry, have teamed up to unveil a powerful, integrated loss prevention solution that saves time and maximizes efficiency for operators.</h3>
        <br>
      </div>
    </div>
		<div class="row " style="">
      <div class="col-sm-10 col-centered feature-grid">
        <div class="row">
          <div class="col-md-4">
            <div class="text-center">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/parapetods/eye-icon-blue.svg" width="80">
              <h3>See the Full Picture</h3>
              <p>Don’t rely on either video or transaction data alone to uncover loss— use both to make your investigation airtight.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="text-center">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/parapetods/checklist-icon-blue.svg" width="80">
              <h3>Save Time</h3>
              <p>Forget sifting through stacks of exception reports and focus on those few events that truly impact your bottom line. </p>
            </div>
          </div>
					<div class="col-md-4">
            <div class="text-center">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/parapetods/clock-icon-blue.svg" width="80">
              <h3>Save Money</h3>
              <p>Save time, money, and resources by utilizing our team of professionally-trained auditors.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
		<div class="row even_more_bottom_margin">
      <div class="col-sm-12 text-center">
				<a href="#hubspot_form_footer" class="btn btn-lg btn-clear smooth_scroll">Contact Us Today!</a>
			</div>
		</div>
  </div>
	<div id="quote_carousel_1" class="carousel fade quote-carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#quote_carousel_1" data-slide-to="0" class="active"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-centered text-center">
              <h2 class="quote">The integration with Envysion’s own audits combined with other loss prevention services and reporting tools is so invaluable. Verified incident notifications take us directly to the specific transaction and timeframe with a single click, saving us much time in the field. We are fortunate to have a system such as Envysion in our restaurants!"</h2>
              <p class="attrib">Mark Lambos, Development, Assets and Operations, Kendall House, Inc. KFC Franchisee</p>
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
	
	
  <div class="gray_wrap overflow-hidden relative">
    <div class="container">
      <div class="row more_padding">
        <div class="col-md-4 text-center">
					<img id="iphone-cameras" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/parapetods/iphone-cameras.png" style="">
				</div>
        <div class="col-md-8 text-center">
          <h2 class="even_more_bottom_margin pn_light text-uppercase larger_2x">The Eyes <span class="pn_reg_bold">Behind Your Data</span></h2>
          <p class="callout-p">Don’t rely on either video or transaction data alone to uncover loss—use both to make your investigations airtight. With OneDataSource’s multi-brand, customized business intelligence reports and process automation suite paired with Envysion’s powerful and reliable managed video solution, KFC operators can arrive at firm conclusions and take immediate action to reduce loss because video and transaction data are displayed side-by-side.</p>
        </div>
      </div>
    </div>
  </div>
	<div class="wrap dark_blue_wrap">
		<div class="container even_more_bottom_margin">
			<div class="row more_padding">
				<div class="col-sm-12 text-center">
					<h2 class="pn_reg_bold white">Here's how it works:</h2>
					<h3 class="pn_reg_bold white">Powerful solutions alone, <span class="bluetext pn_reg_bold_italic">even better together</span></h3>
				</div>
			</div>
			<div class="formula-box formula-box-plus">
				<div class="row">
					<div class="col-sm-6 text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/parapetods/envysion-logo.png" style="margin-top:30px;">
						<h3 class="pn_reg_bold_italic bluetext">Managed Video Solution</h3>
					</div>
					<div class="col-sm-6">
						<ul class="checkmark-list">
							<li>Video recording system</li>
							<li>Video platform with deskopt & mobile apps</li>
							<li>Managed video services</li>
							<li>Loss prevention audits</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="formula-box formula-box-equals">
				<div class="row">
					<div class="col-sm-6 text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/parapetods/ods-logo.png">
						<h3 class="pn_reg_bold_italic bluetext">Business Intelligence & Process Automation Solution</h3>
					</div>
					<div class="col-sm-6">
						<ul class="checkmark-list">
							<li>Multi-brand, customized business intelligence reports</li>
							<li>Business process automation</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="formula-box white orangebg">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h2 class="pn_reg_bold white">COMBINED SOLUTION</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<ul class="checkmark-list">
							<li>Video and transaction data side-by-side</li>
							<li>Incident tracking workflow</li>
						</ul>
					</div>
					<div class="col-sm-6">
						<ul class="checkmark-list">
							<li>Ability to view insights and trends</li>
							<li>Customizable reports</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="wrap gray_wrap even_more_padding relative">
    <div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<h2 class="larger_2x pn_light bluetext more_bottom_margin">Join Us at These Upcoming Events:</h2>
				</div>
			</div>
			<div class="relative">
				<div class="middle_line">
					<div class="row">
						<div class="col-md-6 text-center more_padded">
							<h2 class="pn_reg_bold text-uppercase no_bottom_margin">AKFCF Super Regional</h2>
							<h2 class="pn_light no_top_margin">October 9 - October 12</h2>
							<p class="more_bottom_margin more_top_margin">The Upper Midwest KFC Franchisee Association will be hosting the Fall Super Regional event in October. Join Envysion and a number of other industry leaders, vendors, and operators in St. Petersburg, FL for the annual fall business meeting in this cozy beach town.</p>
							<a href="https://envysion.com/event/akfcf-super-regional/" target="_blank" class="btn btn-lg btn-clear">Learn more</a>
						</div>
						<div class="col-md-6 text-center more_padded">
							<h2 class="pn_reg_bold text-uppercase no_bottom_margin">AKFCF Southeast</h2>
							<h2 class="pn_light no_top_margin">November 12 - November 15</h2>
							<p class="more_bottom_margin more_top_margin">KFC’s Southeast Franchisee Association will hold their fall meeting this November in Atlanta, GA. Join Envysion and many other industry vendors, suppliers, and operators, as well as members of the KFC Southeast Franchisee Association this fall for a three days full of networking opportunities and business exposure.</p>
							<a href="https://envysion.com/event/akfcf-southeast-2/" target="_blank" class="btn btn-lg btn-clear">Learn more</a>
						</div>
					</div>
				</div>
			</div>
    </div>
  </div>

  <?php get_template_part('templates/footer-ods'); ?>
  </div>
</body>
</html>
