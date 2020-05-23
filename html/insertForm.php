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
   <link rel="stylesheet" href="css/reset.css">   
   <link rel="stylesheet" href="css/theme1.css">
  <link rel="stylesheet" href="css/register.css">
   



  <!-- 웹 폰트 -->
  <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
  
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->

  <script>

             function check_id() // 아이디 중복체크
             {
               window.open("member/check_id.php?id="+document.member_form.id.value,"IDcheck", 
               "left=200,top=200,width=300,height=100,scrollbars=no, resizable=yes");
               
             }
             
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

       <section>
        <div class="container" id="wrap">
          <div class="table_position">
            <div class="row">
             <div class="col-md-6 col-md-offset-3">
              <form name="member_form" method="post" action="member/insertPro.php" class="form">
               <legend class="page_tit"><h6>회원가입</h6></legend>
               <div class="conts"> <!-- 표 전체시작 -->
                <div class="conts_row">
                 <div class="col-xs-6 col-md-6">
                   <input type="text" name="id" class="form-control input-lg" placeholder="아이디" required="true" ng-minlength="2" style="width:200px;border-radius: 0.2em; padding: 5px;"/>
                    <a href="#"><img src="./img/check_id.gif" 
               onclick="check_id()" class="id_img"></a>
                 </div>
                </div>
                <div ng-show="signUpForm.password.$error.pattern" class="alert alert-warning" role="alert" style="color: #C20324;"> 재학생은 학번, 그 외는 이메일 입력</div>

                <input type="password" name="pass" class="form-control input-lg" placeholder="패스워드"  required="true" style="width:200px; border-radius: 0.2em; padding: 5px;"/>
                <br>
                <input type="password" name="pass_confirm" required class="form-control input-lg" placeholder="패스워드 확인" required="true" style="width:200px; border-radius: 0.2em; padding: 5px;"/>

                <div ng-show="signUpForm.password.$error.pattern" class="alert alert-warning" role="alert" style="color: #C20324;">4~12자의 영문 소문자, 숫자와 특수기호(_)만 사용할 수 있습니다.</div>
                
                <input type="text" name="name" class="form-control input-lg" placeholder="이름" equired="true" style="width:200px; border-radius: 0.2em; padding: 5px;"/>
                <br>
                <input type="text" name="hp1" class="form-control input-lg" value="010" required="true" style="width:55px; border-radius: 0.2em; padding: 5px;"/>
                <input type="text" name="hp2" class="form-control input-lg"  required="true" style="width:55px; border-radius: 0.2em; padding: 5px;"/>
                 
                <input type="text" name="hp3" class="form-control input-lg" required="true" style="width:55px; border-radius: 0.2em; padding: 5px;"/>
                <br>

                <input type="text" name="email1" class="form-control input-lg" placeholder="email" equired="true" style="width:120px; border-radius: 0.2em; padding: 5px;"/> @ 
                <input type="text" name="email2" class="form-control input-lg" required="true" style="width:132px; border-radius: 0.2em; padding: 5px;"/>
                <br>
             <!--  <label>성별 : </label>
             <input type="radio" name="gender" ng-model="user.gender" value="M">남자
             <input type="radio" name="gender" ng-model="user.gender" value="F">여자 -->
             <!-- <br> -->
                <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" onclick="check_input()" style="width:300px; font-size: 20px;  background: #C20324; color: #fff; border-radius: 0.2em; padding: 8px;"><a href="#" class="okkkbtn">확인</button> 
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
    </div> 
   </body>
</html>