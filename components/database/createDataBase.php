<?php
function createDataBase(PDO $conn, $dataBaseName){
    $query = "CREATE DATABASE  IF NOT EXISTS $dataBaseName
    DEFAULT CHARACTER SET = utf8
    DEFAULT COLLATE = utf8_unicode_ci;";
    $conn->exec($query);
}