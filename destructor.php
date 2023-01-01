<!-- (1)A destructor is called when the object is destructed or the script is stopped. 
(2)If you create "__destruct()"function,PHP will automatically call this function at the end of the script.
(3)Here destruct function is started with two underscore (__).
(4)In below example,__construct function will call automatically when you create object for class and __destruct function will automatically destruct the object at the end of the script. -->


<?php

    class Fruit {
        public $name;

        function __construct($name){
            $this->name=$name;
        }
        function __destruct(){
            echo "The fruit is {$this->name}.";
        }
    }

    $apple =new Fruit("Apple");

?>


<!-- Another Example -->

<?php

class fal {
    public $name;
    public $color;

    function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
    function __destruct(){
        echo "This fruit is {$this->name} and its color is {$this->color}.";
    }
}

$mango = new fal("Mango","Yellow");

?>
