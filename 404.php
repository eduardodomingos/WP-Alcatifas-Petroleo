<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Alcatifas_Petróleo
 */

get_header(); ?>

<div class="uk-block uk-block-default">
	<div class="uk-container uk-container-center uk-text-center">
		<div class="uk-width-medium-1-2 uk-container-center">
			<h1>404</h1>
			<p>A página que procura não foi encontrada.<br>Talvez uma pesquisa o ajude:</p>
			<form role="search" method="get" action="<?php echo home_url( '/' ); ?>" class="uk-form">
				<div class="uk-form-icon uk-width-1-1">
					<i class="uk-icon-search"></i>
					<input type="search" placeholder="Pesquisar" class="uk-width-1-1" value="<?php echo get_search_query() ?>" name="s">
				</div>
			</form>
		</div>
	</div>
</div>

<?php
get_footer();
