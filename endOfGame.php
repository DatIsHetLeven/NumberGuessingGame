<?php
session_start();

//Destroy session -> Go to landing page
if (isset($_POST['desButton'])){
  session_destroy();
  header("Location: index.php");
  exit();
}


 ?>
