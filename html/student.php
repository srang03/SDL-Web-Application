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
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/student.css">
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
  
   <!-- //cont_nav -->




    <?php include "./lib/nav_media1.php"; ?><!-- 메뉴바, 드롭다운 -->


  <aside>
    <?php include "./lib/aside1.php"; ?>
  </aside>
  <!-- //aside -->

  <section>
    <div class="page_tit">
      <h6>소속 학생 명단</h6>
    </div>
    <div class="page_contents">
      <table class="boardList">
        <tr>
         <th class="number">번호</th>
         <th class="title">학번</th>
         <th class="writer">학년</th>
         <th class="date">이름</th>
         <th class="viewCnt">직위</th>
       </tr>
       <tr>
         <td>1</td>
         <td>201417**</td>
         <td>3</td>
         <td>안성우</td>
         <td>연구실장</td>
       </tr>
       <tr>
         <td>2</td>
         <td>201318**</td>
         <td>4</td>
         <td>정병수</td>
         <td></td>
       </tr>
       <tr>
         <td>3</td>
         <td>201416**</td>
         <td>4</td>
         <td>김제영</td>
         <td></td>
       </tr>
       <tr>
         <td>4</td>
         <td>201416**</td>
         <td>4</td>
         <td>박경민</td>
         <td></td>
       </tr>
       <tr>
         <td>5</td>
         <td>201526**</td>
         <td>4</td>
         <td>이유리</td>
         <td></td>
       </tr>
       <tr>
         <td>6</td>
         <td>201417**</td>
         <td>3</td>
         <td>박민수</td>
         <td></td>
       </tr>
       <tr>
         <td>7</td>
         <td>201527**</td>
         <td>3</td>
         <td>황윤진</td>
         <td>팀장</td>
       </tr>
       <tr>
         <td>8</td>
         <td>201515**</td>
         <td>3</td>
         <td>황주희</td>
         <td></td>
       </tr>
       <tr>
         <td>9</td>
         <td>201714**</td>
         <td>3</td>
         <td>김유림</td>
         <td></td>
       </tr>
       <tr>
         <td>10</td>
         <td>201715**</td>
         <td>3</td>
         <td>이지원</td>
         <td></td>
       </tr>
       <tr>
         <td>11</td>
         <td>201716**</td>
         <td>3</td>
         <td>하도이</td>
         <td></td>
       </tr>
       
       <tr>
         <td>12</td>
         <td>201516**</td>
         <td>2</td>
         <td>유찬영</td>
         <td></td>
       </tr>
       <tr>
         <td>13</td>
         <td>201525**</td>
         <td>2</td>
         <td>공태연</td>
         <td></td>
       </tr>
       <tr>
         <td>14</td>
         <td>201525**</td>
         <td>2</td>
         <td>박청운</td>
         <td></td>
       </tr>
       <tr>
         <td>15</td>
         <td>201616**</td>
         <td>2</td>
         <td>이희승</td>
         <td></td>
       </tr>
       <tr>
         <td>16</td>
         <td>201715**</td>
         <td>2</td>
         <td>박예슬</td>
         <td></td>
       </tr>
       <tr>
         <td>17</td>
         <td>201815**</td>
         <td>2</td>
         <td>이현준</td>
         <td></td>
       </tr>
       <tr>
         <td>18</td>
         <td>201816**</td>
         <td>2</td>
         <td>정유진</td>
         <td></td>
       </tr>

     </table>
   </div>
 </section>


 <footer>
  <?php include "./lib/footer.php"; ?>
</footer> <!-- footer -->


</div>


</body>
</html>