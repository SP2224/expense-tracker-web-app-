<?php
include("config.php");
session_start();
if(!isset($_SESSION["email"])){
header("Location: signin.php");
exit();
}

$sess_email = $_SESSION["email"];
$sql = "SELECT id,name, email,phonenumber,usertype FROM users WHERE email = '$sess_email'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $userid=$row["user_id"];
    $firstname = $row["name"];
    $email = $row["email"];
    $usertype = $row["usertype"];
    
}
}