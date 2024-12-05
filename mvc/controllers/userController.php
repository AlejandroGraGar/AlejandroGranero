<?php
require_once "../modelo/users.php";  

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new Users();
    }

    public function addUser($usu, $pass) {
        return $this->userModel->addUser($usu, $pass);
    }

    public function compruebaLogin() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            if (empty($username) || empty($password)) {
                header("Location: ../login.php?error=empty_fields");
                exit();
            }
            
            
            $user = $this->userModel->compruebaLogin($username, $password);

            if ($user) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['user'];
                header("Location: ../index.php");
                exit();
            } else {
                header("Location: ../login.php?error=invalid_credentials");
                exit();
            }
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new UserController();
    $controller->compruebaLogin();
}
?>
