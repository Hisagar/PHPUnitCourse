<?php

class User
{

    public $first_name;

    public $surname;

    public function getFullName()
    {
        return trim("$this->first_name $this->surname");
    }
    public function getFirstName()
    {
        return ("$this->first_name");
    }

}