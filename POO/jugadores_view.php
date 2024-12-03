<?php require_once("player.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugadores de atletico de madrid</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table {
            border: 1px solid red;
        }

        thead tr th{
            background-color: rgb(0,0,255);
            color:white ;
            border:1px solid red;

        }


        tbody tr td:nth-child(odd){
            background-color:white;

        }
        tbody tr td:nth-child(even){
            background-color:red;

        }


    </style>
</head>
<body>




    <?php
    $fichero = "plantillas.csv";
    $jugadores = [] ;
    
    $fich = fopen($fichero, 'r');
    if ($fich !== false){
        $cabe = fgetcsv($fich, 1000 , ',');
        
        while (($fila = fgetcsv($fich, 1000, ',')) !== false) {
            if ($fila[1]== "Atlético de Madrid"){
                $jugadores[] = [
                    'nombre' => $fila[4],
                    'apellidos' => $fila[5],
                    'fecha' => $fila[6],
                    'pais' => $fila[9],
                    'dorsal' => $fila[11],
                    'posic' => $fila[10],
                    'goles' => $fila[17],
                    'jugados' => $fila[12],
                    'minutos' => $fila[16],
                    'tarj_ama' => $fila[18],
                    'tarj_roj' => $fila[19]
            ];
            }
        }
        $atletico = "Atlético de Madrid";

    
        $players = [];
        foreach ($jugadores as $jugador) {
            $players[] = new Player($jugador['nombre'], $jugador['apellidos'], $jugador['fecha'], $jugador['pais'], $jugador['dorsal'], $jugador['posic'], $jugador['goles'],$jugador['jugados'], $jugador['minutos'], $jugador['tarj_ama'], $jugador['tarj_roj']);
            
        }
        $equipo = new Team($atletico, $players);
    }
    fclose($fich);

    echo  $equipo ."</div></div>";
    
    
    echo "<table class='table table-striped'>";
    echo "<thead >";
    echo "<tr><th>Nombre</th><th>Edad</th><th>Pais</th><th>Dorsal</th><th>Posición</th><th>Goles</th><th>Partidos Jugados</th><th>Minutos</th><th>Tarjetas Amarillas</th><th>Tarjetas Rojas</th></tr>";
    echo "</thead><tbody>";
        foreach ($players as $jugador){
            echo $jugador;
        }
    echo "</tbody></table>";
    ?>

</body>
</html>