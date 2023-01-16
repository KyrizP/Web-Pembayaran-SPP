<?php
include 'koneksi.php';

$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];

$user = mysqli_query($koneksi,"SELECT id_kelas from kelas where id_kelas='$id_kelas'");
$cek = mysqli_num_rows($user);

if($cek > 0){
?>
    <script type="text/javascript">
        alert("ID Kelas Sudah Ada");
        window.location="tambah_kelas.php";
    </script>
<?php
}else{
$insert = mysqli_query($koneksi,"INSERT INTO kelas VALUES('$_POST[id_kelas]','$_POST[nama_kelas]','$_POST[kompetensi_keahlian]')");
if($insert){
    echo "<script>alert('Data Kelas telah ditambahkan');
        window.location='data_kelas.php'</script>";
}else{
    echo "<script>alert('Data Gagal ditambahkan!');
        window.location='tambah_kelas.php'</script>";
}
}
?>