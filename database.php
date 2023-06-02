<?php
try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=socio", "root", "");
} catch (PDOException $e) {
    die("Database Error: " . $e->getMessage());
}
?>