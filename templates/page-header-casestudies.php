<!--Not being used... -->
<div class="page-header">
  <?php
    if(get_field('display_page_header')) $tag = "h2";
    else $tag = "h2";
  ?>
  <div class="row">
  <div class="col-md-4">
  <<?php echo $tag; ?>>
    <?php echo roots_title(); ?>
  </<?php echo $tag; ?>>
  </div>
  <div class="col-md-4 text-right">
  	Filter by Industry
  </div>
  <div class="col-md-4">
  	<select class="form-control" id="isotope-filter">
      <option value="">All Industries</option>
      <?php foreach($activeindustries as $ai): ?>
      <option value="<?php echo $ai->slug; ?>"><?php echo $ai->name; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  </div>
</div>