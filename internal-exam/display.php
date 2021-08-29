<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label for="product_id">Enter product id to search</label>
        <br><br>
        <input type="number" name="product_id" id="product_id">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    include 'db_conf.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $product_id= $_POST["product_id"];
        if ($conn->connect_error){
            die("connection aborted");
          }
          else{
            $sql = "SELECT * FROM PRODUCT WHERE id= $product_id";
            $result = $conn->query($sql);
            if ($result->num_rows>0){
                $row = $result->fetch_assoc();
                echo "<br><br>";
                echo "<h2>Detailed information of product ID: $product_id</h2>";
                echo "<br>";
                echo "<img src=".$row["path"].">";

                echo "
                <table>
                    <tr>
                        <td>Name</td>
                        <td>".$row["name"]."</td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>".$row["price"]."</td>
                    </tr>
                </table>
                ";
            }
          }
    }

?>

