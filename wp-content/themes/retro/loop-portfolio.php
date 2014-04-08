<?php
/******************/
/*   Item count   */
global $count;

/**************************/
/*   Getting item metas   */
$meta = get_post_meta( $post->ID, '_retro_format_standard', true );

/***********************/
/*   Item attributes   */
$item = array(
	'filter' => haku_nice_classes( get_the_terms( $post->ID, 'portfolio_filter' ) ),
	'meta' => esc_url( meta_get( 'url', $meta ) ),
	'href' => esc_url( meta_get( 'url', $meta, get_thumb_src( $post->ID, 'full' ) ) ),
	'new_tab' => meta_get( 'new_tab', $meta ),
	'span_class' => 'icon_camera',
	'class' => array('item_li'),
	'is_quote' => ( get_post_format() == 'quote' ? true : false ),
	'is_audio' => ( get_post_format() == 'audio' ? true : false )
);

/***********************/
/*   Item span class   */
if ( haku_get_url_type( $item['href'] ) == 'youtube' || haku_get_url_type( $item['href'] ) == 'vimeo' ) {
	$item['span_class'] = 'icon_video';
}
elseif ( haku_get_url_type( $item['href'] ) != 'image') {
	$item['span_class'] = 'icon_link';
}

if ( $item['is_quote'] ) {
	$item['href'] = '#' . sanitize_title( get_the_title() );
	$item['span_class'] = 'icon_text';
}

if ( $item['is_audio'] ) {
	$item['href'] = '#' . sanitize_title( get_the_title() );
	$item['span_class'] = 'icon_audio';
}

/******************/
/*   Item class   */
if ( $count >= 4 ) {
	$item['class'][] = 'last_li';
	$count = 0;
}

/********************************************/
/*   Converting classes to a nice string    */
$item['class'] = haku_nice_classes( $item['class'], true );
?>

<!-- Portfolio item -->
<li data-category="<?php echo esc_attr( $item['filter'] ); ?>" class="<?php echo $item['class']; ?>" id="portfolio_item_<?php the_ID(); ?>">
	
	<a href="<?php echo $item['href']; ?>" title="<?php echo esc_attr( get_the_title() ); ?>" <?php if ( $item['new_tab'] ) echo 'target="_blank"'; ?>>
		
		<?php if ( has_post_thumbnail() ) the_post_thumbnail( 'post-thumbnail', array('title' => '') ); ?>
		
		<span class="<?php echo $item['span_class']; ?>"></span>
		
		<p><?php the_title(); ?></p>
		
	</a>
	
	<?php if ( $item['is_quote'] ) : ?>
	
	<!-- Text item -->
	<div id="<?php echo sanitize_title( get_the_title() ); ?>" class="quote" style="display: none;">
	
		<div class="title_quote"><?php echo retro_filter( get_the_title() ); ?></div>
		
		<?php if ( has_excerpt() ) : ?>
		
		<div class="subtitle_quote"><?php the_excerpt(); ?></div>
		
		<?php endif; ?>
		
		<div class="body_quote">
			
			<?php the_content(); ?>
			
		</div>
		
	</div>	
	<!-- end: Text item -->
	
	<?php endif; ?>
	
	<?php if ( $item['is_audio'] ) : ?>
	
	<!-- Audio item -->
	<div id="<?php echo sanitize_title( get_the_title() ); ?>" class="quote" style="display: none;">
	
		<div class="title_quote"><?php echo retro_filter( get_the_title() ); ?></div>
		
		<?php if ( has_excerpt() ) : ?>
		
		<div class="subtitle_quote"><?php the_excerpt(); ?></div>
		
		<?php endif; ?>
		
		<div class="body_quote">
			
			<?php the_content(); ?>
			
			<div class="clr"></div>
			
			<!-- Audio player -->
			<div class="ajs-retro">
				<audio src="<?php echo $item['meta']; ?>" preload="none" controls />
			</div>
			<!-- end: Audio player -->
			
		</div>
		
	</div>	
	<!-- end: Audio item -->
	
	<?php endif; ?>
	
</li>
<!-- end: Portfolio item -->