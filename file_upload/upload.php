<?php 
    $target_dir= "uploads/";

    if($_SERVER["REQUEST_METHOD"=="POST"]){
        $file= $_POST["file_upload"];
        echo $file;
    }