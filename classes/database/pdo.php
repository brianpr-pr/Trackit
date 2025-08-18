<?php
class Pdo{
    private $host = "localhost";
    private $username = "root";
    private $password = "";

    public function getHost(){
        return $this->host;
    }

    public function getUserName(){
        return $this->username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getPdo(){
        $conn  = new PDO("mysql:host=".$this->getHost().";",$this->getUserName(),$this->getPassword());
        // set the PDO  fetch mode to be an associative array
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $conn;
    }
}

$test= "22";