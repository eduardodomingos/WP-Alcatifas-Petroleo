<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Alcatifas_Petróleo
 */

?>

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


