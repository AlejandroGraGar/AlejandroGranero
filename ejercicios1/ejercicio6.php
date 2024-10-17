
<?php

$nota1 = 8;
$nota2 = 9;
$nota3 = 5;

if ($nota1 > $nota2 && $nota1 > $nota3){
    echo("La nota 1 es mayor");

}
elseif($nota2 > $nota1 && $nota2 > $nota3){
    echo("La 2 nota es mayor");
} else {
    echo("La nota 3 es la mayor");
}

?>