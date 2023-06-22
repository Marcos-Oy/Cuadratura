<?php
    // GETTER & SETTER
class UsersModel{
    
    protected $id;
    protected $username;
    protected $username_2;
    protected $name;
    protected $lastname_p;
    protected $lastname_m;
    protected $phone;
    protected $mail;
    protected $role;
    protected $state;
    protected $password;
    protected $rut;

        
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
        $this->username = $username; 
        return $this; 
    }

    public function getUsername2()
    { 
        return $this->username_2; 
    }
    public function setUsername2($username_2): self 
    { 
        $this->username_2 = $username_2; 
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

    public function getLastnameP()
    { 
        return $this->lastname_p; 
    }
    public function setLastnameP($lastname_p): self 
    { 
        $this->lastname_p = ucwords(strtolower($lastname_p)); 
        return $this; 
    }

    public function getLastnameM()
    { 
        return $this->lastname_m; 
    }
    public function setLastnameM($lastname_m): self 
    { 
        $this->lastname_m = ucwords(strtolower($lastname_m)); 
        return $this; 
    }

    public function getPhone()
    { 
        return $this->phone; 
    }
    public function setPhone($phone): self 
    { 
        $this->phone = $phone; 
        return $this; 
    }

    public function getMail()
    { 
        return $this->mail; 
    }
    public function setMail($mail): self 
    { 
        $this->mail = $mail; 
        return $this; 
    }

    public function getRole()
    { 
        return $this->role; 
    }
    public function setRole($role): self 
    { 
        $this->role = $role; 
        return $this; 
    }

    public function getState()
    { 
        return $this->state; 
    }
    public function setState($state): self 
    { 
        if($state==1){
            $state = 0;
            $this->state = $state; 
            return $this;
        }

        if($state==0){
            $state = 1;
            $this->state = $state; 
            return $this;
        }
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
    
    public function getRut()
    { 
        return $this->rut; 
    }
    public function setRut($rut): self 
    { 
        $this->rut = $rut; 
        return $this; 
    }
}

?>