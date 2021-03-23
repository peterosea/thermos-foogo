<?php

/**
 * Global navigation bar
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <999@hyeon.pro>
 **/

function GNB()
{
  get_template_part('template-parts/GNB/index');
}
add_action('wp_body_open', 'GNB');

function GNB_8fd30c6f_6025_4027_9a2f_dff96a4d0826_head()
{
  global $post;
  if ($post->ID !== 2) : ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/headroom/0.12.0/headroom.min.js"></script>
  <?php endif;
}
add_action('wp_head', 'GNB_8fd30c6f_6025_4027_9a2f_dff96a4d0826_head');

function GNB_8fd30c6f_6025_4027_9a2f_dff96a4d0826_footer()
{

  global $post;
  if ($post->ID !== 2) : ?>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/template-parts/GNB/index.js"></script>
<?php endif;
}
add_action('wp_footer', 'GNB_8fd30c6f_6025_4027_9a2f_dff96a4d0826_footer');
