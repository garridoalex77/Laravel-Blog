<!DOCTYPE html>
<html lang="en">
<head>
    <title>Roll some dice</title>
</head>
<body>
    <h1>Hello Guess a Number</h1>
    <h2><?= $message ?></h2>
    <h2><?= $guess ?></h2>
    <h2><?= $roll ?></h2>
    <form method="POST" action="">
        <label for="number">Number: </label>
        <input type="text" name="number" id="number">
        <input type="submit">
    </form>

</body>
</html>