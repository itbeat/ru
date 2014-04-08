<?php
/***********************/
/*   Columns classes   */
$col_number = 0;

if ( get_theme_option('about_col_1_show') ) {
	$col_number++;
}

if ( get_theme_option('about_col_2_show') ) {
	$col_number++;
}

if ( get_theme_option('about_col_3_show') ) {
	$col_number++;
}

if ( get_theme_option('about_col_4_show') ) {
	$col_number++;
}

$col_total = $col_number;
$col_class = 'col_' . $col_total;
$col_number = 0;
?>

<div id="about_section" class="section" data-section="<?php echo sanitize_title( get_theme_option('about_label') ); ?>">
		
	<div id="about_section_botm_bg">
	
		<div class="section_inn">
			
			<?php if ( get_theme_option('top') ) : ?>
			
			<a class="go_top" href="#home_section"></a>
			
			<?php endif; ?>
			
			<?php if ( get_theme_option('about_label') || get_theme_option('about_intro') ) : ?>
			
			<div id="home_about_desc">
			
				<div id="home_about_desc_left">
				
					<h3 class="section_label"><?php echo retro_filter( get_theme_option('about_label') ); ?></h3>
										
				</div><!-- end div #home_about_desc_left -->
				
				<div id="home_about_desc_right">
					
					<?php if ( get_theme_option('about_intro_picture') ) : ?>
					<img src="<?php echo get_theme_option('about_intro_picture' ); ?>" class="picture" alt="" />
					<?php endif; ?>
					
					<p><?php echo get_theme_option('about_intro'); ?></p>
					
					<div class="clr"></div>
					
				</div><!-- end div #home_about_desc_right -->
				
				<div class="clr"></div>
				
			</div>
			<!-- end div #home_about_desc -->
			
			<?php endif; ?>
			
			<div id="home_about_listing">
				
				<ul>
					
					<?php if ( get_theme_option('about_col_1_show') ) : ?>
					
					<?php $col_number++; if ( $col_number == $col_total ) $col_class .= ' last_col'; ?>
					
					<!-- Column 1 -->
					<li class="<?php echo $col_class; ?>">
						
						<!-- Column headline -->
						<h2><?php echo retro_filter( get_theme_option('about_col_1_headline') ); ?></h2>
						
						<!-- Column subline -->
						<h3><?php echo retro_filter( get_theme_option('about_col_1_subline') ); ?></h3>
						
						<!-- Column icon -->
						<img src="<?php echo ( get_theme_option('about_col_1_icon_custom') ? esc_url( get_theme_option('about_col_1_icon_custom') ) : get_stylesheet_directory_uri() . '/images/symbols/ico_' . get_theme_option('about_col_1_icon') . '.png' ); ?>" alt="" />
						
						<!-- Column content -->
						<div class="about_listing_txt">
							<?php echo apply_filters( 'haku_content', get_theme_option('about_col_1') ); ?>
						</div>
						
					</li>
					<!-- end: Column 1 -->
					
					<?php endif; ?>
					
					<?php if ( get_theme_option('about_col_2_show') ) : ?>
					
					<?php $col_number++; if ( $col_number == $col_total ) $col_class .= ' last_col'; ?>
					
					<!-- Column 2 -->
					<li class="<?php echo $col_class; ?>">
						
						<!-- Column headline -->
						<h2><?php echo retro_filter( get_theme_option('about_col_2_headline') ); ?></h2>
						
						<!-- Column subline -->
						<h3><?php echo retro_filter( get_theme_option('about_col_2_subline') ); ?></h3>
						
						<!-- Column icon -->
						<img src="<?php echo ( get_theme_option('about_col_2_icon_custom') ? esc_url( get_theme_option('about_col_2_icon_custom') ) : get_stylesheet_directory_uri() . '/images/symbols/ico_' . get_theme_option('about_col_2_icon') . '.png' ); ?>" alt="" />
						
						<!-- Column content -->
						<div class="about_listing_txt">
							<?php echo apply_filters( 'haku_content', get_theme_option('about_col_2') ); ?>
						</div>
						
					</li>
					<!-- end: Column 2 -->
					
					<?php endif; ?>
					
					<?php if ( get_theme_option('about_col_3_show') ) : ?>
					
					<?php $col_number++; if ( $col_number == $col_total ) $col_class .= ' last_col'; ?>
					
					<!-- Column 3 -->
					<li class="<?php echo $col_class; ?>">
					
						<!-- Column headline -->
						<h2><?php echo retro_filter( get_theme_option('about_col_3_headline') ); ?></h2>
						
						<!-- Column subline -->
						<h3><?php echo retro_filter( get_theme_option('about_col_3_subline') ); ?></h3>
						
						<!-- Column icon -->
						<img src="<?php echo ( get_theme_option('about_col_3_icon_custom') ? esc_url( get_theme_option('about_col_3_icon_custom') ) : get_stylesheet_directory_uri() . '/images/symbols/ico_' . get_theme_option('about_col_3_icon') . '.png' ); ?>" alt="" />
						
						<!-- Column content -->
						<div class="about_listing_txt">
							<?php echo apply_filters( 'haku_content', get_theme_option('about_col_3') ); ?>
						</div>
						
					</li>
					<!-- end: Column 3 -->
					
					<?php endif; ?>
					
					<?php if ( get_theme_option('about_col_4_show') ) : ?>
					
					<?php $col_number++; if ( $col_number == $col_total ) $col_class .= ' last_col'; ?>
					
					<!-- Column 4 -->
					<li class="<?php echo $col_class; ?>">
					
						<!-- Column headline -->
						<h2><?php echo retro_filter( get_theme_option('about_col_4_headline') ); ?></h2>
						
						<!-- Column subline -->
						<h3><?php echo retro_filter( get_theme_option('about_col_4_subline') ); ?></h3>
						
						<!-- Column icon -->
						<img src="<?php echo ( get_theme_option('about_col_4_icon_custom') ? esc_url( get_theme_option('about_col_4_icon_custom') ) : get_stylesheet_directory_uri() . '/images/symbols/ico_' . get_theme_option('about_col_4_icon') . '.png' ); ?>" alt="" />
						
						<!-- Column content -->
						<div class="about_listing_txt">
							<?php echo apply_filters( 'haku_content', get_theme_option('about_col_4') ); ?>
						</div>
						
					</li>
					<!-- end: Column 4 -->
					
					<?php endif; ?>
					
				</ul>
				
				<div class="clr"></div>
				
			</div><!-- end div #home_about_listing -->
			
			<?php if ( get_theme_option('about_custom') ) : ?>
						
			<div class="section_custom_content">
			
			<?php echo apply_filters( 'haku_content', get_theme_option('about_custom') ); ?>
			
			</div><!-- end div .section_custom_content -->
			
			<div class="clr"></div>
			
			<?php endif; ?>
			
		</div><!-- end div .section_inn -->
		
		<div class="clr"></div>
		
	</div><!-- end div #about_section_botm_bg -->
	
	<div class="clr"></div>
	
</div>