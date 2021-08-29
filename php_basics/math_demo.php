<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math demo</title>
</head>

<body>
    <?php
    $name = "arjan";
    echo "the value of pi is: " . pi();

    echo "<br>the max of 10 and 100 is: " . max(10, 100);
    echo "<br>the absolute value of -pi is: " . abs(-pi());
    echo "<br>the rounded value of pi is: " . round(-pi());

    ?>
    <?php echo "<br>trying to access another variable: $name" ?>
</body>

</html>