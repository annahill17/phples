<?php
session_start();
?>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Index</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="calculator.php"> Calculator</a>
        <a class="nav-link" href="calendar.php">Calendar</a>
        <a class="nav-link" href="conditionals.php">Conditionals</a>
        <a class="nav-link" href="datatype.php">Datatype</a>
        <a class="nav-link" href="functions.php">Functions</a>
        <a class="nav-link" href="index.php">Index</a>
        <a class="nav-link" href="loops.php">Loops</a>
        <a class="nav-link" href="operators.php">Operators</a>
        <a class="nav-link" href="superglobals.php">Superglobals</a>
      </div>
    </div>
  </div>
</nav>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
</head>
<body>
  
<?php

$_SESSION['username'] = "annah138a  ";
echo $_SESSION['username'];

if (!isset($_SESSION['username'])) {
  echo "You are not logged in!";
} else{
  echo "You are logged in!";
}


?>

</body>
</html>