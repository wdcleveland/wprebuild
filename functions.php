<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* Required external files
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/*  Theme specific settings
		Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	======================================================================================================================== */

	add_theme_support('post-thumbnails');

	register_nav_menus(array('primary' => 'Primary Navigation'));

	function cleanname($v) {
	$v = preg_replace('/[^a-zA-Z0-9s]/', '', $v);
	$v = str_replace(' ', '-', $v);
	$v = strtolower($v);
	return $v;
	}

	//	Reduce nav classes, leaving only 'current-menu-item'
	function nav_class_filter( $var ) {
	return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
	}

	add_filter('nav_menu_css_class', 'nav_class_filter', 100, 1);
	//	Add page slug as nav IDs
	function nav_id_filter( $id, $item ) {
	return 'nav-'.cleanname($item->title);
	}
	add_filter( 'nav_menu_item_id', 'nav_id_filter', 10, 2 );


/* Actions and Filters
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );



	/* Custom Post Types - include custom post types and taxonomies here
	======================================================================================================================== */

	// require_once( 'custom-post-types/locations.php' );
	// require_once( 'custom-post-types/services.php' );


	/* Removing Crap / Customizing Admin Dashboard
	======================================================================================================================== */

	// remove junk from head
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

	// remove all dashboard widgets
	function remove_dashboard_widgets() {
		global $wp_meta_boxes;
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
		unset($wp_meta_boxes['dashboard']['normal']['high']['dashboard_browser_nag']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	}

	add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );


	// disable all feeds
	function fb_disable_feed() {
		wp_die(__('<h1>Feed not available, please visit our <a href="'.get_bloginfo('url').'">Home Page</a>!</h1>'));
	}
	add_action('do_feed',      'fb_disable_feed', 1);
	add_action('do_feed_rdf',  'fb_disable_feed', 1);
	add_action('do_feed_rss',  'fb_disable_feed', 1);
	add_action('do_feed_rss2', 'fb_disable_feed', 1);
	add_action('do_feed_atom', 'fb_disable_feed', 1);

	// REMOVE WP EMOJI
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');

	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );


	// Clean up the admin sidebar navigation
	function remove_admin_menu_items() {
	  $remove_menu_items = array(__('Comments'));
	  global $menu;
	  end ($menu);
	  while (prev($menu)){
		$item = explode(' ',$menu[key($menu)][0]);
		if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_items)){
		  unset($menu[key($menu)]);}
		}
	  }
	add_action('admin_menu', 'remove_admin_menu_items');


	// customize admin footer text
	function custom_admin_footer() {
		echo 'Customized by <a href="#">Cleveland University</a> | Powered by <a href="http://wordpress.org">Wordpress</a>';
	}
	add_filter('admin_footer_text', 'custom_admin_footer');

	// customize login screen
	function custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/custom-login.css" />';
	}
	add_action('login_head', 'custom_login');


	/* Scripts
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {

		wp_deregister_script('jquery');
		wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"), false);
		wp_enqueue_script('jquery');

		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );

	}

	// Register Style
	function custom_styles() {

		wp_register_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css', false, false );
		wp_enqueue_style( 'normalize' );

		wp_register_style( 'screen', get_template_directory_uri().'/style.css', array( 'normalize', 'skeleton' ), false );
		wp_enqueue_style( 'screen' );

		wp_register_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', false, false );
		wp_enqueue_style( 'fontawesome' );

	}
	add_action( 'wp_enqueue_scripts', 'custom_styles' );


	/**
	 * Load Bootstrap Menu.
	 */
	require get_template_directory() . '/bootstrap-walker.php';

	if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}

// if( function_exists('acf_add_options_page') ) {
//
// 	acf_add_options_page(array(
// 		'page_title' 	=> 'Sitewide Fields',
// 		'menu_title'	=> 'Sitewide Fields',
// 		'menu_slug' 	=> 'sitewide-fields',
// 		'capability'	=> 'edit_posts',
// 		'redirect'		=> false
// 	));
//
// }
