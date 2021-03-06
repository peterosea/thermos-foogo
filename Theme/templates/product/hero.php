<?php
function sectionHero($isBaby = true)
{
  $zeplin = get_home_url() . '/wp-content/uploads/zeplin';
  $content = <<<HTML
    <h2>푸고, 처음으로 만나는 자연스러움</h2>
    <h1>
      <span class="d-none d-lg-inline">“</span>자연을 닮은 아이들을<br class="d-block d-lg-none" /> 만들어 주고 싶어요<span class="d-none d-lg-inline">”</span>
    </h1>
    <p>
      소중한 우리 아이들에게<br />
      <span class="pointBg">Earthy Neutrals</span>의 자연을 보여주고 싶은<br />
      마음을 담았습니다.<br />
      자연을 담은 푸고 프리미엄 뉴트럴 시리즈를 만나보세요.
    </p>
HTML;
  if ($isBaby) $content .= <<<HTML
    <div class="divider"></div>
    <h2>푸고, 손으로 느끼는 상상력</h2>
    <h1>
      <span class="d-none d-lg-inline">“</span>아이들을 생각하면 무엇이 떠오르세요?<span class="d-none d-lg-inline">”</span>
    </h1>
    <p>
      순수함, 포근함, 달콤함, 부드러움의<br class="d-block d-lg-none" />
      <span class="pointBg">Soft touch</span>가 모티브가 되어<br />
      아이들이 작은 손으로 직접 느낄 수 있는<br class="d-block d-lg-none" /> 푸고 프리미엄 뉴트럴 시리즈를 만들었습니다.
    </p>
HTML;
  return <<<HTML
  <div class="section hero">
    <img class="d-none d-md-block" draggable="false" src="$zeplin/all.jpg" srcset="$zeplin/all@2x.jpg 2x, $zeplin/all@3x.jpg 3x">
    <div class="container position-absolute">
      <div class="row">
        <div class="col text-center text-xxl-start">
          <img class="logo" draggable="false" src="$zeplin/logo-3.png" srcset="$zeplin/logo-3@2x.png 2x, $zeplin/logo-3@3x.png 3x">
        </div>
        <div class="col-8 d-none d-xxl-block body">
          $content
        </div>
      </div>
    </div>
    <div class="container position-static d-block d-xxl-none">
      $content
    </div>
  </div>
HTML;
}