

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
    <h1>Hello, world!</h1>
    <?php

    //Arithmetic Operators(video 8)
    echo 5+5;

?>
 <hr>
<?php

//Assignment Operators(video 9)
$x = 100;
$x += 20;
echo $x;
?>
<hr>
<?php

    //Comparison Operators (video 10)
    $x = 10;
    $y = 10;

    if($x <> $y){
        echo "True!";
    }
    else{
        echo "False!";
    }
?>
<hr>
<?php

    //Increment/ Decrement Operators (video 11)
    $x = 10;
    echo $x--;
    echo $x;

?>  
<hr>
<?php

    //Logical Operators (video 12)
    $x = 20;
    $x = 20;

    if($x == $y xor 1 == 1) {
        echo "True";
    }
?>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>