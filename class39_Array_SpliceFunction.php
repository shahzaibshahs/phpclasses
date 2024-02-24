<?php 

// Array_Splice Function // yeh func add remove or replce krny ke liye use hota hy

$colours = ['red','green','yellow','black','white']; 

array_splice($colours,1); // yeha hamny value me 1 add kiya to isne 1 se lekar end tk sari value delet krdi ho 0 value ko chor dia

echo "<pre>";
print_r($colours); 
echo "</pre>";

echo "<br>";


$colours = ['red','green','yellow','black','white']; 

array_splice($colours,-1); // yeha hamny value me -1 add kiya to isne last  wali value ko delet krdia
echo "<pre>";
print_r($colours); 
echo "</pre>";

echo "<br>";


$colours = ['red','green','yellow','black','white']; 

$fruits = ['apple','mango'];

array_splice($colours,0,2,$fruits); // yeha hamny ek new variable ki value $colours waly variable ki value se replce krdi hy
echo "<pre>";
print_r($colours); 
echo "</pre>";

echo "<br>";
