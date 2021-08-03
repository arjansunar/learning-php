<?php
include 'db_conf.php';

if ($conn->connect_error) {
    die("connection aborted");
} else {
    echo "<h1>connection established successfully</h1>";

    $id = $_GET["id"];
    $sql = "DELETE FROM Student WHERE id = $id";

    if ($conn->query($sql) == TRUE) {
        header("location:student_list.php");
    } else {
        echo "<p>not successfull</p>";
    }
}
