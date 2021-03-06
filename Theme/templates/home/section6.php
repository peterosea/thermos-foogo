<div class="section section6">
  <div class="layer">
    <div class="innerLayer">
      <img class="path44 position-absolute d-none d-md-block" draggable="false" src="<?php echo $zeplin ?>/44.png"
        srcset="<?php echo $zeplin ?>/44@2x.png 2x, <?php echo $zeplin ?>/44@3x.png 3x">
      <img class="path29 position-absolute d-block d-md-none" draggable="false" src="<?php echo $zeplin ?>/29.png"
        srcset="<?php echo $zeplin ?>/29@2x.png 2x, <?php echo $zeplin ?>/29@3x.png 3x">
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12 px-4 px-md-3">
        <div class="header">
          <h1>푸고 공식<br class="d-block d-md-none" /> 인스타그램</h1>
          <p>푸고 공식 인스타그램에 매일 업데이트되는 새로운 이야기를 만나보세요.</p>
        </div>
        <div class="body">
          <?php echo do_shortcode('[elfsight_instagram_feed id="2"]') ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  $bn_active = get_field( 'chk_activate_bn', $post_id );
  $bn_url = get_field( 'url_home_bn', $post_id );
  if( $bn_active == 'active' ) {
?>
<div class="section banner fp-auto-height">
  <div class="container">
    <div class="row">
      <div class="col-12 d-flex align-items-center justify-content-center">
        <a href="<?php echo $bn_url; ?>" target="_blank">
          <img src="<?php echo $zeplin ?>/2933.png"
            srcset="<?php echo $zeplin ?>/2933@2x.png 2x, <?php echo $zeplin ?>/2933@3x.png 3x">
          푸고 서포터즈 <span class="pointColor">지원하기 <i class="fas fa-chevron-right"></i></span>
        </a>
      </div>
    </div>
  </div>
</div>
<?php }; ?>