<?php

$num_partidos = intval($_POST['numPartidos']);
$num_votos = array_map('intval', explode(',', $_POST['votos']));
$escanos = intval($_POST['escanos']);
$clase = 'fondoVerde'; 
$resultados = [];

for ($i = 0; $i < $num_partidos; $i++) {
    for ($j = 1; $j <= $escanos; $j++) {
        $resultados[$i][$j - 1] = $num_votos[$i] / $j; 
    }
}

$max_val = [];
foreach ($resultados as $resultado) {
    foreach ($resultado as $valor) {
        $max_val[] = $valor;     }
}

rsort($max_val); 
$mayores = array_slice($max_val, 0, 7); 

include "escanos_view.php"; 
?>
