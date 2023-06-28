<?php
    // GETTER & SETTER
namespace Database\Model;

class UsersModel{
    
    protected $id;
    protected $username;
    protected $email;
    protected $state;
    protected $password;

        
    public function getId()
    { 
        return $this->id; 
    }
    public function setId($id): self 
    { 
        $this->id = $id; 
        return $this; 
    }

    public function getUsername()
    { 
        return $this->username; 
    }
    public function setUsername($username): self 
    { 
        $this->username = strtoupper(preg_replace('/[^a-zA-Z0-9]/', '', $username)); 
        return $this; 
    }

    public function getEmail()
    { 
        return $this->email; 
    }
    public function setEmail($email): self 
    { 
        $this->email = $email; 
        return $this; 
    }

    public function getState()
    { 
        return $this->state; 
    }
    public function setState($state): self 
    {   
        if($state == 0){
            $state = 1;
            $this->state = $state;
        }elseif($state == 1){
            $state = 0;
            $this->state = $state; 
        }
        return $this;
    }

    public function getPassword()
    { 
        return $this->password; 
    }
    public function setPassword($password): self 
    { 
        $this->password = md5($password);; 
        return $this; 
    }
}

?>