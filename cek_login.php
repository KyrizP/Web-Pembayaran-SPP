<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"SELECT * FROM users WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);

    if($data['level']=="admin"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        echo "<script>alert('Selamat Datang Admin!');
        window.location='home_admin.php'</script>";

    }else if($data['level']=="guru"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "guru";
        echo "<script>alert('Selamat Datang di Laman Guru');
        window.location='home_guru.php'</script>";

    }else if($data['level']=="siswa"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "siswa";
        echo "<script>alert('Selamat Datang di Laman Siswa');
        window.location='home_siswa.php'</script>";
        
    }else{
        header("location:index.php?pesan=gagal");
    }
}else{
        header("location:index.php?pesan=gagal");
}
?>