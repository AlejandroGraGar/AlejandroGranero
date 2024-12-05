<h1>Editar libro</h1>
<form method="POST" action="index.php?action=edit&id=<?= $task['id']?>">
    <label for="title">Título:</label>
    <input type="text" name="title" value="<?= $task['title'] ?>" required>
    <br>
    <label for="description">Descripción:</label>
    <input type="text" name="description" value="<?= $task['description'] ?>" required>
    <br>
    <button type="submit">Actualizar</button>
</form>