<?php
session_start();

//Start new game -> opensecond page
if (isset($_POST['genRandomNumber'])) {
  //Create random number
  $randomNumber = rand(1,1000);

  //Store random number in session
  $_SESSION['randomnumber'] = $randomNumber;
  //Go to second page
  header("Location: Start.php");
}

 ?>
