<?php
include 'koneksi.php';
$delete = mysqli_query($koneksi,"DELETE FROM pembayaran WHERE no_pembayaran='$_GET[id]'");
if($delete){
    echo "<script>alert('Data Telah Dihapus');
        window.location='history_a.php'</script>";
}else{
    echo "<script>alert('Data Gagal Dihapus!');
        window.location='history_a.php'</script>";
}
?>