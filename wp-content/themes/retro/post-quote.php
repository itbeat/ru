<?php 
/****************************/
/*   Post format: Quote     */
$href = meta_obtain( 'url', '_retro_format_standard', $post->ID );
$href = ( $href ? $href : get_thumb_src( $post->ID, 'full' ) );
?>

<div class="blog_section_pic">
	
	<a href="<?php echo '#' . sanitize_title( get_the_title() ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>">
	
		<?php the_post_thumbnail('post-thumbnail', array('title' => '') ); ?>
		
		<span class="icon_text"></span>
		
		<p><?php echo ( has_excerpt() ? get_the_excerpt() : get_the_time('F j') ); ?></p>
	
	</a>

</div>

<!-- Text item -->
<div id="<?php echo sanitize_title( get_the_title() ); ?>" class="quote" style="display: none;">

	<div class="title_quote"><?php the_title(); ?></div>
	
	<?php if ( has_excerpt() ) : ?>
	
	<div class="subtitle_quote"><?php the_excerpt(); ?></div>
	
	<?php endif; ?>
	
	<div class="body_quote post_content">
		
		<?php the_content(); ?>
		
	</div>
	
</div>	
<!-- end: Text item -->