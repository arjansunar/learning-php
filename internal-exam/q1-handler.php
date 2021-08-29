<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
    if (isset($_POST["percentage"])){
        $percentage= (int)$_POST["percentage"];
        echo "<h2>Result obtained:</h2>";
        if ($percentage < 50) {
            echo "<h1>FAIL</h1";
        }else if ($percentage>=50 && $percentage < 60){
            echo "<h1>SECOND DIVISION</h1";
        }else if ($percentage>=60 && $percentage < 70){
            echo "<h1>FIRST DIVISION</h1";
        }else if ($percentage>=70 && $percentage <= 100){
            echo "<h1>DISTINCTION</h1";
        }else{
            echo "<h1>INVALID INPUT</h1>";
        }
    }
}

?>