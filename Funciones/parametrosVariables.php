<?php

function mayor(): int{

    $nums = func_get_args();

    $mayor = $nums[0];

    foreach ($nums as $num){
        if ($num > $mayor){
            $mayor = $num;
        }
    }

echo($mayor);
}


mayor(5,6,7,12,3);
