<?php get_template_part('templates/head'); ?>
<?php

  $reportsdata = array(
    'QSR' => array(
      'Protect' => array(
        array(
          'Q' => "Theft at registers?",
          'A' => "<p>Envysion flags and alerts you of suspicious transactions and enables you to easily access and reviews the video married with audio and your POS data to determine whether a theft occurred. &nbsp;Easily monitor cash handling compliance such as refunds, discounts, under-ringing, manager comps and other commonly abused transaction types. &nbsp;</p> <p>The results:</p> <ul> <li>Easily identify and review suspicious transactions</li> <li>Identify staff who may need training or corrective action</li> <li>Mitigate loss due to error and theft</li> <li>Return valuable profit to your bottom line</li> </ul>",
          'icon' => "1 - Front.png",
          'illus' => "1 - Inside.png"
        ),
        array(
          'Q' => "Evidence of break-in?",
          'A' => "<p>Quickly find and export video and snapshot images with date, time and location data to provide you with critical evidence to aid authorities and mitigate financial loss. &nbsp;The results:</p> <ul> <li>Easily save, share and download legally admissible video</li> <li>Save on investigation time and travel</li> <li>Minimize risk and loss</li> <li>Identify staff who may need training or corrective action</li> </ul>",
          'icon' => "6 - Front.png",
          'illus' => "6 - Inside.png"
        ),
        array(
          'Q' => "Inventory loss?",
          'A' => "<p>Envysion makes it easy to monitor and identify operational compliance issues and theft at exterior doors, cash deposit safes, office doors and product storage areas. &nbsp;&nbsp;</p> <ul> <li>Reduce inventory shrinkage and theft</li> <li>Monitor restricted areas for unusual activity</li> <li>Reduce product costs</li> <li>Ensure employee and guest safety</li> </ul>",
          'icon' => "4 - Front.png",
          'illus' => "4 - Inside.png"
        ),

        array(
          'Q' => "Staff or customer claim?",
          'A' => "<p>Even the best of businesses are caught off guard with false claims. Envysion allows you to see an incident from all angles to counter false claims. &nbsp;The results:</p> <ul> <li>Minimize the cost of or dismiss fraudulent claims</li> <li>Save evidence to the cloud or download legally-admissible video</li> <li>Minimize risk and mitigate potential loss</li> </ul>",
          'icon' => "7 - Front.png",
          'illus' => "7 - Inside.png"
        )
      ),
      'Grow' => array(
        array(
          'Q' => "Know your store conversion rate?",
          'A' => "<p>Envysion enables you to easily compare store traffic numbers with actual sales transactions. Know whether or not you have enough staff on hand and how effective they are.</p> <ul> <li>Boost sales and Increase profitability</li> <li>Identify employees who need to be coached</li> <li>Improve customer service</li> </ul>",
          'icon' => "14 - Front.png",
          'illus' => "14 - Inside.png"
        ),
        array(
          'Q' => "Proper food handling?",
          'A' => "<p>Envysion allows you to easily observe employee behavior when handling food and equipment. The results:</p> <ul> <li>Improve food safety and handling best practices</li> <li>Identify staff who may need training or corrective action</li> <li>Protect your company from food safety liability</li> </ul>",
          'icon' => "5 - Front.png",
          'illus' => "5 - Inside.png"
        ),
        array(
          'Q' => "Upsells / cross-sells offered?",
          'A' => "<p>Envysion ensures employees are following sales and operational best practices and offering the items that are most critical to your top-line revenue. The results:</p> <ul> <li>Increase top-line revenue by improving practices&middot; &nbsp;&nbsp;&nbsp;&nbsp;</li> <li>Identify trends and use to improve operational best practices</li> <li>Identify staff who may need training or corrective action</li> </ul>",
          'icon' => "8 - Front.png",
          'illus' => "8 - Inside.png"
        ),
        array(
          'Q' => "Exceptional customer experience?",
          'A' => "<p>Ensure your customers receive the best possible experience. Were they greeted promptly and friendly? Did the staff engage in the proper conversations in order to minimize errors and maximize cross-sells and upsells? Envysion enables you to know. The results:</p> <ul> <li>Ensure your employees are meeting your best practice standards</li> <li>Improve training by identifying trends</li> <li>Identify staff who may need training or corrective action</li> <li>Increase top-line revenue by improving operations</li> </ul>",
          'icon' => "9 - Front.png",
          'illus' => "9 - Inside.png"
        ),
        array(
          'Q' => "Customers waiting too long?",
          'A' => "<p>Envysion makes it easy to know if your customers are waiting too long in lines or to be served. &nbsp;Use this information to know exactly where to improve staffing and register throughput in order to minimize wait-times. &nbsp;The results:</p> <ul> <li>Optimize staffing relative to traffic and customer needs</li> <li>Decrease wait time to improve customer experience</li> <li>Improve training by identifying trends</li> </ul>",
          'icon' => "10 - Front.png",
          'illus' => "10 - Inside.png"
        ),
        array(
          'Q' => "Store presentable?",
          'A' => "<p>Envysion enables you to monitor store cleanliness, including drink and condiment stations, table cleanliness, trash overflow and more. Make impactful improvements and ensure best practices are followed to yield a great customer experience. &nbsp;The results:</p> <ul> <li>Ensure proper health code standards</li> <li>Improve customer experience</li> <li>Identify employees who need to be coached</li> </ul>",
          'icon' => "12 - Front.png",
          'illus' => "12 - Inside.png"
        )
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
            <h1>Solutions to Protect &amp; Grow</h1>
            <p class="lead">Envysion is the only platform that marries the power of video, POS and audio, providing you actionable insights that you can only get from the visual context of what is actually happening in your stores.</p>
            <a href="#" class="scroll_to_hubspot_form cta-btn cta-btn-lg orange">Demo Today!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="home_industry_ticker" class="">
    <div class="wrap container">
      <div id="logo_ticker">
        <!--
        <div class="simply-scroll-back simply-scroll-btn simply-scroll-btn-left slidecontrol"><i class="fa fa-chevron-left"></i></div>
        <div class="simply-scroll-forward simply-scroll-btn simply-scroll-btn-right slidecontrol"><i class="fa fa-chevron-right"></i></div>
        -->
        <ul id="scroller_list">
          <li><img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/logoticker/att-ticker.png'></li>
          <li><img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/logoticker/bootbarn-ticker.png'></li>
          <li><img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/logoticker/chipotle-ticker.png'></li>
          <li><img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/logoticker/cinemark-ticker-wide.png'></li>
          <li><img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/logoticker/einstein-ticker.png'></li>
          <li><img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/logoticker/elpolloloco-ticker.png'></li>
          <li><img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/logoticker/footlocker-ticker.png'></li>
          <li><img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/logoticker/gpc-ticker.png'></li>
          <li><img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/logoticker/kfc-ticker.png'></li>
          <li><img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/logoticker/murdochs-ticker.png'></li>
          <li><img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/logoticker/noodles-ticker.png'></li>
          <li><img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/logoticker/popeyes-ticker.png'></li>
          <li><img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/logoticker/pizzahut-ticker.png'></li>
          <li><img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos/logoticker/verizon-ticker.png'></li>
        </ul>
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
      <li data-target="#quote_carousel_1" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clientlogos/client_logo_pizzahut.png">
              <h2 class="quote">We have hundreds of units located all over the country which is challenging to manage and understand what is going on in each of the restaurants. Envysion enables us to easily see and manage all of our operations &mdash; all sites, all the time."</h2>
              <p class="attrib">Tommy Laughary, American Pizza Partners, Pizza Hut franchisee</p>
            </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clientlogos/client_logo_kfc.png">
              <h2 class="quote">We’ve had cameras in place for years but without any real insights or solid use cases. We learned about Envysion and the ways they can help with reduction in food costs, managing labor and helping to ensure our customers have a positive experience."</h2>
              <p class="attrib">Brian Wilson, Senior Vice President, West Quality Foods, KFC franchisee</p>
            </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <img style="padding:15px 0;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clientlogos/chipotle-logo-white.png">
              <h2 class="quote">Within minutes, I can see all of the exceptions across 30,000 employees in nearly 2,000 locations, and drill into the video for the 10 or 15 transactions that actually matter."</h2>
              <p class="attrib">Tim Spong, Director of Safety, Security and Risk, Chipotle</p>
            </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clientlogos/client_logo_att.png">
              <h2 class="quote">Envysion gives us unfiltered visibility into every transaction so we can see what is going on in all of our stores. This gives us actionable insights enabling us to improve sales and marketing, tighten operating procedures and reduce loss."</h2>
              <p class="attrib">Attique Rasheed, Head of Training and Operations, Portables, AT&amp;T</p>
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

  <?php get_template_part('templates/footer'); ?>
  </div>
</body>
</html>
