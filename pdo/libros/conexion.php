<?php
    function conectaDb(){   
        $dsn = 'mysql:dbname=Libro;host=127.0.0.1';
        $usuario = 'root';
        $contraseña = '';

        try {
            $pdo = new PDO($dsn, $usuario, $contraseña);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            print "Error al conectarse";
            exit;
        }

        
    }
        

?>