<!-- Metabox container -->
<div class="haku_metabox">
	
	<!-- Input text metabox -->
	<div class="haku_metabox_group">
		
		<!-- Info column -->
		<div class="aside">

			<label><?php _e('Content Url', 'haku'); ?></label>

		</div>
		<!-- end: Info column -->
		
		<!-- Input column -->
		<div class="section">

			<?php $mb->the_field('url'); ?>
			
			<?php $placeholder = ( isset( $_GET['post'] ) && has_post_thumbnail( $_GET['post'] ) ? get_thumb_src( $_GET['post'], 'full' ) : 'http://' ); ?>
			
			<input type="text" placeholder="<?php echo $placeholder; ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
			
			<span><?php _e('You can enter a Youtube, Vimeo, Audio (.mp3), Image or Website url.', 'haku'); ?></span>
			
		</div>
		<!-- end: Input column -->
		
		<!-- Local usage -->
		<?php $url = $mb->get_the_value(); ?>

	</div>
	<!-- end: Input text metabox -->
	
	<?php if ( $url && haku_get_url_type( $url ) == 'page' ) : ?>
	
	<!-- Checkbox metabox -->
	<div class="haku_metabox_group">
		
		<!-- Info column -->
		<div class="aside">

			<label><?php _e('Open In New Tab', 'haku'); ?></label>

		</div>
		<!-- end: Info column -->
		
		<!-- Input column -->
		<div class="section">

			<?php $mb->the_field('new_tab'); ?>

			<input type="checkbox" name="<?php $mb->the_name(); ?>" value="new_tab" <?php $mb->the_checkbox_state('new_tab'); ?>/>

		</div>
		<!-- end: Input column -->
		
	</div>
	<!-- end: Checkbox metabox -->
	
	<?php endif; ?>
	
</div>
<!-- end: Metabox container -->