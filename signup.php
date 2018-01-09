<?php
// ini_set( "display_errors", 1 );
include("config.php");

$data_stream = "'".$_POST['email']."','".$_POST['nickname']."','".$_POST['password']."'";
$query = "insert into userinfo(email,nickname,password) values (".$data_stream.")";

$result = mysqli_query($conn, $query);
 // echo "<script>alert($result);</script>";

if ($result) {
    $return = array ('result'=>true, 'message'=>"가입이 완료되었습니다. 로그인 화면으로 이동합니다.");
    // echo "가입이 완료되었습니다. 로그인 화면으로 이동합니다..";
    echo json_encode($return);
  } else {
    $return = array ('result'=>false, 'message'=>"회원가입이 되지 않았습니다.");
    // echo "가입이 완료되었습니다. 로그인 화면으로 이동합니다..";
    echo json_encode($return);
  }

mysqli_close($conn);
// echo("<meta http-equiv='Refresh' content='2; URL=index.php?id=signin'>");

// $result = mysqli_query($conn, "INSERT INTO USERINFO(email, nickname, password, vald, usdt, updt)
//                                 values($_POST['email'], $_POST['nickname'], $_POST['password'], 'Y', NOW(), NOW())");
?>
