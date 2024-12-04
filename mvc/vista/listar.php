<h1>Lista de tareas</h1>
<a href="index.php?action=create">Agregar tarea</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Descripción</th>
        <th>Fecha de creación</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($task as $tableTask): ?>
        <tr>
            <td><?= $tableTask["id"] ?></td>
            <td><?= $tableTask["title"] ?></td>
            <td><?= $tableTask["description"] ?></td>
            <td><?= $tableTask["created_at"] ?></td>
            <td><a href="index.php?action=edit&id=<?= $tableTask['id']?>">Editar</a>
            <a href="index.php?action=delete&id=<?= $tableTask['id'] ?>" onclick="return confirm('Estás seguro?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
</table>