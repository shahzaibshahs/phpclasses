<?php

// Array_Slice Function // watch again this video

$colours = ['red','green','yellow','black','white'];

$newArray = array_slice($colours,2,4); // yeh function yeha par given value ko select krta hy array me se agr ap 0 likhy gy to ffirst value selet hogi 4 likho gy to 5th value slect hogi

echo "<pre>";
print_r($newArray);
echo "</pre>";