<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kozmetik_zeynep";

// Veritabanı bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>
