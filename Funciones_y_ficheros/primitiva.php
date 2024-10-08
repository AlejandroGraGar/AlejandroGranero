<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$vec = array();

function dameNumero(&$vec){
    do{
        $num = rand(1,49);
            if (!in_array($num, $vec)){
                array_push($vec, $num);
            }
            
    } while (!in_array($num,$vec));
}

while (count($vec) < 6)
    dameNumero($vec);

foreach ($vec as $nums)
    echo "${nums} ";
?>
</body>
</html>