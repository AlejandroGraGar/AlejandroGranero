<?php

    require_once "task.php";
    $pdo = conectaDb();
    
        $titulo = $_POST['titulo'];
        $desc = $_POST['desc'];

            $sql_nombres = "SELECT Titulo FROM task";
            $ejec_sent = $pdo->query($sql_nombres);
            $titulos = $ejec_sent->fetchAll(PDO::FETCH_COLUMN);

            if (!in_array($titulo, $titulos)) {
                $insercion_sql = "INSERT INTO task (id, Titulo, Descripcion) VALUES (NULL, :Titulo, :Descripcion)";
                $insercion = $pdo->prepare($insercion_sql);
                $insercion->bindParam(':Titulo', $titulo);
                $insercion->bindParam(':Descripcion', $desc);
                $insercion->execute();
            }      



$pdo = null;    
header("Location:inicio.php"); 