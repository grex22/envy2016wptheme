<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TXC8LN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TXC8LN');</script>
<!-- End Google Tag Manager -->
<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <!--<a href="#leadform" class="cta-btn orange headerbtn pull-right mobile-headerbtn"> Demo </a>-->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right', 'depth' => 2));
        endif;
      ?>
    </nav>
  </div>


  <?php if(is_front_page() && get_field('show_homepage_annoucement','option')): ?>
    <div id="announcement_wrap">
      <div class="container">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="pull-left">
          <?php echo get_field('announcement_message','option'); ?>
          </div>
          <a href="#" id="announcement_close" style="margin-left:10px;" class="pull-right"><i class="fa fa-times"></i></a>
          <!--<a href="<?php echo get_field('announcement_button_link','option'); ?>" class="cta-btn secondary pull-right"><?php echo get_field('announcement_button_text','option'); ?></a>-->
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</header>
