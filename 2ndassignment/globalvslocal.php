<?php
    echo "<h1> Global Variables vs Local Variables";
    $global_var ="This is global variable";

    function print_vars(){
        global $global_var;
        echo "<br>The value of variable is $global_var<br>";
    }
    print_vars();
    echo "<br>The value of global variable is $global_var<br>";

?>

<?php
    echo "<br> Trying out local variables ";

    function local_var(){
        $local = "this is local variable";

        echo var_dump($local);
    }
    echo "<br>Accessing local variable with in scope:";
    local_var();
    echo "<br>Accessing local variable out of scope: $local";
    echo var_dump($local);
?>

