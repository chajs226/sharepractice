<?php

$mysql_hostname = "localhost";
$mysql_user = "spman";
$mysql_password = "spman";
$mysql_database = "sharepractice";


$conn = mysqli_connect($mysql_hostname,$mysql_user, $mysql_password);
mysqli_select_db($conn, $mysql_database);
?>
