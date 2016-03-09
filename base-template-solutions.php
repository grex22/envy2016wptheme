<?php get_template_part('templates/head'); ?>
<?php

  $reportsdata = array(
    'QSR' => array(
      'Protect' => array(
        array(
          'Q' => "How do you know if your employees are stealing from you at the point-of-sale?",
          'A' => "<p> Envysion’s point of sale exception reports identify suspicious transactions. Used in conjunction with video management, you can pinpoint potential situations for review. The results: </p> <ul> <li> Easily identify and review suspicious transactions </li> <li> Improve revenue retention </li> <li> Reward and promote trusted employees </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Do employees follow best practices when handling cash?",
          'A' => "<p> Envysion’s LP audit services notifies you via email with a description of the policy violation as well as a snapshot and link to the video. Audit services can help you pinpoint specific problem areas as well as to identify trends to improve your business practices. The results: </p> <ul> <li> Improve training by identifying trends </li> <li> Identify employees who need performance management </li> <li> Enforce cash-handling policies </li> <li> Improve revenue retention </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Do employees abuse discounts to steal or give away food?",
          'A' => "<p> Envysion’s point of sale exception report identifies suspicious transactions. Audit services sends notifications via email when there is activity related to incorrect discounts. The results: </p> <ul> <li> Reduce discount abuse, sweet-hearting, and under-ringing </li> <li> Implement corrective actions to employees in violation </li> <li> Improve revenue retention </li> <li> Identify regional or specific store trends </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Are food costs disappearing through your back door?",
          'A' => "<p> Envysion’s video management with motion search allows you to monitor activity at all points of exit. Audit services also alerts you when there has been any suspicious activity that could be a result of direct or indirect theft. </p> <ul> <li> Reduce theft </li> <li> Minimize loss and control food costs </li> <li> Monitor low traffic areas for suspicious activity </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Do employees comply with all food and kitchen safety policies?",
          'A' => "<p> Envysion’s video management system allows you to remotely view video to observe employee behavior when handling food. Reports can also be generated to help ensure you are in compliance with health standards. The results: </p> <ul> <li> Improve food safety/handling policies </li> <li> Implement corrective actions when violations occur </li> <li> Protect the organization from food safety liability </li> </ul> ",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Do you worry about break-ins after hours through your back door?",
          'A' => "<p> Envysion’s monitoring system can combine video and motion search to monitor unwanted activity in hidden places. This can help make sure your product isn’t escaping as well as making sure unwanted guests aren’t breaking in after hours. The results: </p> <ul> <li> Monitor activity at your back door or high risk areas. </li> <li> Save evidence to the cloud or export with time/date/location-stamped video as needed </li> <li> Minimize risk and mitigate potential loss with evidence for law enforcement and insurance </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Are you dealing with false employee or customer claims?",
          'A' => "<p> Even the best of businesses come under attack with false claims. Envysion’s video management along with insights and analytics help you to maintain needed evidence to counter any claims raised against the business. The results: </p> <ul> <li> Minimize the quantity of fraudulent claims </li> <li> Save evidence to the cloud or export with time/date/location-stamped video as needed </li> <li> Minimize risk and mitigate potential loss with evidence for law enforcement and insurance </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        )
      ),
      'Grow' => array(
        array(
          'Q' => "Do cashiers consistently offer high-margin items to your guests?",
          'A' => "<p> Envysion’s point-of-sale data and video management allow you to monitor performance to ensure employees promote and offer items that you recognize as critical. Additionally, audit services can provide direct feedback to you on the performance of employees specifically as a percentage of times certain items are offered. The results: </p> <ul> <li> Improve training by identifying trends </li> <li> Identify employees who need performance management </li> <li> Increase top-line revenue by improving practices </li> </ul>",
          'icon' => "qg-shopping-bag.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "How fast are your customers greeted?",
          'A' => "<p> Envysion’s audit services can provide detailed reports that add invaluable insight into the experience your customers experience at each location. You can use these customizable reports to insure your employees are meeting the brand expectations of the customer experience. The results: </p> <ul> <li> Improve training by identifying trends </li> <li> Identify employees who need performance management </li> <li> Increase top-line revenue by improving practices </li> </ul>",
          'icon' => "qg-gauge.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "How long do customers wait in line before reaching the register?",
          'A' => "<p> Envysion’s insight and analytics provides reports that include an hour-by-hour break down of customer wait times. This data can be used to make comparisons related to number of transactions and the average transaction value during each designated time period. The results: </p> <ul> <li> Optimize staffing relative to traffic and customer needs </li> <li> Decrease wait time to improve customer experience </li> <li> Minimize customer abandonment </li> <li> Improve training by identifying trends </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Are cashiers following best practices at the register with each customer interaction?",
          'A' => "<p> Envysion’s insight and analytics provides reporting that demonstrates employee performance as it relates to interacting with the customer. Audit services can also provide additional guidance to maximize customer service based on the brand’s expectations. The results: </p> <ul> <li> Improve customer service </li> <li> Improve training by identifying trends </li> <li> Identify employees who need to be coached </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "How long does it take staff to wipe down empty tables between guests?",
          'A' => "<p> Envysion’s video management combined with insight and analytics can generate reports that show cleaning time. Additionally, audit services can provide reporting to show how employees compare to the organization’s expectations. The results: </p> <ul> <li> Improve employee performance </li> <li> Increase health code compliance </li> <li> Improve customer experience </li> <li> Identify training needs </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "How do your drink and condiment stations impact customer experience?",
          'A' => "<p> Envysion’s audit services can review video to grade cleanliness and level of stocked items to help determine customer experience. Reports can demonstrate performance as it relates to organization’s expectations to these stations. The results: </p> <ul> <li> Increase health code compliance </li> <li> Improve customer experience </li> <li> Improve internal processes </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
      )
    ),
    'Retail' => array(
      'Protect' => array(
        array(
          'Q' => "How do you know if your employees are stealing from you at the point-of-sale?",
          'A' => "<p> Envysion’s point of sale exception reports identify suspicious transactions. Used in conjunction with video management, you can pinpoint potential situations for review. The results: </p> <ul> <li> Easily identify and review suspicious transactions </li> <li> Improve revenue retention </li> <li> Reward and promote trusted employees </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Do employees follow best practices when handling cash?",
          'A' => "<p> Envysion’s LP audit services notifies you via email with a description of the policy violation as well as a snapshot and link to the video. Audit services can help you pinpoint specific problem areas as well as to identify trends to improve your business practices. The results: </p> <ul> <li> Improve training by identifying trends </li> <li> Identify employees who need performance management </li> <li> Enforce cash-handling policies </li> <li> Improve revenue retention </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Do employees abuse discounts to steal or give away product?",
          'A' => "<p> Envysion’s point of sale exception report identifies suspicious transactions. Audit services sends notifications via email when there is activity related to incorrect discounts. The results: </p> <ul> <li> Reduce discount abuse, sweet-hearting, and under-ringing </li> <li> Implement corrective actions to employees in violation </li> <li> Improve revenue retention </li> <li> Identify regional or specific store trends </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Is product disappearing through your back door?",
          'A' => "<p> Envysion’s video management with motion search allows you to monitor activity at all points of exit. Audit services also alerts you when there has been any suspicious activity that could be a result of direct or indirect theft. </p> <ul> <li> Reduce theft </li> <li> <p> Minimize loss and control product costs </p> </li> <li> Monitor low traffic areas for suspicious activity </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Do you worry about break-ins after hours through your back door?",
          'A' => "<p> Envysion’s monitoring system can combine video and motion search to monitor unwanted activity in hidden places. This can help make sure your product isn’t escaping as well as making sure unwanted guests aren’t breaking in after hours. The results: </p> <ul> <li> Monitor activity at your back door or high risk areas. </li> <li> Save evidence to the cloud or export with time/date/location-stamped video as needed </li> <li> Minimize risk and mitigate potential loss with evidence for law enforcement and insurance </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        )
      ),
      'Grow' => array(
        array(
          'Q' => "Do cashiers consistently offer high-margin items to your guests?",
          'A' => "<p> Envysion’s point-of-sale data and video management allow you to monitor performance to ensure employees promote and offer items that you recognize as critical. Additionally, audit services can provide direct feedback to you on the performance of employees specifically as a percentage of times certain items are offered. The results: </p> <ul> <li> Improve training by identifying trends </li> <li> Identify employees who need performance management </li> <li> Increase top-line revenue by improving practices </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "How fast are your customers greeted?",
          'A' => "<p> Envysion’s audit services can provide detailed reports that add invaluable insight into the experience your customers experience at each location. You can use these customizable reports to insure your employees are meeting the brand expectations of the customer experience. The results: </p> <ul> <li> Improve training by identifying trends </li> <li> Identify employees who need performance management </li> <li> Increase top-line revenue by improving practices </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "How long do customers wait in line before reaching the register?",
          'A' => "<p> Envysion’s insight and analytics provides reports that include an hour-by-hour break down of customer wait times. This data can be used to make comparisons related to number of transactions and the average transaction value during each designated time period. The results: </p> <ul> <li> Optimize staffing relative to traffic and customer needs </li> <li> Decrease wait time to improve customer experience </li> <li>Minimize customer abandonment </li> <li> Improve training by identifying trends </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Are employees following best practices with each customer interaction?",
          'A' => "<p> Envysion’s insight and analytics provides reporting that demonstrates employee performance as it relates to interacting with the customer. Audit services can also provide additional guidance to maximize customer service based on the brand’s expectations. The results: </p> <ul> <li> Improve customer service </li> <li> Improve training by identifying trends </li> <li> Identify employees who need to be coached </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Are your staffing levels appropriate for customer traffic?",
          'A' => "<p> Envysion’s insight and analytics measures traffic, time spent waiting in line, and bottlenecks. The results: </p> <ul> <li> Improve customer service </li> <li> Staff according to needs to minimize both over and under staffing </li> <li> Optimize payroll expenses </li> <li> Increase revenue </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Which store is most effective at converting customer traffic to sales?",
          'A' => "<p> Envysion’s insight and analytics along with video allows you to directly compare entrance counting with sales so that you have a complete picture with a store conversion report. </p> <ul> <li> Improve customer service </li> <li> Improve training by identifying trends </li> <li> Identify employees who need to be coached </li> <li> Increase sales </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Which employee is most effective at converting customer traffic to sales?",
          'A' => "<p> Envysion’s insight and analytics along with video allows you to directly compare entrance counting and employee interaction with sales so that you have a complete picture with an employee conversion report. </p> <ul> <li> Improve customer service </li> <li> Reward stellar performance </li> <li> Identify employees who need to be coached </li> <li> Increase sales </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
      )
    ),
    'Wireless' => array(
      'Protect' => array(
        array(
          'Q' => "How do you know if your employees are stealing from you at the point-of-sale?",
          'A' => "<p> Envysion’s point of sale exception reports identify suspicious transactions. Used in conjunction with video management, you can pinpoint potential situations for review. The results: </p> <ul> <li> Easily identify and review suspicious transactions </li> <li> Improve revenue retention </li> <li> Reward and promote trusted employees </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Do employees follow best practices when handling cash?",
          'A' => "<p> Envysion’s LP audit services notifies you via email with a description of the policy violation as well as a snapshot and link to the video. Audit services can help you pinpoint specific problem areas as well as to identify trends to improve your business practices. The results: </p> <ul> <li> Improve training by identifying trends </li> <li> Identify employees who need performance management </li> <li> Enforce cash-handling policies </li> <li> Improve revenue retention </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Do employees abuse discounts to steal or give away product?",
          'A' => "<p> Envysion’s point of sale exception report identifies suspicious transactions. Audit services sends notifications via email when there is activity related to incorrect discounts. The results: </p> <ul> <li> Reduce discount abuse, sweet-hearting, and under-ringing </li> <li> Implement corrective actions to employees in violation </li> <li> Improve revenue retention </li> <li> Identify regional or specific store trends </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Is product disappearing through your back door?",
          'A' => "<p> Envysion’s video management with motion search allows you to monitor activity at all points of exit. Audit services also alerts you when there has been any suspicious activity that could be a result of direct or indirect theft. </p> <ul> <li> Reduce theft </li> <li> Minimize loss and control product costs </li> <li> Monitor low traffic areas for suspicious activity </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Do you worry about break-ins after hours through your back door?",
          'A' => "<p> Envysion’s monitoring system can combine video and motion search to monitor unwanted activity in hidden places. This can help make sure your product isn’t escaping as well as making sure unwanted guests aren’t breaking in after hours. The results: </p> <ul> <li> Monitor activity at your back door or high risk areas. </li> <li> Save evidence to the cloud or export with time/date/location-stamped video as needed </li> <li> Minimize risk and mitigate potential loss with evidence for law enforcement and insurance </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        )
      ),
      'Grow' => array(
        array(
          'Q' => "Do cashiers consistently offer accessories with each new activation?",
          'A' => "<p> Envysion’s point-of-sale data and video management allow you to monitor performance to ensure employees promote and offer items that you recognize as critical. Additionally, audit services can provide direct feedback to you on the performance of employees specifically as a percentage of times certain items are offered. The results: </p> <ul> <li> Improve training by identifying trends </li> <li> Identify employees who need performance management </li> <li> Increase top-line revenue by improving practices </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "How fast are your customers greeted?",
          'A' => "<p> Envysion’s audit services can provide detailed reports that add invaluable insight into the experience your customers experience at each location. You can use these customizable reports to insure your employees are meeting the brand expectations of the customer experience. The results: </p> <ul> <li> Improve training by identifying trends </li> <li> Identify employees who need performance management </li> <li> Increase top-line revenue by improving practices </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Which customers present the highest risk of  chargeback?",
          'A' => "TODO",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Are your staffing levels appropriate for customer traffic?",
          'A' => "<p> Envysion’s insight and analytics measures traffic, time spent waiting in line, and bottlenecks. The results: </p> <ul> <li> Improve customer service </li> <li> Staff according to needs to minimize both over and under staffing </li> <li> Optimize payroll expenses </li> <li> Increase revenue </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
        ),
        array(
          'Q' => "Which store is most effective at converting customer traffic to sales?",
          'A' => "<p> Envysion’s insight and analytics along with video allows you to directly compare entrance counting with sales so that you have a complete picture with a store conversion report. The results: </p> <ul> <li> Improve customer service </li> <li> Improve training by identifying trends </li> <li> Identify employees who need to be coached </li> <li> Increase sales </li> </ul>",
          'icon' => "insights-icon-gray.svg",
          'illus' => "report-graph-illustration.svg"
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
            <h1>Intelligent Insights</h1>
            <p class="lead">Envysion is the only platform that marries the power of video, POS and audio, providing you actionable insights that you can only get from the visual context of what is actually happening in your stores.</p>
            <a href="http://envysion.com/case-studies/" class="cta-btn cta-btn-lg orange">Demo Today!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="icon_tabs_wrap">
    <div style="display:none">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/quickserve-blue.svg">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/quickserve-white.svg">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/retail-blue.svg">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/retail-white.svg">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/wireless-blue.svg">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/wireless-white.svg">
    </div>
    <div class="page_section container">
      <h3 class="text-center white more_bottom_margin no_top_margin">Insights to meet your unique needs.</h3>
      <ul>
        <li id="industrytab_retail" role="presentation"><a href="#" data-toggle="tab">Retail<br>&nbsp;</a></li>
        <li id="industrytab_quickserve" role="presentation" class="active"><a href="#" data-toggle="tab">Quick&nbsp;Service<br>Restaurant</a></li>
        <li id="industrytab_wireless" role="presentation"><a href="#" data-toggle="tab">Wireless<br>Retail</a></li>
      </ul>
    </div>
  </div>
  <div class="page_section container less_padding">
    <div class="row more_bottom_margin">
      <div class="col-md-11 col-centered">
        <h2 class="text-center more_bottom_margin">Know exactly where you can improve.</h2>
        <h4 class="text-center no_top_margin even_more_bottom_margin pn_light">We bring you closer to the pulse of what’s happening inside your stores and provide powerful insights so you can make smart decisions to <strong>protect</strong> and <strong>grow</strong> your business. </h4>
        <br>
      </div>
    </div>
  </div>
  <div class="reports_header_wrap">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 text-center">
          <h3 class="more_bottom_margin">PROTECT YOUR BUSINESS</h3>
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
        <div class="col-sm-6 text-center">
          <h3 class="more_bottom_margin">GROW YOUR BUSINESS</h3>
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
      </div>
    </div>
  </div>

    <div class="page_section container reports_columns_wrap">
      <div class="row equal_row">
        <div class="col-sm-6">
          <?php foreach($reportsdata as $industrykey => $industry): ?>
            <?php if($industrykey == 'QSR'): //REMOVE ME AFTER DEMO ?>
            <?php foreach($industry as $focuskey => $focus): ?>
              <?php if($focuskey == 'Grow'): //REMOVE ME AFTER DEMO ?>
                <?php foreach($focus as $key => $report): ?>
                  <a data-toggle="modal" href="#report_<?php echo $industrykey ."_". $focuskey . "_" . $key; ?>" class="report-button <?php echo strtolower($focuskey) ?> <?php echo strtolower($industrykey); ?>">
                    <img class="alignleft" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/solutionsicons/<?php echo $report['icon']; ?>">
                    <h3><?php echo $report['Q']; ?></h3>
                    <div class="clearfix"></div>
                  </a>
                <?php endforeach; ?>
              <?php endif; //REMOVE ME AFTER DEMO ?>
            <?php endforeach; ?>
          <?php endif; //REMOVE ME AFTER DEMO ?>
          <?php endforeach; ?>
        </div>
        <div class="col-sm-6">
          <?php foreach($reportsdata as $industrykey => $industry): ?>
            <?php if($industrykey == 'QSR'): //REMOVE ME AFTER DEMO ?>
            <?php foreach($industry as $focuskey => $focus): ?>
              <?php if($focuskey == 'Protect'): //REMOVE ME AFTER DEMO ?>
                <?php foreach($focus as $key => $report): ?>
                  <a data-toggle="modal" href="#report_<?php echo $industrykey ."_". $focuskey . "_" . $key; ?>" class="report-button <?php echo strtolower($focuskey) ?> <?php echo strtolower($industrykey); ?>">
                    <img class="alignleft" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/<?php echo $report['icon']; ?>">
                    <h3><?php echo $report['Q']; ?></h3>
                    <div class="clearfix"></div>
                  </a>
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
              <h2>Within minutes, I can see all of the exceptions across 30,000 employees across 1,750 locations, and drill into the video for the 10 or 15 transactions that actually matter.”</h2>
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
              <h2>Another quote, I can see all of the exceptions across 30,000 employees and also across 1,750 locations, and drill into the video for the 10 or 15 transactions that actually matter.”</h2>
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
              <h2>Lorem ipsum sans tranta sic gloria fisher sic sempre fi beekeeper, malta ma tran sict sa melto clas sictum"</h2>
              <p class="attrib">Alex Bauer, Director of Safety, Security and Risk, Chipotle</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="page_section container">
    <div class="row">
      <div class="col-sm-12 text-center casestudyicons">
        <a href="#" data-toggle="popover" title="Case Study">Some logo</a>
        <a href="#" data-toggle="popover" title="Case Study">Some logo</a>
        <a href="#" data-toggle="popover" title="Case Study">Some logo</a>
        <a href="#" data-toggle="popover" title="Case Study">Some logo</a>
        <a href="#" data-toggle="popover" title="Case Study">Some logo</a>
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
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/<?php echo $report['illus'] ?>">
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
