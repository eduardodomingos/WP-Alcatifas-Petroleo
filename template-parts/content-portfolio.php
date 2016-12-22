<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Alcatifas_Petróleo
 */

?>
<div class="uk-block uk-block-default uk-padding-top-remove">
    <div class="uk-container uk-container-center">
        <ul class="uk-breadcrumb uk-margin-top uk-margin-bottom">
            <li><a href="index.html">Início</a></li>
            <li class="uk-active"><span>Portfolio</span></li>
        </ul>

        <?php the_title( '<h1>', '</h1>' ); ?>
        <p class="uk-h3"><i class="uk-icon-map-marker uk-text-primary"></i> <?php the_field('location') ?></p>

        <div class="uk-grid">
            <div class="uk-width-medium-1-2 uk-width-large-2-3">
            <div data-uk-slideshow>
                <div class="uk-slidenav-position">
                    <ul class="uk-slideshow">
                        <?php if( have_rows('photos') ): ?>
                        <?php while ( have_rows('photos') ) : the_row(); ?>
                                <?php
                                    $photo = get_sub_field('photo');
                                    $photo_url = $photo['url'];
                                    $photo_alt = $photo['alt'];
                                ?>
                                <li><img src="<?php echo $photo_url; ?>" alt="<?php echo $photo_alt; ?>"></li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                </div>
                <ul class="uk-thumbnav uk-margin-top">
                    <?php if( have_rows('photos') ): ?>
                        <?php $i = 0; ?>
                        <?php while ( have_rows('photos') ) : the_row(); ?>
                            <?php
                            $photo = get_sub_field('photo');
                            $photo_url = $photo['sizes']['thumbnail'];
                            $photo_alt = $photo['alt'];
                            ?>
                            <li data-uk-slideshow-item="<?php echo $i; ?>"><a href=""><img src="<?php echo $photo_url; ?>" width="80" height="80" alt="<?php echo $photo_alt; ?>"></a></li>

                        <?php
                            $i++;
                            endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
            <div class="uk-width-medium-1-2 uk-width-large-1-3">
                <div class="uk-panel uk-panel-divider">
                    <?php the_content(); ?>
                </div>
                <?php if( have_rows('highlights') ): ?>
                <div class="uk-panel uk-panel-divider">
                    <p>Do resultado final destaca-se:</p>
                    <ul class="uk-list uk-list-space tm-checklist">
                        <?php while ( have_rows('highlights') ) : the_row(); ?>
                            <li><?php the_sub_field('highlight') ?></li>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <?php ap_entry_footer(); ?>
    </div>
</div>

<?php $related = get_field('related'); ?>
<?php if( $related ): ?>
    <div class="uk-block tm-block-light">
        <div class="uk-container uk-container-center">
            <h2 class="tm-block__title tm-block__title--simple"><span>Trabalhos</span> Relacionados</h2>
            <div class="uk-grid uk-grid-width-large-1-4">
                <?php foreach( $related as $r ): ?>
                    <?php $first_photo = get_field('photos', $r->ID )[0]['photo'];?>
                    <div>
                        <a class="uk-panel uk-panel-box uk-panel-hover" href="<?php echo get_permalink( $r->ID ); ?>">
                            <div class="uk-panel-teaser">
                                <img src="<?php echo $first_photo['url'] ?>" alt="<?php echo $first_photo['alt'] ?>">
                            </div>
                            <h3 class="uk-panel-title"><?php echo get_the_title( $r->ID ); ?></h3>
                            <p><?php the_field('teaser', $p->ID); ?></p>
                        </a>
                    </div>
                <?php endforeach; ?>
                <!--<div>
                    <a class="uk-panel uk-panel-box uk-panel-hover" href="product.html">
                        <div class="uk-panel-teaser">
                            <img src="storage/catalog-02.jpg" alt="Catalog 02">
                        </div>
                        <h3 class="uk-panel-title">Quartz</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </a>
                </div>
                <div>
                    <a class="uk-panel uk-panel-box uk-panel-hover" href="product.html">
                        <div class="uk-panel-teaser">
                            <img src="storage/catalog-03.jpg" alt="Catalog 03">
                        </div>
                        <h3 class="uk-panel-title">Pluto</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </a>
                </div>
                <div>
                    <a class="uk-panel uk-panel-box uk-panel-hover" href="product.html">
                        <div class="uk-panel-teaser">
                            <img src="storage/catalog-01.jpg" alt="Catalog 01">
                        </div>
                        <h3 class="uk-panel-title">Venus</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </a>
                </div>-->
            </div>
        </div>
    </div>
<?php endif; ?>
