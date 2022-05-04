<?php
session_start();

$randomNumber = $_SESSION['randomnumber'];
$attempt = $_SESSION['views'];
//Destroy session -> Go to landing page
if (isset($_POST['desButton'])){
  session_destroy();
  header("Location: index.php");
  exit();
}


 ?>
