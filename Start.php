<!DDOCTYPE html>
<html>
<head>
    <title>Guessing Number Game</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Guessing Number Game</h1>
    <form action="checkValue.php" method="post">
        <input type="number" name="inputUser" min="1" max="1000" placeholder="Guess between 1-1000">
        <input type="submit"name="guessButton" value="Guess">
    </form>
</body>
</html>
