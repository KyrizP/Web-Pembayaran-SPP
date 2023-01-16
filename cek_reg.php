<?php
session_start();
include 'koneksi.php';

$data_pendaftar = $_POST['data_pendaftar'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$username = $_POST['username'];
$level = $_POST['level'];

$user = mysqli_query($koneksi,"SELECT username from users where username='$username'");
$cek = mysqli_num_rows($user);

if($cek > 0){
?>
    <script type="text/javascript">
        alert("NIS/NIK Sudah Ada");
        window.location="register.php";
    </script>
<?php
}else{
    if($password1 == $password2){
	$sql ="insert into pendaftar(username_pendaftar,nama) values('".$username."','".$data_pendaftar."')";
	$sql2="insert into users(data_pendaftar,username,password,level) values('".$data_pendaftar."','".$username."','".$password1."','".$level."')";
	mysqli_query($koneksi,$sql);
	mysqli_query($koneksi,$sql2);
	echo "<script>alert('Selamat akun anda telah didaftarkan, Silahkan Login');
        window.location='index.php'</script>";
    }else{
        echo '<script type="text/javascript">
		    alert("Maaf Password yang Anda Ulang tidak sama");
		    window.location="register.php";
	    </script>';
    }
}
?>