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

    <?php if(get_field('display_page_header')): ?>
    <?php //load up our variables:
          $herostyle = get_field('hero_style');
          $headline = get_field('hero_headline');
          $blurb = get_field('hero_blurb');
          $button_p_text = get_field('hero_button');
		  $button_p_link_type = get_field('hero_button_link_type_primary');
          $button_p_link = get_field('hero_button_link');
		  $button_p_url = get_field('hero_button_primary_url');
          $button_s_text = get_field('hero_button_secondary');
		  $button_s_link_type = get_field('hero_button_link_type_secondary');
          $button_s_link = get_field('hero_button_secondary_link');
		  $button_s_url = get_field('hero_button_secondary_url');
          $bgimg = get_field('hero_image_background');
          $highlightimg = get_field('hero_image');
          $bgcolor = get_field('hero_background_color');

          if($herostyle == 'split'):
    ?>

      <div class="page_hero bluebg" style="background-color:<?php echo $bgcolor; ?>">
        <div class="wrap container extra_padding">
          <div class="row">
            <div class="col-xs-6 page_hero_content">
              <h1><?php
                if($headline) echo $headline;
                else the_title()
              ?></h1>
              <?php if($blurb): ?><p><?php echo $blurb; ?></p><?php endif; ?>
              <?php if($button_p_text): ?>
                <a href="<?php echo $button_p_link; ?>" class="cta-btn primary"><?php echo $button_p_text; ?></a>
              <?php endif; ?>
              <?php if($button_s_text): ?>
                <a href="<?php echo $button_s_link; ?>" class="cta-btn"><?php echo $button_s_text; ?></a>
              <?php endif; ?>
            </div>
            <div class="col-xs-6 page_hero_graphic">
              <?php if($highlightimg): ?>
                <?php echo wp_get_attachment_image($highlightimg,'full'); ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <?php elseif($herostyle == 'center'): ?>

      <div class="page_hero bluebg" style="background:url('<?php $bgimgsrc = wp_get_attachment_image_src($bgimg, 'full'); echo $bgimgsrc[0]; ?>');background-size:cover;background-position:center center;">
        <?php if($bgcolor) $bgcolor_opacity = hex2rgba( $bgcolor, 0.8); ?>
        <div style=" <?php if($bgcolor_opacity) echo 'background-color:'. $bgcolor_opacity; ?> ">
          <style>
            .page_hero.bluebg:after {
              border-color: <?php echo $bgcolor; ?> transparent;
            }
          </style>
          <div class="wrap container extra_padding">
            <div class="row">
              <div class="col-lg-12 page_hero_content text-center" style="min-height:270px;">
                <h1><?php
                  if($headline) echo $headline;
                  else //the_title()
                ?></h1>
                <?php if($blurb): ?><p><?php echo $blurb; ?></p><?php endif; ?>
                <?php if($button_p_text): ?>
                  <?php if($button_p_link_type == 'rdmodal') $button_p_link = '#leadform'; ?>
                  <?php if($button_p_link_type == 'url') $button_p_link = $button_p_url; ?>
                  <a href="<?php echo $button_p_link; ?>" class="<?php if($button_p_link_type == 'rdmodal') echo "fancybox "; ?>cta-btn primary"><?php echo $button_p_text; ?></a>
                <?php endif; ?>
                <?php if($button_s_text): ?>
                  <?php if($button_s_link_type == 'rdmodal') $button_s_link = '#leadform'; ?>
                  <?php if($button_s_link_type == 'url') $button_s_link = $button_s_url; ?>
                  <a href="<?php echo $button_s_link; ?>" class="<?php if($button_s_link_type == 'rdmodal') echo "fancybox "; ?>cta-btn"><?php echo $button_s_text; ?></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="trapezoid left"></div><div class="trapezoid right"></div>
        </div>
      </div>

      <?php endif; ?>
    <?php endif; ?>
    <div class="wrap container" role="document">
      <div class="content row">


        <div class="main <?php echo roots_main_class(); ?>" role="main">

          <?php if(get_field('hide_content')): ?>
          	<?php the_field('substitute_content'); ?>
          <?php else: ?>
          	<?php include roots_template_path(); ?>
          <?php endif; ?>

        </div><!-- /.main -->

        <?php if (roots_display_sidebar()) : ?>

            <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
            	<div id="blog_sidebar_wrapper">
                <?php get_template_part('templates/summit','sidebar'); ?>
                </div>
            </aside>

        <?php endif; ?>

      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php if(get_field('display_page_footer')): ?>
    <!--
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
    -->
    <?php endif; ?>


    <?php get_template_part('templates/footer'); ?>
  </div>
</body>
</html>
