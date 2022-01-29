<?php

$server = 'localhost';
$username = 'root';
$database = 'login';
$password = '';

try {
    $conn = new PDO("mysql:host=$server; dbname=$database; $usermane, $password");
} catch (PDOException $e) {
    die('Connection failed:' . $e->getMessage());
}