<?php
/************************************/
/*   Standard Post Format metabox   */
$retro_format_standard = array(
	'id' => '_retro_format_standard',
	'title' => __('Media', 'haku'),
	'types' => array('portfolio', 'post'),
	'priority' => 'low',
	'template' => get_includes_dir() . '/metabox/format_standard.php'
);

$retro_format_standard = new WPAlchemy_MetaBox( $retro_format_standard );

/***********************/
/*   Page attributes   */
$retro_item_sidebar = array(
	'id' => '_retro_item_sidebar',
	'title' => __('Sidebar', 'haku'),
	'types' => array('post', 'page'),
	'priority' => 'low',
	'template' => get_includes_dir() . '/metabox/item_sidebar.php'
);

$retro_item_sidebar = new WPAlchemy_MetaBox( $retro_item_sidebar );
?>