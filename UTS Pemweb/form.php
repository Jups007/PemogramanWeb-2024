<?php
include "koneksi.php";

try {
    // Membuat koneksi ke database
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Cek jika form disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil data dari form
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Memasukkan data ke tabel `contacts`
        $sql = "INSERT INTO contacts (name, email, subject, message) VALUES (:name, :email, :subject, :message)";
        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':subject' => $subject,
            ':message' => $message
        ]);

        // header("Location: https://juan-rexy.my.id/contact.php?isSuccess=yes");
        header("Location: /juan/contact.php?isSuccess=yes");
    }
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
