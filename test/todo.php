<?php

$conn = mysqli_connect("localhost","spman", "spman");
mysqli_select_db($conn, "sharepractice");
$result = mysqli_query($conn, "SELECT * FROM todo");

$row = mysqli_fetch_assoc($result);

 echo $row['todo_title'];
 echo $row['todo_desc'];
 var_dump($row['todo_title']);
 error_log($row['todo_desc']);
 ?>


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
         <a class="navbar-brand" href="#">Jazz Excercise</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
           <ul class="navbar-nav">
             <li class="nav-item active">
               <a class="nav-link" href="#">연습 <span class="sr-only">(current)</span></a>
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
                 <a class="dropdown-item" href="#">로그인</a>
                 <a class="dropdown-item" href="#">개인설정</a>
                 <a class="dropdown-item" href="#">그룹설정</a>
               </div>
             </li>
           </ul>
         </div>
       </nav>
     </div>

     <div class="container">
           <!-- <h1>Hello, my page!</h1> -->
           <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal" id="add">연습 추가</button>
           <h1> </h1>

           <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">연습추가</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <div class="modal-body">
                   <form>
                     <div class="form-group">
                       <label for="recipient-name" class="col-form-label">제목:</label>
                       <input type="text" class="form-control" id="recipient-name">
                     </div>
                     <div class="form-group">
                       <label for="message-text" class="col-form-label">내용:</label>
                       <textarea class="form-control" id="message-text"></textarea>
                     </div>
                   </form>
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
                   <button type="button" id="btnSave" class="btn btn-primary">저장</button>
                 </div>
               </div>
             </div>
           </div>
     </div>

     <div class="container-fluid">
       <div id="todoList" class="list-group">
         <a href="#" class="list-group-item ist-group-item-action active">
           <h4 class="list-group-item-heading">Cras justo odio</h4>
           <p class="list-group-item-text">dnekcdjfjefoejdslkfjsdkf</p>
         </a>
         <a href="#" class="list-group-item list-group-item-action">
           <h4 class="list-group-item-heading">Dapibus ac facilisis i</h4>
           <p class="list-group-item-text">dnekcdjfjefoejdslkfjsdkf</p>
         </a>
         <a href="#" class="list-group-item list-group-item-action">
           <h4 class="list-group-item-heading">Morbi leo risus</h4>
           <p class="list-group-item-text">dnekcdjfjefoejdslkfjsdkf</p>
         </a>
       </div>
     </div>


     <script type="text/javascript" src="todo.js"></script>
     <!-- <script type="text/javascript">
         $(document).ready(function(){
             $("button").on('click', function() {
                 $("ol").append("<li>list item <a href='javascript:void(0);' class='remove'>&times;</a></li>");
             });
             $(document).on("click", "a.remove" , function() {
                 $(this).parent().remove();
             });
         });
     </script> -->


   </body>
 </html>
