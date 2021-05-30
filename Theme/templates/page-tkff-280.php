<?php

/**
 * Template Name: TKFF-280
 * Template Post Type: page
 */

$zeplin = get_home_url() . '/wp-content/uploads/zeplin';
get_header();
include('product/hero.php');
include('product/why.php');
include('product/inspection.php');
include('product/detail.php');
?>
<main class="pageTemplate productLending">
  <?php get_template_part('template-parts/header/mobileProduct'); ?>
  <div class="section main">
    <div class="mainSectionImgWrap">
      <img class="d-none d-xl-block" draggable="false"
        src="<?php echo $zeplin ?>/tkff-280-all.jpg"
        srcset="<?php echo $zeplin ?>/tkff-280-all@2x.jpg 2x, <?php echo $zeplin ?>/tkff-280-all@3x.jpg 3x">
      <img class="d-none d-md-block d-xl-none" draggable="false"
        src="<?php echo $zeplin ?>/2463.jpg"
        srcset="<?php echo $zeplin ?>/2463@2x.jpg 2x, <?php echo $zeplin ?>/2463@3x.jpg 3x">
      <img class="d-block d-md-none w-100" draggable="false"
        src="<?php echo $zeplin ?>/1744.jpg"
        srcset="<?php echo $zeplin ?>/1744@2x.jpg 2x, <?php echo $zeplin ?>/1744@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="imgWrap">
        <img draggable="false" src="<?php echo $zeplin ?>/28183.png"
          srcset="<?php echo $zeplin ?>/28183@2x.png 2x, <?php echo $zeplin ?>/28183@3x.png 3x">
      </div>
      <div class="body">
        <h1>성장 단계에 따른 토출량 조절</h1>
        <strong>푸고 프리미엄 뉴트럴 시리즈<br class="d-block d-lg-none" /> 유아용 텀블러</strong>
        <p><?php echo get_the_title() ?>
        </p>
      </div>
    </div>
  </div>
  <?php get_template_part('template-parts/header/product') ?>
  <div class="section section1 d-none d-md-block">
    <div class="container">
      <div class="header">
        <h1>COLOR · SIZE</h1>
        <p>색상 및 용량</p>
      </div>
      <img class="d-none d-lg-block" draggable="false"
        src="<?php echo $zeplin ?>/3027.png"
        srcset="<?php echo $zeplin ?>/3027@2x.png 2x, <?php echo $zeplin ?>/3027@3x.png 3x">
      <!-- mobile -->
      <img class="d-block d-lg-none" draggable="false"
        src="<?php echo $zeplin ?>/30145.png"
        srcset="<?php echo $zeplin ?>/30145@2x.png 2x, <?php echo $zeplin ?>/30145@3x.png 3x">
      <img class="d-block d-lg-none" draggable="false"
        src="<?php echo $zeplin ?>/2222.png"
        srcset="<?php echo $zeplin ?>/2222@2x.png 2x, <?php echo $zeplin ?>/2222@3x.png 3x">
      <img class="d-block d-lg-none" draggable="false"
        src="<?php echo $zeplin ?>/29245.png"
        srcset="<?php echo $zeplin ?>/29245@2x.png 2x, <?php echo $zeplin ?>/2924@3x.png 3x">
      <img class="d-block d-lg-none" draggable="false"
        src="<?php echo $zeplin ?>/223.png"
        srcset="<?php echo $zeplin ?>/223@2x.png 2x, <?php echo $zeplin ?>/223@3x.png 3x">
      <!-- 공통 -->
      <img class="d-none d-lg-block" draggable="false"
        src="<?php echo $zeplin ?>/209.png"
        srcset="<?php echo $zeplin ?>/209@2x.png 2x, <?php echo $zeplin ?>/209@3x.png 3x">
    </div>
  </div>
  <div class="section section1 d-block d-md-none">
    <div class="container">
      <img class="tkff280-sec01-01" draggable="false"
        src="<?php echo $zeplin ?>/tkff280-sec01-01.png"
        srcset="<?php echo $zeplin ?>/tkff280-sec01-01@2x.png 2x, <?php echo $zeplin ?>/tkff280-sec01-01@3x.png 3x">
      <img class="tkff280-sec01-02" draggable="false"
        src="<?php echo $zeplin ?>/tkff280-sec01-02.png"
        srcset="<?php echo $zeplin ?>/tkff280-sec01-02@2x.png 2x, <?php echo $zeplin ?>/tkff280-sec01-02@3x.png 3x">
    </div>
  </div>
  <?php
  echo sectionHero();
  ?>
  <div class="section section3">
    <div class="container">
      <div class="row">
        <div class="col-6 px-0">
          <img draggable="false" src="<?php echo $zeplin ?>/123.jpg"
            srcset="<?php echo $zeplin ?>/123@2x.jpg 2x, <?php echo $zeplin ?>/123@3x.jpg 3x">
        </div>
        <div class="col-6 px-0">
          <img draggable="false" src="<?php echo $zeplin ?>/124.jpg"
            srcset="<?php echo $zeplin ?>/124@2x.jpg 2x, <?php echo $zeplin ?>/124@3x.jpg 3x">
        </div>
      </div>
    </div>
  </div>
  <?php echo why($arg = array('img' => '2989', 'm_img' => '247')); ?>
  <?php include_once('product/design_phrase.php'); ?>
  <div class="section section5 pt-0">
    <div class="container">
      <div class="row">
        <div class="col-12 px-0">
          <img draggable="false" src="<?php echo $zeplin ?>/543.jpg"
            srcset="<?php echo $zeplin ?>/543@2x.jpg 2x, <?php echo $zeplin ?>/543@3x.jpg 3x">
        </div>
      </div>
      <div class="row pink pb-lg-0 d-none d-md-flex">
        <div class="col-12 col-lg-6 imgCol">
          <img class="d-none d-lg-block" draggable="false"
            src="<?php echo $zeplin ?>/227.png"
            srcset="<?php echo $zeplin ?>/227@2x.png 2x, <?php echo $zeplin ?>/227@3x.png 3x">
          <img class="d-block d-lg-none" draggable="false"
            src="<?php echo $zeplin ?>/243.png"
            srcset="<?php echo $zeplin ?>/243@2x.png 2x, <?php echo $zeplin ?>/243@3x.png 3x">
        </div>
        <div class="col-12 col-lg-6 contentCol">
          <h1>
            나오는 음료 양을<br />
            조절할 수 있는 마개
          </h1>
          <p>
            마개 안쪽에 음료가 나오는 양을 3단계로 조절할 수 있는 <br />
            토출량 조절판이 있어 아이가 음료를 흘리지 않고 마실 수 있게 <br />
            도와준답니다.
          </p>
        </div>
      </div>
      <div class="row pink d-flex d-md-none">
        <img draggable="false"
          src="<?php echo $zeplin ?>/tkff280-sec05-01.png"
          srcset="<?php echo $zeplin ?>/tkff280-sec05-01@2x.png 2x, <?php echo $zeplin ?>/tkff280-sec05-01@3x.png 3x">
      </div>
      <?php echo detail($arg = 'three') ?>
    </div>
  </div>
  <div class="section section6">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-5 imgCol">
          <img class="d-none d-lg-block" draggable="false"
            src="<?php echo $zeplin ?>/3006.png"
            srcset="<?php echo $zeplin ?>/3006@2x.png 2x, <?php echo $zeplin ?>/3006@3x.png 3x">
          <img class="d-block d-lg-none" draggable="false"
            src="<?php echo $zeplin ?>/30061.png"
            srcset="<?php echo $zeplin ?>/30061@2x.png 2x, <?php echo $zeplin ?>/30061@3x.png 3x">
        </div>
        <div class="col-12 col-lg-7 contentCol">
          <div class="title">
            원터치 오픈 버튼
          </div>
          <p>
            아이가 혼자서도 쉽게 열고 마실 수 있도록<br class="d-block d-lg-none" /> 원터치 오픈 방식으로 바뀌었어요.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-7 contentCol align-items-lg-end text-lg-end">
          <div class="title">
            새지 않아 안심
          </div>
          <p>
            뚜껑을 닫으면 내용물이 새지 않아<br 
