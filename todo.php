<?php
// ini_set( "display_errors", 1 );
session_start();

include("config.php");

$query = "insert into todo(email, todo_date, todo_title, todo_desc) values ('".$_SESSION['email']."',"DATE_FORMAT(NOW(),'%Y%m%d')", '".$_POST['todo-title']."','".$_POST['todo_desc']."')";

error_log(var_export($query, 1));
// insert into ..... values ('.$_POST['email'].','.$_POST['nickname'].','.$_POST['password'].',''
$result = mysqli_query($conn, $query);
 // echo "<script>alert($result);</script>";
error_log(var_export($result, 1));

if ($result) {
    $return = array ('result'=>true, 'message'=>"TODO 등록 성공");

    echo json_encode($return);
    echo("<script>location.replace('./index.php?id=todo');</script>");
  } else {
    $return = array ('result'=>false, 'message'=>"TODO 등록 실패");
    echo json_encode($return);
  }

mysqli_close($conn);

?>
