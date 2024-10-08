<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$direct = './uploads/'; 

    if (($_FILES["foto"]["type"] == "image/jpg")
        || ($_FILES["foto"]["type"] == "image/jpeg" ) 
        || ($_FILES["foto"]["type"] == "image/png")) {
        
        if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
            $nombre = basename($_FILES['foto']['name']);
            $rutaDestino = "./uploads/" . $nombre;
            move_uploaded_file($_FILES['foto']['tmp_name'], $rutaDestino);
            echo "<p>Archivo subido exitosamente.</p>";
        }
    }
    else echo "NO VALIDO....";

$imagenes = scandir($direct);

foreach ($imagenes as $imagen) {
    if(($imagen !=".") &&($imagen !=".."))
        echo "<img src='$direct$imagen' alt='$imagen' style='max-width: 200px; margin: 10px;'/>";

}
?>

</body>
</html>
