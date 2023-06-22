<?php

class UsersController{

    /*************************LLAMADA A LAS VISTAS**********************/
    public function show()
    {
        require_once ("database/ModelDAO/UsersDAO.php");
        $obj = new UsersDAO();

        $rows = $obj->list_users();   
        require_once ("resources/views/users/show.php");
    }

    public function create()
    {   
        require_once ("resources/views/users/create.php");   
    } 

    public function edit()
    {
        require_once ("database/ModelDAO/UsersDAO.php");
        $obj = new UsersDAO();

        require_once ("database/model/UsersModel.php");
        $apt = new UsersModel();  

        $apt->setUsername($_POST['username']);
        $result = $obj->show_by_username($apt->getUsername());
        
        require_once ("resources/views/users/edit.php");   
    }    
    
    public function set_up(){
        require_once ("resources/views/users/SetUp.php");
    }
    /*************************CRUD USUARIO**********************/

    public function create_users()
    {   
        require_once ("database/ModelDAO/UsersDAO.php");
        $obj = new UsersDAO();

        require_once ("database/model/UsersModel.php");
        $apt = new UsersModel();

        $apt->setUsername($_POST['username']); 
        $apt->setName($_POST['nombre']);
		$apt->setLastnameP($_POST['paterno']);
		$apt->setLastnameM($_POST['materno']);
        $apt->setMail($_POST['email']);
		$apt->setPhone($_POST['tel']);
        $apt->setRole($_POST['role']);
        $apt->setRut($_POST['rut']);

        $id = $obj->insert_users($apt->getUsername(),$apt->getRut(),$apt->getName(),
        $apt->getLastnameP(),$apt->getLastnameM(),$apt->getPhone(),$apt->getMail(),
        $apt->getRole());

        return ($id!=false) ? header("Location:?control=Users&action=show") : header("Location:?control=Users&action=create");
    } 

    public function modify_users()
    {
        require_once ("database/ModelDAO/UsersDAO.php");
        $obj = new UsersDAO();

        require_once ("database/model/UsersModel.php");
        $apt = new UsersModel();
        $apt->setUsername($_POST['username']); 
        $apt->setName($_POST['nombre']);
		$apt->setLastnameP($_POST['paterno']);
		$apt->setLastnameM($_POST['materno']);
        $apt->setMail($_POST['email']);
		$apt->setPhone($_POST['tel']);
        $apt->setRole($_POST['role']);
        $apt->setRut($_POST['rut']);
        $apt->setUsername2($_POST['username2']);

        $id = $obj->update_users($apt->getUsername(),$apt->getRut(),$apt->getName(),
        $apt->getLastnameP(),$apt->getLastnameM(),$apt->getPhone(),$apt->getMail(),
        $apt->getRole(),$apt->getUsername2());

        return ($id!=false) ? header("Location:?control=Users&action=show") : header("Location:?control=Users&action=show");
    }

    public function modify_user_status(){
        require_once ("database/ModelDAO/UsersDAO.php");
        $obj = new UsersDAO();

        require_once ("database/model/UsersModel.php");
        $apt = new UsersModel();
        $apt->setId($_POST['id']); 
        $apt->setState($_POST['state']);

        $id = $obj-> update_user_status($apt->getId(),$apt->getState());

        return ($id!=false) ? header("Location:?control=Users&action=show") : header("Location:?control=Users&action=show");
    }

    public function erase_users(){
        require_once ("database/ModelDAO/UsersDAO.php");
        $obj = new UsersDAO();

        require_once ("database/model/UsersModel.php");
        $apt = new UsersModel();
        $apt->setUsername($_POST['username']);

        $id = $obj-> delete_users($apt->getUsername());

        return ($id!=false) ? header("Location:?control=Users&action=show") : header("Location:?control=Users&action=show");
    }

    public function password_reset(){
        require_once ("database/ModelDAO/UsersDAO.php");
        $obj = new UsersDAO();

        require_once ("database/model/UsersModel.php");
        $apt = new UsersModel();
		$apt->setUsername($_POST['username']);
        
        $id = $obj->format_password($apt->getUsername());
        
        if($id==true)
		{
			echo "<script>alert('Contraseña Reseteada!');
			window.location= '?control=Users&action=show'</script>";
		}
		else
		{
			echo "<script>alert('No Exitoso');
			window.location= '?control=Users&action=show'</script>";
		}        
    }
    
    public function yes_successful(){
        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
        echo '<script src="resources/assets/js/functions.js"></script>';
    }
}


?>