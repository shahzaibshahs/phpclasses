<?php 

// Continue & Break Statement 


// Continue Statement 
echo "<h4>Continue Statement</h4>";


for($a = 1; $a <= 10; $a++){
    if($a == 3){
        // echo "No : " . $a . "<br>";
        continue;
    }

    echo "Number : " . $a . "<br>";
}

//Break Statements
echo "<h4>Break Statements</h4>";

for($a = 1; $a <= 10; $a++){
    if($a == 3){
        echo "No : " . $a . "<br>";
        break;
    }

    echo "Number : " . $a . "<br>";
}