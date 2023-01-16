<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body style="background-image: url(img/doodleb2.jpg);">
<form>
    <h2 class="tittle">Selamat Datang Di Laman Admin</h2>
</form>
        <a class="submit logout" href="logout.php">Logout</a>
    <ul>
        <li><a href="data_siswa.php"><button class="ton" style="cursor: pointer;">Data Siswa</button></a></li>
        <li><a href="data_guru.php"><button class="ton" style="cursor: pointer;">Data Guru</button></a></li>
        <li><a href="data_kelas.php"><button class="ton" style="cursor: pointer;">Data Kelas</button></a></li>
        <li><a href="data_spp.php"><button class="ton" style="cursor: pointer;">Data SPP</button></a></li>
        <li><a href="transaksi_a.php"><button class="ton" style="cursor: pointer;">Transaksi Pembayaran</button></a></li>
        <li><a href="history_a.php"><button class="ton" style="cursor: pointer;">Histori Pembayaran</button></a></li>
        <li><a href="laporan.php"><button class="ton" style="cursor: pointer;">Laporan</button></a></li>
    </ul>
</body>
</html>