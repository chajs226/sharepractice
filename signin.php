<?php
// ini_set( "display_errors", 1 );
include("config.php");

$query = "select email, nickname from userinfo where vald = 'Y' and email = '".$_POST['email']."' and password = '".$_POST['password']."'";

//$query = "select email, nickname from userinfo where vald = 'Y' and email = '99@99' and password = '9'";
// insert into ..... values ('.$_POST['email'].','.$_POST['nickname'].','.$_POST['password'].',''
$result = mysqli_query($conn, $query);

error_log(var_export($result, 1));

$count = mysqli_num_rows($result);
error_log(var_export($count, 1));

if ($count == 1) {
    $row = mysql_fetch_row($return);
    error_log(var_export($row, 1));

    session_start();
    $_SESSION['email'] = $row[0];
    $_SESSION['nickname'] = $row[1];
    $return = array ('result'=>true, 'message'=>"로그인 되었습니다.");
    echo json_encode($return);

  } else {
    $return = array ('result'=>false, 'message'=>"계정 정보가 올바르지 않습니다.");
    // echo "가입이 완료되었습니다. 로그인 화면으로 이동합니다..";
    echo json_encode($return);
  }

mysqli_close($conn);
// echo("<meta http-equiv='Refresh' content='2; URL=index.php?id=signin'>");

// $result = mysqli_query($conn, "INSERT INTO USERINFO(email, nickname, password, vald, usdt, updt)
//                                 values($_POST['email'], $_POST['nickname'], $_POST['password'], 'Y', NOW(), NOW())");
?>
