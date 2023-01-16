<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Guru</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body style="background-image: url(img/doodleb5.jpg);">
<h2 class="tittle">Data Guru</h2>
<a class="submit logout" href="logout.php">Logout</a>
<a class="submit kembali" href="home_admin.php">Kembali</a>
    <a style="float: left; margin-left: 200px; margin-top: 15px;" href="tambah_guru.php">(+)Tambah Data</a>
    <div class="box-data">
<table class="tabel">
    <tr>
        <th>NO</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Sarjana</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    $ambil = mysqli_query($koneksi,"SELECT * FROM guru WHERE nik=nik");
    while ($data = mysqli_fetch_array($ambil)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nik']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['jabatan']; ?></td>
            <td><?php echo $data['sarjana']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['no_telp']; ?></td>
        <td>
            <a href="edit_guru.php?id=<?php echo $data['nik']; ?>">Edit /</a>
            <a href="hapus_guru.php?id=<?php echo $data['nik']; ?>">Hapus</a>
        </td>
        </tr>
    <?php  
    }
    ?>
</table>
</body>
</html>