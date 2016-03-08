<div class="page-header">
	<?php
		$newtitle = get_field('new_headline');
				
    if(get_field('display_page_header')) $tag = "h2";
    else $tag = "h2";
  ?>
  <<?php echo $tag; ?>>
  	<?php
    	if($newtitle):
				echo $newtitle;
			else:
				echo roots_title();
			endif;
		?>
		</<?php echo $tag; ?>>
</div>