<?php 
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
?>

<div class="section__opinions">
    <div class="container">

        <div class="cont__header">
            <?php if( !empty( $title ) ): ?> 
                <div class="cont__title">
                    <?php echo $title;?>
                </div>
            <?php endif; ?>
            <?php if( !empty( $subtitle ) ): ?> 
            <div class="cont__subtitle">
                <?php echo $subtitle;?>
            </div>
            <?php endif; ?>
        </div>

        <?php 
        // check for rows (parent repeater)
        if( have_rows('opinions') ): ?>
            <div class="cont__opinions owl-carousel">
            <?php 

            // loop through rows (parent repeater)
            $counter = 0;
            while( have_rows('opinions') ): the_row(); ?>
                <div class="cont__opinion">
                    <?php 
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $teaser = get_sub_field('teaser');
                        $more_info = get_sub_field('more_info');
                        $counter = $counter + 1;
                    ?>

                    <?php if( !empty( $icon ) ): ?>        
                        <div class="cont__icon">
                            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                        </div>
                    <?php endif; ?>
                    
                    <?php if( !empty( $title ) ): ?> 
                        <div class="cont__title">
                            <?php echo $title;?>
                        </div>
                    <?php endif; ?>
                    <?php if( !empty( $teaser ) ): ?> 
                    <div class="cont__teaser">
                        <?php echo $teaser;?>
                    </div>
                    <?php endif; ?>

                    <div class="cont__view-more" id="click-<?php echo $counter ?>">
                        <?php _e('View more','emfasi'); ?>
                    </div>

                </div>	

            <?php endwhile; // while( has_sub_field('opinions') ): ?>
            </div>

            <div class="cont__opinions-items">
            <?php 

            // loop through rows (parent repeater)
            $counter = 0;
            while( have_rows('opinions') ): the_row(); ?>
                <?php 
                    $more_info = get_sub_field('more_info');
                    $counter = $counter + 1;
                    ?>                

                <?php if( !empty( $more_info ) ): ?> 
                    <div class="cont__more-info-overlay" id="option-<?php echo $counter ?>">
                        <div class="cont__more-info-description cont--overlay">
                            <div class="cont--close"><i class="icon icon-font-icon-icn-close"></i></div>
                            <div class="cont--info">
                                <div class="cont--body">
                                    <?php echo $more_info;?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            <?php endwhile; // while( has_sub_field('opinions') ): ?>
            </div>
        <?php endif; // if( get_field('opinions') ): ?>
    </div> <!-- container -->
</div> <!-- section -->
