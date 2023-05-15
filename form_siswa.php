<!DOCTYPE html>
<html>
<head>
    <title>Form Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            padding: 20px;
            background-image: url(photo-1483232539664-d89822fb5d3e.jpg);

        }

        h2 {
            color: #ffff;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        label {
            display: inline-block;
            width: 200px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 300px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            transition-duration: 0.4s;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Form Siswa</h2>
    <form action="simpan_siswa.php" method="POST">
        <label>Nama Lengkap:</label>
        <input type="text" name="nama_lengkap" required><br>

        <label>Jenis Kelamin:</label>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>

        <label>NISN:</label>
        <input type="text" name="nisn" required><br>

        <label>NIK:</label>
        <input type="text" name="nik" required><br>

        <label>Tempat Lahir:</label>
        <input type="text" name="tempat_lahir" required><br>

        <label>Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" required><br>

        <label for="agama">Agama:</label>
        <select id="agama" name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
        </select><br>

        <label for="berkebutuhan_khusus">Berkebutuhan Khusus:</label>
        <select id="berkebutuhan_khusus" name="berkebutuhan_khusus">
            <option value="Tidak">Tidak</option>
            <option value="Netra">Netra</option>
            <option value="Rungu">Rungu</option>
            <option value="Grahita Ringan">Grahita Ringan</option>
            <option value="Grahita Sedang">Grahita Sedang</option>
            <option value="Daksa Ringan">Daksa Ringan</option>
            <option value="Daksa Sedang">Daksa Sedang</option>
            <option value="Laras">Laras</option>
            <option value="Wicara">Wicara</option>
            <option value="Tuna Ganda">Tuna Ganda</option>
            <option value="Hiperaktif">Hiperaktif</option>
            <option value="Cerdas Istimewa">Cerdas Istimewa</option>
            <option value="Bakat Istimewa">Bakat Istimewa</option>
            <option value="Kesulitan Belajar">Kesulitan Belajar</option>
            <option value="Narkoba">Narkoba</option>
            <option value="Indigo">Indigo</option>
            <option value="Down Syndrome">Down Syndrome</option>
            <option value="Autis">Autis</option>
            <option value="Lainnya">Lainnya</option>
        </select><br>

        <label>Alamat:</label>
        <textarea name="alamat" required></textarea><br>

        <label>RT:</label>
        <input type="text" name="rt" required><br>

        <label>RW:</label>
        <input type="text" name="rw" required><br>

        <label>Dusun:</label>
        <input type="text" name="dusun" required><br>

        <label>Kelurahan:</label>
        <input type="text" name="kelurahan" required><br>

        <label>Kecamatan:</label>
        <input type="text" name="kecamatan" required><br>

        <label>Kode Pos:</label>
        <input type="text" name="kode_pos" required><br>

        <label for="tempat_tinggal">Tempat Tinggal:</label>
        <select id="tempat_tinggal" name="tempat_tinggal">
            <option value="Bersama Orang Tua">Bersama Orang Tua</option>
            <option value="Wali">Wali</option>
            <option value="Kos">Kos</option>
            <option value="Asrama">Asrama</option>
            <option value="Panti Asuhan">Panti Asuhan</option>
            <option value="Lainnya">Lainnya</option>
        </select><br>

        <label for="transportasi">Transportasi:</label>
        <select id="transportasi" name="transportasi">
            <option value="Jalan Kaki">Jalan Kaki</option>
            <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
            <option value="Kendaraan Umum">Kendaraan Umum</option>
            <option value="Jemputan Sekolah">Jemputan Sekolah</option>
            <option value="Kereta">Kereta</option>
            <option value="Ojek">Ojek</option>
            <option value="Lainnya">Lainnya</option>
        </select><br>

        <label>Nomor HP:</label>
        <input type="text" name="nomor_hp" required><br>

        <label>Nomor Telepon:</label>
        <input type="text" name="nomor_telepon"><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Penerima KIP:</label>
        <input type="radio" id="penerima_kip_ya" name="penerima_kip" value="Ya">
        <label for="penerima_kip_ya">Ya</label>
        <input type="radio" id="penerima_kip_tidak" name="penerima_kip" value="Tidak">
        <label for="penerima_kip_tidak">Tidak</label><br>
        
        <label for="no_kps">No. KPS/KKS/PKH/KIP:</label>
        <input type="text" id="no_kps" name="no_kps"><br>
        
        <label for="kewarganegaraan">Kewarganegaraan:</label>
        <select id="kewarganegaraan" name="kewarganegaraan">
            <option value="WNI">Warga Negara Indonesia (WNI)</option>
            <option value="WNA">Warga Negara Asing (WNA)</option>
        </select><br>

        <label>Nama Ayah:</label>
        <input type="text" name="nama_ayah" required><br>

        <label>Tahun Lahir Ayah:</label>
        <input type="text" name="tahun_lahir_ayah
        <label>Tahun Lahir Ayah:</label>
        <input type="text" name="tahun_lahir_ayah" required><br>

        <label>Pendidikan Ayah:</label>
        <input type="text" name="pendidikan_ayah" required><br>

        <label>Pekerjaan Ayah:</label>
        <input type="text" name="pekerjaan_ayah" required><br>

        <label>Penghasilan Ayah:</label>
        <input type="text" name="penghasilan_ayah" required><br>

        <label>Kebutuhan Khusus Ayah:</label>
        <input type="text" name="kebutuhan_khusus_ayah" required><br>

        <label>Nama Ibu:</label>
        <input type="text" name="nama_ibu" required><br>

        <label>Tahun Lahir Ibu:</label>
        <input type="text" name="tahun_lahir_ibu" required><br>

        <label>Pendidikan Ibu:</label>
        <input type="text" name="pendidikan_ibu" required><br>

        <label>Pekerjaan Ibu:</label>
        <input type="text" name="pekerjaan_ibu" required><br>

        <label>Penghasilan Ibu:</label>
        <input type="text" name="penghasilan_ibu" required><br>

        <label>Kebutuhan Khusus Ibu:</label>
        <input type="text" name="kebutuhan_khusus_ibu" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
