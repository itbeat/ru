<?php
/*
 *  Theme functions
 *  Be extremely careful when editing these files! You've been warned!
 */

/**********************/
/*   Haku framework   */
require( TEMPLATEPATH . '/haku/config.php');

/**************************/
/*   Wordpress features   */
if ( ! isset( $content_width ) ) {
	$content_width = 650;
}

/*********************/
/*   Theme metabox   */
if ( is_admin() ) {
	require( get_includes_dir() . '/metabox.php');
}

/*******************/
/*   Theme setup   */
if ( ! function_exists('retro_setup') ) {
	
	function retro_setup() {
				
		/*****************************************/
		/*   Load current language translation   */
		load_theme_textdomain( 'haku', TEMPLATEPATH . '/languages' );
		
		$locale_file = TEMPLATEPATH . '/languages/' . get_locale() . '.php'; 	
		
		if ( is_readable( $locale_file ) ) {
			require_once( $locale_file );
		}
		
		/***************************************/
		/*   WordPress features registration   */		
		add_theme_support('automatic-feed-links');
		
		add_theme_support('post-thumbnails');
		
		add_theme_support('post-formats', array( 'quote', 'audio' ) );
		
		/*******************************/
		/*   Default thumbnail sizes   */
		set_post_thumbnail_size( 195, 148, true );
		
		add_image_size('retro_slider', 800, 230, true);
		
		add_image_size('retro_slider_no_captions', 800, 307, true);
		
		/***************/
		/*   Widgets   */
		haku_include_widget('latests,maps,video,flickr');
				
		/**********************************/
		/*   Portfolio custom post type   */
		$labels = array(
			'name' => __('Portfolio Items', 'haku'),
			'add_new' => __('Add New Item', 'haku'),
			'add_new_item' => __('New Item', 'haku'),
			'edit_item' => __('Edit Item', 'haku'),
			'all_items' => __('Browse', 'haku'),
			'view_item' => '',
			'search_items' => __('Search Items', 'haku'),
			'menu_name' => __('Portfolio', 'haku')
		);
						
		$args = array(
			'labels' => $labels,
			'publicly_queryable' => true,
			'show_ui' => true, 
			'show_in_menu' => true,
			'exclude_from_search' => true,
			'menu_position' => 10,
			'query_var' => true,
			'capability_type' => 'post',
			'hierarchical' => true,
			'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'tags', 'post-formats'),
			'rewrite' => array('slug' => 'portfolio')
		);
	  	
	  	/************************/
	  	/*   Custom post type   */
		register_post_type( 'portfolio', $args );
		
		/**********************/
		/*   Filtering tags   */
		if ( get_theme_option('portfolio_filtering') ) {

			$labels = array(
				'name' => __('Filter Tag', 'haku'),
				'search_items' => __('Search Filters', 'haku'),
				'popular_items' => __('Most Used Filters', 'haku'),
				'edit_item' => __('Edit Filter', 'haku'),
				'update_item' => __('Update Filter', 'haku'),
				'add_new_item' => __('Add New Filter', 'haku'),
				'separate_items_with_commas' => '',
				'add_or_remove_items' => __('Add or remove filters', 'haku'),
				'choose_from_most_used' => __('Choose from the most used filters', 'haku')
			);
			
			/****************************/
			/*   Custom post type tags  */
			register_taxonomy( 'portfolio_filter', 'portfolio', array(
				'labels' => $labels,
				'hierarchical' => false,
				'show_ui' => true,
				'query_var' => true
			));
		
		}
								
	}

}

add_action( 'after_setup_theme', 'retro_setup' );

