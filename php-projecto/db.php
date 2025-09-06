<?php
 $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sistema1";

try {
    $conn = new PDO("mysql:host=localhost;dbname=sistema1", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>
