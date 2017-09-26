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

  	<?php if((is_home() || is_single() || is_archive() || is_category() || is_tag() || is_search()) && (!is_tax( 'industry' ) && !is_singular( $resources_post_types ) && !is_post_type_archive( $resources_post_types )) ): ?>
    	<div class="textheader">
        	<div class="container">
	        	<div class="row"><!--<h1><a href="<?php echo get_permalink(4); ?>">Blog</a></h1>-->
                <h2><?php if(!is_home()): ?><a href="<?php echo get_permalink(4); ?>">Blog</a> &larr; <?php endif; ?>Insights for improving profitability through video-based business intelligence.</h2>
                </div>
            </div>
        </div>
    <?php endif; ?>
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
              <div class="col-lg-12 page_hero_content text-center">
                <h1><?php
                  if($headline) echo $headline;
                  else the_title()
                ?></h1>
                <?php if($blurb): ?><p><?php echo $blurb; ?></p><?php endif; ?>
                <?php if($button_p_text): ?>
                  <?php if($button_p_link_type == 'rdmodal') $button_p_link = '#'; ?>
                  <?php if($button_p_link_type == 'url') $button_p_link = $button_p_url; ?>
                  <a href="<?php echo $button_p_link; ?>" class="<?php if($button_p_link_type == 'rdmodal') echo "scroll_to_hubspot_form "; ?>cta-btn primary"><?php echo $button_p_text; ?></a>
                <?php endif; ?>
                <?php if($button_s_text): ?>
                  <?php if($button_s_link_type == 'rdmodal') $button_s_link = '#'; ?>
                  <?php if($button_s_link_type == 'url') $button_s_link = $button_s_url; ?>
                  <a href="<?php echo $button_s_link; ?>" class="<?php if($button_s_link_type == 'rdmodal') echo "scroll_to_hubspot_form "; ?>cta-btn"><?php echo $button_s_text; ?></a>
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
        <?php if (roots_display_sidebar()) :
				$show_blog_sidebar = false;

			   	if((is_home() || is_single() || is_archive() || is_category() || is_tag() || is_search()) && (!is_tax( 'industry' ) && !is_singular( $resources_post_types ) && !is_post_type_archive( $resources_post_types )) ):
  					$show_blog_sidebar = true;
  				endif;
  				if($show_blog_sidebar == false):
					if( is_post_type_archive( $resources_post_types ) || is_singular( $resources_post_types ) || is_page('resources') || is_tax('industry') ): ?>
                        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
                            <div id='blog_sidebar_wrapper'>
                            <?php get_template_part('templates/resources-sidebar'); ?>
                            </div>
                        </aside>
                    <?php else: ?>
                        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
                            <?php get_template_part('templates/sidebar'); ?>
                        </aside><?php
					endif;
				endif;
			endif; ?>

        <div class="main <?php echo roots_main_class(); ?>" role="main">

          <?php include roots_template_path(); ?>
					
					<div class="teammembers-grid">
						<ul id="og-grid-l" class="og-grid">
						<?php
						
						if(have_rows('leadership_team_member')):
							echo "<h2>Leadership Team</h2>";
							while ( have_rows('leadership_team_member') ) : the_row();

									$name = get_sub_field('name');
									$title = get_sub_field('title');
									$img = get_sub_field('headshot');
									$bio = get_sub_field('bio');
									?>
									<li>
										<a href="#" data-title="<?php echo $name; ?>" data-description="<?php echo $bio; ?>">
											<div class="imgwrap">
												<img src="<?php echo $img['sizes']['headshot_square']; ?>" width="220" height="220" alt="<?php echo $name; ?>">
											</div>
											<h3 class="no_bottom_margin"><?php echo $name; ?></h3>
											<p><small><?php echo $title; ?></small></p>
										</a>
									</li>
									<?php
							endwhile;
						endif;
						if(have_rows('board_member')):
							echo "<h2>Board of Directors</h2>";
							while ( have_rows('board_member') ) : the_row();

									$name = get_sub_field('name');
									$title = get_sub_field('title');
									$img = get_sub_field('headshot');
									$bio = get_sub_field('bio');
									?>
									<li>
										<a href="#" data-title="<?php echo $name; ?>" data-description="<?php echo $bio; ?>">
											<div class="imgwrap">
												<img src="<?php echo $img['sizes']['headshot_square']; ?>" width="220" height="220" alt="<?php echo $name; ?>">
											</div>
											<h3 class="no_bottom_margin"><?php echo $name; ?></h3>
											<p><small><?php echo $title; ?></small></p>
										</a>
									</li>
									<?php
							endwhile;
						endif;
						
						?>
						</ul>
					</div>

        </div><!-- /.main -->

        <?php if( $show_blog_sidebar ): ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
            <div id='blog_sidebar_wrapper'>
            <?php get_template_part('templates/blog-sidebar'); ?>
            </div>
        </aside>
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <!--
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
    -->


    <?php get_template_part('templates/footer'); ?>
		
		<script>
		
			$(document).ready(function(){
			/*
			* debouncedresize: special jQuery event that happens once after a window resize
			*
			* latest version and complete README available on Github:
			* https://github.com/louisremi/jquery-smartresize/blob/master/jquery.debouncedresize.js
			*
			* Copyright 2011 @louis_remi
			* Licensed under the MIT license.
			*/
			var $event = $.event,
			$special,
			resizeTimeout;

			$special = $event.special.debouncedresize = {
				setup: function() {
					$( this ).on( "resize", $special.handler );
				},
				teardown: function() {
					$( this ).off( "resize", $special.handler );
				},
				handler: function( event, execAsap ) {
					// Save the context
					var context = this,
						args = arguments,
						dispatch = function() {
							// set correct event type
							event.type = "debouncedresize";
							$event.dispatch.apply( context, args );
						};

					if ( resizeTimeout ) {
						clearTimeout( resizeTimeout );
					}

					execAsap ?
						dispatch() :
						resizeTimeout = setTimeout( dispatch, $special.threshold );
				},
				threshold: 250
			};

			// ======================= imagesLoaded Plugin ===============================
			// https://github.com/desandro/imagesloaded

			// $('#my-container').imagesLoaded(myFunction)
			// execute a callback when all images have loaded.
			// needed because .load() doesn't work on cached images

			// callback function gets image collection as argument
			//  this is the container

			// original: MIT license. Paul Irish. 2010.
			// contributors: Oren Solomianik, David DeSandro, Yiannis Chatzikonstantinou

			// blank image data-uri bypasses webkit log warning (thx doug jones)
			var BLANK = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';

			$.fn.imagesLoaded = function( callback ) {
				var $this = this,
					deferred = $.isFunction($.Deferred) ? $.Deferred() : 0,
					hasNotify = $.isFunction(deferred.notify),
					$images = $this.find('img').add( $this.filter('img') ),
					loaded = [],
					proper = [],
					broken = [];

				// Register deferred callbacks
				if ($.isPlainObject(callback)) {
					$.each(callback, function (key, value) {
						if (key === 'callback') {
							callback = value;
						} else if (deferred) {
							deferred[key](value);
						}
					});
				}

				function doneLoading() {
					var $proper = $(proper),
						$broken = $(broken);

					if ( deferred ) {
						if ( broken.length ) {
							deferred.reject( $images, $proper, $broken );
						} else {
							deferred.resolve( $images );
						}
					}

					if ( $.isFunction( callback ) ) {
						callback.call( $this, $images, $proper, $broken );
					}
				}

				function imgLoaded( img, isBroken ) {
					// don't proceed if BLANK image, or image is already loaded
					if ( img.src === BLANK || $.inArray( img, loaded ) !== -1 ) {
						return;
					}

					// store element in loaded images array
					loaded.push( img );

					// keep track of broken and properly loaded images
					if ( isBroken ) {
						broken.push( img );
					} else {
						proper.push( img );
					}

					// cache image and its state for future calls
					$.data( img, 'imagesLoaded', { isBroken: isBroken, src: img.src } );

					// trigger deferred progress method if present
					if ( hasNotify ) {
						deferred.notifyWith( $(img), [ isBroken, $images, $(proper), $(broken) ] );
					}

					// call doneLoading and clean listeners if all images are loaded
					if ( $images.length === loaded.length ){
						setTimeout( doneLoading );
						$images.unbind( '.imagesLoaded' );
					}
				}

				// if no images, trigger immediately
				if ( !$images.length ) {
					doneLoading();
				} else {
					$images.bind( 'load.imagesLoaded error.imagesLoaded', function( event ){
						// trigger imgLoaded
						imgLoaded( event.target, event.type === 'error' );
					}).each( function( i, el ) {
						var src = el.src;

						// find out if this image has been already checked for status
						// if it was, and src has not changed, call imgLoaded on it
						var cached = $.data( el, 'imagesLoaded' );
						if ( cached && cached.src === src ) {
							imgLoaded( el, cached.isBroken );
							return;
						}

						// if complete is true and browser supports natural sizes, try
						// to check for image status manually
						if ( el.complete && el.naturalWidth !== undefined ) {
							imgLoaded( el, el.naturalWidth === 0 || el.naturalHeight === 0 );
							return;
						}

						// cached images don't fire load sometimes, so we reset src, but only when
						// dealing with IE, or image is complete (loaded) and failed manual check
						// webkit hack from http://groups.google.com/group/jquery-dev/browse_thread/thread/eee6ab7b2da50e1f
						if ( el.readyState || el.complete ) {
							el.src = BLANK;
							el.src = src;
						}
					});
				}

				return deferred ? deferred.promise( $this ) : $this;
			};

			var Grid = (function() {

					// list of items
					var $grid = $( '#og-grid-l' ),
					// the items
					$items = $grid.children( 'li' ),
					// current expanded item's index
					current = -1,
					// position (top) of the expanded item
					// used to know if the preview will expand in a different row
					previewPos = -1,
					// extra amount of pixels to scroll the window
					scrollExtra = 0,
					// extra margin when expanded (between preview overlay and the next items)
					marginExpanded = 10,
					$window = $( window ), winsize,
					$body = $( 'html, body' ),
					// transitionend events
					transEndEventNames = {
						'WebkitTransition' : 'webkitTransitionEnd',
						'MozTransition' : 'transitionend',
						'OTransition' : 'oTransitionEnd',
						'msTransition' : 'MSTransitionEnd',
						'transition' : 'transitionend'
					},
					transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
					// support for csstransitions
					support = Modernizr.csstransitions,
					// default settings
					settings = {
						minHeight : 450,
						speed : 350,
						easing : 'ease'
					};

				function init( config ) {
					
					// the settings..
					settings = $.extend( true, {}, settings, config );

					// preload all images
					$grid.imagesLoaded( function() {

						// save item´s size and offset
						saveItemInfo( true );
						// get window´s size
						getWinSize();
						// initialize some events
						initEvents();

					} );

				}

				// add more items to the grid.
				// the new items need to appended to the grid.
				// after that call Grid.addItems(theItems);
				function addItems( $newitems ) {

					$items = $items.add( $newitems );

					$newitems.each( function() {
						var $item = $( this );
						$item.data( {
							offsetTop : $item.offset().top,
							height : $item.height()
						} );
					} );

					initItemsEvents( $newitems );

				}

				// saves the item´s offset top and height (if saveheight is true)
				function saveItemInfo( saveheight ) {
					$items.each( function() {
						var $item = $( this );
						$item.data( 'offsetTop', $item.offset().top );
						if( saveheight ) {
							$item.data( 'height', $item.height() );
						}
					} );
				}

				function initEvents() {
					
					// when clicking an item, show the preview with the item´s info and large image.
					// close the item if already expanded.
					// also close if clicking on the item´s cross
					initItemsEvents( $items );
					
					// on window resize get the window´s size again
					// reset some values..
					$window.on( 'debouncedresize', function() {
						
						scrollExtra = 0;
						previewPos = -1;
						// save item´s offset
						saveItemInfo();
						getWinSize();
						var preview = $.data( this, 'preview' );
						if( typeof preview != 'undefined' ) {
							hidePreview();
						}

					} );

				}

				function initItemsEvents( $items ) {
					
					$items.on( 'click', 'span.og-close', function() {
						hidePreview();
						return false;
					} ).children( 'a' ).on( 'click', function(e) {
						
						var $item = $( this ).parent();
						// check if item already opened
						current === $item.parent().children('li').index($item) ? hidePreview() : showPreview( $item );
						return false;

					} );
				}

				function getWinSize() {
					winsize = { width : $window.width(), height : $window.height() };
				}

				function showPreview( $item ) {

					var preview = $.data( this, 'preview' ),
						// item´s offset top
						position = $item.data( 'offsetTop' );

					scrollExtra = -70;

					// if a preview exists and previewPos is different (different row) from item´s top then close it
					if( typeof preview != 'undefined' ) {

						// not in the same row
						if( previewPos !== position ) {
							// if position > previewPos then we need to take te current preview´s height in consideration when scrolling the window
							if( position > previewPos ) {
								scrollExtra = preview.height;
							}
							hidePreview();
						}
						// same row
						else {
							preview.update( $item );
							return false;
						}
						
					}

					// update previewPos
					previewPos = position;
					// initialize new preview for the clicked item
					preview = $.data( this, 'preview', new Preview( $item ) );
					// expand preview overlay
					preview.open();

				}

				function hidePreview() {
					current = -1;
					var preview = $.data( this, 'preview' );
					preview.close();
					$.removeData( this, 'preview' );
				}

				// the preview obj / overlay
				function Preview( $item ) {
					this.$item = $item;
					this.expandedIdx = this.$item.parent().children('li').index(this.$item);
					this.create();
					this.update();
				}

				Preview.prototype = {
					create : function() {
						// create Preview structure:
						this.$title = $( '<h3></h3>' );
						this.$description = $( '<p></p>' );
						this.$details = $( '<div class="og-details"></div>' ).append( this.$title, this.$description );
						this.$closePreview = $( '<span class="og-close"></span>' );
						this.$previewInner = $( '<div class="og-expander-inner"></div>' ).append( this.$closePreview, this.$details );
						this.$previewEl = $( '<div class="og-expander"></div>' ).append( this.$previewInner );
						// append preview element to the item
						this.$item.append( this.getEl() );
						// set the transitions for the preview and the item
						if( support ) {
							this.setTransition();
						}
					},
					update : function( $item ) {
						console.log(current);
						if( $item ) {
							this.$item = $item;
						}
						
						// if already expanded remove class "og-expanded" from current item and add it to new item
						if( current !== -1 ) {
							
							var $currentItem = $items.eq( current );
							$currentItem.removeClass( 'og-expanded' );
							this.$item.addClass( 'og-expanded' );
							// position the preview correctly
							this.positionPreview();
						}

						// update current value
						current = this.$item.parent().children('li').index(this.$item);
						console.log(current);
						// update preview´s content
						var $itemEl = this.$item.children( 'a' ),
							eldata = {
								href : $itemEl.attr( 'href' ),
								largesrc : $itemEl.data( 'largesrc' ),
								title : $itemEl.data( 'title' ),
								description : $itemEl.data( 'description' )
							};

						this.$title.html( eldata.title );
						this.$description.html( eldata.description );

						var self = this;
					

					},
					open : function() {

						setTimeout( $.proxy( function() {	
							// set the height for the preview and the item
							this.setHeights();
							// scroll to position the preview in the right place
							this.positionPreview();
						}, this ), 25 );

					},
					close : function() {

						var self = this,
							onEndFn = function() {
								if( support ) {
									$( this ).off( transEndEventName );
								}
								self.$item.removeClass( 'og-expanded' );
								self.$previewEl.remove();
							};

						setTimeout( $.proxy( function() {

							if( typeof this.$largeImg !== 'undefined' ) {
								this.$largeImg.fadeOut( 'fast' );
							}
							this.$previewEl.css( 'height', 0 );
							// the current expanded item (might be different from this.$item)
							var $expandedItem = $items.eq( this.expandedIdx );
							$expandedItem.css( 'height', $expandedItem.data( 'height' ) ).on( transEndEventName, onEndFn );

							if( !support ) {
								onEndFn.call();
							}

						}, this ), 25 );
						
						return false;

					},
					calcHeight : function() {

						var heightPreview = winsize.height - this.$item.data( 'height' ) - marginExpanded,
							itemHeight = winsize.height;

						if( heightPreview < settings.minHeight ) {
							heightPreview = settings.minHeight;
							itemHeight = settings.minHeight + this.$item.data( 'height' ) + marginExpanded;
						}

						this.height = heightPreview;
						this.itemHeight = itemHeight;

					},
					setHeights : function() {

						var self = this,
							onEndFn = function() {
								if( support ) {
									self.$item.off( transEndEventName );
								}
								self.$item.addClass( 'og-expanded' );
							};

						this.calcHeight();
						this.$previewEl.css( 'height', this.height );
						this.$item.css( 'height', this.itemHeight ).on( transEndEventName, onEndFn );

						if( !support ) {
							onEndFn.call();
						}

					},
					positionPreview : function() {

						// scroll page
						// case 1 : preview height + item height fits in window´s height
						// case 2 : preview height + item height does not fit in window´s height and preview height is smaller than window´s height
						// case 3 : preview height + item height does not fit in window´s height and preview height is bigger than window´s height
						var position = this.$item.data( 'offsetTop' ),
							previewOffsetT = this.$previewEl.offset().top - scrollExtra,
							scrollVal = this.height + this.$item.data( 'height' ) + marginExpanded <= winsize.height ? position : this.height < winsize.height ? previewOffsetT - ( winsize.height - this.height ) : previewOffsetT;
						
						$body.animate( { scrollTop : scrollVal }, settings.speed );

					},
					setTransition  : function() {
						this.$previewEl.css( 'transition', 'height ' + settings.speed + 'ms ' + settings.easing );
						this.$item.css( 'transition', 'height ' + settings.speed + 'ms ' + settings.easing );
					},
					getEl : function() {
						return this.$previewEl;
					}
				}

				return { 
					init : init,
					addItems : addItems
				};

			})();
			
			Grid.init();
			
			});
		</script>
  </div>
</body>
</html>
