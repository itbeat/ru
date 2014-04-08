<?php get_header(); ?>

<!-- BEGIN BLOG POST SECTION -->
<div class="wrapper">

	<div id="single">
	
		<div class="section_inn">
		
			<?php if ( get_theme_option('top') ) : ?>
			
			<a class="go_top" href="<?php echo home_url(); ?>/#<?php echo sanitize_title( get_theme_option('blog_label') ); ?>"></a>
			
			<?php endif; ?>
			
			<?php if ( is_day() ) : ?>
			
				<h1><?php echo retro_filter( the_date() ); ?></h1>
				
			<?php elseif ( is_month() ) : ?>
			
				<h1><?php echo retro_filter( get_the_date('F Y') ); ?></h1>
				
			<?php elseif ( is_year() ) : ?>
			
				<h1><?php echo retro_filter( get_the_date('Y') ); ?></h1>
				
			<?php elseif ( is_author() ) : ?>
				
				<?php $author = ( get_query_var('author_name') ? get_userdatabylogin( get_query_var('author_name') ) : get_userdata( get_query_var('author') ) ); ?>
						
				<h1><?php echo retro_filter( sprintf( esc_attr__('Posts by %s', 'haku'), $author->display_name ) ); ?></h1>
			
			<?php elseif ( is_category() ) : ?>
				
				<h1><?php echo retro_filter( get_cat_name( get_query_var('cat') ) ); ?></h1>
				
			<?php else : ?>
			
				<h1><?php echo retro_filter( __('Blog Archives', 'haku') ); ?></h1>
				
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