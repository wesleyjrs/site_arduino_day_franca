<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "arduino_day";

// Create connection
$conexao = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
} 


?>