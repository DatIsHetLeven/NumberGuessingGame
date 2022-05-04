<!DDOCTYPE html>
<html>
<head>
    <title>Guessing Number Game</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
  <?php require('checkValue.php')?>
    <h1>Guessing Number Game</h1>
    <form  method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="inputUser" min="1" max="1000" placeholder="Guess between 1-1000" id="userInput">
        <input type="submit"name="guessButton" value="Guess" class="button">
    </form>
</body>
</html>
