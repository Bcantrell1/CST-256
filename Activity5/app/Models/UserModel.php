<?php

namespace App\Models;
use JsonSerializable;

class UserModel implements JsonSerializable
{
    
    private $username;
    private $password;
    
    function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }
    
    /**
     *
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
    
    /**
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}