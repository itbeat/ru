<?php
/*
 *  Haku Framework
 *  Handcrafted by Stefano Giliberti
 */

/******************/
/*   Haku Panel   */
function haku_panel_register() {
	$panel = add_theme_page( get_haku_var('theme_name') . ' ' . get_theme_version(), __( 'Theme Options', 'haku' ), 'switch_themes', 'haku-panel', 'haku_panel' );
	add_action( 'admin_print_styles-' . $panel, 'haku_panel_includes' );
}

add_action( 'admin_menu', 'haku_panel_register' );

function haku_panel() {
	require( get_haku_var('panel') . '/panel.php' );
}

function haku_panel_includes() {

	wp_register_style('haku_css',  get_haku_var('panel_includes_uri') . '/style.css', '', get_haku_var('$') );
	wp_register_script('haku_js_plugins', get_haku_var('panel_includes_uri') . '/js/jquery.plugins.js', '', get_haku_var('$'), 1);
	wp_register_script('haku_js', get_haku_var('panel_includes_uri') . '/js/haku.js', '', get_haku_var('$'), 1);
	
	wp_enqueue_style('haku_css');
	wp_enqueue_media();
	wp_enqueue_script( array('jquery-ui', 'jquery-ui-widget', 'jquery-ui-mouse', 'jquery-ui-sortable', 'jquery-ui-slider', 'media-upload', 'haku_js_plugins', 'haku_js') );

}

function haku_panel_actions() {
	require( get_haku_var('panel') . '/actions.php' );
}

add_action( 'admin_init', 'haku_panel_actions' );

?>