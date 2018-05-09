<?php

interface UserI
{
    public function  login ();


    public function  logout ();

}
class User implements UserI
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