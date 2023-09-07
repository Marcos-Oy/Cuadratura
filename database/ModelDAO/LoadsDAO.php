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
    
}
