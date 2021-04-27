<?php

function main($arg)
{
  $title = get_the_title();
  $zeplin = get_home_url() . '/wp-content/uploads/zeplin';
  $mainImgName = $arg['main_img']['name'];
  $mainImgFormat = $arg['main_img']['format'];
  return <<<HTML
  <div class="section main">
    <img class="d-none d-lg-block" draggable="false" src="$zeplin/$mainImgName.$mainImgFormat" srcset="$zeplin/$mainImgName@2x.$mainImgFormat 2x, $zeplin/$mainImgName@3x.$mainImgFormat 3x">
    <img class="d-block d-lg-none w-100" draggable="false" src="$zeplin/1742.jpg" srcset="$zeplin/1742@2x.jpg 2x, $zeplin/1742@3x.jpg 3x">
    <div class="container">
      <div class="imgWrap">
        <img draggable="false" src="$zeplin/28183.png" srcset="$zeplin/28183@2x.png 2x, $zeplin/28183@3x.png 3x">
      </div>
      <div class="body">
        <h1>성장 단계에 따른 토출량 조절</h1>
        <strong>푸고 프리미엄 뉴트럴 시리즈 유아용 텀블러</strong>
        <p>$title</p>
      </div>
    </div>
  </div>
HTML;
}