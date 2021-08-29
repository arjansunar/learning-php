<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $server = 'localhost';
    $user = 'root';
    $pwd = '';
    $db = 'phpTutorial';

    // Create connection
    $conn = new mysqli($server, $user, $pwd, $db);
    if ($conn->connect_error) {
        die("connection aborted");
    } else {
        echo "<h1>connection established successfully</h1>";

        $sql = "INSERT INTO Student(name,age,marks) VALUES( 'Ram', 20,40.5 )";
        if ($conn->query($sql) == TRUE) {
            echo "<p>record is inserted</p>";
        } else {
            echo "error during insertion";
        }
    }


    ?>
</body>

</html>