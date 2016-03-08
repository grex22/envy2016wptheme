<?php

get_template_part('templates/head');

$resources_post_types = array('casestudy','whitepaper','video','webinars','podcasts','tools','kits','reports','slicks');

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
  
  	<div class="textheader">
        	<div class="container">
	        	<div class="row">
                <h2><a href="<?php echo get_permalink(9444); ?>" title="Case Studies">Case Studies</a> &rsaquo; Request</h2>
                </div>
            </div>
        </div>
    
    <div class="wrap container" role="document">
      <div class="content row">
        
        <div class="main <?php echo roots_main_class(); ?>" role="main">
        	
					<?php
						if(is_page(9595)): //the thank you page
							include roots_template_path();
						else:
						if(isset($_GET['cs']) && is_numeric($_GET['cs'])):
          		$casestudy = get_post($_GET['cs']); 
          	endif; 
						if($casestudy->ID):
            	$csurl = get_field('case_study_pdf',$casestudy->ID);
							include roots_template_path(); ?>
              <p class="lead">Thank you for your interest in the &quot;<strong><?php echo $casestudy->post_title; ?></strong>&quot; Case Study!<br><br>Please provide us with your name and email address and we'll send the full case study directly to your email.</p>
              <script charset="utf-8" src="//js.hsforms.net/forms/current.js"></script>
              <script>
                hbspt.forms.create({ 
                  portalId: '444576',
                  formId: '1b95ffe6-9f00-44af-9090-f652dea3c6b1',
                  onFormReady: function(){
                    $("input[name='requested_case_study']").val("<?php echo $casestudy->post_title; ?>");
                    $("input[name='case_study_url']").val("<?php echo $csurl; ?>");
                  }
                });
              </script>
            <?php else: ?>
            	<?php //include roots_template_path(); ?>
            	<p class="lead">We're sorry, but there was an error -- this case study wasn't found. Please contact us for assistance.</p>
            	
            <?php endif; ?>
            <?php endif; ?>

          


		
          
          
        </div><!-- /.main -->
        

      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php if(get_field('display_page_footer')): ?>
    <div class="message-block graybg leading_arrow">
      <div class="container">
        <div class="col-lg-12">
          <h2><?php the_field('footer_headline'); ?></h2>
          
          <?php if(get_field('f_primary_button_text')): ?>
          <a href="<?php the_field('f_primary_button_link'); ?>" class="cta-btn medium primary"><i class="fa fa-play-circle"></i> <?php the_field('f_primary_button_text'); ?></a>
          <?php endif; ?>
          <?php if(get_field('f_secondary_button_text')): ?>
          <a href="<?php the_field('f_secondary_button_link'); ?>" class="cta-btn medium secondary"><i class="fa fa-file-text"></i> <?php the_field('f_secondary_button_text'); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>
    

    <?php get_template_part('templates/footer'); ?>

  </div>
</body>
</html>
