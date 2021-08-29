<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
</head>

<body>
    <?php
    echo "<p> if conditionals</p>";

    $num = 5;
    if ($num % 2 == 0)
        echo "its even";
    else
        echo "its odd";

    $num1 = 5;
    $num2 = 10;
    $num3 = 15;

    if ($num1 > $num2 && $num1 > $num3) {
        echo "<h1>the largest is $num1</h1>";
    } elseif ($num2 > $num1 && $num2 > $num3) {
        echo "<h1>the largest is $num2</h1>";
    } elseif ($num3 > $num1 && $num3 > $num2) {
        echo "<h1>the largest is $num3</h1>";
    } else {
        echo "<h1>they are equal</h1>";
    }

    echo "<h1> using switch statements</h1>";

    $operator = "+";
    $result;
    switch ($operator) {

        case '+':
            $result = $num + $num1;
            break;

        case '-':
            $result = $num - $num1;
            break;

        case '*':
            $result = $num * $num1;
            break;

        case '/':
            $result = $num / $num1;
            break;
        default:
            break;
    }

    echo "<h2>the result is $result</h2>"
    ?>
</body>

</html>