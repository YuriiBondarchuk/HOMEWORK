<?php

class User
{
    protected $login;
    protected $password;
    protected $email;
    protected $rating =0;
    protected $isLoged;

    public function  login ()
    {
        echo $this->isLoged='true' . "<br>";
    }

    public function  logout ()
    {
        echo $this->isLoged='false';
    }
}