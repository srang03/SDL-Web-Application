<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" ng-app="form-demo-app">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimun-scale=1.0, width=device-width">
  <title>SDL HOMEPAGE</title>
  <!-- style -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/updateForm.css">
  <link rel="stylesheet" href="css/reset.css"> 



  <!-- 웹 폰트 -->

  <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
  
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->

  <script>
  function check_input()
             {
               if(!document.member_form.hp2.value || !document.member_form.hp3.value )
               {
                 alert("휴대폰 번호를 입력하세요"); 
                 return;
               }
             
               if(document.member_form.pass.value !=
                  document.member_form.pass_confirm.value)
               {
                 alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요."); 
                 document.member_form.pass.focus();
                 document.member_form.pass.select();
                 return;
               }

               document.member_form.submit();
               }

  </script>
  </head>

  <body>
    <div id="wrap">
      <header>
        <?php include "./lib/header.php"; ?>
          <img class="h_line" src="./img/line.jpg">
      </header>

      <div id="cont_nav">
        <?php include "./lib/nav.php"; ?>
      </div> <!-- 메뉴바, 드롭다운 -->

    <?php 
      $id=$_REQUEST["id"];

      require_once("./lib/MYDB.php");
      $pdo = db_connect();

      try{
        $sql = "select * from chna03.user where id = ?";
        $stmh = $pdo->prepare($sql);
        $stmh->bindValue(1,$id,PDO::PARAM_STR);
        $stmh->execute();
        $count = $stmh->rowCount();
      } catch(PDOException $Exception){
        print "오류 : ".$Exception->getMessage();
      }
      if($count<1){
        print "검색결과가 없습니다.<br>";
      } else {
        while($row = $stmh->fetch(PDO::FETCH_ASSOC)){
          $hp=explode("-", $row["hp"]);
          $hp2=$hp[1];
          $hp3=$hp[2];
        
        $email=explode("@", $row["email"]);
        $email1=$email[0];
        $email2=$email[1];

        ?>
      

      <section>
        <div class="container" id="wrap">
          <div class="table_position">
            <div class="row">
             <div class="col-md-6 col-md-offset-3">
              <form name="member_form" method="post" action="member/updatePro.php?id=<?=$id?>" class="form">
                <legend class="page_tit"><h6>회원수정</h6></legend>
                <div class="conts"> <!-- 표 전체시작 -->
                  <div class="conts_row">
                    <p class="num_text">학번 / 이메일<br> <?=$row["id"]?></p>
                  <p class="pass_text">비밀번호</p> <input type="password" name="pass" class="form-control input-lg" value="<?=$row["pass"]?>" required="true" style="width:200px; border-radius: 0.2em; padding: 5px;"/>
                  <br>
                  <p class="pass2_text">비밀번호 확인</p> <input type="password" name="pass_confirm" required class="form-control input-lg" value="<?=$row["pass"]?>"  required="true" style="width:200px; border-radius: 0.2em; padding: 5px;"/>

                  <div ng-show="signUpForm.password.$error.pattern" class="alert alert-warning5" role="alert" style="color: #C20324;">4~12자의 영문 소문자, 숫자와 특수기호(_)만 사용할 수 있습니다.</div>
                
                  <p class="phone_text">휴대폰 번호</p> <input type="text" name="hp1" class="form-control input-lg" value="010" required="true" style="width:55px; border-radius: 0.2em; padding: 5px;"/>
                  <input type="text" name="hp2" class="form-control input-lg" value="<?= $hp2 ?>"  required="true" style="width:55px; border-radius: 0.2em; padding: 5px;"/>
                 
                  <input type="text" name="hp3" class="form-control input-lg" required="true" value="<?= $hp3 ?>" style="width:55px; border-radius: 0.2em; padding: 5px;"/>

                  <p class="email_text">이메일</p> <input type="text" name="email1" class="form-control input-lg" value="<?= $email1 ?>" required="true" style="width:120px; border-radius: 0.2em; padding: 5px;"/> @ 
                  <input type="text" name="email2" class="form-control input-lg" value="<?= $email2 ?>" required="true" style="width:132px; border-radius: 0.2em; padding: 5px;"/><br>
             <!--  <label>성별 : </label>
             <input type="radio" name="gender" ng-model="user.gender" value="M">남자
             <input type="radio" name="gender" ng-model="user.gender" value="F">여자 -->
             <!-- <br> -->
                <button class="btn btn-lg btn-primary btn-block ok3-btn" type="submit" onclick="check_input()" style="width:300px; font-size: 20px;  background: #C20324; color: #fff; border-radius: 0.2em; padding: 8px;"><a href="#" class="okkbtn">확인</button> 
               </div>
               <br>
              </form>
             </div>
            </div>
          </div>
        </div>
      </section>
    <footer>
    <?php include "./lib/footer.php"; ?>
    </footer>
<!--     <?php }
  }?> -->
    </div> 
  </body>
</html>