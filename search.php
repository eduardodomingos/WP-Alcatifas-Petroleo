<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Alcatifas_Petróleo
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>
		<div class="uk-block uk-block-default uk-padding-top-remove">
			<div class="uk-container uk-container-center">
				<p class="uk-h1 tm-margin-medium-top uk-margin-large-bottom"><?php printf( esc_html__( 'Resultados da pesquisa: %s', 'ap' ), '<span>' . get_search_query() . '</span>' ); ?></p>
				<?php $i = 1; ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if( $i !== 1 ): ?>
						<hr class="uk-grid-divider">
					<?php endif; ?>
					<div class="uk-grid" data-uk-grid-margin="">
						<div class="uk-width-medium-1-3">
							<?php $first_photo = get_field('photos')[0]['photo']; ?>
							<img src="<?php echo $first_photo['url'] ?>" alt="<?php echo $first_photo['alt'] ?>" class="uk-border-rounded">
						</div>
						<div class="uk-width-medium-2-3">
							<?php the_title( sprintf( '<h1 class="uk-h2"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
							<p><?php the_field('teaser'); ?></p>
						</div>
					</div>
					<?php ++$i; endwhile; ?>
			</div>
		</div>
	<?php else: ?>
	<div class="uk-block uk-block-default">
		<div class="uk-container uk-container-center uk-text-center">
			<div class="uk-width-medium-1-2 uk-container-center">
				<form role="search" method="get" action="<?php echo home_url( '/' ); ?>" class="uk-form">
					<div class="uk-form-icon uk-width-1-1">
						<i class="uk-icon-search"></i>
						<input type="search" placeholder="Pesquisar" class="uk-width-1-1" value="<?php echo get_search_query() ?>" name="s">
					</div>
				</form>
				<p>Não foram encontrados resultados para a sua pesquisa.</p>
			</div>
		</div>
	</div>

	<?php endif; ?>

<?php
get_footer();
