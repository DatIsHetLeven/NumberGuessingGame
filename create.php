<?php

session_start();

$randomNumber = rand(1,1000);

$_SESSION['randomnumber'] = $randomNumber;
  echo $randomNumber;



if (isset($_POST['genRandomNumber'])) {
  header("Location: Start.php");
}else {
  header("Location: index.php");
  exit();
}









 ?>
