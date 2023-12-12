<?php 
    $fruits = ["apple", "orange", "pear"];

    // get length
    echo count($fruits);

    // search array
    var_dump(in_array('apple', $fruits));

    // add to an array 
    $fruits[] = "grape";
    array_push($fruits, "blueberry", "strawberry");
    array_unshift($fruits, "mango", "watermelon");

    // remove from array
    array_pop($fruits);
    array_shift($fruits);

    // unset removes item and index
    // unset($fruits[2]);

    $chunked_array = array_chunk($fruits, 2);


    print_r($chunked_array);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "hola mundo";
    ?>
</body>
</html>