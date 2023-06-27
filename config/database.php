<?php
namespace Config\Connection;
use PDO;
use PDOException;

class Database {
    private $host = "blanco.vtr.cl";
    private $db_name = "cuadratura";
    private $username = "cuadratu";
    private $password = "Mesa2021";
    public $conn;
    
    public function getConnection() {
        $this->conn = null;
        
        try {
            $tns = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = " . $this->host . ")(PORT = 1521)))(CONNECT_DATA=(SID=your_sid)))";
            $this->conn = new PDO("oci:dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
phpinfo();

        }
        
        return $this->conn;
    }
    
    public function closeConnection() {
        $this->conn = null;
    }
}
?>