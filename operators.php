<!DOCTYPE html>
<html lang="en">
<head>                
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
 
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
</body>
</html>
