<?php

// Array_pop 

$week = ['monday','tuesday','wednesday','saturday'];

array_pop($week); // ye function use hota hy kis bi array ki last value ko delete krny k liye

echo "<pre>";
print_r($week); 
echo "</pre>";

//  Array_push

$week = ['monday','tuesday','wednesday'];

array_push($week , 'thursday' , "Friday"); // ye function use hota hy kis bi array me new value add karne ke liye

echo "<pre>";
print_r($week); 
echo "</pre>";


