<?php

// Array_Column & Array_Chunk

$array = array(
array ('id' => 2001,
'first_name'=> 'Shahzaib',
'last_name'=> 'Shah',
), 


array('id' => 1995,
'first_name'=> 'Php',
'last_name'=> 'backend',
), 


array('id' => 1997,
'first_name'=> 'javascript',
'last_name'=> 'frontend',
), 
);

$newArray = array_column($array,'first_name','id');


echo "<pre>";
print_r($newArray);
echo "</pre>";


echo "<br>";


$cars = ['Audi','Royal','Mercadies','Civic','4x4'];

$newArray = array_chunk($cars,2); // index array ko multidimensional array me convert krta hy

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";

$age = array(
    "Shahzaib" => "22",
    "Kashif" => "25",
    "Ayaz" => "30",
    "Siraj" => "20",
);

$newArray = array_chunk($age,2,true);

echo "<pre>";
print_r($newArray);
echo "</pre>";

// Now Array Classes Skip From Lec 50 if you need watch on yotube yahoo baba array section from video no 50
