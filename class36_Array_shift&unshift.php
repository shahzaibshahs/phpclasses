<?php

// Array_shift 

$months = ['jan','feb','march','august','dec'];

array_shift($months); // yeh function yeha array me se first value ko remove krta hy

echo "<pre>";
print_r($months);
echo "</pre>";

//  Array_unshift

$months = ['jan','feb','march','august','dec',];

array_unshift($months,'april'); // yeh function yeha array me se first place pr value ko add krta hy

echo "<pre>";
print_r($months);
echo "</pre>";


