<?php
$conn = new mysqli("localhost", "root", "", "testdb");
$err = $conn->connect_error;

if($err){
  die("ERROR: Could not connect to databse. "
    . mysqli_connect_error());
}
  ?>
