<?php
session_start();

include("config.php");

$query = "select todo_id, todo_date, todo_title, todo_desc, todo_start, todo_end, todo_rec_id from todo where email = '".$_POST['email']."' and todo_date = DATE_FORMAT(NOW(),'%Y%m%d')";
error_log(var_export($query, 1));
//$query = "select email, nickname from userinfo where vald = 'Y' and email = '99@99' and password = '9'";
// insert into ..... values ('.$_POST['email'].','.$_POST['nickname'].','.$_POST['password'].',''
$result = mysqli_query($conn, $query);

error_log(var_export($result, 1));

$count = mysqli_num_rows($result);
error_log(var_export($count, 1));

if ($count > 0) {
    $row = mysqli_fetch_row($result);
    error_log(var_export($row, 1));

    echo("<script>location.replace('./index.php');</script>");

  } else {

    // echo "가입이 완료되었습니다. 로그인 화면으로 이동합니다..";
    echo json_encode($return);
  }

mysqli_close($conn);
// echo("<meta http-equiv='Refresh' content='2; URL=index.php?id=signin'>");

// $result = mysqli_query($conn, "INSERT INTO USERINFO(email, nickname, password, vald, usdt, updt)
//                                 values($_POST['email'], $_POST['nickname'], $_POST['password'], 'Y', NOW(), NOW())");
?>
