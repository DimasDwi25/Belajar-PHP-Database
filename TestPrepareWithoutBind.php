<?php 

require_once __DIR__. "/getConnection.php";

$connection = getConnection();

$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?; ";
$statement = $connection->prepare($sql);

$statement->execute([$username, $password]);

$success = false;
$find_user = null;

foreach ($statement as $row)
{
    $success = true;
    $find_user = $row["username"];
}

if($success)
{
    echo "Berhasil login ". $find_user. PHP_EOL;
} else
{
    echo "Gagal Login". PHP_EOL;
}

$connection = null;