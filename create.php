<?php

session_start();
//Create random number
$randomNumber = rand(1,1000);

//Store random number in session
$_SESSION['randomnumber'] = $randomNumber;
  echo $randomNumber;

//Start new game -> opensecond page
if (isset($_POST['genRandomNumber'])) {
  header("Location: Start.php");
}



 ?>
