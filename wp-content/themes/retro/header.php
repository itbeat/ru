<!doctype html>

<!-- Html -->
<html <?php language_attributes(); ?>>

<!-- Head -->
<head>

	<!-- Charset -->
	<meta charset="<?php bloginfo('charset'); ?>">

	<!-- Viewport -->
	<meta name="viewport" content="width=<?php echo get_theme_option('viewport'); ?>">

	<!-- Page title -->
	<title><?php wp_title('-', 1, 'right'); ?> <?php bloginfo('name'); ?></title>

	<!-- Profile -->
	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<!-- Favourites icon -->
	<link rel="shortcut icon" href="<?php echo get_theme_option('favicon'); ?>">

	<!-- CSS -->
	<link type="text/css" href="<?php bloginfo('stylesheet_url'); ?>?v=<?php echo get_theme_version(); ?>" rel="stylesheet" />

	<!-- Pingback -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- WP head -->
	<?php wp_head(); ?>

	<?php get_template_part('user'); ?>

</head>

<body <?php body_class(); ?>>

<!-- BEGIN HEADER -->
<div id="header">

	<div class="section_inn">

		<div id="menu">

			<ul id="nav" class="nav">
				<li class="first">
					<a href="<?php echo home_url(); ?>/#about_section"><?php echo retro_filter( get_theme_option('about_label') ); ?></a>
				</li>
				<li class="second">
					<a href="<?php echo home_url(); ?>/#portfolio_section"><?php echo retro_filter( get_theme_option('portfolio_label') ); ?></a>
				</li>
				<li class="third">
					<a href="<?php echo home_url(); ?>/#blog_section"><?php echo retro_filter( get_theme_option('blog_label') ); ?></a>
				</li>
				<li class="fourth">
					<a href="<?php echo home_url(); ?>/#contact_section"><?php echo retro_filter( get_theme_option('contact_label') ); ?></a>
				</li>
			</ul>

			<div class="clr"></div>

		</div><!-- end div #menu -->

		<?php if ( get_theme_option('logo') ) : ?>

		<!-- Logo -->
		<div id="top_logo">
			<a href="<?php echo home_url(); ?>/#home_section"><img src="<?php echo get_theme_option('logo'); ?>" alt="" /></a>
		</div>

		<?php endif; ?>

		<div class="clr"></div>

	</div><!-- end div .section_inn -->

	<div class="clr"></div>

</div>
<!-- END HEADER -->