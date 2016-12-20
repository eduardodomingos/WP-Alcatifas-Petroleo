<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Alcatifas_Petróleo
 */

get_header(); ?>

	<div class="uk-block uk-block-default uk-padding-top-remove">
		<div class="uk-container uk-container-center">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'portfolio' );

			endwhile; // End of the loop.
			?>

		</div>
	</div>

<?php
get_footer();
