<?php

// Array_Merge & Array_Combine

$months = ['jan','feb','march','april'];

$week = ['mon','tue','wed'];

$newArray = array_merge($months,$week); // yeh function yeha par arrays ko apas me join/combine krney ke liye use hota hy
//second option use + 

echo "<pre>";
print_r($newArray);
echo "</pre>";


// Array_Merge & Array_Combine

$months = ['a' => 'jan','b' => 'feb','c' => 'march','d' => 'april'];

$week = ['e' => 'mon', 'b' =>'tue', 'f' =>'wed'];

$newArray = array_merge_recursive($months,$week); // yeh function yeha par array ki value ko ek lag array me add krta hy replace nhi krta

echo "<pre>";
print_r($newArray);
echo "</pre>";




$months = ['a' => 'jan','b' => 'feb','c' => 'march','d' => 'april'];

$week = ['e' => 'mon', 'b' =>'tue', 'f' =>'wed'];

$newArray = array_merge_recursive($months,$week);