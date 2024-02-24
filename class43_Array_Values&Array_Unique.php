<?php

// Array_Values & Array_Unique

$colour = array("a"=>"red","b"=>"green","c"=>"yellow","d"=>"blue",);

$newArray = array_values($colour); // yeh function array ki values nikal kr deta hy

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";


$colour = array("a"=>"red","b"=>"green","c"=>"red","d"=>"blue",);

$newArray = array_unique($colour); // yeh function array ki unique values nikal kr deta hy or duplicate ko chor deta hy

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";