<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en" ng-app="form-demo-app">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimun-scale=1.0, width=device-width">
   <title>SDL Lab</title>

   <!-- style -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/reset.css">
   <link rel="stylesheet" href="css/font-awesome.css">
   <link rel="stylesheet" href="css/slick.css">
   <link rel="stylesheet" href="css/theme1.css">
   <link rel="stylesheet" href="css/common.css">

   <!-- web font -->
   <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">

   <script src="js/slidermenu.js"></script>
   
</head>

<body>
   <div id="wrap">
      <header>
         <?php include "./lib/header.php"; ?>
         <img class="h_line" src="img/line.jpg" alt="메뉴바라인">

      </header>
      <!-- 회원가입, 로그인, 입회신청서-->


      <div id="cont_nav">
         <?php include "./lib/nav_index.php"; ?>
         <!-- 슬라이더 메뉴  -->
         <div class="navbar">
            <span class="open-slide">
               <a href="#" onclick="openSlideMenu()">
                  <svg width="30" height="30">
                     <path d="M0,5 30,5" stroke="#dbdbdb" stroke-width="5"/>
                     <path d="M0,14 30,14" stroke="#dbdbdb" stroke-width="5"/>
                     <path d="M0,23 30,23" stroke="#dbdbdb" stroke-width="5"/>
                     <!-- 햄버거 메뉴 -->
                  </svg>
               </a>
            </span>
            <!-- 햄버거 메뉴 -->
         </div>
         <div id="side-menu" class="side-nav">
            <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
            <!-- x 버튼 -->
            <div class="slider_menu">
               <ul class="slide_title"><b>전체메뉴</b></ul>

               <div class="slider_menu_t">   
                  <label for="toggle1" class="toggle" onclick>연구실 소개</label>
                  <input type="checkbox" id="toggle1"/>
                  <ul class ="slider_menu_s">
                     <li><a class="slider_menu_s_a" href="labintro">연구실 소개</a></li>
                     <li><a href="student" class="slider_menu_s_a">소속 학생 명단</a></li>
                     <li><a href="labaward" class="slider_menu_s_a">수상내역</a></li>
                     <li><a href="map" class="slider_menu_s_a">오시는 길</a></li>
                  </ul>
               </div>
            </div>
            <div class="slider_menu">
               <div class="slider_menu_t">
                  <label for="toggle2" class="toggle" onclick>연구실 소식</label>
                  <input type="checkbox" id="toggle2"/>
                  <ul class ="slider_menu_s">
                     <li><a href="notice" class="slider_menu_s_a">공지사항</a></li>
                     <li><a href="labactivity" class="slider_menu_s_a">연구실 활동</a></li>
                  </ul>
               </div>
            </div>
            <div class="slider_menu">
               <div class="slider_menu_t">
                  <label for="toggle3" class="toggle" onclick>연구실 일정</label>
                  <input type="checkbox" id="toggle3"/>
                  <ul class ="slider_menu_s">
                     <li><a href="schedule" class="slider_menu_s_a">캘린더</a></li>
                  </ul>
               </div>
            </div>
            <div class="slider_menu">
               <div class="slider_menu_t">
                  <label for="toggle4" class="toggle" onclick>커뮤니티존</label>
                  <input type="checkbox" id="toggle4"/>
                  <ul class ="slider_menu_s">
                     <li><a href="freeboard" class="slider_menu_s_a">자유게시판</a></li>
                     <li><a href="qnalist" class="slider_menu_s_a">Q & A</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div> 
      <!-- 메뉴바, 드롭다운 -->


      <div id="contents">
         <div class="slider">
            <div>
               <figure>
                  <img src="img/slider003.jpg" alt="이미지1"><figcaption><em>SDL Laboratory</em><span>" Laboratory in Dongseo University "</span></figcaption>
               </figure>
            </div>
            <div>
               <figure>
                  <img src="img/slider.jpg" alt="이미지2"><figcaption><em>ICT Volunteer work</em><span>" ICT Volunteer work with Police "</span></figcaption>
               </figure>
            </div>
            <div>
               <figure>
                  <img src="img/slider005.jpg" alt="이미지3"><figcaption><em>SDL Laboratory</em><span>" Laboratory in Dongseo University "</span></figcaption>
               </figure>
            </div>
         </div>
      </div> 
      

      <!-- 이미지 슬라이더 -->

      <div class="space"></div>


      <section>
         <div class="cal container">
            <h2 class="cal_tit"><a href="./schedule.php">Calendar</a></h2>
            <div id="caleandar">

            </div>
         </div>
         <div class="noti container">
            <h2 class="noti_tit">Notification</h2>               
            <div class ="tab_menu">
               
               <?php include "./lib/func.php"; ?>
               <div id ="latest">
                  <div id="latest1">
                     <div class="latest_box">

                        <?php latest_article("notice", 8, 30); ?>
                     </div>
                  </div>
               </div> 
            </div>
         </div>
         <div class="gallery container">
            <h2 class="port_tit">Portfolio</h2>
            <div class="gal">
               <h4>포트폴리오</h4>
               <div class="gallery_btn">
                  <button class="gb_icon1 play"><span class="ir_pm">시작</span></button>
                  <button class="gb_icon2 pause"><span class="ir_pm">정지</span></button>
                  <button class="gb_icon3 prev"><span class="ir_pm">이전이미지</span></button>
                  <button class="gb_icon4 next"><span class="ir_pm">다음이미지</span></button>
               </div>
               <div class="gallery_img">
                  <div><a href="#"><img src="img/gallery01.jpg" alt="갤러리1"></a></div>
                  <div><a href="#"><img src="img/gallery02.jpg" alt="갤러리2"></a></div>
                  <div><a href="#"><img src="img/gallery03.jpg" alt="갤러리3"></a></div>
                  <div><a href="#"><img src="img/gallery04.jpg" alt="갤러리4"></a></div>
                  <div><a href="#"><img src="img/gallery05.jpg" alt="갤러리5"></a></div>
               </div>  
            </div>
         </div>

      </section> 


      <!-- cal, notice, gallery -->


      <footer>

         <?php include "./lib/footer.php"; ?>

      </footer> <!-- footer -->


   </body>
   </html>

   <!-- script -->
   <!--script-->
   <script src="js/jquery.min_1.12.4.js"></script>
   <script src="js/modernizr-custom.js"></script>
   <script src="js/slick.min.js"></script>
   <script src="js/lightgallery.min.js"></script>
   <script src="js/caleandar.js"></script>
   <script>

   <!-- //이미지 슬라이더 -->
   $(".slider").slick({
      dots: true,
      autoplay: true,
      autoplaySpeed: 3000,
      arrows: true,
      responsive: [
      {
         breakpoint: 768,
         settings: {
            autoplay: false,
         }
      }
      ]
   });

     //탭 메뉴
     var $tab_list = $('.tab_menu');
     
     $tab_list.find('ul ul').hide();
     $tab_list.find('li.active>ul').show();

     function tabMenu(e){
        e.preventDefault();
        var $this = $(this);
        $this.next('ul').show().parent('li').addClass('active').siblings('li').removeClass('active').find('>ul').hide();
     }
     $tab_list.find('>ul>li>a').click(tabMenu).focus(tabMenu);

      //갤러리
      $('.gallery_img').slick({
         dots: false,
         fade: true,
         pauseOnHover: true,
         arrows: false,
         infinite: true,
         autoplay: true,
         autoplaySpeed: 3000,
         speed: 300,
         slidesToShow: 1
      });

      $('.pause').on('click', function(){
         $('.gallery_img').slick('slickPause');
      });

      $('.play').on('click', function(){
         $('.gallery_img').slick('slickPlay');
      });

      $('.prev').on('click', function(){
         $('.gallery_img').slick('slickPrev');
      });

      $('.next').on('click', function(){
         $('.gallery_img').slick('slickNext');
      });

  </script>

