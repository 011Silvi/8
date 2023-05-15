<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
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
    <h2>Form Pendaftaran</h2>
    <form action="simpan_pendaftaran.php" method="POST">
        <label for="tanggal">Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" value="<?php echo date('Y-m-d'); ?>" readonly><br><br>

        <label for="jenis_pendaftaran">Jenis Pendaftaran:</label>
        <select id="jenis_pendaftaran" name="jenis_pendaftaran">
            <option value="Baru">Baru</option>
            <option value="Pindahan">Pindahan</option>
        </select><br><br>

        <label>Tanggal Masuk:</label>
        <input type="date" name="tanggal_masuk" required><br>

        <label>NIS:</label>
        <input type="text" name="nis" required><br>

        <label>Nomor Peserta:</label>
        <input type="text" name="nomor_peserta" required><br>

        <label>No. Seri SHUN:</label>
        <input type="text" name="no_seri_shun" required><br>

        <label>No. Seri Ijazah:</label>
        <input type="text" name="no_seri_ijazah" required><br>

        <label>Hobi:</label>
        <input type="text" name="hobi" required><br>

        <label>Cita-cita:</label>
        <input type="text" name="cita_cita" required><br>

        <input type="submit" value="Next">
    </form>
</body>
</html>
