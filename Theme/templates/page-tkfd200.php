<?php

/**
 * Template Name: TKFD-200
 * Template Post Type: page
 */

$zeplin = get_home_url() . '/wp-content/uploads/zeplin';
get_header();
include('product/hero.php');
include('product/why.php');
include('product/inspection.php');
include('product/detail.php');
?>
<main class="pageTemplate productLending tkfd200">
  <?php get_template_part('template-parts/header/mobileProduct'); ?>
  <div class="section main">
    <div class="mainSectionImgWrap">
      <img class="d-none d-lg-block" draggable="false"
        src="<?php echo $zeplin ?>/tkfd-200-all03.jpg"
        srcset="<?php echo $zeplin ?>/tkfd-200-all03@2x.jpg 2x, <?php echo $zeplin ?>/tkfd-200-all03@3x.jpg 3x">
      <img class="pdimg_mobile d-none d-sm-block d-lg-none" draggable="false"
        src="<?php echo $zeplin ?>/2462.jpg"
        srcset="<?php echo $zeplin ?>/2462@2x.jpg 2x, <?php echo $zeplin ?>/2462@3x.jpg 3x">
      <img class="pdimg_mobile d-block d-sm-none" draggable="false"
        src="<?php echo $zeplin ?>/17422.jpg"
        srcset="<?php echo $zeplin ?>/17422@2x.jpg 2x, <?php echo $zeplin ?>/17422@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="imgWrap">
        <img draggable="false" src="<?php echo $zeplin ?>/2724.png"
          srcset="<?php echo $zeplin ?>/2724@2x.png 2x, <?php echo $zeplin ?>/2724@3x.png 3x">
      </div>
      <div class="body">
        <h1>두 가지 타입으로 변신</h1>
        <strong>푸고 프리미엄 뉴트럴 시리즈<br class="d-block d-xl-none" /> 2WAY 베이비보틀</strong>
        <p><?php echo get_the_title() ?>
        </p>
      </div>
    </div>
  </div>
  <?php get_template_part('template-parts/header/product') ?>
  <div class="section section1 mb-5 d-none d-md-block">
    <div class="container">
      <div class="header">
        <h1>COLOR · SIZE</h1>
        <p>색상 및 용량</p>
      </div>
      <img class="d-none d-lg-block" draggable="false"
        src="<?php echo $zeplin ?>/3024.png"
        srcset="<?php echo $zeplin ?>/3024@2x.png 2x, <?php echo $zeplin ?>/3024@3x.png 3x">
      <!-- mobile -->
      <img class="d-block d-lg-none" draggable="false"
        src="<?php echo $zeplin ?>/29202.png"
        srcset="<?php echo $zeplin ?>/29202@2x.png 2x, <?php echo $zeplin ?>/29202@3x.png 3x">
      <img class="d-block d-lg-none" draggable="false"
        src="<?php echo $zeplin ?>/176.png"
        srcset="<?php echo $zeplin ?>/176@2x.png 2x, <?php echo $zeplin ?>/176@3x.png 3x">
      <img class="d-block d-lg-none" draggable="false"
        src="<?php echo $zeplin ?>/2924.png"
        srcset="<?php echo $zeplin ?>/2924@2x.png 2x, <?php echo $zeplin ?>/2924@3x.png 3x">
      <img class="d-block d-lg-none" draggable="false"
        src="<?php echo $zeplin ?>/1752.png"
        srcset="<?php echo $zeplin ?>/1752@2x.png 2x, <?php echo $zeplin ?>/1752@3x.png 3x">
      <!-- 공통 -->
      <img class="d-none d-lg-block" draggable="false"
        src="<?php echo $zeplin ?>/188.png"
        srcset="<?php echo $zeplin ?>/188@2x.png 2x, <?php echo $zeplin ?>/188@3x.png 3x">
    </div>
  </div>
  <div class="section section1 d-block d-md-none">
    <div class="container">
      <img class="tkfd200-sec01-01" draggable="false"
        src="<?php echo $zeplin ?>/tkfd200-sec01-01.png"
        srcset="<?php echo $zeplin ?>/tkfd200-sec01-01@2x.png 2x, <?php echo $zeplin ?>/tkfd200-sec01-01@3x.png 3x">
      <img class="tkfd200-sec01-02" draggable="false"
        src="<?php echo $zeplin ?>/tkfd200-sec01-02.png"
        srcset="<?php echo $zeplin ?>/tkfd200-sec01-02@2x.png 2x, <?php echo $zeplin ?>/tkfd200-sec01-02@3x.png 3x">
    </div>
  </div>
  <?php echo sectionHero(); ?>
  <div class="section section3">
    <div class="container">
      <div class="row">
        <div class="col-6 px-0">
          <img draggable="false"
            src="<?php echo $zeplin ?>/tkfd-200-bg.jpg"
            srcset="<?php echo $zeplin ?>/tkfd-200-bg@2x.jpg 2x, <?php echo $zeplin ?>/tkfd-200-bg@3x.jpg 3x">
        </div>
        <div class="col-6 px-0">
          <img draggable="false"
            src="<?php echo $zeplin ?>/tkfd-200-all2.jpg"
            srcset="<?php echo $zeplin ?>/tkfd-200-all2@2x.jpg 2x, <?php echo $zeplin ?>/tkfd-200-all2@3x.jpg 3x">
        </div>
      </div>
    </div>
  </div>
  <?php echo why($arg = array('img' => '3030')); ?>
  <div class="section section5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="header">
            <h1>
              상상력과 오감을 자극하는<br />
              자연스러운 디자인
            </h1>
            <p>
              지구의 자연을 연상시키는 얼씨톤의 컬러를<br class="d-block" /> 포인트로 사용하고 마개와 버튼 모양을 변경하여 <br />
              아이들이 직접 손으로 만지며 창의력을 높일 수 있는<br class="d-block" /> NEW 디자인으로 만들었어요.<br />
              꽃, 과일, 구름 등 자연을 닮은 그래픽에 표정을 넣어<br class="d-block" /> 아이와 눈 맞춤 하는 푸고를 만나보세요.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 px-0">
          <img draggable="false" src="<?php echo $zeplin ?>/545.jpg"
            srcset="<?php echo $zeplin ?>/545@2x.jpg 2x, <?php echo $zeplin ?>/545@3x.jpg 3x">
        </div>
      </div>
      <div class="row pink d-none d-md-flex">
        <div class="col-12 col-lg-6 imgCol">
          <img class="d-none d-lg-block" draggable="false"
            src="<?php echo $zeplin ?>/3042.png"
            srcset="<?php echo $zeplin ?>/3042@2x.png 2x, <?php echo $zeplin ?>/3042@3x.png 3x">
          <img class="d-block d-lg-none" draggable="false"
            src="<?php echo $zeplin ?>/233.png"
            srcset="<?php echo $zeplin ?>/233@2x.png 2x, <?php echo $zeplin ?>/233@3x.png 3x">
        </div>
        <div class="col-12 col-lg-6 contentCol">
          <h1>
            위생적으로 사용가능한<br />
            오염방지 뚜껑
          </h1>
          <p>
            시피컵에는 오염방지 뚜껑이 있어 먼지가 묻지 않아요.<br />
            가방 안에 넣어도 먼지를 막아주니 안심할 수 있어요.
          </p>
        </div>
      </div>
      <div class="row pink d-flex d-md-none">
        <img draggable="false"
          src="<?php echo $zeplin ?>/tkfd200-sec05-01.png"
          srcset="<?php echo $zeplin ?>/tkfd200-sec05-01@2x.png 2x, <?php echo $zeplin ?>/tkfd200-sec05-01@3x.png 3x">
      </div>
      <div class="row two pb-lg-0 d-none d-md-flex">
        <div class="col-12 col-lg-6 imgCol">
          <img draggable="false" src="<?php echo $zeplin ?>/226.png"
            srcset="<?php echo $zeplin ?>/226@2x.png 2x, <?php echo $zeplin ?>/226@3x.png 3x">
        </div>
        <div class="col-12 col-lg-6 contentCol">
          <h1>
            확 달라진 빨대 구조
          </h1>
          <p>
            빨대컵 세척을 더욱더 손쉽게 개선했어요. <br />
            빨대 부품 가짓수를 줄여 단순한 구조로 간편하게 세척할 수 있고<br />
            패킹도 더욱 쉽게 끼울 수 있어 편리해요.<br />
            또한 마개는 식기세척기에 사용할 수 있어요.
          </p>
        </div>
      </div>
      <div class="row two pb-lg-0 d-flex d-md-none">
        <img draggable="false"
          src="<?php echo $zeplin ?>/tkfd200-sec05-02.png"
          srcset="<?php echo $zeplin ?>/tkfd200-sec05-02@2x.png 2x, <?php echo $zeplin ?>/tkfd200-sec05-02@3x.png 3x">
      </div>
      <?php echo detail($arg = 'three') ?>
    </div>
  </div>
  <div class="section section6">
    <div class="container">

      <div class="row">
        <div class="col-12 col-lg-7 contentCol align-items-lg-end text-lg-end">
          <div class="title align_right">
            시피컵, 빨대컵 두 가지 타입으로<br class="d-block d-lg-none" /> 변신하는<br class="d-none d-lg-block" />
            2WAY BABY BOTTLE
          </div>
          <p>
            아이의 성장 단계에 맞춰 마개만 바꾸면<br class="d-block d-lg-none" /> 시피컵과 빨대컵 두 가지로 사용할 수 있어요.
          </p>
          <ul class="list tkfd200 end">
            <li>
              부드러운 스파우트로<br class="d-block d-lg-none" /> 아이의 잇몸에 자극을 최소화해요.<br />
              오염방지 뚜껑이 있어 음용구가 더러워지거나<br class="d-block d-lg-none" /> 먼지가 묻는 것을 막아줘요.
            </li>
            <li>
              부드러운 빨대는 내구성이 강해<br class="d-block d-lg-none" /> 아이가 마시기 쉽게 만들었어요.<br />
              뚜껑만 열어도 투명한 창으로<br class="d-block d-lg-none" /> 음료의 남은 양을 확인할 수 있어요.
            </li>
          </ul>
        </div>
        <div class="col-12 col-lg-5 imgCol">
          <img draggable="false" src="<?php echo $zeplin ?>/2910.png"
            srcset="<?php echo $zeplin ?>/2910@2x.png 2x, <?php echo $zeplin ?>/2910@3x.png 3x">
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-lg-5 imgCol">
          <img draggable="false" src="<?php echo $zeplin ?>/2911.png"
            srcset="<?php echo $zeplin ?>/2911@2x.png 2x, <?php echo $zeplin ?>/2911@3x.png 3x">
        </div>
        <div class="col-12 col-lg-7 contentCol">
          <div class="title">
            새지 않아 안심
          </div>
          <p>
            마개에 패킹이 있어 뚜껑을 닫으면 물이 새는 것을 방지할 수 있어요.
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-lg-7 contentCol align-items-lg-end text-lg-end">
          <div class="title">
            원터치 더블액션 버튼
          </div>
          <p>
            한 손가락으로 버튼을 누르면 열리는<br class="d-block d-lg-none" /> 쉬운 개폐 방식으로 뚜껑이 열리면서<br />
            빨대를 통해 물이 뿜어져 나오는 것도 막아줘요.
          </p>
        </div>
        <div class="col-12 col-lg-5 imgCol">
          <img draggable="false" src="<?php echo $zeplin ?>/2912.png"
            srcset="<?php echo $zeplin ?>/2912@2x.png 2x, <?php echo $zeplin ?>/2912@3x.png 3x">
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-lg-5 imgCol">
          <img draggable="false" src="<?php echo $zeplin ?>/2913.png"
            srcset="<?php echo $zeplin ?>/2913@2x.png 2x, <?php echo $zeplin ?>/2913@3x.png 3x">
        </div>
        <div class="col-12 col-lg-7 contentCol">
          <div class="title">
            탈부착 가능한 손잡이
          </div>
          <p>
            손잡이가 돌아가지 않아 아이가 쉽게 마실 수 있어요.<br />
            바디링으로 바꿔 끼우면 부피를 줄일 수 있답니다.<br />
            (바디링 별매)
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-lg-7 contentCol align-items-lg-end text-lg-end">
          <div class="title">
            베이비보틀을 보호하는<br class="d-block d-lg-none" /> 실리콘 바닥 커버
          </div>
          <p>
            제품이 미끄러지지 않게 막아주고,<br class="d-block d-lg-none" /> 가벼운 충격으로부터 제품을 보호해 줘요.
          </p>
        </div>
        <div class="col-12 col-lg-5 imgCol">
          <img draggable="false" src="<?php echo $zeplin ?>/2914.png"
            srcset="<?php echo $zeplin ?>/2914@2x.png 2x, <?php echo $zeplin ?>/2914@3x.png 3x">
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-lg-5 imgCol">
          <img draggable="false" src="<?php echo $zeplin ?>/2915.png"
            srcset="<?php echo $zeplin ?>/2915@2x.png 2x, <?php echo $zeplin ?>/2915@3x.png 3x">
        </div>
        <div class="col-12 col-lg-7 contentCol">
          <div class="title">
            진공단열 스테인리스 이중구조
          </div>
          <p>
            진공단열 보온병 구조로<br class="d-block d-lg-none" /> 내용물을 신선하게 보관할 수 있어요.
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-lg-7 contentCol align-items-lg-end text-lg-end">
          <div class="title">
            안전한 소재로 안심
          </div>
          <p>
            본체 내외 병은 모두 SUS304 레벨의 스테인리스를 사용하고 있으며, <br />
            모든 재질은 식품위생법에서 정한 유해물질 검사에서 합격한 <br class="d-block d-lg-none" />재질로 안전하게 사용할 수 있어요.
          </p>
        </div>
        <div class="col-12 col-lg-5 imgCol">
          <img draggable="false" src="<?php echo $zeplin ?>/2916.png"
            srcset="<?php echo $zeplin ?>/2916@2x.png 2x, <?php echo $zeplin ?>/2916@3x.png 3x">
        </div>
      </div>

    </div>
  </div>
  <div class="section section7">
    <div class="container-fluid px-0">
      <div class="row mx-0">
        <div class="col-12 col-lg-6 px-0">
          <img draggable="false" src="<?php echo $zeplin ?>/885.jpg"
            srcset="<?php echo $zeplin ?>/885@2x.jpg 2x, <?php echo $zeplin ?>/885@3x.jpg 3x">
        </div>
        <div class="col-12 col-lg-6 px-0">
          <img draggable="false" src="<?php echo $zeplin ?>/895.jpg"
            srcset="<?php echo $zeplin ?>/895@2x.jpg 2x, <?php echo $zeplin ?>/895@3x.jpg 3x">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
        </div>
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
      <div class="row">
        <div class="col-12">
          <div class="body">
            <div class="item"
              style="background-image: url(<?php echo $zeplin ?>/182@3x.png)">
              <span>손잡이</span>
            </div>
            <div class="item"
              style="background-image: url(<?php echo $zeplin ?>/195@3x.png)">
              <span>바닥 커버</span>
            </div>
            <div class="item"
              style="background-image: url(<?php echo $zeplin ?>/194@3x.png)">
              <span>마개</span>
            </div>
            <div class="item"
              style="background-image: url(<?php echo $zeplin ?>/193@3x.png)">
              <span>빨대세트</span>
            </div>
            <div class="item"
              style="background-image: url(<?php echo $zeplin ?>/192@3x.png)">
              <span>뚜껑커버</span>
            </div>
            <div class="item"
              style="background-image: url(<?php echo $zeplin ?>/191@3x.png)">
              <span>빨대타입 마개</span>
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
