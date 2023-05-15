<?php
// Konfigurasi database
$host = "localhost";
$username = "root";
$password = "";
$database = "8";

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mendapatkan data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Melakukan query untuk memeriksa keberadaan pengguna dalam database
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($query);

// Memeriksa hasil query
if ($result->num_rows > 0) {
    // Pengguna ditemukan, melakukan tindakan setelah login sukses
    echo "Login sukses!";
} else {
    // Pengguna tidak ditemukan, melakukan tindakan setelah login gagal
    echo "Login gagal!";
}

// Menutup koneksi ke database
$conn->close();
header("Location:form_pendaftaran.php");
?>
