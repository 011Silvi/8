<?php
// Mengambil nilai dari form input
$nama_lengkap = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nisn = $_POST['nisn'];
$nik = $_POST['nik'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$berkebutuhan_khusus = $_POST['berkebutuhan_khusus'];
$alamat = $_POST['alamat'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$dusun = $_POST['dusun'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$kode_pos = $_POST['kode_pos'];
$tempat_tinggal = $_POST['tempat_tinggal'];
$transportasi = $_POST['transportasi'];
$nomor_hp = $_POST['nomor_hp'];
$nomor_telepon = $_POST['nomor_telepon'];
$email = $_POST['email'];
$penerima_kip = $_POST['penerima_kip'];
$no_kps = $_POST['no_kps'];
$kewarganegaraan = $_POST['kewarganegaraan'];
$nama_ibu = $_POST['nama_ibu'];
$tahun_lahir_ibu = $_POST['tahun_lahir_ibu'];
$pendidikan_ibu = $_POST['pendidikan_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$penghasilan_ibu = $_POST['penghasilan_ibu'];
$kebutuhan_khusus_ibu = $_POST['kebutuhan_khusus_ibu'];
$nama_ayah = $_POST['nama_ayah'];
$tahun_lahir_ayah = $_POST['tahun_lahir_ayah'];
$pendidikan_ayah = $_POST['pendidikan_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$penghasilan_ayah = $_POST['penghasilan_ayah'];
$kebutuhan_khusus_ayah = $_POST['kebutuhan_khusus_ayah'];

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "8";
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk menyimpan data siswa ke tabel siswa
$sql = "INSERT INTO siswa (nama_lengkap, jenis_kelamin, nisn, nik, tempat_lahir, tanggal_lahir, agama, berkebutuhan_khusus, alamat, rt, rw, dusun, kelurahan, kecamatan, kode_pos, tempat_tinggal, transportasi, nomor_hp, nomor_telepon, email, penerima_kip, no_kps, kewarganegaraan, nama_ayah, tahun_lahir_ayah, pendidikan_ayah, pekerjaan_ayah, penghasilan_ayah, kebutuhan_khusus_ayah, nama_ibu, tahun_lahir_ibu, pendidikan_ibu, pekerjaan_ibu, penghasilan_ibu, kebutuhan_khusus_ibu)
        VALUES ('$nama_lengkap', '$jenis_kelamin', '$nisn', '$nik', '$tempat_lahir', '$tanggal_lahir','$agama', '$berkebutuhan_khusus', '$alamat', '$rt', '$rw', '$dusun', '$kelurahan', '$kecamatan', '$kode_pos', '$tempat_tinggal', '$transportasi', '$nomor_hp', '$nomor_telepon', '$email', '$penerima_kip', '$no_kps', '$kewarganegaraan', '$nama_ayah', '$tahun_lahir_ayah', '$pendidikan_ayah', '$pekerjaan_ayah', '$penghasilan_ayah', '$kebutuhan_khusus_ayah', '$nama_ibu', '$tahun_lahir_ibu', '$pendidikan_ibu', '$pekerjaan_ibu', '$penghasilan_ibu', '$kebutuhan_khusus_ibu')";

if ($conn->query($sql) === TRUE) {
    echo "Data siswa berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi database
$conn->close();
header("Location: cetak.php");
?>

