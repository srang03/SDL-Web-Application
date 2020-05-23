 <?php 
 session_start(); 
 
 require_once("./lib/MYDB.php");
 $pdo = db_connect();

 try{
  $sql = "select * from chna03.freeboard order by num desc";
  $stmh = $pdo->query($sql);                  
} catch (PDOException $Exception) {
  print "오류: ".$Exception->getMessage();
}          
?>
<!DOCTYPE html>
<html>
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimun-scale=1.0, width=device-width">
  <!-- style -->
  <!-- <link rel="stylesheet" type="text/css" href="css/common.css" > -->
  <link rel="stylesheet" type="text/css" href="css/memo.css"> <!-- 사용 -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/qnalist.css">
  <link rel="stylesheet" href="css/border1.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/theme1.css">
  <link rel="stylesheet" href="css/border1.css">
  
  <link rel="stylesheet" href="css/labinfo.css">
  <link rel="stylesheet" href="css/common.css"> <!-- 사용 -->


  <!-- 웹 폰트 -->
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
  </div> <!-- 메뉴바, 드롭다운 -->

  <div id="header_media">
    <label for="toggle" onclick>커뮤니티존</label>
    <input type="checkbox" id="toggle"/>
    <ul id="nav_media">
      <li><a href="#">자유게시판</a></li>
      <li><a href="qnalist">Q & A</a></li>

    </ul>
  </div>

  <aside>
    <?php include "./lib/aside4.php"; ?>
  </aside>
  <!-- //aside -->


  <section>
    <div class="page_tit">
     <h6>자유게시판</h6>
   </div>

   <div class="page_contents">   

     <?php
  if(isset($_SESSION["userid"])){      //로그인 했을 때 글 쓸수 있는 권한 부여
   ?>

   <div id="memo_row1">
    <form  name="memo_form" method="post" action="freeboard_insert"> 
     <div id="memo_writer"><span>▷ <?=$_SESSION["name"]?></span></div>
     <div id="memo1"><textarea rows="6" cols="110" name="content" resieze="none" required></textarea></div>
     <div id="memo2"><input type="image" src="./img/memo_button.gif"></div>
   </form>   
 </div>
 <?php
}
while($row = $stmh->fetch(PDO::FETCH_ASSOC)) {
 $memo_id      = $row["id"];
 $memo_num     = $row["num"];
 $memo_name     = $row["name"];
 $memo_date    = $row["regist_day"];
 $memo_content = str_replace("\n", "<br>", $row["content"]);
 $memo_content = str_replace(" ", "&nbsp;", $memo_content);
 ?>
 <div id="memo_writer_title">
  <ul>
   <!-- <li id="writer_title1"><?=$memo_num ?></li> -->
   <li id="writer_title2"><?=$memo_name ?></li>
   <li id="writer_title3"><?=$memo_date ?></li>
   <li id="writer_title4"> 
    <?php
    if(isset($_SESSION["userid"])){
     if($_SESSION["userid"]=="admin" || $_SESSION["userid"]==$memo_id)
      print "<a href='freeboard_delete.php?num=$memo_num'>[삭제]</a>"; 
  }
  ?>
</li>
</ul>
</div>
<div id="memo_content"><?= $memo_content ?></div>

<div id="ripple"> 
 <div id="ripple1">덧글</div>
 <div id="ripple2">
  <?php
  try{
   $sql = "select * from chna03.freeboard_ripple where parent='$memo_num'";
  $stmh1 = $pdo->query($sql);   // ripple PDOStatement 변수명을 다르게      

} catch (PDOException $Exception) {
 print "오류: ".$Exception->getMessage();
}
while ($row_ripple = $stmh1->fetch(PDO::FETCH_ASSOC)) {
 $ripple_num     = $row_ripple["num"];
 $ripple_name     = $row_ripple["name"];

 $ripple_id      = $row_ripple["id"];
 $ripple_content = str_replace("\n", "<br>", $row_ripple["content"]);
 $ripple_content = str_replace(" ", "&nbsp;", $ripple_content);
 $ripple_date    = $row_ripple["regist_day"];
 ?>
 <div id="ripple_title">
  <ul>
   <li><?= $ripple_name ?> &nbsp;&nbsp;&nbsp; <?= $ripple_date ?></li>
   <li id="mdi_del">
    <?php
    if(isset($_SESSION["userid"])){
     if($_SESSION["userid"]=="admin" || $_SESSION["userid"]==$ripple_id)
      print "<a href=freeboard_delete_ripple.php?num=$ripple_num>[삭제]</a>"; 
  }
  ?>
</li>
</ul>
</div>
<div id="ripple_content"> <?= $ripple_content ?></div>
<?php
}
if(isset($_SESSION["userid"])){                
 ?>
 <form  name="ripple_form" method="post" action="freeboard_insert_ripple"> 
  <input type="hidden" name="num" value="<?= $memo_num ?>"> 
  <div id="ripple_insert">
   <div id="ripple_textarea">
    <textarea rows="3" cols="103" name="ripple_content" required></textarea>
  </div>
  <div id="ripple_button">
    <input type="image" src="./img/memo_ripple_button.png"></div>
  </div>
</form>
<?php } ?>
</div> <!-- end of ripple2 -->
<div class="clear"></div>
<div class="linespace_10"></div>
<?php
}
?>
</div> <!-- end of ripple -->
</div> <!-- end of col2 -->
</section>

<footer>
 <?php include "./lib/footer.php"; ?>
</footer> <!-- footer -->
</div> <!-- end of wrap -->


</body>
</html>