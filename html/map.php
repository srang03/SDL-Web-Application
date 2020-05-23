<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimun-scale=1.0, width=device-width">

  <!-- style -->

  <link rel="stylesheet" href="css/map.css">
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
    <!-- 메뉴바, 드롭다운 -->

    <aside>
     <?php include "./lib/aside1.php"; ?>
    </aside>
    <!-- //aside -->

    <section>
      <div class="page_tit">
        <h6>오시는 길</h6>
      </div>
      <div class="page_contents">
        <div class="labmap">
          <img src="img/labmap.jpg" alt="" class="map_img">
          <div class="info_left">
            <br>
            <h5>Address.</h5>
            <br>
            <h5>Tel.</h5>
            <br>
          </div>
          <div class="info_left2">
            <br>
            <p>부산광역시 사상구 주례로 47</p>
            <p>U-IT관 U205호</p>
            <br>
            <p>051-313-2001~4</p>
            <br>
          </div>
          <div class="whitebar">

          </div>
          <div class="info_right">
            <h5>Subway.</h5>
          </div>
          <div class="info_right2">
            <br>
            <p>2호선 냉정역</p>
            <br>
            <p>경남정보대·동서대 하차</p>
            <br>
          </div>
        </div>
      </div>
    </section>

    <footer>
 <?php include "./lib/footer.php"; ?>
    </footer>
    <!-- footer -->

  </div> 

</div>



</body>
</html>