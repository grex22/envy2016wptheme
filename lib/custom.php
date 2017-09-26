<?php
//Custom functions

 
// Add in blog.envysion.com's (Hubspot) Posts sitemap to Yoast

// Yoast SEO, add own sub-sitemap
// works only after SEO -> XML Sitemaps -> Post Types (change something and back, some cache?)
function my_wpseo_sitemap_index() {
	$url = "http://blog.envysion.com/sitemap.xml";
	/*
	$response = wp_remote_get( $url );
	
	if( is_array($response) ) {
		$body = $response['body']; // use the content
		$headers = $response['headers'];	
	}
	*/
	
	// http://wordpress.stackexchange.com/a/8404
	/*
	date_default_timezone_set( get_option('timezone_string') );
	if($remotelastmod){
		$lastmod = $remotelastmod;
	}else{
		$lastmod = date( 'Y-m-d',strtotime("-2 days") );
	}
	*/
	$lastmod = date( 'Y-m-d',strtotime("-2 days") );
	$xml = '<sitemap>' . "\n";
	$xml .= '<loc>' . $url . '</loc>' . "\n";
	$xml .= '<lastmod>' .  $lastmod . '</lastmod>' . "\n";
	$xml .= '</sitemap>' . "\n";
	return $xml;
}
add_filter( 'wpseo_sitemap_index', 'my_wpseo_sitemap_index' );

 
/*Disable XML-RPC for security reasons */
add_filter('xmlrpc_enabled', '__return_false');

// Add about the author to wordpress feeds
function wpbeginner_postrss($content) {
	global $wp_query;
	$postid = $wp_query->post->ID;
	
	if(is_feed()) {
		//while the filter this hooks into will always add this, the is_feed check only runs this on feed content
		if(has_post_thumbnail($post->ID)) {
			$content = '<div>' . get_the_post_thumbnail($postid,'thumbnail') . '</div>' . $content;
		}
		$content = $content."<p>About ".get_the_author()."</p>";
		$is_guest = get_field('use_a_guest_author_for_this_post',$postid);
		
		if($is_guest):
			$bio = get_field('guest_author_bio',$postid);
		else:
			$bio = wpautop(get_the_author_meta('description'));
		endif;
		$content .= $bio;
	}else{
		$content = $content;
	}
	return $content;
}
add_filter('the_content', 'wpbeginner_postrss');


function add_cta_stuff_to_posts($content) {
	global $post;
	$cta = '';
	
	$cta_content = get_field('call-to-action_content',$post->ID);
	$cta_icon = get_field('call-to-action_icon',$post->ID);
	if($cta_content && !is_feed()):
		$cta .= "<div class='postcta'>".wpautop($cta_content)."</div>";
		if($cta_icon):
			$cta .= "<style>div.postcta:before{content:'".rtrim(str_replace("&#x","\\", $cta_icon->unicode),";")."';}</style>";
		endif;
		$content = $content . $cta;
		return $content;
	else:
		return $content;
	endif;
}
add_filter('the_content', 'add_cta_stuff_to_posts',1);


	
// Resources Get_Posts Function
function get_resource( $post_type, $taxonomy_term = false, $posts_per_page = 10 ) {

	$base_args = array(
		'posts_per_page'   => $posts_per_page,
		'category'         => '',
		'post_type'        => $post_type,
		'post_status'      => 'publish'
	);

	if ( $taxonomy_term ) {
		$additional_args = array(
			'tax_query' => array(
				array(
					'taxonomy' => 'industry',
					'field' => 'slug',
					'terms' => $taxonomy_term
				)
			)
		);
	} else {
		$additional_args = array();
	}

	$args = array_merge( $base_args, $additional_args );

	return get_posts( $args );
}
 
//IFrame Shortcode
add_shortcode( 'iframe' , 'mycustom_shortcode_iframe' );
function mycustom_shortcode_iframe($args, $content) {
    $keys = array("src", "width", "height", "scrolling", "marginwidth", "marginheight", "frameborder", "style");
    $arguments = mycustom_extract_shortcode_arguments($args, $keys);
    return '<iframe ' . $arguments . '></iframe>';
}

