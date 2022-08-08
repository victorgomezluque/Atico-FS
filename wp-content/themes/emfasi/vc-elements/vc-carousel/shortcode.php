<?php

add_shortcode('vc_carousel', 'vc_carousel_func');
function vc_carousel_func($atts, $content)
{
 // Params extraction
 extract(
  shortcode_atts(
      array(
          'select_carousel'   => '',
      ), 
      $atts
  )
);



ob_start(); ?>

<div class="carousel-vc-container"> 
  <?php $banner_relacionado = get_field('banner_relacionado', $select_carousel);  ?>
  
      <div class="owl-carousel owl-carousel-banner">
          <?php foreach ( $banner_relacionado as $banner ):  ?>

          <?php 
          
          
          $color_text =  get_field('color_text', $banner->ID);
          $color_logo =  get_field('color_logo', $banner->ID);
          $color_menu_prinicipal =  get_field('color_menu_prinicipal', $banner->ID);
          $color_menu_idioma =  get_field('color_menu_idioma', $banner->ID);
          ?>

              <div class="item color-text-<?php echo $color_text  ?> color-logo-<?php echo $color_logo  ?> color-menu_prinicipal-<?php echo $color_menu_prinicipal  ?> color-menu_idioma-<?php echo $color_menu_idioma  ?>">                         
                                                    
                  <div class="cont__img">
                      <?php echo get_the_post_thumbnail( $banner->ID, 'full' ); ?> 
                  </div>

                  <?php
                      $image_mobile = get_field('imagen_mobile', $banner->ID);
                      $size = 'full'; // (thumbnail, medium, large, full or custom size)


                  
                      if( $image_mobile ) { ?>
                          <div class="cont__img_mobile">
                              <?php echo wp_get_attachment_image($image_mobile, $size ); ?>
                          </div>   
                      <?php 
                      }
                  ?> 
                  
                  <div class="cont__wrapper__body">
                      <?php if(get_field('banner_subtitle', $banner->ID)) { ?>
                          <div class="cont__subtitle">
                          <p><?php echo get_field('banner_subtitle', $banner->ID); ?></p>
                        </div>
                      <?php } ?>
                      <?php if(get_field('banner_title', $banner->ID)) { ?>
                          <div class="cont__title">
                          <h2><?php echo get_field('banner_title', $banner->ID); ?></h2>
                          
                          </div>
                      <?php } ?>
                      <?php if(get_field('link', $banner->ID)) { ?>
                          <div class="cont__link">
                              <a class="button" href="<?php echo get_field('link', $banner->ID)  ?>">
                                  <?php echo get_field('text_link', $banner->ID)  ?>
                              </a>                                                
                          </div>
                      <?php } ?>
                  </div>         
              </div>

          <?php endforeach; ?>

          
      </div>
      <div class="cont--link--item"></div>
</div>

<?php 
$output = ob_get_contents();
ob_end_clean();

return $output;    

}
