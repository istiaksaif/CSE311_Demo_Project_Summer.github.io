<?php
$servername = "localhost";
$username = "root";
$db = "employee_information";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn){
  die("Error in connecting. ".mysqli_connect_error());
}

 ?>
