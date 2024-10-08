<?php

$x = $_GET['x'];
$y = $_GET['y'];

$res_sum = $x + $y;
$res_res = $x - $y;
$res_mult = $x * $y;
$res_div = $x / $y;
echo "<table border='1px'>";
echo "<th>Suma</th>";
echo "<th>Resta</th>";
echo "<th>Mult</th>";
echo "<th>Div</th>";

echo "<tr>";
echo "<td>". $res_sum . "</td>";
echo "<td> " . $res_res. "</td>";
echo "<td> " . $res_mult. "</td>";
echo "<td> " . $res_div. "</td>";
echo "</tr>";
echo "</table>"
?>  
