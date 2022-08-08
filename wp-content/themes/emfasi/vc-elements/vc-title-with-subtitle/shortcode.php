<?php

add_shortcode('vc_title_with_subtitle', 'vc_title_with_subtitle_func');
function vc_title_with_subtitle_func($atts, $content)
{
  // Params extraction
  extract(
    shortcode_atts(
      array(
        'title'   => '',
        'subtitle' => '',
      ),
      $atts
    )
  );

  ob_start();

  ?>

  <article>
    <div class="vc_title_with_subtitle vc_title_with_subtitle--container">
      <div class="container">
        <div class="cont--inner">

          <div class="cont--title">
            <h2>
              <?php echo do_shortcode($title); ?>
            </h2>
          </div>

          <div class="cont--subtitle">
            <h4>
              <?php echo do_shortcode($subtitle); ?>
            </h4>
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
