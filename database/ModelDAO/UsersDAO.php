<?php

namespace Database\ModelDAO;

class UsersDAO {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllUsers() {
        $stmt = oci_parse($this->conn, "SELECT * FROM cut_web_users");
        oci_execute($stmt);
        $result = [];
        while ($row = oci_fetch_assoc($stmt)) {
            $result[] = $row;
        }
        return $result;
    }

    public function getUserByUsername($username, $password) {
        $stmt = oci_parse($this->conn, "SELECT * FROM cut_web_users WHERE username = :username AND password = :password");
        oci_bind_by_name($stmt, ":username", $username);
        oci_bind_by_name($stmt, ":password", $password);
        oci_execute($stmt);
        return oci_fetch_assoc($stmt);
    }    

    public function getUserById($id) {
        $stmt = oci_parse($this->conn, "SELECT * FROM cut_web_users WHERE id = :id");
        oci_bind_by_name($stmt, ":id", $id);
        oci_execute($stmt);
        return oci_fetch_assoc($stmt);
    }

    public function getUserByToken($token) {
        $stmt = oci_parse($this->conn, "SELECT TO_CHAR(TOKEN_EXPIRATION, 'YYYY-MM-DD HH24:MI:SS') AS TOKEN_EXPIRATION FROM cut_web_users WHERE token = :token");
        oci_bind_by_name($stmt, ":token", $token);
        oci_execute($stmt);
        return oci_fetch_assoc($stmt);
    }    

    public function insertUser($id, $username, $email, $password, $state) {

        $stmt = oci_parse($this->conn, "INSERT INTO cut_web_users (id, username, email, password, user_state) 
                                        VALUES (:id, :username, :email, :password, :state)");
        oci_bind_by_name($stmt, ":id", $id);
        oci_bind_by_name($stmt, ":username", $username);
        oci_bind_by_name($stmt, ":email", $email);
        oci_bind_by_name($stmt, ":password", $password);
        oci_bind_by_name($stmt, ":state", $state);
        $result = oci_execute($stmt);
        oci_commit($this->conn);
        return $result;
    }
    
    public function updateUser($id, $username, $email, $state) {
        
        $stmt = oci_parse($this->conn, "UPDATE cut_web_users SET username = :username, email = :email, user_state = :state WHERE id = :id");
        oci_bind_by_name($stmt, ":id", $id);
        oci_bind_by_name($stmt, ":username", $username);
        oci_bind_by_name($stmt, ":email", $email);
        oci_bind_by_name($stmt, ":state", $state);
        $result = oci_execute($stmt);
        oci_commit($this->conn); // Agregamos el commit después de la ejecución exitosa
        return $result;
    }

    public function passwordReset($id, $password) {

        $stmt = oci_parse($this->conn, "UPDATE cut_web_users SET password = :password WHERE id = :id");
        oci_bind_by_name($stmt, ":id", $id);
        oci_bind_by_name($stmt, ":password", $password);
        $result = oci_execute($stmt);
        oci_commit($this->conn); // Agregamos el commit después de la ejecución exitosa
        return $result;
    }

    public function updateState($id, $state) {
        $stmt = oci_parse($this->conn, "UPDATE cut_web_users SET user_state = :state WHERE id = :id");
        oci_bind_by_name($stmt, ":id", $id);
        oci_bind_by_name($stmt, ":state", $state);
        $result = oci_execute($stmt);
        oci_commit($this->conn); // Agregamos el commit después de la ejecución exitosa
        return $result;
    }

    public function updatePassword($id, $password) {
        $stmt = oci_parse($this->conn, "UPDATE cut_web_users SET password = :password WHERE id = :id");
        oci_bind_by_name($stmt, ":id", $id);
        oci_bind_by_name($stmt, ":password", $password);
        $result = oci_execute($stmt);
        oci_commit($this->conn); // Agregamos el commit después de la ejecución exitosa
        return $result;
    }

    public function deleteUser($id) {
        $stmt = oci_parse($this->conn, "DELETE FROM cut_web_users WHERE id = :id");
        oci_bind_by_name($stmt, ":id", $id);
        $result = oci_execute($stmt);
        oci_commit($this->conn); // Agregamos el commit después de la ejecución exitosa
        return $result;
    }

    public function updateAuthToken($userId, $token)
    {
        // Calcula la fecha y hora de expiración sumando 15 minutos a la fecha actual
        $expirationDateTime = "SYSTIMESTAMP + INTERVAL '60' MINUTE";
        
        // Actualiza el token y la fecha de expiración en la tabla de usuarios
        $stmt = oci_parse($this->conn, "UPDATE cut_web_users SET token = :token, token_expiration = $expirationDateTime WHERE id = :id");
        oci_bind_by_name($stmt, ":id", $userId);
        oci_bind_by_name($stmt, ":token", $token);
        $result = oci_execute($stmt);
        oci_commit($this->conn); // Agregamos el commit después de la ejecución exitosa
        return $result;
    }
    
    
    
    
}
