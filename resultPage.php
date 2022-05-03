<!DDOCTYPE html>
<html>
<head>
    <title>Guessing Number Game</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Cheers, u gessed the number!</h1>
    <form action="endOfGame.php" method="post">
      <input type="submit"name="desButton" value="Reset Game!">
      Je hebt het juiste getal geraden, poging nodig :
        <?php session_start(); $randomNumber = $_SESSION['randomnumber']; echo $randomNumber; ?>
        <?php  $attempt = $_SESSION['views']; echo $attempt; ?>
    </form>
</body>
</html>