function mycustom_extract_shortcode_arguments($args, $keys) {
    $result = "";
    foreach ($keys as $key) {
        if (isset($args[$key])) {
            $result .= $key . '="' . $args[$key] . '" ';
        }
    }
    return $result;
}



function output_jobvite_iframe(){
	$return = '<!-- BEGIN JOBVITE CODE -->
  <div class="jv-careersite" data-careersite="envysion"></div>

  <script src="https://jobs.jobvite.com/__assets__/scripts/careersite/public/iframe.js"></script>
  
  <script>Jobvite = { careersite: "envysion" };</script>

  <script src="https://jobs.jobvite.com/__assets__/scripts/careersite/public/redirect.js"> </script>
    <!-- old jobvite code
    <iframe id="jobviteframe" src="http://hire.jobvite.com/CompanyJobs/Jobs.aspx?c=qv1aVfwl&jvresize=http://envysion.com/FrameResize.html" width="100%" height="500px" scrolling="no" frameborder="0" allowtransparency="true">Sorry, iframes are not supported.</iframe>
    <script type="text/javascript">
          var l = location.href;
          var args = "";
          var k = "";
          var iStart = l.indexOf("?jvk=");
          if (iStart == -1) iStart = l.indexOf("&jvk=");
          if (iStart != -1) {
                iStart += 5;
                var iEnd = l.indexOf("&", iStart);
                if (iEnd == -1) iEnd = l.length;
                k = l.substring(iStart, iEnd);
          }
          iStart = l.indexOf("?jvi=");
          if (iStart == -1) iStart = l.indexOf("&jvi=");
          if (iStart != -1) {
                iStart += 5;
                var iEnd = l.indexOf("&", iStart);
                if (iEnd == -1) iEnd = l.length;
                args += "&j=" + l.substring(iStart, iEnd);
                if (!k.length) args += "&k=Job";
                var iStart = l.indexOf("?jvs=");
                if (iStart == -1) iStart = l.indexOf("&jvs=");
                if (iStart != -1){
                      iStart += 5;
                      var iEnd = l.indexOf("&", iStart);
                      if (iEnd == -1) iEnd = l.length;
                      args += "&s=" + l.substring(iStart, iEnd);
                }
          }
          if (k.length) args += "&k=" + k;
          if (args.length) document.getElementById("jobviteframe").src += args;
          function resizeFrame(height, scrollToTop) {
                if (scrollToTop) window.scrollTo(0, 0);
                var oFrame = document.getElementById("jobviteframe");
                if (oFrame) oFrame.height = height;
          }
    </script>-->
    <!--END JOBVITE CODE -->';
	
	return $return;
}

add_shortcode( 'jobvite' , 'output_jobvite_iframe' );


function output_hubspot_form(){
$return ='
<!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
  hbspt.forms.create({ 
    sfdcCampaignId: "70133000001UVF1AAO",
    portalId: "444576",
    formId: "da3e4228-edbb-4644-9330-30a3c3917d50"
  });
</script>';
return $return;

/*
	$return ="
		<script charset='utf-8' src='//js.hsforms.net/forms/current.js'></script>
		<script>
		  hbspt.forms.create({ 
			sfdcCampaignId: '701400000011X5NAAU',
			portalId: '444576',
			formId: 'da3e4228-edbb-4644-9330-30a3c3917d50'
		  });
		</script>

	";
	return $return;
	*/
}

add_shortcode( 'hubspotform' , 'output_hubspot_form' );
 
 
function add_linkedin_contactmethod( $contactmethods ) {
  if ( !isset( $contactmethods['linkedin'] ) )
    $contactmethods['linkedin'] = 'LinkedIn URL';
	
  $contactmethods['googleplus'] = 'Google+ URL';
	
  return $contactmethods;
}
add_filter( 'user_contactmethods', 'add_linkedin_contactmethod', 10, 1 );

//Allow guest author ACF field to override author name displayed throughout site
add_filter( 'the_author', 'guest_author_name' );
add_filter( 'get_the_author_display_name', 'guest_author_name' );

