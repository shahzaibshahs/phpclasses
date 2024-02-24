<?php 

// PHP Function Argument By Reference

function first($num){
    $num += 5;
}

function second(&$num){ //address store
    $num += 7;
}

$number = 10;

first($number);
echo "Original Value is $number <br>";

second($number);
echo "Original Value is $number <br>";

?>