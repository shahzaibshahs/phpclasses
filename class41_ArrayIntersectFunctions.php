<?php

// Array Intersect Functions


$a1 = array("a"=>"red","f"=>"green","c"=>"yellow","d"=>"blue",);

$a2 = array("a"=>"red","g"=>"green","e"=>"purple","d"=>"blue",);

$newArray = array_intersect($a1, $a2); // yeh function yeha pr array me se common values nikal ke deta hy 

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";

$a1 = array("a"=>"red","f"=>"green","c"=>"yellow","d"=>"blue",);

$a2 = array("a"=>"red","g"=>"green","e"=>"purple","d"=>"blue",);

$newArray = array_intersect_key($a1, $a2); // yeh function yeha pr array me se common key nikal ke deta hy 

echo "<pre>";
print_r($newArray);
echo "</pre>";

$a1 = array("a"=>"red","b"=>"green","c"=>"yellow","d"=>"blue",);

$a2 = array("a"=>"red","b"=>"green","e"=>"purple","d"=>"blue",);

$newArray = array_intersect_assoc($a1, $a2); // yeh function yeha pr array me se common key values nikal ke deta hy 

echo "<pre>";
print_r($newArray);
echo "</pre>";