<?php
ini_set( "display_errors", 1 );
include("config.php");

$result = mysqli_query($conn, "INSERT INTO USERINFO(email, nickname, password, vald, usdt, updt)
                                values($_POST['email'], $_POST['nickname'], $_POST['password'], 'Y', NOW(), NOW())");
?>
