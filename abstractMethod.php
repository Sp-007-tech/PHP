<?php
abstract class car {
    public $name;
    public function __construct($name){
        $this->name=$name;
    }

    abstract public function intro() : string;
}
//child classes 

class Audi extends car {
    public function intro() : string {
        return "I am Audi";
    }
}

class BMW extends car{
    public function intro() : string {
        return "I am BMW";
    }
}

class Citroen extends car {
    public function intro() : string {
        return "I am Citroen" ;
    }
}

// creating objects from the child classes

$audi = new audi("Audi");
ehco $audi->intro();


?>