<?php

namespace Database\ModelDAO;

class CorreccionesDAO {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllCorreccionesSiebel() {
        $stmt = oci_parse($this->conn, "SELECT tabla, campo_modificar, estado_update, COUNT(1) AS count_column
            FROM Siebel.TMP_Update_Rollback_Siebel@SblPrd.World
            GROUP BY tabla, campo_modificar, estado_update
            ORDER BY 4 DESC");
    
        oci_execute($stmt);
    
        $result = [];
        while ($row = oci_fetch_assoc($stmt)) {
            $result[] = $row;
        }
    
        return $result;
    }
    
    public function getAllCorreccionesUIM() {
        $stmt = oci_parse($this->conn, "SELECT Name as Nombre, Estado, Count(1) as Cantidad 
        FROM UIMUSER.UPD_SERVICECONFIGITEM_CHAR@UIMPRD.WORLD 
        WHERE estado != 'NOPROC' 
        GROUP BY Name, Estado 
        --ORDER BY 3 DESC;
        ");

        oci_execute($stmt);
        
        $result = [];
        while ($row = oci_fetch_assoc($stmt)) {
            $result[] = $row;
        }
        return $result;
    }

}
