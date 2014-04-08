<!--
/*
 *  Haku Framework
 *  Handcrafted by Stefano Giliberti
 */
-->

<!-- Tab -->
<div class="section haku_options" data-tab="<?php _e('General', 'haku'); ?>">
	
	<!-- Form -->
	<form id="haku_options_form">

	<!-- Options header -->
	<h1><?php _e('Brand', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Logo', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Button -->						
			<button class="haku_image_upload"><?php _e('Open Media Library', 'haku'); ?></button>
			
			<!-- Option desc -->
			<p><?php _e('Choose your image, then click "Insert into post" to apply it.', 'haku'); ?></p>
			
			<!-- Real input -->
			<input type="text" placeholder="http://" class="haku_image_upload_field <?php haku_hidden('logo'); ?>" name="logo" value="<?php echo esc_url( get_theme_option('logo') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Favourites Icon', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Button -->						
			<button class="haku_image_upload"><?php _e('Open Media Library', 'haku'); ?></button>
			
			<!-- Option desc -->
			<p><?php _e('Choose your image, then click "Insert into post" to apply it.', 'haku'); ?></p>
			
			<!-- Real input -->
			<input type="text" placeholder="http://" class="haku_image_upload_field <?php haku_hidden('favicon'); ?>" name="favicon" value="<?php echo esc_url( get_theme_option('favicon') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('Navigation', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Scrolling Speed', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Slider -->
			<div class="haku_slider" data-min="50" data-max="5000" data-step="50"></div>
			<span class="haku_slider_tip" data-label="<?php echo esc_attr( strtolower( __('milliseconds', 'haku') ) ); ?>"><?php echo get_theme_option('scrolling_speed'); ?> <?php echo strtolower( __('milliseconds', 'haku') ); ?></span>
			
			<!-- Real input -->
			<input type="text" class="hidden" name="scrolling_speed" value="<?php echo esc_attr( get_theme_option('scrolling_speed') ); ?>" />
			
			<!-- Option desc -->
			<p><?php _e('The transition speed between sections.', 'haku'); ?></p>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Scrolling Easing', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Haku select box -->
			<select name="scrolling_easing" class="chzn-select">
				<option <?php haku_selected('scrolling_easing', 'linear'); ?> value="linear"><?php _e('Linear', 'haku'); ?></option>
				<option <?php haku_selected('scrolling_easing', 'easeInOutQuad'); ?> value="easeInOutQuad">Quad</option>
				<option <?php haku_selected('scrolling_easing', 'easeOutCubic'); ?> value="easeOutCubic">Cubic</option>
				<option <?php haku_selected('scrolling_easing', 'easeInOutQuart'); ?> value="easeInOutQuart">Quart</option>
				<option <?php haku_selected('scrolling_easing', 'easeInOutQuint'); ?> value="easeInOutQuint">Quint</option>
				<option <?php haku_selected('scrolling_easing', 'easeInOutSine'); ?> value="easeInOutSine">Sine</option>
				<option <?php haku_selected('scrolling_easing', 'easeInOutExpo'); ?> value="easeInOutExpo">Expo</option>
				<option <?php haku_selected('scrolling_easing', 'easeInOutCirc'); ?> value="easeInOutCirc">Circ</option>
				<option <?php haku_selected('scrolling_easing', 'easeInOutElastic'); ?> value="easeInOutElastic">Elastic</option>
				<option <?php haku_selected('scrolling_easing', 'easeInOutBack'); ?> value="easeInOutBack">Back</option>
				<option <?php haku_selected('scrolling_easing', 'easeInOutBounce'); ?> value="easeInOutBounce">Bounce</option>
			</select>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Adapt Url', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Checkbox -->
			<a href="#" class="haku_checkbox"></a>
			
			<!-- Real input -->
			<input <?php haku_checked('scrolling_hash'); ?> name="scrolling_hash" type="checkbox" value="scrolling_hash" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Sticky Menu', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Checkbox -->
			<a href="#" class="haku_checkbox"></a>
			
			<!-- Real input -->
			<input <?php haku_checked('sticky_menu'); ?> name="sticky_menu" type="checkbox" value="sticky_menu" />
			
			<!-- Option desc -->
			<p><?php _e('Check this to make the Menu stick to the top of the page and be always visible.', 'haku'); ?></p>
			
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Top Buttons', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Checkbox -->
			<a href="#" class="haku_checkbox"></a>
			
			<!-- Real input -->
			<input <?php haku_checked('top'); ?> name="top" type="checkbox" value="top" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('Analytics', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Tracking Code', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Textarea -->
			<textarea placeholder="&lt;script type=&quot;text/javascript&quot;&gt; ... &lt;/script&gt;" name="analytics_code"><?php echo esc_textarea( get_theme_option('analytics_code') ); ?></textarea>
			
			<!-- Option desc -->
			<p><?php _e('The Tracking Code of your favorite Analytics Web Service.', 'haku'); ?></p>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
</div>
<!-- end: Tab -->

<!-- Tab -->
<div class="section haku_options" data-tab="<?php _e('Home', 'haku'); ?>">
	
	<!-- Options header -->
	<h1><?php _e('Intro', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Banner', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Button -->						
			<button class="haku_image_upload"><?php _e('Open Media Library', 'haku'); ?></button>
			
			<!-- Option desc -->
			<p><?php _e('Choose your image, then click "Insert into post" to apply it.', 'haku'); ?></p>
			
			<!-- Real input -->
			<input type="text" placeholder="http://" class="haku_image_upload_field <?php haku_hidden('home_banner'); ?>" name="home_banner" value="<?php echo esc_url( get_theme_option('home_banner') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Ribbon Text', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="home_ribbon_text" value="<?php echo esc_attr( get_theme_option('home_ribbon_text') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('Slider', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix" data-father="home_slider">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Display Slider', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Checkbox -->
			<a href="#" class="haku_checkbox"></a>
			
			<!-- Real input -->
			<input <?php haku_checked('home_slider'); ?> name="home_slider" type="checkbox" value="home_slider" />
			
			<!-- Option desc -->
			<p><?php _e('Check this to show the Slider.', 'haku'); ?></p>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('home_slider'); ?>" data-child="home_slider">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Transition Speed', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Slider -->
			<div class="haku_slider" data-min="50" data-max="5000" data-step="50"></div>
			<span class="haku_slider_tip" data-label="<?php echo esc_attr( strtolower( __('milliseconds', 'haku') ) ); ?>"><?php echo get_theme_option('slider_speed'); ?> <?php echo strtolower( __('milliseconds', 'haku') ); ?></span>
			
			<!-- Real input -->
			<input type="text" class="hidden" name="slider_speed" value="<?php echo esc_attr( get_theme_option('slider_speed') ); ?>" />
			
			<!-- Option desc -->
			<p><?php _e('The transition speed between slides.', 'haku'); ?></p>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('home_slider'); ?>" data-child="home_slider">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Transition Effect', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Haku select box -->
			<select name="slider_fx" class="chzn-select">
				<option <?php haku_selected('slider_fx', 'random'); ?> value="random"><?php _e('Random', 'haku'); ?></option>
				<option <?php haku_selected('slider_fx', 'sliceDown'); ?> value="sliceDown"><?php _e('Slice Down', 'haku'); ?></option>
				<option <?php haku_selected('slider_fx', 'sliceDownLeft'); ?> value="sliceDownLeft"><?php _e('Slice Down-Left', 'haku'); ?></option>
				<option <?php haku_selected('slider_fx', 'sliceUp'); ?> value="sliceUp"><?php _e('Slice Up', 'haku'); ?></option>
				<option <?php haku_selected('slider_fx', 'sliceUpLeft'); ?> value="sliceUpLeft"><?php _e('Slice Up-Left', 'haku'); ?></option>
				<option <?php haku_selected('slider_fx', 'sliceUpDown'); ?> value="sliceUpDown"><?php _e('Slice Up-Down', 'haku'); ?></option>
				<option <?php haku_selected('slider_fx', 'sliceUpDownLeft'); ?> value="sliceUpDownLeft"><?php _e('Slice Up-Down-Left', 'haku'); ?></option>
				<option <?php haku_selected('slider_fx', 'fold'); ?> value="fold"><?php _e('Fold', 'haku'); ?></option>
				<option <?php haku_selected('slider_fx', 'fade'); ?> value="fade"><?php _e('Fade', 'haku'); ?></option>
				<option <?php haku_selected('slider_fx', 'slideInRight'); ?> value="slideInRight"><?php _e('Slide-In Right', 'haku'); ?></option>
				<option <?php haku_selected('slider_fx', 'slideInLeft'); ?> value="slideInLeft"><?php _e('Slide-In Left', 'haku'); ?></option>
				<option <?php haku_selected('slider_fx', 'boxRandom'); ?> value="boxRandom"><?php _e('Box Random', 'haku'); ?></option>
				<option <?php haku_selected('slider_fx', 'boxRain'); ?> value="boxRain"><?php _e('Box Rain', 'haku'); ?></option>
				<option <?php haku_selected('slider_fx', 'boxRainReverse'); ?> value="boxRainReverse"><?php _e('Box Rain Reverse', 'haku'); ?></option>
				<option <?php haku_selected('slider_fx', 'boxRainGrow'); ?> value="boxRainGrow"><?php _e('Box Rain Grow', 'haku'); ?></option>
				<option <?php haku_selected('slider_fx', 'boxRainGrowReverse'); ?> value="boxRainGrowReverse"><?php _e('Box Rain Grow Reverse', 'haku'); ?></option>
			</select>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('home_slider'); ?>" data-child="home_slider">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Slices', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Slider -->
			<div class="haku_slider" data-min="2" data-max="50" data-step="1"></div>
			<span class="haku_slider_tip" data-label="<?php echo esc_attr( strtolower( __('Slices', 'haku') ) ); ?>"><?php echo get_theme_option('slider_slices'); ?> <?php echo strtolower( __('Slices', 'haku') ); ?></span>
			
			<!-- Real input -->
			<input type="text" class="hidden" name="slider_slices" value="<?php echo esc_attr( get_theme_option('slider_slices') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('home_slider'); ?>" data-child="home_slider">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Box Columns', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Slider -->
			<div class="haku_slider" data-min="2" data-max="50" data-step="1"></div>
			<span class="haku_slider_tip" data-label="<?php echo esc_attr( strtolower( __('columns', 'haku') ) ); ?>"><?php echo get_theme_option('slider_boxcols'); ?> <?php echo strtolower( __('columns', 'haku') ); ?></span>
			
			<!-- Real input -->
			<input type="text" class="hidden" name="slider_boxcols" value="<?php echo esc_attr( get_theme_option('slider_boxcols') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('home_slider'); ?>" data-child="home_slider">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Box Rows', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Slider -->
			<div class="haku_slider" data-min="2" data-max="50" data-step="1"></div>
			<span class="haku_slider_tip" data-label="<?php echo esc_attr( strtolower( __('rows', 'haku') ) ); ?>"><?php echo get_theme_option('slider_boxrows'); ?> <?php echo strtolower( __('rows', 'haku') ); ?></span>
			
			<!-- Real input -->
			<input type="text" class="hidden" name="slider_boxrows" value="<?php echo esc_attr( get_theme_option('slider_boxrows') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('home_slider'); ?>" data-child="home_slider">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Pause Time', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Slider -->
			<div class="haku_slider" data-min="1500" data-max="10000" data-step="500"></div>
			<span class="haku_slider_tip" data-label="<?php echo esc_attr( strtolower( __('milliseconds', 'haku') ) ); ?>"><?php echo get_theme_option('slider_pausetime'); ?> <?php echo strtolower( __('milliseconds', 'haku') ); ?></span>
			
			<!-- Real input -->
			<input type="text" class="hidden" name="slider_pausetime" value="<?php echo esc_attr( get_theme_option('slider_pausetime') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('home_slider'); ?>" data-child="home_slider">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Pause On Hover', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Checkbox -->
			<a href="#" class="haku_checkbox"></a>
			
			<!-- Real input -->
			<input <?php haku_checked('slider_pause'); ?> name="slider_pause" type="checkbox" value="slider_pause" />

		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('home_slider'); ?>" data-child="home_slider">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Arrows', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Checkbox -->
			<a href="#" class="haku_checkbox"></a>
			
			<!-- Real input -->
			<input <?php haku_checked('slider_nav'); ?> name="slider_nav" type="checkbox" value="slider_nav" />
			
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('home_slider'); ?>" data-child="home_slider">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Randomise', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Checkbox -->
			<a href="#" class="haku_checkbox"></a>
			
			<!-- Real input -->
			<input <?php haku_checked('slider_random'); ?> name="slider_random" type="checkbox" value="slider_random" />
			
			<!-- Option desc -->
			<p><?php _e('Show a random slide on start.', 'haku'); ?></p>
			
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('home_slider'); ?>" data-child="home_slider">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Use Captions', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Checkbox -->
			<a href="#" class="haku_checkbox"></a>
			
			<!-- Real input -->
			<input <?php haku_checked('slider_captions'); ?> name="slider_captions" type="checkbox" value="slider_captions" />

		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('Welcome Text', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Headline', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="home_welcome_headline" value="<?php echo esc_attr( get_theme_option('home_welcome_headline') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Subline', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="home_welcome_subline" value="<?php echo esc_attr( get_theme_option('home_welcome_subline') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
</div>
<!-- end: Tab -->

<!-- Tab -->
<div class="section haku_options" data-tab="<?php _e('About', 'haku'); ?>">
	
	<!-- Options header -->
	<h1><?php _e('General', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Label', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="about_label" value="<?php echo esc_attr( get_theme_option('about_label') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option -->
		<div>
			
			<!-- Slider -->
			<div class="haku_slider" data-min="0" data-max="950" data-step="1"></div>
			<span class="haku_slider_tip" data-label="<?php echo esc_attr( strtolower( __('pixels', 'haku') ) ); ?>"><?php echo get_theme_option('about_label_width'); ?> <?php echo strtolower( __('pixels', 'haku') ); ?></span>
			
			<!-- Real input -->
			<input type="text" class="hidden" name="about_label_width" value="<?php echo esc_attr( get_theme_option('about_label_width') ); ?>" />
			
			<!-- Option desc -->
			<p><?php _e('The width of the section\'s label.', 'haku'); ?></p>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Intro', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Textarea -->
			<textarea name="about_intro"><?php echo esc_textarea( get_theme_option('about_intro') ); ?></textarea>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Intro Picture', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Button -->						
			<button class="haku_image_upload"><?php _e('Open Media Library', 'haku'); ?></button>
			
			<!-- Option desc -->
			<p><?php _e('Choose your image, then click "Insert into post" to apply it.', 'haku'); ?></p>
			
			<!-- Real input -->
			<input type="text" placeholder="http://" class="haku_image_upload_field <?php haku_hidden('about_intro_picture'); ?>" name="about_intro_picture" value="<?php echo esc_url( get_theme_option('about_intro_picture') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option -->
		<div>
			
			<!-- Slider -->
			<div class="haku_slider" data-min="0" data-max="950" data-step="1"></div>
			<span class="haku_slider_tip" data-label="<?php echo esc_attr( strtolower( __('pixels', 'haku') ) ); ?>"><?php echo get_theme_option('about_intro_width'); ?> <?php echo strtolower( __('pixels', 'haku') ); ?></span>
			
			<!-- Real input -->
			<input type="text" class="hidden" name="about_intro_width" value="<?php echo esc_attr( get_theme_option('about_intro_width') ); ?>" />
			
			<!-- Option desc -->
			<p><?php _e('The width of the section\'s intro.', 'haku'); ?></p>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('Column 1', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix" data-father="about_col_1_show">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Show Column', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Checkbox -->
			<a href="#" class="haku_checkbox"></a>
			
			<!-- Real input -->
			<input <?php haku_checked('about_col_1_show'); ?> name="about_col_1_show" type="checkbox" value="about_col_1_show" />
					
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('about_col_1_show'); ?>" data-child="about_col_1_show">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Headline', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="about_col_1_headline" value="<?php echo esc_attr( get_theme_option('about_col_1_headline') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('about_col_1_show'); ?>" data-child="about_col_1_show">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Subline', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="about_col_1_subline" value="<?php echo esc_attr( get_theme_option('about_col_1_subline') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('about_col_1_show'); ?>" data-child="about_col_1_show">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Icon', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Haku radio list -->
			<div class="haku_radiopic_list"></div>
			
			<!-- Real input -->
			<select name="about_col_1_icon" class="haku_radiopic_select hidden">
				<option <?php haku_selected('about_col_1_icon', '01'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_01.png" value="01"></option>
				<option <?php haku_selected('about_col_1_icon', '02'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_02.png" value="02"></option>
				<option <?php haku_selected('about_col_1_icon', '03'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_03.png" value="03"></option>
				<option <?php haku_selected('about_col_1_icon', '04'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_04.png" value="04"></option>
				<option <?php haku_selected('about_col_1_icon', '05'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_05.png" value="05"></option>
				<option <?php haku_selected('about_col_1_icon', '06'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_06.png" value="06"></option>
				<option <?php haku_selected('about_col_1_icon', '07'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_07.png" value="07"></option>
				<option <?php haku_selected('about_col_1_icon', '08'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_08.png" value="08"></option>
				<option <?php haku_selected('about_col_1_icon', '09'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_09.png" value="09"></option>
				<option <?php haku_selected('about_col_1_icon', '10'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_10.png" value="10"></option>
				<option <?php haku_selected('about_col_1_icon', '11'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_11.png" value="11"></option>
				<option <?php haku_selected('about_col_1_icon', '12'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_12.png" value="12"></option>
				<option <?php haku_selected('about_col_1_icon', '13'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_13.png" value="13"></option>
			</select>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('about_col_1_show'); ?>" data-child="about_col_1_show">
		
		<!-- Option -->
		<div>
			
			<!-- Button -->						
			<button class="haku_image_upload"><?php _e('Open Media Library', 'haku'); ?></button>
			
			<!-- Option desc -->
			<p><?php _e('Choose your custom icon image, then click "Insert into post" to apply it.', 'haku'); ?></p>
			
			<!-- Real input -->
			<input type="text" placeholder="http://" class="haku_image_upload_field <?php haku_hidden('about_col_1_icon_custom'); ?>" name="about_col_1_icon_custom" value="<?php echo esc_url( get_theme_option('about_col_1_icon_custom') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('about_col_1_show'); ?>" data-child="about_col_1_show">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Content', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Textarea -->
			<textarea name="about_col_1"><?php echo esc_textarea( get_theme_option('about_col_1') ); ?></textarea>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('Column 2', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix" data-father="about_col_2_show">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Show Column', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Checkbox -->
			<a href="#" class="haku_checkbox"></a>
			
			<!-- Real input -->
			<input <?php haku_checked('about_col_2_show'); ?> name="about_col_2_show" type="checkbox" value="about_col_2_show" />
					
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('about_col_2_show'); ?>" data-child="about_col_2_show">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Headline', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="about_col_2_headline" value="<?php echo esc_attr( get_theme_option('about_col_2_headline') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('about_col_2_show'); ?>" data-child="about_col_2_show">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Subline', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="about_col_2_subline" value="<?php echo esc_attr( get_theme_option('about_col_2_subline') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('about_col_2_show'); ?>" data-child="about_col_2_show">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Icon', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Haku radio list -->
			<div class="haku_radiopic_list"></div>
			
			<!-- Real input -->
			<select name="about_col_2_icon" class="haku_radiopic_select hidden">
				<option <?php haku_selected('about_col_2_icon', '01'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_01.png" value="01"></option>
				<option <?php haku_selected('about_col_2_icon', '02'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_02.png" value="02"></option>
				<option <?php haku_selected('about_col_2_icon', '03'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_03.png" value="03"></option>
				<option <?php haku_selected('about_col_2_icon', '04'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_04.png" value="04"></option>
				<option <?php haku_selected('about_col_2_icon', '05'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_05.png" value="05"></option>
				<option <?php haku_selected('about_col_2_icon', '06'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_06.png" value="06"></option>
				<option <?php haku_selected('about_col_2_icon', '07'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_07.png" value="07"></option>
				<option <?php haku_selected('about_col_2_icon', '08'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_08.png" value="08"></option>
				<option <?php haku_selected('about_col_2_icon', '09'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_09.png" value="09"></option>
				<option <?php haku_selected('about_col_2_icon', '10'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_10.png" value="10"></option>
				<option <?php haku_selected('about_col_2_icon', '11'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_11.png" value="11"></option>
				<option <?php haku_selected('about_col_2_icon', '12'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_12.png" value="12"></option>
				<option <?php haku_selected('about_col_2_icon', '13'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_13.png" value="13"></option>
			</select>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('about_col_2_show'); ?>" data-child="about_col_2_show">
		
		<!-- Option -->
		<div>
			
			<!-- Button -->						
			<button class="haku_image_upload"><?php _e('Open Media Library', 'haku'); ?></button>
			
			<!-- Option desc -->
			<p><?php _e('Choose your custom icon image, then click "Insert into post" to apply it.', 'haku'); ?></p>
			
			<!-- Real input -->
			<input type="text" placeholder="http://" class="haku_image_upload_field <?php haku_hidden('about_col_2_icon_custom'); ?>" name="about_col_2_icon_custom" value="<?php echo esc_url( get_theme_option('about_col_2_icon_custom') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('about_col_2_show'); ?>" data-child="about_col_2_show">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Content', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Textarea -->
			<textarea name="about_col_2"><?php echo esc_textarea( get_theme_option('about_col_2') ); ?></textarea>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('Column 3', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix" data-father="about_col_3_show">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Show Column', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Checkbox -->
			<a href="#" class="haku_checkbox"></a>
			
			<!-- Real input -->
			<input <?php haku_checked('about_col_3_show'); ?> name="about_col_3_show" type="checkbox" value="about_col_3_show" />
					
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('about_col_3_show'); ?>" data-child="about_col_3_show">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Headline', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="about_col_3_headline" value="<?php echo esc_attr( get_theme_option('about_col_3_headline') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('about_col_3_show'); ?>" data-child="about_col_3_show">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Subline', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="about_col_3_subline" value="<?php echo esc_attr( get_theme_option('about_col_3_subline') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('about_col_3_show'); ?>" data-child="about_col_3_show">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Icon', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Haku radio list -->
			<div class="haku_radiopic_list"></div>
			
			<!-- Real input -->
			<select name="about_col_3_icon" class="haku_radiopic_select hidden">
				<option <?php haku_selected('about_col_3_icon', '01'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_01.png" value="01"></option>
				<option <?php haku_selected('about_col_3_icon', '02'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_02.png" value="02"></option>
				<option <?php haku_selected('about_col_3_icon', '03'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_03.png" value="03"></option>
				<option <?php haku_selected('about_col_3_icon', '04'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_04.png" value="04"></option>
				<option <?php haku_selected('about_col_3_icon', '05'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_05.png" value="05"></option>
				<option <?php haku_selected('about_col_3_icon', '06'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_06.png" value="06"></option>
				<option <?php haku_selected('about_col_3_icon', '07'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_07.png" value="07"></option>
				<option <?php haku_selected('about_col_3_icon', '08'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_08.png" value="08"></option>
				<option <?php haku_selected('about_col_3_icon', '09'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_09.png" value="09"></option>
				<option <?php haku_selected('about_col_3_icon', '10'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_10.png" value="10"></option>
				<option <?php haku_selected('about_col_3_icon', '11'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_11.png" value="11"></option>
				<option <?php haku_selected('about_col_3_icon', '12'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_12.png" value="12"></option>
				<option <?php haku_selected('about_col_3_icon', '13'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_13.png" value="13"></option>
			</select>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('about_col_3_show'); ?>" data-child="about_col_3_show">
		
		<!-- Option -->
		<div>
			
			<!-- Button -->						
			<button class="haku_image_upload"><?php _e('Open Media Library', 'haku'); ?></button>
			
			<!-- Option desc -->
			<p><?php _e('Choose your custom icon image, then click "Insert into post" to apply it.', 'haku'); ?></p>
			
			<!-- Real input -->
			<input type="text" placeholder="http://" class="haku_image_upload_field <?php haku_hidden('about_col_3_icon_custom'); ?>" name="about_col_3_icon_custom" value="<?php echo esc_url( get_theme_option('about_col_3_icon_custom') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('about_col_3_show'); ?>" data-child="about_col_3_show">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Content', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Textarea -->
			<textarea name="about_col_3"><?php echo esc_textarea( get_theme_option('about_col_3') ); ?></textarea>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('Column 4', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix" data-father="about_col_4_show">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Show Column', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Checkbox -->
			<a href="#" class="haku_checkbox"></a>
			
			<!-- Real input -->
			<input <?php haku_checked('about_col_4_show'); ?> name="about_col_4_show" type="checkbox" value="about_col_4_show" />
					
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('about_col_4_show'); ?>" data-child="about_col_4_show">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Headline', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="about_col_4_headline" value="<?php echo esc_attr( get_theme_option('about_col_4_headline') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('about_col_4_show'); ?>" data-child="about_col_4_show">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Subline', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="about_col_4_subline" value="<?php echo esc_attr( get_theme_option('about_col_4_subline') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('about_col_4_show'); ?>" data-child="about_col_4_show">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Icon', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Haku radio list -->
			<div class="haku_radiopic_list"></div>
			
			<!-- Real input -->
			<select name="about_col_4_icon" class="haku_radiopic_select hidden">
				<option <?php haku_selected('about_col_4_icon', '01'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_01.png" value="01"></option>
				<option <?php haku_selected('about_col_4_icon', '02'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_02.png" value="02"></option>
				<option <?php haku_selected('about_col_4_icon', '03'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_03.png" value="03"></option>
				<option <?php haku_selected('about_col_4_icon', '04'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_04.png" value="04"></option>
				<option <?php haku_selected('about_col_4_icon', '05'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_05.png" value="05"></option>
				<option <?php haku_selected('about_col_4_icon', '06'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_06.png" value="06"></option>
				<option <?php haku_selected('about_col_4_icon', '07'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_07.png" value="07"></option>
				<option <?php haku_selected('about_col_4_icon', '08'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_08.png" value="08"></option>
				<option <?php haku_selected('about_col_4_icon', '09'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_09.png" value="09"></option>
				<option <?php haku_selected('about_col_4_icon', '10'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_10.png" value="10"></option>
				<option <?php haku_selected('about_col_4_icon', '11'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_11.png" value="11"></option>
				<option <?php haku_selected('about_col_4_icon', '12'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_12.png" value="12"></option>
				<option <?php haku_selected('about_col_4_icon', '13'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/ico_13.png" value="13"></option>
			</select>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('about_col_4_show'); ?>" data-child="about_col_4_show">
		
		<!-- Option -->
		<div>
			
			<!-- Button -->						
			<button class="haku_image_upload"><?php _e('Open Media Library', 'haku'); ?></button>
			
			<!-- Option desc -->
			<p><?php _e('Choose your custom icon image, then click "Insert into post" to apply it.', 'haku'); ?></p>
			
			<!-- Real input -->
			<input type="text" placeholder="http://" class="haku_image_upload_field <?php haku_hidden('about_col_4_icon_custom'); ?>" name="about_col_4_icon_custom" value="<?php echo esc_url( get_theme_option('about_col_4_icon_custom') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('about_col_4_show'); ?>" data-child="about_col_4_show">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Content', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Textarea -->
			<textarea name="about_col_4"><?php echo esc_textarea( get_theme_option('about_col_4') ); ?></textarea>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('Custom Content', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Content', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Textarea -->
			<textarea name="about_custom"><?php echo esc_textarea( get_theme_option('about_custom') ); ?></textarea>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
</div>
<!-- end: Tab -->

<!-- Tab -->
<div class="section haku_options" data-tab="<?php _e('Portfolio', 'haku'); ?>">
	
	<!-- Options header -->
	<h1><?php _e('General', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Label', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="portfolio_label" value="<?php echo esc_attr( get_theme_option('portfolio_label') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option -->
		<div>
			
			<!-- Slider -->
			<div class="haku_slider" data-min="0" data-max="950" data-step="1"></div>
			<span class="haku_slider_tip" data-label="<?php echo esc_attr( strtolower( __('pixels', 'haku') ) ); ?>"><?php echo get_theme_option('portfolio_label_width'); ?> <?php echo strtolower( __('pixels', 'haku') ); ?></span>
			
			<!-- Real input -->
			<input type="text" class="hidden" name="portfolio_label_width" value="<?php echo esc_attr( get_theme_option('portfolio_label_width') ); ?>" />
			
			<!-- Option desc -->
			<p><?php _e('The width of the section\'s label.', 'haku'); ?></p>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Intro', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Textarea -->
			<textarea name="portfolio_intro"><?php echo esc_textarea( get_theme_option('portfolio_intro') ); ?></textarea>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option -->
		<div>
			
			<!-- Slider -->
			<div class="haku_slider" data-min="0" data-max="950" data-step="1"></div>
			<span class="haku_slider_tip" data-label="<?php echo esc_attr( strtolower( __('pixels', 'haku') ) ); ?>"><?php echo get_theme_option('portfolio_intro_width'); ?> <?php echo strtolower( __('pixels', 'haku') ); ?></span>
			
			<!-- Real input -->
			<input type="text" class="hidden" name="portfolio_intro_width" value="<?php echo esc_attr( get_theme_option('portfolio_intro_width') ); ?>" />
			
			<!-- Option desc -->
			<p><?php _e('The width of the section\'s intro.', 'haku'); ?></p>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('Pagination', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Items Number', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			
			
			<!-- Slider -->
			<div class="haku_slider" data-min="0" data-max="<?php echo ( get_posts_count() * 10 ); ?>" data-step="1"></div>
			<span class="haku_slider_tip" data-label="<?php echo esc_attr( strtolower( __('items', 'haku') ) ); ?>"><?php echo get_theme_option('portfolio_items'); ?> <?php echo strtolower( __('items', 'haku') ); ?></span>
			
			<!-- Real input -->
			<input type="text" class="hidden" name="portfolio_items" value="<?php echo esc_attr( get_theme_option('portfolio_items') ); ?>" />

			<!-- Option desc -->
			<p><?php _e('The number of items to display.', 'haku'); ?></p>
			
			<?php if ( ! get_posts_count() ) : ?>
			
			<!-- Option desc -->
			<span class="haku_notice"><?php _e('No item has been added.', 'haku'); ?></span>
			
			<?php endif; ?>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Order by', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Haku select box -->
			<select name="portfolio_orderby" class="chzn-select">
				<option <?php haku_selected('portfolio_orderby', 'ID'); ?> value="ID">ID</option>
				<option <?php haku_selected('portfolio_orderby', 'title'); ?> value="title"><?php _e('Title', 'haku'); ?></option>
				<option <?php haku_selected('portfolio_orderby', 'date'); ?> value="date"><?php _e('Date', 'haku'); ?></option>
				<option <?php haku_selected('portfolio_orderby', 'rand'); ?> value="rand"><?php _e('Random', 'haku'); ?></option>
			</select>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Order', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Haku select box -->
			<select name="portfolio_order" class="chzn-select">
				<option <?php haku_selected('portfolio_order', 'ASC'); ?> value="ASC"><?php _e('Ascending', 'haku'); ?></option>
				<option <?php haku_selected('portfolio_order', 'DESC'); ?> value="DESC"><?php _e('Descending', 'haku'); ?></option>
			</select>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('Filtering', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix" data-father="portfolio_filtering">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Filtering', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Checkbox -->
			<a href="#" class="haku_checkbox"></a>
			
			<!-- Real input -->
			<input <?php haku_checked('portfolio_filtering'); ?> name="portfolio_filtering" type="checkbox" value="portfolio_filtering" />
			
			<!-- Option desc -->
			<p><?php _e('Check this to enable the Portfolio Filtering.', 'haku'); ?></p>

		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('portfolio_filtering'); ?>" data-child="portfolio_filtering">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Label', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="portfolio_filter_label" value="<?php echo esc_attr( get_theme_option('portfolio_filter_label') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->

</div>
<!-- end: Tab -->

<!-- Tab -->
<div class="section haku_options" data-tab="<?php _e('Blog', 'haku'); ?>">
	
	<!-- Options header -->
	<h1><?php _e('General', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Label', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="blog_label" value="<?php echo esc_attr( get_theme_option('blog_label') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option -->
		<div>
			
			<!-- Slider -->
			<div class="haku_slider" data-min="0" data-max="950" data-step="1"></div>
			<span class="haku_slider_tip" data-label="<?php echo esc_attr( strtolower( __('pixels', 'haku') ) ); ?>"><?php echo get_theme_option('blog_label_width'); ?> <?php echo strtolower( __('pixels', 'haku') ); ?></span>
			
			<!-- Real input -->
			<input type="text" class="hidden" name="blog_label_width" value="<?php echo esc_attr( get_theme_option('blog_label_width') ); ?>" />
			
			<!-- Option desc -->
			<p><?php _e('The width of the section\'s label.', 'haku'); ?></p>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Intro', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Textarea -->
			<textarea name="blog_intro"><?php echo esc_textarea( get_theme_option('blog_intro') ); ?></textarea>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option -->
		<div>
			
			<!-- Slider -->
			<div class="haku_slider" data-min="0" data-max="950" data-step="1"></div>
			<span class="haku_slider_tip" data-label="<?php echo esc_attr( strtolower( __('pixels', 'haku') ) ); ?>"><?php echo get_theme_option('blog_intro_width'); ?> <?php echo strtolower( __('pixels', 'haku') ); ?></span>
			
			<!-- Real input -->
			<input type="text" class="hidden" name="blog_intro_width" value="<?php echo esc_attr( get_theme_option('blog_intro_width') ); ?>" />
			
			<!-- Option desc -->
			<p><?php _e('The width of the section\'s intro.', 'haku'); ?></p>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('Pagination', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Order by', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Haku select box -->
			<select name="blog_orderby" class="chzn-select">
				<option <?php haku_selected('blog_orderby', 'ID'); ?> value="ID">ID</option>
				<option <?php haku_selected('blog_orderby', 'title'); ?> value="title"><?php _e('Title', 'haku'); ?></option>
				<option <?php haku_selected('blog_orderby', 'date'); ?> value="date"><?php _e('Date', 'haku'); ?></option>
				<option <?php haku_selected('blog_orderby', 'rand'); ?> value="rand"><?php _e('Random', 'haku'); ?></option>
			</select>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Order', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Haku select box -->
			<select name="blog_order" class="chzn-select">
				<option <?php haku_selected('blog_order', 'ASC'); ?> value="ASC"><?php _e('Ascending', 'haku'); ?></option>
				<option <?php haku_selected('blog_order', 'DESC'); ?> value="DESC"><?php _e('Descending', 'haku'); ?></option>
			</select>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Pagination', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Checkbox -->
			<a href="#" class="haku_checkbox"></a>
			
			<!-- Real input -->
			<input <?php haku_checked('blog_paged'); ?> name="blog_paged" type="checkbox" value="blog_paged" />
			
			<!-- Option desc -->
			<p><?php _e('Check this to enable the Previous/Next pagination.', 'haku'); ?></p>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
</div>
<!-- end: Tab -->

<!-- Tab -->
<div class="section haku_options" data-tab="<?php _e('Contact', 'haku'); ?>">
	
	<!-- Options header -->
	<h1><?php _e('General', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Label', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="contact_label" value="<?php echo esc_attr( get_theme_option('contact_label') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option -->
		<div>
			
			<!-- Slider -->
			<div class="haku_slider" data-min="0" data-max="950" data-step="1"></div>
			<span class="haku_slider_tip" data-label="<?php echo esc_attr( strtolower( __('pixels', 'haku') ) ); ?>"><?php echo get_theme_option('contact_label_width'); ?> <?php echo strtolower( __('pixels', 'haku') ); ?></span>
			
			<!-- Real input -->
			<input type="text" class="hidden" name="contact_label_width" value="<?php echo esc_attr( get_theme_option('contact_label_width') ); ?>" />
			
			<!-- Option desc -->
			<p><?php _e('The width of the section\'s label.', 'haku'); ?></p>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Address Line', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="contact_address_line" value="<?php echo esc_attr( get_theme_option('contact_address_line') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Phone Line', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="contact_phone_line" value="<?php echo esc_attr( get_theme_option('contact_phone_line') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('E-Mail Line', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="contact_email_line" value="<?php echo esc_attr( get_theme_option('contact_email_line') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Show Icons', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Checkbox -->
			<a href="#" class="haku_checkbox"></a>
			
			<!-- Real input -->
			<input <?php haku_checked('contact_intro_icons'); ?> name="contact_intro_icons" type="checkbox" value="contact_intro_icons" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option -->
		<div>
			
			<!-- Slider -->
			<div class="haku_slider" data-min="0" data-max="950" data-step="1"></div>
			<span class="haku_slider_tip" data-label="<?php echo esc_attr( strtolower( __('pixels', 'haku') ) ); ?>"><?php echo get_theme_option('contact_intro_width'); ?> <?php echo strtolower( __('pixels', 'haku') ); ?></span>
			
			<!-- Real input -->
			<input type="text" class="hidden" name="contact_intro_width" value="<?php echo esc_attr( get_theme_option('contact_intro_width') ); ?>" />
			
			<!-- Option desc -->
			<p><?php _e('The width of the section\'s intro.', 'haku'); ?></p>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('Contact Form', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix" data-father="contact_form">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Display Contact Form', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Checkbox -->
			<a href="#" class="haku_checkbox"></a>
			
			<!-- Real input -->
			<input <?php haku_checked('contact_form'); ?> name="contact_form" type="checkbox" value="contact_form" />
			
			<!-- Option desc -->
			<p><?php _e('Check this to show the Contact Form.', 'haku'); ?></p>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('contact_form'); ?>" data-child="contact_form">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Send Mail To', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="contact_form_sendto" value="<?php echo esc_attr( get_theme_option('contact_form_sendto') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('contact_form'); ?>" data-child="contact_form">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Sender', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" name="contact_form_sender" value="<?php echo esc_attr( get_theme_option('contact_form_sender') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix <?php haku_hidden('contact_form'); ?>" data-child="contact_form">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Success Message', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Textarea -->
			<textarea name="contact_form_success"><?php echo esc_textarea( get_theme_option('contact_form_success') ); ?></textarea>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('Social Networks', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('MySpace', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" placeholder="http://myspace.com/" name="social_myspace" value="<?php echo esc_url( get_theme_option('social_myspace') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Flickr', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" placeholder="http://flickr.com/photos/" name="social_flickr" value="<?php echo esc_url( get_theme_option('social_flickr') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('LinkedIn', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" placeholder="http://linkedin.com/pub/" name="social_linkedin" value="<?php echo esc_url( get_theme_option('social_linkedin') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Twitter', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" placeholder="http://twitter.com/" name="social_twitter" value="<?php echo esc_url( get_theme_option('social_twitter') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Facebook', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" placeholder="http://facebook.com/" name="social_facebook" value="<?php echo esc_url( get_theme_option('social_facebook') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Vimeo', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" placeholder="http://vimeo.com/" name="social_vimeo" value="<?php echo esc_url( get_theme_option('social_vimeo') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Tumblr', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" placeholder="http://tumblr.com" name="social_tumblr" value="<?php echo esc_url( get_theme_option('social_tumblr') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Custom #1', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" placeholder="http://" name="social_custom_1" value="<?php echo esc_url( get_theme_option('social_custom_1') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option -->
		<div>
			
			<!-- Button -->						
			<button class="haku_image_upload"><?php _e('Open Media Library', 'haku'); ?></button>
			
			<!-- Option desc -->
			<p><?php _e('Choose your custom icon image, then click "Insert into post" to apply it.', 'haku'); ?></p>
			
			<!-- Real input -->
			<input type="text" placeholder="http://" class="haku_image_upload_field <?php haku_hidden('social_custom_1_icon'); ?>" name="social_custom_1_icon" value="<?php echo esc_url( get_theme_option('social_custom_1_icon') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Custom #2', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" placeholder="http://" name="social_custom_2" value="<?php echo esc_url( get_theme_option('social_custom_2') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option -->
		<div>
			
			<!-- Button -->						
			<button class="haku_image_upload"><?php _e('Open Media Library', 'haku'); ?></button>
			
			<!-- Option desc -->
			<p><?php _e('Choose your custom icon image, then click "Insert into post" to apply it.', 'haku'); ?></p>
			
			<!-- Real input -->
			<input type="text" placeholder="http://" class="haku_image_upload_field <?php haku_hidden('social_custom_2_icon'); ?>" name="social_custom_2_icon" value="<?php echo esc_url( get_theme_option('social_custom_2_icon') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Custom #3', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Text input -->
			<input type="text" placeholder="http://" name="social_custom_3" value="<?php echo esc_url( get_theme_option('social_custom_3') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option -->
		<div>
			
			<!-- Button -->						
			<button class="haku_image_upload"><?php _e('Open Media Library', 'haku'); ?></button>
			
			<!-- Option desc -->
			<p><?php _e('Choose your custom icon image, then click "Insert into post" to apply it.', 'haku'); ?></p>
			
			<!-- Real input -->
			<input type="text" placeholder="http://" class="haku_image_upload_field <?php haku_hidden('social_custom_3_icon'); ?>" name="social_custom_3_icon" value="<?php echo esc_url( get_theme_option('social_custom_3_icon') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('RSS Footer', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Note Text', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Textarea -->
			<textarea name="contact_rss_note"><?php echo esc_textarea( get_theme_option('contact_rss_note') ); ?></textarea>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
</div>
<!-- end: Tab -->

<!-- Tab -->
<div class="section haku_options" data-tab="<?php _e('Styling', 'haku'); ?>">
	
	<!-- Options header -->
	<h1><?php _e('Headings', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Font', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Haku radio list -->
			<div class="haku_radiopic_list"></div>
			
			<!-- Real input -->
			<select name="heading_font" class="haku_radiopic_select hidden">
				<option <?php haku_selected('heading_font', 'BazarMedium'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/font_01.png" value="BazarMedium"></option>
				<option <?php haku_selected('heading_font', 'BebasNeueRegular'); ?> data-radiopic="<?php echo get_haku_var('panel_uri'); ?>/images/font_02.png" value="BebasNeueRegular"></option>
			</select>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Menu Font Size', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Slider -->
			<div class="haku_slider" data-min="25" data-max="50" data-step="1"></div>
			<span class="haku_slider_tip"><?php echo get_theme_option('menu_size'); ?> pixels</span>
			
			<!-- Real input -->
			<input type="text" class="hidden" name="menu_size" value="<?php echo esc_attr( get_theme_option('menu_size') ); ?>" />
			
			<!-- Option desc -->
			<p><strong><?php _e('Optimal Size:', 'haku'); ?></strong> Bazar: 32 pixels, Bebas: 43 pixels.</p>
			
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Label Font Size', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Slider -->
			<div class="haku_slider" data-min="70" data-max="160" data-step="1"></div>
			<span class="haku_slider_tip"><?php echo get_theme_option('label_size'); ?> pixels</span>
			
			<!-- Real input -->
			<input type="text" class="hidden" name="label_size" value="<?php echo esc_attr( get_theme_option('label_size') ); ?>" />
			
			<!-- Option desc -->
			<p><strong><?php _e('Optimal Size:', 'haku'); ?></strong> Bazar: 120 pixels, Bebas: 153 pixels.</p>
			
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('Body', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Font Family', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Haku select box -->
			<select name="body_font" class="chzn-select">
				<option <?php haku_selected('body_font', '"HelveticaNeue", "Helvetica-Neue", "Helvetica Neue", Helvetica, Arial, sans-serif'); ?> value='"HelveticaNeue", "Helvetica-Neue", "Helvetica Neue", Helvetica, Arial, sans-serif'>Helvetica Neue</option> 
				<option <?php haku_selected('body_font', 'Helvetica, Arial, sans-serif'); ?> value='Helvetica, Arial, sans-serif'>Helvetica</option> 
				<option <?php haku_selected('body_font', 'Arial, Helvetica, sans-serif'); ?> value='Arial, Helvetica, sans-serif'>Arial</option>
				<option <?php haku_selected('body_font', 'Baskerville, "Times New Roman", Times, serif'); ?> value='Baskerville, "Times New Roman", Times, serif'>Baskerville</option>
				<option <?php haku_selected('body_font', 'Cambria, Georgia, Times, "Times New Roman", serif'); ?> value='Cambria, Georgia, Times, "Times New Roman", serif'>Cambria</option>
				<option <?php haku_selected('body_font', 'Consolas, "Lucida Console", Monaco, monospace'); ?> value='Consolas, "Lucida Console", Monaco, monospace'>Consolas</option>
				<option <?php haku_selected('body_font', '"Copperplate Light", "Copperplate Gothic Light", serif'); ?> value='"Copperplate Light", "Copperplate Gothic Light", serif'>Copperlate Light</option>
				<option <?php haku_selected('body_font', '"Courier New", Courier, monospace'); ?> value='"Courier New", Courier, monospace'>Courier New</option>
				<option <?php haku_selected('body_font', '"Franklin Gothic Medium", "Arial Narrow Bold", Arial, sans-serif'); ?> value='"Franklin Gothic Medium", "Arial Narrow Bold", Arial, sans-serif'>Franklin Gothic Medium</option>
				<option <?php haku_selected('body_font', 'Futura, "Century Gothic", AppleGothic, sans-serif'); ?> value='Futura, "Century Gothic", AppleGothic, sans-serif'>Futura</option>
				<option <?php haku_selected('body_font', 'Geneva, "Lucida Sans", "Lucida Grande", "Lucida Sans Unicode", Verdana, sans-serif'); ?> value='Geneva, "Lucida Sans", "Lucida Grande", "Lucida Sans Unicode", Verdana, sans-serif'>Geneva</option>
				<option <?php haku_selected('body_font', 'Georgia, Palatino, "Palatino Linotype", Times, "Times New Roman", serif'); ?> value='Georgia, Palatino, "Palatino Linotype", Times, "Times New Roman", serif'>Georgia</option>
				<option <?php haku_selected('body_font', '"Gill Sans", Calibri, "Trebuchet MS", sans-serif'); ?> value='"Gill Sans", Calibri, "Trebuchet MS", sans-serif'>Gill Sans</option>
				<option <?php haku_selected('body_font', 'Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif'); ?> value='Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif'>Impact</option>
				<option <?php haku_selected('body_font', '"Lucida Sans", "Lucida Grande", "Lucida Sans Unicode", sans-serif'); ?> value='"Lucida Sans", "Lucida Grande", "Lucida Sans Unicode", sans-serif'>Lucida Sans</option>
				<option <?php haku_selected('body_font', 'Palatino, "Palatino Linotype", Georgia, Times, "Times New Roman", serif'); ?> value='Palatino, "Palatino Linotype", Georgia, Times, "Times New Roman", serif'>Palatino</option>
				<option <?php haku_selected('body_font', 'Tahoma, Geneva, Verdana'); ?> value='Tahoma, Geneva, Verdana'>Tahoma</option>
				<option <?php haku_selected('body_font', 'Times, "Times New Roman", Georgia, serif'); ?> value='Times, "Times New Roman", Georgia, serif'>Times</option>
				<option <?php haku_selected('body_font', '"Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif'); ?> value='"Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif'>Trebuchet MS</option>
				<option <?php haku_selected('body_font', 'Verdana, Geneva, Tahoma, sans-serif'); ?> value='Verdana, Geneva, Tahoma, sans-serif'>Verdana</option>
			</select>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Font Size', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Slider -->
			<div class="haku_slider" data-min="12" data-max="16" data-step="1"></div>
			<span class="haku_slider_tip"><?php echo get_theme_option('body_font_size'); ?> pixels</span>
			
			<!-- Real input -->
			<input type="text" class="hidden" name="body_font_size" value="<?php echo esc_attr( get_theme_option('body_font_size') ); ?>" />
			
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('Direct Styling', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('CSS Code', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Textarea -->
			<textarea placeholder="h1 { font-size: <?php echo rand( 1, 100 ); ?>px; }" name="css_code"><?php echo esc_textarea( get_theme_option('css_code') ); ?></textarea>
			
			<!-- Option desc -->
			<p><?php _e('You can paste here any CSS code and it will be automatically applied to the theme.', 'haku'); ?></p>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
</div>
<!-- end: Tab -->

<!-- Tab -->
<div class="section haku_options" data-tab="<?php _e('Extras', 'haku'); ?>">
	
	<!-- Options header -->
	<h1><?php _e('Exclude Categories', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Exclude', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Haku multiple select box -->
			<select multiple data-placeholder="<?php echo esc_attr( __('Choose a category', 'haku') ); ?>" name="exclude_category[]" class="chzn-select">
				<?php foreach ( haku_list_categories() as $name => $id ) : ?>
				<option <?php haku_multiple_selected( 'exclude_category', $id ); ?> value="<?php echo esc_attr( $id ); ?>"><?php echo esc_attr( $name ); ?></option>
				<?php endforeach; ?>
			</select>
			
			<!-- Option desc -->
			<p><?php printf( __('The selected categories will be excluded from every single section of your awesome website (%s).', 'haku'), get_bloginfo('name') ); ?></p>
			
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('Responses', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Page Comments', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Checkbox -->
			<a href="#" class="haku_checkbox"></a>
			
			<!-- Real input -->
			<input <?php haku_checked('page_responses'); ?> name="page_responses" type="checkbox" value="page_responses" />
			
			<!-- Option desc -->
			<p><?php _e('Check this to enable comments and trackbacks on pages.', 'haku'); ?></p>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Trackbacks', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Checkbox -->
			<a href="#" class="haku_checkbox"></a>
			
			<!-- Real input -->
			<input <?php haku_checked('trackbacks'); ?> name="trackbacks" type="checkbox" value="trackbacks" />
			
			<!-- Option desc -->
			<p><?php _e('Check this to enable trackbacks.', 'haku'); ?></p>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('WordPress', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Login Logo', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Button -->						
			<button class="haku_image_upload"><?php _e('Open Media Library', 'haku'); ?></button>
			
			<!-- Option desc -->
			<p><?php _e('Choose your image, then click "Insert into post" to apply it.', 'haku'); ?> <strong><?php _e('Max width:', 'haku'); ?></strong> 300</p>
			
			<!-- Real input -->
			<input type="text" placeholder="http://" class="haku_image_upload_field <?php haku_hidden('wp_login_logo'); ?>" name="wp_login_logo" value="<?php echo esc_url( get_theme_option('wp_login_logo') ); ?>" />
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('Mobile', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Viewport', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Slider -->
			<div class="haku_slider" data-min="950" data-max="1500" data-step="10"></div>
			<span class="haku_slider_tip"><?php echo get_theme_option('viewport'); ?> pixels</span>
			
			<!-- Real input -->
			<input type="text" class="hidden" name="viewport" value="<?php echo esc_attr( get_theme_option('viewport') ); ?>" />
			
			<!-- Option desc -->
			<p><?php _e('The initial view size on mobile devices. (Experimental)', 'haku'); ?></p>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	<!-- Options header -->
	<h1><?php _e('Theme Updates', 'haku'); ?></h1>
	
	<!-- Option group -->
	<div class="haku_optgroup clearfix">
		
		<!-- Option info -->
		<div class="aside">
		
			<!-- Label -->
			<label><?php _e('Check for updates', 'haku'); ?></label>
			
		</div>
		<!-- end: Option info -->
		
		<!-- Option -->
		<div>
			
			<!-- Checkbox -->
			<a href="#" class="haku_checkbox"></a>
			
			<!-- Real input -->
			<input <?php haku_checked('theme_update'); ?> name="theme_update" type="checkbox" value="theme_update" />
			
			<!-- Option desc -->
			<p><?php printf( __('Check this if you want to be notified when a new update for %s is available.', 'haku'), get_haku_var('theme_name') ); ?></p>
		
		</div>
		<!-- end: Option -->
							
	</div>
	<!-- end: Option group -->
	
	</form>
	<!-- end: Form -->
	
</div>
<!-- end: Tab -->

<!-- Tab -->
<div class="section haku_slides haku_manager" data-tab="<?php _e('Slides', 'haku'); ?>">
	
	<!-- Options header -->
	<h1><?php _e('Home Slides', 'haku'); ?></h1>
	
	<!-- Slides container -->
	<div id="haku_slides_container"></div>
	
	<!-- Add button -->
	<a href="#" id="haku_add_slide" class="haku_button"><?php _e('Add New Slide', 'haku'); ?></a>
	
</div>
<!-- end: Tab -->

<!-- Tab -->
<div class="section haku_sidebars haku_manager" data-tab="<?php _e('Sidebars', 'haku'); ?>">
	
	<!-- Options header -->
	<h1><?php _e('Custom Sidebars', 'haku'); ?></h1>
	
	<!-- Slides container -->
	<div id="haku_sidebars_container"></div>
	
	<!-- Add button -->
	<a href="#" id="haku_add_sidebar" class="haku_button"><?php _e('Add New Sidebar', 'haku'); ?></a>
	
</div>
<!-- end: Tab -->