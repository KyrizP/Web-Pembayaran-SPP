<?php
 include 'koneksi.php';
 $ambil = mysqli_query($koneksi,"SELECT * FROM kelas WHERE kelas.id_kelas='$_GET[id]'");
 $data = mysqli_fetch_array($ambil);
 ?>
<head>
    <title>Edit Kelas</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body style="background-image: url(img/doodleb1.jpg);">
<h2 class="tittle">Edit Data kelas</h2>
<a class="submit logout" href="logout.php">Logout</a>
<a class="submit kembali" href="data_kelas.php">Kembali</a>
<div class="box-ekelas">
<h1 class="tittle">Silahkan Masukkan Data</h1>
<table>
    <form action="update_kelas.php" method="POST">
        <input type="hidden" name="id_kelas" value="<?php echo $data['id_kelas']; ?>">
            <?php
            $ambil2 = mysqli_query($koneksi,"SELECT *FROM kelas");
            while ($data2 = mysqli_fetch_assoc($ambil2)) {
               }
            ?>
        <label class="tengah">Nama Kelas</label><br>
        <input class="tengah" type="text" name="nama_kelas" required value="<?php echo $data['nama_kelas']; ?>"><br><br>
        <label class="tengah">Kompetensi Keahlian</label><br>
        <input class="tengah" type="text" name="kompetensi_keahlian" required value="<?php echo $data['kompetensi_keahlian']; ?>"><br><br>
            <tr>
                <td colspan="2"><input type="submit" class="submit kanan" value="Update" required=""></input></td>
            </tr>
    </form>
            </table>
            </div>
            </body>