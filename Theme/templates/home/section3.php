<div class="section section3">
  <div class="cover" id="cover">
    <div class="cover__wrap">
      <div class="cover__embed">
        <img src="<?php echo $zeplin ?>/tkfe-280-all.jpg"
          srcset="<?php echo $zeplin ?>/tkfe-280-all@2x.jpg 2x, <?php echo $zeplin ?>/tkfe-280-all@3x.jpg 3x">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="header">
      <h1>영상으로 만나는 푸고</h1>
      <p>푸고 프리미엄 뉴트럴 시리즈의 탄생이야기를 지금 영상으로 만나보세요.</p>
    </div>
    <div class="body">
      <div class="item item--style-2" data-animation-path-duration="1500" data-animation-path-easing="easeOutElastic"
        data-morph-path="M 418.1,159.8 C 460.9,222.9 497,321.5 452.4,383.4 417.2,432.4 371.2,405.6 271.3,420.3 137.2,440 90.45,500.6 42.16,442.8 -9.572,381 86.33,289.1 117.7,215.5 144.3,153.4 145.7,54.21 212.7,36.25 290.3,15.36 373.9,94.6 418.1,159.8 Z"
        data-path-scaleY="1.1" data-image-scaleX="1.3" data-image-scaleY="1.3" data-animation-deco-duration="2000"
        data-animation-deco-delay="100" data-deco-rotate="-10">
        <?php
          $video_url = get_field( 'url_home_video', $post_id ); //영상주소
          $video_thumb = get_field( 'thumb_home_video', $post_id ); //영상 썸네일
        ?>
        <a href="<?php echo $video_url; ?>" target="_blank">
          <svg class="item__svg" width="500px" height="500px" viewBox="0 0 500 500">
            <clipPath id="clipShape2">
              <path class="item__clippath"
                d="M 378.1,121.2 C 408.4,150 417.2,197.9 411,245.8 404.8,293.7 383.5,341.7 353.4,370.7 303.2,419.1 198.7,427.7 144.5,383.8 86.18,336.5 67.13,221.3 111.9,161 138.6,125 188.9,99.62 240.7,90.92 292.4,82.24 345.6,90.32 378.1,121.2 Z" />
            </clipPath>
            <g class="item__deco">
              <use xlink:href="#deco2" />
            </g>
            <g clip-path="url(#clipShape2)">
              <image class="item__img" xlink:href="<?php echo $video_thumb; ?>" x="0" y="0" height="500px"
                width="730px" />
            </g>
          </svg>
          <div class="item__meta">
            <div class="custom">
              <img src="<?php echo $zeplin ?>/btn-play.png"
                srcset="<?php echo $zeplin ?>/btn-play@2x.png 2x, <?php echo $zeplin ?>/btn-play@3x.png 3x">
            </div>
            <h2 class="item__title_disable">푸고 프리미엄<br /> 뉴트럴 시리즈 이야기</h2>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>