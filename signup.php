<?php

$conn = mysqli_connect("localhost","spman", "spman");
mysqli_select_db($conn, "sharepractice");

$result = mysqli_query($conn, "INSERT INTO USERINFO(email, nickname, password, vald, usdt, updt) 
                                values($_POST['email'], $_POST['nickname'], $_POST['password'], 'Y', NOW(), NOW())");
?>
