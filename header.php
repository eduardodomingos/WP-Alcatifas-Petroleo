<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alcatifas_Petróleo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="top" class="tm-header">
	<div class="uk-block tm-block-tiny tm-block-light uk-hidden-small">
		<div class="uk-container uk-container-center">
			<div class="uk-flex uk-flex-space-between uk-flex-middle">
				<div>
					<a href="tel:+351<?php echo str_replace(' ', '', get_field('phone', 'option')) ?>" class="uk-link-muted uk-margin-large-right"><i class="uk-icon-phone"></i> <?php the_field( 'phone', 'option' ); ?></a>
					<i class="uk-icon-clock-o"></i> <?php the_field( 'working_hours', 'option' ); ?>
				</div>
				<div class="uk-contrast">
					<?php
					if( have_rows('social', 'option') ):
						while ( have_rows('social', 'option') ) : the_row();
							echo '<a href="'. get_sub_field('url') .'" class="uk-icon-button '. get_sub_field('icon_class') .' uk-margin-right" target="_blank"></a>';
						endwhile;
					endif;
					?>
					<a href="#" class="uk-icon-button uk-icon-search" data-uk-offcanvas="{target:'#offcanvas-search'}"></a>
				</div>
			</div>
		</div>
	</div>
	<nav class="uk-navbar" data-uk-sticky="{showup: true, animation: 'uk-animation-slide-top'}">
		<div class="uk-container uk-container-center">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="uk-navbar-brand" rel="home">
				<img class="uk-responsive-height" src="<?php echo get_template_directory_uri() . '/assets/build/img/logo.png' ?>" alt="<?php bloginfo( 'name' ); ?> logo">
			</a>
			<div class="uk-navbar-flip uk-visible-large">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container'=> false, 'menu_id' => 'primary-menu', 'menu_class' => 'uk-navbar-nav tm-navbar' ) ); ?>
			</div>
			<div class="uk-navbar-flip uk-hidden-large">
				<a class="uk-navbar-toggle" href="#offcanvas" data-uk-offcanvas></a>
			</div>
		</div>
	</nav>
</header>
