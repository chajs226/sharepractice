<?php
// ini_set( "display_errors", 1 );
include("config.php");

$data_stream = "'".$_POST['email']."','".$_POST['nickname']."','".$_POST['password']."','Y', NOW(), NOW()";
$query = "insert into userinfo(email,nickname,password,vald,usdt,updt) values (".$data_stream.")";
error_log(var_export($query, 1));
// insert into ..... values ('.$_POST['email'].','.$_POST['nickname'].','.$_POST['password'].',''
$result = mysqli_query($conn, $query);
 // echo "<script>alert($result);</script>";
error_log(var_export($result, 1));

if ($result) {
    $return = array ('result'=>true, 'message'=>"가입이 완료되었습니다. 로그인 화면으로 이동합니다.");
    // echo "가입이 완료되었습니다. 로그인 화면으로 이동합니다..";
    echo json_encode($return);
    header('Location: ./index.php?id=signin');
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
