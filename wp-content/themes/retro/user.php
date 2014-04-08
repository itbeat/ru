<!-- Dynamic CSS -->
<style type="text/css">
	body {
		font-family: <?php echo get_theme_option('body_font'); ?>;
		font-size: <?php echo get_theme_option('body_font_size'); ?>px;
	}

	@font-face {
		font-family: "<?php echo get_theme_option('heading_font'); ?>";
		src: url( "<?php echo get_stylesheet_directory_uri() . '/font/' . strtolower( get_theme_option('heading_font') ) . '/webfont.eot'; ?>" );
		src: url( "<?php echo get_stylesheet_directory_uri() . '/font/' . strtolower( get_theme_option('heading_font') ) . '/webfont.eot?#iefix'; ?>" ) format("embedded-opentype"), url( "<?php echo get_stylesheet_directory_uri() . '/font/' . strtolower( get_theme_option('heading_font') ) . '/webfont.woff'; ?>" ) format("woff"), url( "<?php echo get_stylesheet_directory_uri() . '/font/' . strtolower( get_theme_option('heading_font') ) . '/webfont.ttf'; ?>" ) format("truetype"), url( "<?php echo get_stylesheet_directory_uri() . '/font/' . strtolower( get_theme_option('heading_font') ) . '/webfont.svg#' . get_theme_option('heading_font'); ?>" ) format("svg");
		font-weight: normal;
		font-style: normal;
	}

	#menu ul li a, #home_top_logos #site_ribbon, #home_slider_bottom h3, #hello_welcome, #home_about_desc_left h3, #home_about_listing ul li h2, #home_about_listing ul li h3, #portfolio_section_desc_left h3, #filter_menu label, .title_quote, #blog_section_desc_left h3, #blog_section_listing ul li .date, .post_title, .blog_section_sidebar h3, .retro_search .submit, #contact_section_desc_left h3, #contact_fields h3, #contact_fields_right #submit, .form-submit #submit, #section_title, .blog_comments h3, #contact_form_success_message h1, .nivo-caption h3 {
		font-family: "<?php echo get_theme_option('heading_font'); ?>";
	}

	#menu ul li {
		font-size: <?php echo get_theme_option('menu_size'); ?>px;
	}

	<?php if ( get_theme_option('sticky_menu') ) : ?>

	#header {
		position: fixed;
		top: 0;
	}

	.wrapper {
		padding-top: 130px;
	}

	<?php endif; ?>

	<?php if ( get_theme_option('logo') ) : ?>

	#menu ul li {
		width: 192px;
	}

	#menu ul .second {
		margin-right: 91px;
	}

	#menu ul .third {
		margin-left: 91px;
	}

	<?php endif; ?>

	.section_label {
		font-size: <?php echo get_theme_option('label_size'); ?>px;
	}

	<?php if ( ! get_theme_option('sticky_menu') ) : ?>

	#home_section {
		padding-top: 0;
		margin-top: -3px;
	}

	<?php endif; ?>

	#home_about_desc_left {
		width: <?php echo get_theme_option('about_label_width'); ?>px;
	}

	#home_about_desc_right {
		width: <?php echo get_theme_option('about_intro_width'); ?>px;
	}

	#portfolio_section_desc_left {
		width: <?php echo get_theme_option('portfolio_label_width'); ?>px;
	}

	#portfolio_section_desc_right {
		width: <?php echo get_theme_option('portfolio_intro_width'); ?>px;
	}

	#blog_section_desc_left {
		width: <?php echo get_theme_option('blog_label_width'); ?>px;
	}

	#blog_section_desc_right {
		width: <?php echo get_theme_option('blog_intro_width'); ?>px;
	}

	#contact_section_desc_left {
		width: <?php echo get_theme_option('contact_label_width'); ?>px;
	}

	#contact_section_desc_right {
		width: <?php echo get_theme_option('contact_intro_width'); ?>px;
	}

	<?php if ( get_theme_option('contact_intro_icons') ) : ?>

	#contact_section_desc_right p {
		padding-left:35px;
		background: url( <?php echo get_stylesheet_directory_uri() ?>/images/symbols/address_bg.png ) left top no-repeat;
	}

	#contact_section_desc_right .phon_no {
		background: url( <?php echo get_stylesheet_directory_uri() ?>/images/symbols/phon_no_bg.png ) left top no-repeat;
	}

	#contact_section_desc_right .email {
		background: url( <?php echo get_stylesheet_directory_uri() ?>/images/symbols/msg_bg.png ) left top no-repeat;
	}

	<?php endif; ?>

	<?php echo get_theme_option('css_code'); ?>
</style>
<!-- end: Dynamic CSS -->