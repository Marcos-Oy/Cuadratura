<?php
    // GETTER & SETTER
namespace Database\Model;

class UsersModel{
    
    protected $id;
    protected $name;
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

    public function getName()
    { 
        return $this->name; 
    }
    public function setName($name): self 
    { 
        $this->name = ucwords(strtolower($name)); 
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
        $this->password = $password; 
        return $this; 
    }
}

?>