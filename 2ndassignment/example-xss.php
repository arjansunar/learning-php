<html> 
    <body>  
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
        Name : <input type="text" name="name"><br> <br>
        <input type="submit" value="Submit" name="button">  
        </form>  
        <?php  if($_SERVER["REQUEST_METHOD"] == "POST"){ 	
            $website = $_POST['name']; 
            if(empty($website)) echo  "empty";
             else echo htmlspecialchars($website); } 
        ?>  
    </body> 
</html>