<?php


//PHP Variable Scope   PHP has three types of variable scopes:

// Local variable
// Global variable
// Static variable


// Local variable Example
function local_var()
{
    $num = 40;
    echo "Local Varibale Decalred Hota Hy Inside Function Ke " . $num;
}
local_var();
echo "</br>";

// Local variable Example No 2

// function mytest()
// {
//     $lang = "PHP";
//     echo $lang." Is Web Developemt Language ";
// }
// mytest();
// echo "</br>";

// Global variable Example

$name = "Shahzaib Shah";
function global_vars()
{
    global $name;
    echo "Varibale Inside the Function: " . $name;
    echo "</br>";

}
global_var();

echo "Variable outside the function: " . $name;

// Note: Without using the global keyword, if you try to access a global variable inside the function,
// it will generate an error that the variable is undefined.

// Global variable Example No 2

$num1 = 50;
$num2 = 50;
function global_var()
{
    // $sum = $GLOBALS['num1']+$GLOBALS['num2'];
    // echo "Sum of Global Variable is ". $sum;
}
global_var();
echo "</br>";

$x= 5;
function mytest()
{
    $x= 7;
    echo "value of x is " . $x;
}
mytest();
echo "</br>";

// Static variable Example // thek se samjh nahi aya

function static_var()
{
    static $num1 = 3;
    $num2 = 6;
    $num1++;
    $num2++;

    echo "Static: " . $num1 . "</br>";
    echo "Non-Static: " . $num2 . "</br>";
}

static_var();

static_var();