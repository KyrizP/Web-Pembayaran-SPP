<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body style="background-image: url(img/doodleb5.jpg);">
<h2 class="tittle">Data Siswa</h2>
<a class="submit logout" href="logout.php">Logout</a>
<a class="submit kembali" href="home_admin.php">Kembali</a>
    <a style="float: left; margin-left: 200px; margin-top: 15px;" href="tambah_siswa.php">(+)Tambah Data</a>
    <div class="box-data">
<table class="tabel">
    <tr>
        <th>NO</th>
        <th>NISN</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th>ID SPP</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    $ambil = mysqli_query($koneksi,"SELECT siswa.*,kelas.* FROM siswa, kelas WHERE siswa.id_kelas=kelas.id_kelas");
    while ($data = mysqli_fetch_array($ambil)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nisn']; ?></td>
            <td><?php echo $data['nis']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['nama_kelas']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['no_telp']; ?></td>
            <td><?php echo $data['id_spp']; ?></td>
        <td>
            <a href="edit_siswa.php?id=<?php echo $data['nisn']; ?>">Edit /</a>
            <a href="hapus_siswa.php?id=<?php echo $data['nisn']; ?>">Hapus</a>
        </td>
        </tr>
    <?php  
    }
    ?>
</table>
</div>
</body>
</html>