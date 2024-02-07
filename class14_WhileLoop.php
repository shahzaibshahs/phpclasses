<?php

// While Loop 
// kisi bi value ko muliple times print krny ko loop kehty hy 
echo "<h4>While Loop Increament</h4>";

$a = 1;
echo "<ul>";
while($a <= 10){
    echo "<li>" . " This is Number $a </li>";
     $a++;
}
echo "</ul>";
echo "</br>";

// Decreament in While Loop
echo "<h4>While Loop Decreament</h4>";
$a = 10;

while($a >= 1){
    echo $a . ") This is Number $a </br>";
     $a--;
}

