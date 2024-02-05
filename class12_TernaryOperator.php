<?php

// Ternary Operator

$x = 10;

($x > 20)? $z = "Greater" : $z = "Smaller";
echo $z;
echo "</br>";

// Second Example

$x = 30;

$z = "Value is: " . ($x > 20 ? "Greater" : "Smaller");

echo $z;