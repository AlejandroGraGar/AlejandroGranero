<?php
$archivo = 'casas_rurales.csv';

$casas = [];
$casas_del = 0;

if (($arch = fopen($archivo, 'r')) !== FALSE) {
    $encabezado = fgetcsv($arch, 1000, ";");

    while (($datos = fgetcsv($arch, 1000, ";")) !== FALSE) {
        $id = $datos[0];
        $localidad = $datos[1];
        $nombre = $datos[3];
        $telefono = $datos[8];

        if (!empty($telefono)) {
            $casas[] = [
                'id' => $id,
                'localidad' => $localidad,
                'nombre' => $nombre,
                'telefono' => $telefono
            ];
        } else {
            $casas_del++;
        }
    }

    fclose($arch);
} else {
    echo "Error al abrir el archivo.";
    exit;
}

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>ID</th><th>Localidad</th><th>Nombre</th><th>Teléfono</th></tr>";

foreach ($casas as $casa) {
    echo "<tr>";
    echo "<td>{$casa['id']}</td>";
    echo "<td>{$casa['localidad']}</td>";
    echo "<td>{$casa['nombre']}</td>";
    echo "<td>{$casa['telefono']}</td>";
    echo "</tr>";
}

echo "</table>";

echo "<p>Total de casas descartadas: $casas_del</p>";
?>
