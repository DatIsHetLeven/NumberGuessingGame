<?php
session_start();
//Counting how many attempts is needed
if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+1;
else
    $_SESSION['views']=1;


$randomNumber = $_SESSION['randomnumber'];
$inputUser = $_POST['inputUser'];

echo $randomNumber;
//iF GUESS BUTTON IS CLICKED
if (isset($_POST['guessButton'])) {
  //Answer is correct
  if ($inputUser == $randomNumber) {
    //store attempts in session
    $_SESSION['views'] = $_SESSION['views'];
    header("Location: resultPage.php");
  }
  //Answer is greater than user input
  elseif ($inputUser > $randomNumber) {
    echo "helaas, het getal is kleiner dan de invoer";
  }
  //Answer is smaller than user input
  else {
    echo "hup hup, iets meer omhoog";
  }
}


 ?>
