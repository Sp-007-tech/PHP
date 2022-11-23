<!-- **Properties and methods can have access modifiers which control where they can be accesed.

(1)Public :: The property or method can be accessed from everywhere.

(2)Protected :: The property or method can be accessed within the class and by classes derived form that class..

(3)Private :: The property or method can only be accessed within the class.. 
-->


<?php

//class Fruit {
   // public $name;
  //  protected $color;
  //  private $weight;
//}

//$mango = new Fruit();
//$mango->name = 'Mango'; //It's ok
//$mango-> color = 'yellow'; //It will cause error
//$mango-> weight = '10'; //It will cause error


//?>

<!-- Another Example -->

<?php

class fruit{
    public $name;
    public $color;
    public $weight;

    function set_name($n){
        $this->name=$n;
    }

    protected function set_color($n){
        $this->color=$n;
    }

    private function set_weight($n){
        $this->weight=$n;
    } 
}


$mango = new fruit();
$mango->set_name('mango');
// $mango->set_color('yellow');
// $mango->set_weight('100');




?>