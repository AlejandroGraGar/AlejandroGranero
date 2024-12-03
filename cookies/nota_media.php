<?php
session_start();

$nombre = '';
$nota1 = $nota2 = $nota3 = 0.0;
$error = false;

if (!isset($_SESSION['notas'])) {
    $_SESSION['notas'] = [];
}

function clearData($cadena) {
    $cadena_limpia = trim($cadena);
    $cadena_limpia = htmlspecialchars($cadena_limpia);
    $cadena_limpia = stripslashes($cadena_limpia);
    return $cadena_limpia;
}

if (isset($_POST['enviar'])) {
    $nombre = clearData($_POST['nombre']);
    $nota1 = clearData($_POST['nota1']);
    $nota2 = clearData($_POST['nota2']);
    $nota3 = clearData($_POST['nota3']);

    if (is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3)) {
        $nota1 = floatval($nota1);
        $nota2 = floatval($nota2);
        $nota3 = floatval($nota3);
        $error = false;

        array_push($_SESSION['notas'], [
            "alumno" => $nombre,
            "nota1" => $nota1,
            "nota2" => $nota2,
            "nota3" => $nota3
        ]);
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Gestión de Notas</title>
    <style>
        body {
            background: linear-gradient(135deg, #f0f9ff, #cfd9df);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4b6584;
        }
        .btn-primary {
            background-color: #4b7bec;
            border: none;
        }
        .btn-primary:hover {
            background-color: #3867d6;
        }
        .btn-danger {
            background-color: #fc5c65;
            border: none;
        }
        .btn-danger:hover {
            background-color: #eb3b5a;
        }
        .table-dark {
            background-color: #4b6584 !important;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">
             Notas</h1>

        <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="mb-4">
            <div class="row g-3">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Nombre del Alumno" name="nombre" required>
                </div>
                <div class="col-md-2">
                    <input type="number" class="form-control" placeholder="Nota 1" name="nota1" step="0.01" min="0" max="10" required>
                </div>
                <div class="col-md-2">
                    <input type="number" class="form-control" placeholder="Nota 2" name="nota2" step="0.01" min="0" max="10" required>
                </div>
                <div class="col-md-2">
                    <input type="number" class="form-control" placeholder="Nota 3" name="nota3" step="0.01" min="0" max="10" required>
                </div>
            </div>
            <div class="text-center mt-3">
                <button type="submit" name="enviar" class="btn btn-primary">Añadir Alumno</button>
            </div>
        </form>

        <?php if ($error): ?>
            <div class="alert alert-danger text-center">Por favor, introduce notas válidas.</div>
        <?php endif; ?>

        <?php if (!empty($_SESSION['notas'])): ?>
            <table class="table table-striped table-bordered mt-4">
                <thead class="table-dark text-white">
                    <tr>
                        <th>Nombre</th>
                        <th>Nota 1</th>
                        <th>Nota 2</th>
                        <th>Nota 3</th>
                        <th>Nota Media</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['notas'] as $alumno): ?>
                        <tr>
                            <td><?= htmlspecialchars($alumno['alumno']); ?></td>
                            <td><?= number_format($alumno['nota1'], 2); ?></td>
                            <td><?= number_format($alumno['nota2'], 2); ?></td>
                            <td><?= number_format($alumno['nota3'], 2); ?></td>
                            <td><?= number_format(($alumno['nota1'] + $alumno['nota2'] + $alumno['nota3']) / 3, 2); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-center">No hay alumnos registrados.</p>
        <?php endif; ?>

        <div class="text-center mt-4">
            <a href="borrar_notas.php" class="btn btn-danger">Borrar Notas</a>
        </div>
    </div>
</body>
</html>
