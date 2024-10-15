<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php
$nombre = "Alejandro"; 
if (!isset($_COOKIE["user"])) {
        setcookie('user', $nombre, time() + 1000);
        echo "<p>La cookie user estaba vacia y ha sido creada con valor: ".$nombre. "</p>";
} else {
        echo "<p>La cookie user está configurada con el valor: " . $_COOKIE['user']. "</p>";
}
?>

</body>
</html>