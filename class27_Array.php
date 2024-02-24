<?php 

// PHP Array

$months = array("jan","feb","march","april",5,"June",7,"August");

echo $months['2'] . "<br>" . $months['3'] . "<br>" . $months['5'] . "<br>" . $months['7'];

echo "<br>";

//Array ki value check krne ke liye special function use hota hy print_r

// print_r($months);

//Array Use In For Loop

echo "<h4>Array In For Loop</h4>";

$months = array("jan","feb","march","april",5,"June",7,"August","Dec");

echo "<ul>";
for($i = 0; $i < 9; $i++){
    echo "<li> $months[$i] </li>";
}

echo "</ul>";