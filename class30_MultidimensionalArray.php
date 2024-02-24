<?php 

// Multidimensional Array

$emp = array(
    array(1, "Shahzaib", "Web Developer", 50000),
    array(2, "Siraj", "Manager", 25000),
    array(3, "Moiz", "Editor", 10000)
);

echo "<table border '2px' cellpadding='5px' cellspacing='0px'> ";
echo "<tr> 

<th>ID</th>
<th>Name</th>
<th>Profession</th>
<th>Salary</th>

</tr>";
foreach($emp as $v1){
    echo "<tr>";
 foreach($v1 as $v2){
    
    echo "<td> $v2 </td>";
}
echo "</tr>";
}
"</table>";


//use of for loop
// for($row = 0; $row < 3; $row++){
//     for($col = 0; $col < 3; $col++){
//         echo $emp[$row][$col] . " ";
//     }
//     echo "<br>";
// }

// same work but code too long
// echo $emp[0][0] . " ";
// echo $emp[0][1] . " ";
// echo $emp[0][2] . " ";
// echo $emp[0][3] . " ";

// echo "<br>";

// echo $emp[1][0] . " ";
// echo $emp[1][1] . " ";
// echo $emp[1][2] . " ";
// echo $emp[1][3] . " ";

// echo "<br>";

// echo $emp[2][0] . " ";
// echo $emp[2][1] . " ";
// echo $emp[2][2] . " ";
// echo $emp[2][3] . " ";


// echo "<Pre>";
// print_r($emp);
// echo "</Pre>";
