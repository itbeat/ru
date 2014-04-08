<?php
/*
 *  Haku Framework
 *  Handcrafted by Stefano Giliberti
 */

function haku_include_widget( $widgets ) {
	$widgets = explode( ',', $widgets );
	foreach ( $widgets as $widget ) {
		require( get_includes_dir() . '/widget/' . $widget . '.php' );
	}
}

function haku_nice_date( $post_date, $precise = false ) {
	$current_time = current_time( 'timestamp', 0 );
	if ( ! $precise && date('d', $post_date ) == date('d', $current_time ) ) {
		$date = __('Today', 'haku');
	}
	elseif ( ! $precise && date('d', $post_date ) == date('d', $current_time ) - 1 ) {
		$date = __('Yesterday', 'haku');
	}
	elseif ( ! $precise && date('d', $post_date ) == date('d', $current_time ) - 4 ) {
		$date = date_i18n('F d', $post_date );
	}
	elseif ( ! $precise && date('y', $post_date ) < date('y', $current_time ) ) {
		$date = date_i18n('m/d/y', $post_date );
	}
	else {
		$date = sprintf( __('%s ago', 'haku'), human_time_diff( $post_date, $current_time ) );
	}
	return $date;
}

function haku_shorten( $text, $words_limit = 15, $hellip = '&hellip;' ) {
	if ( strlen( $text ) > 1 ) {
		$text = strip_tags( $text );
		$words = str_word_count( $text, 2 );
		if ( count( $words ) > $words_limit ) {
			$pos = array_keys( $words );
			$text = substr( $text, 0, $pos[ $words_limit ] ) . $hellip;
		}
	}
	return $text;
}

function haku_get_url_type( $url, $type = false ) {
	if ( preg_match( '/.(jpe?g|png|gif)$/', $url ) ) {
		$type = 'image';
	}
	elseif ( preg_match( '/youtube\.com\/watch\?v=[^&]+/', $url ) ) {
		$type = 'youtube';
	}
	elseif ( preg_match( '/vimeo\.com\/[0-9]+/i', $url ) ) {
		$type = 'vimeo';
	}
	elseif ( preg_match( '/.(webm|mp4|ogv)$/', $url ) ) {
		$type = 'video';
	}
	elseif ( preg_match( '/.(mp3)$/', $url ) ) {
		$type = 'audio';
	}
	else {
		$type = 'page';
	}
	return $type;
}

function haku_get_video_id( $url, $id = '' ) {
	if ( haku_get_url_type( $url ) == 'youtube' ) {
		$url = parse_str( parse_url( $url, PHP_URL_QUERY ) );
		$id = $v;
	}
	else if ( haku_get_url_type( $url ) == 'vimeo' ) {
		preg_match( '/vimeo\.com\/([0-9]{1,10})/', $url, $id );
		$id = $id[1];
	}
	return $id;
}

function haku_nice_classes( $array, $not_object = false, $output = '' ) {
	if ( is_array( $array ) ) {
		foreach ( $array as $item ) {
			$output .= ( $not_object ? $item : $item->slug ) . ' ';
		}
		$output = trim( $output );
		return $output;
	}
}

function haku_get_excerpt( $post_id, $shorten = 10 ) {
	global $wpdb;
	$excerpt = $wpdb->get_results( $wpdb->prepare("SELECT post_excerpt FROM $wpdb->posts WHERE ID = $post_id LIMIT 1", $post_id ), ARRAY_A );
	$excerpt = $excerpt[0]['post_excerpt'];
	$excerpt = haku_shorten( $excerpt, $shorten );
	return $excerpt;
}

function get_thumb_src( $post_id, $size, $post = true ) {
	$post_id = ( $post ? get_post_thumbnail_id( $post_id ) : $post_id );
	$src = wp_get_attachment_image_src( $post_id, $size );
	return $src[0];
}

function meta_get( $offset, $array, $callback = false ) {
	$meta = ( isset( $array[ $offset ] ) ? $array[ $offset ] : ( $callback ? $callback : false ) );
	return $meta;
}

function meta_obtain( $value, $key, $post_id  ) {
	$meta = get_post_meta( $post_id, $key, true );
	$meta = meta_get($value, $meta);
	return $meta;
}

function is_wp_edit() {
	global $pagenow;
	return ( $pagenow == 'post.php' || $pagenow == 'post-new.php' ? true : false );
}

function autop_clear( $content ) {
	// http://bit.ly/ng8sNL
    $content = str_replace( '<p>', '', $content );
    $content = str_replace( '</p>', '', $content );
    $content = str_replace( '<br />', '', $content );
    return $content;
}

add_filter( 'autop_clear_filter', 'autop_clear' );

function autobr_clear( $content ) {
	$content = str_replace( '<br />', '', $content );
	return $content;
}

add_filter( 'autobr_clear_filter', 'autobr_clear' );

function get_current_author() {
	$author = get_userdata( get_query_var('author') );
	return $author->display_name;
}

function haku_get_page_template( $post_id ) {
	global $wpdb;
	$page_template = $wpdb->get_var( $wpdb->prepare("SELECT meta_value FROM $wpdb->postmeta WHERE post_id = %s AND meta_key = '_wp_page_template'", $post_id ) );
	return $page_template;
}

function get_page_id_by_single_post_title() {
	$id = get_page_by_title( single_post_title( '', false ) );
	return $id->ID;
}

function haku_list_categories( $list = array() ) {
	$categories = get_categories('orderby=name');
	foreach ( $categories as $category ) {
		$list[ $category->cat_name ] = $category->cat_ID;
	}
	return $list;
}

