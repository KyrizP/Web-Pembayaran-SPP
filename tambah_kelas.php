<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Kelas</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body style="background-image: url(img/doodleb1.jpg);">
<h2 class="tittle">Tambah Data Kelas</h2>
<a class="submit logout" href="logout.php">Logout</a>
<a class="submit kembali" href="data_kelas.php">Kembali</a>
<div class="box-tkelas">
<h1 class="tittle">Silahkan Masukkan Data</h1>
<table>
    <form action="simpan_kelas.php" method="POST">
        <label class="tengah">ID Kelas</label><br>
        <input class="tengah" type="text" name="id_kelas" placeholder="Masukkan Kelas" required /><br><br>
        <label class="tengah">Nama Kelas</label><br>
        <input class="tengah" type="text" name="nama_kelas" placeholder="Masukkan Nama Kelas" required /><br><br>
        <label class="tengah">Kompetensi Keahlian</label><br>
        <input class="tengah" type="text" name="kompetensi_keahlian" placeholder="Masukkan Kompetensi Keahlian" required /><br><br>
            <tr>
                <td colspan="2"><input type="submit" class="submit kanan" value="Tambah" required=""></input></td>
            </tr>
</form>
</table>
</div>
</body>
</html>