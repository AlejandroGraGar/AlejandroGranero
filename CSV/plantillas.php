<?php

$fichero = "plantillas.csv";
$atleticoData = [];

if (($fich = fopen($fichero, 'r')) !== false) {
    //fopen sirve para poder abrir un fichero 
    // Leer la primera línea (cabecera)
    $cabecera = fgetcsv($fich, 1000, ',');
// obtener la primera linea
    // Procesar cada línea del archivo
    while (($fila = fgetcsv($fich, 1000, ',')) !== false) {
        // Comprobar si el equipo es "Atlético de Madrid"
        if ($fila[1] == "Atlético de Madrid") {
            // Agregar los datos relevantes al array
            $atleticoData[] = [
                'Dorsal' => $fila[11],
                'Nombre' => $fila[4],
                'Apellidos' => $fila[5],
                'Posición' => $fila[9],
                'Equipo' => $fila[1],
            ];
        }
    }
    fclose($fich);
} else {
    echo "Error al abrir el archivo.";
}

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





