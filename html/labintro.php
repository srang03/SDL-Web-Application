<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimun-scale=1.0, width=device-width">

  <title>SDL HOMEPAGE</title>

  <!-- style -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/labintro.css">
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
    <!-- 회원가입, 로그인, 입회신청서 -->

    <div id="cont_nav">
      <?php include "./lib/nav.php"; ?> 
    </div>
        <?php include "./lib/nav_media1.php"; ?>
    <!-- //메뉴바, 드롭다운 -->

    <aside>
      <?php include "./lib/aside1.php"; ?>
    </aside>
    <!-- //aside -->

   <section>
      <div class="page_tit">
        <h6>연구실 소개</h6>
      </div>
      <div class="page_contents">
        <div class="page_cont_left">
          <img src="img/prof.jpg" class="prof" alt="" />
          <div class="space"></div>
          <img src="img/img2.jpg" class="img2" alt="" />
        </div>
        <div class="page_cont_right">
          <div class="bar1"></div><h5>지도교수</h5>
          <p>장원태 교수님</p>
          <br>
          <div class="bar2"></div><h5>위치</h5>
          <p>UIT관 205호</p>
          <br>
          <div class="bar3"></div><h5>연구분야</h5>
          <p>Mobile Programming(Android, IOS Application)</p>
          <p>스마트폰 기반의 원격제어&해킹 및 보안 관련 연구</p>
          <p>5G, Block-Chain등 신기술 연구개발 및 세미나</p>
          <p>부산경찰청 연계 ICT봉사단 및 사이버 수사대 참여</p>
          <br>
          <div class="bar4"></div><h5>연구소개</h5>
          <p class="p_sapce">본 연구회는 스마트폰기반의 프로그래밍 및PC &스마트폰 원격제어 시스템,해킹 및 보안 관련 연구회입니다.<br>android와 IOS 스마트폰 어플리케이션 개발과 유•무선 네트워크 통신을 통한 스마트폰(또는PC)을 원격 제어 공격 방법을 이용하거나, 공격 및 방어에 대한 연구를 진행하고 있습니다</p>
          <br>
          <div class="bar5"></div><h5>주요 연구내용</h5>
          <p>스마트폰기반의 어플리케이션개발<br>
           스마트폰을 활용한 원격제어 시스템<br>
           스마트폰 및 PC에 대한 해킹 공격 및 방어 연구<br>
         5G, Block-Chain등 신기술 연구개발 및 세미나</p>
         <br>
         <div class="bar6"></div><h5>졸업생 취업 분야</h5>
         <p>외부 전문가 초청 스마트폰 플렛폼 강의</p>
         <p>KT, Mobile CP, (주)SK네트웍스, 대학원진학 등</p>
       </div>
     </div>
   </section>
   <!-- //section -->

   <footer>
    <?php include "./lib/footer.php"; ?>
   </footer>

</div>
<!-- //wrap -->

</body>
</html>