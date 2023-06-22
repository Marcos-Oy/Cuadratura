<?php


require_once "app/config/config.php";
require_once "app/models/UserModel.php";

class UserController {
    private $userModel;

    public function __construct($conn) {
        $this->userModel = new UserModel($conn);
    }

    public function index() {
        $users = $this->userModel->getAllUsers();
        include "app/views/user/index.php";
    }

    public function create() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $this->userModel->createUser($name, $email, $password);
            header("Location: index.php?action=index");
            exit();
        } else {
            // Mostrar el formulario de creación de usuario
            include "app/views/user/create.php";
        }
    }

    public function edit() {
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
            $id = $_GET["id"];
            $user = $this->userModel->getUserById($id);
            if ($user) {
                // Mostrar el formulario de edición de usuario
                include "app/views/user/edit.php";
            } else {
                // Mostrar un mensaje de error
            }
        } else {
            // Redirigir a la página de visualización de usuarios
            header("Location: index.php?action=index");
            exit();
        }
    }

    public function update() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST["id"];
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $success = $this->userModel->updateUser($id, $name, $email, $password);
            if ($success) {
                // Redirigir a la página de visualización de usuarios
                header("Location: index.php?action=index");
                exit();
            } else {
                // Mostrar un mensaje de error
            }
        } else {
            // Redirigir a la página de visualización de usuarios
            header("Location: index.php?action=index");
            exit();
        }
    }

    public function delete() {
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
            $id = $_GET["id"];
            $success = $this->userModel->deleteUser($id);
            if ($success) {
                // Redirigir a la página de visualización de usuarios
                header("Location: index.php?action=index");
                exit();
            } else {
                // Mostrar un mensaje de error
            }
        } else {
            // Redirigir a la página de visualización de usuarios
            header("Location: index.php?action=index");
            exit();
        }
    }
}
?>