<?php get_header(); ?>

<!-- BEGIN BLOG POST SECTION -->
<div class="wrapper">

	<div id="single">
		
		<div class="section_inn">
		
			<?php if ( get_theme_option('top') ) : ?>
			
			<a class="go_top" href="<?php echo home_url(); ?>"></a>
			
			<?php endif; ?>
							
			<div id="blog_section_content">
			
				<div id="blog_section_content_left">
				
					<?php get_template_part('not-found'); ?>
					
				</div><!-- end div #blog_section_content_left -->
				
				<?php get_sidebar(); ?>
								
			</div><!-- end div #blog_section_content -->
			
			<div class="clr"></div>
			
		</div><!-- end div .section_inn -->
		
		<div class="clr"></div>
		
	</div><!-- end div #blog -->
	
	<div class="clr"></div>
	
</div>
<!-- END BLOG POST SECTION -->

<?php get_footer(); ?>