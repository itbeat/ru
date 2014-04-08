<!-- #home_blog_search_div -->
<form action="<?php echo home_url('/'); ?>" class="retro_search" method="get">
	<fieldset class="retro_search_div">
		<input type="text" name="s" class="text" placeholder="<?php echo esc_attr( __('Search', 'haku') ); ?>" value="<?php the_search_query(); ?>" />
		<input type="submit" name="submit" class="submit" value="" />
	</fieldset>
</form>
<!-- end div #home_blog_search_div -->