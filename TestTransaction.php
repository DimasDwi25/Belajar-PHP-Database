<?php 

require_once __DIR__ . "/getConnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email,comments) VALUES ('dimas@test.com', 'hi')");
$connection->exec("INSERT INTO comments(email,comments) VALUES ('dimas@test.com', 'hi')");
$connection->exec("INSERT INTO comments(email,comments) VALUES ('dimas@test.com', 'hi')");

$connection->commit();


$connection = null;