<?php
function createTableUsers(PDO $conn){
    $query = "CREATE TABLE users (
	id_user VARCHAR(15) PRIMARY KEY,
    username VARCHAR(30) UNIQUE NOT NULL,
    password VARCHAR(25) NOT NULL,
    gmail VARCHAR(30) NOT NULL,
    name VARCHAR(45) NOT NULL,
    surname VARCHAR(45),
    birth_date DATE NOT NULL);";

    $conn->exec($query);
}

function createTableBooks(PDO $conn){
    $query = "CREATE TABLE books (
    id_book VARCHAR(15) PRIMARY KEY,
    id_user VARCHAR(15),
        name VARCHAR(40) UNIQUE NOT NULL,
        name_file VARCHAR(50) NOT NULL,
        size FLOAT NOT NULL,
        page INT DEFAULT 0,
        total_pages INT NOT NULL,
        birth_date DATE NOT NULL,
        FOREIGN KEY (id_user) REFERENCES users(id_user));";
    $conn->exec($query);
}

function createTableDiary(PDO $conn){
    $query = "CREATE TABLE diary (
        id_diary VARCHAR(15) PRIMARY KEY,
        id_user VARCHAR(15),
        title VARCHAR(30) NOT NULL,
        content TEXT(150),
        number_hours INT DEFAULT 0,
        date_entry DATE DEFAULT CURDATE(),
        FOREIGN KEY (id_user) REFERENCES users(id_user));";
    $conn->exec($query);
}

function createTableStats(PDO $conn){
    $query = "CREATE TABLE stats (
	id_stats VARCHAR(15) PRIMARY KEY,
    id_user VARCHAR(15),
    num_books INT DEFAULT 0,
    books_completed INT DEFAULT 0,
    avg_hours INT DEFAULT 0,
    total_hours INT DEFAULT 0,
    FOREIGN KEY (id_user) REFERENCES users(id_user));";
    $conn->exec($query);
}