<?php

/**
 * Global Footer navigation
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <999@hyeon.pro>
 **/


function footer_8fd30c6f_6025_4027_9a2f_dff96a4d0826()
{
  global $post;
  if ($post->ID !== 2) {
    include get_stylesheet_directory() . '/template-parts/FNB/index.php';
  }
}
add_action('wp_footer', 'footer_8fd30c6f_6025_4027_9a2f_dff96a4d0826');
