<?php

function mayusImpares($frase){
    $frase_min = strtolower($frase);
    $res_frase = '';
for ($i = 0; $i < strlen($frase); $i++){
    if ($i % 2 == 1){
        $res_frase .= strtoupper($frase[$i]);
    } else {
        $res_frase .= strtolower($frase[$i]);
    }
return $res_frase;
}

}
$frase1 = "Esto es una frase1 de prueba";
echo mayusImpares($frase1);

?>