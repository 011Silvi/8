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

// Menangkap data yang dikirim melalui form
$tanggal = $_POST['tanggal'];
$jenis_pendaftaran = $_POST['jenis_pendaftaran'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$nis = $_POST['nis'];
$nomor_peserta = $_POST['nomor_peserta'];
$no_seri_shun = $_POST['no_seri_shun'];
$no_seri_ijazah = $_POST['no_seri_ijazah'];
$hobi = $_POST['hobi'];
$cita_cita = $_POST['cita_cita'];

// Menyimpan data ke tabel "pendaftaran"
$query = "INSERT INTO pendaftaran (tanggal, jenis_pendaftaran, tanggal_masuk, nis, nomor_peserta, no_seri_shun, no_seri_ijazah, hobi, cita_cita)
VALUES ('$tanggal', '$jenis_pendaftaran', '$tanggal_masuk', '$nis', '$nomor_peserta', '$no_seri_shun', '$no_seri_ijazah', '$hobi', '$cita_cita')";

if ($conn->query($query) === TRUE) {
    echo "Data pendaftaran berhasil disimpan.";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Menutup koneksi database
$conn->close();
header("Location:form_siswa.php");
?>
