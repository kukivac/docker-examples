<?php
$dsn = 'pgsql:host=db;port=5432;dbname=testdb';
$user = 'user';
$password = 'password';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo "Connected to PostgreSQL!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
