<?php

get_template_part('templates/head');

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
  
    
      <div class="page_hero bluebg" style="background:url('http://envysion.com/wp-content/themes/roots/assets/img/chipotle-line.jpg');background-size:cover;background-position:center center;">
      	<div style="background-color: rgba(36,112,174,0.85)">
			<style>
                .page_hero.bluebg:after {
                  border-color: <?php echo $bgcolor; ?> transparent;
                }
              </style>
            <div class="wrap container extra_padding">
              <div class="row">
                <div class="col-sm-6 col-xs-12 page_hero_content">
                	<h5>Featured Case Study:</h5>
                  <h1 class="more_bottom_margin">Chipotle gains visibility into daily operations at every location.</h1>
                    <a href="http://envysion.com/media/Envysion-Case-Study-Chipotle.pdf" class="cta-btn primary"><i class="fa fa-play-circle"></i> Read Full Case Study</a>
                </div>
                <div class="col-sm-6 hidden-xs case_study_hero_quote">
                  <div class="quote_wrapper">
                  	<div class="quote_text">"We use Envysion to do throughput audits&mdash;operational things like being ready for the shift, all hands on deck, all the food prepared. If Envysion shows us that those elements are in place, we know we're going to bring more customers through the doors, which results in higher sales."</div>
                    <div class="quote_attrib text-right">
                    	<strong>Tim Spong</strong><br>
						Executive Director of Safety, Security, and Risk<br>
						Chipotle
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="trapezoid left"></div><div class="trapezoid right"></div>
      	</div>
      </div>
      
      
    <div class="wrap container" role="document">
      <div class="content row">
        
        
        <div class="main <?php echo roots_main_class(); ?>" role="main">
        	<?php
						$casestudies = get_posts(array(
							'post_type' => 'casestudy',
							'orderby' => 'date',
							'order' => 'DESC',
							'posts_per_page' => -1
						));
						$allindustries = get_categories(array('taxonomy'=>'industry'));
						$activeindustries = array();
						foreach ($allindustries as $i){
							if(get_posts(array('industry'=>$i->slug,'post_type'=>'casestudy','post_status' => 'publish'))):
								$activeindustries[] = $i;
							endif;
						}
						?>
            <div class="page-header container">
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
              <div class="col-md-4 filter-label">
                <h6>View by Industry</h6>
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

						<?php include roots_template_path(); ?>
            
            <?php 
									
									if($casestudies):
										echo "<div class='isotope-container'>";
										echo "<div class='isotope-sizer'></div>";
										foreach($casestudies as $post):
											setup_postdata($post);
											$terms = get_the_terms( $post->ID,'industry');
											$isgated = get_field('gate_this_case_study');
											$pdf = get_field('case_study_pdf');
											$blurb = get_field('_simple_fields_fieldGroupID_29_fieldID_1_numInSet_0');
											$directlink = get_permalink($post->ID);
											$hascontent = $post->post_content ? true : false;
											
											//Remove the below lines to turn on gating
											$isgated = false;
											//endremove
											
											if($isgated && $pdf):
												$defaultlink = get_permalink(9591) . "?cs=" . $post->ID;
												$directlink = $defaultlink;
											elseif($hascontent):
												$defaultlink = $directlink;
											else:
												$defaultlink = $pdf;
											endif;
											
											
											
											?>
											<div class="isotope-item <?php if($terms):
												foreach($terms as $t):
													echo $t->slug ." ";
												endforeach;
												endif;
												?>">
                      	<div class="isotope-item-interior">
                      	<?php if($terms):
                        	$keys = array_keys($terms);
													?>
                        	<div class="taxonomy-header <?php echo $terms[$keys[0]]->slug; ?>">
                          	<?php foreach($terms as $t): ?>
                            	<?php echo $t->name . " "; ?>
                            <?php endforeach; ?>
                          </div>
                        <?php endif; ?>
                        <h2><a href="<?php echo $defaultlink; ?>" title="<?php echo $post->post_title;?>"><?php echo $post->post_title;?></a></h2>
                        
                        <?php if ( has_post_thumbnail($post->ID) ):
													$post_thumbnail_id = get_post_thumbnail_id($post->ID);
													$post_thumbnail_url = wp_get_attachment_image_src( $post_thumbnail_id, 'casestudy_thumbnail' );
                          if($post_thumbnail_url[0]):?>
													<a href="<?php echo $defaultlink; ?>" title="<?php echo $post->post_title;?>">
													<img src="<?php echo $post_thumbnail_url[0]; ?>" class="casestudy-thumb" style="height:<?php echo $post_thumbnail_url[2]; ?>px; max-width:100%">
													</a>
                          <?php endif; ?>
                        <?php endif; ?>
                        
                        <?php if($blurb) echo "<p>".$blurb."</p>"; ?>
                        <div class="case_study_button_bar">
                        <?php if($pdf && $isgated):
																echo "<a class='btn cta-btn small' href='".$defaultlink."'>View Case Study</a>";
															else:
                        				if($hascontent): ?>
                                	<a class='btn cta-btn small' href='<?php echo $directlink; ?>'>View Case Study</a><?php
																endif;
																if($pdf && !$isgated):
																	echo  "<a class='btn cta-btn small' href='".$pdf."'>PDF <i class='fa fa-file-pdf-o'></i></a>";
																endif;
															endif;
																?>

                        </div>
                        </div>
                      </div>
                    
										<?php
										endforeach;
										echo "</div>"; // close isotope-container
									endif;
						?>
          
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
    
		<script>
			// This bit sets up jQuery isotope
			$(document).ready(function(){
																 
      var $container = jQuery('.isotope-container');
			$container.isotope({
				itemSelector: ".isotope-item",
				columnWidth: ".isotope-item"
			});
			
			
			// This does the filter by binding an event on the change of a select box
			jQuery("#isotope-filter").on("change", function() {
				group = jQuery(this).val();
				if(group != ""){
					group_class = "." + group;
				}else{
					group_class = "*";
				}
				$container.isotope({ filter: group_class });
			});
			});
		</script>
    <?php get_template_part('templates/footer'); ?>
  </div>
</body>
</html>
