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
  <link rel="stylesheet" href="css/login3.css">
  



  <!-- 웹 폰트 -->
<!--   <link rel="stylesheet" href="css/register.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
  
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->

  <script>
    function login_check() {
      if(!document.login_form.id.value)
      {
        alert("아이디를 입력하세요");
        document.login_form.id.focus();
        return;
      }
      if(!document.login_form.pass.value)
      {
        alert("비밀번호를 입력하세요");
        document.login_form.pass.focus();
        return;
      }
      document.login_form.submit();
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
          <div class="row">
           <div class="col-md-6 col-md-offset-3">
            <form name="login_form" method="post" action="./member/login_result.php" class="form">

             <legend class="page_tit"><h6>로그인</h6></legend>
             <div class="conts">

              <div class="conts_row">
                <div class="col-xs-8 col-md-8">
                  <input type="text" name="id" class="form-control input-lg3" placeholder="아이디" required="true" ng-minlength="2" style="width:280px;border-radius: 0.2em; padding: 5px;"/>
                </div>
                <p ng-show="signUpForm.password.$error.pattern" class="alert alert-warning2" role="alert" style="color: #C20324;"> 재학생은 학번, 그 외는 이메일 입력</p>
              </div>
              <input type="password" name="pass" class="form-control input-lg3" placeholder="패스워드"  required="true" style="width:280px; border-radius: 0.2em; padding: 5px;"/><br>

              <button class="btn btn-lg btn-primary btn-block ok-btn" type="submit" onclick="document.member_form.submit()" style="width:300px; font-size: 20px;  background: #C20324; color: #fff; border-radius: 0.2em; padding: 8px;">로그인</button>
             </div>
             <br>
            </form>
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