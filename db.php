<?php

try {
	$pdo = new PDO('mysql:dbname=coursework; host=localhost', 'root', 'root');
} catch (PDOException $e) {
	die($e->getMessage());
}
