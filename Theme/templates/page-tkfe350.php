<?php

/**
 * Template Name: TKFE-350
 * Template Post Type: page
 */

$zeplin = get_home_url() . '/wp-content/uploads/zeplin';
get_header();
include('product/hero.php');
include('product/why.php');
include('product/inspection.php');
include('product/detail.php');
?>
<main class="pageTemplate productLending tkfe350">
  <?php get_template_part('template-parts/header/mobileProduct'); ?>
  <div class="section main">
    <div class="mainSectionImgWrap">
      <img class="d-none d-xl-block" draggable="false"
        src="<?php echo $zeplin ?>/tkfe-350-all.jpg"
        srcset="<?php echo $zeplin ?>/tkfe-350-all@2x.jpg 2x, <?php echo $zeplin ?>/tkfe-350-all@3x.jpg 3x">
      <img class="d-none d-md-block d-xl-none" draggable="false"
        src="<?php echo $zeplin ?>/246.jpg"
        srcset="<?php echo $zeplin ?>/246@2x.jpg 2x, <?php echo $zeplin ?>/246@3x.jpg 3x">
      <img class="d-block d-md-none w-100" draggable="false"
        src="<?php echo $zeplin ?>/1742.jpg"
        srcset="<?php echo $zeplin ?>/1742@2x.jpg 2x, <?php echo $zeplin ?>/1742@3x.jpg 3x">
    </div>
    <div class="container">
      <div class="imgWrap">
        <img draggable="false" src="<?php echo $zeplin ?>/2818.png"
          srcset="<?php echo $zeplin ?>/2818@2x.png 2x, <?php echo $zeplin ?>/2818@3x.png 3x">
      </div>
      <div class="body">
        <h1>긴 외출에도<br class="d-block d-lg-none" /> 걱정 없는 대용량</h1>
        <strong>푸고 프리미엄 뉴트럴 시리즈<br class="d-block d-lg-none" /> 유아용 빨대컵 350ml</strong>
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
      <img class="d-none d-md-block" draggable="false"
        src="<?php echo $zeplin ?>/3026.png"
        srcset="<?php echo $zeplin ?>/3026@2x.png 2x, <?php echo $zeplin ?>/3026@3x.png 3x">
      <!-- mobile -->
      <img class="d-block d-md-none" draggable="false"
        src="<?php echo $zeplin ?>/3014.png"
        srcset="<?php echo $zeplin ?>/3014@2x.png 2x, <?php echo $zeplin ?>/3014@3x.png 3x">
      <img class="d-block d-md-none" draggable="false"
        src="<?php echo $zeplin ?>/221.png"
        srcset="<?php echo $zeplin ?>/221@2x.png 2x, <?php echo $zeplin ?>/221@3x.png 3x">
      <!-- 공통 -->
      <img class="d-none d-md-block" draggable="false"
        src="<?php echo $zeplin ?>/29311.png"
        srcset="<?php echo $zeplin ?>/29311@2x.png 2x, <?php echo $zeplin ?>/29311@3x.png 3x">
    </div>
  </div>
  <div class="section section1 d-block d-md-none">
    <div class="container">
      <img class="tkfe350-sec01-01" draggable="false"
        src="<?php echo $zeplin ?>/tkfe350-sec01-01.png"
        srcset="<?php echo $zeplin ?>/tkfe350-sec01-01@2x.png 2x, <?php echo $zeplin ?>/tkfe350-sec01-01@3x.png 3x">
      <img class="tkfe350-sec01-02" draggable="false"
        src="<?php echo $zeplin ?>/tkfe350-sec01-02.png"
        srcset="<?php echo $zeplin ?>/tkfe350-sec01-02@2x.png 2x, <?php echo $zeplin ?>/tkfe350-sec01-02@3x.png 3x">
      <img class="tkfe350-sec01-03" draggable="false"
        src="<?php echo $zeplin ?>/tkfe350-sec01-03.png"
        srcset="<?php echo $zeplin ?>/tkfe350-sec01-03@2x.png 2x, <?php echo $zeplin ?>/tkfe350-sec01-03@3x.png 3x">
    </div>
  </div>
  <?php echo sectionHero(); ?>
  <div class="section section3">
    <div class="container px-0">
      <img draggable="false" src="<?php echo $zeplin ?>/96.jpg"
        srcset="<?php echo $zeplin ?>/96@2x.jpg 2x, <?php echo $zeplin ?>/96@3x.jpg 3x">
      <img draggable="false"
        src="<?php echo $zeplin ?>/tkfe-350-all-2.jpg"
        srcset="<?php echo $zeplin ?>/tkfe-350-all-2@2x.jpg 2x, <?php echo $zeplin ?>/tkfe-350-all-2@3x.jpg 3x">
    </div>
  </div>
  <?php echo why($arg = array('img' => '3029')); ?>
  <?php include_once('product/design_phrase.php'); ?>
  <div class="section section5">
    <div class="container">
      <div class="row">
        <div class="col-12 px-0">
          <img draggable="false" src="<?php echo $zeplin ?>/54.jpg"
            srcset="<?php echo $zeplin ?>/54@2x.jpg 2x, <?php echo $zeplin ?>/54@3x.jpg 3x">
        </div>
      </div>
      <div class="row pink d-none d-md-flex">
        <div class="col-12 col-lg-6 imgCol">
          <img draggable="false" src="<?php echo $zeplin ?>/224.png"
            srcset="<?php echo $zeplin ?>/224@2x.png 2x, <?php echo $zeplin ?>/224@3x.png 3x">
        </div>
        <div class="col-12 col-lg-6 contentCol">
          <h1>
            긴 외출에도<br />
            충분한 대용량 빨대컵
          </h1>
          <p>
            큰 아이를 위해 사이즈를 키웠어요. 350ml 충분한 용량으로<br />
            물을 많이 마시는 아이에게 잘 맞아요.
          </p>
        </div>
      </div>
      <div class="row pink d-flex d-md-none">
        <img draggable="false"
          src="<?php echo $zeplin ?>/tkfe350-sec05-01.png"
          srcset="<?php echo $zeplin ?>/tkfe350-sec05-01@2x.png 2x, <?php echo $zeplin ?>/tkfe350-sec05-01@3x.png 3x">
      </div>
      <div class="row two d-none d-md-flex">
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
      <div class="row two d-flex d-md-none">
        <img draggable="false"
          src="<?php echo $zeplin ?>/tkfe350-sec05-02.png"
          srcset="<?php echo $zeplin ?>/tkfe350-sec05-02@2x.png 2x, <?php echo $zeplin ?>/tkfe350-sec05-02@3x.png 3x">
      </div>
      <?php echo detail($arg = 'three') ?>
    </div>
  </div>
  <div class="section section6">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-7 contentCol align-items-lg-end text-lg-end">
          <div class="title">
            부드러운 소재의 빨대
          </div>
          <p>
            고품질 실리콘 소재로<br class="d-block d-lg-none" /> 아이가 빨기에 부드럽고<br class="d-block d-lg-none" /> 씹어도 잘 끊어지지 않아요.
          </p>
        </div>
        <div class="col-12 col-lg-5 imgCol">
          <img class="d-none d-lg-block" draggable="false"
            src="<?php echo $zeplin ?>/2969.png"
            srcset="<?php echo $zeplin ?>/2969@2x.png 2x, <?php echo $zeplin ?>/2969@3x.png 3x">
          <img class="d-block d-lg-none" draggable="false"
            src="<?php echo $zeplin ?>/tkfe350-2994.png"
            srcset="<?php echo $zeplin ?>/tkfe350-2994@2x.png 2x, <?php echo $zeplin ?>/tkfe350-2994@3x.png 3x">
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-5 imgCol">
          <img class="d-none d-lg-block" draggable="false"
            src="<?php echo $zeplin ?>/3035.png"
            srcset="<?php echo $zeplin ?>/3035@2x.png 2x, <?php echo $zeplin ?>/3035@3x.png 3x">
          <img class="d-block d-lg-none" draggable="false"
            src="<?php echo $zeplin ?>/tkfe350-308.png"
            srcset="<?php echo $zeplin ?>/tkfe350-308@2x.png 2x, <?php echo $zeplin ?>/tkfe350-308@3x.png 3x">
        </div>
        <div class="col-12 col-lg-7 contentCol">
          <div class="title">
            원터치 더블액션 버튼
          </div>
          <p>
            한 손가락으로 버튼을 누르면 열리는<br class="d-block d-lg-none" /> 쉬운 개폐 방식으로 뚜껑이 열리면서<br />
            빨대를 통해 물이 뿜어져 나오는 것도 막아줘요.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-7 contentCol align-items-lg-end text-lg-end">
          <div class="title">
            새지 않아 안심
          </div>
          <p>
            뚜껑을 닫으면 내용물이 새지 않아<br class="d-block d-lg-none" /> 물샘 걱정 없이 외출할 수 있어요.
          </p>
        </div>
        <div class="col-12 col-lg-5 imgCol">

          <img class="d-none d-lg-block" draggable="false"
            src="<?php echo $zeplin ?>/29711.png"
            srcset="<?php echo $zeplin ?>/29711@2x.png 2x, <?php echo $zeplin ?>/29711@3x.png 3x">
          <img class="d-block d-lg-none" draggable="false"
            src="<?php echo $zeplin ?>/tkfe350-299.png"
            srcset="<?php echo $zeplin ?>/tkfe350-299@2x.png 2x, <?php echo $zeplin ?>/tkfe350-299@3x.png 3x">
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-5 imgCol">
          <img class="d-none d-lg-block" draggable="false"
            src="<?php echo $zeplin ?>/3037.png"
            srcset="<?php echo $zeplin ?>/3037@2x.png 2x, <?php echo $zeplin ?>/3037@3x.png 3x">
          <img class="d-block d-lg-none" draggable="false"
            src="<?php echo $zeplin ?>/tkfe350-293.png"
            srcset="<?php echo $zeplin ?>/tkfe350-293@2x.png 2x, <?php echo $zeplin ?>/tkfe350-293@3x.png 3x">
        </div>
        <div class="col-12 col-lg-7 contentCol">
          <div class="title">안이 보이는 마개</div>
          <p>
            뚜껑만 열어도 투명한 창으로<br class="d-block d-lg-none" /> 음료의 남은 양을 확인할 수 있어요.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-7 contentCol align-items-lg-end text-lg-end">
          <div class="title">
            취향에 맞춰 사용하는 그립
          </div>
          <p>
            바디링, 손잡이 두 가지 그립을<br class="d-block d-lg-none" /> 취향에 따라 자유롭게 사용해보세요.
          </p>
          <ul class="list end">
            <li>
              링 타입으로 부피를 최소화해 휴대성이 뛰어나요.
            </li>
            <li>
              손잡이가 돌아가지 않고<br class="d-block d-lg-none" /> 아이가 쉽게 잡을 수 있어<br class="d-block d-lg-none" /> 빨대컵을<br
                class="d-none d-lg-block" />
              떨어트릴 염려 없이<br class="d-block d-lg-none" /> 편하게 사용할 수 있어요.
            </li>
          </ul>
        </div>
        <div class="col-12 col-lg-5 imgCol">
          <img class="d-none d-lg-block" draggable="false"
            src="<?php echo $zeplin ?>/3038.png"
            srcset="<?php echo $zeplin ?>/3038@2x.png 2x, <?php echo $zeplin ?>/3038@3x.png 3x">
          <img class="d-block d-lg-none" draggable="false"
            src="<?php echo $zeplin ?>/tkfe350-294.png"
            srcset="<?php echo $zeplin ?>/tkfe350-294@2x.png 2x, <?php echo $zeplin ?>/tkfe350-294@3x.png 3x">
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-lg-5 imgCol">

          <img class="d-none d-lg-block" draggable="false"
            src="<?php echo $zeplin ?>/3039.png"
            srcset="<?php echo $zeplin ?>/3039@2x.png 2x, <?php echo $zeplin ?>/3039@3x.png 3x">
          <img class="d-block d-lg-none" draggable="false"
            src="<?php echo $zeplin ?>/30391.png"
            srcset="<?php echo $zeplin ?>/30391@2x.png 2x, <?php echo $zeplin ?>/30391@3x.png 3x">
        </div>
        <div class="col-12 col-lg-7 contentCol">
          <div class="title">빨대컵을 보호하는 실리콘 바닥 커버</div>
          <p>
            제품이 미끄러지지 않게 막아주고,<br class="d-block d-lg-none" /> 가벼운 충격으로부터 제품을 보호해줘요.
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-lg-7 contentCol align-items-lg-end text-lg-end">
          <div class="title">
            진공단열 스테인리스 이중구조
          </div>
          <p>
            스테인리스 이중구조로<br class="d-block d-lg-none" /> 음료를 안전하고 신선하게 보관이 가능해요.
          </p>
        </div>
        <div class="col-12 col-lg-5 imgCol">

          <img class="d-none d-lg-block" draggable="false"
            src="<?php echo $zeplin ?>/29741.png"
            srcset="<?php echo $zeplin ?>/29741@2x.png 2x, <?php echo $zeplin ?>/29741@3x.png 3x">
          <img class="d-block d-lg-none" draggable="false"
            src="<?php echo $zeplin ?>/302011.png"
            srcset="<?php echo $zeplin ?>/302011@2x.png 2x, <?php echo $zeplin ?>/302011@3x.png 3x">
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-lg-5 imgCol">
          <img class="d-none d-lg-block" draggable="false"
            src="<?php echo $zeplin ?>/3041.png"
            srcset="<?php echo $zeplin ?>/3041@2x.png 2x, <?php echo $zeplin ?>/3041@3x.png 3x">
          <img class="d-block d-lg-none" draggable="false"
            src="<?php echo $zeplin ?>/tkfe350-288.png"
            srcset="<?php echo $zeplin ?>/tkfe350-288@2x.png 2x, <?php echo $zeplin ?>/tkfe350-288@3x.png 3x">
        </div>
        <div class="col-12 col-lg-7 contentCol">
          <div class="title">안전한 소재로 안심</div>
          <p>

            본체 내외 병은 모두 SUS304 레벨의 스테인리스를<br class="d-block d-lg-none" /> 사용하고 있으며,<br class="d-none d-lg-block" />
            모든 재질은 식품위생법에서 정한<br class="d-block d-lg-none" /> 유해물질 검사에서 합격한 재질로 안전하게<br class="d-block d-lg-none" /> 사용할 수 있어요.
          </p>
        </div>
      </div>

    </div>
  </div>
  <div class="section section7">
    <div class="container-fluid px-0">
      <div class="row mx-0">
        <div class="col-12 col-lg-6 px-0">
          <img draggable="false" src="<?php echo $zeplin ?>/88.jpg"
            srcset="<?php echo $zeplin ?>/88@2x.jpg 2x, <?php echo $zeplin ?>/88@3x.jpg 3x">
        </div>
        <div class="col-12 col-lg-6 px-0">
          <img draggable="false" src="<?php echo $zeplin ?>/89.jpg"
            srcset="<?php echo $zeplin ?>/89@2x.jpg 2x, <?php echo $zeplin ?>/89@3x.jpg 3x">
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
              style="background-image: url(<?php echo $zeplin ?>/185@3x.png)">
              <span>빨대세트</span>
            </div>
            <div class="item"
              style="background-image: url(<?php echo $zeplin ?>/186@3x.png)">
              <span>마개패킹</span>
            </div>
            <div class="item"
              style="background-image: url(<?php echo $zeplin ?>/187@3x.png)">
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
