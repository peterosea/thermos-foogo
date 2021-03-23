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
      <a href="#first">푸고 첫번째 이야기</a>
    </li>
    <li data-menuanchor="second">
      <div class="label"></div>
      <a href="#second">section2</a>
    </li>
    <li data-menuanchor="third">
      <div class="label"></div>
      <a href="#third">section3</a>
    </li>
    <li data-menuanchor="fourth">
      <div class="label"></div>
      <a href="#fourth">section4</a>
    </li>
    <li data-menuanchor="five">
      <div class="label"></div>
      <a href="#five">section5</a>
    </li>
    <li data-menuanchor="six">
      <div class="label"></div>
      <a href="#six">section6</a>
    </li>
  </ul>
</main>
<?php
get_footer();
