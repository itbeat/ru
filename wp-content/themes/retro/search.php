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
				
					<div id="blog_section_listing">
					
						<ul>
						
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
											
							<?php get_template_part('loop'); ?>
								
							<?php endwhile; ?>
							
							<!-- Previous posts link -->
							<div class="pager fr">
								<?php previous_posts_link( __('Newer posts &rarr;', 'haku') ); ?>
							</div>
							
							<!-- Next posts link -->
							<div class="pager fl">
								<?php next_posts_link( __('&larr; Older posts', 'haku') ); ?>
							</div>
							
							<?php else : ?>
								
							<?php get_template_part('not-found'); ?>
				
							<?php endif; ?>
							
						</ul>
						
						<div class="clr"></div>
						
					</div><!-- end div #blog_section_listing -->
					
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