<?php

$host = 'frodo.bentley.edu';
$db = 'premiere';
$user = 'harry';
$password = 'harry';

//connection string
$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

//connect to DB
try {
    //create PDO object
    $pdo = new PDO($dsn, $user, $password);

    if ($pdo) {
        echo "Connected to the $db database successfully!" . "\n";
    }

} catch (PDOException $e) {
    echo $e->getMessage();
}

