<?php

/**
 * 홈페이지 js
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <999@hyeon.pro>
 **/

function fullpage_5f482825_0bfe_4f87_9ce7_aaee698a1698()
{
?>
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/fullpage.js/dist/fullpage.min.css" />
<?php
}
add_action('wp_head', 'fullpage_5f482825_0bfe_4f87_9ce7_aaee698a1698');

function home_page_js()
{
?>
  <script src="<?php echo get_stylesheet_directory_uri() ?>/template-parts/home/fullpage.scrollHorizontally.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri() ?>/template-parts/home/fullpage.parallax.min.js"></script>
  <script src="https://unpkg.com/fullpage.js/dist/fullpage.extensions.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri() ?>/template-parts/home/anime.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri() ?>/template-parts/home/index.js"></script>
<?php
}
add_action('wp_footer', 'home_page_js');
