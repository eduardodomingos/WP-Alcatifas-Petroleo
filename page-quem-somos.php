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
		<ul class="uk-breadcrumb uk-margin-top uk-margin-bottom-remove">
			<li><a href="index.html">Início</a></li>
			<li class="uk-active uk-text-capitalize"><span><?php the_title(); ?></span></li>
		</ul>
		<?php if( get_field('page_title') ): ?>
			<h1 class="uk-margin-large-bottom"><?php echo get_field('page_title'); ?></h1>
		<?php endif; ?>
		<div class="uk-grid uk-grid-width-large-1-2" data-uk-grid-margin>
			<div>
				<?php  the_post_thumbnail( 'large', array( 'class' => 'uk-border-rounded', 'title' => get_the_title() ) ); ?>
			</div>
			<div>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>


<div class="uk-block tm-block-light">
	<div class="uk-container uk-container-center">
		<div class="uk-grid uk-grid-large uk-grid-width-large-1-4" data-uk-grid-margin>
			<?php
			if( have_rows('panel') ):
				while ( have_rows('panel') ) : the_row(); ?>
					<div class="uk-panel uk-text-center">
						<i class="<?php the_sub_field('icon_class');?> uk-icon-medium uk-margin-bottom"></i>
						<h3 class="uk-panel-title"><?php the_sub_field('title'); ?></h3>
						<p><?php the_sub_field('text'); ?></p>
					</div>
				<?php endwhile;
			endif; ?>
		</div>
	</div>
</div>

<?php

get_footer();
