<?php
session_start();
include 'koneksi.php';

$id_pembayaran = $_POST['id_pembayaran'];
$id_petugas = $_POST['id_petugas'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tgl_bayar = $_POST['tgl_bayar'];
$bulan_dibayar = $_POST['bulan_dibayar'];
$tahun_dibayar = $_POST['tahun_dibayar'];
$id_spp = $_POST['id_spp'];
$jumlah_bayar = $_POST['jumlah_bayar'];
$status = $_POST['status'];

$user = mysqli_query($koneksi,"SELECT id_spp from siswa where id_spp='$id_spp'");
$cek = mysqli_num_rows($user);

if($cek > 0){
    $sql ="insert into pembayaran(id_pembayaran,id_petugas,nis,nama,tgl_bayar,bulan_dibayar,tahun_dibayar,id_spp,jumlah_bayar,status) values('".$id_pembayaran."','".$id_petugas."','".$nis."','".$nama."','".$tgl_bayar."','".$bulan_dibayar."','".$tahun_dibayar."','".$id_spp."','".$jumlah_bayar."','".$status."')";
	$sql2="update spp set bulan='$_POST[bulan_dibayar]',tahun='$_POST[tahun_dibayar]',nominal='$_POST[jumlah_bayar]',status='$_POST[status]'WHERE id_spp='$_POST[id_spp]'";
	mysqli_query($koneksi,$sql);
	mysqli_query($koneksi,$sql2);
	echo "<script>alert('Pembayaran berhasil');
        window.location='history_a.php'</script>";
    }else{
        echo '<script type="text/javascript">
        alert("ID SPP yang anda masukkan Salah!");
        window.location="transaksi_a.php";
        </script>';
    }
?>