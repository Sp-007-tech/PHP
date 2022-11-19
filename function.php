<?php
function writeMsg(){
    echo "Hey ,there !"."<br>";
}
writeMsg();
?>



<!-- with parameter
//<?php
//function familyName($fname){
 //   echo "$fname Farnandes"."<br>";
//}
//familyName("Jack");
//familyName("Gon");
//familyName("Levi");

//?>

<?php
function name($name,$year){
    echo "$name Hanma. Born in $year";
}
name("Jack","1950");
name("Yojiro","1970");
name("Baki","1999");

?>