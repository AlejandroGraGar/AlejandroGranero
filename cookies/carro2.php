<?php
session_start();

$articulos = array(
    array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60),
    array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15),
    array("id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50),
    array("id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio" => 20)
);


if (!isset($_SESSION['carro'])) {
    $_SESSION['carro'] = array();
    $_SESSION['total'] = 0;
}


if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    
    foreach ($articulos as $articulo) {
        if ($articulo['id'] == $id) {
            
            $_SESSION['carro'][] = $articulo;

            
            $_SESSION['total'] += $articulo['precio'];
            break;
        }
    }
}


header("Location: carro.php"); 
exit;
