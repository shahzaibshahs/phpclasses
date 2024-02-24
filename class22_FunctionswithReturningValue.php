<?php 

function sum($math, $eng, $urdu){
    $s = $math + $eng + $urdu;

    return $s;
}

$total = sum(55,65,88);

echo $total;

echo "<br>";

function Yourname($fname,$lname){
    $v = "$fname, $lname";

    return $v;
}

$name = Yourname("Web","Developer");
echo $name;