
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimun-scale=1.0, width=device-width">
  <title>SDL HOMEPAGE</title>

  <!-- style -->
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/gallery.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/theme1.css">
  <link rel="stylesheet" href="css/border.css">
  

  <!-- 웹 폰트 -->
  <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
<?php
 
 require_once("../lib/MYDB.php");
 $pdo = db_connect();
 
 if(isset($_REQUEST["mode"]))
  $mode=$_REQUEST["mode"];
 else 
  $mode="";

  if(isset($_REQUEST["search"]))   // search 쿼리스트링 값 할당 체크
  $search=$_REQUEST["search"];
  else 
    $search="";

  if(isset($_REQUEST["find"]))
    $find=$_REQUEST["find"];
  else
    $find="";

  if($mode=="search"){
    if(!$search){
      ?>
      <script>
        alert('검색할 단어를 입력해 주세요!');
        history.back();
      </script>
      <?php
    }
    $sql="select * from dbswlsghkd1234.concert where $find like '%$search%' order by num desc";
  } else {
    $sql="select * from dbswlsghkd1234.concert order by num desc";
  }
  try{  
    $stmh = $pdo->query($sql); 
    $count=$stmh->rowCount(); 
    ?>
</head>
<!-- //HEAD -->
<body>

  <div id = "wrap">
    <header>
      <div class="menu_header">
       <div class="header_menu">
        <ul>
          <li><a href="http://www.dongseo.ac.kr" class="h_last">동서대학교</a></li>
          <li><a href="http://dyy2525.dothome.co.kr/login.html">로그인</a></li>
          <li><a href="http://dyy2525.dothome.co.kr/join.html">회원가입</a></li>
          <li><a href="#">입회신청서</a></li>
        </ul>
      </div>
    </div>
    <img class="h_line" src="img/line.jpg">
  </header>
  <!-- //header -->

  <div id="cont_nav">
    <div class="menubar">
      <div class="logo_div">
       <h3><a href="http://www.dongseo.ac.kr"><img src="img/dsu_logo.jpg" alt=""></a><a href="http://dyy2525.dothome.co.kr/tt.html" class="logo">SDL</a></h3>
      </div>
      <div class="dropdown_all">
        <div class="dropdown" style="float:left;">
          <div class="dropbtn">연구실소개</div>
          <div class="dropdown-content" style="left:0;">
            <a href="http://dyy2525.dothome.co.kr/labintro.html">연구실 소개</a>
            <a href="http://dyy2525.dothome.co.kr/student.html">소속학생명단</a>
            <a href="http://dyy2525.dothome.co.kr/labaward.html">수상내역</a>
            <a href="http://dyy2525.dothome.co.kr/map.html">오시는길</a>
          </div>
        </div>
        <div class="dropdown" style="float:left;">
          <button class="dropbtn">연구실소식</button>
          <div class="dropdown-content" style="left:0;">
            <a href="http://dyy2525.dothome.co.kr/notice.html">공지사항</a>
            <a href="http://dyy2525.dothome.co.kr/gallery.html">연구실 활동</a>

          </div>
        </div>
        <div class="dropdown" style="float:left;">
          <button class="dropbtn">연구실일정</button>
          <div class="dropdown-content" style="left:0;">
            <a href="http://dyy2525.dothome.co.kr/schedule.html">캘린더</a>

          </div>
        </div>
        <div class="dropdown" style="float:left;">
          <button class="dropbtn">커뮤니티존</button>
          <div class="dropdown-content" style="left:0;">
            <a href="http://dyy2525.dothome.co.kr/n_board.html">자유게시판</a>
            <a href="http://dyy2525.dothome.co.kr/b_board.html">Q & A</a>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CONT_NAV -->


  <div id="header_media">
    <label for="toggle" onclick>연구실 소식</label>
    <input type="checkbox" id="toggle"/>
    <ul id="nav_media">
      <li><a href="http://dyy2525.dothome.co.kr/notice.html">공지사항</a></li>
      <li><a href="http://dyy2525.dothome.co.kr/gallery.html">연구실 활동</a></li>
      
    </ul>
  </div>
  

  <!-- //메뉴바, 드롭다운 -->



  <aside>
    <div class="side_menu">
      <h2 class="ir_su">반응형 사이트 컨텐츠</h2>
      <div id="cont_left">
        <h3 class="ir_su">메뉴 및 게시판 컨텐츠 영역</h3>
        <article class="column col1">
          <h4 class="col_tit">연구실 소식</h4>
          <!--사이드 메뉴 상단-->
          <div class="menu">
            <ul>
              <li><a href="http://dyy2525.dothome.co.kr/notice.html">공지사항    <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
              <li class="last"><a href="http://dyy2525.dothome.co.kr/gallery.html">연구실 활동    <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <!-- 메뉴//-->
        </article>
      </div>
    </div>
  </aside>
  <!-- //aside -->

  <section class="page_tit">
    <div>
      <h6>연구실 활동</h6>
    </div>
    <!-- 갤러리시작 -->
    <div id="col2">
            <div id="title"><img src="../img/title_concert.gif"></div>
            <form name="board_form" method="post" action="list.php?mode=search">
              <div id="list_search">
                <div id="list_search1">▷ 총 <?= $count ?> 개의 게시물이 있습니다.</div>
                <div id="list_search2"><img src="../img/select_search.gif"></div>
                <div id="list_search3">
                  <select name="find">
                    <option value='subject'>제목</option>
                    <option value='content'>내용</option>
                    <option value='nick'>닉네임</option>
                    <option value='name'>이름</option>
                  </select></div> <!-- end of list_search3 -->
                  <div id="list_search4"><input type="text" name="search"></div>
                  <div id="list_search5"><input type="image" src="../img/list_search_button.gif"></div>
                </div> <!-- end of list_search -->
              </form>
              <div class="clear"></div>
              <div id="list_top_title">
                <ul>
                  <li id="list_title1"><img src="../img/list_title1.gif"></li>
                  <li id="list_title2"><img src="../img/list_title2.gif"></li>
                  <li id="list_title3"><img src="../img/list_title3.gif"></li>
                  <li id="list_title4"><img src="../img/list_title4.gif"></li>
                  <li id="list_title5"><img src="../img/list_title5.gif"></li>
                </ul>
              </div> <!-- end of list_top_title -->
              <div id="list_content">
  <?php  // 글 목록 출력

  while($row = $stmh->fetch(PDO::FETCH_ASSOC)) {
    $item_num=$row["num"];
    $item_id=$row["id"];
    $item_name=$row["name"];
    $item_nick=$row["nick"];
    $item_hit=$row["hit"];
    $item_date=$row["regist_day"];
    $item_date=substr($item_date, 0, 10);
    $item_subject=str_replace(" ", "&nbsp;", $row["subject"]);
    ?>
    <div id="list_item">
      <div id="list_item1"><?= $item_num ?></div>
      <div id="list_item2"><a href="view.php?num=<?=$item_num?>"><?= $item_subject ?></a></div>
      <div id="list_item3"><?= $item_nick ?></div>
      <div id="list_item4"><?= $item_date ?></div>
      <div id="list_item5"><?= $item_hit ?></div>
    </div> <!– end of list_item -->

    <?php
  }
} catch (PDOException $Exception) {
  print "오류: ".$Exception->getMessage();
}  
?>

<div id="write_button">
  <a href="list.php"><img src="../img/list.png"></a>&nbsp;
  <?php
  if(isset($_SESSION["userid"]))
  {
    ?>
    <a href="write_form.php"><img src="../img/write.png"></a>
    <?php
  }
  ?>
</div>
</div>
</div> <!-- end of col2 -->
  </section>
  
  
  <!-- 페이징끝 -->
  


  <footer>
   <div id="footer" class="div-cont">
    <div id="fcopyright" class="fcopyright">
      <img src="img/flogo.png"class="flogo" alt="" />
      <div class="pinfo">
        <span class="paddr">(47011) 부산광역시 사상구 주례로 47(주례동) U-IT관 U109호 SDL Lab </span>
        <span class="ptel-wrap"><span class='ptel'>TEL : 051-320-1710</span></span>
      </div>
    </div>
  </div>
</footer>
<!-- //footer -->
</div>

</body>
</html>