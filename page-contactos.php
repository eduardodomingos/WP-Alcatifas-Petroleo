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
		<ul class="uk-breadcrumb uk-margin-top">
			<li><a href="/">Início</a></li>
			<li class="uk-active uk-text-capitalize"><span><?php the_title(); ?></span></li>
		</ul>
		
		<div class="tm-map uk-margin-large-bottom"></div>
		<?php
		$latitude = get_field( 'latitude', 'option' );
		$longitude = get_field( 'longitude', 'option' );
		$markup.= '<script>';
		$markup.= 'var coords = {"lat":'. $latitude .',"long": '. $longitude .'}';
		$markup.= '</script>';
		echo $markup;
		?>

		<div class="uk-grid" data-uk-grid-margin="">
			<div class="uk-width-medium-1-2">
				<div class="uk-width-medium-4-5">
					<h2>Contacte-nos</h2>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
					<ul class="uk-list uk-list-space">
						<li><strong>Alcatifas Petróleo</strong><br>
							<?php the_field( 'street', 'option' ); ?><br>
							<?php the_field( 'postal_code', 'option' );?> <?php the_field( 'city', 'option' ); ?></li>
						<li>Telefone: <a href="tel:+351<?php echo str_replace(' ', '', get_field('phone', 'option')) ?>"><?php the_field( 'phone', 'option' ); ?></a><br>
							Fax: <?php the_field( 'fax', 'option' ); ?><br>
							Email: <?php the_field( 'email', 'option' ); ?>
						</li>
						<li><?php the_field( 'working_hours', 'option' ); ?></li>
					</ul>
				</div>
			</div>
			<div class="uk-width-medium-1-2">
				<h2>Deixe-nos a sua mensagem</h2>
				<form class="uk-form" action="">
					<div class="uk-grid" data-uk-grid-margin="">
						<div class="uk-width-medium-1-2">
							<input class="uk-width-1-1" type="text" placeholder="O seu nome">
						</div>
						<div class="uk-width-medium-1-2">
							<input class="uk-width-1-1" type="text" placeholder="O seu email">
						</div>
					</div>
					<div class="uk-grid">
						<div class="uk-width-1-1">
							<textarea class="uk-width-1-1" name="" id="" cols="30" rows="10" placeholder="A sua mensagem"></textarea>
						</div>
					</div>
					<div class="uk-grid">
						<div class="uk-width-1-1">
							<button type="button" class="uk-button uk-button-primary uk-button-large">Enviar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php

get_footer();
