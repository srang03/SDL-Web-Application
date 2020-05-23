<?php
session_start(); 

  if(isset($_REQUEST["page"]))  // 페이지 번호
  $page=$_REQUEST["page"];
  else
   $page=1;
  if(isset($_REQUEST["mode"]))  // 새로 쓰기, 수정, 답변 구분 
  $mode=$_REQUEST["mode"];
  else
   $mode="";

 if(isset($_REQUEST["num"]))  
   $num=$_REQUEST["num"];
 else
   $num="";

 if ($mode=="modify" || $mode=="response"){
   require_once("./lib/MYDB.php");
   $pdo = db_connect();

   try{
    $sql = "select * from chna03.qna where num = ? ";
    $stmh = $pdo->prepare($sql); 
    $stmh->bindValue(1,$num,PDO::PARAM_STR); 
    $stmh->execute();
    $count = $stmh->rowCount();              
    if($count<1){  

    }else{
      $row = $stmh->fetch(PDO::FETCH_ASSOC);
      $item_subject = $row["subject"];
      $item_content = $row["content"];
    }

    if ($mode=="response")
    {
     $item_subject = "[re]".$item_subject;
     $item_content = ">".$item_content;
     $item_content = str_replace("\n", "\n>", $item_content);
     $item_content = "\n\n".$item_content;
   }
 }catch (PDOException $Exception) {
   print "오류: ".$Exception->getMessage();
 }
}
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
  <link rel="stylesheet" href="css/border1.css">

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
    
    <div id="header_media">
      <label for="toggle" onclick>커뮤니티존</label>
      <input type="checkbox" id="toggle"/>
      <ul id="nav_media">
        <li><a href="#">자유게시판</a></li>
        <li><a href="qnalist.php">Q & A</a></li>

      </ul>
    </div>
    <!-- //메뉴바, 드롭다운 -->

    <aside>
      <?php include "./lib/aside4.php"; ?>
    </aside>	
    <!-- //aside -->

    <section>
      <div class="page_tit">
       <h6>Q&A 게시판</h6>
     </div>

     <!-- 게시판 시작 -->			
     <div class="page_contents">

      <?php
      if($mode=="modify") {
       ?>
       <form  name="board_form" method="post" action="./qnanotice/insert.php?mode=modify&num=<?=$num?>&page=<?=$page?>"> 
         <?php
       } elseif ($mode=="response") {
         ?>
       </form>
       <form  name="board_form" method="post" action="./qnanotice/insert.php?mode=response&num=<?=$num?>&page=<?=$page?>"> 
         <?php
       } else {
         ?>
       </form>
       <form  name="board_form" method="post" action="./qnanotice/insert.php"> 
         <?php
       }
       ?>
       <div id="write_form">
        <div class="write_line"></div>
        <div id="write_row1">
          <div class="col1"> 이름 </div>
          <div class="col2"><?=$_SESSION["name"]?></div>
          <div class="col3"><input type="checkbox" name="html_ok" value="y"> HTML 쓰기 </div>
        </div>
        <div class="write_line"></div>
        <div id="write_row2"><div class="col1"> 제목   </div>
        <div class="col2"><input type="text" name="subject" 
         <?php if ($mode=="modify" || $mode=="response") {?>
           value="<?=$item_subject?>" <?php } ?> required>
        
         </div>
         </div>
         <div class="write_line"></div>
         <div id="write_row3"><div class="col1"> 내용   </div>
         <div class="col2"><textarea rows="12" cols="79" name="content" required><?php if ($mode=="modify" || $mode=="response") {?><?=$item_content?> <?php } ?></textarea></div>
       </div>

       <div class="write_line"></div>
     </div>
     <div id="write_button">
      <input type="image" src="../img/ok.png">
      <a href="qnalist.php">
        <img src="../img/list.png"></a>
      </div>
    </form>

  </div>
</section>

<!-- section -->

</div> 
<!-- wrap -->

</body>