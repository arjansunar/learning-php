<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Upload Files</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" enctype="multipart/form-data" method="POST">        
        <table>
            <tr>
                <td>
                    Product Name
                </td>
                <td>
                  <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    Product Price
                </td>
                <td>
                    <input type="number" name="price">
                </td>
            </tr>
            <tr>
                <td>
                    Photo
                </td>
                <td>
                    <input type="file" name="photo" id="photo">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="submit">
                </td>
            </tr>
        </table>
        </form>
   </body>
</html>

<?php
include 'db_conf.php';

$target_dir = __DIR__."/uploads/";
if($_SERVER['REQUEST_METHOD']=='POST' and isset($_POST['submit'])){

   $_target_file=$target_dir.basename($_FILES['photo']['name']);
   if (move_uploaded_file($_FILES['photo']['tmp_name'],$_target_file)){
      if ($conn->connect_error){
        die("connection aborted");
      }
      else{        
        $name= $_POST["name"];
        $price= (float)$_POST["price"];
        $path= $_target_file;
        $sql= "INSERT INTO PRODUCT(name,price,path) VALUE('$name',$price,'$path')";

        // echo $sql;
        if ($conn->query($sql) == true) {
            echo "<br><br><h6> success</h6>";
        } else {
            echo "<p>not successfull</p>";
        }
      }
   }else {
      echo "<br><h1>failure</h1>";
   }
}
?>