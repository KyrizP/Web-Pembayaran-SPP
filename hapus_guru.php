<?php
include 'koneksi.php';
$delete = mysqli_query($koneksi,"DELETE FROM guru WHERE nik='$_GET[id]'");
if($delete){
    echo "<script>alert('Data Telah Dihapus');
        window.location='data_guru.php'</script>";
}else{
    echo "<script>alert('Data Gagal Dihapus!');
        window.location='data_guru.php'</script>";
}
?>