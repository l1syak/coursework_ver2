<?php

include 'db.php';

$name = $_POST['name'];

$link = mysqli_connect("localhost", "root", "root", "coursework");


// Create chat

if (isset($_POST['add'])) {
    $sql = ("INSERT INTO homeworks (name) VALUES(?)");
    $query = $pdo->prepare($sql);
    $query->execute([$name]);

    // create table for it
    $sql = ("CREATE TABLE ".$name." (id int not null primary key auto_increment, nam varchar(16), note varchar(255), marks int not null)");
    $r = mysqli_query($link, $sql);

    if ($query && $r) {
        header("Location: ". $_SERVER['HTTP_REFERER']);
    }
}

// List chats

$sql = $pdo->prepare("SELECT * FROM homeworks");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_OBJ);
