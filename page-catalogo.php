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
				<li><a href="/">Início</a></li>
				<li class="uk-active"><span>Catálogo</span></li>
			</ul>

			<ul class="uk-subnav uk-flex uk-flex-center uk-margin-large-bottom tm-subnav-catalog" data-uk-switcher="{connect:'#my-id', animation: 'fade'}">
				<?php
					$categories = get_terms(
						'category',
						array('parent' => 0)
					);
					$i = 0;
				?>
				<?php foreach ($categories as $category): ?>
					<li <?php echo ($i == 0) ? 'class="uk-active"' : ''; ?>><a href="#"><?php echo $category->name ?></a></li>
					<?php $i++; ?>
				<?php endforeach; ?>
			</ul>
			<ul id="my-id" class="uk-switcher">
				
				<?php foreach ($categories as $category): ?>
					<li>
						<div class="uk-grid uk-grid-large uk-grid-width-medium-1-2 uk-grid-width-large-1-3" data-uk-grid-margin>
						<?php
						$args = array('parent' => $category->term_id);
						$sub_categories = get_categories( $args );
						?>
						<?php foreach ($sub_categories as $sub_category): ?>
							
							<div>
								<a class="uk-panel uk-panel-box uk-panel-hover uk-text-center" href="<?php echo get_category_link( $sub_category->term_id ) ?>">
									<div class="uk-panel-teaser">
										<?php
											$photo = get_field('photo', 'category_'.$sub_category->term_id );
										?>
										<img src="<?php echo $photo['url'] ?>" alt="<?php $photo['alt'] ?>">
									</div>
									<h3 class="uk-panel-title"><?php echo $sub_category->name; ?></h3>
									<p><?php echo $sub_category->description; ?></p>
								</a>
							</div>
						<?php endforeach; ?>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>




<?php
get_footer();
