

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <?php
    include 'includes/header.php';
?>
    <h1>Hello!</h1>
    <?php
//Loop

//While Loop
//Do while Loop 
//For Looop
//Foreach Loop

// While Loop
    $x = 1;
    while ($x <= 5){
        echo "hi there<br>";
        $x++;
}
// Do while Loop
    $x = 1;
    do {
        echo "hi there<br>";
        $x++;
    }
    while ($x <= 5);
 // For Loop
        for($x = 1; $x <= 10; $x++) {
            echo "hi<br>";
        }
// Foreach Loop
        $array = array("Anna", "Libby", "Amy", "John","Marianne");

        foreach ($array as $loopdata) {
            echo "My name is ".$loopdata."<br>";
        }
        
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>