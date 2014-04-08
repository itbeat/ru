<?php 
/****************************/
/*   Post format: Audio     */
?>

<div class="blog_section_pic">
	
	<a title="<?php printf( esc_attr__('Permalink to %s', 'haku'), the_title_attribute('echo=0') ); ?>" href="<?php the_permalink(); ?>" rel="bookmark">
	
		<?php the_post_thumbnail('post-thumbnail', array('title' => '') ); ?>
		
		<span class="icon_audio"></span>
		
		<p><?php echo ( has_excerpt() ? get_the_excerpt() : get_the_time('F j') ); ?></p>
	
	</a>

</div>