<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit;
}
$usuario = $_SESSION['usuario'];

?>

<h1>Bienvenidooooo <?php echo $usuario;?></h1>

<a href="logout.php">Log out</a>

    <form method="POST" action="inser_libros.php">
        <h3>Agregar un libro</h3>
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        <label for="desc">Descripción:</label>
        <input type="text" id="desc" name="desc" required>
        <button type="submit">Agregar</button>
    </form>

    <form method="POST" action="del_libros.php">
        <h3>Borrar un libro</h3>
        <label for="id_borrar">ID del libro (0 para borrar todos):</label>
        <input type="text" id="id_borrar" name="id_borrar" required>
        <button type="submit">Borrar</button>
    </form>
    <?php include("listar.php"); ?>


</body>
</html>