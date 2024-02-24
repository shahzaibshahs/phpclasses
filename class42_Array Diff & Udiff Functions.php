<?php

// Array Diff & Udiff Functions

$a1 = array("a"=>"red","f"=>"green","c"=>"yellow","d"=>"blue",);

$a2 = array("a"=>"red","g"=>"green");

$a3 = array("a"=>"green" ,"d"=>"blue");

$newArray = array_diff($a1, $a2,$a3); // yeh function yeha par array me se differnt values nikal kr deta hy not same values

echo "<pre>";
print_r($newArray);
echo "</pre>";


echo "<br>";


$a1 = array("a"=>"red","f"=>"green","c"=>"yellow","d"=>"blue",);

$a2 = array("a"=>"red","g"=>"green");

$newArray = array_diff_key($a1, $a2); // yeh function yeha par array me se differnt key nikal kr deta hy not same keys

echo "<pre>";
print_r($newArray);
echo "</pre>";


echo "<br>";


$a1 = array("a"=>"red","f"=>"green","c"=>"yellow","d"=>"blue",);

$a2 = array("a"=>"red","f"=>"green");

$newArray = array_diff_assoc($a1, $a2); // yeh function yeha par array me se differnt key & value nikal kr deta hy

echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "<br>";



// userdefined function for comparing key and values

function compare($a,$b){
    if($a === $b){
    return 0;
}
    return ($a > $b)? 1 : -1;
}

$a1 = array("a"=>"red","f"=>"green","c"=>"yellow","d"=>"blue");

$a2 = array("a"=>"red","f"=>"green","c"=>"neon","d"=>"gray");

$newArray = array_diff_uassoc($a1, $a2, "compare");

echo "<pre>";
print_r($newArray);
echo "</pre>";


// rewatch this video from 10 minutes