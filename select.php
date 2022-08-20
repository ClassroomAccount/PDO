<?php
require 'connect.php';

try {

$sql = 'SELECT DESCRIPTION, ON_HAND FROM part';

    $stmt = $pdo->query($sql);

} catch (PDOException $e) {
    echo $e->getMessage();
}

//using a while loop
while ($row = $stmt->fetch())
{
    echo $row['DESCRIPTION'] . "  " . $row['ON_HAND'] . "\n";
}
//PDO connection automatically closes when exiting script
