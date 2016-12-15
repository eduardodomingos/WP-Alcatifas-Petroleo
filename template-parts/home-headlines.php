<?php if (!empty($headlines)) : ?>

    <div class="uk-slidenav-position tm-headlines" data-uk-slideshow>
        <ul class="uk-slideshow uk-slideshow-fullscreen uk-overlay-active">
            <?php foreach( $headlines as $key => $headline ): ?>
                <li>
                    <?php if( get_field( 'large_photo', $headline ) ): ?>
                        <?php $photo = get_field( 'large_photo', $headline ); ?>
                        <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>">
                    <?php endif; ?>

                    <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                        <div>
                            <h3 class="tm-headlines__title"><?php the_field('homepage_title', $headline); ?></h3>
                            <?php if( get_field( 'price', $headline ) ): ?>
                                <span class="tm-headlines__text uk-text-bottom uk-margin-right">
                                    <?php the_field('price', $headline); ?>
                                        <?php if( get_field( 'price_unit', $headline ) ): ?>
                                        <?php switch( get_field( 'price_unit', $headline ) ):
                                            case 'area': ?>
                                                €/m<sup>2</sup></span>
                                            <?php break;?>
                                            <?php case 'length': ?>
                                                €/m.</span>
                                                <?php break;?>
                                            <?php case 'unit': ?>
                                                €/unid.</span>
                                            <?php break;?>
                                        <?php endswitch;?>
                                    <?php endif; ?>
                            <?php endif; ?>
                            <a href="<?php the_permalink( $headline->ID); ?>" class="uk-button tm-button-hollow">Ver</a>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
        <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
        <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
            <?php foreach( $headlines as $key => $headline ): ?>
                <li data-uk-slideshow-item="<?php echo $key; ?>"><a href=""></a></li>
            <?php endforeach; ?>
        </ul>
    </div>

<?php endif; ?>