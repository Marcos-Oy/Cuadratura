<?php

class LoginController{

    public function login()
    {
        include "resources/views/login/login.php";   
    }

    public function forgot_password()
    {
        include "resources/views/login/ForgotPassword.php";   
    }

    public function register()
    {
        include "resources/views/login/register.php";   
    }
}

?>