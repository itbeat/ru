<?php
/******************/
/*   Item count   */
global $count;
$count = 0;

/***************/
/*   Filters   */
if ( get_theme_option('portfolio_filtering') ) {
	$terms = get_terms('portfolio_filter');
}

/****************/
/*   WP query   */
$retro_portfolio_query = array(
	'post_type' => 'portfolio',
	'posts_per_page' => get_theme_option('portfolio_items'),
	'orderby' => get_theme_option('portfolio_orderby'),
	'order' => get_theme_option('portfolio_order')
);

$retro_portfolio_query = new WP_Query( $retro_portfolio_query );
?>

<div id="portfolio_section" class="section" data-section="<?php echo sanitize_title( get_theme_option('portfolio_label') ); ?>">

	<div id="portfolio_section_botm_bg">
	
		<div class="section_inn">
			
			<?php if ( get_theme_option('top') ) : ?>
			
			<a class="go_top" href="#home_section"></a>
			
			<?php endif; ?>
			
			<?php if ( get_theme_option('portfolio_label') || get_theme_option('portfolio_intro') ) : ?>
			
			<div id="portfolio_section_desc">
			
				<div id="portfolio_section_desc_left">
				
					<h3 class="section_label"><?php echo retro_filter( get_theme_option('portfolio_label') ); ?></h3>
										
				</div><!-- end div #portfolio_section_desc_left -->
				
				<div id="portfolio_section_desc_right">
				
					<p><?php echo get_theme_option('portfolio_intro'); ?></p>
					
					<div class="clr"></div>
					
				</div><!-- end div #portfolio_section_desc_right -->
				
				<div class="clr"></div>
				
			</div>
			<!-- end div #portfolio_section_desc -->
			
			<?php endif; ?>
						
			<?php if ( isset( $terms ) ) : ?>
			
			<div id="filter_menu">
			
				<label><?php echo retro_filter( get_theme_option('portfolio_filter_label') ); ?></label>
				
				<ul>
				
					<li><a href="#" data-category="all"><?php _e('all', 'haku'); ?></a></li>
					
					<?php if ( is_array( $terms ) ) : foreach ( $terms as $filter ) : ?>
					
					<li><a href="#" data-category="<?php echo $filter->slug; ?>"><?php echo $filter->name; ?></a></li>
					
					<?php endforeach; endif; ?>
					
				</ul>
				<!-- end: Tag list -->
				
				<div class="clr"></div>
				
			</div><!-- end div #filter_menu-->
						
			<?php endif; ?>
			
			<div id="portfolio_listing">
				
				<?php if ( $retro_portfolio_query->have_posts() ) : ?>
								
				<ul>
				
					<?php while ( $retro_portfolio_query->have_posts() ) : ?>
					
					<?php $retro_portfolio_query->the_post(); ?>

					<?php $count++; ?>
						
					<?php get_template_part( 'loop', 'portfolio' ); ?>
					
					<?php endwhile; ?>
			
				</ul>
				
				<?php endif; ?>
				
				<div class="clr"></div>
				
			</div><!-- end div #portfolio_listing -->
			
			<div class="clr"></div>
			
		</div><!-- end div .section_inn -->
		
		<div class="clr"></div>
		
	</div><!-- end div #portfolio_section_botm_bg -->
	
	<div class="clr"></div>
	
</div><!-- end div #portfolio_section -->

<?php wp_reset_postdata(); ?>
