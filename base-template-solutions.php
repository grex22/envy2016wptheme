<?php get_template_part('templates/head'); ?>
<?php

  $reportsdata = array(
    'QSR' => array(
      'Protect' => array(
        array(
          'Q' => "Theft at register?",
          'A' => "<p>Envysion flags suspicious transactions allowing you to easily access and view recorded video married with audio and transaction data to determine whether a theft occurred.</p> <p>The results:</p> <ul> <li> <p>Easily identify and review suspicious transactions</p> </li> <li> <p>Use recorded video and transaction to train or terminate</p> </li> <li> <p>Mitigate loss due to error and theft</p> </li> </ul>",
          'icon' => "Envysion_solutions_icon_outside_1.png",
          'illus' => "Envysion_solutions_icon_box_1.png"
        ),
        array(
          'Q' => "Evidence of break-in?",
          'A' => "<p>Quickly find and export video with date, time and location data to provide you with critical evidence to aid authorities and mitigate financial loss. The results:</p> <ul> <li> <p>Save evidence to the cloud or download legally-admissible video</p> </li> <li> <p>Minimize risk and loss</p> </li> <li> <p>Identify staff who may need training or corrective action</p> </li> </ul>",
          'icon' => "Envysion_solutions_icon_outside_6.png",
          'illus' => "Envysion_solutions_icon_box_6.png"
        ),
        array(
          'Q' => "Proper cash handling?",
          'A' => "<p>Receive violation alerts via email, including a snapshot and a link to the video. Improve your bottom-line by identifying areas for improvement and training. The results:</p> <ul> <li> <p>Enforce cash-handling policies</p> </li> <li> <p>Identify staff who may need training or corrective action</p> </li> <li> <p>Identify trends that require staff training to best practices</p> </li> <li> <p>Improve revenue retention</p> </li> </ul>",
          'icon' => "Envysion_solutions_icon_outside_2.png",
          'illus' => "Envysion_solutions_icon_box_2.png"
        ),
        array(
          'Q' => "Product missing?",
          'A' => "<p>Envysion&rsquo;s video and motion search technology makes it easy to monitor activity at exterior doors, office doors and walk-way, while our video audit services team reduce the time and cost of reviewing video and pin-pointing instances of theft.</p> <ul> <li> <p>Reduce shrinkage and theft</p> </li> <li> <p>Monitor restricted areas for unusual activity</p> </li> <li> <p>Control product costs</p> </li> </ul>",
          'icon' => "Envysion_solutions_icon_outside_4.png",
          'illus' => "Envysion_solutions_icon_box_4.png"
        ),

        array(
          'Q' => "False staff or customer claim?",
          'A' => "<p>Even the best of businesses are caught off guard with false claims. Envysion&rsquo;s transaction search and camera sync allow you to see an incident from all angles to counter false claims. The results:</p> <ul> <li> <p>Minimize the quantity of fraudulent claims</p> </li> <li> <p>Save evidence to the cloud or download legally-admissible video</p> </li> <li> <p>Minimize risk and mitigate potential loss</p> </li> <li> <p>Identify staff who may need training or corrective action</p> </li> </ul>",
          'icon' => "Envysion_solutions_icon_outside_7.png",
          'illus' => "Envysion_solutions_icon_box_7.png"
        ),
        array(
          'Q' => "Back door break-in?",
          'A' => "<p>Envysion&rsquo;s monitoring system can combine video and motion search to monitor unwanted activity in hidden places. Use Envysion to sure your product isn&rsquo;t escaping and unwanted guests aren&rsquo;t entering after hours. The results:</p> <ul> <li> <p>Monitor activity at your back door or high risk areas.</p> </li> <li> <p>Save evidence to the cloud or export with time/date/location-stamped video as needed</p> </li> <li> <p>Minimize risk and mitigate potential loss with evidence for law enforcement and insurance</p> </li> </ul>",
          'icon' => "Envysion_solutions_icon_outside_16.png",
          'illus' => "Envysion_solutions_icon_box_16.png"
        )

      ),
      'Grow' => array(
        array(
          'Q' => "Sales people effective?",
          'A' => "<p>Envysion allows you to directly compare entrance counting and employee interaction with sales so that have a complete picture with an employee conversion report. Use this report to gauge sales effectiveness and boost performance.</p> <ul> <li> <p>Improve customer service</p> </li> <li> <p>Reward stellar performance</p> </li> <li> <p>Identify employees who need to be coached</p> </li> <li> <p>Increase sales</p> </li> </ul>",
          'icon' => "Envysion_solutions_icon_outside_15.png",
          'illus' => "Envysion_solutions_icon_box_15.png"
        ),
        array(
          'Q' => "Staff discount abuse?",
          'A' => "<p>Envysion makes it easy to know if discounts are being abused. Experience the ease of POS/video integration and our video audit services team to gain high level summary reports so that you can quickly dig in and act on the things that matter most. The results:</p> <ul> <li> <p>Reduce discount abuse, sweet-hearting, and under-ringing</p> </li> <li> <p>Implement corrective actions to employees in violation</p> </li> <li> <p>Examine trends at employee, store and regional levels</p> </li> <li> <p>Reduce costs due to error and theft</p> </li> </ul>",
          'icon' => "Envysion_solutions_icon_outside_3.png",
          'illus' => "Envysion_solutions_icon_box_3.png"
        ),
        array(
          'Q' => "Proper food handling?",
          'A' => "<p>Envysion&rsquo;s video management system allows you to remotely view video to observe employee behavior when handling food and equipment. The results:</p> <ul> <li> <p>Improve food safety and handling best practices</p> </li> <li> <p>Identify staff who may need training or corrective action</p> </li> <li> <p>Protect your company from food safety liability</p> </li> </ul>",
          'icon' => "Envysion_solutions_icon_outside_5.png",
          'illus' => "Envysion_solutions_icon_box_5.png"
        ),
        array(
          'Q' => "Product upsells offered?",
          'A' => "<p>Envysion&rsquo;s combined video, audio, and point-of-sale data make it easy to ensure employees following sales best practices and offering the items that are critical to your top-line revenue. The results:</p> <ul> <li> <p>Identify trends and use to improve operational best practices</p> </li> <li> <p>Identify staff who may need training or corrective action</p> </li> <li> <p>Increase top-line revenue by improving practices</p> </li> <li> <p>Identify trends to monitor effectiveness of marketing activities</p> </li> </ul>",
          'icon' => "Envysion_solutions_icon_outside_8.png",
          'illus' => "Envysion_solutions_icon_box_8.png"
        ),
        array(
          'Q' => "Proper customer greeting?",
          'A' => "<p>Receive invaluable insight as to how your staff and customers interact. Use these insights to ensure your employees are meeting your best practice standards related to customer experience. The results:</p> <ul> <li> <p>Improve training by identifying trends</p> </li> <li> <p>Identify staff who may need training or corrective action</p> </li> <li> <p>Increase top-line revenue by improving operations</p> </li> </ul>",
          'icon' => "Envysion_solutions_icon_outside_9.png",
          'illus' => "Envysion_solutions_icon_box_9.png"
        ),
        array(
          'Q' => "Customer wait time?",
          'A' => "<p>Envysion makes it easy to track an hour-by-hour break down of customer wait times. Use this insight to make comparisons related to number of transactions and the average transaction value during each designated time period. The results:</p> <ul> <li> <p>Optimize staffing relative to traffic and customer needs</p> </li> <li> <p>Decrease wait time to improve customer experience</p> </li> <li> <p>Minimize customer abandonment</p> </li> <li> <p>Improve training by identifying trends</p> </li> </ul>",
          'icon' => "Envysion_solutions_icon_outside_10.png",
          'illus' => "Envysion_solutions_icon_box_10.png"
        ),
        array(
          'Q' => "Proper Staff Interaction with Customers?",
          'A' => "<p>Envysion&rsquo;s video audit team provides insight into employee interaction with guests, and can provide recommendations to help streamline and train staff to your best practices and service standards. The results:</p> <ul> <li> <p>Improve customer service</p> </li> <li> <p>Improve training by identifying trends</p> </li> <li> <p>Identify staff who may need training or corrective action</p> </li> </ul>",
          'icon' => "Envysion_solutions_icon_outside_11.png",
          'illus' => "Envysion_solutions_icon_box_11.png"
        ),
        /*
        array(
          'Q' => "Store front clean?",
          'A' => "",
          'icon' => "Envysion_solutions_icon_outside_X.png",
          'illus' => "Envysion_solutions_icon_box_X.png"
        ),
        array(
          'Q' => "Drink & condiment bar presentable?",
          'A' => "",
          'icon' => "Envysion_solutions_icon_outside_X.png",
          'illus' => "Envysion_solutions_icon_box_X.png"
        ),
        array(
          'Q' => "Enough staff on hand?",
          'A' => "",
          'icon' => "Envysion_solutions_icon_outside_X.png",
          'illus' => "Envysion_solutions_icon_box_X.png"
        ),
        array(
          'Q' => "Sales people effective?",
          'A' => "",
          'icon' => "Envysion_solutions_icon_outside_X.png",
          'illus' => "Envysion_solutions_icon_box_X.png"
        ),
        array(
          'Q' => "Accessory offered?",
          'A' => "",
          'icon' => "Envysion_solutions_icon_outside_X.png",
          'illus' => "Envysion_solutions_icon_box_X.png"
        ),
        array(
          'Q' => "Time it takes to greet customers?",
          'A' => "",
          'icon' => "Envysion_solutions_icon_outside_X.png",
          'illus' => "Envysion_solutions_icon_box_X.png"
        )
        */
      )
    )
  );

