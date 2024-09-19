<?php

for ($i; $i < 50; $i++){
    $lista[] = rand(0,99);

}
sort($lista);
echo "Menor ". $lista[0];
echo "<br><br>";
echo "Mayor ". $lista[49];
echo "<br><br>";
$media = array_sum($lista)/50;
echo "Media " . $media;

?>