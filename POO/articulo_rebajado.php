<?php
if (!class_exists('Articulo')) {
    require_once('clase_articulo.php');
}

final class ArticuloRebajado extends Articulo {
    private $rebaja;

    public function __construct($pNombre, $pPrecio, $pRebaja) {
        parent::__construct($pNombre, $pPrecio);
        $this->rebaja = $pRebaja;
    }

    private function calculaDescuento() {
        return ($this->precio * $this->rebaja) / 100;
    }

    public function precioRebajado() {
        return $this->precio - $this->calculaDescuento();
    }

    public function __toString() {
        $cadena = parent::__toString();
        $cadena .= 'La rebaja es: ' . $this->rebaja . ' %<br />';
        $cadena .= 'El descuento es: ' . $this->calculaDescuento() . ' €<br />';
        return $cadena;
    }
}

$articuloRebajado = new ArticuloRebajado('Bicicleta', 352.10, 20);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artículo Rebajado</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f9;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
        }
        .card-body {
            padding: 20px;
        }
        .btn-custom {
            background-color: #28a745;
            color: #fff;
            border-radius: 5px;
        }
        .btn-custom:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Detalles del Artículo Rebajado</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $articuloRebajado; ?></h5>
           
        </div>
        
    </div>

    <div class="mt-5">
        <h4>Detalles del Objeto:</h4>
        <pre class="bg-light p-3">
            <?php var_dump($articuloRebajado); ?>
        </pre>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
