<?php

/**
 * GNB
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <999@hyeon.pro>
 **/

$zeplin = get_home_url() . '/wp-content/uploads/zeplin'; ?>

<nav class="GNB d-none d-lg-flex">
  <div class="left logoWrap">
    <a href="/">
      <img draggable="false" src="<?php echo $zeplin; ?>/logo-2.png" srcset="<?php echo $zeplin; ?>/logo-2@2x.png 2x, <?php echo $zeplin; ?>/logo-2@3x.png 3x">
    </a>
  </div>
  <div class="container">
    <?php wp_nav_menu(array(
      'menu' => 'GNB'
    )); ?>
  </div>
  <div class="right iconWrap">
    <a target="_blank" href="https://www.instagram.com/foogo.kr/">
      <i class="fab fa-instagram"></i>
    </a>
  </div>
</nav>