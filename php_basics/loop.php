<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops!!!</title>
</head>

<body>
    <?php
    echo "<h1>Loop in PHP</h1>";

    for ($i = 0; $i < 5; $i++) {
        echo "<br> hello there world!!";
    }

    $j = 5;
    while ($j > 10) {
        echo "<br> WHILd";
    }
    do {
        echo "<br> WHILd";
    } while ($j > 10);
    ?>
</body>

</html>