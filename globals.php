<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Globals</title>
</head>

<body>
    <?php
    $a = 10;
    $b = 20;

    function sum()
    {
        $sum = $GLOBALS['a'] + $GLOBALS['b'];
        echo "<br>sum is $sum<br>";
    }

    // sum();

    // echo var_dump($GLOBALS);

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    ?>
</body>

</html>