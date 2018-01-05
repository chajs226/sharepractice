<?php
ini_set( "display_errors", 1 );
include("config.php");

$data_stream = "'".$_POST['email']."','".$_POST['nickname']."','".$_POST['password']."'";
$query = "insert into userinfo(email,nickname,password) values (".$data_stream.")";

$result = mysqli_query($conn, $query);

mysqli_close($connect);
echo ('가입이 완료되었습니다. 메인 화면으로 이동합니다..');

// $result = mysqli_query($conn, "INSERT INTO USERINFO(email, nickname, password, vald, usdt, updt)
//                                 values($_POST['email'], $_POST['nickname'], $_POST['password'], 'Y', NOW(), NOW())");
?>

<!-- "'".$_POST['name']."','".$_POST['id']."','".$_POST['pw']."'";

'.$_POST['name'].','.$_POST['id'].','.$_POST['pw'].' -->
