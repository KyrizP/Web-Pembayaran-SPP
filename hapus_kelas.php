<?php
include 'koneksi.php';
$delete = mysqli_query($koneksi,"DELETE FROM kelas WHERE id_kelas='$_GET[id]'");
if($delete){
    echo "<script>alert('Data Telah Dihapus');
        window.location='data_kelas.php'</script>";
}else{
    echo "<script>alert('Data Gagal Dihapus!');
        window.location='data_kelas.php'</script>";
}
?>