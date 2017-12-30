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
