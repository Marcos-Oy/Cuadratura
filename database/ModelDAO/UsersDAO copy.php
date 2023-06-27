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

    public function getUserByUsername($username, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }    

    public function getUserById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insertUser($username, $email, $password, $state) {
        $stmt = $this->conn->prepare("INSERT INTO users (username, email, password, state) VALUES (:username, :email, :password, :state)");
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":state", $state);
        return $stmt->execute();
    }

    public function updateUser($id, $username, $email, $state) {
        $stmt = $this->conn->prepare("UPDATE users SET username = :username, email = :email, state = :state WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":state", $state);
        return $stmt->execute();
    }

    public function passwordReset($id) {
        $stmt = $this->conn->prepare("UPDATE users SET password = :password WHERE id = :id");
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

    public function updateAuthToken($userId, $token)
    {
        $stmt = $this->conn->prepare("UPDATE users SET token = :token WHERE id = :id");
        $stmt->bindParam(":id", $userId);
        $stmt->bindParam(":token", $token);
        return $stmt->execute();
    }

}
