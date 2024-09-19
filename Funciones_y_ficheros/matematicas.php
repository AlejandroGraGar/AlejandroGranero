<?php


function digitos(int $num): int{
    echo"Devuelve la longitud de los digitos ";
    return strlen($num);
}


echo digitos(555455);

function digitosN(int $num, int $cant): int{
    echo "<br>";
    echo "Devuelve la posicion del numero que le des ";
    return substr($num, $cant-1, 1);

}
echo digitosN(555455, 4);

function quitarPorDetras(int $num, int $cant){
    return substr_replace($num, -$cant);
}

echo quitarPorDetras(555455, 4);

?>