<?php
function detail($arg)
{
    $zeplin = get_home_url() . '/wp-content/uploads/zeplin';
    if ($arg === 'three') {
        return <<<HTML
    <div class="row three d-none d-md-flex">
      <div class="col-12 col-lg-6 imgCol">
        <img draggable="false" src="$zeplin/3055.png" srcset="$zeplin/3055@2x.png 2x, $zeplin/3055@3x.png 3x">
      </div>
      <div class="col-12 col-lg-6 contentCol">
        <h1>
          성장단계에 맞춰<br />
          상호 호환 가능<span class="comment">(*별도구매)</span>
        </h1>
        <p>
          푸고 프리미엄 뉴트럴 시리즈는<br class="d-none d-lg-block" />
          아이의 성장단계에 맞추어<br class="d-none d-lg-block" />
          소모품을 자유롭게 변경할 수 있는데요.<br class="d-none d-lg-block" />
          시리즈를 톤온톤 배색으로 디자인하여<br class="d-none d-lg-block" />
          호환해 사용해도 잘 어울려요.<br class="d-none d-lg-block" />
          바닥 커버도 시리즈 내 호환이 가능해<br class="d-none d-lg-block" />
          원하는 컬러로 변경하며 사용할 수 있어요.<br class="d-none d-lg-block" />
        </p>
      </div>
    </div>
    <div class="row three d-flex d-md-none">
      <img draggable="false" src="$zeplin/tkfd200-sec05-03.png" srcset="$zeplin/tkfd200-sec05-03@2x.png 2x, $zeplin/tkfd200-sec05-03@3x.png 3x">  
    </div>
HTML;
    }
    if ($arg === 'threejnx') {
        return <<<HTML
    <div class="row three jnx d-none d-md-flex">
      <div class="col-12 col-lg-6 imgCol">
        <img class="d-none d-lg-block" draggable="false" src="$zeplin/3017.png" srcset="$zeplin/3017@2x.png 2x, $zeplin/3017@3x.png 3x">
        <img class="d-block d-lg-none" draggable="false" src="$zeplin/245.png" srcset="$zeplin/245@2x.png 2x, $zeplin/245@3x.png 3x">
      </div>
      <div class="col-12 col-lg-6 contentCol">
        <h1>
        엄마·아빠의<br>
        텀블러로 안성맞춤</span>
        </h1>
        <p>
        아기가 커서 더는 분유를 먹지 않으면 엄마와 아빠를 위한 <br class="d-none d-lg-block" />
        휴대용 텀블러로 사용할 수 있어요.
        </p>
      </div>
    </div>
    <div class="row three jnx d-flex d-md-none">
      <img draggable="false" src="$zeplin/jnx501k-sec05-02.png" srcset="$zeplin/jnx501k-sec05-02@2x.png 2x, $zeplin/jnx501k-sec05-02@3x.png 3x">  
    </div>
HTML;
    }
}
