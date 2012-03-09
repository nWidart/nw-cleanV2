<?php
/* ------------------------------------------------------------------------------------------------------------------------
 * nwclean functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * @package WordPress
 * @author Nicolas Widart
 */
if ( ! function_exists('nwclean_setup') ) :
	function nwclean_setup() {
		/*
		 * Add the main navigation menu
		 */
		if ( function_exists( 'register_nav_menu' ) ) {
			register_nav_menu( 'Main navigation menu', 'Main navigation menu' );
		}
		/*
		 * Adding expert capabilities
		 */
		add_post_type_support( 'page', 'excerpt' );
		/* 
		 * Localising wordpress
		 */
		$lang = TEMPLATEPATH . '/lang';
		load_theme_textdomain('nw-clean', $lang);
		/* 
		 * Adding support for post thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		/* 
		 * disabling adming bar
		 */
		show_admin_bar(false);
	}
endif;
/* ------------------------------------------------------------------------------------------------------------------------
 * Testing the localization
 */
// function test_localization( $locale ) {
// 	return "fr_FR";
// }
// add_filter('locale','test_localization');

/* ------------------------------------------------------------------------------------------------------------------------
 * Tell WordPress to run nwclean_setup() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'nwclean_setup' );

/* ------------------------------------------------------------------------------------------------------------------------
 * Add extra thumbnail support with defined sizes
 */
if ( function_exists('add_theme_support') ) {
	add_image_size('thumbnail1', 445, 320, true );
}

/* ------------------------------------------------------------------------------------------------------------------------
 * Setting up post formats
 */
add_theme_support( 'post-formats',
	array(
		'link',
		'quote',
	)
);
add_post_type_support( 'post', 'post-formats' );

/* ------------------------------------------------------------------------------------------------------------------------
 * Customize the length of the exerpt
 */
function new_excerpt_length($length) {
	return 100;
}
add_filter('excerpt_length', 'new_excerpt_length');

/* ------------------------------------------------------------------------------------------------------------------------
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
function twentyten_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'twentyten_page_menu_args' );


/** ------------------------------------------------------------------------------------------------------------------------
 * Register widgetized area and update sidebar with default widgets
 */
function nwclean_widgets_init() {
	// Area 1, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'First Footer Widget Area', 'nw-cleanv2' ),
		'id' => 'first-footer-widget-area',
		'description' => __( 'The first footer widget area', 'nw-cleanv2' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 2, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Second Footer Widget Area', 'nw-cleanv2' ),
		'id' => 'second-footer-widget-area',
		'description' => __( 'The second footer widget area', 'nw-cleanv2' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 3, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Third Footer Widget Area', 'nw-cleanv2' ),
		'id' => 'third-footer-widget-area',
		'description' => __( 'The third footer widget area', 'nw-cleanv2' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 4, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Language bar', 'nw-cleanv2' ),
		'id' => 'language-bar',
		'description' => __( 'The language bar', 'nw-cleanv2' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-lang-title">',
		'after_title' => '</h3>',
	) );
}
/** Register sidebars by running nwclean_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'nwclean_widgets_init' );

	
/* ------------------------------------------------------------------------------------------------------------------------
 * Limit the words for the words for the portfolio page
 */
function limit_words($string, $word_limit) {
	// creates an array of words from $string (this will be our excerpt)
	// explode divides the excerpt up by using a space character
	$words = explode(' ', $string);

	// this next bit chops the $words array and sticks it back together
	// starting at the first word '0' and ending at the $word_limit
	// the $word_limit which is passed in the function will be the number
	// of words we want to use
	// implode glues the chopped up array back together using a space character
	return implode(' ', array_slice($words, 0, $word_limit));
}

/** ------------------------------------------------------------------------------------------------------------------------
 * Theme Options
 *
 * @since nwclean 2.0
 */

if ( !function_exists( 'optionsframework_init' ) ) {

/*-----------------------------------------------------------------------------------*/
/* Options Framework Theme
/*-----------------------------------------------------------------------------------*/

/* Set the file path based on whether the Options Framework Theme is a parent theme or child theme */

if ( STYLESHEETPATH == TEMPLATEPATH ) {
	define('OPTIONS_FRAMEWORK_URL', TEMPLATEPATH . '/admin/');
	define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/admin/');
} else {
	define('OPTIONS_FRAMEWORK_URL', STYLESHEETPATH . '/admin/');
	define('OPTIONS_FRAMEWORK_DIRECTORY', get_stylesheet_directory_uri() . '/admin/');
}

require_once (OPTIONS_FRAMEWORK_URL . 'options-framework.php');

}

/* 
 * This is an example of how to add custom scripts to the options panel.
 * This one shows/hides the an option when a checkbox is clicked.
 */

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#example_showhidden').click(function() {
  		jQuery('#section-example_text_hidden').fadeToggle(400);
	});
	
	if (jQuery('#example_showhidden:checked').val() !== undefined) {
		jQuery('#section-example_text_hidden').show();
	}
	
});
</script>

<?php
}
/* ------------------------------------------------------------------------------------------------------------------------
 * Include shortcodes
 */
include('library/functions/shortcodes.php');


include_once 'metaboxes/setup.php';

include_once 'metaboxes/portfolio-spec.php';
 
// include_once 'metaboxes/full-spec.php';

// include_once 'metaboxes/checkbox-spec.php';

// include_once 'metaboxes/radio-spec.php';

// include_once 'metaboxes/select-spec.php';

/* eof */
