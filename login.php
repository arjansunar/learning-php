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
    session_start();

    if ($conn->connect_error){
        die("connection aborted");
    }
    else{
        echo "success~~";
        
        $username=$password="";
        $username_err=$password_err_err=$password_mismatch_err="";
        $error=false;
        if ($_SERVER["REQUEST_METHOD"]=='POST'){
            // echo var_dump($_POST);
            if (empty($_POST['username'])) {
                $username_err= "username cannot be empty";
                $error =true;
            }else $username = $_POST['username'];

            if (empty($_POST['password'])) {
                $password_err= "password cannot be empty";
                $error=true;
            }else $password = $_POST['password'];
            if(!$error){
                if ($conn->connect_error){
                    die("connection aborted");
                }
                else {
                    $password= md5($password);
                    $sql ="SELECT * FROM register WHERE Username = '$username' AND Password = '$password'";
                    $result =$conn->query($sql);

                    if ($result->num_rows >0){
                        $res = $result->fetch_assoc();
                        echo "response: ". var_dump($res);
                        echo "login successfull...!";
                        $_SESSION['username']= $username;
                        $_SESSION['isLoggedIn']= true;
                        header("location:student_list.php");
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

        <input type="submit" value="submit">
    </form>
</body>

</html>