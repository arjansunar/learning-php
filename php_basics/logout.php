<?php 
session_start();
session_unset();
session_destroy();
// unset($_SESSION['username']);
// unset($_SESSION['isLoggedIn']);
header("location:login.php");
