<?php

/**
 * Add styles/classes to the "Styles" drop-down
 */
add_filter('tiny_mce_before_init', 'fb_mce_before_init');

function fb_mce_before_init($settings)
{

  $style_formats = array(

    array(
      'title' => 'Título 1',
      'selector' => 'h1',
      'classes' => 'title-1',
      'styles' => array(
        'color'         => 'red', // or hex value #ff0000
        'fontWeight'    => 'bold',
        'textTransform' => 'uppercase'
      )
    ),
    array(
      'title' => 'Título 1',
      'selector' => 'h2',
      'classes' => 'title-1'
    ),
    array(
      'title' => 'Título 1',
      'selector' => 'h3',
      'classes' => 'title-1'
    ),
    array(
      'title' => 'Título 1',
      'selector' => 'p',
      'classes' => 'title-1'
    ),
    array(
      'title' => 'Título 2',
      'selector' => 'h1',
      'classes' => 'title-2'
    ),
    array(
      'title' => 'Título 2',
      'selector' => 'h2',
      'classes' => 'title-2'
    ),
    array(
      'title' => 'Título 2',
      'selector' => 'h3',
      'classes' => 'title-2'
    ),
    array(
      'title' => 'Título 2',
      'selector' => 'p',
      'classes' => 'title-2'
    ),
    array(
      'title' => 'Título 3',
      'selector' => 'h1',
      'classes' => 'title-3'
    ),
    array(
      'title' => 'Título 3',
      'selector' => 'h2',
      'classes' => 'title-3'
    ),
    array(
      'title' => 'Título 3',
      'selector' => 'h3',
      'classes' => 'title-3'
    ),
    array(
      'title' => 'Título 3',
      'selector' => 'p',
      'classes' => 'title-3'
    ),

    array(
      'title' => 'Texto pequeño',
      'selector' => 'p',
      'classes' => 'text-small'
    ),

    array(
      'title' => 'Texto destacado',
      'selector' => 'p',
      'classes' => 'text-important'
    ),
    
    array(
      'title' => 'Title section Grey',
      'selector' => 'p',
      'classes' => 'title-section'
    ),


    array(
      'title' => 'Texto legal',
      'selector' => 'p',
      'classes' => 'text-small'
    ),

    array(
      'title' => 'Button',
      'selector' => 'a',
      'classes' => 'link--button'
    ),

    array(
      'title' => 'Link Download',
      'selector' => 'a',
      'classes' => 'link--download'
    ),
    
  );

  $settings['style_formats'] = json_encode($style_formats);

  return $settings;
}


// Add Custom Quicktags to Text Editor
function smackdown_add_quicktags()
{

  if (wp_script_is('quicktags')) { ?>
    <script type="text/javascript">
      QTags.addButton('small_tag', 'small', '<small>', '</small>', '', '', 1);
    </script>
  <?php }
}
add_action('admin_print_footer_scripts', 'smackdown_add_quicktags');
