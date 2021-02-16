<?php

$servername = "localhost";
$username = "test";
$password = "1234";
$dbname = "Data";
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $sql = "CREATE DATABASE Data";
    $conn->exec($sql);
    echo "Database created successfully";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    "PRAGMA foreign_keys=ON";
    $sql = "CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR (30) NOT NULL)";
    $conn->exec($sql);
    $sql = "INSERT INTO users (username)
       VALUES ('Root'),
       ('Tester_1'),
    ('Tester_2')";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "last id" . $last_id;

    $sql = "CREATE TABLE user_info(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (30) NOT NULL,
    surname VARCHAR (30) NOT NULL,
    tel VARCHAR (30) NOT NULL)";
    $conn->exec($sql);
    $sql = "INSERT INTO user_info (name,surname, tel)
       VALUES ('Oleg', 'Penkov', '2883195'),
       ('Viktor', 'Ivanov', '2411442'),
       ('Alena', 'Kuskova', '2908365')";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "last id" . $last_id;

    $sql = "CREATE TABLE ttl_users (
    user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_info_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (user_info_id) REFERENCES user_info(id))";
    $conn->exec($sql);
    $sql = "INSERT INTO ttl_users (user_id, user_info_id)
       VALUES ('1', '1'),
       ('2', '2'),
       ('3', '3')";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "last id" . $last_id;
    echo "All Tables Created Successfully";

}

catch (PDOException $e) {
    echo $sql . $e->getMessage();
}
?>


