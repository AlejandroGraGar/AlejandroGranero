<?php

function analizaFrase($frase) {
    $palabras = explode(" ", $frase);
    $total_letras = strlen(str_replace(" ", "", $frase));
    $cant_palabras = count($palabras);
    
    echo "Total de letras: $total_letras\n";
    echo "Cantidad de palabras: $cant_palabras\n";
    
    foreach ($palabras as $palabra) {
        echo "$palabra: " . strlen($palabra) . "\n";
    }
}

$frase = "Esto es una frase de prueba";
analizaFrase($frase);
?>