function get_includes_dir( $uri = false ) {
	global $haku;
	return ( $uri ? $haku['theme_includes_uri'] : $haku['theme_includes'] );
}

function get_theme_version() {
	$theme = ( function_exists('wp_get_theme') ? wp_get_theme() : get_theme_data( get_stylesheet_directory() . '/style.css' ) );
	return ( is_array( $theme ) ? $theme['Version'] : $theme->Version );
}

function get_haku_var( $var ) {
	global $haku;
	return $haku[ $var ];
}

function get_theme_defaults( $option ) {
	global $theme_defaults;
	return $theme_defaults[ $option ];
}

function get_theme_option( $key, $strip = true ) {
	$theme_option = get_option( get_haku_var('theme') );
	$option = ( is_array( $theme_option ) ? ( isset( $theme_option[ $key ] ) ? $theme_option[ $key ] : false ) : ( get_theme_defaults( $key ) === true ? $key : get_theme_defaults( $key ) ) );
	return ( $strip ? stripslashes( $option ) : $option );
}

function haku_get_font_name( $option ) {
	$font = explode( ':', $option );
	$font = str_replace( '+', ' ', $font[0] );
	return $font;
}

function haku_checked( $option ) {
	echo ( get_theme_option( $option ) == $option ? 'checked="checked"' : '' );
}

function haku_selected( $option, $key ) {
	echo ( get_theme_option( $option ) == $key ? 'selected="selected"' : '' );
}

function haku_multiple_selected( $option, $key ) {
	echo ( is_array( get_theme_option( $option, false ) ) && in_array( $key, get_theme_option( $option, false ), true ) ? 'selected="selected"' : '' );
}

function haku_hidden( $option, $theme_option = true ) {
	echo ( ! ( $theme_option ? get_theme_option( $option ) : $option ) ? 'hidden' : '' );
}

function haku_format_exclude_categories( $option, $string = '-' ) {
	$option = get_theme_option( $option, false );
	$option = ( is_array( $option ) ? implode( ','. $string, $option ) : false );
	$string .= $option;
	return ( $option ? $string : null );
}

function get_theme_slides( $option ) {
	$slides = get_option( get_haku_var( $option ) );
	return ( $slides ? $slides : array() );
}

function haku_get_custom_thumbnail( $url, $size ) {
	global $wpdb;
	$thumbnail = $wpdb->get_var( $wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid = '%s'", $url ) );
	$thumbnail = wp_get_attachment_image_src( $thumbnail, $size );
	return $thumbnail[0];
}

function haku_get_user() {
	$user = wp_get_current_user();
	return $user->display_name;
}

function haku_get_user_email() {
	$user = wp_get_current_user();
	return $user->user_email;
}

function haku_error( $code ) {
	return sprintf( get_haku_var('str_error'), $code );
}

function array_equal( $a, $b ) {
	// http://bit.ly/nimCxX
    if ( count( $a ) !== count( $b ) ) {
        return false;
    }
    foreach ( $a as $val ) {
        $key = array_search( $val, $b );
        if ( $key === false ) {
            return false;
        }
        unset( $b[ $key ] );
    }
    return true;
}

function array_reorder( &$array, $key ) {
	// http://bit.ly/nyxZ76
    $sorter_array = array();
    $sorted_array = array();
    reset( $array );
    foreach ( $array as $w => $b ) {
        $sorter_array[ $w ] = $b[ $key ];
    }
    asort( $sorter_array );
    foreach ( $sorter_array as $w => $b ) {
        $sorted_array[ $w ] = $array[ $w ];
    }
    $array = $sorted_array;
}

function haku_filter_get_archives( $where, $cat ) {
	// Based on a Rob Schlüter script
	global $wpdb;
	if ( get_bloginfo('version') < 2.3 ) {
		$where .= " AND $wpdb->posts.ID IN (SELECT DISTINCT ID FROM $wpdb->posts JOIN $wpdb->post2cat post2cat ON post2cat.post_id=ID";
		$where .= " AND post2cat.category_id NOT IN ($cat)";
		$where .= ")";
	}
	else {
		$where .= ' AND ' . $wpdb->prefix . 'posts.ID IN (SELECT DISTINCT ID FROM ' . $wpdb->prefix . 'posts';
		$where .= ' JOIN ' . $wpdb->prefix . 'term_relationships term_relationships ON term_relationships.object_id = ' . $wpdb->prefix . 'posts.ID';
		$where .= ' JOIN ' . $wpdb->prefix . 'term_taxonomy term_taxonomy ON term_taxonomy.term_taxonomy_id = term_relationships.term_taxonomy_id';
		$where .= " WHERE term_taxonomy.taxonomy = 'category'";
		$where .= " AND term_taxonomy.term_id NOT IN ($cat)";
		$where .= ")";
	}
	return $where;
}

function haku_get_contents( $url, $content = null ) {
	if ( function_exists('curl_init') ) {
		$ch = curl_init( $url );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_HEADER, 0 );
		curl_setopt( $ch, CURLOPT_TIMEOUT, 10 );
		$content = curl_exec( $ch );
		curl_close( $ch );
	}
	else {
		$content = file_get_contents( $url );
	}
	return $content;
}

add_filter( 'haku_content', 'wptexturize' );
add_filter( 'haku_content', 'convert_smilies' );
add_filter( 'haku_content', 'convert_chars' );
add_filter( 'haku_content', 'wpautop' );
add_filter( 'haku_content', 'do_shortcode' );
add_filter( 'haku_content', 'shortcode_unautop' );
add_filter( 'haku_content', 'prepend_attachment' );
?>