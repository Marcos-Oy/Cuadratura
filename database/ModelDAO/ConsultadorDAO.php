<?php

namespace Database\ModelDAO;

class ConsultadorDAO {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllCorreccionesSiebel() {
        $stmt = oci_parse($this->conn, "SELECT tabla, campo_modificar, estado_update, COUNT(1) AS Q
            FROM Siebel.TMP_Update_Rollback_Siebel@SblPrd.World
            GROUP BY tabla, campo_modificar, estado_update
            ORDER BY estado_update DESC");
    
        oci_execute($stmt);
    
        $result = [];
        while ($row = oci_fetch_assoc($stmt)) {
            $result[] = $row;
        }
    
        return $result;
    }

    public function getAllCorreccionesUIM() {
        $stmt = oci_parse($this->conn, "SELECT Name, Estado, Count(1) as Q
        FROM UIMUSER.UPD_SERVICECONFIGITEM_CHAR@UIMPRD.WORLD 
        -- WHERE estado != 'NOPROC' 
        GROUP BY Name, Estado 
        ORDER BY Estado DESC");
    
        oci_execute($stmt);
        
        $result = [];
        while ($row = oci_fetch_assoc($stmt)) {
            $result[] = $row;
        }
        return $result;
    }

    public function getAllResultInet() {
        $stmt = oci_parse($this->conn, "SELECT COUNT(1) AS Q FROM Cuadra.Cut_Siebel_ResultInet");
        if (!$stmt) {
            $e = oci_error($this->conn);
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }
        // Define the result column
        oci_define_by_name($stmt, 'Q', $q);
        oci_execute($stmt);
        // Fetch the result
        oci_fetch($stmt);
        $result = ['Q' => $q];
        return $result;
    }

    public function getAllResultDetaInet() {
        $stmt = oci_parse($this->conn, "SELECT COUNT(1) AS Q FROM Cuadra.Cut_Siebel_ResultDetaInet");
        if (!$stmt) {
            $e = oci_error($this->conn);
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }
        // Define the result column
        oci_define_by_name($stmt, 'Q', $q);
        oci_execute($stmt);
        // Fetch the result
        oci_fetch($stmt);
        $result = ['Q' => $q];
        return $result;
    }

    public function getAllResultdBox() {
        $stmt = oci_parse($this->conn, "SELECT FECHA, COUNT(1) AS Q FROM Cuadra.Cut_Siebel_ResultdBox GROUP BY FECHA");
        if (!$stmt) {
            $e = oci_error($this->conn);
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }
        // Execute the query
        oci_execute($stmt);
        // Fetch all results into an associative array
        $result = [];
        while ($row = oci_fetch_assoc($stmt)) {
            $result[] = $row;
        }
    
        return $result;
    }
    
    public function getAllLOGPROC() {
        
        // Utilizar TO_CHAR para convertir la fecha a una cadena con el formato 'DD/MM'
        $stmt = oci_parse($this->conn, "SELECT nomb_proceso,
        to_char(fech_ini,'dd-mm-yyyy hh:mi:ss') as FECH_INI,
        to_char(fech_fin,'dd-mm-yyyy hh:mi:ss') as FECH_FIN,
        observacion
        FROM 
            CUT_SIEBEL_LOGPROC 
        WHERE 
            TRUNC(fech_ini) IN (TRUNC(SYSDATE), TRUNC(SYSDATE) - 1)
        ORDER BY
            fech_ini desc");
    
        // Ejecutar la consulta
        oci_execute($stmt);
    
        $result = [];
        while ($row = oci_fetch_assoc($stmt)) {
            $result[] = $row;
        }
        
        return $result;
    }

    public function getAllLOGPROCINET() {
        // Obtener el día y el mes
        
        // Utilizar TO_CHAR para convertir la fecha a una cadena con el formato 'DD/MM'
        $stmt = oci_parse($this->conn, "SELECT nomb_proceso,
        to_char(fech_ini,'dd-mm-yyyy hh:mi:ss') as FECH_INI,
        to_char(fech_fin,'dd-mm-yyyy hh:mi:ss') as FECH_FIN,
        observacion
        FROM 
            CUADRA.CUT_SIEBEL_LOGPROCINET 
        WHERE 
            TRUNC(fech_ini) IN (TRUNC(SYSDATE), TRUNC(SYSDATE) - 1)
        ORDER BY
            fech_ini desc");
    
        // Ejecutar la consulta
        oci_execute($stmt);
    
        $result = [];
        while ($row = oci_fetch_assoc($stmt)) {
            $result[] = $row;
        }
        
        return $result;
    }
    
    public function getAllLOGPROCFONO() {
        // Obtener el día y el mes
        
        // Utilizar TO_CHAR para convertir la fecha a una cadena con el formato 'DD/MM'
        $stmt = oci_parse($this->conn, "SELECT nomb_proceso,
        to_char(fech_ini,'dd-mm-yyyy hh:mi:ss') as FECH_INI,
        to_char(fech_fin,'dd-mm-yyyy hh:mi:ss') as FECH_FIN,
        observacion
        FROM 
            CUADRA.CUT_SIEBEL_LOGPROCFONO 
        WHERE 
            TRUNC(fech_ini) IN (TRUNC(SYSDATE), TRUNC(SYSDATE) - 1)
        ORDER BY
            fech_ini desc");
    
        // Ejecutar la consulta
        oci_execute($stmt);
    
        $result = [];
        while ($row = oci_fetch_assoc($stmt)) {
            $result[] = $row;
        }
        
        return $result;
    }
    
    public function getAllLOGPROCFONOcorn() {
        // Obtener el día y el mes
        // $fecha = date("d/m");
    
        $stmt = oci_parse($this->conn, "SELECT
            nomb_proceso,
            TO_CHAR(fech_ini, 'dd-mm-yyyy hh24:mi:ss') AS fech_ini,
            TO_CHAR(fech_fin, 'dd-mm-yyyy hh24:mi:ss') AS fech_fin,
            observacion
            FROM
                Cuadra.Cut_Siebel_LogProcFonoCorn
            WHERE
                TRUNC(fech_ini) IN (TRUNC(SYSDATE), TRUNC(SYSDATE) - 1)
            ORDER BY
                fech_ini desc");
    
        oci_execute($stmt);
        
        $result = [];
        while ($row = oci_fetch_assoc($stmt)) {
            $result[] = $row;
        }
        return $result;
    }
    
    public function getAllRespaldo() {
    
        $stmt = oci_parse($this->conn, "SELECT * FROM Cuadra.Cut_Procesos_Log_Respaldo");
    
        oci_execute($stmt);
        
        $result = [];
        while ($row = oci_fetch_assoc($stmt)) {
            $result[] = $row;
        }
        return $result;
    }



}
