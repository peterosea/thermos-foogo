<?php

function why($arg)
{
  $zeplin = get_home_url() . '/wp-content/uploads/zeplin';
  $img = $arg['img'];
  $mimg = isset($arg['m_img']) ? $arg['m_img'] : 'tkfd200-sec01-03';
  return <<<HTML
  <div class="section why">
    <div class="container">
      <h1 class="d-none d-md-block">
        아이의 빨대컵은 왜<br />
        <span class="pointBg">진공단열 스테인리스 빨대컵</span>이어야 할까?
      </h1>
      <div class="mainImgWrap d-none d-md-block">
        <img class="minImg" draggable="false" src="$zeplin/$img.png" srcset="$zeplin/$img@2x.png 2x, $zeplin/$img@3x.png 3x">
        <div class="label">
          내 아이의 건강을 위해,<br />
          오늘부터 푸고 하세요!
        </div>
      </div>
      <div class="mainImgWrap d-block d-md-none">
        <img draggable="false" src="$zeplin/$mimg.png" srcset="$zeplin/$mimg@2x.png 2x, $zeplin/$mimg@3x.png 3x">
      </div>
      <div class="body">
        <h2>대장균 증식을 억제하는 건강한 보틀, 푸고</h2>
        <p>
          내 아이의 물 건강을 위해서<br />
          물컵 속 대장균 관리가 무엇보다 중요합니다.<br />
          최적의 온도 유지로 대장균 증식을 억제하는<br />
          진공단열 스테인리스 보틀, 푸고<br />
          엄마아빠의 마음으로 만든 건강한 물컵입니다.
        </p>
      </div>
      <div class="body">
        <img class="icon" draggable="false" src="$zeplin/27052.png" srcset="$zeplin/27052@2x.png 2x, $zeplin/27052@3x.png 3x">
        <p>
          아이가 빨대컵으로 음료를 마실 때<br class="d-block d-lg-none" /> 입안의 음식물이 컵 안으로 들어갈 수 있어,<br />
          유아용 빨대컵 안에서 균이 발생하는 것은 불가피합니다.<br />
          일정 시간이 지나 아이가 균이 침투된 내용물을<br class="d-block d-lg-none" /> 다시 마시게 된다면,<br />
          아이의 상태에 따라 건강에 악영향을 끼칠 수 있습니다.<br />
          진공단열 스테인리스 보틀인 푸고는<br class="d-block d-lg-none" /> 최적의 온도 유지로<br class="d-none d-lg-block" />
          여름철 대장균 증식을 억제하는<br class="d-block d-lg-none" /> 유아용 스테인리스 보틀입니다.
        </p>
      </div>
      <div class="table d-none d-lg-block">
        <div class="row">
          <div class="col-12 col-lg-2 head px-0">
            써모스 진공단열<br />
            스테인리스 보틀
          </div>
          <div class="col-12 col-lg-10 imgGroupWrap labelImgWrap">
            <div class="imgWrap">
              <img class="icon" draggable="false" src="$zeplin/72.png" srcset="$zeplin/72@2x.png 2x, $zeplin/72@3x.png 3x">
            </div>
            <div class="imgWrap">
              <img class="icon" draggable="false" src="$zeplin/73.png" srcset="$zeplin/73@2x.png 2x, $zeplin/73@3x.png 3x">
            </div>
            <div class="imgWrap">
              <img class="icon" draggable="false" src="$zeplin/74.png" srcset="$zeplin/74@2x.png 2x, $zeplin/74@3x.png 3x">
            </div>
            <div class="imgWrap">
              <img class="icon" draggable="false" src="$zeplin/75.png" srcset="$zeplin/75@2x.png 2x, $zeplin/75@3x.png 3x">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-2 head px-0">플라스틱 보틀</div>
          <div class="col-12 col-lg-10 imgGroupWrap">
            <div class="imgWrap">
              <img class="icon" draggable="false" src="$zeplin/76.png" srcset="$zeplin/76@2x.png 2x, $zeplin/76@3x.png 3x">
            </div>
            <div class="imgWrap">
              <img class="icon" draggable="false" src="$zeplin/77.png" srcset="$zeplin/77@2x.png 2x, $zeplin/77@3x.png 3x">
            </div>
            <div class="imgWrap">
              <img class="icon" draggable="false" src="$zeplin/78.png" srcset="$zeplin/78@2x.png 2x, $zeplin/78@3x.png 3x">
            </div>
            <div class="imgWrap">
              <img class="icon" draggable="false" src="$zeplin/79.png" srcset="$zeplin/79@2x.png 2x, $zeplin/79@3x.png 3x">
            </div>
          </div>
        </div>
      </div>
      <div class="src d-none d-lg-block">출처: 써모스 자체 조사</div>
      <div class="d-none d-md-block d-lg-none">
        <img class="tkfd200-sec01-04" draggable="false" src="$zeplin/tkfd200-sec01-04-t.jpg">
      </div>
      <div class="d-block d-md-none">
        <img class="tkfd200-sec01-04" draggable="false" src="$zeplin/tkfd200-sec01-04.png" srcset="$zeplin/tkfd200-sec01-04@2x.png 2x, $zeplin/tkfd200-sec01-04@3x.png 3x">
      </div>
    </div>
  </div>
HTML;
}