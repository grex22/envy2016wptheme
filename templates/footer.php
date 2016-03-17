<div class="dark_blue_wrap">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        Learn more
        <a href="<?php echo get_permalink(7018); ?>">VIDEO MANAGEMENT</a>
        <a href="<?php echo get_permalink(7015); ?>">INSIGHTS &amp; ANALYTICS</a>
        <a href="<?php echo get_permalink(7029); ?>">VIDEO AUDITS</a>
      </div>
    </div>
  </div>
</div>

<div id="hubspot_form_footer" class="call-to-action-box" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home-bokeh.jpg')">
  <div class="container">
    <h2 class="text-center">Could video be doing more for you?</h2>
    <div class="row">
      <div class="col-sm-offset-3 col-sm-6">
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="http://js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->
        <script charset="utf-8" type="text/javascript" src="http://js.hsforms.net/forms/v2.js"></script>
        <script>
          hbspt.forms.create({
            portalId: '444576',
            formId: '5f706d0d-448a-44fe-b1c3-3a4c2d59c2a0'
          });
        </script>
        <h4 class="text-center no_top_margin white">or call 877.258.9441</h4>
      </div>
    </div>
  </div>
</div>

<div id="footer-wrap">
  <footer class="content-info container" role="contentinfo">
    <div class="row more_bottom_margin">
      <div class="col-sm-12 text-center social_icons">
      	<a href="https://www.facebook.com/pages/Envysion/128871923883924" title="Envysion on Facebook">
          <span class="fa-stack fa-2x">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
          </span>
        </a>
        <a href="https://twitter.com/Envysion" title="Envysion on Twitter">
          <span class="fa-stack fa-2x">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
          </span>
        </a>
        <!--<a href="https://plus.google.com/+Envysion/about" title="Envysion on Google">
          <span class="fa-stack fa-2x">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
          </span>
        </a>-->
        <a href="https://www.linkedin.com/company/envysion" title="Envysion on LinkedIn">
          <span class="fa-stack fa-2x">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
          </span>
        </a>
        <a href="https://www.youtube.com/channel/UC5i9iOmnp620B0m0QyjvEoQ" title="Envysion on Youtube">
          <span class="fa-stack fa-2x">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-youtube-play fa-stack-1x fa-inverse"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-centered">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <h5>Contact</h5>
            <div class="footer_col_content_wrap">
              <?php the_field('footer_contact_block','option'); ?>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <h5>Solutions</h5>
            <div class="footer_col_content_wrap">
              <?php
                if (has_nav_menu('footer_industries_navigation')) :
                  wp_nav_menu(array('theme_location' => 'footer_industries_navigation', 'menu_class' => 'footer_nav'));
                endif;
              ?>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <h5>Company</h5>
            <div class="footer_col_content_wrap">
              <?php
                if (has_nav_menu('footer_column_4')) :
                  wp_nav_menu(array('theme_location' => 'footer_column_4', 'menu_class' => 'footer_nav'));
                endif;
              ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 footer_legal">
            <?php the_field('footer_legal_block','option'); ?>
          </div>
        </div>
      </div>
  </footer>
</div>
<?php //get_template_part('templates/eloqua','form'); ?>

<div style="display:none;">
	<div id="leadform">
        <h3>Request a Demo of Our Products</h3>
        <?php echo do_shortcode( '[hubspotform]' ); ?>
    </div>
</div>

<?php wp_footer(); ?>
<script src="//fast.wistia.com/static/integrations-hubspot-v1.js" async></script>
