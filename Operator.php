<!--Operator In PHP  -->

<?php
$var1 =45;
$var2 = 50;

Echo $var1+$var2;


// Arithmatic operator
echo "<br>";
echo "The value of var1 and var2 is ";
echo $var1 + $var2;
echo "<br>";
echo "The value of var1 and var2 is ";
echo $var1 - $var2;
echo "<br>";
echo "The value of var1 and var2 is ";
echo $var1 * $var2;
echo "<br>";
echo "The value of var1 and var2 is ";
echo $var1 / $var2;


// Assignment Operator
echo "<br> <br>";
$newVar = $var1; # here value of $var1 is assign to $newVarl.
$newVar += 2; # This method add no.in newvariable
echo "The value of new variable is ";
echo $newVar;



// Comparison operatore
echo "<br> <br>";
echo "The value of 1==3 is ";
echo var_dump(1==3);
echo "<br>";

echo "The value of 1!=3 is ";
echo var_dump(1!=3);
echo "<br>";

echo "The value of 1>=3 is ";
echo var_dump(1>=3);
echo "<br>";

echo "The value of 1<=3 is ";
echo var_dump(1<=3);
echo "<br><br>";




// Increment/Decrement operator

//Post Incriment/Decrement
echo $var1++;
echo"<br>";
echo $var1--;

echo "<br> <br>";

//Pre increment/Decrement
echo ++$var1;
echo "<br>";
echo --$var1;

echo "<br><br>";




// logical operator

// (1)and (2)or (3)xor
$myvar0 = (true and true);
$myvar1 = (false and true);
$myvar2 = (true and false);
$myvar3 = (false and false);
echo var_dump($myvar0);echo"<br>";
echo var_dump($myvar1);echo"<br>";
echo var_dump($myvar2);echo"<br>";
echo var_dump($myvar3);echo"<br>";

echo "<br><br>";

$yep0 = (true or true);
$yep1 = (true or false);
$yep2 = (false or true);
$yep3 = (false or false);
echo var_dump($yep0);echo "<br>";
echo var_dump($yep1);echo "<br>";
echo var_dump($yep2);echo "<br>";
echo var_dump($yep3);echo "<br>";

echo "<br><br>";

$nup0 = (true xor true);
$nup1 = (false xor true);
$nup2 = (true xor false);
$nup3 = (false xor false);
echo var_dump($nup0);echo "<br>";
echo var_dump($nup1);echo "<br>";
echo var_dump($nup2);echo "<br>";
echo var_dump($nup3);echo "<br>";


?>
