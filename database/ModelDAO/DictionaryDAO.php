<?php

namespace Database\ModelDAO;

class DictionaryDAO {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllDictionary() {
        $stmt = oci_parse($this->conn, "SELECT * FROM cut_dictionary");
        oci_execute($stmt);
        $result = [];
        while ($row = oci_fetch_assoc($stmt)) {
            $result[] = $row;
        }
        return $result;
    }
 
    public function getDictionaryById($clave) {
        $stmt = oci_parse($this->conn, "SELECT * FROM cut_dictionary WHERE clave = :clave");
        oci_bind_by_name($stmt, ":clave", $clave);
        oci_execute($stmt);
        return oci_fetch_assoc($stmt);
    }

    public function insertDictionary($clave, $date_created, $date_updated, $descripcion, $prioridad, $estado, $comentario, $adjunto) {

        $stmt = oci_parse($this->conn, "INSERT INTO cut_dictionary (clave, date_created, date_updated, descripcion, prioridad, estado, comentario, adjunto) 
                                        VALUES (:clave, :date_created, :date_updated, :descripcion, :prioridad, :estado, :comentario, :adjunto)");
        oci_bind_by_name($stmt, ":clave", $clave);
        oci_bind_by_name($stmt, ":date_created", $date_created);
        oci_bind_by_name($stmt, ":date_updated", $date_updated);
        oci_bind_by_name($stmt, ":descripcion", $descripcion);
        oci_bind_by_name($stmt, ":prioridad", $prioridad);
        oci_bind_by_name($stmt, ":estado", $estado);
        oci_bind_by_name($stmt, ":comentario", $comentario);
        oci_bind_by_name($stmt, ":adjunto", $adjunto);
        $result = oci_execute($stmt);
        oci_commit($this->conn);
        return $result;
    }
    
    public function updateDictionary($clave, $date_updated, $descripcion, $prioridad, $estado, $comentario, $adjunto) {
        
        $stmt = oci_parse($this->conn, "UPDATE cut_dictionary 
        SET date_updated = :date_updated,
            descripcion = :descripcion,
            prioridad = :prioridad,
            estado = :estado,
            comentario = :comentario,
            adjunto = :adjunto
        WHERE clave = :clave");

        oci_bind_by_name($stmt, ":clave", $clave);
        oci_bind_by_name($stmt, ":date_updated", $date_updated);
        oci_bind_by_name($stmt, ":descripcion", $descripcion);
        oci_bind_by_name($stmt, ":prioridad", $prioridad);
        oci_bind_by_name($stmt, ":estado", $estado);
        oci_bind_by_name($stmt, ":comentario", $comentario);
        oci_bind_by_name($stmt, ":adjunto", $adjunto);
        $result = oci_execute($stmt);
        oci_commit($this->conn); // Agregamos el commit después de la ejecución exitosa
        return $result;
    }

    public function deleteDictionary($clave) {
        $stmt = oci_parse($this->conn, "DELETE FROM cut_dictionary WHERE clave = :clave");
        oci_bind_by_name($stmt, ":clave", $clave);
        $result = oci_execute($stmt);
        oci_commit($this->conn); // Agregamos el commit después de la ejecución exitosa
        return $result;
    }

}
