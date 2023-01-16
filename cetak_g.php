<?php
 include 'koneksi.php';
 $ambil = mysqli_query($koneksi,"SELECT * FROM pembayaran WHERE pembayaran.no_pembayaran='$_GET[id]'");
 $data = mysqli_fetch_array($ambil);
 ?>
<head>
    <title>Preview Page</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body style="background-image: url(img/.jpg);">
<h2 class="tittle">Preview / Print</h2>
<a class="submit logout" href="logout.php">Logout</a>
<a class="submit kembali" href="history_g.php">Kembali</a>
<div class="box-cetak">
<table class="cetak">
        <input type="hidden" name="no_pembayaran" value="<?php echo $data['no_pembayaran']; ?>">
            <?php
            $ambil2 = mysqli_query($koneksi,"SELECT *FROM pembayaran");
            while ($data2 = mysqli_fetch_assoc($ambil2)) {
               }
            ?>
        <tr>
            <td>ID Pembayaran</td>
            <td>:</td>
            <td><?php echo $data['id_pembayaran']; ?></td>
        </tr>
        <tr>
            <td>ID SPP</td>
            <td>:</td>
            <td><?php echo $data['id_spp']; ?></td>
        </tr>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><?php echo $data['nis']; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $data['nama']; ?></td>
        </tr>
        <tr>
            <td>Tanggal Pembayaran</td>
            <td>:</td>
            <td><?php echo $data['tgl_bayar']; ?></td>
        </tr>
        <tr>
            <td>Bulan</td>
            <td>:</td>
            <td><?php echo $data['bulan_dibayar']; ?></td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td>:</td>
            <td><?php echo $data['tahun_dibayar']; ?></td>
        </tr>
        <tr>
            <td>Nominal</td>
            <td>:</td>
            <td><?php echo $data['jumlah_bayar']; ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><?php echo $data['status']; ?></td>
        </tr>
    </table>
    </div>
    <a onclick="window.print()"><input type="button" style="margin-left: 20%;" class="submit" value="Print"></a>
    </body>