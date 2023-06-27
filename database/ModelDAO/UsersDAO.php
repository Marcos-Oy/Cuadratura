<?php

namespace Database\ModelDAO;

class UsersDAO {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllUsers() {
        $stmt = oci_parse($this->conn, "SELECT * FROM users");
        oci_execute($stmt);
        $result = [];
        while ($row = oci_fetch_assoc($stmt)) {
            $result[] = $row;
        }
        return $result;
    }

    public function getUserByUsername($username, $password) {
        $stmt = oci_parse($this->conn, "SELECT * FROM users WHERE username = :username AND password = :password");
        oci_bind_by_name($stmt, ":username", $username);
        oci_bind_by_name($stmt, ":password", $password);
        oci_execute($stmt);
        return oci_fetch_assoc($stmt);
    }    

    public function getUserById($id) {
        $stmt = oci_parse($this->conn, "SELECT * FROM users WHERE id = :id");
        oci_bind_by_name($stmt, ":id", $id);
        oci_execute($stmt);
        return oci_fetch_assoc($stmt);
    }

    public function insertUser($username, $email, $password, $state) {
        $stmt = oci_parse($this->conn, "INSERT INTO users (username, email, password, state) VALUES (:username, :email, :password, :state)");
        oci_bind_by_name($stmt, ":username", $username);
        oci_bind_by_name($stmt, ":email", $email);
        oci_bind_by_name($stmt, ":password", $password);
        oci_bind_by_name($stmt, ":state", $state);
        return oci_execute($stmt);
    }

    public function updateUser($id, $username, $email, $state) {
        $stmt = oci_parse($this->conn, "UPDATE users SET username = :username, email = :email, state = :state WHERE id = :id");
        oci_bind_by_name($stmt, ":id", $id);
        oci_bind_by_name($stmt, ":username", $username);
        oci_bind_by_name($stmt, ":email", $email);
        oci_bind_by_name($stmt, ":state", $state);
        return oci_execute($stmt);
    }

    public function passwordReset($id) {
        $stmt = oci_parse($this->conn, "UPDATE users SET password = :password WHERE id = :id");
        oci_bind_by_name($stmt, ":id", $id);
        oci_bind_by_name($stmt, ":password", 'Mesa2020');
        return oci_execute($stmt);
    }

    public function updateState($id, $state) {
        $stmt = oci_parse($this->conn, "UPDATE users SET state = :state WHERE id = :id");
        oci_bind_by_name($stmt, ":id", $id);
        oci_bind_by_name($stmt, ":state", $state);
        return oci_execute($stmt);
    }

    public function deleteUser($id) {
        $stmt = oci_parse($this->conn, "DELETE FROM users WHERE id = :id");
        oci_bind_by_name($stmt, ":id", $id);
        return oci_execute($stmt);
    }

    public function updateAuthToken($userId, $token)
    {
        $stmt = oci_parse($this->conn, "UPDATE users SET token = :token WHERE id = :id");
        oci_bind_by_name($stmt, ":id", $userId);
        oci_bind_by_name($stmt, ":token", $token);
        return oci_execute($stmt);
    }
}
