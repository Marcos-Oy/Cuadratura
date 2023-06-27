<?php
namespace Config\Connection;
use PDO;
use PDOException;

class Database {
    private $host = "blanco.vtr.cl";
    private $db_name = "CUADRATURA";
    private $username = "cuadra";
    private $password = "Mesa2020";
    private $charset = "utf8";
    
    public $conn;
    
    public function getConnection() {
        $this->conn = null;
        
        try {
            $this->conn = new PDO("oci:dbname=//" . $this->host . "/" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("SET NAMES " . $this->charset);

            $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $this->conn->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
            $this->conn->setAttribute(PDO::ATTR_PERSISTENT, true);
            
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        
        return $this->conn;
    }
    
    public function closeConnection() {
        $this->conn = null;
    }
}
?>
