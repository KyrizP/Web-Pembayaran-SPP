<?php
 include 'koneksi.php';
 $ambil = mysqli_query($koneksi,"SELECT kelas.*, siswa.*FROM kelas, siswa WHERE kelas.id_kelas=siswa.id_kelas AND siswa.nisn='$_GET[id]'");
 $data = mysqli_fetch_array($ambil);
 ?>
<head>
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body style="background-image: url(img/doodleb1.jpg);">
<h2 class="tittle">Edit Data Siswa</h2>
<a class="submit logout" href="logout.php">Logout</a>
<a class="submit kembali" href="data_siswa.php">Kembali</a>
<div class="box-esiswa">
<h1 class="tittle">Silahkan Masukkan Data</h1>
<table>
    <form action="update_siswa.php" method="POST">
        <input type="hidden" name="nisn" value="<?php echo $data['nisn']; ?>">
        <label style="margin-left: 120px;">Pilih Kelas</label><br>
        <select style="margin-left: 120px;" name="nama_kelas">
            <?php
            $ambil2 = mysqli_query($koneksi,"SELECT *FROM kelas");
            while ($data2 = mysqli_fetch_assoc($ambil2)) {
                if($data2['id_kelas']==$data['id_kelas']){
                    echo'<option selected value="'.$data2['id_kelas'].'">'.$data2['nama_kelas'].'</option>';
                }else{
                    echo'<option value="'.$data2['id_kelas'].'">'.$data2['nama_kelas'].'</option>';
               }
            }
            ?>
        </select><br><br>
        <label style="margin-left: 120px;">Nama Lengkap</label><br>
        <input type="text" name="nama" style="margin-left: 120px;" value="<?php echo $data['nama']; ?>"><br><br>
        <label style="margin-left: 120px;">NIS</label><br>
        <input type="text" name="nis" style="margin-left: 120px;" value="<?php echo $data['nis']; ?>"><br><br>
        <label style="margin-left: 120px;">Alamat</label><br>
        <textarea type="text" style="margin-left: 120px;" name="alamat"><?php echo $data['alamat']; ?></textarea><br><br>
        <label style="margin-left: 120px;">No Telp</label><br>
        <input type="text" name="no_telp" style="margin-left: 120px;" value="<?php echo $data['no_telp']; ?>"><br><br>
        <label style="margin-left: 120px;">ID SPP</label><br>
        <input type="text" name="id_spp" style="margin-left: 120px;" value="<?php echo $data['id_spp']; ?>"><br><br>
        <input type="submit" class="submit kanan" value="Update">
</form>
</table>
</div>
</body>
