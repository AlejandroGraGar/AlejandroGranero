<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Controller Actions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<?php
require_once "controllers/taskController.php";
    $index = new taskController;
    $action = $_GET["action"] ?? null;
    $id = $_GET["id"] ?? null;
    
    if($action == "edit"){
        $index->edit($id);
    } elseif ($action == "delete") {
        $index->delete($id);
    } elseif ($action == "create"){
        $index->create();
    } elseif ($action == "update"){
        $index->index();
    }
?>
    <div class="container mt-5">
        <h1>Task Controller Actions</h1>
        <div class="list-group">
            <a href="?action=create" class="list-group-item list-group-item-action">
                Create Task
            </a>
            <a href="?action=edit&id=1" class="list-group-item list-group-item-action">
                Edit Task 
            </a>
            <a href="?action=delete&id=1" class="list-group-item list-group-item-action text-danger">
                Delete Task 
            </a>
            <a href="?action=update" class="list-group-item list-group-item-action">
                Update Task List
            </a>
        </div>

    </div>

</body>
</html>
