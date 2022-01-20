<?php 

require_once __DIR__ . "/getConnection.php";

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ('Susanto', 'susanto', 'susanto@gmail.com');
    SQL;

$connection->exec($sql);

$connection = null;