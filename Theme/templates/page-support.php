<?php

/**
 * Template Name: 고객 지원
 * Template Post Type: page
 */

$zeplin = get_home_url() . '/wp-content/uploads/zeplin';
get_header();
include('product/hero.php');
?>
<main class="pageTemplate support">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 mb-3 mb-lg-0">
        <div class="card op">
          <h2>고객상담실(A/S 문의)</h2>
          <img draggable="false"
            src="<?php echo $zeplin; ?>/2930.png"
            srcset="<?php echo $zeplin; ?>/2930@2x.png 2x, <?php echo $zeplin; ?>/2930@3x.png 3x">
          <a href="tel:1577-8396" class="point">1577-8396</a>
          <div class="comment">
            운영시간 : 월~금 (공휴일 제외)<br />
            10:00-12:30, 13:30-17:00
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="card op">
          <h2>영업관련 문의</h2>
          <img draggable="false"
            src="<?php echo $zeplin; ?>/29322.png"
            srcset="<?php echo $zeplin; ?>/29322@2x.png 2x, <?php echo $zeplin; ?>/29322@3x.png 3x">
          <a style="line-height: 2.6" href="mailto:sale@thermos.kr" class="point mail">sale@thermos.kr</a>
        </div>
      </div>
    </div>
    <div class="row instruction">
      <div class="col-12">
        <div class="card text-start">
          <div class="header">
            <h2>취급설명서</h2>
            <p>원하시는 제품군을 고르시면 해당 취급설명서를 보실 수 있습니다.</p>
          </div>
          <div class="body">
            <?php
            foreach (get_field('product') as $p) {
                $img = $p['img'];
                $file = $p['file'];
                $name = $p['name'];
                echo <<<HTML
              <a target="_blank" href="$file" class="item">
                <div class="imgWrap">
                  <img src="$img" alt="">
                </div>
                <div class="title">
                  $name
                </div>
              </a>
HTML;
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
