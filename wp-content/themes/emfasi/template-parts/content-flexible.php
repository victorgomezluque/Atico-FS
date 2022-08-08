<?php if( have_rows('content') ): ?>

  <?php while ( have_rows('content') ) : the_row(); ?>

    <?php if( get_row_layout() == 'section_text_image' ): ?>
        <?php get_template_part('section-parts/section','text-image'); ?>
    <?php endif; ?>

    <?php if( get_row_layout() == 'section_opinions' ): ?>
      <?php get_template_part('section-parts/section','opinions'); ?>
    <?php endif; ?>

    <?php if( get_row_layout() == 'section_cta' ): ?>
      <?php get_template_part('section-parts/section','cta'); ?>
    <?php endif; ?>
    
    <?php if( get_row_layout() == 'section_faq' ): ?>
      <?php get_template_part('section-parts/section','faq'); ?>
    <?php endif; ?>

    <?php if( get_row_layout() == 'section_form' ): ?>
      <?php get_template_part('section-parts/section','form'); ?>
    <?php endif; ?>
    
    <?php if( get_row_layout() == 'section_logos' ): ?>
      <?php get_template_part('section-parts/section','logos'); ?>
    <?php endif; ?>

    <?php if( get_row_layout() == 'section_image_100' ): ?>
      <?php get_template_part('section-parts/section','image-100'); ?>
    <?php endif; ?>

    <?php if( get_row_layout() == 'section_description' ): ?>
      <?php get_template_part('section-parts/section','description'); ?>
    <?php endif; ?>

  <?php endwhile; ?>

<?php endif; ?> 

<?php 
  $job_offer = get_field('job_offer');
  if($job_offer) {
    ?>
    <div class="container">
      <div class="cont--job_offer" id="job_offer">
        <p class="text-important title-2"><span style="font-size: 24pt;">¿Te interesa? <strong>¡Te estamos esperando!</strong></span></p>
        <p><span style="font-size: 18pt;">Envíanos tu CV y portfolio al siguiente email: <a href="mailto:rrhh@emfasi.com">rrhh@emfasi.com</a></span></p>
      </div>
    </div>

    <a href="#job_offer" class="cta-fixed"><?php _e('Inscríbete', 'emfasi'); ?></a>

    <?php
  } else {
    ?> 

    <a href="#form" class="cta-fixed"><?php _e('Más información', 'emfasi'); ?></a>

    <?php
  }
?>