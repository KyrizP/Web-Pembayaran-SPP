<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>History Page</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body style="background-image: url(img/doodleb5.jpg);">
<h2 class="tittle">History Pembayaran</h2>
<a class="submit logout" href="logout.php">Logout</a>
<a class="submit kembali" href="home_siswa.php">Kembali</a>
<div class="box-history">
<table class="tabel">
    <tr>
        <th>NO</th>
        <th>ID Pembayaran</th>
        <th>ID SPP</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Tanggal Pembayaran</th>
        <th>Bulan</th>
        <th>Tahun</th>
        <th>Nominal</th>
        <th>Status</th>
    </tr>
    <?php
    $no = 1;
    $ambil = mysqli_query($koneksi,"SELECT * FROM pembayaran WHERE id_pembayaran=id_pembayaran");
    while ($data = mysqli_fetch_array($ambil)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['id_pembayaran']; ?></td>
            <td><?php echo $data['id_spp']; ?></td>
            <td><?php echo $data['nis']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['tgl_bayar']; ?></td>
            <td><?php echo $data['bulan_dibayar']; ?></td>
            <td><?php echo $data['tahun_dibayar']; ?></td>
            <td><?php echo $data['jumlah_bayar']; ?></td>
            <td><?php echo $data['status']; ?></td>
        </tr>
    <?php  
    }
    ?>
</table>
</div>
</body>
</html>