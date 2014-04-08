<li <?php post_class(); ?> id="post_<?php the_ID(); ?>">
		
	<?php if ( has_post_thumbnail() ) get_template_part( 'post', get_post_format() ); ?>
			
	<div class="blog_section_post <?php if ( ! has_post_thumbnail() ) echo 'full_width'; ?>">
		
		<span class="post_title">
			<a title="<?php printf( esc_attr__('Permalink to %s', 'haku'), the_title_attribute('echo=0') ); ?>" href="<?php the_permalink(); ?>" rel="bookmark"><?php echo retro_filter( get_the_title() ? get_the_title() : get_the_time('F j') ); ?></a>
		</span>
		
		<div class="clr"></div>
		
		<h4><?php _e('AUTHOR:', 'haku'); ?> <?php the_author_posts_link(); ?> // <?php _e('CATEGORY:', 'haku'); ?> <?php the_category(', '); ?></h4>
		
		<span class="post_comments"><?php comments_popup_link( __('No Comments', 'haku') , __('1 Comment', 'haku') , __('% Comments', 'haku'), '', '' ); ?></span>
		
		<div class="clr"></div>
		
	</div>

	<label class="date"><?php echo retro_filter( get_the_time('j') ); ?><br />
	<?php echo retro_filter( get_the_time('M') ); ?></label>
	
	<div class="post_content">
			
		<?php the_content(); ?>
	
	</div>
	
	<div class="clr"></div>
		
</li>