<!--(1)A constructor allows you to initialize object's properties upon creation of object.   (2)If you create "__construct()" fuction, php will automatically call the function when you create an object for a class.  (3)Here construct function will start with the two underscores(__) -->


<?php

class Fruit {
    public $name;

    function __construct($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->$name;
    }
}
$apple = new Fruit("Apple");
echo $apple->get_name();

?>

<!-- Another Example -->

<?php

class fruit {
    public $name;
    public $color;

    function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
}

$apple = new fruit("Apple","Red");
echo $apple->get_name();
echo $apple->get_color();
?>