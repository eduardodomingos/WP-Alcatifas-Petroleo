<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Alcatifas_Petróleo
 */

get_header(); ?>

	<div class="uk-block uk-block-default uk-padding-top-remove">
		<div class="uk-container uk-container-center">
			<ul class="uk-breadcrumb uk-margin-top uk-margin-bottom">
				<li><a href="index.html">Início</a></li>
				<li class="uk-active"><span>Portfolio</span></li>
			</ul>
			<div class="uk-grid uk-grid-width-medium-1-3" data-uk-grid-margin>
				<?php $latest_portfolio = ap_get_latest_posts('portfolio'); ?>

				<?php while( $latest_portfolio->have_posts() ) : $latest_portfolio->the_post() ?>
					<?php
						$first_photo = get_field('photos', $item)[0]['photo'];
					?>
					<div>
						<figure class="uk-overlay uk-overlay-hover">
							<img class="uk-border-rounded" src="<?php echo $first_photo['url'] ?>" alt="<?php echo $first_photo['alt'] ?>">
							<figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
								<div>
									<h3><?php the_title(); ?></h3>
									<p><i class="uk-icon-map-marker"></i> <?php the_field('location') ?></p>
									<a href="<?php the_permalink(); ?>" class="uk-button uk-button-large tm-button-ghost">Ver projeto</a>
								</div>
							</figcaption>
						</figure>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>

<?php
get_footer();
