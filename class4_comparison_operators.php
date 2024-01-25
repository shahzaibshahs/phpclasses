<!-- #PHP Comparison Operators  -->
<?php
// Equal	
$x = 20;
$y = 20;

echo $x == $y; //agar ans ture hy to print 1 hoga otherwise empty
echo "</br>";

// Identical	
// isme a ki value b ke eqaul honi chaiye or inki data types bi same honi chaiye
$x = 20;
$y = 20;

echo $x === $y;
echo "</br>";

// Not equal	
// isme agr x ki value y se math nahi kry gi to ans hoga ture or print hoga 1 other wise ans wrong & print empty
$x = 10;
$y = 3;

echo $x != $y;
echo "</br>";

// Not equalsecond type 

$x = 10;
$y = 3;

echo $x <> $y;
echo "</br>";

// Less than	

$x = 1;
$y = 3;

echo $x < $y;
echo "</br>";

// Greater than

$x = 10;
$y = 3;

echo $x > $y;
echo "</br>";


// Less than or equal to	
// x ki value ya to choti ho y se ya usky barabar ho to true hoga or print 1
$x = 10;
$y = 30;

echo $x <= $y;
echo "</br>";

// Greater than or equal to	
// x ki value ya to bari ho y se ya usky barabar ho to true hoga or print 1

$x = 10;
$y = 3;

echo $x >= $y;
echo "</br>";

// Spaceship

$x = 10;
$y = 3;

echo $x <=> $y;
echo "</br>";
