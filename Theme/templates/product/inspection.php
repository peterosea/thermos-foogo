<?php

function inspection()
{
  $zeplin = get_home_url() . '/wp-content/uploads/zeplin';
  return <<<HTML
  <div class="section inspection">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="header">
            <h2>
              써모스의<br />
              품질관리 프로세스
            </h2>
            <p>
              전수검사 2번, 추출검사 2번 실시!<br />
              오래 걸리더라도, <br />
              믿을 수 있는 제품을 만들고 있습니다.
            </p>
          </div>
        </div>
      </div>
      <div class="body d-none d-md-block">
        <ul>
          <li>
            <span>
              스테인리스<br />
              재료
            </span>
          </li>
          <li>
            <span>

              금속 프레스<br />
              가공
            </span>
          </li>
          <li>
            <span>
              진공 열처리
            </span>
          </li>
          <li class="active">
            <span>
              전수검사<br />
              시행
            </span>
          </li>
          <li>
            <span>
              에이징
            </span>
          </li>
          <li class="active">
            <span>
              전수검사<br />
              시행
            </span>
          </li>
          <li>
            <span>
              도장/연마/<br />
              인쇄
            </span>
          </li>
          <li class="active">
            <span>
              추출검사<br />
              시행
            </span>
          </li>
          <li>
            <span>
              조립
            </span>
          </li>
          <li class="active">
            <span>
              추출검사<br />
              시행
            </span>
          </li>
          <li>
            <span>
              제품 출하
            </span>
          </li>
        </ul>
      </div>
      <div class="body d-flex d-md-none">
        <img draggable="false" src="$zeplin/product-process-t.png">
      </div> 
    </div>
  </div>
HTML;
}
