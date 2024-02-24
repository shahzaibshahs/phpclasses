<?php 

// PHP  For Each Loop

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}

echo "<br>";

$family = array("ali"=>"35", "asad"=>"37", "umar"=>"43");

foreach ($family as $x => $y) {
  echo "$x : $y <br>";
}