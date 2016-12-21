<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Alcatifas_Petróleo
 */

get_header(); ?>

<div class="uk-block uk-block-default uk-padding-top-remove">
	<div class="uk-container uk-container-center">
		<ul class="uk-breadcrumb uk-margin-top uk-margin-bottom">
			<li><a href="/">Início</a></li>
			<li><a href="/catalogo">Catálogo</a></li>
			<li class="uk-active"><span><?php echo get_category_parents( $cat, false, ' ' ); ?></span></li>
		</ul>
		<div class="uk-grid uk-grid-large uk-grid-width-medium-1-2 uk-grid-width-large-1-3 uk-grid-match" data-uk-grid-margin>
		<?php  if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php $first_photo = get_field('photos')[0]['photo']; ?>
				<div>
					<a class="uk-panel uk-panel-box uk-panel-hover uk-text-center" href="<?php the_permalink(); ?>">
						<div class="uk-panel-teaser">
							<img src="<?php echo $first_photo['url']; ?>" alt="<?php echo $first_photo['alt']; ?>">
						</div>
						<?php the_title( '<h2>', '</h2>' ); ?>
						<p><?php the_field('teaser'); ?></p>
					</a>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</div>

<?php
get_footer();
