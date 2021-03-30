<?php
function detail($arg)
{
  $zeplin = get_home_url() . '/wp-content/uploads/zeplin';
  if ($arg === 'three') {
    return <<<HTML
    <div class="row three">
      <div class="col-12 col-lg-6 imgCol">
        <img class="d-none d-lg-block" draggable="false" src="$zeplin/3055.png" srcset="$zeplin/3055@2x.png 2x, $zeplin/3055@3x.png 3x">
        <img class="d-block d-lg-none" draggable="false" src="$zeplin/236.png" srcset="$zeplin/236@2x.png 2x, $zeplin/236@3x.png 3x">
      </div>
      <div class="col-12 col-lg-6 contentCol">
        <h1>
          성장단계에 맞춰<br />
          상호 호환 가능<span class="comment">(*별도구매)</span>
        </h1>
        <p>
          푸고 프리미엄 뉴트럴 시리즈는 아이의 성장단계에 맞추어 소모품을<br class="d-none d-lg-block" />
          자유롭게 변경할 수 있는데요.<br class="d-none d-lg-block" />
          시리즈를 톤온톤 배색으로 디자인하여 호환해 사용해도 잘 어울려요<br class="d-none d-lg-block" />
          바닥 커버도 시리즈 내 호환이 가능해<br class="d-none d-lg-block" />
          원하는 컬러로 변경하며 사용할 수 있어요.
        </p>
      </div>
    </div>
HTML;
  }
}