/*********************/
/*   Theme sidebars  */
function theme_register_sidebars() {
	
	$sidebar = array(
		'name' => __('Main Sidebar', 'haku'),
		'id' => 'retro_sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	);
	
	register_sidebar( $sidebar );
	
	/********************************/
	/*   Custom generated sidebars  */
	if ( get_theme_slides('theme_sidebars') ) {
		
		foreach ( get_theme_slides('theme_sidebars') as $sidebar_id => $sidebar ) {
			
			$sidebar = array(
				'name' => stripslashes( $sidebar['name'] ),
				'id' => $sidebar['slug'],
				'description' => stripslashes( $sidebar['desc'] ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h3>',
				'after_title' => '</h3>',
			);
			
			register_sidebar( $sidebar );
			
		}
	
	}
	
}

add_action( 'widgets_init', 'theme_register_sidebars' );

/***********************/
/*   Theme javascript  */
function theme_register_javascript() {
	
	wp_register_script('retro_js_plugins', get_stylesheet_directory_uri() . '/js/jquery.plugins.js', '', get_theme_version(), 1);
	wp_register_script('retro_js_nivoslider', get_stylesheet_directory_uri() . '/js/jquery.nivo.slider.pack.js', '', get_theme_version(), 1);
	wp_register_script('retro_js_init', get_stylesheet_directory_uri() . '/js/retro.js', '', get_theme_version(), 1);
	
	wp_enqueue_script( array( 'jquery', 'retro_js_plugins' ) );
	
	/***************************/
	/*   Navigation js output  */
	$js_opt = array(
		'scrolling_speed' => get_theme_option('scrolling_speed'),
		'scrolling_easing' => get_theme_option('scrolling_easing'),
		'scrolling_hash' => ( get_theme_option('scrolling_hash') ? true : false ),
		'sticky_menu' => ( get_theme_option('sticky_menu') ? true : false )
	);
	
	wp_localize_script('retro_js_init', 'retro', $js_opt );
	
	if ( is_home() ) {
		
		if ( get_theme_option('home_slider') ) {
			
			wp_enqueue_script('retro_js_nivoslider');
			
			$js_opt = array(
				'speed' => get_theme_option('slider_speed'),
				'fx' => get_theme_option('slider_fx'),
				'slices' => get_theme_option('slider_slices'),
				'boxcols' => get_theme_option('slider_boxcols'),
				'boxrows' => get_theme_option('slider_boxrows'),
				'pausetime' => get_theme_option('slider_pausetime'),
				'pause' => ( get_theme_option('slider_pause') ? true : false ),
				'random' => ( get_theme_option('slider_random') ? true : false ),
				'nav' => ( get_theme_option('slider_nav') ? true : false ),
			);
			
			wp_localize_script('retro_js_plugins', 'retro_slider', $js_opt );
		}
		
	}
	
	wp_enqueue_script( 'retro_js_init' );
	
}

add_action( 'wp_enqueue_scripts', 'theme_register_javascript' );

/***********************/
/*   Filter on titles  */
function retro_filter( $string ) {
	return ( extension_loaded('mbstring') ? mb_strtoupper( $string, 'UTF-8' ) : strtoupper( $string ) );
}

add_filter('widget_title', 'retro_filter', 11 );

/****************************/
/*   Google Analytics code  */
function user_analytics_code() {
	echo get_theme_option('analytics_code');
}

if ( get_theme_option('analytics_code') ) {
	add_action( 'wp_footer', 'user_analytics_code' );
}

/***************************/
/*   Categories exclusion  */
function retro_exclude_category( $query ) {
	if ( $query->is_home || $query->is_search || $query->is_date ) {
		$query->set( 'cat', haku_format_exclude_categories('exclude_category') );
		return $query;
	}
}

function retro_exclude_getarchives( $where ) {
	$category = haku_format_exclude_categories('exclude_category', '');
	$query = haku_filter_get_archives( $where, $category );
	return $query;
}

if ( get_theme_option('exclude_category', false) ) {
	add_filter( 'pre_get_posts', 'retro_exclude_category' );
	add_filter( 'getarchives_where', 'retro_exclude_getarchives', 10, 2 );
}

/**************/
/*   Sidebar  */
function retro_get_sidebar( $post_id ) {
	$custom_sidebar = ( $post_id ? meta_obtain( 'sidebar', '_retro_item_sidebar', $post_id ) : false );
	$sidebar = ( $custom_sidebar ? $custom_sidebar : 'retro_sidebar' );
	return $sidebar;
}

/**************************/
/*   Posts count utility  */
function get_posts_count( $post_type = 'portfolio' ) {
	$number = new WP_Query("post_type=$post_type&status=publish");
	wp_reset_query();
	$number = $number->found_posts;
	return $number;
}

/************************/
/*   Custom Login Logo  */
function retro_login_logo() {
	$login_logo = ( get_theme_option('wp_login_logo') ? get_theme_option('wp_login_logo') : get_includes_dir('uri') . '/images/wp_login_logo.png' );
    echo '<style type="text/css"> .login h1 a { background-image: url(' . $login_logo . '); background-size: auto; background-position: center; } </style>';
}

add_action('login_head', 'retro_login_logo');

/********************/
/*   Post comments  */
if ( ! function_exists('retro_comments') ) {

	function retro_comments( $comment, $args, $depth ) {
	
		$GLOBALS['comment'] = $comment;
		
		$awaiting = ( $comment->comment_approved == '0' ? 'awaiting' : false );
		?>
		
		<!-- Comment -->
		<li <?php comment_class( $awaiting ); ?> id="comment-<?php comment_ID(); ?>">
		
		<span>
			<span class="comment-author"><?php echo get_comment_author_link(); ?></span> 
			<?php _e('wrote on', 'haku'); ?> <?php echo get_comment_date('F j, Y'); ?> <?php _e('at', 'haku'); ?> <?php echo get_comment_time('g:i'); ?> // <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __('Reply', 'haku' ), 'depth' => $depth, 'max_depth' => $args['max_depth']) ) ); ?>
			<?php edit_comment_link( __('(Edit)', 'haku') ); ?>
		</span> 
		
		<?php if ( $awaiting ) : ?><em><?php _e( 'Your comment is awaiting moderation.', 'haku' ); ?></em><?php else: ?><?php comment_text(); ?><?php endif; ?>
		
		</li>
		<!-- end: Comment -->
			
		<?php
	
	}

}

/*****************/
/*   Post pings  */
if ( ! function_exists('retro_pings') ) {

	function retro_pings( $comment, $args, $depth ) {
	
		$GLOBALS['comment'] = $comment;
		
		?>
		
		<!-- Pingback -->
		<li class="post pingback"><?php comment_author_link(); ?> <?php edit_comment_link( __( 'Edit', 'haku' ), '<span class="edit-link">', '</span>' ); ?>
			
		<?php
	
	}

}

?>