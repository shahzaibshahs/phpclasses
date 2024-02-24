<?php

// String Str_split & Chunk_split

$str = "Shahzaib Shah";

$array = str_split($str,); //yeh function yeha pr string data ho vertical array me lata hy
// $array = str_split($str,2);

echo "<pre>";
print_r($array);
echo "</pre>";

echo"<br>";


$str = "Web Developer";

$array = chunk_split($str,1,".");

echo $array;

