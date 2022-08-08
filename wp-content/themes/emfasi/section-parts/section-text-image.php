<?php 
    $description = get_sub_field('description');
    $description_2 = get_sub_field('description_2');
    $anchor_form = get_sub_field('anchor_form');
    $image_desktop = get_sub_field('image_desktop');
    $image_mobile = get_sub_field('image_mobile');
?>
 

<div class="section__text-image">
    <div class="container">
        <div class="cont__left">
            <?php if( !empty( $description ) ): ?>
                <div class="cont__description">
                    <?php echo $description;?>
                </div>
            <?php endif; ?>

            <?php 
            // check for rows (parent repeater)
            if( have_rows('more_information') ): ?>
            <div class="cont__more-information">
                <?php 

                // loop through rows (parent repeater)
                while( have_rows('more_information') ): the_row(); ?>
                    <div class="cont__inner">
                        <?php 
                            $more_info_title = get_sub_field('title');
                            $more_info_description = get_sub_field('description');
                        ?>

                        <?php if( !empty( $more_info_title ) ): ?> 
                            <div class="cont__more-info-title">
                                <?php echo $more_info_title;?>
                            </div>
                        <?php endif; ?> 

                        <?php if( !empty( $more_info_description ) ): ?>
                            <div class="cont__more-info-overlay">
                                <div class="cont__more-info-description cont--overlay">
                                    <div class="cont--close"><i class="icon icon-font-icon-icn-close"></i></div>
                                    <div class="cont--info">
                                        <div class="cont--body">
                                            <?php echo $more_info_description;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>	
                <?php endwhile; // while( has_sub_field('columns') ): ?>
            </div>
            <?php endif; // if( get_field('columns') ): ?>

            <?php if( !empty( $image_desktop ) ): ?>
                <img class="image-mobile" src="<?php echo esc_url($image_desktop['url']); ?>" alt="<?php echo esc_attr($image_desktop['alt']); ?>" width="335px" />
            <?php endif; ?>

            <?php if( !empty( $description_2 ) ): ?>
                <div class="cont__description cont__description--2">
                    <?php echo $description_2;?>
                    <a href="#form" class="btn button"> <?php echo $anchor_form; ?></a>                   
                </div>
            <?php endif; ?>
        </div><!-- cont__left -->
    </div> <!-- container -->

    <div class="cont__right">
        <div class="cont__image">
            <?php if( !empty( $image_desktop ) ): ?>
                <img src="<?php echo esc_url($image_desktop['url']); ?>" alt="<?php echo esc_attr($image_desktop['alt']); ?>" />
            <?php endif; ?>
        </div>
    </div>        
    
</div> <!-- section -->