?>
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
    <div class="call-to-action-box" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/solutions-bokeh.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h1>Solutions</h1>
            <p class="lead">Envysion is the only platform that marries the power of video, POS and audio, providing you actionable insights that you can only get from the visual context of what is actually happening in your stores.</p>
            <a href="http://envysion.com/case-studies/" class="cta-btn cta-btn-lg orange">Demo Today!</a>
          </div>
        </div>
      </div>
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
  <div class="blurry_wrap">
    <div class="container">
      <div class="row more_padding">
        <div class="col-md-11 col-centered">
          <h2 class="text-center more_bottom_margin larger"><strong>KNOW</strong> exactly where you can improve.</h2>
          <h3 class="text-center no_top_margin pn_light">We bring you closer to the pulse of what’s happening inside your stores and provide powerful insights so you can make smart decisions to <strong>protect</strong> and <strong>grow</strong> your business. </h4>
          <br>
        </div>
      </div>
    </div>
    <div class="container reports_columns_wrap">
      <div class="row equal_row">
        <div class="col-sm-6">
          <div class="text-center">
            <h2 class="bold-n-big more_bottom_margin">PROTECT YOUR BUSINESS</h2>
            <ul class="iconlist list-unstyled row">
              <li class="col-xs-4 animated scroll-animate transparent" data-animation-class="fadeIn" data-delay="400">
                <img src="/assets/img/theft.svg">
                <br>
                THEFT &amp;<BR>FRAUD
              </li>
              <li class="col-xs-4 animated scroll-animate transparent" data-animation-class="fadeIn" data-delay="600">
                <img src="/assets/img/legal.svg">
                <br>
                HR &amp;<BR>LEGAL
              </li>
              <li class="col-xs-4 animated scroll-animate transparent" data-animation-class="fadeIn" data-delay="800">
                <img src="/assets/img/safety.svg">
                <br>
                SAFETY &amp;<BR>SECURITY
              </li>
            </ul>
          </div>
          <?php foreach($reportsdata as $industrykey => $industry): ?>
            <?php if($industrykey == 'QSR'): //REMOVE ME AFTER DEMO ?>
            <?php foreach($industry as $focuskey => $focus): ?>
              <?php if($focuskey == 'Protect'): //REMOVE ME AFTER DEMO ?>
                <?php foreach($focus as $key => $report): ?>
                  <div class="report-button-wrap">
                    <a data-toggle="modal" href="#report_<?php echo $industrykey ."_". $focuskey . "_" . $key; ?>" class="report-button <?php echo strtolower($focuskey) ?> <?php echo strtolower($industrykey); ?>">
                      <div class="container">
                        <div class="row equal_row">
                          <div class="col-sm-5">
                            <img class="solutionillustration" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/solutionsicons/<?php echo $report['icon']; ?>">
                          </div>
                          <div class="col-sm-7">
                            <h3><?php echo $report['Q']; ?></h3>
                            <h5>ENVYSION KNOWS</h5>
                            <img class="plus" height="35" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/plus-blue.svg">
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endforeach; ?>
              <?php endif; //REMOVE ME AFTER DEMO ?>
            <?php endforeach; ?>
          <?php endif; //REMOVE ME AFTER DEMO ?>
          <?php endforeach; ?>
        </div>
        <div class="col-sm-6">
          <div class="text-center">
            <h2 class="bold-n-big more_bottom_margin">GROW YOUR BUSINESS</h2>
            <ul class="iconlist list-unstyled row">
              <li class="col-xs-4 animated scroll-animate transparent" data-animation-class="fadeIn" data-delay="400">
                <img src="/assets/img/service.svg">
                <br>
                CUSTOMER<BR>EXPERIENCE
              </li>
              <li class="col-xs-4 animated scroll-animate transparent" data-animation-class="fadeIn" data-delay="600">
                <img src="/assets/img/operations.svg">
                <br>
                OPERATIONS
              </li>
              <li class="col-xs-4 animated scroll-animate transparent" data-animation-class="fadeIn" data-delay="800">
                <img src="/assets/img/sales.svg">
                <br>
                SALES<BR>PERFORMANCE
              </li>
            </ul>
          </div>
          <?php foreach($reportsdata as $industrykey => $industry): ?>
            <?php if($industrykey == 'QSR'): //REMOVE ME AFTER DEMO ?>
            <?php foreach($industry as $focuskey => $focus): ?>
              <?php if($focuskey == 'Grow'): //REMOVE ME AFTER DEMO ?>
                <?php foreach($focus as $key => $report): ?>
                  <div class="report-button-wrap">
                    <a data-toggle="modal" href="#report_<?php echo $industrykey ."_". $focuskey . "_" . $key; ?>" class="report-button <?php echo strtolower($focuskey) ?> <?php echo strtolower($industrykey); ?>">
                      <div class="container">
                        <div class="row equal_row">
                          <div class="col-sm-5">
                            <img class="solutionillustration" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/solutionsicons/<?php echo $report['icon']; ?>">
                          </div>
                          <div class="col-sm-7">
                            <h3><?php echo $report['Q']; ?></h3>
                            <h5>ENVYSION KNOWS</h5>
                            <img class="plus" height="35" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/plus-blue.svg">
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endforeach; ?>
              <?php endif; //REMOVE ME AFTER DEMO ?>
            <?php endforeach; ?>
          <?php endif; //REMOVE ME AFTER DEMO ?>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

  <div id="quote_carousel_1" class="carousel fade quote-carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#quote_carousel_1" data-slide-to="0" class="active"></li>
      <li data-target="#quote_carousel_1" data-slide-to="1"></li>
      <li data-target="#quote_carousel_1" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clientlogos/chipotle-logo-white.png">
              <h2 class="quote">Within minutes, I can see all of the exceptions across 30,000 employees across 1,750 locations, and drill into the video for the 10 or 15 transactions that actually matter.”</h2>
              <p class="attrib">Tim Spong, Director of Safety, Security and Risk, Chipotle</p>
            </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clientlogos/chipotle-logo-white.png">
              <h2 class="quote">Another quote, I can see all of the exceptions across 30,000 employees and also across 1,750 locations, and drill into the video for the 10 or 15 transactions that actually matter.”</h2>
              <p class="attrib">Tim Spong, Director of Safety, Security and Risk, Chipotle</p>
            </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clientlogos/chipotle-logo-white.png">
              <h2 class="quote">Lorem ipsum sans tranta sic gloria fisher sic sempre fi beekeeper, malta ma tran sict sa melto clas sictum"</h2>
              <p class="attrib">Alex Bauer, Director of Safety, Security and Risk, Chipotle</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--
  <div class="page_section container">
    <div class="row more_bottom_margin">
      <div class="col-xs-12">
        <h2 class="text-center">Featured Case Studies</h2>
      </div>
    </div>
    <div class="row vertical-align-col-fix more_bottom_margin">
      <div class="col-sm-4"><a data-toggle="modal" href="#cs_shell" class="big-border-button"><img class="vcenter" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/shell.png"></a></div>
      <div class="col-sm-4"><a data-toggle="modal" href="#cs_popeyes" class="big-border-button"><img class="vcenter" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/popeyes.png"></a></div>
      <div class="col-sm-4"><a data-toggle="modal" href="#cs_att" class="big-border-button"><img class="vcenter" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/att.png"></a></div>
      <div class="col-sm-4"><a data-toggle="modal" href="#cs_cinemark" class="big-border-button"><img class="vcenter" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/cinemark.png"></a></div>
      <div class="col-sm-4"><a data-toggle="modal" href="#cs_noodles" class="big-border-button"><img class="vcenter" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/noodles.png"></a></div>
      <div class="col-sm-4"><a data-toggle="modal" href="#cs_footlocker" class="big-border-button"><img class="vcenter" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/foot-locker.png"></a></div>
    </div>
  </div>
  -->

  <?php foreach($reportsdata as $industrykey => $industry): ?>
    <?php foreach($industry as $focuskey => $focus): ?>
      <?php foreach($focus as $key => $report): ?>
        <div class="modal fade chunky-modal chunky-modal-big" id="report_<?php echo $industrykey ."_". $focuskey . "_" . $key; ?>" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="clearfix"></div>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-5 modal-illustration text-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/solutionsillus/<?php echo $report['illus'] ?>">
                  </div>
                  <div class="col-sm-7 modal-illustration-content">
                    <h2><?php echo $report['Q'] ?></h2>
                    <?php echo $report['A'] ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endforeach; ?>
  <?php endforeach; ?>


  <div class="modal fade chunky-modal" id="cs_shell" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="clearfix"></div>
        </div>
        <div class="modal-body text-center">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/shell.png">
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
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/popeyes.png">
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
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/att.png">
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
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/cinemark.png">
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
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/noodles.png">
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
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/foot-locker.png">
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
