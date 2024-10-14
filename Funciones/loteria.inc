<?php

function getNums($cant, $min, $max) {
    $nums = [];
    while (count($nums) < $cant) {
        $num = rand($min, $max);
        if (!in_array($num, $nums)) {
            $nums[] = $num;
        }
    }
    return $nums;
}

function mostrar($nums, $estre = []) {
    echo "<p>Números: " . implode(", ", $nums) . "</p>";
    if (!empty($estre)) {
        echo "<p>Estrellas: " . implode(", ", $estre) . "</p>";
    }
}
?>
    