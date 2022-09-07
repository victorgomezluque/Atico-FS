<?php 
    $image_desktop = get_sub_field('image_desktop');
    $image_mobile = get_sub_field('image_mobile');
?>
 

<div class="section__image-100">
    <div class="container">
        <div class="cont__image">
            <?php if( !empty( $image_mobile ) ): ?>
                <img class="image_mobile" src="<?php echo esc_url($image_mobile['url']); ?>" alt="<?php echo esc_attr($image_mobile['alt']); ?>" />
            <?php endif; ?>
            <?php if( !empty( $image_desktop ) ): ?>
                <img class="image_desktop" src="<?php echo esc_url($image_desktop['url']); ?>" alt="<?php echo esc_attr($image_desktop['alt']); ?>" />
            <?php endif; ?>
        </div>
    </div> <!-- container -->      
    
</div> <!-- section -->