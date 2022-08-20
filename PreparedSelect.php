<?php
//prepared statement using named parameters

require 'connect.php';

$class = "AP";
$price = 200;

try {

    $sql = "SELECT * FROM part WHERE CLASS = :class And PRICE > :price";

    $pstmt = $pdo->prepare($sql);
    $pstmt->bindParam(':price', $price);
    $pstmt->bindParam(':class', $class);
    $pstmt->execute();

    if ($pstmt==null) throw PDOException("null result set");

//using a while loop
while ($row = $pstmt->fetch())
{
    echo $row['DESCRIPTION'] . "  " . $row['ON_HAND'] . "  $" . $row['PRICE'] . "\n";
}
} catch (PDOException $e) {
    echo $e->getMessage();
}