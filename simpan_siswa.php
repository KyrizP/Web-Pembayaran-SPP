<?php
include 'koneksi.php';

$nama_kelas = $_POST['nama_kelas'];
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$id_spp = $_POST['id_spp'];

$user = mysqli_query($koneksi,"SELECT nisn from siswa where nisn='$nisn'");
$cek = mysqli_num_rows($user);

if($cek > 0){
?>
    <script type="text/javascript">
        alert("NISN Sudah Ada");
        window.location="tambah_siswa.php";
    </script>
<?php
}else{
$insert = mysqli_query($koneksi,"INSERT INTO siswa VALUES('$_POST[nisn]','$_POST[nis]','$_POST[nama]','$_POST[nama_kelas]','$_POST[alamat]','$_POST[no_telp]','$_POST[id_spp]')");
if($insert){
    echo "<script>alert('Data Siswa telah ditambahkan');
        window.location='data_siswa.php'</script>";
}else{
    echo "<script>alert('Data Gagal ditambahkan!');
        window.location='tambah_siswa.php'</script>";
}
}
?>