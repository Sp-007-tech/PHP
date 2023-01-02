<!-- Date and Time Function  -->
<?php

echo " Today is " . date("Y/m/d") . "<br>"; 
echo " today is " . date("Y.m.d") . "<br>";
echo " Today is " . date("Y-m-d") . "<br>";
echo " Today is " . date("Y-m-d") . "<br>";
echo " Today is " . date("1") . "<br>";
?>

<?php
echo "The time is " . date("h:i:sa") . "<br>";
?>



<?php
    date_default_timezone_set("America/New_York");
    echo "The time is " . date("h:i:sa");

?>

