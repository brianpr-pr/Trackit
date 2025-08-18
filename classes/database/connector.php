<?php
class Connector{
    private $serverData;

    public function __construct($serverData){
        $this->serverData = $serverData; 
    }

    public function getPdo(string $dataBaseName = ''){
        //String with localhost and database name
        $str = "mysql:host=".$this->serverData->getHost().";";
        if($dataBaseName){
            $str .= "dbname=$dataBaseName";
        }
        //try catch for creating PDO
        try{
        $conn  = new PDO($str,$this->serverData->getUserName(),$this->serverData->getPassword());
        // set the PDO  fetch mode to be an associative array and exception on
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
        } catch (Exception $e){
            //In case of an exception if the database its not found we will create it
            //We create a connection without specifying the name of the database
            return null;
        }
    }
}