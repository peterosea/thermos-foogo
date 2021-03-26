<?php

/**
 * Template Name: 판매처
 * Template Post Type: page
 */

$zeplin = get_home_url() . '/wp-content/uploads/zeplin';
get_header();
include('product/hero.php');
?>
<main class="pageTemplate place">
  <img draggable="false" class="d-none d-lg-block" src="<?php echo $zeplin ?>/all3.jpg" srcset="<?php echo $zeplin ?>/all3@2x.jpg 2x, <?php echo $zeplin ?>/all3@3x.jpg 3x">
  <img draggable="false" class="d-block d-lg-none" src="<?php echo $zeplin ?>/all4.jpg" srcset="<?php echo $zeplin ?>/all4@2x.jpg 2x, <?php echo $zeplin ?>/all4@3x.jpg 3x">
  <div class="section">
    <div class="container">
      <div class="header">
        <h1>판매처</h1>
        <p>
          전국 <span class="pointBg">오프라인 유아용품 전문점</span>과<br class="d-block d-lg-none" /> 써모스 온라인 공식몰(thermosshop.kr) 및<br />
          <span class="pointBg">오픈마켓/종합몰</span>에서<br class="d-block d-lg-none" /> 푸고 프리미엄 뉴트럴 시리즈를 만나보세요.
        </p>
      </div>
      <h2>매장정보</h2>
      <div class="card">
        <div class="row">
          <div class="col-12 col-lg-5 imgCol">
            <img src="<?php echo $zeplin ?>/2920.png" srcset="<?php echo $zeplin ?>/2920@2x.png 2x, <?php echo $zeplin ?>/2920@3x.png 3x">
          </div>
          <div class="col-12 col-lg-7">
            <p>
              전국 오프라인 유아용품 전문점<br />
              위치 정보를 확인 하실 수 있습니다.
            </p>
            <a href="<?php echo get_field('link') ?>" target="_blank" rel="noopener noreferrer" class="btn">보러가기</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
