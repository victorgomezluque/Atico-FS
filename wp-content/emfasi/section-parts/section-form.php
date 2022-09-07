<?php 
    $text = get_sub_field('text');
    $form_id = get_sub_field('form');
?>

<div class="section__form" id="form">
    <div class="container">
        <div class="cont__left">
            <div class="cont__text">
                <?php echo $text; ?>
            </div>
            <div class="cont__info">
                <?php echo do_shortcode('[content_block slug=emfasi-info]') ?>
            </div>
        </div>
        <div class="cont__right">
            <div class="cont__form">
                <?php echo do_shortcode('[contact-form-7 id="'. $form_id .'"]'); ?>
            </div>
        </div>
    </div> <!-- container -->
</div> <!-- section -->
