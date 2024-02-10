<?php
//Nested Loop -- Kisi bi loop me ek aur loop add krny ko Nested Loop Kehty Hy // isme bahir wala Outer Loop Kehlata Hy Aur Ander Wala Inner Loop Kehlata Hy
//kisi data ko tabular form me dikhny ke liye nested loop ka use hota ha
// Increament
echo "<h4>Increament In Nested Loop</h4>";

for($a = 1; $a <= 100; $a = $a + 10){
    
    for($b = $a; $b < $a + 10; $b++){
        echo $b . " ";
    }
    echo "<br>";  
} 