<?php

// Set up MySQL connection
$host = 'localhost';
$user = 'jparks';
$password = 'Jom0ntel';
$database = 'jparks';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_errno) {
  die("Connection failed: {$conn->connect_error}\n");
}

?>

