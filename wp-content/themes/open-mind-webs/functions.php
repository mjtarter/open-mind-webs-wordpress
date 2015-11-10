<?php

function register_theme_menus() {
	register_nav_menus(
		array(
			'primary-menu' => _('Primary Menu')
		)
	);
}
add_action('init', 'register_theme_menus');

function omw_theme_styles() {
	wp_enqueue_style('font_awesome_css', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('slicknav_css', get_template_directory_uri() . '/css/slicknav.css');
	wp_enqueue_style('global_css', get_template_directory_uri() . '/css/global.css');
	wp_enqueue_style('custom_css', get_template_directory_uri() . '/css/custom.css');
}
add_action('wp_enqueue_scripts', 'omw_theme_styles');

function omw_theme_js() {
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
	wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', '', '', true);
	wp_enqueue_script('slicknav_js', get_template_directory_uri() . '/js/jquery.slicknav.min.js', '', '', true);
}
add_action('wp_enqueue_scripts', 'omw_theme_js');

//Set template_directory_uri path for use with image files in main_js
function set_js_var() {
       $translation_array = array( 'template_directory_uri' => get_template_directory_uri());
       wp_localize_script( 'main_js', 'my_data', $translation_array );
  } 
add_action('wp_enqueue_scripts','set_js_var');  

//Add Excerpt option for custom fields
function custom_field_excerpt() {
    global $post;
    $text = get_field('description');
    if ( '' != $text ) {
        $text = strip_shortcodes( $text );
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>', $text);
        $excerpt_length = 40; // 40 words
        $excerpt_more = apply_filters('excerpt_more', '...<a href="'. get_permalink($post->ID) . '">&raquo;More</a>');
        $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
    }
    return apply_filters('the_excerpt', $text);
}

?>