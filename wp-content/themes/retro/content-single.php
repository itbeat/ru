<?php 
/****************************/
/*   Single view content    */
$media = meta_obtain( 'url', '_retro_format_standard', $post->ID );
?>

<div id="blog_section_listing">

	<ul>
	
		<li <?php post_class(); ?> id="post_<?php the_ID(); ?>">
		
			<?php if ( has_post_thumbnail() ) get_template_part( 'post', get_post_format() ); ?>
					
			<div class="blog_section_post <?php if ( ! has_post_thumbnail() ) echo 'full_width'; ?>">

				<h4><?php _e('AUTHOR:', 'haku'); ?> <?php the_author_posts_link(); ?> // <?php _e('CATEGORY:', 'haku'); ?> <?php the_category(', '); ?></h4>
				
				<span class="post_comments"><?php comments_popup_link( __('No Comments', 'haku') , __('1 Comment', 'haku') , __('% Comments', 'haku'), '', '' ); ?></span>
				
				<div class="clr"></div>
				
			</div>
		
			<label class="date"><?php echo retro_filter( get_the_time('j') ); ?><br />
			<?php echo retro_filter( get_the_time('M') ); ?></label>
			
			<div class="post_content">
			
				<?php the_content(); ?>
			
			</div>
				
		</li>
		
	</ul>

	<div class="clr"></div>
	
	<?php if ( haku_get_url_type( $media ) == 'audio' ) : ?>
		
	<!-- Audio player -->
	<div class="ajs-retro">
		<audio src="<?php echo esc_url( $media ); ?>" preload="none" controls />
	</div>
	<!-- end: Audio player -->
	
	<?php endif; ?>
		
</div><!-- end div #blog_section_listing -->

<!-- Post comments -->
<section id="comments" class="blog_comments">

	<?php comments_template( '', true ); ?>
	
</section>
<!-- end: Post comments -->