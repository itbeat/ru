<?php 
/*
 *  Haku Framework
 *  Handcrafted by Stefano Giliberti
 */

/********************/
/*   Main configs   */
$haku = array(
	
	'theme_name' => 'Retro Portfolio',
	'theme' => 'retro',
	'theme_slides' => 'retro_slides',
	'theme_sidebars' => 'retro_sidebars',
	'theme_includes' => TEMPLATEPATH . '/includes',
	'theme_includes_uri' => get_template_directory_uri() . '/includes',
	'theme_xml' => 'http://version.opendept.net/retro-portfolio.xml',
	
	'$' => '2.5',
	'.' => TEMPLATEPATH . '/haku',
	'includes' => TEMPLATEPATH . '/haku/includes',
	'includes_uri' => get_template_directory_uri() . '/haku/includes',
	'panel' => TEMPLATEPATH . '/haku/panel',
	'panel_uri' => get_template_directory_uri() . '/haku/panel',
	'panel_includes_uri' => get_template_directory_uri() . '/haku/panel/includes',
	
	'str_error' => __("Sorry, there was an unxpected error - try again. \n\nError code: %s", 'haku')
	
);

/*****************************/
/*   Default theme options   */
$theme_defaults = array(

	'logo' => get_stylesheet_directory_uri() . '/images/structure/logo.png',
	'favicon' => get_stylesheet_directory_uri() . '/images/etc/favicon.ico',
	'analytics_code' => null,
	
	'scrolling_speed' => 1200,
	'scrolling_easing' => 'easeInOutExpo',
	'scrolling_hash' => true,
	'sticky_menu' => true,
	'top' => true,
	
	'home_banner' => get_stylesheet_directory_uri() . '/images/structure/retro_img.png',
	'home_ribbon_text' => 'Old Style Portfolio',
	'home_slider' => true,
	'slider_speed' => 500,
	'slider_fx' => 'random',
	'slider_slices' => 15,
	'slider_boxcols' => 8,
	'slider_boxrows' => 4,
	'slider_pausetime' => 3000,
	'slider_pause' => true,
	'slider_random' => false,
	'slider_nav' => true,
	'slider_captions' => true,
	'home_welcome_headline' => 'Hello, I am John Doe.',
	'home_welcome_subline' => 'Welcome to Retro, My cool WordPress theme!',
	
	'about_label' => 'About me',
	'about_label_width' => 474,
	'about_intro' => '<strong>Pasquale Vitiello</strong> was born on May 5 1982 in C/mmare di Stabia, NA (Italy). Since 2006 he works in video post-production, for indipendent projects and in italian film industry.',
	'about_intro_picture' => null,
	'about_intro_width' => 455,
	'about_columns' => true,
	'about_col_1_show' => true,
	'about_col_1_headline' => 'Movies',
	'about_col_1_subline' => 'What I Watch',
	'about_col_1_icon' => '01',
	'about_col_1_icon_custom' => null,
	'about_col_1' => 'As you\'ve probably noticed, I\'m a Film Geek... I\'m heavily into Directors and their works and I\'m always interested in what Directors people tend to like.',
	'about_col_2_show' => true,
	'about_col_2_headline' => 'Music',
	'about_col_2_subline' => 'What I Listen',
	'about_col_2_icon' => '02',
	'about_col_2_icon_custom' => null,
	'about_col_2' => 'The wonderful group from Liverpool - John, Paul, George and Ringo - The Beatles, is in my opinion one of the best things that have happened in music in the twentieth century.',
	'about_col_3_show' => true,
	'about_col_3_headline' => 'Text',
	'about_col_3_subline' => 'What I Read',
	'about_col_3_icon' => '03',
	'about_col_3_icon_custom' => null,
	'about_col_3' => 'I came up with a list of 8 books that I consider must-reads from both contemporary and classic literature.',
	'about_col_4_show' => true,
	'about_col_4_headline' => 'Photo',
	'about_col_4_subline' => 'What I Shoot',
	'about_col_4_icon' => '04',
	'about_col_4_icon_custom' => null,
	'about_col_4' => 'As a photographer, I like to question everything. I like to understand how things work, why they are how they are, and how it affects what I do.',
	'about_custom' => null,
	
	'portfolio_label' => 'Portfolio',
	'portfolio_label_width' => 515,
	'portfolio_intro' => '<strong>Skills</strong> // Adobe After Effects, Adobe Flash, Adobe Illustrator, Adobe Lightroom, Adobe Photoshop, Adobe Premiere Pro, Apple Final Cut Pro, Apple Aperture etc.',
	'portfolio_intro_width' => 415,
	'portfolio_items' => 12,
	'portfolio_orderby' => 'date',
	'portfolio_order' => 'DESC',
	'portfolio_filtering' => true,
	'portfolio_filter_label' => __('Filter by:', 'haku'),
	
	'blog_label' => 'My Blog',
	'blog_label_width' => 433,
	'blog_intro' => '<strong>About this Blog</strong> // Music was my first love. I like many music genres, but my favourites are classic rock, alternative and electronic music.',
	'blog_intro_width' => 495,
	'blog_orderby' => 'date',
	'blog_order' => 'DESC',
	'blog_paged' => true,
	
	'contact_label' => 'Contact Me',
	'contact_label_width' => 595,
	'contact_address_line' => '<strong>Address </strong>// 1571-1599 Market Street<br />San Francisco, CA 94103',
	'contact_phone_line' => '<strong>Telephone nr</strong>. // (650) 695-143236',
	'contact_email_line' => '<strong>E-Mail</strong> // <a href="mailto:' . get_option('admin_email') . '">' . get_option('admin_email') . '</a>',
	'contact_intro_icons' => true,
	'contact_intro_width' => 330,
	'contact_form' => true,
	'contact_form_sendto' => get_option('admin_email'),
	'contact_form_sender' => get_bloginfo('name'),
	'contact_form_success' => '<h1>' . __('Message sent! Thank you!', 'haku') . '</h1>' . "\n" . '<p>' . __('We\'ll reply as soon as possible.', 'haku') . '</p>',
	'social_myspace' => null,
	'social_flickr' => null,
	'social_linkedin' => null,
	'social_twitter' => null,
	'social_facebook' => null,
	'social_vimeo' => null,
	'social_tumblr' => null,
	'social_custom_1' => null,
	'social_custom_1_icon' => null,
	'social_custom_2' => null,
	'social_custom_2_icon' => null,
	'social_custom_3' => null,
	'social_custom_3_icon' => null,
	'contact_rss_note' => '<a href="' . home_url() . '">Updates</a> // Subscribe <a href="' . get_bloginfo('rss_url') . '">RSS feed</a><br />to receive updates.',
	
	'heading_font' => 'BazarMedium',
	'menu_size' => 32,
	'label_size' => 120,
	'body_font' => 'Arial, Helvetica, sans-serif',
	'body_font_size' => 14,
	'css_code' => null,
	
	'exclude_category' => null,
	'page_responses' => true,
	'trackbacks' => true,
	'wp_login_logo' => null,
	'viewport' => 1000,
	'theme_update' => false
	
);

/***************************/
/*   Framework functions   */
require( $haku['.'] . '/helper.php' );

/********************************/
/*   WP Alchemy metabox class   */
require( $haku['includes'] . '/metabox.php' );

/****************************/
/*   Metaboxes appearance   */
function haku_metaboxes_styles() {
	wp_register_style('haku_metabox_css', get_haku_var('includes_uri') . '/metabox.css', '', get_theme_version() );
	wp_enqueue_style('haku_metabox_css');
}

function haku_metaboxes_javascript() {
	wp_register_script('haku_metabox_js', get_haku_var('includes_uri') . '/metabox.js', '', get_theme_version() );
	wp_enqueue_script('haku_metabox_js');
}

if ( is_wp_edit() ) {
	add_action( 'admin_print_styles', 'haku_metaboxes_styles' );
	add_action( 'admin_enqueue_scripts', 'haku_metaboxes_javascript' );
}	

/***************************/
/*   Theme options panel   */
require( $haku['panel'] . '/setup.php' );

/***************************/
/*   Updates notifier   */
if ( get_theme_option('theme_update') ) {
	require( $haku['.'] . '/update.php' );
}

?>