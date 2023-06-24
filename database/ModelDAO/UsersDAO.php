<?php
namespace Database\ModelDAO;
use PDO;
use PDOException;

class UsersDAO {
    private $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    public function getAllUsers() {
        $stmt = $this->conn->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getUserById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function insertUser($name, $email, $state) {
        $stmt = $this->conn->prepare("INSERT INTO users (name, email, password, state) VALUES (:name, :email, MD5(:password), :state)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindValue(":password", 'Mesa2020');
        $stmt->bindParam(":state", $state);
        return $stmt->execute();
    }
    
    public function updateUser($id, $name, $email, $state) {
        $stmt = $this->conn->prepare("UPDATE users SET name = :name, email = :email, state = :state WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":state", $state);
        return $stmt->execute();
    }

    public function passwordReset($id) {
        $stmt = $this->conn->prepare("UPDATE users SET password = MD5(:password) WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->bindValue(":password", 'Mesa2020');
        return $stmt->execute();
    }
    
    public function updateState($id, $state) {
        $stmt = $this->conn->prepare("UPDATE users SET state = :state WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":state", $state);
        return $stmt->execute();
    }

    public function deleteUser($id) {
        $stmt = $this->conn->prepare("DELETE FROM users WHERE id = :id");
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}