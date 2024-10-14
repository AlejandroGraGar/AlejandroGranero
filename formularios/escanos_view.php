<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fondoVerde{
            background-color: green;
        }

    </style>
</head>
<body>

<?php

echo "<table><tr><th>Partido</th>";
for ($i = 0; $i < $escanos; $i++) {
    echo "<th>Escaños " . ($i + 1) . "</th>"; 
}
echo "</tr>";

for ($i = 0; $i < $num_partidos; $i++) {
    echo "<tr><td>Partido " . ($i + 1) . "</td>";

    for ($j = 0; $j < $escanos; $j++) {
        $valor_actual = $resultados[$i][$j];
        if (in_array($valor_actual, $mayores, true)) { 
            echo "<td class='$clase'>" . number_format($valor_actual, 2) . "</td>";
        } else {
            echo "<td>" . number_format($valor_actual, 2) . "</td>";
        }
    }

    echo "</tr>";
}

echo "</table>";
?>
</body>
</html>