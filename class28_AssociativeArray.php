<?php 

// PHP  Associative Array
// Array ke ander ap mix value use krt sakty hy like string integar or float wagera

$age = array("Bill" => 25, "Steve" => 30, "Elon" => 23); // i used this for easy understanding

//secnod way 

// $age = ["Bill" => 25, "Steve" => 30, "Elon" => 23];

echo $age["Bill"] . "<br>";
echo $age["Steve"]. "<br>";
echo $age["Elon"]. "<br>";

echo "<br>";

echo "<pre>"; // just for readable form
print_r($age);
// var_dump($age); for detail
echo "</pre>";

