<?php
class ServerData{
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
}