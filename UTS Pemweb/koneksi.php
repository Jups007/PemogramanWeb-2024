<?php

$servername = "localhost";
$database = "juanrexy_pemweb";
$username = "juanrexy_public";
$password = "juanrexyjuanrexy2kali";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
