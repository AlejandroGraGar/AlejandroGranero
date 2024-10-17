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
include "plantillas_view.php";
?>





