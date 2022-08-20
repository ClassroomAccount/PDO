<?php
//prepared statement using ? parameters
require 'connect.php';

$price = 200;
try {

    $sql = "SELECT * FROM part WHERE CLASS = ? And PRICE > ?";

    $pstmt = $pdo->prepare($sql);
    $pstmt->execute(['AP', $price]);

    if ($pstmt==null) throw PDOException("null result set");

//using a foreach loop
    foreach($pstmt as $row)
    {
        echo $row['DESCRIPTION'] . "  " . $row['ON_HAND'] . "  $" . $row['PRICE'] . "\n";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}