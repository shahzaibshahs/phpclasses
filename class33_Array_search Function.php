<?php 

// Array In_array & Array_search Function


$food = array('orange','apple','mango', '55' ,'banana','graphes');

if(in_array(55,$food,true)) // strick mode
echo "Find Successfully";

else
{
echo "Can't Find";
}

echo "<br>";

// second example

$a = array(array('p','h'), array('p','r'), 'o');

if(in_array(array('p','h'), $a, true)){
    echo "Find Successfully";
}

else
{
echo "Can't Find";
}

echo "<br>";


// Second Method

$food = array('orange','apple','mango', '55' ,'banana','graphes');

echo array_search('apple',$food);// for index search 

echo "<br>";

$food = array('a' => 'orange', 'b' => 'apple', 'c' => 'mango', 'd' => '55' , 'e' => 'banana', 'f' =>'graphes');// this is example of associative array

echo array_search('apple',$food);// for key search 


