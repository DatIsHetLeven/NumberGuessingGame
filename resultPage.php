<!DDOCTYPE html>
<html>
<head>
    <title>Guessing Number Game</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <?php require('endOfGame.php')?>
    <h1>Cheers, u gessed the number!</h1>
    <form action="endOfGame.php" method="post">
      <input type="submit"name="desButton" value="Reset Game!" class="button">
      <br>You gessed the right number (<?php  echo $randomNumber?>)</br>
      <br>Attempts needed : <?php echo $attempt;?>
    </form>
</body>
</html>
