<?php
session_start(); 


if(isset($_REQUEST["page"]))  // 페이지 번호
$page=$_REQUEST["page"];
else
 $page=1;

  if(isset($_REQUEST["mode"]))  //수정 버튼을 클릭해서 호출했는지 체크
  $mode=$_REQUEST["mode"];
  else
   $mode="";

  if(isset($_REQUEST["num"]))  //수정 버튼을 클릭해서 호출했는지 체크
  $num=$_REQUEST["num"];
  else
   $num="";



 if ($mode=="modify" || $mode=="response"){
   require_once("./lib/MYDB.php"); // 수정시 에 데이터베이스 연동 필요
   $pdo = db_connect();

   try{


    $sql = "select * from chna03.notice where num = ? ";
    $stmh = $pdo->prepare($sql); 
    $stmh->bindValue(1,$num,PDO::PARAM_STR); 
    $stmh->execute();
    $count = $stmh->rowCount();              
    if($count<1){print "검색결과가 없습니다.<br>";
   }else{
     $row = $stmh->fetch(PDO::FETCH_ASSOC);
     $item_subject = $row["subject"];
     $item_content = $row["content"];
     $item_file_0 = $row["file_name_0"];
     $item_file_1 = $row["file_name_1"];
     $item_file_2 = $row["file_name_2"];
     $copied_file_0 = $row["file_copied_0"];
     $copied_file_1 = $row["file_copied_1"];
     $copied_file_2 = $row["file_copied_2"];
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
<!DOCTYPE HTML>
<html lang ="en">
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimun-scale=1.0, width=device-width">

   <title>SDL HOMEPAGE</title>
  <!-- style -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/border1.css">
  <link rel="stylesheet" href="css/qnalist.css">
  <!--     <link rel="stylesheet" href="css/common.css"> -->
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/theme1.css">
  <link rel="stylesheet" href="css/border.css">
  

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

    <div id="cont_nav">
      <?php include "./lib/nav.php"; ?>
    </div> 
    <?php include "./lib/nav_media2.php"; ?>
    <!-- 메뉴바, 드롭다운 -->

    <aside>
      <?php include "./lib/aside2.php"; ?>
    </aside>
    <!-- //aside -->


    <!-- //메뉴바, 드롭다운 -->

    <section>
      <div class="page_tit">
        <h6>공지사항</h6>
      </div>

      <div class="page_contents">

        <div id="col2">
          <div class="clear"></div>
          <div id="write_form_title">
            <img src="./img/write_form_title.gif">
          </div>
          <div class="clear"></div>
          <?php
          if($mode=="modify"){ 
            ?>
            <form name="board_form" method="post" action="notice_insert.php?mode=modify&num=<?=$num?>&page=<?=$page?>" enctype="multipart/form-data"> 
            <?php  } elseif ($mode=="response") {
              ?>
              <form  name="board_form" method="post" action="notice_insert.php?mode=response$num=<?=$num?>&page=<?=$page?>" enctype="multipart/form-data"> 
                <?php
              } else {
                ?>
                <form  name="board_form" method="post" action="notice_insert.php"> 
                 <?php
               }
               ?>
               <div id="write_form">
                 <div class="write_line"></div>
                 <div id="write_row1">
                   <div class="col1"> 이름 </div>
                   <div class="col2"><?=$_SESSION["name"]?></div>
                   <div class="col3"><input type="checkbox" name="html_ok" value="y"> HTML 쓰기</div>
                 </div>
                 <div class="write_line"></div>
                 <div id="write_row2">
                  <div class="col1"> 제목</div>
                  <div class="col2"><input type="text" name="subject" 
                    <?php if($mode=="modify" || $mode=="response"){ ?>value="<?=$item_subject?>" <?php } ?> required></div>
                  </div>
                  <div class="write_line"></div>
                  <div id="write_row3">
                    <div class="col1"> 내용 </div>
                    <div class="col2"><textarea rows="12" cols="103" name="content" required><?php if($mode=="modify" || $mode=="response") {?><?=$item_content?> <?php } ?></textarea></div>
                  </div>
                  
                    
                    <div class="write_line"></div>
                    <div class="clear"></div>
                  </div>
                  <div id="write_button"><input type="image" src="./img/ok.png">
                    <a href="notice"><img src="./img/list.png"></a>
                  </div>
                </form>

              </div>
            </div>
          </div> <!-- cols2 end -->
            
        
        </div>
      </body>
      </html>