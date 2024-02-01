<?php 

// Logical &&/AND Operator
// isme jab don continos true hongi to hi statement print hogi

$age = 20;

if($age >= 18 && $age <= 21){
    echo " You are Eligible for NIC";
}

echo "</br>";

// Logical Or/|| Operator
// in dono me se koi ek conditions true hogi to statement pring hogi

$age = 25;

if($age >= 18 || $age <= 21){
    echo " You are Eligible for NIC";
}

echo "</br>";

// Logical !/Not Operator

$age = 25;

if(!($age >= 18)){
    echo " You are Eligible for NIC";
}

echo "</br>";

// Logical  XOR Operator
// yeh tabhi kam krey ga jab do me se koi ek conditions true hojaye

$age = 25;

if($age >= 18 xor $age <= 21){
    echo " You are Eligible for NIC";
}

echo "</br>";