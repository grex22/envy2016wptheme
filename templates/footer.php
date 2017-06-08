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
		<?php if(is_page_template('template-sme-landing.php')): ?>
			<h2 class="text-center">Advance the Industry by Joining our Team</h2>
		<?php else: ?>
			<h2 class="text-center">Could video be doing more for you?</h2>
		<?php endif; ?>
    <div class="row">
      <div class="col-sm-offset-3 col-sm-6">
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="http://js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->
        <script charset="utf-8" type="text/javascript" src="http://js.hsforms.net/forms/v2.js"></script>
        <script>
					<?php if(is_page_template('template-sme-landing.php')): ?>
					hbspt.forms.create({ 
						sfdcCampaignId: '701f3000001Ltm1AAC',
						portalId: '444576',
						formId: 'a6bc0f6f-d016-4b88-b874-b223122c549e'
					});
					<?php else: ?>
          hbspt.forms.create({
            portalId: '444576',
            formId: '5f706d0d-448a-44fe-b1c3-3a4c2d59c2a0'
          });
					<?php endif; ?>
        </script>
        <h4 class="text-center no_top_margin white">or call 877.258.9441</h4>
      </div>
    </div>
  </div>
</div>

<?php get_template_part( 'templates/footer-links' );
