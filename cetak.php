<?php
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

// Query untuk mengambil data dari tabel pendaftaran
$sql_pendaftaran = "SELECT * FROM pendaftaran";
$result_pendaftaran = $conn->query($sql_pendaftaran);

// Query untuk mengambil data dari tabel siswa
$sql_siswa = "SELECT * FROM siswa";
$result_siswa = $conn->query($sql_siswa);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cetak Data</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h2>Data Pendaftaran</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Tanggal</th>
            <th>Jenis Pendaftaran</th>
            <th>Tanggal Masuk</th>
            <th>NIS</th>
            <th>Nomor Peserta</th>
            <th>No. Seri SHUN</th>
            <th>No. Seri Ijazah</th>
            <th>Hobi</th>
            <th>Cita-cita</th>
        </tr>
        <?php
        if ($result_pendaftaran->num_rows > 0) {
            while ($row = $result_pendaftaran->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['tanggal'] . "</td>";
                echo "<td>" . $row['jenis_pendaftaran'] . "</td>";
                echo "<td>" . $row['tanggal_masuk'] . "</td>";
                echo "<td>" . $row['nis'] . "</td>";
                echo "<td>" . $row['nomor_peserta'] . "</td>";
                echo "<td>" . $row['no_seri_shun'] . "</td>";
                echo "<td>" . $row['no_seri_ijazah'] . "</td>";
                echo "<td>" . $row['hobi'] . "</td>";
                echo "<td>" . $row['cita_cita'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='10'>Tidak ada data pendaftaran</td></tr>";
        }
        ?>
    </table>

    <h2>Data Siswa</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>NISN</th>
            <th>NIK</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Berkebutuhan Khusus</th>
            <th>Alamat</th>
            <th>RT</th>
            <th>RW</th>
            <th>Dusun</th>
            <th>Kelurahan</th>
            <th>Kecamatan</th>
            <th>Kode Pos</th>
            <th>Tempat Tinggal</th>
            <th>Transportasi</th>
            <th>Nomor HP</th>
            <th>Nomor Telepon</th>
            <th>Email</th>
            <th>Penerima KIP</th>
            <th>No. KPS</th>
            <th>Kewarganegaraan</th>
            <th>Nama Ayah</th>
            <th>Tahun Lahir Ayah</th>
            <th>Pendidikan Ayah</th>
            <th>Pekerjaan Ayah</th>
            <th>Penghasilan Ayah</th>
            <th>Kebutuhan Khusus Ayah</th>
            <th>Nama Ibu</th>
            <th>Tahun Lahir Ibu</th>
            <th>Pendidikan Ibu</th>
            <th>Pekerjaan Ibu</th>
            <th>Penghasilan Ibu</th>
            <th>Kebutuhan Khusus Ibu</th>
        </tr>
        <?php
        if ($result_siswa->num_rows > 0) {
            while ($row = $result_siswa->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nama_lengkap'] . "</td>";
                echo "<td>" . $row['jenis_kelamin'] . "</td>";
                echo "<td>" . $row['nisn'] . "</td>";
                echo "<td>" . $row['nik'] . "</td>";
                echo "<td>" . $row['tempat_lahir'] . "</td>";
                echo "<td>" . $row['tanggal_lahir'] . "</td>";
                echo "<td>" . $row['agama'] . "</td>";
                echo "<td>" . $row['berkebutuhan_khusus'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row['rt'] . "</td>";
                echo "<td>" . $row['rw'] . "</td>";
                echo "<td>" . $row['dusun'] . "</td>";
                echo "<td>" . $row['kelurahan'] . "</td>";
                echo "<td>" . $row['kecamatan'] . "</td>";
                echo "<td>" . $row['kode_pos'] . "</td>";
                echo "<td>" . $row['tempat_tinggal'] . "</td>";
                echo "<td>" . $row['transportasi'] . "</td>";
                echo "<td>" . $row['nomor_hp'] . "</td>";
                echo "<td>" . $row['nomor_telepon'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['penerima_kip'] . "</td>";
                echo "<td>" . $row['no_kps'] . "</td>";
                echo "<td>" . $row['kewarganegaraan'] . "</td>";
                echo "<td>" . $row['nama_ayah'] . "</td>";
                echo "<td>" . $row['tahun_lahir_ayah'] . "</td>";
                echo "<td>" . $row['pendidikan_ayah'] . "</td>";
                echo "<td>" . $row['pekerjaan_ayah'] . "</td>";
                echo "<td>" . $row['penghasilan_ayah'] . "</td>";
                echo "<td>" . $row['kebutuhan_khusus_ayah'] . "</td>";
                echo "<td>" . $row['nama_ibu'] . "</td>";
                echo "<td>" . $row['tahun_lahir_ibu'] . "</td>";
                echo "<td>" . $row['pendidikan_ibu'] . "</td>";
                echo "<td>" . $row['pekerjaan_ibu'] . "</td>";
                echo "<td>" . $row['penghasilan_ibu'] . "</td>";
                echo "<td>" . $row['kebutuhan_khusus_ibu'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='34'>Tidak ada data siswa</td></tr>";
        }
        ?>
    </table>
</body>
</html>

