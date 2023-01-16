<?php
 include 'koneksi.php';
 $ambil = mysqli_query($koneksi,"SELECT * FROM spp WHERE spp.no='$_GET[id]'");
 $data = mysqli_fetch_array($ambil);
 ?>
<head>
    <title>Edit SPP</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body style="background-image: url(img/doodleb1.jpg);">
<h2 class="tittle">Edit Data SPP</h2>
<a class="submit logout" href="logout.php">Logout</a>
<a class="submit kembali" href="data_spp.php">Kembali</a>
<div class="box-espp">
<h1 class="tittle">Silahkan Masukkan Data</h1>
<table>
    <form action="update_spp.php" method="POST">
        <input type="hidden" name="no" value="<?php echo $data['no']; ?>">
            <?php
            $ambil2 = mysqli_query($koneksi,"SELECT *FROM spp");
            while ($data2 = mysqli_fetch_assoc($ambil2)) {
               }
            ?>
        <label class="tengah">NIS</label><br>
        <input class="tengah" type="text" name="nis" required value="<?php echo $data['nis']; ?>"><br><br>
        <label class="tengah">Bulan</label><br>
        <input class="tengah" type="text" name="bulan" required value="<?php echo $data['bulan']; ?>"><br><br>
        <label class="tengah">Tahun</label><br>
        <input class="tengah" type="text" name="tahun" required value="<?php echo $data['tahun']; ?>"><br><br>
        <label class="tengah">Nominal</label><br>
        <input class="tengah" type="text" name="nominal" required value="<?php echo $data['nominal']; ?>"><br><br>
        <label class="tengah">Status</label><br><br>
        <select class="tengah" name="status" style="" class="input" required><br><br>        
            <option>Lunas</option>
            <option>Belum Lunas</option>
            <tr>
                <td colspan="2"><input type="submit" class="submit kanan" value="Update" required=""></input></td>
            </tr>
    </form>
            </table>
            </div>
            </body>
