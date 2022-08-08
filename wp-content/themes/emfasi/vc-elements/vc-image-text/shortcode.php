<?php

add_shortcode('vc_image_text', 'vc_image_text_func');
function vc_image_text_func($atts, $content)
{
  // Params extraction
  extract(
    shortcode_atts(
      array(
        'image'   => '',
        'style'   => '',
        'link_widget' => '',
      ),
      $atts
    )
  );


  $link_widget = ($link_widget=='||') ? '' : $link_widget;
  $link_widget = vc_build_link( $link_widget );
  $a_link = $link_widget['url'];
  $a_title = ($link_widget['title'] == '') ? '' : 'title="'.$link_widget['title'].'"';
  $a_target = ($link_widget['target'] == '') ? '' : 'target="'.$link_widget['target'].'"';


  $image_classes      = "";
  $image_src          = $image;

  if (is_numeric($image)) {
    $image_obj = wp_get_attachment_image($image, 'full');
  }


  ob_start();

  ?>
  <article>
    <div class="vc_image_text vc_image_text--container <?php echo $style ?>">
      <div class="cont--inner">

        <div class="cont--image">
          <?php echo $image_obj; ?>
        </div>

        <div class="cont--text-content">
          <div class="cont--text-content-inner">
            <?php echo do_shortcode($content); ?>

            <div class="cont--link">
              <?php 
                $button = $a_link ? '<a href="'.$a_link. '" '.$a_title.' '.$a_target.'>'.$link_widget['title'].'</a>' : '';
                echo $button;
              ?>            
            </div>
            
          </div>
        </div>        

      </div>
    </div>
  </article>

<?php
  $output = ob_get_contents();
  ob_end_clean();

  return $output;
}
