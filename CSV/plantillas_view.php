<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

echo "<table border='1'>";
echo "<tr><th>Dorsal</th><th>Nombre</th><th>Apellidos</th><th>Posición</th><th>Equipo</th></tr>";

foreach ($atleticoData as $jugador) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($jugador['Dorsal']) . "</td>";
    echo "<td>" . htmlspecialchars($jugador['Nombre']) . "</td>";
    echo "<td>" . htmlspecialchars($jugador['Apellidos']) . "</td>";
    echo "<td>" . htmlspecialchars($jugador['Posición']) . "</td>";
    echo "<td>" . htmlspecialchars($jugador['Equipo']) . "</td>";
    echo "</tr>";
}

echo "</table>";

?>
    
</body>
</html>