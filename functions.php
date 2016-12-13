<?php
/**
 * Alcatifas Petróleo functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Alcatifas_Petróleo
 */

/**
 * Add ACF Options.
 */
require get_template_directory() . '/inc/acf.php';

/**
 * Add theme support.
 */
require get_template_directory() . '/inc/theme-support.php';

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ap_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ap_content_width', 1200 );
}
add_action( 'after_setup_theme', 'ap_content_width', 0 );


/**
 * Add theme widgets.
 */
require get_template_directory() . '/inc/theme-widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue-scripts.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Theme Hooks.
 */
require get_template_directory() . '/inc/hooks.php';
