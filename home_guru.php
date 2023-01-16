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
    <h2 class="tittle">Selamat Datang Di Laman Guru</h2>
</form>
        <a class="submit logout" href="logout.php">Logout</a>
    <ul>
        <li><a href="transaksi_g.php"><button class="ton">Transaksi Pembayaran</button></a></li>
        <li><a href="history_g.php"><button class="ton">Histori Pembayaran</button></a></li>
    </ul>
</body>
</html>