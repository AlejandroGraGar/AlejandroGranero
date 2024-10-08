<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

</head>
<body>
<?php
$nombre = $_POST['nombre'];
$apellidos = $_POST['ape'];
$mail = $_POST['mail'];
$url = $_POST['url'];

if (isset($_POST['sexo'])){
    $sexo = $_POST['sexo'];
}
if (is_numeric($_POST['conv'])){
    $conv = $_POST['conv'];
}

if (isset($_POST['afi'])){
    $aficiones_selec = $_POST['afi'];
}
$aficionesString = implode(", ", $aficiones_selec);
$menuString = implode(", ", $_POST['menu']);
echo "
<table class='table table-striped table-bordered'>
    <tr>
        <td>Nombre</td>
        <td>Apellidos</td>
        <td>Mail</td>
        <td>URL</td>
        <td>Sexo</td>
        <td>Aficiones</td>
        <td>Menu</td>
    </tr>
    
    <tr>
        <td>$nombre</td>
        <td>$apellidos</td>
        <td>$mail</td>
        <td>$url</td>
        <td>$sexo</td>
        <td>$aficionesString</td>
        <td>$menuString</td>
    </tr>
</table>
"

?>
</body>
</html>