<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jazz Excercise</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

  </head>

  <body>

<!--Nav 메뉴  -->
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php?id=main">Jazz Excercise</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php?id=todo">연습 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                기록보기
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">내기록보기</a>
                <a class="dropdown-item" href="#">그룹기록보기</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                설정
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index.php?id=signin">로그인</a>
                <a class="dropdown-item" href="#">개인설정</a>
                <a class="dropdown-item" href="#">그룹설정</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
<!-- 메뉴 선택에 따른 html 페이지 호출 -->
<?php

  session_start();

  if (empty($_GET['id']) == false) {
   if ($_GET['id'] == 'signin') {
     echo file_get_contents("signin.html");
   } else {
      checkLogin();
      echo file_get_contents($_GET['id'].".html");
    }
   } else {
     checkLogin();
     echo file_get_contents("main.html");
  }

function checkLogin() {
  if(!isset($_SESSION['is_login'])) {
    echo("<script>window.location.search = '?id=signin'</script>");
    exit;
  } else {
    echo("<div class=\"container\">");
    // echo("<h4><a id=\"lblEmail\" href=\"signout.php\" class=\"badge badge-light float-right\" data-email=".$_SESSION['email'].">".$_SESSION['nickname']."</span></h4>");
    echo("<h4><a id=\"lblEmail\" class=\"badge badge-light float-right\" data-email=".$_SESSION['email'].">".$_SESSION['nickname']."</span></h4>");
    echo("</div>");
  }

}

 ?>



  </body>
</html>
