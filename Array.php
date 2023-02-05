<!-- Array's In PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<!--Title-->
    <title>Array</title>
</head>
<body>
    
    <h1>Array in php</h1>
    
</body>
<?php

echo "Indexed Array Example:"."<br>";
$class = array("MMN","BCA","BSC","BCOM");
echo "\n The classes are : $class[0],$class[1],$class[2]";
echo "<br><br>";

echo "Associative Array Example:"."<br>";
$salary = array("Gon" => "5000","kilua" => "6000","Ervin" => "7000");
echo "\n Gon's Salary : ".$salary["Gon"];echo "<br>";
echo "\n Kilua's Salary : ".$salary["kilua"];echo "<br>";
echo "\n Ervin's Salary : ".$salary["Ervin"];echo "<br>";
echo "<br><br>";


echo "Multi Dimensional Example:"."<br>";
$emp = array(array(1,"Levi",500),array(2,"Sam",600),array(3,"Tak",700));

for ($row=0;$row<3;$row++){
    for($col=0;$col<3;$col++){
        echo "\t".$emp[$row][$col]."";
    }
    echo "\n";
    
}
?>
    
</html>
