<?php
require_once "../Modelo/burguers.php";  

class burguerController {
    private $burguerModel;

    public function __construct() {
        $this->burguerModel = new Burguers();
    }


    public function mostrarProductos() {
        return $this->burguerModel->mostrarProductos();
    }

    public function modificarProductos($id, $name, $description, $price, $image, $category) {
        $model = new Burguers();
        return $model->modificarProductos($id, $name, $description, $price, $image, $category);
    }
    
    public function obtenerProductoPorId($id) {
        $model = new Burguers();
        return $model->obtenerProductoPorId($id); 
    }
    


}


?>
