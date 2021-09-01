<?php
$zeplin = get_home_url() . '/wp-content/uploads/zeplin';
?>
<header class="productHeader">
  <div class="container-lg">
    <div class="row">
      <div class="col-12 col-lg">
        <a target="_blank" class="linkWrap" href="<?php echo get_field('file') ?>">
          <img class="d-none d-lg-block" src="<?php echo $zeplin ?>/2707.png"
            srcset="<?php echo $zeplin ?>/2707@2x.png 2x, <?php echo $zeplin ?>/2707@3x.png 3x">
          <div class="group">
            <div class="title">취급설명서</div>
            <span>사용하기 전 읽어두면 더욱 좋은 취급설명서!</span>
          </div>
          <i class="fas fa-chevron-right"></i>
        </a>
      </div>
      <div class="col-12 col-lg d-flex justify-content-end btnWrap px-0 px-lg">
        <a target="_blank" class="btn" href="void(0);" onclick="alert('9월 9일 런칭 예정입니다.');return false;">
        <!-- <a target="_blank" class="btn" href="<?php echo get_field('link') ?>"> -->
          구매하기 <i class="d-none d-lg-inlineblock fas fa-chevron-right"></i>
        </a>
      </div>
    </div>
  </div>
</header>