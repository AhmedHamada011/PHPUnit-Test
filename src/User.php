<?php

namespace App;

class User
{
    private $name;
    private $email;

    public function __construct($name,$email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function name($name = '')
    {
        if($name !== ''){
            $this->name = $name;
            return $this->name;
        }
        return $this->name;

    }


    public function email($email = '')
    {
        if($email !== ''){
            $this->email = $email;
            return $this->email;
        }
        return $this->email;

    }


}