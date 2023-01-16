<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data SPP</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body style="background-image: url(img/doodleb1.jpg);">
<h2 class="tittle">Tambah Data SPP</h2>
<a class="submit logout" href="logout.php">Logout</a>
<a class="submit kembali" href="data_spp.php">Kembali</a>
<div class="box-tspp">
<h2 class="tittle">Silahkan Masukkan Data</h2>
<table>
    <form action="simpan_spp.php" method="POST">
        <label class="tengah">ID SPP</label><br>
        <input class="tengah" type="text" name="id_spp" placeholder="Masukkan ID SPP" required /><br><br>
        <label class="tengah">NIS</label><br>
        <input class="tengah" type="text" name="nis" placeholder="Masukkan NIS" required /><br><br>
        <label class="tengah">Bulan</label><br>
        <input class="tengah" type="text" name="bulan" placeholder="Masukkan Bulan" required /><br><br>
        <label class="tengah">Tahun</label><br>
        <input class="tengah" type="text" name="tahun" placeholder="Masukkan Tahun" required /><br><br>
        <label class="tengah">Nominal</label><br>
        <input class="tengah" type="text" name="nominal" placeholder="Masukkan Nominal" required /><br><br>
        <label class="tengah">Status</label><br>
        <select class="tengah"name="status" style="" class="input" required><br><br>         
            <option>Lunas</option>
            <option>Belum Lunas</option>
            <tr>
                <td colspan="2"><input type="submit" class="submit kanan" value="Tambah" required=""></input></td>
            </tr>
</form>
</table>
</div>
</body>
</html>