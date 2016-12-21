<?php
/**
 * Template part for displaying posts entries.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RM_Consulting
 */

if (!empty($portfolio)) : ?>

    <?php foreach( $portfolio as $key => $item ): ?>
        <?php
        $location = get_field('location', $item);
        $first_photo = get_field('photos', $item)[0]['photo'];
        ?>
        <div>
            <figure class="uk-overlay uk-overlay-hover">
                <img class="uk-border-rounded" src="<?php echo $first_photo['url'] ?>" alt="<?php echo $first_photo['alt'] ?>">
                <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                    <div>
                        <h3><?php echo get_the_title($item); ?></h3>
                        <p><i class="uk-icon-map-marker"></i> <?php echo $location; ?></p>
                        <a href="<?php the_permalink($item); ?>" class="uk-button uk-button-large tm-button-ghost">Ver projeto</a>
                    </div>
                </figcaption>
            </figure>
        </div>
    <?php endforeach; ?>

<?php endif; ?>