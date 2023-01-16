<?php
include 'koneksi.php';
$delete = mysqli_query($koneksi,"DELETE FROM siswa WHERE nisn='$_GET[id]'");
if($delete){
    echo "<script>alert('Data Telah Dihapus');
        window.location='data_siswa.php'</script>";
}else{
    echo "<script>alert('Data Gagal Dihapus!');
        window.location='data_siswa.php'</script>";
}
?>