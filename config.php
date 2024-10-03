<?php
// Konfigurasi database
$host = 'localhost'; // Biasanya 'localhost' untuk server lokal
$user = 'root';      // Username MySQL Anda (biasanya 'root' di XAMPP)
$password = '';      // Password MySQL Anda (biasanya kosong di XAMPP)
$database = 'dbstock'; // Ganti dengan nama database Anda

// Membuat koneksi
$mysqli = new mysqli($host, $user, $password, $database);

// Memeriksa koneksi
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}
?>
