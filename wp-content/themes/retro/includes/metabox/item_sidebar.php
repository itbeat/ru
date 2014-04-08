<!-- Metabox container -->
<div class="haku_metabox">
		
	<!-- Select box metabox -->
	<div class="haku_metabox_group">
		
		<!-- Info column -->
		<div class="aside">

			<label><?php _e('Display:', 'haku'); ?></label>

		</div>
		<!-- end: Info column -->
		
		<!-- Input column -->
		<div class="section">

			<?php $mb->the_field('sidebar'); ?>

			<select name="<?php $mb->the_name(); ?>">
			
				<?php foreach ( $GLOBALS['wp_registered_sidebars'] as $sidebar ) : ?>
										
					<option value="<?php esc_attr_e( $sidebar['id'] ); ?>" <?php $mb->the_select_state( $sidebar['id'] ); ?>><?php echo $sidebar['name']; ?></option>
					
				<?php endforeach; ?>
				
			</select>

		</div>
		<!-- end: Input column -->
		
	</div>
	<!-- end: Select box metabox -->

</div>
<!-- end: Metabox container -->