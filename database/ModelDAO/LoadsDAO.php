<?php

namespace Database\ModelDAO;

class LoadsDAO {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllRefresco() {
        $stmt = oci_parse($this->conn, "SELECT * FROM cut_carga_refresco ORDER BY FECHA ASC");
        oci_execute($stmt);
        $result = [];
        while ($row = oci_fetch_assoc($stmt)) {
            $result[] = $row;
        }
        return $result;
    }

    public function getAllPlataforma() {
        $stmt = oci_parse($this->conn, "SELECT * FROM cut_carga_plataforma ORDER BY FECHA ASC");
        oci_execute($stmt);
        $result = [];
        while ($row = oci_fetch_assoc($stmt)) {
            $result[] = $row;
        }
        return $result;
    }

    public function InsertPlataforma() {

        $stmt = oci_parse($this->conn, 
        "BEGIN
            INSERT_CUT_CARGA_PLATAFORMA;
        END;");
        $result = oci_execute($stmt);
        oci_commit($this->conn);
        return $result;
    }

    public function InsertRefresco() {

        $stmt = oci_parse($this->conn, 
        "BEGIN
            INSERT_CUT_CARGA_REFRESCO;
        END;");
        $result = oci_execute($stmt);
        oci_commit($this->conn);
        return $result;
    }

    public function UpdatePlataforma($tabla) {
        if($tabla != 'Cgm_Ea_Seu' && $tabla != 'SUT_INTERNET'){
            $stmt = oci_parse($this->conn, "UPDATE CUT_CARGA_PLATAFORMA SET $tabla = (SELECT COUNT(*) FROM $tabla) 
            WHERE TO_DATE(FECHA, 'YYYY-MM-DD') = TRUNC(SYSDATE)");
        }

        if($tabla === 'Cgm_Ea_Seu'){
            $stmt = oci_parse($this->conn, "UPDATE CUT_CARGA_PLATAFORMA SET $tabla = (SELECT COUNT(*) FROM $tabla WHERE FECHA = TRUNC(SYSDATE)) 
            WHERE TO_DATE(FECHA, 'YYYY-MM-DD') = TRUNC(SYSDATE)");
        }

        if($tabla === 'SUT_INTERNET'){
            $stmt = oci_parse($this->conn, "UPDATE CUT_CARGA_PLATAFORMA SET $tabla = (SELECT COUNT(*) FROM $tabla WHERE FECHA_ACTUAL >= TRUNC(SYSDATE) AND FECHA_ACTUAL < TRUNC(SYSDATE) + 1) 
            WHERE TO_DATE(FECHA, 'YYYY-MM-DD') = TRUNC(SYSDATE)");
        }

        $result = oci_execute($stmt);
        oci_commit($this->conn);
        return $result;
    }

    public function UpdateRefresco($tabla) {
        $stmt = oci_parse($this->conn, "UPDATE CUT_CARGA_REFRESCO SET $tabla = (SELECT COUNT(*) FROM $tabla) 
            WHERE TO_DATE(FECHA, 'YYYY-MM-DD') = TRUNC(SYSDATE)");
        $result = oci_execute($stmt);
        oci_commit($this->conn);
        return $result;
    }
    
    
}
