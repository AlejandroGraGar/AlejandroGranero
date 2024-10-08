<?php
$dir_imag = scandir('./uploads');  


foreach ($dir_imag as $imagen){
    echo "<img src="{$dir_imag}."/{$imagen}">";
}

?>