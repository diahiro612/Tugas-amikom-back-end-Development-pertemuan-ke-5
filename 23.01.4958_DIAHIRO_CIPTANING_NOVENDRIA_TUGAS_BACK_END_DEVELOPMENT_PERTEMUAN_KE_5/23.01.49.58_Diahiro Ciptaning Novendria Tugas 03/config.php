<?php
$servername = "localhost";
$username = "root"; // Ganti dengan username MySQL Anda
$password = "root"; // Ganti dengan password MySQL Anda
$dbname = "anajaymabar4958"; // Nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