function guest_author_name( $name ) {
	global $post;
	$use_guest = get_field("use_a_guest_author_for_this_post", $post->ID);
	$author = get_field( "guest_author_name", $post->ID);
	
	if ( $author && $use_guest )
	$name = $author;
	
	return $name;
}
 
function output_vertical_circles_func($atts){
	extract( shortcode_atts( array(
		'size' => 'small',
	), $atts ) );
	if(get_field('industry_icons','option')):
		$return = '<div class="text-center more_bottom_margin">';
		while( has_sub_field('industry_icons', 'option') ):
		$return .= '<div class="verticals '.get_sub_field('background_color');
		$return .= " ".$size;
		$return .= '"><a href="'.get_sub_field('link').'"><h3 class="verticalstitle">'.get_sub_field('industry_name').'</h3><i class="fa '.get_sub_field('industry_icon').'"></i></a></div>';
		endwhile;
		$return .= "</div>";
		return $return;
	endif;
}

add_shortcode( 'verticalicons', 'output_vertical_circles_func' );
 
/* Convert hexdec color string to rgb(a) string */
function hex2rgba($color, $opacity = false) {

	$default = 'rgb(0,0,0)';

	//Return default if no color provided
	if(empty($color))
          return $default; 

	//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }

        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }

        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);

        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }

        //Return rgb(a) color string
        return $output;
}
 
register_nav_menus(array(
  'footer_sitemap_navigation' => __('Footer Column 2', 'roots'),
));

register_nav_menus(array(
  'footer_industries_navigation' => __('Footer Column 3', 'roots'),
));

register_nav_menus(array(
  'footer_column_4' => __('Footer Column 4', 'roots'),
));


register_nav_menus(array(
  'more_nav_col_1' => __('More Nav Column 1', 'roots'),
));

register_nav_menus(array(
  'more_nav_col_2' => __('More Nav Column 2', 'roots'),
));

register_nav_menus(array(
  'more_nav_col_3' => __('More Nav Column 3', 'roots'),
));

register_nav_menus(array(
  'more_nav_col_4' => __('More Nav Column 4', 'roots'),
));


function custom_colors() {
	   echo '<style type="text/css">
		   #menu-media li.wp-first-item + li{
			  border-bottom:1px solid #888;
			}
		 </style>';
}

add_action('admin_head', 'custom_colors');


