<!DOCTYPE html>
<html>
<head>
    <title>Login Site</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body style="background-image: url(img/doodleb2.jpg);">
    <h2 class="tittle"> Selamat Datang Di Web Pembayaran SPP </h2>
<div class="box-log">
    <h1 class="tittle">Silahkan Login</h1>
    <table>
    <form action="cek_login.php" method="post">
        <input type="text" name="username" class="username" placeholder="Masukkan NIK/NIS" required /><br>
        <input type="password" name="password" class="pass" placeholder="Masukkan Password" required/><br>
        <input type="submit" class="submit kanan" value="Login">
        <span style="float: left; margin-left: 75px; margin-top: 15px;">Belum Punya Akun?</span>
            <a style="float: right; margin-right: 75px; margin-top: 15px;" href="register.php">Registrasi</a>
	</div>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div class='alert'>NIS/NIK atau Password Salah!</div>";
        }
    }
    ?>
    </form>
    </table>
</div>
</body>
</html>
