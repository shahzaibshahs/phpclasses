<?php 

// Foreach Loop

$emp = array(
    array(1,"Dell", "Laptop", 50000),
    array(2,"Hp", "Laptop", 60000),
    array(3,"Toshiba", "Laptop", 70000),
    array(4,"Ryzen", "Laptop", 100000),
);

echo "<table border='1px' cellpadding='5px' cellspacing='0px'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Device</th>
<th>Price</th>

</tr>";

foreach($emp as list($id,$name,$device,$price)){
    echo "<tr><td>$id</td> <td>$name</td> <td>$device</td> <td>$price</td></tr>";
}

echo "</table>";

?>


<!-- Styles For Table -->
<Style>
    table {
    border-collapse: collapse;
    width: 100%;
    margin-top: 20px;
}

th, td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

th {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #f5f5f5;
}

</Style>