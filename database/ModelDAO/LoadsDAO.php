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
    
}
