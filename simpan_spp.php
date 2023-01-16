<?php
session_start();
include 'koneksi.php';

$id_spp = $_POST['id_spp'];
$nis = $_POST['nis'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];
$status = $_POST['status'];

$user = mysqli_query($koneksi,"SELECT id_spp from siswa where id_spp='$id_spp'");
$cek = mysqli_num_rows($user);

if($cek > 0){
    $sql ="insert into spp(id_spp,nis,bulan,tahun,nominal,status) values('".$id_spp."','".$nis."','".$bulan."','".$tahun."','".$nominal."','".$status."')";
	mysqli_query($koneksi,$sql);
	echo "<script>alert('Data SPP Berhasil Ditambahkan');
        window.location='data_spp.php'</script>";
    }else{
        echo '<script type="text/javascript">
		    alert("ID SPP Salah!");
		    window.location="tambah_spp.php";
	    </script>';
    }
?>

