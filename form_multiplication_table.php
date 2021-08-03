<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>enter a number</h2>
    <form action="#" method='POST'>
        <input type="text" name="number" id="">
        <br>
        <br>

        <input type="submit" value="submit">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        echo $number;
        for ($i = 0; $i < $number; $i++) {
            echo "<br>$i x $number = " . ($i * $number);
        }
    }
    ?>
</body>

</html>