<?php
class Connector{
    private $serverData;
    public function __construct(ServerData $serverData){
        $this->serverData = $serverData;
    }
    public function getPdo(string $dataBaseName = ''){
        $str = "mysql:host=".$this->serverData->getHost().";";
        if($dataBaseName){
            $str .= "dbname=$dataBaseName";
        }
        $conn  = new PDO($str,$this->serverData->getUserName(),$this->serverData->getPassword());
        // set the PDO  fetch mode to be an associative array
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $conn;
    }
}