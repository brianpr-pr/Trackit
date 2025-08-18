<?php
function createDataBase(PDO $conn, $databaseName){
    $query = "CREATE DATABASE $databaseName;";
    $conn->exec($query);
}