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
				<li class="uk-active"><span>Catálogo</span></li>
			</ul>

			<ul class="uk-subnav uk-flex uk-flex-center uk-margin-large-bottom tm-subnav-catalog" data-uk-switcher="{connect:'#my-id', animation: 'fade'}">
				<?php
					$categories = get_categories();
					$i = 0;
				?>
				<?php foreach ($categories as $category): ?>
					<li <?php echo ($i == 0) ? 'class="uk-active"' : ''; ?>><a href="#"><?php echo $category->name ?></a></li>
					<?php $i++; ?>
				<?php endforeach; ?>
			</ul>

		</div>
	</div>




<?php
get_footer();
