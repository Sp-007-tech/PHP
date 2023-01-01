<!-- A class is a template of objects, and an object is an instance of class. -->

<!-- In a class, variable are called properties and function are called methods.. -->

<?php

    class Fruit {
        
        // properties
        public $name;
        public $color;
    

    // Method
    function set_name($name){
        $this->$name = $name;
        
    }

    function get_name(){
        return $this->name;
    }
}

// object of class
$apple = new Fruit();
$mango = new Fruit();

$apple->set_name('Apple');
$mango->set_name('Mango');

// function calling
echo $apple->get_name();
echo $mango->get_name();

?>
