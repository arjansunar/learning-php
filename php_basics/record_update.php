<?php
include 'db_conf.php';

if ($conn->connect_error) {
    die("connection aborted");
} else {
    echo "<h1>connection established successfully</h1>";

    $id = $_GET["id"];
    $sql = "SELECT * FROM Student WHERE id = " . $id;

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    echo var_dump($row);
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

    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        Name: <input type="text" name="name" value="<?php echo $row['name'] ?>"><br><br>
        Age: <input type="text" name="age" value="<?php echo $row['age'] ?>"><br><br>
        Marks: <input type="text" name="marks" value="<?php echo $row['marks'] ?>"><br><br>
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        <input type="submit">
    </form>

</body>

</html>

<?php
include 'db_conf.php';

if ($conn->connect_error) {
    die("connection aborted");
} else {
    echo "<h1>connection established successfully</h1>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo var_dump($_POST);
        $id = $_POST["id"];
        $name = $_POST["name"];
        $age = $_POST["age"];
        $marks = $_POST["marks"];


        $sql = "UPDATE Student SET name = '$name', age ='$age' , marks= '$marks' WHERE id = $id";
        echo $sql;
        if ($conn->query($sql) == true) {
            header("location:student_list.php");
        } else {
            echo "<p>not successfull</p>";
        }
    }
}
?>