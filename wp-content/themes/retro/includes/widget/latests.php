<?php
/*
 *	Plugin Name: Retro Latest Articles
 *	Plugin URI: http://themes.opendept.net/retro-portfolio
 *	Version: 1.0
 *	Author: Pasquale Vitiello
 *	Author URI: pasqualevitiello@gmail.com
 */

/*
 *	Add function to widgets_init that'll load the widget
 */
add_action('widgets_init', 'retro_widget_latests');

/*
 *	Widget registering
 */
function retro_widget_latests() {
	register_widget('retro_latests');
}

/*
 *	Widget class
 */
class retro_latests extends WP_Widget {

	/*
	 *	Widget setup
	 */
	function retro_latests() {
	
		$widget_ops = array('classname' => 'retro_latest_articles', 'description' => '');
		
		$control_ops = array('width' => '', 'height' => '');

		$this->WP_Widget('retro_widget_latests', '(Retro) '.__('Latest Articles', 'haku'), $widget_ops, $control_ops);
		
	}
	
	/*
	 *	Widget update
	 */
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags( $new_instance['title'] );
		
		$total_posts = wp_count_posts();
				
		$instance['number'] = ( intval( $new_instance['number'] ) ? ( $new_instance['number'] > $total_posts->publish ? $total_posts->publish : $new_instance['number'] ) : $instance['number'] );
		
		$instance['orderby'] = $new_instance['orderby'];
		$instance['order'] = $new_instance['order'];
		
		return $instance;
	}
	
	/*
	 *	Displays the widget settings
	 */
	function form($instance) {

		/*
			Default settings
		*/
		$defaults = array('title' => __('Recent Articles', 'haku'), 'picture' => 'on', 'number' => 3, 'orderby' => 'date', 'order' => 'DESC');
		
		$instance = wp_parse_args((array) $instance, $defaults); ?>

		<!-- Widget Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'haku'); ?></label><br />
			<input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" class="widefat" style="width: 217px" />
		</p>
			
		<!-- Widget Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number:', 'haku'); ?></label><br />
			<input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" value="<?php echo $instance['number']; ?>" class="widefat" style="width: 217px" />
		</p>
		
		<!-- Widget Select Box -->
		<p>
			<label for="<?php echo $this->get_field_id('orderby'); ?>"><?php _e('Order by:', 'haku'); ?></label><br />
			<select id="<?php echo $this->get_field_id('orderby'); ?>" name="<?php echo $this->get_field_name('orderby'); ?>" class="widefat" style="width: 217px">
				<option <?php selected( $instance['orderby'], 'ID' ); ?> value="id">ID</option>
				<option <?php selected( $instance['orderby'], 'title' ); ?> value="title"><?php _e('Title', 'haku'); ?></option>
				<option <?php selected( $instance['orderby'], 'date' ); ?> value="date"><?php _e('Date', 'haku'); ?></option>
				<option <?php selected( $instance['orderby'], 'rand' ); ?> value="rand"><?php _e('Random', 'haku'); ?></option>
				<option <?php selected( $instance['orderby'], 'comment_count' ); ?> value="comment_count"><?php _e('Popular', 'haku'); ?></option>
			</select>
		</p>
		
		<!-- Widget Select Box -->
		<p>
			<label for="<?php echo $this->get_field_id('order'); ?>"><?php _e('Order:', 'haku'); ?></label><br />
			<select id="<?php echo $this->get_field_id('order'); ?>" name="<?php echo $this->get_field_name('order'); ?>" class="widefat" style="width: 217px">
				<option <?php selected( $instance['order'], 'ASC' ); ?> value="ASC"><?php _e('Ascending', 'haku'); ?></option>
				<option <?php selected( $instance['order'], 'DESC' ); ?> value="DESC"><?php _e('Descending', 'haku'); ?></option>
			</select>
		</p>

	<?php
	}
	
	/*
	 *	Widget display
	 */
	function widget($args, $instance) {
	
		extract($args);
		
		$title = $instance['title'];
		$number = $instance['number'];
		$orderby = $instance['orderby'];
		$order = $instance['order'];
		
		$nasc_latests_config = array(
			'posts_per_page' => $number,
			'orderby' => $orderby,
			'order' => $order,
			'post_status' => 'publish',
			'ignore_sticky_posts' => 1
		);
		
		$nasc_latests = new WP_Query( $nasc_latests_config );
		
		/*
			Before widget
		*/
		echo $before_widget;
		
		if ( $title ) {
			echo $before_title . retro_filter( $title ) . $after_title;
		}
		?>
		
		<!-- Latests widget -->
		
		<ul>
			
			<?php if ( $nasc_latests->have_posts() ) : while ( $nasc_latests->have_posts() ) : $nasc_latests->the_post(); ?>
			
			<!-- Article -->
			<li>
				<h4><a title="<?php printf( __('Permanent Link to %s', 'haku') , get_the_title()); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<span>
					<time datetime="<?php the_time( DATE_W3C ); ?>"><?php echo haku_nice_date( get_the_time('U') ); ?></time>, 
					<?php comments_popup_link( __('No Comments', 'haku') , __('1 Comment', 'haku') , __('% Comments', 'haku'), '', '' ); ?>
				</span>
			</li>
			<!-- end: Article -->
			
			<?php endwhile; endif; wp_reset_postdata();  ?>
						
		</ul>

		<!-- end: Latests widget -->
		
		<?php
		/*
			After widget
		*/
		echo $after_widget;
		
	}
	
}

?>