<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>

<?php

echo str_replace("Anna","Jenna","Hi Anna"); 

echo "<br>";
//user defined functions
$x = 100;

    function newCalc($x) {
        $newnr = $x * 0.75;
        echo "here is 75% of what i wrote: ".$newnr;
    }
 $x = 100;
newCalc($x);
echo "<br>";
$a = 10;
newCalc($a);
?>   
</body>
</html>