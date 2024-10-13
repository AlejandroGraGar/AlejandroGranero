<?php
include 'loteria.inc';
$nums = getNums(6, 1, 49);
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Apuesta de Euromillones</title>
</head>
<body>
    <div class="container mt-5 ">
        <div class="card">
            <div class="card-header text-center bg-info">
                <h2>Apuesta de Euromillones</h2>
            </div>
            <div class="card-body "> 
               <?php mostrar($nums);?>
            </div>
            <div class="card-footer text-center bg-info">
                <a href="select_apuesta.html" class="btn btn-danger">Volver</a>
            </div>
        </div>
    </div>
    
</body>
</html>
