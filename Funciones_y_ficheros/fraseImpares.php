<?php
function caracteresImpares($frase) {
    $res = '';
    
    for ($i = 0; $i < strlen($frase); $i++) {
        if ($i % 2 != 0) {
            $res .= $frase[$i];
        }
    }
    
    return $res;
}

$frase = "Esto es una prueba";
echo caracteresImpares($frase);





?>