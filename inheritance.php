<!-- Inheritance In PHP -->

<?php

class Fruit {
    public $name;
    public $color;

    public function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }

    public function intro() {
        echo "The fruit is {$this->name} and color is{$this->color}.";
    }

}

// Mango class inheritaded form Fruit
class mango extends Fruit {
    public function message(){
        echo "Am I a fruit or Vegetable ? <br><br>";
    }
}


$mango = new Mango("Mango","Yellow");
$mango->message();
$mango->intro();

?>



<!-- Another example with Protected Access Modifer -->

<?php

class fal {

    public $name;
    public $color;

    public function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }

    Protected function intro(){
        echo "This fruit is {$this->name} and the color is {$this->color}.";
    }
}

class Orange extends fal {
    public function message(){
        echo "Am i fruit of berry ?🤔";
    }
}

$orange = new Orange("Orange","dont know ");


$orange->message();//It is ok ,coz message() is public.

//$orange->intro();// This will gives an error coz intro() method is protected.so we have to call intro() method within class.


?>


<!-- Overriding :: (1) Inherited method can be overridden by redefining the methods (use the same name) in the child class -->

<?php

class Fu {

    public $name;
    public $color;

    public function __construct($name,$color){
        $this->name=$name;
        $this->name=$color;
    }

    public function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class Strawberry extends fu {
    public $weight;

    public function __construct($name,$color,$weight){
        $this->name=$name;
        $this->color=$color;
        $this->weight=$weight;
    }
    public function intro(){
        echo "The fruit is {$this->name} and color is {$this->color} and its weight is {$this->weight}.";
    }
}

$strawberry = new Strawberry("Strawberry","red","10g");

$strawberry->intro();


?>
<!-- In above example the __construct and intro() methods in the child class (Strawberry) will override the __construct()and
     intro() method in the parent calss(fu) -->

<!-- The final keyword can be used to prevent class inherited or to prevent method form overriding. -->
