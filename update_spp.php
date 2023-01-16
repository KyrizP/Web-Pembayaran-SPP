<?php
include 'koneksi.php';
$update = mysqli_query($koneksi,"UPDATE spp SET no='$_POST[no]',
    nis='$_POST[nis]',
    bulan='$_POST[bulan]',
    tahun='$_POST[tahun]',
    nominal='$_POST[nominal]',
    status='$_POST[status]'
    WHERE no='$_POST[no]'");

if($update){
    echo "<script>alert('Data Berhasil Di Edit');
        window.location='data_spp.php'</script>";
}else{
    echo "<script>alert('Data Gagal Di Edit');
        window.location='data_spp.php'</script>";
}
?>