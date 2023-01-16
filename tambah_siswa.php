<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body style="background-image: url(img/doodleb1.jpg);">
<h2 class="tittle">Tambah Data Siswa</h2>
<a class="submit logout" href="logout.php">Logout</a>
<a class="submit kembali" href="data_siswa.php">Kembali</a>
<div class="box-tsiswa">
<h1 class="tittle">Silahkan Masukkan Data</h1>
<table>
    <form action="simpan_siswa.php" method="POST">
        <label style="margin-left: 120px;">Pilih Kelas</label><br>
        <select name="nama_kelas" style="margin-left: 120px;">
            <?php
            $ambil = mysqli_query($koneksi,"SELECT *FROM kelas");
            while ($data = mysqli_fetch_assoc($ambil)){
                echo'<option value="'.$data['id_kelas']. '">'.$data['nama_kelas']. '</option>';
            }
            ?>
        </select><br><br>
        <label class="tengah">NISN</label><br>
        <input class="tengah" type="text" name="nisn" placeholder="Masukkan NISN" required /><br><br>
        <label class="tengah">Nama Lengkap</label><br>
        <input class="tengah" type="text" name="nama" placeholder="Masukkan Nama" required /><br><br>
        <label class="tengah">NIS</label><br>
        <input class="tengah" type="text" name="nis" placeholder="Masukkan NIS" required /><br><br>
        <label class="tengah">Alamat</label><br>
        <input class="tengah" type="textarea" name="alamat" placeholder="Masukkan Alamat" required /><br><br>
        <label class="tengah">No Telp</label><br>
        <input class="tengah" type="text" name="no_telp" placeholder="Masukkan No Telp" required /><br><br>
        <label class="tengah">ID SPP</label><br>
        <input class="tengah" type="text" name="id_spp" placeholder="Masukkan No Telp" required /><br><br>
            <tr>
                <td colspan="2"><input type="submit" class="submit kanan" value="Tambah" required=""></input></td>
            </tr>
</form>
</table>
</div>
</body>
</html>