<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student results</title>
</head>
<style>
    body{
        padding: 5rem 3rem;
    }
    table {
       border-collapse: collapse;
       width: 70vw;
    }
    table, th, td {
        border: 1px solid black;
    }

</style>
<body>
<?php
    include 'db-conf.php';

    if ($conn->connect_error) {
        die("connection aborted");
    } else {
        echo " <h2>student report card</h2> <br>";
        $sql = "SELECT * FROM Result";
        $result = $conn->query($sql);

        function get_avg($arr){
            $sum=0;
            foreach ($arr as $mark) {
                $sum += $mark;
            }
            return $sum / count($arr);
        }

        if ($result->num_rows > 0) {
            // output data of each row
            echo "
            <table>
                <thead>
                    <th>Name</th>
                    <th colspan='3'>Subjects</th>
                    <th>Average Mark</th>
                </thead>
            <tbody>
            ";
            while ($row = $result->fetch_assoc()) {
                echo "
                <tr>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['subject1'] . "</td>
                    <td>" . $row['subject2'] . "</td>
                    <td>" . $row['subject3'] . "</td>
                    <td>".get_avg([$row['subject1'],$row['subject2'],$row['subject3']])."</td>    
                </tr> 
                ";
            }

            echo "
                    </tbody>
                </table>";
        } else {
            echo "0 results";
        }
    }
?>    
</body>
</html>