function envy_register_post_types() {
  $labels = array(
    'name'               => 'Customer Logos',
    'singular_name'      => 'Customer Logo',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Customer Logo',
    'edit_item'          => 'Edit Customer Logo',
    'new_item'           => 'New Customer Logo',
    'all_items'          => 'All Customer Logos',
    'view_item'          => 'View Customer Logo',
    'search_items'       => 'Search Customer Logos',
    'not_found'          => 'No Customer Logos found',
    'not_found_in_trash' => 'No Customer Logos found in Trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Customer Logos'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'customerlogos' ),
    'capability_type'    => 'page',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'thumbnail' ),
	'position' => 32
  );

  register_post_type( 'customerlogos', $args );
    
  register_post_type('casestudy', array(
	  'label' => 'Case Studies',
	  'menu_icon' => 'dashicons-media-document',
	  'position' => 31,
	  'description' => '',
	  'public' => true,
	  'show_ui' => true,
	  'show_in_menu' => 'upload.php',
	  'capability_type' => 'post',
	  'map_meta_cap' => true,
	  'hierarchical' => true,
	  'rewrite' => array('slug' => 'casestudy', 'with_front' => true),
	  'query_var' => true,
	  'has_archive' => true,
	  'supports' => array('title','editor','thumbnail'),
	  'taxonomies' => array('industry','product'),
	  'labels' => array (
		'name' => 'Case Studies',
		'singular_name' => 'Case Study',
		'menu_name' => 'Case Studies',
		'add_new' => 'Add Case Study',
		'add_new_item' => 'Add New Case Study',
		'edit' => 'Edit',
		'edit_item' => 'Edit Case Study',
		'new_item' => 'New Case Study',
		'view' => 'View Case Study',
		'view_item' => 'View Case Study',
		'search_items' => 'Search Case Studies',
		'not_found' => 'No Case Studies Found',
		'not_found_in_trash' => 'No Case Studies Found in Trash',
		'parent' => 'Parent Case Study',
	  )
	) );
  
	register_post_type('whitepaper', array(
	  'label' => 'White Papers',
	  'menu_icon' => 'dashicons-media-default',
	  'position' => 33,
	  'description' => '',
	  'public' => true,
	  'show_ui' => true,
	  'show_in_menu' => 'upload.php',
	  'capability_type' => 'post',
	  'map_meta_cap' => true,
	  'hierarchical' => false,
	  'rewrite' => array('slug' => 'whitepaper', 'with_front' => true),
	  'query_var' => true,
	  'has_archive' => true,
	  'supports' => array('title','editor','thumbnail'),
	  'taxonomies' => array('industry','product'),
	  'labels' => array (
		'name' => 'White Papers',
		'singular_name' => 'White Paper',
		'menu_name' => 'White Papers',
		'add_new' => 'Add White Paper',
		'add_new_item' => 'Add New White Paper',
		'edit' => 'Edit',
		'edit_item' => 'Edit White Paper',
		'new_item' => 'New White Paper',
		'view' => 'View White Paper',
		'view_item' => 'View White Paper',
		'search_items' => 'Search White Papers',
		'not_found' => 'No White Papers Found',
		'not_found_in_trash' => 'No White Papers Found in Trash',
		'parent' => 'Parent White Paper',
	  )
	) ); 
  

	register_post_type('video', array(
	  'menu_icon' => 'dashicons-video-alt3',
	  'label' => 'Videos',
	  'position' => 34,
	  'description' => '',
	  'public' => true,
	  'show_ui' => true,
	  'show_in_menu' => 'upload.php',
	  'capability_type' => 'post',
	  'map_meta_cap' => true,
	  'hierarchical' => true,
	  'rewrite' => array('slug' => 'video', 'with_front' => true),
	  'query_var' => true,
	  'has_archive' => true,
	  'supports' => array('title','editor','thumbnail'),
	  'taxonomies' => array('industry','product'),
	  'labels' => array (
		'name' => 'Videos',
		'singular_name' => 'Video',
		'menu_name' => 'Videos',
		'add_new' => 'Add Video',
		'add_new_item' => 'Add New Video',
		'edit' => 'Edit',
		'edit_item' => 'Edit Video',
		'new_item' => 'New Video',
		'view' => 'View Video',
		'view_item' => 'View Video',
		'search_items' => 'Search Videos',
		'not_found' => 'No Videos Found',
		'not_found_in_trash' => 'No Videos Found in Trash',
		'parent' => 'Parent Video',
	  )
	) ); 

	register_post_type('webinars', array(
	  'label' => 'Webinars',
	  'menu_icon' => 'dashicons-images-alt',
	  'position' => 35,
	  'description' => '',
	  'public' => true,
	  'show_ui' => true,
	  'show_in_menu' => 'upload.php',
	  'capability_type' => 'post',
	  'map_meta_cap' => true,
	  'hierarchical' => false,
	  'rewrite' => array('slug' => 'webinars', 'with_front' => true),
	  'query_var' => true,
	  'has_archive' => true,
	  'supports' => array('title','editor'),
	  'taxonomies' => array('industry','product'),
	  'labels' => array (
		'name' => 'Webinars',
		'singular_name' => 'Webinar',
		'menu_name' => 'Webinars',
		'add_new' => 'Add Webinar',
		'add_new_item' => 'Add New Webinar',
		'edit' => 'Edit',
		'edit_item' => 'Edit Webinar',
		'new_item' => 'New Webinar',
		'view' => 'View Webinar',
		'view_item' => 'View Webinar',
		'search_items' => 'Search Webinars',
		'not_found' => 'No Webinars Found',
		'not_found_in_trash' => 'No Webinars Found in Trash',
		'parent' => 'Parent Webinar',
	  )
	) );
	
	register_post_type('podcasts', array(
	  'label' => 'Podcasts',
	  'menu_icon' => 'dashicons-media-audio',
	  'position' => 36,
	  'description' => '',
	  'public' => true,
	  'show_ui' => true,
	  'show_in_menu' => 'upload.php',
	  'capability_type' => 'post',
	  'map_meta_cap' => true,
	  'hierarchical' => false,
	  'rewrite' => array('slug' => 'podcasts', 'with_front' => true),
	  'query_var' => true,
	  'has_archive' => true,
	  'supports' => array('title','editor','thumbnail'),
	  'taxonomies' => array('industry','product'),
	  'labels' => array (
		'name' => 'Podcasts',
		'singular_name' => 'Podcast',
		'menu_name' => 'Podcasts',
		'add_new' => 'Add Podcast',
		'add_new_item' => 'Add New Podcast',
		'edit' => 'Edit',
		'edit_item' => 'Edit Podcast',
		'new_item' => 'New Podcast',
		'view' => 'View Podcast',
		'view_item' => 'View Podcast',
		'search_items' => 'Search Podcasts',
		'not_found' => 'No Podcasts Found',
		'not_found_in_trash' => 'No Podcasts Found in Trash',
		'parent' => 'Parent Podcast',
	  )
	) );	
	
	register_post_type('tools', array(
	  'label' => 'Tools',
	  'menu_icon' => 'dashicons-hammer',
	  'position' => 37,
	  'description' => '',
	  'public' => true,
	  'show_ui' => true,
	  'show_in_menu' => 'upload.php',
	  'capability_type' => 'post',
	  'map_meta_cap' => true,
	  'hierarchical' => true,
	  'rewrite' => array('slug' => 'tools', 'with_front' => true),
	  'query_var' => true,
	  'has_archive' => true,
	  'supports' => array('title','editor'),
	  'taxonomies' => array('industry','product'),
	  'labels' => array (
		'name' => 'Tools',
		'singular_name' => 'Tool',
		'menu_name' => 'Tools',
		'add_new' => 'Add Tool',
		'add_new_item' => 'Add New Tool',
		'edit' => 'Edit',
		'edit_item' => 'Edit Tool',
		'new_item' => 'New Tool',
		'view' => 'View Tool',
		'view_item' => 'View Tool',
		'search_items' => 'Search Tools',
		'not_found' => 'No Tools Found',
		'not_found_in_trash' => 'No Tools Found in Trash',
		'parent' => 'Parent Tool',
	  )
	) );
	
	
	
	register_post_type('kits', array(
	  'label' => 'Kits',
	  'menu_icon' => 'dashicons-portfolio',
	  'position' => 38,
	  'description' => '',
	  'public' => true,
	  'show_ui' => true,
	  'show_in_menu' => 'upload.php',
	  'capability_type' => 'post',
	  'map_meta_cap' => true,
	  'hierarchical' => false,
	  'rewrite' => array('slug' => 'kits', 'with_front' => true),
	  'query_var' => true,
	  'has_archive' => true,
	  'supports' => array('title','editor'),
	  'taxonomies' => array('industry','product'),
	  'labels' => array (
		'name' => 'Kits',
		'singular_name' => 'Kit',
		'menu_name' => 'Kits',
		'add_new' => 'Add Kit',
		'add_new_item' => 'Add New Kit',
		'edit' => 'Edit',
		'edit_item' => 'Edit Kit',
		'new_item' => 'New Kit',
		'view' => 'View Kit',
		'view_item' => 'View Kit',
		'search_items' => 'Search Kits',
		'not_found' => 'No Kits Found',
		'not_found_in_trash' => 'No Kits Found in Trash',
		'parent' => 'Parent Kit',
	  )
	) );
	register_post_type('reports', array(
	  'label' => 'Reports',
	  'menu_icon' => 'dashicons-media-spreadsheet',
	  'position' => 39,  
	  'description' => '',
	  'public' => true,
	  'show_ui' => true,
	  'show_in_menu' => 'upload.php',
	  'capability_type' => 'post',
	  'map_meta_cap' => true,
	  'hierarchical' => false,
	  'rewrite' => array('slug' => 'reports', 'with_front' => true),
	  'query_var' => true,
	  'has_archive' => true,
	  'supports' => array('title','editor'),
	  'taxonomies' => array('industry','product'),
	  'labels' => array (
		'name' => 'Reports',
		'singular_name' => 'Report',
		'menu_name' => 'Reports',
		'add_new' => 'Add Report',
		'add_new_item' => 'Add New Report',
		'edit' => 'Edit',
		'edit_item' => 'Edit Report',
		'new_item' => 'New Report',
		'view' => 'View Report',
		'view_item' => 'View Report',
		'search_items' => 'Search Reports',
		'not_found' => 'No Reports Found',
		'not_found_in_trash' => 'No Reports Found in Trash',
		'parent' => 'Parent Report',
	  )
	) );

	register_post_type('slicks', array(
	  'label' => 'Marketing Slicks',
	  'menu_icon' => 'dashicons-exerpt-view',
	  'position' => 40,   
	  'description' => '',
	  'public' => true,
	  'show_ui' => true,
	  'show_in_menu' => 'upload.php',
	  'capability_type' => 'post',
	  'map_meta_cap' => true,
	  'hierarchical' => true,
	  'rewrite' => array('slug' => 'slicks', 'with_front' => true),
	  'query_var' => true,
	  'has_archive' => true,
	  'supports' => array('title','editor'),
	  'taxonomies' => array('industry','product'),
	  'labels' => array (
		'name' => 'Marketing Slicks',
		'singular_name' => 'Slick',
		'menu_name' => 'Marketing Slicks',
		'add_new' => 'Add Slick',
		'add_new_item' => 'Add New Slick',
		'edit' => 'Edit',
		'edit_item' => 'Edit Slick',
		'new_item' => 'New Slick',
		'view' => 'View Slick',
		'view_item' => 'View Slick',
		'search_items' => 'Search Marketing Slicks',
		'not_found' => 'No Marketing Slicks Found',
		'not_found_in_trash' => 'No Marketing Slicks Found in Trash',
		'parent' => 'Parent Slick',
	  )
	) );
	
}
add_action( 'init', 'envy_register_post_types' );



