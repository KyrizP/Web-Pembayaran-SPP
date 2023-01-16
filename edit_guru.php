<?php
 include 'koneksi.php';
 $ambil = mysqli_query($koneksi,"SELECT * FROM guru WHERE guru.nik='$_GET[id]'");
 $data = mysqli_fetch_array($ambil);
 ?>
<head>
    <title>Edit Guru</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body style="background-image: url(img/doodleb1.jpg);">
<h2 class="tittle"> Data Edit Guru</h2>
<a class="submit logout" href="logout.php">Logout</a>
<a class="submit kembali" href="data_Guru.php">Kembali</a>
<div class="box-eguru">
<h1 class="tittle">Silahkan Masukkan Data</h1>
<table>
    <form action="update_guru.php" method="POST">
        <input type="hidden" name="nik" value="<?php echo $data['nik']; ?>">

        <label class="tengah">Nama</label><br>
        <input class="tengah" type="text" name="nama" required value="<?php echo $data['nama']; ?>"><br><br>
        <label class="tengah">Jabatan</label><br>
        <input class="tengah" type="text" name="jabatan" required value="<?php echo $data['jabatan']; ?>"><br><br>
        <label class="tengah">Sarjana</label><br>
        <input class="tengah" type="text" name="sarjana" required value="<?php echo $data['sarjana']; ?>"><br><br>
        <label class="tengah">Alamat</label><br>
        <input class="tengah" type="text" name="alamat" required value="<?php echo $data['alamat']; ?>"><br><br>
        <label class="tengah">No Telp</label><br>
        <input class="tengah" type="text" name="no_telp" required value="<?php echo $data['no_telp']; ?>"><br><br>
            <tr>
                <td colspan="2"><input type="submit" class="submit kanan" value="Update" required=""></input></td>
            </tr>
    </form>
            </table>
            </div>
            </body>