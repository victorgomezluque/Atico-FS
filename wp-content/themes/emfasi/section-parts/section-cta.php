<div class="section__cta">
    <a href="#form" class="cont__link">
        <div class="container">
            <div class="cont__cta">
                <?php 
                // loop through rows (parent repeater)
                while( have_rows('cta') ): the_row(); ?>
                    <div class="cont__inner">
                        <?php 
                            $cta_title = get_sub_field('title');
                            $cta_text = get_sub_field('text');
                        ?>

                        <div class="cont__inner-text">
                            <?php if( !empty( $cta_title ) ): ?> 
                            <div class="cont__cta_title">
                                <?php echo $cta_title;?>
                            </div>
                            <?php endif; ?>

                            <?php if( !empty( $cta_text ) ): ?>
                            <div class="cont__cta_text">
                                <?php echo $cta_text;?>
                            </div>
                            <?php endif; ?>
                        </div>                        

                        <div class="cont__cat-view-more">
                            <?php _e('Solicitar ayuda','emfasi'); ?><span class="cont__arrow"></span>
                        </div>
                    </div>	
                <?php endwhile; // while( has_sub_field('columns') ): ?>
            </div>
        </div> <!-- container -->
    </a>
</div> <!-- section -->

