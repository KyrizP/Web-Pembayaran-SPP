<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data SPP</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body style="background-image: url(img/doodleb5.jpg);">
<h2 class="tittle">Data SPP</h2>
<a class="submit logout" href="logout.php">Logout</a>
<a class="submit kembali" href="home_admin.php">Kembali</a>
    <a style="float: left; margin-left: 200px; margin-top: 15px;" href="tambah_spp.php">(+)Tambah Data</a>
<div class="box-data">
<h1 class="tittle">SPP Lunas</h1>
<table class="tabel">
    <tr>
        <th>NO</th>
        <th>ID SPP</th>
        <th>NIS</th>
        <th>Bulan</th>
        <th>Tahun</th>
        <th>Nominal</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    $ambil = mysqli_query($koneksi,"SELECT * FROM spp WHERE status='Lunas'");
    while ($data = mysqli_fetch_array($ambil)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['id_spp']; ?></td>
            <td><?php echo $data['nis']; ?></td>
            <td><?php echo $data['bulan']; ?></td>
            <td><?php echo $data['tahun']; ?></td>
            <td><?php echo $data['nominal']; ?></td>
            <td><?php echo $data['status']; ?></td>
        <td>
            <a href="edit_spp.php?id=<?php echo $data['no']; ?>">Edit /</a>
            <a href="hapus_spp.php?id=<?php echo $data['no']; ?>">Hapus</a>
        </td>
        </tr>
    <?php  
    }
    ?>
</table><br><br>

<h1 class="tittle">SPP Belum Lunas</h1>
<table class="tabel">
    <tr>
        <th>NO</th>
        <th>ID SPP</th>
        <th>NIS</th>
        <th>Bulan</th>
        <th>Tahun</th>
        <th>Nominal</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    $ambil = mysqli_query($koneksi,"SELECT * FROM spp WHERE status='Belum Lunas'");
    while ($data = mysqli_fetch_array($ambil)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['id_spp']; ?></td>
            <td><?php echo $data['nis']; ?></td>
            <td><?php echo $data['bulan']; ?></td>
            <td><?php echo $data['tahun']; ?></td>
            <td><?php echo $data['nominal']; ?></td>
            <td><?php echo $data['status']; ?></td>
        <td>
            <a href="edit_spp.php?id=<?php echo $data['no']; ?>">Edit /</a>
            <a href="hapus_spp.php?id=<?php echo $data['no']; ?>">Hapus</a>
        </td>
        </tr>
    <?php  
    }
    ?>
</table>
</body>
</html>