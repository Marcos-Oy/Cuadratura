<?php
    // GETTER & SETTER
namespace Database\Model;

class DictionaryModel{
    
    protected $clave;
    protected $date_created;
    protected $date_updated;
    protected $descripcion;
    protected $prioridad;
    protected $estado;
    protected $comentario;
    protected $adjunto;


    /**
     * Get the value of clave
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set the value of clave
     */
    public function setClave($clave): self
    {
        // Transforma a mayúsculas y quita espacios antes de asignar
        $clave = strtoupper(str_replace(' ', '', $clave));
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get the value of date_created
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * Set the value of date_created
     */
    public function setDateCreated($date_created): self
    {
        $this->date_created = $date_created;

        return $this;
    }

    /**
     * Get the value of date_updated
     */
    public function getDateUpdated()
    {
        return $this->date_updated;
    }

    /**
     * Set the value of date_updated
     */
    public function setDateUpdated($date_updated): self
    {
        $this->date_updated = $date_updated;

        return $this;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     */
    public function setDescripcion($descripcion): self
    {
        // Elimina los acentos y caracteres especiales
        $descripcion = iconv('UTF-8', 'ASCII//TRANSLIT', $descripcion);
        // Elimina caracteres especiales
        $descripcion = preg_replace('/[^a-zA-Z0-9 ]/', '', $descripcion);
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of prioridad
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    /**
     * Set the value of prioridad
     */
    public function setPrioridad($prioridad): self
    {
        $this->prioridad = $prioridad;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     */
    public function setEstado($estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of comentario
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set the value of comentario
     */
    public function setComentario($comentario): self
    {
        // Elimina los acentos y caracteres especiales
        $comentario = iconv('UTF-8', 'ASCII//TRANSLIT', $comentario);
        // Elimina caracteres especiales
        $comentario = preg_replace('/[^a-zA-Z0-9 ]/', '', $comentario);
        $this->comentario = $comentario;
        return $this;
    }

    /**
     * Get the value of adjunto
     */
    public function getAdjunto()
    {
        return $this->adjunto;
    }

    /**
     * Set the value of adjunto
     */
    public function setAdjunto($adjunto): self
    {
        if ($adjunto === '' || $adjunto === null) {
            $adjunto = '#';
        }
        
        $this->adjunto = $adjunto;

        return $this;
    }
}

?>