<?php

add_shortcode('vc_infotwocolumns', 'vc_infotwocolumns_func');
function vc_infotwocolumns_func($atts, $content)
{
  // Params extraction
  extract(
    shortcode_atts(
      array(
        'title'   => '',
        'subtitle' => '',
        'icotextbody'   => '',
        'listoverlay'   => '',
      ),
      $atts
    )
  );

  $icotextbody = vc_param_group_parse_atts($icotextbody);
  $listoverlay = vc_param_group_parse_atts($listoverlay);

  ob_start();

  ?>

  <article>
    <div class="vc_infotwocolumns vc_infotwocolumns--container">
      <div class="container">
        <div class="cont--left">
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

            <div class="cont--items">

              <?php 
                foreach ($icotextbody as $item) {
              ?>
                <div class="vc_icotextbody_item">
                  
                  <div class="cont--image">
                    <?php 
                      if (is_numeric($item['icotextbody_icon'])) {
                        $image_obj = wp_get_attachment_image($item['icotextbody_icon'], 'full');
                      }
                    ?>
                      <?php echo $image_obj; ?>
                  </div>
                  <div class="cont--title">
                      <?php echo do_shortcode($item['icotextbody_text']); ?>
                  </div>
                  <div class="cont--body">
                      <?php echo do_shortcode($item['icotextbody_textarea']); ?>
                  </div>

                </div>
              <?php } ?>
            </div>

          </div><!-- cont--inner -->
        </div><!-- cont--left -->
        <div class="cont--right">
          <div class="cont--inner">
            <ol class="cont--items">
              <?php 
                foreach ($listoverlay as $item) {
              ?>
                <li class="vc_listoverlay_item">
                  <div class="cont--list-inner">
                    <div class="cont--list-inner-left">
                      <div class="cont--title">
                        <?php echo do_shortcode($item['listoverlay_text']); ?>
                      </div>
                      <div class="cont--subtitle">
                        <?php echo do_shortcode($item['listoverlay_subtitle']); ?>
                      </div>
                    </div>
                    <?php if(isset($item['listoverlay_textarea'])) { ?>
                    <div class="cont--list-inner-right">
                      <div class="cont--moreinfo">
                        <i class="icon icon-font-icon-icn-more-grey"></i>
                      </div>
                    </div>
                    <?php } ?>
                  </div>

                  <?php if(isset($item['listoverlay_textarea'])) { ?>
                  <div class="cont--overlay">
                    <div class="cont--close"><i class="icon icon-font-icon-icn-close"></i></div>
                    <div class="cont--info">
                      <div class="cont--body">
                        <?php echo do_shortcode($item['listoverlay_textarea']); ?>
                      </div>
                    </div>                    
                  </div>
                  <?php } ?>
                  
                </li>
              <?php } ?>
            </ol>

          </div><!-- cont--inner -->
        </div><!-- cont--right -->
      </div>
    </div><!-- vc_infotwocolumns--container --> 
  </article>
  

<?php
  $output = ob_get_contents();
  ob_end_clean();

  return $output;
}
 