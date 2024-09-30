<?php

function digitos(int $num){
    echo"Devuelve la longitud de los digitos ";
    echo strlen($num);
    echo "<br>";
}

function digitosN(int $num, int $cant){
    echo "Devuelve la posicion del numero que le des ";
    echo substr($num, $cant-1, 1);

}

function quitarPorDetras(int $num, int $cant){
        echo "<br>";
        echo "Quitar por detrás ";
        $cad = (string) $num;
        $res = substr($cad, 0, -$cant);
        echo (int) $res;    
}

function quitarPorDelante(int $num, int $cant) {
    echo "<br>";
    echo "Quitar por delante ";
    $cad = (string) $num;
    $res = substr($cad, $cant);
    echo (int) $res;
}

echo digitos(555455);

echo digitosN(555455, 4);

echo quitarPorDetras(555455, 4);

echo quitarPorDelante(123456789, 2);
?>