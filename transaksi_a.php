<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Transaksi Pembayaran</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body style="background-image: url(img/doodleb5.jpg);">
<h2 class="tittle">Transaksi Pembayaran</h2>
<a class="submit logout" href="logout.php">Logout</a>
<a class="submit kembali" href="home_admin.php">Kembali</a>
<div class="box-trans">
<table class="khusus">
<form action="cek-trans_a.php" method="post">
    <h2 class="tittle">Masukkan Data Transaksi</h2>
    <tr>
        <td>Kode Pembayaran</td>
        <td>:</td>
        <td><input type="text" name="id_pembayaran" class="input" value="<?= rand(0, 999999)?>"></input></td>
    </tr>
    <tr>
        <td>NIK Petugas/Guru</td>
        <td>:</td>
        <td><input type="text" name="id_petugas" class="input" value="7777"></input></td>
    </tr>
    <tr>
        <td>NIS Siswa</td>
        <td>:</td>
        <td><input type="text" name="nis" class="input" required placeholder="NIS"></input></td>
    </tr>
    <tr>
        <td>Nama Siswa</td>
        <td>:</td>
        <td><input type="text" name="nama" class="input" required placeholder="Nama"></input></td>
    </tr>
    <tr>
        <td>Tanggal Pembayaran</td>
        <td>:</td>
        <td><input type="date" name="tgl_bayar" class="input" placeholder="Tanggal Pembayaran"></input></td>
    </tr>
    <tr>
        <td>Bulan Dibayar</td>
        <td>:</td>
        <td><input type="text" name="bulan_dibayar" class="input" required placeholder="Bulan Dibayar"></input></td>
    </tr>
    <tr>
        <td>Tahun Dibayar</td>
        <td>:</td>
        <td><input type="text" name="tahun_dibayar" class="input" required placeholder="Tahun Dibayar"></input></td>
    </tr>
    <tr>
        <td>ID SPP</td>
        <td>:</td>
        <td><input type="text" name="id_spp" class="input" required placeholder="ID SPP"></input></td>
    </tr>
    <tr>
        <td>Jumlah Dibayar</td>
        <td>:</td>
        <td><input type="text" name="jumlah_bayar" class="input" required placeholder="Jumlah Dibayar"></input></td>
    </tr>
    <tr>
        <td>Status</td>
        <td>:</td>
        <td><select name="status" style="" class="input" required><br><br>         
            <option>Lunas</option>
            <option>Belum Lunas</option></td>
    </tr>
            <tr>
                <td colspan="2"><input type="submit" class="submit kanan" value="Bayar" required=""></input></td>
            </tr>
</form>
</table>
</div>
</body>
</html>