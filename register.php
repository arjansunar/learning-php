<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <style>
        .error{
            color: red;
        }
    </style>
</head>

<body>

    <?php 

    include 'db_conf.php';

    if ($conn->connect_error){
        die("connection aborted");
    }
    else{
        echo "success~~";
        
        $username=$password=$confirm_password="";
        $username_err=$password_err=$confirm_password_err=$password_mismatch_err="";
        $error=false;
        if ($_SERVER["REQUEST_METHOD"]=='POST'){
            // echo var_dump($_POST);
            if (empty($_POST['username'])) {
                $username_err= "username cannot be empty";
                $error =true;
            }
            else $username = $_POST['username'];

            if (empty($_POST['password'])) {
                $password_err= "password cannot be empty";
                $error=true;
            }
            else $password = $_POST['password'];

            if (empty($_POST['confirm_password'])) {
                $confirm_password_err= "confirm password cannot be empty";
                $error=true;
            }
            else $confirm_password = $_POST['confirm_password'];

            if ($password!= $confirm_password) {
                $password_mismatch_err= "password mismatch";
                $error=true;
            }
            if(!$error){
                if ($conn->connect_error){
                    die("connection aborted");
                }
                else {
                    $password= md5($password);
                    $sql ="INSERT INTO register (Username,Password) VALUES ('$username','$password')";
    
                    echo $sql;
                    if ($conn->query($sql) == true) {
                        echo "<h1> success</h1>";
                    } else {
                        echo "<p>not successfull</p>";
                    }
                }
            }
        }

        
    }
    ?>
    <h1>User registration</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method ="POST">
        Username: <input type ="text" name="username"><span class="error"><?php echo $username_err?></span><br> 
        Password: <input type ="password" name = "password"><span class="error"><?php echo $password_err?></span><br> 
        Confirm Password: <input type ="password" name= "confirm_password"><span class="error"><?php echo $confirm_password_err?></span><br> 
        <span class="error"><?php echo $password_mismatch_err?></span>

        <input type="submit" value="submit">
    </form>
</body>

</html>