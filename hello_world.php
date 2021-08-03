<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning php
    </title>
</head>

<body>
    <?php
    echo "<h1>hello there</h1>";
    $name = "arjan";
    echo "My name is $name" . "<br>";
    $variable = "variable";
    echo "this is weird " . $variable . '<br>';
    echo "the data type of \$variable is ";
    echo var_dump($variable) . "<br>";

    $x = true;
    echo "x is " . var_dump($x);
    echo "<br>hahah OOP<br>";

    class Student
    {
        public $name;
        public $currentSourceOfHeadache;

        public function __construct($name, $currentSourceOfHeadache)
        {
            $this->name = $name;
            $this->currentSourceOfHeadache = $currentSourceOfHeadache;
        }
        public function display()
        {
            echo "The student is $this->name and is sufferring from $this->currentSourceOfHeadache<br>";
        }
    }

    $s = new Student("arjan", "assignments");
    $s->display();
    echo var_dump($s);
    ?>
</body>

</html>