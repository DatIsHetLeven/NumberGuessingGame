<?php
session_start();

if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+1;
else
    $_SESSION['views']=1;


$randomNumber = $_SESSION['randomnumber'];
$inputUser = $_POST['inputUser'];

echo $randomNumber;
//iF GUESS BUTTON IS CLICKED
if (isset($_POST['guessButton'])) {
  if ($inputUser == $randomNumber) {
      header("Location: resultPage.php");
    echo "Je hebt het juiste getal geraden e ($randomNumber) in attempt = ".$_SESSION['views'];
  }
  elseif ($inputUser > $randomNumber) {
    echo "helaas, het getal is kleiner dan de invoer";
  }
  else {
    echo "hup hup, iets meer omhoog";
  }

  }


//End the game
if (isset($_POST['desButton'])){
  // session_destroy();
  // header("Location: Index.php");
  echo $randomNumber;
}

 ?>
