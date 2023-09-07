<?php
namespace Config\Connection;

class Database {
    private $host = "172.17.136.29";
    private $db_name = "CUADRA";
    private $username = "cuadra";
    private $password = "Mesa2020";
    public $conn;
    
    public function getConnection() {
        $this->conn = null;
        
        try {
            $tns = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = " . $this->host . ")(PORT = 1521)))(CONNECT_DATA=(SID=cuadratura)))";
            $this->conn = oci_connect($this->username, $this->password, $tns);
            if (!$this->conn) {
                $e = oci_error();
                echo "Error de conexión: " . $e['message'];
                phpinfo();
                exit;
            }
        } catch(Exception $exception) {
            echo "Error de conexión: " . $exception->getMessage();
            phpinfo();
            exit;
        }
        
        return $this->conn;
    }
    
    public function closeConnection() {
        oci_close($this->conn);
    }
}
?>
