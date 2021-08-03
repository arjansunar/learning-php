<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>processing forms with php</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method='POST'>
        Name: <input type="text" name='name'>
        <input type="submit" value="submit">
    </form>

    <?php

    function get_input_val()
    {
    }
    echo 'The name is ' . $_POST['name'];

    ?>
</body>

</html>