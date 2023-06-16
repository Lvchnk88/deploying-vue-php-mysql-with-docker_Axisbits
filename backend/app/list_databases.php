<?php

$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$password = getenv('DB_PASSWORD');

$dsn = "mysql:host=$host";
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SHOW DATABASES";
$statement = $pdo->query($query);
$databases = $statement->fetchAll(PDO::FETCH_COLUMN);

$response = json_encode($databases);

header('Content-Type: application/json');
echo $response;