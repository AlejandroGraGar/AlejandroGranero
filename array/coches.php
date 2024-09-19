<?php
$coches = array(
    '3547 NXB' => array('Ford', 'Focus', 5),
    '4875 DCT' => array('Seat Ibiza', 'style XL', 3),
    '5789 OGY' => array('Seat Leon', 'style', 5)
);

ksort($coches);
foreach ($coches as $matricula => $datos){
        echo("matricula ". $matricula. "<br>" ."Marca ". $datos[0]. " Modelo ". $datos[1]. " puertas ". $datos[2]);
        echo "<br>";
        echo("------------------------------");
        echo "<br>";

}
    
    
?>