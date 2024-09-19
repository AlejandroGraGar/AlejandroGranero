<?php
$lista = array();


for ($i; $i < 100; $i++){
    $lista[] = rand(0,1);
}

$contador["M"] = 0;
$contador["F"] = 0;

for ($j ; $j < count($lista);$j++){
    if ($lista[$j] == 0 ){
        $contador["M"]++;
    }
    elseif ($lista[$j] == 1 ){
        $contador["F"]++;
    }
}

print_r($contador);


?>