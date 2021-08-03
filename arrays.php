<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays</title>
</head>

<body>
    <?php
    echo "<h1> arrays in php</h1>";

    $name = array("arjan", "ram");
    echo "<br> the length of array is " . count($name);
    foreach ($name as $value) {
        echo "<br>$value";
    }

    echo "<h1>Associative array</h1>";

    $map = array("1" => "hello", "2" => "there");

    foreach ($map as $key => $value) {
        echo "<br> $key => $value";
    }

    echo "<br>Multidimensional array";

    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );

    foreach ($cars as $car) {
        echo "<br>Car: [";
        foreach ($car as $val) {
            echo "$val, ";
        }
        echo " ]";
    }
    ?>
</body>

</html>