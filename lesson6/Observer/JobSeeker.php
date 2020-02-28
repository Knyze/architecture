<?php


class JobSeeker
{
    public $name;
    public $email;
    public $expirience;
    
    public function __construct($name, $email, $expirience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->expirience = $expirience;
    }
}