<?php

$host = 'localhost';
$db = 'coursework';
$user = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $password);
}
catch (Exception $e) {
    echo 'Ошибка соединения с БД' .$e->getMessage();
}