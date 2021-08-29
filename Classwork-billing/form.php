<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy product</title>
</head>
<body>
    <?php
        include 'db_conf.php';

        if ($conn->connect_error){
            die("connection aborted");
        }
        else{
            $sql = "SELECT * FROM Product";
            $result = $conn->query($sql);
            $products=[];
            if ($result->num_rows > 0){
                while ($row = $result->fetch_assoc()) {
                    array_push($products, $row);
                }   

            }
        }
        
    ?>
    <br>
    <label for="product">Product:</label>

    <select name="product" id="product">
        <?php 
            
            foreach ($products as $key ) {
                echo '<option value="'.$key["name"].'">'.$key["name"].'</option>';
            }
        ?>
    </select>

    <script>

        let product = document.getElementById("product");
        product.addEventListener("click",()=>console.log(product.value))
    </script>
</body>
</html>