<?php

/**
 * Template Name: 홈페이지
 * Template Post Type: page
 */

// variables
$zeplin = get_home_url() . '/wp-content/uploads/zeplin';
get_template_part('template-parts/head/slickslide');
get_template_part('template-parts/home/index');
get_header();
?>
<main class="pageTemplate homepage">
  <div id="fullpage">
    <?php include_once('home/section1.php') ?>
    <?php include_once('home/section2.php') ?>
    <?php include_once('home/section3.php') ?>
    <?php include_once('home/section4.php') ?>
    <?php include_once('home/section5.php') ?>
    <?php include_once('home/section6.php') ?>
    <?php get_template_part('template-parts/FNB/index') ?>
  </div>
  <ul id="myMenu" class="listStyle">
    <li data-menuanchor="first" class="active">
      <div class="label"></div>
      <a href="#first">자연을 닮은 푸고</a>
    </li>
    <li data-menuanchor="second">
      <div class="label"></div>
      <a href="#second">우리 아이들을 위한 제품</a>
    </li>
    <li data-menuanchor="third">
      <div class="label"></div>
      <a href="#third">영상으로 만나는 푸고</a>
    </li>
    <li data-menuanchor="fourth">
      <div class="label"></div>
      <a href="#fourth">푸고의 특장점</a>
    </li>
    <li data-menuanchor="five">
      <div class="label"></div>
      <a href="#five">푸고 프리미엄 뉴트럴 시리즈</a>
    </li>
    <li data-menuanchor="six">
      <div class="label"></div>
      <a href="#six">푸고 공식 인스타그램</a>
    </li>
  </ul>
</main>
<?php
get_footer();
