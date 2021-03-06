<?php
/**
 * The homepage template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Alcatifas_Petróleo
 */

get_header(); ?>


<?php
ap_get_headlines();

// Homepage widgets
dynamic_sidebar('ap-homepage-sections');

?>

<?php
get_footer();

