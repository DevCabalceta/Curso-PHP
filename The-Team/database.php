<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "fcbarcelona"; 

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // foreach ($conn->query("SHOW DATABASES") as $row) {
    //     print_r($row);
    // }
    // die();
} catch (PDOException $e) {
    die("PDO Connection Error: " . $e->getMessage());    
}