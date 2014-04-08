<div id="home_section" class="wrapper section" data-section="home">

	<div id="home_top_botm_bg">
	
		<div class="section_inn">
			
			<?php if ( get_theme_option('home_banner') || get_theme_option('home_ribbon_text') ) : ?>
			
			<div id="home_top_logos">
				
				<?php if ( get_theme_option('home_banner') ) : ?>
				
				<div id="site_title">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_option('home_banner'); ?>" alt="" /></a>
				</div>
				
				<?php endif; ?>
				
				<?php if ( get_theme_option('home_ribbon_text') ) : ?>
				
				<div id="site_ribbon"><?php echo retro_filter( get_theme_option('home_ribbon_text') ); ?></div>
				
				<?php endif; ?>
				
				<div class="clr"></div>
				
			</div>
			
			<?php endif; ?>
			
			<?php if ( get_theme_option('home_slider') ) : ?>
			
			<div id="home_slider_outer">
			
				<div class="slider-wrapper loading">
				
					<div id="slider" class="nivoSlider <?php if ( ! get_theme_option('slider_captions') ) echo 'no_captions'; ?>">
					
						<?php foreach ( get_theme_slides('theme_slides') as $slide_id => $slide ) : ?>
							
						<!-- Slide -->
					
						<?php if ( $slide['url'] ) : ?>
					
						<a href="<?php echo esc_url( $slide['url'] ); ?>">
					
						<?php endif; ?>
					
						<img src="<?php echo haku_get_custom_thumbnail( esc_url( $slide['picture'] ), ( get_theme_option('slider_captions') ? 'retro_slider' : 'retro_slider_no_captions' ) ); ?>" title="<?php if ( get_theme_option('slider_captions') ) echo '#caption_' . $slide_id; ?>" id="slide_<?php echo $slide_id; ?>" alt="" />
						
						<?php if ( $slide['url'] ) : ?>
					
						</a>
					
						<?php endif; ?>
						
						<!-- end: Slide -->
						
						<?php endforeach; ?>
						
					</div><!-- end div #slider -->
					
				</div><!-- end div .slider-wrapper theme-default -->
				
				<?php if ( get_theme_option('slider_captions') ) : ?>
					
				<?php foreach ( get_theme_slides('theme_slides') as $slide_id => $slide ) : ?>
				
				<!-- Caption -->
				<div id="<?php echo 'caption_' . $slide_id; ?>" class="nivo-html-caption">
				
					<h3><?php echo retro_filter( stripslashes( $slide['caption'] ) ); ?></h3>
					<p><?php echo stripslashes( $slide['description'] ); ?></p>
					
					<?php if ( $slide['url'] && isset( $slide['more'] ) ) : ?>
					
					<div class="more_button"> <a href="<?php echo esc_url( $slide['url'] ); ?>" target="_blank">&nbsp;</a> </div>
					
					<?php endif; ?>
					
				</div><!-- end div #home_slider_bottom_1 -->
				
				<?php endforeach; ?>
				
				<?php endif; ?>
									
				<div class="clr"></div>
				
			</div><!-- end div #home_slider_outer -->
			
			<?php endif; ?>
			
			<div class="clr"></div>
			
		</div><!-- end div .section_inn -->
		
		<?php if ( get_theme_option('home_welcome_headline') || get_theme_option('home_welcome_subline') ) : ?>
		
		<div id="hello_welcome">
		
			<h2><?php echo retro_filter( get_theme_option('home_welcome_headline') ); ?></h2>
			
			<br />
			
			<h3><?php echo retro_filter( get_theme_option('home_welcome_subline') ); ?></h3>
			
			<div class="clr"></div>
			
		</div><!-- end div #hello_welcome -->
		
		<?php endif; ?>
		
		<div class="clr"></div>
		
	</div><!-- end div #home_top_botm_bg -->
	<div class="clr"></div>
	
</div>