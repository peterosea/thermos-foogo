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
      'menu' => 'GNB',
      'depth' => 1
    )); ?>
  </div>
  <div class="right iconWrap">
    <a target="_blank" href="https://www.instagram.com/foogo.kr/">
      <i class="fab fa-instagram"></i>
    </a>
  </div>
</nav>
<div class="subMegaMenu">
  <div class="container">
    <?php
    foreach (wp_get_nav_menu_items('Product') as $mi) {
      $content = get_field('content', $mi->ID);
      $content2 = get_field('strong', $mi->ID);
      $img = get_field('img', $mi->ID);
      echo <<<HTML
      <a href="$mi->url" class="item">
        <div class="imgWrap">
          <img src="$img" alt="">
        </div>
        <div class="body">
          <div class="title">$mi->title</div>
          $content
          <strong>$content2</strong>
        </div>
      </a>
HTML;
    }
    ?>
  </div>
</div>


<nav class="GNB mobile d-flex d-lg-none">
  <a href="/" class="logo">
    <img draggable="false" src="<?php echo $zeplin; ?>/logo-2.png" srcset="<?php echo $zeplin; ?>/logo-2@2x.png 2x, <?php echo $zeplin; ?>/logo-2@3x.png 3x">
  </a>
  <div class="rightWrap">
    <button class="coverMenu">
      <div class="ie">
        <i class="fas fa-bars"></i>
      </div>
      <div class="hamburgerButton">
        <div class="menu cross menu--1">
          <label>
            <input type="checkbox">
            <svg id="mobileMenuToggle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <path class="line--1" d="M0 40h62c13 0 6 28-4 18L35 35"></path>
              <path class="line--2" d="M0 50h70"></path>
              <path class="line--3" d="M0 60h62c13 0 6-28-4-18L35 65"></path>
            </svg>
          </label>
        </div>
      </div>
    </button>
  </div>
</nav>
<div class="mobileCover d-block d-lg-none">
  <?php
  wp_nav_menu([
    'menu' => 'GNB',
    'container' => '',
    'add_li_class' => 'dropdownItem',
  ]); ?>
</div>
<script>
  document.querySelector('.coverMenu input[type="checkbox"]').addEventListener('change', (e) => {
    if (e.target.checked) {
      document.querySelector('.mobileCover').classList.add('active');
    } else {
      document.querySelector('.mobileCover').classList.remove('active');
    }
  })
</script>