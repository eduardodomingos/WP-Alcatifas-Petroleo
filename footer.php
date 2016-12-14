<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alcatifas_Petróleo
 */

?>

<footer class="tm-footer">
    <div class="uk-block uk-block-secondary uk-contrast">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-grid-width-medium-1-4" data-uk-grid-margin>
                <div class="uk-panel">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="uk-display-block uk-margin-bottom" rel="home">
                        <img src="<?php echo get_template_directory_uri() . '/assets/build/img/logo-offcanvas.png' ?>" alt="<?php bloginfo( 'name' ); ?> logo">
                    </a>
                    <?php
                    if( have_rows('social', 'option') ):
                        while ( have_rows('social', 'option') ) : the_row();
                            echo '<a href="'. get_sub_field('url') .'" class="uk-icon-button '. get_sub_field('icon_class') .' uk-margin-right"></a>';
                        endwhile;
                    endif;
                    ?>
                    <a href="#" class="uk-icon-button uk-icon-search" data-uk-offcanvas="{target:'#offcanvas-search'}"></a>
                </div>
                <div class="uk-panel">
                    <h4 class="uk-panel-title">Secções</h4>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container'=> false, 'menu_id' => 'primary-menu', 'menu_class' => 'uk-list uk-list-space' ) ); ?>
                </div>
                <div class="uk-panel">
                    <h4 class="uk-panel-title">Clientes</h4>
                    <ul class="uk-list uk-list-space">
                        <?php wp_list_categories(array('title_li'=> '')); ?>
                    </ul>
                </div>
                <div class="uk-panel">
                    <h4 class="uk-panel-title">Contacte-nos</h4>
                    <ul class="uk-list uk-list-space">
                        <li><?php the_field( 'street', 'option' ); ?><br>
                            <?php the_field( 'postal_code', 'option' ); ?> <?php the_field( 'city', 'option' ); ?></li>
                        <li>Telefone: <a href="tel:+351<?php echo str_replace(' ', '', get_field('phone', 'option')) ?>"><?php the_field( 'phone', 'option' ); ?></a><br>
                            Fax: <?php the_field( 'fax', 'option' ); ?><br>
                            Email: <?php the_field( 'email', 'option' ); ?>
                        </li>
                        <li><?php the_field( 'working_hours', 'option' ); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <a href="#top" class="tm-footer__to-top" data-uk-smooth-scroll=""><i class="uk-icon-arrow-up"></i></a>
    <p class="uk-text-center uk-text-small uk-text-muted tm-footer__legal">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> - Todos os direitos reservados</p>
    <p class="tm-sr-only">Theme developed by <a href="http://www.eduardodomingos.com/" rel="designer">Eduardo Domingos</a>.</p>
</footer>

<div id="offcanvas" class="uk-offcanvas">
    <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
        <div class="uk-panel uk-text-center">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="uk-display-block" rel="home">
                <img src="<?php echo get_template_directory_uri() . '/assets/build/img/logo-offcanvas.png' ?>" class="uk-responsive-height" alt="<?php bloginfo( 'name' ); ?> logo">
            </a>
        </div>
        <form class="uk-search" data-uk-search>
            <input class="uk-search-field" type="search" placeholder="Pesquisar">
        </form>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container'=> false, 'menu_id' => 'primary-menu', 'menu_class' => 'uk-nav uk-nav-offcanvas' ) ); ?>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
