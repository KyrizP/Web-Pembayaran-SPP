<?php
include 'koneksi.php';
$update = mysqli_query($koneksi,"UPDATE kelas SET id_kelas='$_POST[id_kelas]',
    nama_kelas='$_POST[nama_kelas]',
    kompetensi_keahlian='$_POST[kompetensi_keahlian]'
    WHERE id_kelas='$_POST[id_kelas]'");

if($update){
    echo "<script>alert('Data Berhasil Di Edit');
        window.location='data_kelas.php'</script>";
}else{
    echo "<script>alert('Data Gagal Di Edit');
        window.location='data_kelas.php'</script>";
}
?>