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
            
            // Desactivar la configuración de errores antes de la conexión
            ini_set('display_errors', 0);
            error_reporting(0);
            
            $this->conn = oci_connect($this->username, $this->password, $tns);
            
            // Restaurar la configuración de errores después de la conexión
            ini_restore('display_errors');
            error_reporting(E_ALL);
    
            if (!$this->conn) {
                $e = oci_error();
                include __DIR__ . '/../resources/views/sessions/Error503.php';
                exit;
            } else {
                return $this->conn;
            }
    
        } catch(Exception $exception) {
            // Manejar cualquier otra excepción aquí si es necesario
            $e = $exception->getMessage();
            include __DIR__ . '/../resources/views/sessions/Error503.php';
            exit;
        }
    }
    
    
    public function closeConnection() {
        oci_close($this->conn);
    }
}
?>
