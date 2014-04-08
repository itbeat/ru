<?php 
/*******************************/
/*   Post format: Standard     */
$href = meta_obtain( 'url', '_retro_format_standard', $post->ID );
$href = ( $href ? $href : get_thumb_src( $post->ID, 'full' ) );
$new_tab = meta_obtain( 'new_tab', '_retro_format_standard', $post->ID );
$span_class = 'icon_camera';

if ( haku_get_url_type( $href ) == 'youtube' || haku_get_url_type( $href ) == 'vimeo' ) {
	$span_class = 'icon_video';
}
elseif ( haku_get_url_type( $href ) != 'image' ) {
	$span_class = 'icon_link';
}
?>

<div class="blog_section_pic">
	
	<a href="<?php echo esc_url( $href ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>" <?php if ( $new_tab ) echo 'target="_blank"'; ?>>
	
		<?php the_post_thumbnail('post-thumbnail', array('title' => '') ); ?>
		
		<span class="<?php echo $span_class; ?>"></span>
		
		<p><?php echo ( has_excerpt() ? get_the_excerpt() : get_the_time('F j') ); ?></p>
	
	</a>

</div>