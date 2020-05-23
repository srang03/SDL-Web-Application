<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimun-scale=1.0, width=device-width">
  <title>Document</title>

  <!-- style -->

  <link rel="stylesheet" href="css/labaward.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/theme1.css">


  <!-- web font -->
  <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
  
</head>
<body>
  <div id="wrap">
    <header>
      <?php include "./lib/header.php"; ?>
        <img class="h_line" src="img/line.jpg">
    </header>
    <!-- 회원가입, 로그인, 입회신청서-->


    <div id="cont_nav">
       <?php include "./lib/nav.php"; ?>
    </div>

     <?php include "./lib/nav_media1.php"; ?>
    <!-- 메뉴바, 드롭다운 -->

    <aside>
      <?php include "./lib/aside1.php"; ?>
    </aside>
    <!-- //aside -->

    <section>
      <div class="page_tit">
        <h6>수상 내역</h6>
      </div>
      <div class="page_contents">
        <div class="page_cont_left">
          <img src="img/award1.jpg" class="prof" alt="" />
          <div class="space"></div>
          <img src="img/award2.jpg" class="img2" alt="" />
        </div>
        <div class="page_cont_right">
          <div class="bar1"></div><h5>전국 공학 교육 페스티벌</h5>
          <p>2015년 전국 공학 페스티벌 참석</p>
          <p>2014년 전국 공학 페스티벌 동남권 예선 최우수 수상</p>
          <p>2014년 전국 공학 페스티벌 동남권 본선 참여</p>
          <p>2013년 전국 공학 페스티벌 참석</p>
          <p>2012년 전국 공학 페스티벌 참석</p>
          <br>
          <div class="bar2"></div><h5>Capstone Design 전시회</h5>
          <p>2016년 제5회 Capstone Design 전시회 대상 수상</p>
          <p>2014년 제3회 Capstone Design 전시회 장려 수상</p>
          <p>2013년 제2회 Capstone Design 전시회 동상 수상</p>
          <p>2012년 제1회 Capstone Design 전시회 우수 수상</p>
          <br>
          <div class="bar3"></div><h5>창업동아리 프로그램</h5>
          <p>2015년 스마트폰 기반의 OTP 도어락 시스템</p>
          <p>2014년 스마트폰 기반의 전동자전거</p>
          <p>2014년 smart Bike Conversion kit 시제품 출시 </p>
          <p>2012년 스마트폰을 이용한 보안 프로그램 (PC LOCK System, OTP)</p>
          <br>
          <div class="bar4"></div><h5>2018~ 현재 참여 실적</h5>
          <p>2018.09 ACE+ 우수연구회</p>
          <p>2018.09 상상씨앗 공모전</p>
          <p>2018.11 실전창업 프로젝트</p>
          <p>2018.11 상상실현 페스티벌</p>
          <p>2019.05 학습자가 만드는 학습콘텐츠 (장려상, 우수상)</p>
          <p>2019.06 링크 창업동아리</p>
          <p>2019.06 창업지원단 창업동아리</p>
          <p>2019.06 공학 창업동아리</p>
          <p>2019.06 공학 캡스톤</p>
          <p>2019.09 ACE+ 우수 연구회</p>
          <p>2019.09 포렌식 경진대회 (우수상, 우수상)</p>
          <p>2019.12 학습 동영상 콘텐츠 제작 공모전(금상, 은상)</p>
          <br>
        </div>
      </section>

      <footer>
        <?php include "./lib/footer.php"; ?>
      </footer>
    </div>
    <!-- //wrap -->
  </body>
  </html>