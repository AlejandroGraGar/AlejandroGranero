<?php


function comprueba_hora(string $hora) :void{

    $comp_hora = func_get_args();


    $comp_hora = explode(":", $hora);
    $horas = $comp_hora[0];
    $minutos = $comp_hora[1];
    $segundos = $comp_hora[2];

    if ($horas > 24 || $minutos > 59 || $segundos > 59){
        echo("Formato de fecha invalido");
    } else {
        echo "Hora:" . $horas ." Minutos: " .$minutos . " Segundos: ". $segundos;
    }



}

comprueba_hora("12:25:59");