<?php
require_once('clases.php');

$pers1 = new Persona("57482130P", "Alejandro", "granerogarciaalejandro@gmail.com");
$est1 = new Estudiante("57482130P", "Alejandro", "granerogarciaalejandro@gmail.com", "E20231234");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
       
        <div class="card mb-4">
            <div class="card-header text-white bg-primary">
                Datos de Persona
            </div>
            <div class="card-body">
                <?= $pers1 ?> 
            </div>
        </div>

       
        <div class="card">
            <div class="card-header text-white bg-primary">
                Datos de Estudiante
            </div>
            <div class="card-body">
                <?= $est1 ?>
            </div>
        </div>
    </div>

</body>
</html>
