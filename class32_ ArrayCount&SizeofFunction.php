<?php

// Array Count & Sizeof Function

$food = array('apple','mango','banana','graphes','anaar');

echo count($food);
echo "<br>";
echo sizeof($food); // dono same funtion hy count krney ke liye jo array ke ander value count krty hy

$foods = array(
    'fruits' => array('apple','mango','banana','graphes','anaar'),
    'Veg' => array('carrot','tomato','potato','onion')
);

echo sizeof($foods,1);// yeha second parameter use hota hy internal value of array ko count krny ke liye 
echo count($foods['fruits'],1);// yeha hamny check kiya ke hy fruits ke ander kitni values hy