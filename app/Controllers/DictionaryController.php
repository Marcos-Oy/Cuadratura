<?php

namespace App\Controllers;
use Config\Connection\Database;
use Database\ModelDAO\DictionaryDAO;
use Database\Model\DictionaryModel;

class DictionaryController {
    private $raiz;   
    private $DictionaryDAO;
    private $DictionaryModel;
    
    public function __construct() {
        require_once (__DIR__ . '/../../Config/database.php');
        require_once (__DIR__ . '/../../database/ModelDAO/DictionaryDAO.php');
        require_once (__DIR__ . '/../../database/Model/DictionaryModel.php');
        $dbConnection = new Database();
        $this->DictionaryDAO = new DictionaryDAO($dbConnection->getConnection());
        $this->DictionaryModel = new DictionaryModel();
        global $raiz;
        $this->raiz = $raiz;
    }

    /*************************LLAMADA A LAS VISTAS**********************/
    
    public function index() {

        $rows = $this->DictionaryDAO->getAllDictionary();   

        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/Dictionary/show.php';

        // Verifica si el archivo de vista existe
        if (file_exists($viewPath)) {
            // Incluye la vista
            include_once $viewPath;
        } else {
            // Si la vista no existe, muestra un mensaje de error
            echo "Error: la vista no existe";
        }
    }

    public function create() {
        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/Dictionary/create.php';

        // Verifica si el archivo de vista existe
        if (file_exists($viewPath)) {
            // Incluye la vista
            include_once $viewPath;
        } else {
            // Si la vista no existe, muestra un mensaje de error
            echo "Error: la vista no existe";
        }
    }

    public function edit() {
        // Obtén la ruta completa de la vista
        $viewPath = __DIR__ . '/../../resources/views/Dictionary/edit.php';

        // Verifica si el archivo de vista existe
        if (file_exists($viewPath)) {
            $this->DictionaryModel->setClave($_POST['CLAVE']);
            $result = $this->DictionaryDAO->getDictionaryById($this->DictionaryModel->getClave());
            // Incluye la vista
            include_once $viewPath;
        } else {
            // Si la vista no existe, muestra un mensaje de error
            echo "Error: la vista no existe";
        }
    }
    
        /*************************CRUD USUARIO**********************/

    public function createDictionary()
    {   
        $this->DictionaryModel->setClave($_POST['CLAVE']);

        $this->DictionaryModel->setDateCreated(date('Y-m-d'));
        $this->DictionaryModel->setDateUpdated(date('Y-m-d'));

        $this->DictionaryModel->setDescripcion($_POST['DESCRIPCION']);
        $this->DictionaryModel->setPrioridad($_POST['PRIORIDAD']);
        $this->DictionaryModel->setEstado($_POST['ESTADO']);
        $this->DictionaryModel->setComentario($_POST['COMENTARIO']);
        $this->DictionaryModel->setAdjunto($_POST['ADJUNTO']);
    
        $id = $this->DictionaryDAO->insertDictionary($this->DictionaryModel->getClave(),$this->DictionaryModel->getDateCreated(),$this->DictionaryModel->getDateUpdated(),
        $this->DictionaryModel->getDescripcion(), $this->DictionaryModel->getPrioridad(), $this->DictionaryModel->getEstado(), $this->DictionaryModel->getComentario(),
        $this->DictionaryModel->getAdjunto());
        // var_dump ($id);
        return ($id!=false) ? header("Location:$this->raiz/dictionary/show") : header("Location:$this->raiz/dictionary/create");
    }

    public function editDictionary()
    {   
        $this->DictionaryModel->setClave($_POST['CLAVE']);

        $this->DictionaryModel->setDateUpdated(date('Y-m-d'));

        $this->DictionaryModel->setDescripcion($_POST['DESCRIPCION']);
        $this->DictionaryModel->setPrioridad($_POST['PRIORIDAD']);
        $this->DictionaryModel->setEstado($_POST['ESTADO']);
        $this->DictionaryModel->setComentario($_POST['COMENTARIO']);
        $this->DictionaryModel->setAdjunto($_POST['ADJUNTO']);

        $id = $this->DictionaryDAO->updateDictionary($this->DictionaryModel->getClave(),$this->DictionaryModel->getDateUpdated(),
        $this->DictionaryModel->getDescripcion(), $this->DictionaryModel->getPrioridad(), $this->DictionaryModel->getEstado(), $this->DictionaryModel->getComentario(),
        $this->DictionaryModel->getAdjunto());

        return ($id!=false) ? header("Location:$this->raiz/dictionary/show") : header("Location:$this->raiz/dictionary/edit");
    }

    public function dropDictionary()
    {   
        $this->DictionaryModel->setClave($_POST['CLAVE']);

        $id = $this->DictionaryDAO->deleteDictionary($this->DictionaryModel->getClave());

        return ($id!=false) ? header("Location:$this->raiz/dictionary/show") : header("Location:$this->raiz/dictionary/show");
    }
}

