 <?php
 session_start(); 

 $num=$_REQUEST["num"];
 $page=$_REQUEST["page"];   //페이지번호

 require_once("./lib/MYDB.php");
 $pdo = db_connect();

 try{
   $sql = "select * from chna03.notice where num=?";
   $stmh = $pdo->prepare($sql);  
   $stmh->bindValue(1, $num, PDO::PARAM_STR);      
   $stmh->execute();            

   $row = $stmh->fetch(PDO::FETCH_ASSOC);

   $item_num     = $row["num"];
   $item_id      = $row["id"];
   $item_name    = $row["name"];
   $item_hit     = $row["hit"];

   $item_date    = $row["regist_day"];
   $item_date    = substr($item_date,0,10);
   $item_subject = str_replace(" ", "&nbsp;", $row["subject"]);
   $item_content = $row["content"];
   $is_html      = $row["is_html"];

   if ($is_html!="y"){
    $item_content = str_replace(" ", "&nbsp;", $item_content);
    $item_content = str_replace("\n", "<br>", $item_content);
  }  

  $new_hit = $item_hit + 1;
  try{
   $pdo->beginTransaction(); 
       $sql = "update chna03.notice set hit=? where num=?";   // 조회수 증가
       $stmh = $pdo->prepare($sql);  
       $stmh->bindValue(1, $new_hit, PDO::PARAM_STR);      
       $stmh->bindValue(2, $num, PDO::PARAM_STR);           
       $stmh->execute();
       $pdo->commit(); 
     } catch (PDOException $Exception) {
       $pdo->rollBack();
       print "오류: ".$Exception->getMessage();
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
      <link rel="stylesheet" href="css/qnalist.css">
      <link rel="stylesheet" href="css/border1.css">
      <link rel="stylesheet" href="css/reset.css">
      <link rel="stylesheet" href="css/font-awesome.css">
      <link rel="stylesheet" href="css/slick.css">
      <link rel="stylesheet" href="css/theme1.css">


      <!-- web font -->
      <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">

      <script>
        function del(href) 
        {
          if(confirm("한번 삭제한 자료는 복구할 방법이 없습니다.\n\n정말 삭제하시겠습니까?")) {
           document.location.href = href;
         }
       }
     </script>
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
      <?php include "./lib/nav_media2.php"; ?>
      <!-- //메뉴바, 드롭다운 -->

      <aside>
        <?php include "./lib/aside2.php"; ?>
      </aside>  
      <!-- //aside -->

      <section>
        <div class="page_tit">
          <h6>공지 사항</h6>

        </div>
        <div class="page_contents">
         <div id="list_search">

         </div>
         <div id="view_title">
          <div id="view_title1"><?= $item_subject ?></div>
          <div id="view_title2"><?= $item_name ?> | 조회 : <?= $item_hint ?> | <?= $item_date ?> </div> 
        </div>
        <div id="view_content"><?= $item_content ?>
        <?php
        for ($i=0; $i<3; $i++)
        {
          if ($image_copied[$i]) 
          {
            $imageinfo = getimagesize($file_dir.$image_copied[$i]);
            $image_width[$i] = $imageinfo[0];
            $image_height[$i] = $imageinfo[1];
            $image_type[$i]  = $imageinfo[2];
            $img_name = $image_copied[$i];
            $img_name = "../data/".$img_name;
            if ($image_width[$i] > 785)
             $image_width[$i] = 785;

              // image 타입 1은 gif 2는 jpg 3은 png
           if($image_type[$i]==1 || $image_type[$i]==2 || $image_type[$i]==3){
             print "<img src='$img_name' width='$image_width[$i]'><br><br>";
           }
         }
       }
       ?>
       
     </div>

     <div id="view_button">
      <a href="notice.php?page=<?=$page?>><img src="./img/list.png"></a>&nbsp;
      <?php
      if(isset($_SESSION["userid"])) {
        if($_SESSION["userid"]==$item_id || $_SESSION["userid"]=="admin"){
         ?>
         <a href="notice_write_form.php?mode=modify&num=<?=$num?>&page=<?=$page?>"><img src="./img/modify.png"></a>&nbsp;

         <a href="javascript:del('notice_delete.php?num=<?=$num?>')"><img src="./img/delete.png"></a>&nbsp;
       <?php    }
       ?>
      
       <a href="notice_write_form.php"><img src="./img/write.png"></a>
       <?php
     }
   } catch (PDOException $Exception) {
     print "오류: ".$Exception->getMessage();
   }
   ?>
 </div>
</div>
</section>      
</div> 
</body>
</html>
