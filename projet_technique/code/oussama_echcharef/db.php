<?php
$host = "localhost";
$dbname = "evenets";
$username = "root";
$pass = "12345678";


try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo "no conection : " . $e->getMessage(); 
}
