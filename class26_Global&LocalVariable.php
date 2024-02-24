<?php

// PHP Global & Local Variable

//Example No 1 Local Variable
function tests(){
    $x = 10; 

    echo "iam local Variable: $x";
}

tests();
echo "iam also local Variable: $x"; // local variable sirf function ke ander kam krta hy bahir nahi

echo "<br>";


//Example No 2 Global Variable


$x = 10; 
function test(){
    global $x;

    echo "Variable X inside Function: $x <br>";
}

test();
echo "Variable X Outside Function: $x"; // global variable function ke ander or bahir dono jaga kam krta hy

echo "<br>";

//Example No 2 of Global Variable

$x = 10; 
$y = 5;

function second(){
    global $x,$y;
    $x = $x + $y;

}

second();
echo $x;



