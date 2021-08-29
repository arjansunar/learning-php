<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string example</title>
</head>

<body>
    <?php
    $name = "arjan gahatraj";
    echo "<p>total characters in name is: " . strlen($name) . "</p>";
    echo "<p>the reverse of name is: ", strrev($name) . "</p>";
    echo "<h1>the position of my surname is: " . strpos($name, "gahatraj");
    echo "<p>replacing surname by sunar: " . str_replace("gahatraj", "sunar", $name) . "</p>";
    ?>
</body>

</html>