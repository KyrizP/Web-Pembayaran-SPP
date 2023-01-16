<?php
include 'koneksi.php';
$update = mysqli_query($koneksi,"UPDATE guru SET nik='$_POST[nik]',
    nama='$_POST[nama]',
    nik='$_POST[nik]',
    jabatan='$_POST[jabatan]',
    sarjana='$_POST[sarjana]',
    alamat='$_POST[alamat]',
    no_telp='$_POST[no_telp]'
    WHERE nik='$_POST[nik]'");

if($update){
    echo "<script>alert('Data Berhasil Di Edit');
        window.location='data_guru.php'</script>";
}else{
    echo "<script>alert('Data Gagal Di Edit');
        window.location='data_guru.php'</script>";
}
?>