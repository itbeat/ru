<?php get_header(); ?>

<!-- BEGIN BLOG POST SECTION -->
<div class="wrapper">

	<div id="single">
			
		<div class="section_inn">
		
			<?php if ( get_theme_option('top') ) : ?>
			
			<a class="go_top" href="<?php echo home_url(); ?>/#<?php echo sanitize_title( get_theme_option('blog_label') ); ?>"></a>
			
			<?php endif; ?>
			
			<h1 id="section_title"><?php echo retro_filter( single_post_title( '', false ) ); ?></h1>
			
			<div id="blog_section_content">
			
				<div id="blog_section_content_left">
				
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									
					<?php get_template_part( 'content', 'single' ); ?>
						
					<?php endwhile; endif; ?>
										
				</div><!-- end div #blog_section_content_left -->
				
				<?php get_sidebar(); ?>
				
				<div class="clr"></div>
				
			</div><!-- end div #blog_section_content -->
			
			<div class="clr"></div>
			
		</div><!-- end div .section_inn -->
		
		<div class="clr"></div>
		
	</div><!-- end div #blog -->
	
	<div class="clr"></div>
	
</div>
<!-- END BLOG POST SECTION -->

<?php get_footer(); ?>