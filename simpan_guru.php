<?php
session_start();
include 'koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$sarjana = $_POST['sarjana'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

$user = mysqli_query($koneksi,"SELECT nik from guru where nik='$nik'");
$cek = mysqli_num_rows($user);

if($cek > 0){
?>
    <script type="text/javascript">
        alert("NIK Sudah Ada");
        window.location="tambah_guru.php";
    </script>
<?php
}else{
$insert = mysqli_query($koneksi,"INSERT INTO guru VALUES('$_POST[nik]','$_POST[nama]','$_POST[jabatan]','$_POST[sarjana]','$_POST[alamat]','$_POST[no_telp]')");
if($insert){
    echo "<script>alert('Data Guru telah ditambahkan');
        window.location='data_guru.php'</script>";
}else{
    echo "<script>alert('Data Gagal ditambahkan!');
        window.location='tambah_guru.php'</script>";
}
}
?>