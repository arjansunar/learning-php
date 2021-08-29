<?php include 'db_conf.php'; 
    session_start();
    if (!isset($_SESSION['username'])){
        header('location:login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p><?php echo "Welcome ".$_SESSION['username'] ?></p>
    <a href="logout.php">logout</a>
    <?php

    if ($conn->connect_error) {
        die("connection aborted");
    } else {
        echo "<h1>connection established successfully</h1>";

        $sql = "SELECT * FROM Student";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            // output data of each row
            echo "
            <table>
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Marks</th>
                </thead>
            <tbody>
            ";
            while ($row = $result->fetch_assoc()) {

                echo "
                <tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['age'] . "</td>
                    <td>" . $row['marks'] . "</td>
                ";

                echo "<td><a href='record_delete.php?id=" . $row['id'] . "'>delete</a></td>";
                echo "<td><a href='record_update.php?id=" . $row['id'] . "'>update</a></td>";
                echo "  </tr> ";
            }

            echo "
                    </tbody>
                </table>";
        } else {
            echo "0 results";
        }
    }
    $conn->close();
    ?>
</body>

</html>