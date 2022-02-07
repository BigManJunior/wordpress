<?php

add_filter('the_generator', '__return_empty_string');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('template_redirect', 'rest_output_link_header', 11, 0 );
remove_action('wp_head','start_post_rel_link',10,0);
remove_action('wp_head','index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
add_filter( 'emoji_svg_url', '__return_false' );

show_admin_bar(false);

add_filter('excerpt_length', function(){
    return 28;
});

add_filter( 'wpseo_xml_sitemap_img', '__return_false' );
add_theme_support('post-thumbnails');
add_theme_support( 'menus' );

add_action( 'after_setup_theme', function(){
    register_nav_menu('main_menu_1', 'Main menu left');
	register_nav_menu('main_menu_2', 'Main menu center');
});

$args = array(
	'name'          => __( 'Sidebar name', 'theme_text_domain' ),
	'id'            => 'maxbar',
	'before_widget' => '<div class="box boxx">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>' 
); 

add_action('wp_enqueue_scripts', function(){
	wp_enqueue_style('aos', get_template_directory_uri() . '/assets/css/aos-2.3.1.min.css');
	wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.min.css');
	wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('theme', get_stylesheet_uri());
});

add_action('wp_enqueue_scripts', function(){
	wp_enqueue_script('my-jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js');
	wp_enqueue_script('my-aos', get_template_directory_uri() . '/assets/js/aos-2.3.1.min.js');
	wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
});

add_theme_support( 'custom-logo', [
	'height'      => 63,
	'width'       => 225,
	'flex-width'  => true,
	'flex-height' => true,
	'header-text' => '',
	'unlink-homepage-logo' => false, // WP 5.5
] );

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
	  'page_title'   => 'General option',
	  'menu_title'  => 'General option',
	  'menu_slug'   => 'theme-general-settings',
	  'capability'  => 'edit_posts',
	  'redirect'    => false
	));
  
  }

  add_action('after_setup_theme', function(){
   	add_image_size('large-photo', 1920, 600, true);
});

function my_sidebars(){
	register_sidebar(
		array(
			'name' => 'Page Sidebar',
			'id' => 'page-sidebar',
			'before_title' => '<h2 class="sidebar__title">',
			'after_title' => '</h2>'
		)
		);

}
add_action('widgets_init', 'my_sidebars');

/*** SVG support start ***/
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

	global $wp_version;
  
	$filetype = wp_check_filetype( $filename, $mimes );
  
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
  
  }, 10, 4 );
  
  function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );
  
  function fix_svg() {
	echo '<style type="text/css">
		  .attachment-266x266, .thumbnail img {
			   width: 100% !important;
			   height: auto !important;
		  }
		  </style>';
  }
  add_action( 'admin_head', 'fix_svg' );
/*** SVG support end ***/

?>