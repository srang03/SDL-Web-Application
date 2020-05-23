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
  <link rel="stylesheet" href="css/schedule.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/cal_theme_media.css">
  <link rel="stylesheet" href="css/toggle.css">

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
    <?php include "./lib/nav_media3.php"; ?>

    <!-- 메뉴바, 드롭다운 -->

    <aside>
        <?php include "./lib/aside3.php"; ?>
    </aside>
    <!-- //aside -->

    <section class="notice_section">
      <div class="page_tit">
        <h6>연구실 일정</h6>
      </div>
      
      <div class="page_contents">
        <div class="page_cont_left">
          <div id="caleandar">
          </div>
        </div>
        <div class="page_cont_right">
          <div class="right_head">
            <h6>Schedule</h6>
          </div>
          <div class="cal_list">
            <div class="cal_list_date">
              <ul>
                <li><img src="img/dot.gif"/><b>12. 03 (화)</b></li>
                <li><img src="img/dot.gif"/><b>12. 04 (수)</b></li>
                <li><img src="img/dot.gif"/><b>12. 13 (수)</b></li>
                <li><img src="img/dot.gif"/><b>12. 16 (월)</b></li>
              </ul>
            </div>
            <div class="cal_list_cont">
              <ul>
                <li>우수 연구회 최종 점검</li>
                <li>IC 학술제</li>
                <li>SBD 최종발표회</li>
                <li>기말고사 기간</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <?php include "./lib/footer.php"; ?>
    </footer>



  </div>

  <!-- script -->
  <script src="./js/caleandar.js"></script>
  <!-- //script -->

  
</body>
</html>