add_action( 'init', 'register_taxonomy_customer_industry' );

function register_taxonomy_customer_industry() {

    $labels = array( 
        'name' => _x( 'Customer Industries', 'customer_industry' ),
        'singular_name' => _x( 'Customer Industry', 'customer_industry' ),
        'search_items' => _x( 'Search Customer Industries', 'customer_industry' ),
        'popular_items' => _x( 'Popular Customer Industries', 'customer_industry' ),
        'all_items' => _x( 'All Customer Industries', 'customer_industry' ),
        'parent_item' => _x( 'Parent Customer Industry', 'customer_industry' ),
        'parent_item_colon' => _x( 'Parent Customer Industry:', 'customer_industry' ),
        'edit_item' => _x( 'Edit Customer Industry', 'customer_industry' ),
        'update_item' => _x( 'Update Customer Industry', 'customer_industry' ),
        'add_new_item' => _x( 'Add New Customer Industry', 'customer_industry' ),
        'new_item_name' => _x( 'New Customer Industry', 'customer_industry' ),
        'separate_items_with_commas' => _x( 'Separate customer industries with commas', 'customer_industry' ),
        'add_or_remove_items' => _x( 'Add or remove customer industries', 'customer_industry' ),
        'choose_from_most_used' => _x( 'Choose from the most used customer industries', 'customer_industry' ),
        'menu_name' => _x( 'Customer Industries', 'customer_industry' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_admin_column' => true,
        'hierarchical' => true,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'customer_industry', array('customerlogos'), $args );
	
	register_taxonomy( 'industry',array (
		  0 => 'casestudy',
		  1 => 'podcasts',
		  2 => 'webinars',
		  3 => 'video',
		  4 => 'tools',
		  5 => 'kits',
		  6 => 'slicks',
		  7 => 'reports',
		  8 => 'whitepaper',
		),
		array( 'hierarchical' => true,
			'label' => 'Industries',
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'industry-resource' ),
			'show_admin_column' => false,
			'labels' => array (
		  		'search_items' => 'Industry',
			)
		) ); 
	

	
}


add_image_size('customer_logo',90,90,false);
add_image_size('call_out_block_image',450,225,true);
add_image_size( 'headshot_square', '300', '300', true ); 
