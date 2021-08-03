<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<style>
    body{
        padding: 5rem 10rem;
    }
</style>
<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset >
            <legend><strong>Enter student details</strong></legend>
        Name: <input type="text" name ="name"><br><br>
        Marks obtained: 
        <input type="number" name= "subject1" placeholder="subject1">
        <input type="number" name="subject2"  placeholder="subject2">
        <input type="number" name="subject3"  placeholder="subject3">
        <br><br>
        <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>

<?php
include 'db-conf.php';

if ($conn->connect_error) {
    die("connection aborted");
} else {
    // echo "<h1>connection established successfully</h1>";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $subject1=$_POST['subject1'];
        $subject2=$_POST['subject2'];
        $subject3=$_POST['subject3'];

        $sql = "INSERT INTO Result(name,subject1,subject2,subject3) VALUES('$name',$subject1,$subject2,$subject3)";
        // echo $sql;
        if ($conn->query($sql) == TRUE) {
            echo "<p>record is inserted</p>";
        } else {
            echo "error during insertion";
        }
    }
}
