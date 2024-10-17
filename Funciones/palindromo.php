<?php

function esPalindromo($palabra) {
    $palabra = str_replace(' ', '', strtolower($palabra));
    return $palabra === strrev($palabra);
}

$frase = "ANA";
echo esPalindromo($frase) ?  "Es palindromo" : "No es palindromo";

?>