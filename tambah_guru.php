<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Guru</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body style="background-image: url(img/doodleb1.jpg);">
<h2 class="tittle">Tambah Data Guru</h2>
<a class="submit logout" href="logout.php">Logout</a>
<a class="submit kembali" href="data_Guru.php">Kembali</a>
<div class="box-tguru">
<h1 class="tittle">Silahkan Masukkan Data</h1>
<table>
    <form action="simpan_guru.php" method="POST">
        <label class="tengah">NIK</label><br>
        <input class="tengah" type="text" name="nik" placeholder="Masukkan NIK" required /><br><br>
        <label class="tengah">Nama</label><br>
        <input class="tengah" type="text" name="nama" placeholder="Masukkan Nama" required /><br><br>
        <label class="tengah">Jabatan</label><br>
        <input class="tengah" type="text" name="jabatan" placeholder="Masukkan Jabatan" required /><br><br>
        <label class="tengah">Sarjana</label><br>
        <input class="tengah" type="text" name="sarjana" placeholder="Masukkan Sarjana" required /><br><br>
        <label class="tengah">Alamat</label><br>
        <input class="tengah" type="text" name="alamat" placeholder="Masukkan Alamat" required /><br><br>
        <label class="tengah">No Telp</label><br>
        <input class="tengah" type="text" name="no_telp" placeholder="Masukkan No Telp" required /><br><br>
            <tr>
                <td colspan="2"><input type="submit" class="submit kanan" value="Tambah" required=""></input></td>
            </tr>
</form>
</table>
</div>
</body>
</html>