class="d-block d-lg-none" /> 물샘 걱정 없이 외출할 수 있어요.
          </p>
        </div>
        <div class="col-12 col-lg-5 imgCol">
          <img class="d-none d-lg-block" draggable="false"
            src="<?php echo $zeplin ?>/3007.png"
            srcset="<?php echo $zeplin ?>/3007@2x.png 2x, <?php echo $zeplin ?>/3007@3x.png 3x">
          <img class="d-block d-lg-none" draggable="false"
            src="<?php echo $zeplin ?>/30071.png"
            srcset="<?php echo $zeplin ?>/30071@2x.png 2x, <?php echo $zeplin ?>/30071@3x.png 3x">
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-5 imgCol">
          <img class="d-none d-lg-block" draggable="false"
            src="<?php echo $zeplin ?>/30084.png"
            srcset="<?php echo $zeplin ?>/30084@2x.png 2x, <?php echo $zeplin ?>/30084@3x.png 3x">
          <img class="d-block d-lg-none" draggable="false"
            src="<?php echo $zeplin ?>/3008.png"
            srcset="<?php echo $zeplin ?>/3008@2x.png 2x, <?php echo $zeplin ?>/3008@3x.png 3x">
        </div>
        <div class="col-12 col-lg-7 contentCol">
          <div class="title">
            취향에 맞춰 사용하는 그립
          </div>
          <p>
            바디링, 손잡이 두 가지 그립을<br class="d-block d-lg-none" /> 취향에 따라 자유롭게 사용해보세요.
          </p>
          <ul class="list">
            <li>
              링 타입으로 부피를 최소화해 휴대성이 뛰어나요.
            </li>
            <li>
              손잡이가 돌아가지 않고<br class="d-block d-lg-none" /> 아이가 쉽게 잡을 수 있어<br class="d-block d-lg-none" /> 텀블러을<br
                class="d-none d-lg-block" />
              떨어트릴 염려 없이<br class="d-block d-lg-none" /> 편하게 사용할 수 있어요.
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-7 contentCol align-items-lg-end text-lg-end">
          <div class="title">텀블러를 보호하는 실리콘 바닥 커버</div>
          <p>
            제품이 미끄러지지 않게 막아주고,<br class="d-block d-lg-none" /> 가벼운 충격으로부터 제품을 보호해 줘요.
          </p>
        </div>
        <div class="col-12 col-lg-5 imgCol">
          <img draggable="false" src="<?php echo $zeplin ?>/3009.png"
            srcset="<?php echo $zeplin ?>/3009@2x.png 2x, <?php echo $zeplin ?>/3009@3x.png 3x">
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-lg-5 imgCol">
          <img draggable="false" src="<?php echo $zeplin ?>/3010.png"
            srcset="<?php echo $zeplin ?>/3010@2x.png 2x, <?php echo $zeplin ?>/3010@3x.png 3x">
        </div>
        <div class="col-12 col-lg-7 contentCol">
          <div class="title">분리 가능한 음용구</div>
          <p>
            음용구 패킹이 작아져 마개에서 분리가 쉬워졌어요. <br />
            간단하게 분리되어 구석구석 손쉽게 세척할 수 있고 마개는 식기세척기에 사용할 수 있어요.
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-lg-7 contentCol align-items-lg-end text-lg-end">
          <div class="title">
            진공단열 스테인리스 이중구조
          </div>
          <p>
            스테인리스 이중구조로 음료를 안전하고 신선하게 보관이 가능해요.
          </p>
        </div>
        <div class="col-12 col-lg-5 imgCol">
          <img class="d-none d-lg-block" draggable="false"
            src="<?php echo $zeplin ?>/3011.png"
            srcset="<?php echo $zeplin ?>/3011@2x.png 2x, <?php echo $zeplin ?>/3011@3x.png 3x">
          <img class="d-block d-lg-none" draggable="false"
            src="<?php echo $zeplin ?>/302012.png"
            srcset="<?php echo $zeplin ?>/302012@2x.png 2x, <?php echo $zeplin ?>/302012@3x.png 3x">
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-lg-5 imgCol">
          <img draggable="false" src="<?php echo $zeplin ?>/3012.png"
            srcset="<?php echo $zeplin ?>/3012@2x.png 2x, <?php echo $zeplin ?>/3012@3x.png 3x">
        </div>
        <div class="col-12 col-lg-7 contentCol">
          <div class="title">안전한 소재로 안심</div>
          <p>
            본체 내외 병은 모두 SUS304 레벨의 스테인리스를 사용하고 있으며,<br class="d-none d-lg-block" />
            모든 재질은 식품위생법에서 정한 유해물질 검사에서 합격한 재질로 안전하게 사용할 수 있어요.
          </p>
        </div>
      </div>

    </div>
  </div>
  <div class="section section7">
    <div class="container-fluid px-0">
      <div class="row mx-0">
        <div class="col-12 col-lg-6 px-0">
          <img draggable="false" src="<?php echo $zeplin ?>/883.jpg"
            srcset="<?php echo $zeplin ?>/883@2x.jpg 2x, <?php echo $zeplin ?>/883@3x.jpg 3x">
        </div>
        <div class="col-12 col-lg-6 px-0">
          <img draggable="false" src="<?php echo $zeplin ?>/893.jpg"
            srcset="<?php echo $zeplin ?>/893@2x.jpg 2x, <?php echo $zeplin ?>/893@3x.jpg 3x">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="header">
            <h2>
              경제적으로<br />
              사용할 수 있어요
            </h2>
            <p>
              푸고 소모품은 별도 구매가 가능합니다.<br />
              구성품을 잃어버렸거나,<br class="d-block d-lg-none" /> 소모품 사용 주기가 끝났다면,<br />
              소모품만 교체하여 푸고 사용 주기를 늘려보세요.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="body">
            <div class="item"
              style="background-image: url(<?php echo $zeplin ?>/182@3x.png)">
              <span>손잡이</span>
            </div>
            <div class="item"
              style="background-image: url(<?php echo $zeplin ?>/183@3x.png)">
              <span>바디링</span>
            </div>
            <div class="item"
              style="background-image: url(<?php echo $zeplin ?>/184@3x.png)">
              <span>바닥커버</span>
            </div>
            <div class="item"
              style="background-image: url(<?php echo $zeplin ?>/213@3x.png)">
              <span>패킹세트</span>
            </div>
            <div class="item"
              style="background-image: url(<?php echo $zeplin ?>/212@3x.png)">
              <span>텀블러타입 마개</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php echo inspection() ?>
</main>
<?php
get_footer();
