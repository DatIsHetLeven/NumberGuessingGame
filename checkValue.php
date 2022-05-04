<?php
session_start();
//Counting how many attempts is needed
if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+1;
else
    $_SESSION['views']=1;
//Store random value as variable
$randomNumber = $_SESSION['randomnumber'];

//If u want to cheat ^_^
// echo $randomNumber

//iF GUESS BUTTON IS CLICKED
if (isset($_POST['guessButton'])) {
  //Store user input
  $inputUser = $_POST['inputUser'];
  //Answer is correct
  if (empty($inputUser)) {
    echo "You have to fill in a number!";
  }
  elseif ($inputUser == $randomNumber) {
    //store attempts in session
    $_SESSION['views'] = $_SESSION['views'];
    header("Location: resultPage.php");
  }
  //Answer is greater than user input
  elseif ($inputUser > $randomNumber) {
     echo 'unfortunately the number is slightly lower';
  }
    //Answer is smaller than user input
  elseif($inputUser < $randomNumber) {
    echo "come on!! a little higher";
  }
}

// For the Resultpage
$randomNumber = $_SESSION['randomnumber'];
$attempt = $_SESSION['views'];
//Destroy session -> Go to landing page
if (isset($_POST['desButton'])){
  session_destroy();
  header("Location: index.php");
  exit();
}

 ?>
