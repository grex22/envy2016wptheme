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
                <h2 style="color:white">The next wave of Envysion loss prevention solutions</h2>
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
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">We Follow the Money</h2>
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4"><style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed//qL2ZL6fiVwc' frameborder='0' allowfullscreen></iframe></div></div>
        <div class="col-sm-4"><style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed//dnZgYtlluQk' frameborder='0' allowfullscreen></iframe></div></div>
        <div class="col-sm-4"><style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed//cLwAkLiD9yY' frameborder='0' allowfullscreen></iframe></div></div>
      </div>
      <br>
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
          <h2 class="">Frequently Asked Questions</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <ul class="nav nav-pills nav-stacked" role="tablist">
            <li role="presentation" class="active"><a href="#problems" aria-controls="problems" role="tab" data-toggle="tab">Problem</a></li>
            <li role="presentation"><a href="#solutions" aria-controls="solutions" role="tab" data-toggle="tab">Solution</a></li>
            <li role="presentation"><a href="#results" aria-controls="results" role="tab" data-toggle="tab">Results</a></li>
          </ul>
        </div>
        <div class="col-sm-8">
          <div class="tab-content">
            <?php
            $i = 1;
            $id = "problems";
            ?>
            <div role="tabpanel" class="tab-pane active" id="<?php echo $id; ?>">
              <div class="panel-group" id="<?php echo $id; ?>_accordion" role="tablist" aria-multiselectable="true">
                <?php
                $array = array(
                  "How prevalent is theft in quick serve restaurants?" => "Internal theft is responsible for 75% of inventory shortages, according to the National Restaurant Association. The same study showed quick serve restaurants lose up to 7% of sales to employee theft. And a U.S. Chamber of Commerce study reported 75% of all employees will steal from their employer once. Half will steal repeatedly.",
                  "How do I know if I have theft in my restaurant?" => "When we do our Revenue Recovery Analysis for a quick serve restaurant operator, we look at food and paper costs compared to ideal, industry-wide numbers, and geo-targeted information. Anything more than half a point difference suggests you have theft occurring in your restaurants.",
                  "How does theft impact my bottom line?" => "Say an employee puts $50 in her pocket each shift. Working five days a week, that’s $1,000 a month of your sales. How much did you spend on the food she stole? At ideal it’s about 30%, or $300. So her theft bumps your food and paper costs up .3%. Your gap is probably much bigger than that. Get the idea? If you stop theft, you make money.",
                  "What does Theft Spot do?" => "Theft Spot, powered by patent-pending Next Wave technology, puts stolen inventory back on your shelf and adds revenue to your bottom line. With our algorithm-driven technology, we look at every single transaction—even those without receipts—to identify, review, and verify suspicious events. Through our easy-to-use management reports we arm you with the evidence you need to counsel or terminate problem employees.",
                  "What’s the difference between a surveillance system and Theft Spot?" => "Theft Spot is a theft detection system. We follow the money, helping you stop theft and add recovered revenue to your top-line sales. A surveillance system comes in handy if you have a break in or someone makes a claim against you because of a safety concern or accident.",
                );

                foreach($array as $q => $a): ?>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="<?php echo $id.$i; ?>_head">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#<?php echo $id; ?>_accordion" href="#<?php echo $id.$i; ?>" aria-expanded="false" aria-controls="<?php echo $id.$i; ?>">
                          <?php echo $q; ?>
                        </a>
                      </h4>
                    </div>
                    <div id="<?php echo $id.$i; ?>" class="panel-collapse collapse <?php if($i == 1) echo 'in'; ?>" role="tabpanel" aria-labelledby="<?php echo $id.$i; ?>">
                      <div class="panel-body">
                        <?php echo $a; ?>
                      </div>
                    </div>
                  </div>
                  <?php
                  $i++;
                endforeach;
                ?>
              </div>
            </div>
            <?php
            $i = 1;
            $id = "solutions";
            ?>
            <div role="tabpanel" class="tab-pane" id="<?php echo $id; ?>">
              <div class="panel-group" id="<?php echo $id; ?>_accordion" role="tablist" aria-multiselectable="true">
                <?php
                $array = array(
                  "How does Theft Spot work?" => "The Next Wave technology integrates video surveillance, point of sale information, and speed of service systems along with a first-of-its-kind proprietary software complete with algorithms that actually teaches itself to find suspicious activity. You use the reports we provide to identify employees who need to be counseled or terminated.",
                  "How much time does it take to look at the reports?" => "Our 'big data' approach to transaction analysis sorts through thousands of hours of video and millions of data points each day to identify suspicious transactions. Our Daily Algorithm Results serve up short video clips with transactional information. Looking at the flagged events can take as little as 20 minutes per day per restaurant.",
                  "I have multiple sites, how do I manage all the reporting?" => "For multi-site installations, our Theft-Review Service reduces your time spent viewing the suspicious events and provides system-wide analysis of theft events that have been reviewed by a theft detection specialist and verified by one of our analysts. All you have to do is counsel or terminate your employees.",
                  "How do you compare to your competition?" => "We’ve got plenty of imitators who will tell you they can do everything the Next Wave technology can. But our customers tell us a different story. And many have run our system side-by-side with their legacy surveillance system and/or P.O.S. providers making such claims. What we’re told is “Next Wave finds theft no one else can.”",
                  "What about installation?" => "Most of our customers install our Theft Spot system themselves in conjunction with our on-call support team. But we also offer professional installation for your convenience.",
                  "Do you offer a surveillance system?" => "Old school surveillance systems are necessary…but they don’t make you money. So for our customers who want to install Theft Spot with a companion surveillance system, we’ll do it. But we’re just as happy to work alongside your existing system."
                );

                foreach($array as $q => $a): ?>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="<?php echo $id.$i; ?>_head">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#<?php echo $id; ?>_accordion" href="#<?php echo $id.$i; ?>" aria-expanded="false" aria-controls="<?php echo $id.$i; ?>">
                          <?php echo $q; ?>
                        </a>
                      </h4>
                    </div>
                    <div id="<?php echo $id.$i; ?>" class="panel-collapse collapse <?php if($i == 1) echo 'in'; ?>" role="tabpanel" aria-labelledby="<?php echo $id.$i; ?>">
                      <div class="panel-body">
                        <?php echo $a; ?>
                      </div>
                    </div>
                  </div>
                  <?php
                  $i++;
                endforeach;
                ?>
              </div>
            </div>

            <?php
            $i = 1;
            $id = "results";
            ?>
            <div role="tabpanel" class="tab-pane" id="<?php echo $id; ?>">
              <div class="panel-group" id="<?php echo $id; ?>_accordion" role="tablist" aria-multiselectable="true">
                <?php
                $array = array(
                  "What impact do you have on food and paper costs?" => "Across all of our customers, we’ve seen reductions in food and paper costs ranging from 0.5 percent to over 2.0 percent. Our average nationwide is 0.7 percent.",
                  "How does it affect my bottom line?" => "Using the lowest number (0.5 percent) on the range of projected savings, a typical restaurant grossing $1,200,000 a year is very likely to see more than $18,000 in recovered revenue a year. Using our national average of 0.7 percent, the projected annual savings is $25,200.",
                  "How much does Theft Spot cost?" => "For a typical lease payment option, Theft Spot costs $250 a month on a three-year service agreement. Other forms of payment may require a $900 on-board fee. On average we save our customers .7% in food and paper costs. Our costs come out to about .1% at a typical restaurant.",
                );

                foreach($array as $q => $a): ?>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="<?php echo $id.$i; ?>_head">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#<?php echo $id; ?>_accordion" href="#<?php echo $id.$i; ?>" aria-expanded="false" aria-controls="<?php echo $id.$i; ?>">
                          <?php echo $q; ?>
                        </a>
                      </h4>
                    </div>
                    <div id="<?php echo $id.$i; ?>" class="panel-collapse collapse <?php if($i == 1) echo 'in'; ?>" role="tabpanel" aria-labelledby="<?php echo $id.$i; ?>">
                      <div class="panel-body">
                        <?php echo $a; ?>
                      </div>
                    </div>
                  </div>
                  <?php
                  $i++;
                endforeach;
                ?>
              </div>
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
