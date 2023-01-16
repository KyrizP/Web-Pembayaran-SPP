<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Kelas</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body style="background-image: url(img/doodleb5.jpg);">
<h2 class="tittle">Data Kelas</h2>
<a class="submit logout" href="logout.php">Logout</a>
<a class="submit kembali" href="home_admin.php">Kembali</a>
    <a style="float: left; margin-left: 200px; margin-top: 15px;" href="tambah_kelas.php">(+)Tambah Data</a>
<div class="box-data">
<table class="tabel">
    <tr>
        <th>No</th>
        <th>ID Kelas</th>
        <th>Nama Kelas</th>
        <th>Kompetensi Keahlian</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    $ambil = mysqli_query($koneksi,"SELECT * FROM kelas WHERE id_kelas=id_kelas");
    while ($data = mysqli_fetch_array($ambil)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['id_kelas']; ?></td>
            <td><?php echo $data['nama_kelas']; ?></td>
            <td><?php echo $data['kompetensi_keahlian']; ?></td>
        <td>
            <a href="edit_kelas.php?id=<?php echo $data['id_kelas']; ?>">Edit /</a>
            <a href="hapus_kelas.php?id=<?php echo $data['id_kelas']; ?>">Hapus</a>
        </td>
        </tr>
    <?php  
    }
    ?>
</table>
</div>
</body>
</html>