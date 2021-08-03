<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .error {
        color: red;
    }
</style>

<body>

    <?php

    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        }

        if (empty($_POST["website"])) {
            $website = "";
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        }
    }
    ?>
    <p>user registration form</p>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        Name: <input type="text" name="name"><span class='error'>*<?php echo $nameErr ?></span><br><br>
        E-mail: <input type="text" name="email"><span class='error'>*<?php echo $emailErr ?></span><br><br>
        Website: <input type="text" name="website"><span class='error'>*<?php echo $websiteErr ?></span><br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other <span class='error'>*<?php echo $genderErr ?></span><br><br>

        <input type="submit">
    </form>


</body>

</html>