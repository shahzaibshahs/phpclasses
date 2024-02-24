<?php 

// Array Key Functions

$colours = ['red','green','yellow','black','white']; 

$newArray = array_keys($colours); // yeh function yeha par array key show krta hy array ki values ki

echo "<pre>";
print_r($newArray); 
echo "</pre>";

echo "<br>";

$colours = ['me hu one' =>'red','green','yellow','black', 'iam the last one' =>'white']; 

$newArray = array_key_first($colours); // yeh function yeha par array ki first key ko show krta hy

echo "<pre>";
print_r($newArray); 
echo "</pre>";


echo "<br>";

$colours = ['me hu one' =>'red','green','yellow','black', 'iam the last one' =>'white']; 

$newArray = array_key_last($colours); // yeh function yeha par array ki first key ko show krta hy

echo "<pre>";
print_r($newArray); 
echo "</pre>";


echo "<br>";

$colours = ['one' => 'red', 'two' =>'green','three' =>'yellow','four'=>'black','fifth' =>'white']; 

$newArray = array_key_exists('two',$colours); // 

echo "<pre>";
print_r($newArray); 
echo "</pre>";

if($newArray){
echo "Key Exists";
}else{
    echo "Key Not Exists";
}