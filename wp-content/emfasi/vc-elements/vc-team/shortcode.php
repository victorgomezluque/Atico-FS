<?php

add_shortcode('vc_team', 'vc_team_func');
function vc_team_func($atts, $content)
{
  // Params extraction
  /* 
    team_icon
    team_text 
  */
  extract(
    shortcode_atts(
      array(
        'team'   => '',
      ),
      $atts
    )
  );

  $team = vc_param_group_parse_atts($team);

  ob_start();

  ?>

    <article>
      <div class="vc_team vc_team--container vc_carousel_team">
        <div class="cont--inner owl-carousel">

        <?php 
          foreach ($team as $item) {
        ?>
          <div class="vc_team_item">
            
            <div class="cont--image">
              <?php 
                if (is_numeric($item['team_image'])) {
                  $image_obj = wp_get_attachment_image($item['team_image'], 'full');
                }
              ?>
                <?php echo $image_obj; ?>
            </div>

            <div class="cont--info">
              <div class="cont--info-inner">
                <div class="cont--name">
                    <?php echo do_shortcode($item['team_name']); ?>
                </div>
                <div class="cont--charge">
                    <?php echo do_shortcode($item['team_charge']); ?>
                </div>
                <div class="cont--body">
                <?php echo do_shortcode($item['team_body']); ?>
                </div>
                <div class="cont--xxss">
                  <a href="<?php echo do_shortcode($item['team_facebook']); ?>" target="_blank">
                    <i class="icon icon-font-icono-icn-xxss-fb-white"></i>
                  </a>
                  <a href="<?php echo do_shortcode($item['team_linkedin']); ?>" target="_blank">
                    <i class="icon icon-font-icono-icn-xxss-linkedin"></i>
                  </a>
                </div>
              </div>
            </div>

          </div>
        <?php } ?>

        </div>
      </div>
    </article>

<?php
  $output = ob_get_contents();
  ob_end_clean();

  return $output;
}
