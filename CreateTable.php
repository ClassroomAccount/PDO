<?php
require 'connect.php';

$sql = [
        "DROP TABLE IF EXISTS supplier;",
        "CREATE TABLE supplier (ID VARCHAR(4), SuppName VARCHAR(10), city VARCHAR(10), 
                state VARCHAR(2), PRIMARY KEY(ID));",
        "INSERT INTO supplier VALUES ('SP01', 'Jones', 'Watertown', 'MA');",
        "INSERT INTO supplier VALUES ('SP02', 'Taylor', 'Boston', 'MA');"
        ];

try {

   for ($i = 0; $i < sizeof($sql); $i++){
       $stmt = $pdo->query($sql[$i]);
   }

} catch (PDOException $e) {
    echo $e->getMessage();
}
//PDO connection automatically closes when exiting script