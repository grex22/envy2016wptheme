$(document).ready(function(){

	$('.report_filters').click(function(e){
		e.preventDefault();
	});

	// Javascript to enable link to tab
	var hash = document.location.hash;
	var prefix = "_";
	if (hash) {
		$('.nav-tabs a[href='+hash.replace(prefix,"")+']').tab('show');
	}

	// Change hash for page-reload
	$('.nav-tabs a').on('shown', function (e) {
		window.location.hash = e.target.hash.replace("#", "#" + prefix);
	});

  //Global Fancybox trigger for leadform
  $("a[href='#leadform']").fancybox();

  $("#leadform #formElement15").hide(); //spam honeypot field in lead form
  $("#leadform input").focus(function(){
	$("#leadform #formElement15 input").val('solomon');
  });


  //$("#menu-primary-navigation").append('<li class="more_link_li"><a href="#" id="more-link">More&hellip;</a></li>');
  //$("#menu-primary-navigation").append('<li class="more_link_li_mobile"><a href="#" id="more-overlay-link">More&hellip;</a></li>');
  $("#menu-primary-navigation").append('<li class="client_login_link"><a href="https://video.envysion.com/auth/login.jsp" id="client-login-mobile">Client Login</a></li>');

  var current_body_padding_top = $('body').css('padding-top');
  var more_nav_animation_speed = 200;

  $("#more-link").click(function(e){
    var current_body_padding_top = $('body').css('padding-top');
    e.preventDefault();
    $('body').toggleClass('more-nav-expanded');
    $("#more-nav").slideToggle(more_nav_animation_speed,'swing');
    if($('body').hasClass('more-nav-expanded')){
      $('body').animate({ paddingTop: current_body_padding_top + 200 },more_nav_animation_speed,'swing');
    }else{
      $('body').animate({ paddingTop: current_body_padding_top },more_nav_animation_speed,'swing');
    }
  });

  $("#more-overlay-link").click(function(e){
	$("#more-nav-overlay").fadeToggle(100);
  });

  $(document).mouseup(function (e){
    if($('body').hasClass('more-nav-expanded') && ($("#main_wrap").is(e.target) || $("#main_wrap").has(e.target).length !== 0)){
      $('body').toggleClass('more-nav-expanded');
      $("#more-nav").slideToggle(more_nav_animation_speed,'swing');
      $('body').animate({ paddingTop: current_body_padding_top },more_nav_animation_speed,'swing');
    }
  });

  $("#more-nav .close_mn").click(function(e){
    e.preventDefault();
    $("#more-nav").slideToggle(more_nav_animation_speed,'swing');
    $('body').toggleClass('more-nav-expanded');
    $('body').animate({ paddingTop: current_body_padding_top },more_nav_animation_speed,'swing');
  });

  $("#more-nav-overlay .close_mn").click(function(e){
    e.preventDefault();
    $("#more-nav-overlay").fadeOut(100);
  });



  $("#scroller_list").simplyScroll({
    auto: true,
    speed: 1
  });

  $('#home_hero_slider').carousel({
    interval: 6000
  })

  /*
  jQuery('ul.nav li.dropdown').hover(function() {
    jQuery(this).find('.dropdown-menu').stop(true, true).delay(50).fadeIn(100);
  	}, function() {
    	jQuery(this).find('.dropdown-menu').stop(true, true).delay(50).fadeOut(100);
  });
  */
  jQuery('.navbar-collapse ul.nav li.dropdown>a').click(function(e) {
	if($(this).closest('.navbar-collapse').hasClass('in')){
		e.preventDefault();
		console.log('this will NOT go to a new page');
	}else{
		e.preventDefault();
		console.log('this will take to a new page');
    	window.location.assign($(this).attr('href'));
	}

  });




  if($("#announcement_wrap").length > 0 && $(window).width() > 767){ //Let's not show our announcement box if they're on a phone...
    if($("#announcement_wrap").is(':hidden')){
      $("#announcement_wrap").delay(2000).slideToggle(500);
      var elemheight = parseInt($("#announcement_wrap").css('height'), 10);
      var bodypad = parseInt($("body").css('padding-top'), 10);
      $('body').delay(2000).animate({paddingTop: elemheight + bodypad },500);
    }

    $("#announcement_close").click(function(e){
      e.preventDefault();
      $("#announcement_wrap").slideToggle(300);

      $('body').animate({paddingTop: 94 },300);
    });
  }

  //Add Google Analytics Event to any client login links


  var trackOutboundLink = function(url) {
	   ga('send', 'event', 'outbound', 'login-click', url, {'hitCallback':
		 function () {
		 document.location = url;
		 }
	   });
	}
  $("body.home a[href='https://video.envysion.com/auth/login.jsp']").click(function(e){
	trackOutboundLink($(this).attr('href'));
  });

	var $animation_elements = $('.scroll-animate');
	var $window = $(window);

	function check_if_in_view() {
		var window_height = $window.height();
		var window_top_position = $window.scrollTop();
		var window_bottom_position = (window_top_position + window_height);

		$.each($animation_elements, function() {
			var $element = $(this);
			var element_height = $element.outerHeight();
			var element_top_position = $element.offset().top;
			var element_bottom_position = (element_top_position + element_height);

			//check to see if this current container is within viewport, with 50 pixel buffer

			if ((element_bottom_position >= window_top_position) &&
					(element_top_position <= window_bottom_position - 50)) {
					if($element.attr('data-delay')){
						//console.log($element.attr('id'));
						setTimeout(function(){$element.addClass($element.attr('data-animation-class'))}, parseInt($element.attr('data-delay')) )
					}else{
						$element.addClass($element.attr('data-animation-class'));
					}
			}



		});
	}

	$window.on('scroll resize', check_if_in_view);
	$window.trigger('scroll');

	//Utility equalheights function
	function equalHeights(){
    $(".equal_row").each(function(){
      //If the equal_row is inside a hidden tab-pane, just skip it
      //We'll handle the equal heights once the tab is shown by the user
      if($(this).parents(".tab-pane:not('.active')").length === 1 ){
        return;
      }
      var maxheight = 0;
      $(this).children('div').each(function(){
        if($(this).outerHeight() >= maxheight){maxheight = $(this).outerHeight();}
      });
      $(this).children('div').outerHeight(maxheight);
    });
  }

	setTimeout(function() { equalHeights(); }, 100);

});
