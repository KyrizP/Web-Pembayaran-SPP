<?php
include 'koneksi.php';
$update = mysqli_query($koneksi,"UPDATE siswa SET id_kelas='$_POST[nama_kelas]',
    nama='$_POST[nama]',
    nis='$_POST[nis]',
    alamat='$_POST[alamat]',
    no_telp='$_POST[no_telp]',
    id_spp='$_POST[id_spp]'
    WHERE nisn='$_POST[nisn]'");

if($update){
    echo "<script>alert('Data Berhasil Di Edit');
        window.location='data_siswa.php'</script>";
}else{
    echo "<script>alert('Data Gagal Di Edit');
        window.location='data_siswa.php'</script>";
}
?>