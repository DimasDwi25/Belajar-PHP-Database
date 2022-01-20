<?php 

require_once __DIR__ . "/getConnection.php";

$connection = getConnection();

$connection->exec("INSERT INTO comments(email,comments) VALUES ('dimas@test.com', 'hi')");
$id = $connection->lastInsertId();

echo $id. PHP_EOL;

$connection = null;