<?php if( get_post_type() == 'casestudy'): ?>
	<a href="<?php echo home_url('/case-studies/'); ?>" class="cta-btn medium block primary more_bottom_margin"><i class="fa fa-caret-square-o-left"></i> Case Studies</a>
<?php else: ?>
	<a href="<?php echo home_url('/resources/'); ?>" class="cta-btn medium block primary more_bottom_margin"><i class="fa fa-caret-square-o-left"></i> Overview</a>
	<br>
<?php endif; ?>
<ul class="menu more_bottom_margin">
  <li class="<?php if(get_post_type() == 'whitepaper') echo "active"; ?>"><a href="<?php echo home_url('/whitepaper'); ?>">Whitepapers</a></li>
  <li class="<?php if(get_post_type() == 'casestudy') echo "active"; ?>"><a href="<?php echo home_url('/case-studies'); ?>">Case Studies</a></li>
  <li class="<?php if(get_post_type() == 'video') echo "active"; ?>"><a href="<?php echo home_url('/video'); ?>">Videos</a></li>
  <li class="<?php if(get_post_type() == 'webinars') echo "active"; ?>"><a href="<?php echo home_url('/webinars'); ?>">Webinars</a></li>
  <li class="<?php if(get_post_type() == 'tools') echo "active"; ?>"><a href="<?php echo home_url('/tools'); ?>">Tools</a></li>
  <li class="<?php if(get_post_type() == 'kits') echo "active"; ?>"><a href="<?php echo home_url('/kits'); ?>">Kits</a></li>
  <li class="<?php if(get_post_type() == 'reports') echo "active"; ?>"><a href="<?php echo home_url('/reports'); ?>">Reports</a></li>
  <li class="<?php if(get_post_type() == 'slicks') echo "active"; ?>"><a href="<?php echo home_url('/slicks'); ?>">Slicks</a></li>
</ul>
<!--
<ul class="menu more_bottom_margin">
  <li class="<?php if(is_tax('industry','retail')) echo "active"; ?>"><a href="<?php echo home_url('/industry-resource/retail/'); ?>">Retail</a></li>
  <li class="<?php if(is_tax('industry','wireless')) echo "active"; ?>"><a href="<?php echo home_url('/industry-resource/wireless/'); ?>">Wireless</a></li>
  <li class="<?php if(is_tax('industry','restaurant')) echo "active"; ?>"><a href="<?php echo home_url('/industry-resource/restaurant/'); ?>">Restaurant</a></li>
  <li class="<?php if(is_tax('industry','cinema')) echo "active"; ?>"><a href="<?php echo home_url('/industry-resource/cinema/'); ?>">Cinema</a></li>
  <li class="<?php if(is_tax('industry','hospitality')) echo "active"; ?>"><a href="<?php echo home_url('/industry-resource/hospitality/'); ?>">Hospitality</a></li>
</ul>
-->

<br />
<a href="#" class="cta-btn medium block orange more_bottom_margin scroll_to_hubspot_form"><i class="fa fa-desktop"></i> Request a Demo</a>
