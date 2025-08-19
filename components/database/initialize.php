<?php
include "./components/database/createDataBase.php";
include "./components/database/createTable.php";

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
    try{
        createDataBase($resultConn, "trackit");
        $resultConn = $conn->getPdo("trackit");
        createTableUsers($resultConn);
        createTableBooks($resultConn);
        createTableDiary($resultConn);
        createTableStats($resultConn);


    } catch(Exception $e){
        echo "Error";
    } 
}
 
$resultConn=null;