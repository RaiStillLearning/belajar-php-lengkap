<?php 
$host = "localhost"; // ganti dengan host database Anda
$username = "root";
$password = ""; // ganti dengan password database Anda
$dbname = "crud_pdo";


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}





?>