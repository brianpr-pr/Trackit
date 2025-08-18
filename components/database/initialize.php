<?php
include "./../../includes/classesHandler.php";
//We create a Connector instance
$conn = new Connector(new ServerData("localhost","root",""));
//getPdo will return a Pdo objecto or null if database is not found
$resultConn = $conn->getPdo("trackit");
//In case $result is null
if(!$resultConn){
    //We execute getPdo again without parameters to connect to the server
    //without specifying what database to use
    $resultConn = $conn->getPdo();
    //Now we create the database
    include "./components/database/create.php";
    try{
        createDataBase($resultConn, "trackit");
    } catch(Exception $e){
        echo "Error";
    } 
}